<?php

namespace App\Console\Commands;

use App\Http\Repository\Category\CategoryRepositoryInterface;
use App\Http\Repository\Product\ProductRepositoryInterface;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class ProductsCron extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'products:import';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Import all products from CSV file';

    private $productRepository;
    private $categoryRepository;

    /**
     * Create a new command instance.
     *
     * @param ProductRepositoryInterface $productRepository
     * @param CategoryRepositoryInterface $categoryRepository
     */
    public function __construct(ProductRepositoryInterface $productRepository, CategoryRepositoryInterface $categoryRepository)
    {
        $this->productRepository = $productRepository;
        $this->categoryRepository = $categoryRepository;
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return mixed
     * @throws \Illuminate\Contracts\Filesystem\FileNotFoundException
     */
    public function handle()
    {
        $this->info("Rodando o comando TESTE");
        $files = Storage::disk('public')->allFiles();

        foreach ($files as $file) {
            $ext = explode(".", $file);
            $ext = end($ext);
            if ($ext === "csv") {
                $f = Storage::disk('public')->get($file);
                $this->doImport($f);
            }
        }
    }

    private function doImport($data)
    {
        $lines = explode("\n", $data);
        foreach ($lines as $i => $line) {
            if ($i == 0) {
                continue;
            }

            $cols = explode(";", $line);

            if (count($cols) == 3) {
                $category = $this->categoryRepository->getCategoryByName($cols[1]);
                $title = substr($cols[0], 0, 64);
                $data = [
                    'title' => $title,
                    'slug' => Str::slug($title),
                    'category_id' => $category->id,
                    'price' => $cols[2]
                ];
                $this->productRepository->persist($data);
            }
        }
    }
}

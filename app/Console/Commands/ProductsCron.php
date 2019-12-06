<?php

namespace App\Console\Commands;

use App\Http\Repository\Category\CategoryRepositoryInterface;
use App\Http\Repository\ImportProductSchedulers\ImportProductSchedulersRepositoryInterface;
use App\Http\Repository\Product\ProductRepositoryInterface;
use App\Http\Repository\User\UserRepositoryInterface;
use App\Mail\ImportedProducts;
use App\Models\User;
use Illuminate\Console\Command;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Support\Facades\Mail;
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
    private $importProductSchedulersRepository;
    private $userInterface;

    /**
     * Create a new command instance.
     *
     * @param ProductRepositoryInterface $productRepository
     * @param CategoryRepositoryInterface $categoryRepository
     * @param ImportProductSchedulersRepositoryInterface $importProductSchedulersRepository
     * @param UserRepositoryInterface $userInterface
     */
    public function __construct(
        ProductRepositoryInterface $productRepository,
        CategoryRepositoryInterface $categoryRepository,
        ImportProductSchedulersRepositoryInterface $importProductSchedulersRepository,
        UserRepositoryInterface $userInterface
    )
    {
        $this->productRepository = $productRepository;
        $this->categoryRepository = $categoryRepository;
        $this->importProductSchedulersRepository = $importProductSchedulersRepository;
        $this->userInterface = $userInterface;
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
        $this->info("Products importing has begun...");

        $users = $this->userInterface->getAll();
        $files = $this->getUserFiles($users);

        if(count($files) > 0) {
            foreach ($files as $file) {
                $file = $file[0];
                $ext = explode(".", $file->file_name);
                $ext = end($ext);

                $f = Storage::disk('local')->get("/csv/" . $file->file_name);
                $qty = $this->doImport($f);

                $this->importProductSchedulersRepository->destroy($file);
                Storage::disk('local')->delete("/csv/" . $file->file_name);

                Mail::to($file->user->email)->send(new ImportedProducts($file, $qty));
            }
            return;
        }

        $this->info("Done! No product was imported");
        return;
    }

    private function getUserFiles(Collection $users)
    {
        $files = [];
        foreach ($users as $user) {
            if(count($user->productImport) > 0) {
                $files[] = $user->productImport;
            }
        }

        return $files;
    }

    private function doImport($data)
    {
        $lines = explode("\n", $data);
        $qty = 0;
        foreach ($lines as $i => $line) {
            if ($i == 0) {
                $qty--;
                continue;
            }

            $cols = explode(";", $line);

            if (count($cols) == 3) {
                $category = $this->categoryRepository->getCategoryByName($cols[1]);
                $title = substr($cols[0], 0, 64);
                $this->info("Importing product " . $title);
                $data = [
                    'title' => $title,
                    'slug' => Str::slug($title),
                    'category_id' => $category->id,
                    'price' => $cols[2]
                ];
                $this->productRepository->persist($data);
            }
            $qty++;

        }

        return $qty;
    }
}

<?php

namespace App\Admin\Http\Controllers;

use App\Http\Repository\Category\CategoryRepositoryInterface;
use App\Http\Repository\Product\ProductRepositoryInterface;
use App\Http\Requests\ProductRequest;
use App\Http\Services\ImageUploadTrait;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends AdminController
{
    use ImageUploadTrait;

    private $productRepository;
    private $categoryRepository;
    private $categories;

    public function __construct(ProductRepositoryInterface $productRepository, CategoryRepositoryInterface $categoryRepository)
    {
        $this->productRepository = $productRepository;
        $this->categoryRepository = $categoryRepository;
        parent::__construct();
    }

    public function callAction($method, $parameters)
    {
        if (in_array($method, ['create', 'edit'])) {
            $this->getCategories();
        }
        return parent::callAction($method, $parameters);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $search = $request->get('q');
        $products = $this->productRepository->getAll($search, $this->productRepository::MAX_ITEMS_PER_PAGE);

        return view('admin.product.index', [
            'products' => $products,
            'search' => $search
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $product = new Product();
        return view("admin.product.create", [
            'product' => $product,
            'categories' => $this->categories
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param ProductRequest $request
     * @return void
     */
    public function store(ProductRequest $request)
    {
        $data = $request->all();
        $data['photo'] = $this->handleUploadImage($request->file('photo'), 800, 800);
        $this->productRepository->persist($data);
        $request->session()->flash('success', 'The Product has saved successfully!');
        return redirect()->route('admin.products.index');
    }

    /**
     * Display the specified resource.
     *
     * @param \App\Product $product
     * @return \Illuminate\Http\Response
     */
    public function show(Product $product)
    {
        return view("admin.product.show", [
            'product' => $product
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param \App\Product $product
     * @return \Illuminate\Http\Response
     */
    public function edit(Product $product)
    {
        return view('admin.product.edit', [
            'product' => $product,
            'categories' => $this->categories
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param \App\Models\Product $product
     * @return \Illuminate\Http\Response
     */
    public function update(ProductRequest $request, Product $product)
    {
        $data = $request->all();

        if (file_exists(public_path($this->path . $product->photo))) {
            unlink(public_path($this->path . $product->photo));
        }

        $data['photo'] = $this->handleUploadImage($request->file('photo'), 800, 800);
        $this->productRepository->persist($data, $product->id);
        $request->session()->flash('success', 'The Product has updated successfully!');
        return redirect()->route('admin.products.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param ProductRequest $request
     * @param Product $product
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, Product $product)
    {
        if (!$this->productRepository->destroy($product)) {
            if (file_exists(public_path($this->path . $product->photo))) {
                unlink(public_path($this->path . $product->photo));
            }
            $request->session()->flash('danger', 'Any error happing while delete product');
            return redirect()->route('admin.products.index');
        }

        $request->session()->flash('success', 'The Product has deleted successfully!');
        return redirect()->route('admin.products.index');
    }

    private function getCategories()
    {
        $this->categories = $this->categoryRepository->getAll()->pluck('name', 'id');
    }

    public function importProduct()
    {

    }

}

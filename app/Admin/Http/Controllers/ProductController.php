<?php

namespace App\Admin\Http\Controllers;

use App\Http\Repository\Category\CategoryRepositoryInterface;
use App\Http\Repository\Product\ProductRepositoryInterface;
use App\Http\Requests\ProductRequest;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends AdminController
{
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
        if (in_array($method, ['create', 'update'])) {
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
        $this->productRepository->create($request->all());
    }

    /**
     * Display the specified resource.
     *
     * @param \App\Product $product
     * @return \Illuminate\Http\Response
     */
    public function show(Product $product)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param \App\Product $product
     * @return \Illuminate\Http\Response
     */
    public function edit(Product $product)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param \App\Product $product
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Product $product)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param \App\Product $product
     * @return \Illuminate\Http\Response
     */
    public function destroy(Product $product)
    {
        //
    }

    private function getCategories()
    {
        $this->categories = $this->categoryRepository->getAll()->pluck('name', 'id');
    }

}

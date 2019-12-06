<?php

namespace App\Http\Controllers;

use App\Http\Repository\Product\ProductRepository;
use App\Http\Repository\Product\ProductRepositoryInterface;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    private $productRepository;

    public function __construct(ProductRepositoryInterface $productRepository)
    {
        $this->productRepository = $productRepository;
    }

    public function index(Request $request)
    {
        return $this->productRepository->getAll(null, ProductRepository::MAX_ITEMS_PER_PAGE, ['created_at', 'desc']);
    }
}

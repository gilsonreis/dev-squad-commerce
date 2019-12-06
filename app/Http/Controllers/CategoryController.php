<?php

namespace App\Http\Controllers;

use App\Http\Repository\Category\CategoryRepositoryInterface;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    private $categoryRepository;

    public function __construct(CategoryRepositoryInterface $categoryRepository)
    {
        $this->categoryRepository = $categoryRepository;
    }

    public function index()
    {
        return $this->categoryRepository->getAll();
    }
}

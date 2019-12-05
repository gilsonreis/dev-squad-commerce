<?php


namespace App\Http\Repository\Category;


use App\Models\Category;
use Illuminate\Database\Eloquent\Collection;

class CategoryRepository implements CategoryRepositoryInterface
{
    public function getAll(): Collection
    {
        return Category::orderBy('name', 'asc')->get();
    }
}

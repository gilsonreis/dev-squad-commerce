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

    public function getCategoryByName(string $name): Category
    {
        return Category::where('name', $name)->first();
    }
}

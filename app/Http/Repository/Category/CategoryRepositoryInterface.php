<?php


namespace App\Http\Repository\Category;


use Illuminate\Database\Eloquent\Collection;

interface CategoryRepositoryInterface
{
    public function getAll(): Collection;
    public function getCategoryByName(string $name);
}

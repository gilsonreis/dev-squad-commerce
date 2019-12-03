<?php


namespace App\Http\Repository\Product;


use Illuminate\Database\Eloquent\Collection;

interface ProductRepositoryInterface
{
    public function getAll(): Collection;
}

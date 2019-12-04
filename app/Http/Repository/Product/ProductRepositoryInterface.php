<?php


namespace App\Http\Repository\Product;


use Illuminate\Pagination\LengthAwarePaginator;

interface ProductRepositoryInterface
{
    public function getAll(?string $search, int $maxItemsPerPage): LengthAwarePaginator;
    public function create(array $data);
}

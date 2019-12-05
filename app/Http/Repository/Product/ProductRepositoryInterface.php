<?php


namespace App\Http\Repository\Product;


use App\Models\Product;
use Illuminate\Pagination\LengthAwarePaginator;

interface ProductRepositoryInterface
{
    public function getAll(?string $search, int $maxItemsPerPage): LengthAwarePaginator;
    public function persist(array $data, int $id = null);
    public function destroy(Product $product): bool;
}

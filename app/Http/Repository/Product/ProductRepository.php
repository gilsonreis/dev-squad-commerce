<?php


namespace App\Http\Repository\Product;


use App\Models\Product;
use Illuminate\Pagination\LengthAwarePaginator;

class ProductRepository implements ProductRepositoryInterface
{
    const MAX_ITEMS_PER_PAGE = 10;

    public function getAll(?string $search, int $maxItemsPerPage): LengthAwarePaginator
    {
        if(!is_null($search)) {
            return Product::where('title', 'like', '%' . $search . '%')
                ->orderBy("title", 'asc')
                ->paginate($maxItemsPerPage)
                ->appends(['q' => $search]);
        }

        return Product::orderBy('title', 'desc')
            ->paginate($maxItemsPerPage);
    }
}

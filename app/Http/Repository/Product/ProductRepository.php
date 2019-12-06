<?php


namespace App\Http\Repository\Product;


use App\Models\Product;
use Illuminate\Pagination\LengthAwarePaginator;
use Illuminate\Support\Str;

class ProductRepository implements ProductRepositoryInterface
{
    const MAX_ITEMS_PER_PAGE = 10;

    public function getAll(?string $search, int $maxItemsPerPage, array $order = ['title', 'asc']): LengthAwarePaginator
    {
        if(!is_null($search)) {
            return Product::where('title', 'like', '%' . $search . '%')
                ->orderBy($order[0], $order[1])
                ->paginate($maxItemsPerPage)
                ->appends(['q' => $search]);
        }

        return Product::orderBy($order[0], $order[1])
            ->paginate($maxItemsPerPage);
    }

    public function persist(array $data, int $id = null): void
    {
        if(is_null($id)) {
            Product::create($data);
        } else {
            $product = Product::findOrFail($id);
            $product->fill($data);
            $product->save();
        }
    }

    public function destroy(Product $product): bool
    {
        return $product->delete();
    }
}

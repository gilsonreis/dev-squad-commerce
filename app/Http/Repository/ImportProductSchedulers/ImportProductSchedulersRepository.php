<?php


namespace App\Http\Repository\ImportProductSchedulers;


use App\Models\ImportProductSchedulers;
use Illuminate\Database\Eloquent\Collection;

class ImportProductSchedulersRepository implements ImportProductSchedulersRepositoryInterface
{

    public function getAllByUser(int $user_id): Collection
    {
        return ImportProductSchedulers::where("user_id", $user_id)->get();
    }

    public function persist(array $data): void
    {
        ImportProductSchedulers::create($data);
    }

    public function destroy(ImportProductSchedulers $file): bool
    {
        return $file->delete();
    }
}

<?php


namespace App\Http\Repository\ImportProductSchedulers;


use App\Models\ImportProductSchedulers;
use Illuminate\Database\Eloquent\Collection;

interface ImportProductSchedulersRepositoryInterface
{
    public function getAllByUser(int $user): Collection;
    public function persist(array $data): void;
    public function destroy(ImportProductSchedulers $file): bool;
}

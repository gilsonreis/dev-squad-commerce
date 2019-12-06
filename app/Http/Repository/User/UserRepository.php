<?php


namespace App\Http\Repository\User;


use App\Models\Category;
use App\Models\User;
use Illuminate\Database\Eloquent\Collection;

class UserRepository implements UserRepositoryInterface
{

    public function getAll(): Collection
    {
        return User::all();
    }
}

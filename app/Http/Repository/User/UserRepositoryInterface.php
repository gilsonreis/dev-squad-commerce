<?php


namespace App\Http\Repository\User;


use Illuminate\Database\Eloquent\Collection;

interface UserRepositoryInterface
{
    public function getAll(): Collection;
}

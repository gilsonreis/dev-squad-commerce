<?php

namespace App\Providers;

use App\Http\Repository\Category\CategoryRepository;
use App\Http\Repository\Category\CategoryRepositoryInterface;
use App\Http\Repository\ImportProductSchedulers\ImportProductSchedulersRepository;
use App\Http\Repository\ImportProductSchedulers\ImportProductSchedulersRepositoryInterface;
use App\Http\Repository\Product\ProductRepository;
use App\Http\Repository\Product\ProductRepositoryInterface;
use App\Http\Repository\User\UserRepository;
use App\Http\Repository\User\UserRepositoryInterface;
use App\Models\Product;
use App\Observers\ProductObserver;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind(ProductRepositoryInterface::class, ProductRepository::class);
        $this->app->bind(CategoryRepositoryInterface::class, CategoryRepository::class);
        $this->app->bind(ImportProductSchedulersRepositoryInterface::class, ImportProductSchedulersRepository::class);
        $this->app->bind(UserRepositoryInterface::class, UserRepository::class);
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        Product::observe(ProductObserver::class);
    }
}

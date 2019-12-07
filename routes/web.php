<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', 'HomeController@index')->name('home');

// Authentication Routes...
Auth::routes(['register' => false, 'reset' => false]);
Route::get('admin/login', 'Auth\LoginController@showLoginForm')->name('login');
Route::post('admin/login', 'Auth\LoginController@login');
Route::post('admin/logout', 'Auth\LoginController@logout')->name('logout');


Route::prefix('admin')->name('admin.')->group(function () {
    Route::get("/import-products-csv", '\App\Admin\Http\Controllers\ProductController@importProduct')->name('products.import_csv');
    Route::post("/import-products-csv", '\App\Admin\Http\Controllers\ProductController@importProductStore')->name('products.import_csv_store');
    Route::get('/', '\App\Admin\Http\Controllers\DashboardController@index')->name('index');
    Route::get("/dashboard/teste", '\App\Admin\Http\Controllers\DashboardController@teste');
    Route::resource('products', '\App\Admin\Http\Controllers\ProductController');
});

Route::prefix('api')->name('api.')->group(function () {
    Route::get('/categories', 'CategoryController@index')->name("category.index");
    Route::get('/products', 'ProductController@index')->name("product.index");
});

Route::get("/product/{slug}", 'ProductController@show')->name("product.index");

<?php

/** @var Factory $factory */

use App\Models\Product;
use Carbon\Carbon;
use Faker\Generator as Faker;
use Illuminate\Database\Eloquent\Factory;
use Illuminate\Support\Str;

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| This directory should contain each of the model factory definitions for
| your application. Factories provide a convenient way to generate new
| model instances for testing / seeding your application's database.
|
*/

$factory->define(Product::class, function (Faker $faker) {
    $title = substr($faker->sentence(), 0, 64);
    $slug = Str::slug($title);
    return [
        'title' => $title,
        'slug' => $slug,
        'description' =>  $faker->text(500),
        'price' => $faker->numberBetween(30, 9999),
        'category_id' => $faker->numberBetween(1, 5),
        'created_at' => Carbon::now(),
    ];
});

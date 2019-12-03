<?php

use Illuminate\Database\Seeder;

class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $categories = [
            [
                'name' => 'Toys'
            ],
            [
                'name' => 'Shoes'
            ],
            [
                'name' => 'Music'
            ],
            [
                'name' => 'Health'
            ],
            [
                'name' => 'Electronics'
            ],
        ];

        DB::table('categories')->insert($categories);
    }
}

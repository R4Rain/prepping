<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategoryDetailSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('category_details')->insert([
            [
                'category_id' => 7,
                'recipe_id' => 1,
            ],
            [
                'category_id' => 15,
                'recipe_id' => 1,
            ],
            [
                'category_id' => 2,
                'recipe_id' => 2,
            ],
            [
                'category_id' => 3,
                'recipe_id' => 3,
            ],
            [
                'category_id' => 5,
                'recipe_id' => 3,
            ],
            [
                'category_id' => 21,
                'recipe_id' => 4,
            ],
            [
                'category_id' => 18,
                'recipe_id' => 4,
            ],
            [
                'category_id' => 10,
                'recipe_id' => 5,
            ],
            [
                'category_id' => 18,
                'recipe_id' => 6,
            ],
            [
                'category_id' => 19,
                'recipe_id' => 7,
            ],
            [
                'category_id' => 21,
                'recipe_id' => 7,
            ],
            [
                'category_id' => 5,
                'recipe_id' => 8,
            ],
            [
                'category_id' => 8,
                'recipe_id' => 8,
            ],
            [
                'category_id' => 13,
                'recipe_id' => 8,
            ],
            [
                'category_id' => 11,
                'recipe_id' => 9,
            ],
            [
                'category_id' => 3,
                'recipe_id' => 10,
            ],
            [
                'category_id' => 6,
                'recipe_id' => 11,
            ],
            [
                'category_id' => 25,
                'recipe_id' => 12,
            ],
            [
                'category_id' => 24,
                'recipe_id' => 13,
            ],
            [
                'category_id' => 14,
                'recipe_id' => 14,
            ],
            [
                'category_id' => 20,
                'recipe_id' => 14,
            ],
            [
                'category_id' => 9,
                'recipe_id' => 15,
            ],
            [
                'category_id' => 17,
                'recipe_id' => 15,
            ],
        ]);
    }
}

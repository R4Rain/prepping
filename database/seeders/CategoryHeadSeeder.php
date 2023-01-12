<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategoryHeadSeeder extends Seeder
{
    public function run()
    {
        DB::table('category_heads')->insert([
            [ 'name' => 'Baking' ],
            [ 'name' => 'Cuisine' ],
            [ 'name' => 'Main Ingredient' ],
            [ 'name' => 'Meals' ],
            [ 'name' => 'Occasions' ],
        ]);
    }
}

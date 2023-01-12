<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategorySeeder extends Seeder
{
    public function run()
    {
        DB::table('categories')->insert([
            [
                'category_head_id' => 1,
                'name' => 'Afternoon Tea'
            ],
            [
                'category_head_id' => 1,
                'name' => 'Biscuit'
            ],
            [
                'category_head_id' => 1,
                'name' => 'Brownies'
            ],
            [
                'category_head_id' => 1,
                'name' => 'Cake'
            ],
            [
                'category_head_id' => 1,
                'name' => 'Cookie'
            ],
            [
                'category_head_id' => 1,
                'name' => 'Dough & Bread'
            ],
            [
                'category_head_id' => 1,
                'name' => 'Pastry & Pie'
            ],
            [
                'category_head_id' => 2,
                'name' => 'African'
            ],
            [
                'category_head_id' => 2,
                'name' => 'Americas'
            ],
            [
                'category_head_id' => 2,
                'name' => 'Asian'
            ],
            [
                'category_head_id' => 2,
                'name' => 'European'
            ],
            [
                'category_head_id' => 2,
                'name' => 'Oceanic'
            ],
            [
                'category_head_id' => 3,
                'name' => 'Beef'
            ],
            [
                'category_head_id' => 3,
                'name' => 'Chicken'
            ],
            [
                'category_head_id' => 3,
                'name' => 'Eggs'
            ],
            [
                'category_head_id' => 3,
                'name' => 'Fish'
            ],
            [
                'category_head_id' => 3,
                'name' => 'Fruit'
            ],
            [
                'category_head_id' => 3,
                'name' => 'Lamb'
            ],
            [
                'category_head_id' => 3,
                'name' => 'Prawn'
            ],
            [
                'category_head_id' => 3,
                'name' => 'Rice'
            ],
            [
                'category_head_id' => 3,
                'name' => 'Vegetables'
            ],
            [
                'category_head_id' => 4,
                'name' => 'Breakfast & Brunch'
            ],
            [
                'category_head_id' => 4,
                'name' => 'Desserts'
            ],
            [
                'category_head_id' => 4,
                'name' => 'Dinner'
            ],
            [
                'category_head_id' => 4,
                'name' => 'Drinks'
            ],
            [
                'category_head_id' => 4,
                'name' => 'Lunch'
            ],
            [
                'category_head_id' => 4,
                'name' => 'Side Dishes'
            ],
            [
                'category_head_id' => 5,
                'name' => 'Chinese New Year'
            ],
            [
                'category_head_id' => 5,
                'name' => 'Christmas'
            ],
            [
                'category_head_id' => 5,
                'name' => 'Eid Al-Fitr'
            ],
            [
                'category_head_id' => 5,
                'name' => 'Halloween'
            ],
            [
                'category_head_id' => 5,
                'name' => 'New Year'
            ],
            [
                'category_head_id' => 5,
                'name' => "Valentine's Day"
            ],
        ]);
    }
}

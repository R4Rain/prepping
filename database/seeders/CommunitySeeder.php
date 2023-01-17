<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CommunitySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('communities')->insert([
            [
                'user_id' => 2,
                'name' => 'Meat Lovers',
                'photo' => 'meat-lovers.jpg',
                'description' => 'Beef, Drink, and Laugh. We exist to exalt the act of gathering, and dining',
            ],
            [
                'user_id' => 3,
                'name' => 'The Vegetarian',
                'photo' => 'vegan-logo.png',
                'description' => 'The Vegetarian inspires and supports people in making the shift to vegetarian and vegan diets and lifestyles.',
            ]
        ]);
    }
}

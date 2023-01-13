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
                'name' => 'Biscuit',
                'photo' => 'Biscuit.jpg'
            ],
            [
                'name' => 'Cake',
                'photo' => 'Cake.jpg'
            ],
            [
                'name' => 'Cookie',
                'photo' => 'Cookie.jpg'
            ],
            [
                'name' => 'Dough & Bread',
                'photo' => 'Dough & Bread.jpg'
            ],
            [
                'name' => 'Pastry & Pie',
                'photo' => 'Pastry & Pie.jpg'
            ],
            [
                'name' => 'African',
                'photo' => 'African.jpg'
            ],
            [
                'name' => 'Americas',
                'photo' => 'Americas.jpg'
            ],
            [
                'name' => 'Asian',
                'photo' => 'Asian.jpg'
            ],
            [
                'name' => 'European',
                'photo' => 'European.jpg'
            ],
            [
                'name' => 'Beef',
                'photo' => 'Beef.jpg'
            ],
            [
                'name' => 'Chicken',
                'photo' => 'Chicken.jpg'
            ],
            [
                'name' => 'Fish',
                'photo' => 'Fish.jpg'
            ],
            [
                'name' => 'Fruit',
                'photo' => 'Fruit.jpg'
            ],
            [
                'name' => 'Lamb',
                'photo' => 'Lamb.jpg'
            ],
            [
                'name' => 'Prawn',
                'photo' => 'Prawn.jpg'
            ],
            [
                'name' => 'Rice',
                'photo' => 'Rice.jpg'
            ],
            [
                'name' => 'Vegetables',
                'photo' => 'Vegetables.jpg'
            ],
            [
                'name' => 'Breakfast & Brunch',
                'photo' => 'Breakfast & Brunch.jpg'
            ],
            [
                'name' => 'Desserts',
                'photo' => 'Desserts.jpg'
            ],
            [
                'name' => 'Dinner',
                'photo' => 'Dinner.jpg'
            ],
            [
                'name' => 'Drinks',
                'photo' => 'Drinks.jpg'
            ],
            [
                'name' => 'Lunch',
                'photo' => 'Lunch.jpg'
            ],
            [
                'name' => 'Christmas',
                'photo' => 'Christmas.jpg'
            ],
            [
                'name' => 'Eid Al-Fitr',
                'photo' => 'Eid Al-Fitr.jpg'
            ],
            [
                'name' => 'Halloween',
                'photo' => 'Halloween.jpg'
            ],
            [
                'name' => "Valentine's Day",
                'photo' => "Valentine's Day.jpg"
            ],
        ]);
    }
}

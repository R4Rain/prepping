<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CourseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('courses')->insert([
            [
                'title' => 'Basics of Home Cooking for Beginners',
                'photo' => 'simple-basic-for-cooking.jpg',
                'description' => "Whether you need a crash course on cooking for beginners or just want a little refresher on a few cooking techniques that you still haven't mastered, it’s always a good time to get back to the basics. Consider this your Cooking 101 class, where you’ll learn the tricks and techniques that’ll help you make every meal even better.",
                'estimated_finish' => 2,
            ],
            [
                'title' => 'How to pick your first recipe',
                'photo' => 'pick-first-recipe.jpg',
                'description' => 'Every guide like this starts out with the same advice: Read the recipe all the way to the end before you start cooking anything. That’s because even if it feels like kind of a cop move to read and follow the recipe, actually doing so removes much of the stress you might associate with cooking — which often happens when the pan is searing hot and you realize you need soy sauce right that second. Read the ingredients list too! It tells a story, and all too often hides some of the prep, like chopping onions or grating cheese or even entire sub-recipes (maybe skip anything with sub-recipes). If there’s a term you don’t understand, google it. Almost every mysterious recipe term has been clearly defined online now.',
                'estimate_finish' => 1,
            ],
        ]);
    }
}

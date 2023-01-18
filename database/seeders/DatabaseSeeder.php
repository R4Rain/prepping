<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run()
    {
        $this->call([
            UserSeeder::class,
            CategorySeeder::class,
            CollectionSeeder::class,
            RecipeSeeder::class,
            CategoryDetailSeeder::class,
            CourseSeeder::class,
            LessonSeeder::class,
            CommunitySeeder::class,
            CommunityDetailSeeder::class,
        ]);
    }
}

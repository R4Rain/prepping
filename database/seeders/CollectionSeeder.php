<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CollectionSeeder extends Seeder
{
    public function run()
    {
        DB::table('collections')->insert([
            [
                'user_id' => 1,
                'name' => 'My Favorite'
            ],
            [
                'user_id' => 2,
                'name' => 'My Favorite'
            ],
            [
                'user_id' => 3,
                'name' => 'My Favorite'
            ],
            [
                'user_id' => 4,
                'name' => 'My Favorite'
            ]
        ]);
    }
}

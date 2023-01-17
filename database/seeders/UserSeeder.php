<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    public function run()
    {
        DB::table('users')->insert([
            [
                'role' => 'ADMIN',
                'name' => 'Admin',
                'photo' => null,
                'email' => 'admin@prepping.com',
                'password' => Hash::make('admin123')
            ],
            [
                'role' => 'CUSTOMER',
                'name' => 'Blu Robbins',
                'photo' => 'Blu Robbins.jpg',
                'email' => 'blu@gmail.com',
                'password' => Hash::make('abc123')
            ],
            [
                'role' => 'CUSTOMER',
                'name' => 'Song Hye Kyo',
                'photo' => 'Song Hye Kyo.jpg',
                'email' => 'song@gmail.com',
                'password' => Hash::make('abc123')
            ],
            [
                'role' => 'CUSTOMER',
                'name' => 'Taya Reese',
                'photo' => 'Taya Reese.jpg',
                'email' => 'taya@gmail.com',
                'password' => Hash::make('abc123')
            ]
        ]);
    }
}

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
                'email' => 'admin@prepping.com',
                'password' => Hash::make('admin123')
            ],
            [
                'role' => 'CUSTOMER',
                'name' => 'Blu Robbins',
                'email' => 'blu@gmail.com',
                'password' => Hash::make('abc123')
            ],
            [
                'role' => 'CUSTOMER',
                'name' => 'Aryan Morse',
                'email' => 'aryan@gmail.com',
                'password' => Hash::make('abc123')
            ],
            [
                'role' => 'CUSTOMER',
                'name' => 'Taya Reese',
                'email' => 'taya@gmail.com',
                'password' => Hash::make('abc123')
            ]
        ]);
    }
}

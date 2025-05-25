<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('users')->insert([
            [
                'name' => 'Admin User',
                'email' => 'admin@test.com',
                'password' => Hash::make('password'),
                'photo' => null,
                'phone' => '12345678',
                'address' => '123 Admin Street',
                'role' => 'admin',
                'status' => '1',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Instructor User',
                'email' => 'instructor@test.com',
                'password' => Hash::make('password'),
                'photo' => null,
                'phone' => '12345678',
                'address' => '123 instructor Street',
                'role' => 'instructor',
                'status' => '1',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Regular User',
                'email' => 'user@test.com',
                'password' => Hash::make('password'),
                'photo' => null,
                'phone' => '12345678',
                'address' => '123 regular user Street',
                'role' => 'user',
                'status' => '1',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}

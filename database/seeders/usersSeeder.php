<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class usersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('hr_users')->insert([
            [
                'first_name' => 'John',
                'last_name' => 'Doe',
                'email' => 'bushrasalah661@gmail.com',
                'password' => Hash::make('123456'),
                'role' => 'admin',
                'status' => 'active',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}

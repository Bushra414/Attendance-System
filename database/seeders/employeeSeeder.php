<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class employeeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $employees = [];
        for ($i = 1; $i <= 50; $i++) {
            $employees[] = [
                'first_name' => 'FirstName' . $i,
                'last_name' => 'LastName' . $i,
                'email' => 'employee' . $i . '@example.com',
                'fingerprint_data' => null,
                'positions_id' => rand(1, 5),
                'status_id' => rand(1, 3),
                'shift_id' => rand(1, 5),
                'created_at' => now(),
                'updated_at' => now(),
            ];
        }
        DB::table('employees')->insert($employees);
    }
}

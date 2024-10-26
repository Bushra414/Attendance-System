<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class shiftSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $shifts = [
            [
                'id' => 1,
                'name' => 'Nurse 24-Hour Shift Group A',
                'start_time' => '07:30:00',
                'end_time' => '07:30:00',
                'days_of_week' => 'Sunday,Tuesday,Thursday,Saturday',
            ],
            [
                'id' => 2,
                'name' => 'Nurse 24-Hour Shift Group B',
                'start_time' => '07:30:00',
                'end_time' => '07:30:00',
                'days_of_week' => 'Monday,Wednesday,Friday',
            ],
            [
                'id' => 3,
                'name' => 'Doctor 24-Hour Shift',
                'start_time' => '07:30:00',
                'end_time' => '07:30:00',
                'days_of_week' => 'Sunday,Monday,Tuesday,Wednesday,Thursday,Saturday,Friday',  // Adjust as needed for each doctor’s day
            ],
            [
                'id' => 4,
                'name' => '16-Hour Shift',
                'start_time' => '15:30:00',
                'end_time' => '07:30:00',
                'days_of_week' => 'Sunday,Tuesday,Thursday,Saturday',
            ],
            [
                'id' => 5,
                'name' => '8-Hour Day Shift',
                'start_time' => '07:30:00',
                'end_time' => '15:30:00',
                'days_of_week' => 'Sunday,Monday,Tuesday,Wednesday,Thursday,Saturday',
            ],
        ];
        DB::table('shift_assignments')->insert($shifts);
    }
}

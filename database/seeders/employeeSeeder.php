<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class employeeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $employees = [
            [
                'id' => 1,
                'first_name' => 'John',
                'last_name' => 'Doe',
                'email' => 'john.doe@example.com',
                'fingerprint_data' => NULL,
                'positions_id' => 1,
                'department' => 'Cardiology',
                'status_id' => 1,
                'shift_id' => $this->getShiftId(1),
                'created_at' => '2024-08-27 09:44:00',
                'updated_at' => '2024-08-27 09:44:00'
            ],
            [
                'id' => 2,
                'first_name' => 'Jane',
                'last_name' => 'Smith',
                'email' => 'jane.smith@example.com',
                'fingerprint_data' => NULL,
                'positions_id' => 2,
                'department' => 'Pediatrics',
                'status_id' => 1,
                'shift_id' => $this->getShiftId(2),
                'created_at' => '2024-08-27 09:44:00',
                'updated_at' => '2024-08-27 09:44:00'
            ],
            [
                'id' => 3,
                'first_name' => 'Michael',
                'last_name' => 'Johnson',
                'email' => 'michael.johnson@example.com',
                'fingerprint_data' => NULL,
                'positions_id' => 3,
                'department' => 'Surgery',
                'status_id' => 1,
                'shift_id' => $this->getShiftId(3),
                'created_at' => '2024-08-27 09:44:00',
                'updated_at' => '2024-08-27 09:44:00'
            ],
            [
                'id' => 4,
                'first_name' => 'Emily',
                'last_name' => 'Davis',
                'email' => 'emily.davis@example.com',
                'fingerprint_data' => NULL,
                'positions_id' => 1,
                'department' => 'Cardiology',
                'status_id' => 1,
                'shift_id' => $this->getShiftId(1),
                'created_at' => '2024-08-27 09:44:00',
                'updated_at' => '2024-08-27 09:44:00'
            ],
            [
                'id' => 5,
                'first_name' => 'William',
                'last_name' => 'Miller',
                'email' => 'william.miller@example.com',
                'fingerprint_data' => NULL,
                'positions_id' => 2,
                'department' => 'Emergency',
                'status_id' => 1,
                'shift_id' => $this->getShiftId(2),
                'created_at' => '2024-08-27 09:44:00',
                'updated_at' => '2024-08-27 09:44:00'
            ],
            [
                'id' => 6,
                'first_name' => 'Sarah',
                'last_name' => 'Taylor',
                'email' => 'sarah.taylor@example.com',
                'fingerprint_data' => NULL,
                'positions_id' => 3,
                'department' => 'Neurology',
                'status_id' => 1,
                'shift_id' => $this->getShiftId(3),
                'created_at' => '2024-08-27 09:44:00',
                'updated_at' => '2024-08-27 09:44:00'
            ],
            [
                'id' => 7,
                'first_name' => 'Olivia',
                'last_name' => 'Hernandez',
                'email' => 'olivia.hernandez@example.com',
                'fingerprint_data' => NULL,
                'positions_id' => 1,
                'department' => 'Oncology',
                'status_id' => 1,
                'shift_id' => $this->getShiftId(1),
                'created_at' => '2024-08-27 09:44:00',
                'updated_at' => '2024-08-27 09:44:00'
            ],
            [
                'id' => 8,
                'first_name' => 'Benjamin',
                'last_name' => 'Martin',
                'email' => 'benjamin.martin@example.com',
                'fingerprint_data' => NULL,
                'positions_id' => 2,
                'department' => 'Orthopedics',
                'status_id' => 1,
                'shift_id' => $this->getShiftId(2),
                'created_at' => '2024-08-27 09:44:00',
                'updated_at' => '2024-08-27 09:44:00'
            ],
            [
                'id' => 9,
                'first_name' => 'Ava',
                'last_name' => 'Thompson',
                'email' => 'ava.thompson@example.com',
                'fingerprint_data' => NULL,
                'positions_id' => 3,
                'department' => 'Gastroenterology',
                'status_id' => 1,
                'shift_id' => $this->getShiftId(3),
                'created_at' => '2024-08-27 09:44:00',
                'updated_at' => '2024-08-27 09:44:00'
            ],
            [
                'id' => 10,
                'first_name' => 'Isabella',
                'last_name' => 'White',
                'email' => 'isabella.white@example.com',
                'fingerprint_data' => NULL,
                'positions_id' => 1,
                'department' => 'Dermatology',
                'status_id' => 1,
                'shift_id' => $this->getShiftId(1),
                'created_at' => '2024-08-27 09:44:00',
                'updated_at' => '2024-08-27 09:44:00'
            ],
            [
                'id' => 11,
                'first_name' => 'Ethan',
                'last_name' => 'Hall',
                'email' => 'ethan.hall@example.com',
                'fingerprint_data' => NULL,
                'positions_id' => 2,
                'department' => 'Urology',
                'status_id' => 1,
                'shift_id' => $this->getShiftId(2),
                'created_at' => '2024-08-27 09:44:00',
                'updated_at' => '2024-08-27 09:44:00'
            ],
            [
                'id' => 12,
                'first_name' => 'Liam',
                'last_name' => 'Lee',
                'email' => 'liam.lee@example.com',
                'fingerprint_data' => NULL,
                'positions_id' => 3,
                'department' => 'Nephrology',
                'status_id' => 1,
                'shift_id' => $this->getShiftId(3),
                'created_at' => '2024-08-27 09:44:00',
                'updated_at' => '2024-08-27 09:44:00'
            ],
            [
                'id' => 13,
                'first_name' => 'Noah',
                'last_name' => 'Kim',
                'email' => 'noah.kim@example.com',
                'fingerprint_data' => NULL,
                'positions_id' => 1,
                'department' => 'Endocrinology',
                'status_id' => 1,
                'shift_id' => $this->getShiftId(1),
                'created_at' => '2024-08-27 09:44:00',
                'updated_at' => '2024-08-27 09:44:00'
            ],
            [
                'id' => 14,
                'first_name' => 'Elijah',
                'last_name' => 'Patel',
                'email' => 'elijah.patel@example.com',
                'fingerprint_data' => NULL,
                'positions_id' => 2,
                'department' => 'Rheumatology',
                'status_id' => 1,
                'shift_id' => $this->getShiftId(2),
                'created_at' => '2024-08-27 09:44:00',
                'updated_at' => '2024-08-27 09:44:00'
            ],
            [
                'id' => 15,
                'first_name' => 'James',
                'last_name' => 'Brooks',
                'email' => 'james.brooks@example.com',
                'fingerprint_data' => NULL,
                'positions_id' => 3,
                'department' => 'Pulmonology',
                'status_id' => 1,
                'shift_id' => $this->getShiftId(3),
                'created_at' => '2024-08-27 09:44:00',
                'updated_at' => '2024-08-27 09:44:00'
            ],
            [
                'id' => 16,
                'first_name' => 'Gabriel',
                'last_name' => 'Ross',
                'email' => 'gabriel.ross@example.com',
                'fingerprint_data' => NULL,
                'positions_id' => 1,
                'department' => 'Infectious Diseases',
                'status_id' => 1,
                'shift_id' => $this->getShiftId(1),
                'created_at' => '2024-08-27 09:44:00',
                'updated_at' => '2024-08-27 09:44:00'
            ],
            [
                'id' => 17,
                'first_name' => 'Alexander',
                'last_name' => 'Walker',
                'email' => 'alexander.walker@example.com',
                'fingerprint_data' => NULL,
                'positions_id' => 2,
                'department' => 'Hematology',
                'status_id' => 1,
                'shift_id' => $this->getShiftId(2),
                'created_at' => '2024-08-27 09:44:00',
                'updated_at' => '2024-08-27 09:44:00'
            ],
            [
                'id' => 18,
                'first_name' => 'Julian',
                'last_name' => 'Jackson',
                'email' => 'julian.jackson@example.com',
                'fingerprint_data' => NULL,
                'positions_id' => 3,
                'department' => 'Gynecology',
                'status_id' => 1,
                'shift_id' => $this->getShiftId(3),
                'created_at' => '2024-08-27 09:44:00',
                'updated_at' => '2024-08-27 09:44:00'
            ],
            [
                'id' => 19,
                'first_name' => 'Logan',
                'last_name' => 'Lewis',
                'email' => 'logan.lewis@example.com',
                'fingerprint_data' => NULL,
                'positions_id' => 1,
                'department' => 'Ophthalmology',
                'status_id' => 1,
                'shift_id' => $this->getShiftId(1),
                'created_at' => '2024-08-27 09:44:00',
                'updated_at' => '2024-08-27 09:44:00'
            ],
            [
                'id' => 20,
                'first_name' => 'Caleb',
                'last_name' => 'Martin',
                'email' => 'caleb.martin@example.com',
                'fingerprint_data' => NULL,
                'positions_id' => 2,
                'department' => 'Otolaryngology',
                'status_id' => 1,
                'shift_id' => $this->getShiftId(2),
                'created_at' => '2024-08-27 09:44:00',
                'updated_at' => '2024-08-27 09:44:00'
            ],
            [
                'id' => 21,
                'first_name' => 'Jaxon',
                'last_name' => 'Hall',
                'email' => 'jaxon.hall@example.com',
                'fingerprint_data' => NULL,
                'positions_id' => 3,
                'department' => 'Dermatology',
                'status_id' => 1,
                'shift_id' => $this->getShiftId(3),
                'created_at' => '2024-08-27 09:44:00',
                'updated_at' => '2024-08-27 09:44:00'
            ],
            [
                'id' => 22,
                'first_name' => 'Hunter',
                'last_name' => 'Brooks',
                'email' => 'hunter.brooks@example.com',
                'fingerprint_data' => NULL,
                'positions_id' => 1,
                'department' => 'Psychiatry',
                'status_id' => 1,
                'shift_id' => $this->getShiftId(1),
                'created_at' => '2024-08-27 09:44:00',
                'updated_at' => '2024-08-27 09:44:00'
            ],
            [
                'id' => 23,
                'first_name' => 'Parker',
                'last_name' => 'Lee',
                'email' => 'parker.lee@example.com',
                'fingerprint_data' => NULL,
                'positions_id' => 2,
                'department' => 'Neurosurgery',
                'status_id' => 1,
                'shift_id' => $this->getShiftId(2),
                'created_at' => '2024-08-27 09:44:00',
                'updated_at' => '2024-08-27 09:44:00'
            ],
            [
                'id' => 24,
                'first_name' => 'Cooper',
                'last_name' => 'Walker',
                'email' => 'cooper.walker@example.com',
                'fingerprint_data' => NULL,
                'positions_id' => 3,
                'department' => 'Plastic Surgery',
                'status_id' => 1,
                'shift_id' => $this->getShiftId(3),
                'created_at' => '2024-08-27 09:44:00',
                'updated_at' => '2024-08-27 09:44:00'
            ],
            [
                'id' => 25,
                'first_name' => 'Cameron',
                'last_name' => 'Jackson',
                'email' => 'cameron.jackson@example.com',
                'fingerprint_data' => NULL,
                'positions_id' => 1,
                'department' => 'Vascular Surgery',
                'status_id' => 1,
                'shift_id' => $this->getShiftId(1),
                'created_at' => '2024-08-27 09:44:00',
                'updated_at' => '2024-08-27 09:44:00'
            ],
            [
                'id' => 26,
                'first_name' => 'Eli',
                'last_name' => 'Lewis',
                'email' => 'eli.lewis@example.com',
                'fingerprint_data' => NULL,
                'positions_id' => 2,
                'department' => 'Thoracic Surgery',
                'status_id' => 1,
                'shift_id' => $this->getShiftId(2),
                'created_at' => '2024-08-27 09:44:00',
                'updated_at' => '2024-08-27 09:44:00'
            ],
            [
                'id' => 27,
                'first_name' => 'Landon',
                'last_name' => 'Martin',
                'email' => 'landon.martin@example.com',
                'fingerprint_data' => NULL,
                'positions_id' => 3,
                'department' => 'General Surgery',
                'status_id' => 1,
                'shift_id' => $this->getShiftId(3),
                'created_at' => '2024-08-27 09:44:00',
                'updated_at' => '2024-08-27 09:44:00'
            ],
            [
                'id' => 28,
                'first_name' => 'Joshua',
                'last_name' => 'Hall',
                'email' => 'joshua.hall@example.com',
                'fingerprint_data' => NULL,
                'positions_id' => 1,
                'department' => 'Colorectal Surgery',
                'status_id' => 1,
                'shift_id' => $this->getShiftId(1),
                'created_at' => '2024-08-27 09:44:00',
                'updated_at' => '2024-08-27 09:44:00'
            ],
            [
                'id' => 29,
                'first_name' => 'Alexander',
                'last_name' => 'Brown',
                'email' => 'alexander.brown@example.com',
                'fingerprint_data' => NULL,
                'positions_id' => 1,
                'department' => 'Neurology',
                'status_id' => 1,
                'shift_id' => $this->getShiftId(1),
                'created_at' => '2024-08-27 09:44:00',
                'updated_at' => '2024-08-27 09:44:00'
            ],
            [
                'id' => 30,
                'first_name' => 'Gabriel',
                'last_name' => 'Davis',
                'email' => 'gabriel.davis@example.com',
                'fingerprint_data' => NULL,
                'positions_id' => 2,
                'department' => 'Ophthalmology',
                'status_id' => 1,
                'shift_id' => $this->getShiftId(2),
                'created_at' => '2024-08-27 09:44:00',
                'updated_at' => '2024-08-27 09:44:00'
            ],
            [
                'id' => 31,
                'first_name' => 'Julian',
                'last_name' => 'Miller',
                'email' => 'julian.miller@example.com',
                'fingerprint_data' => NULL,
                'positions_id' => 3,
                'department' => 'Otolaryngology',
                'status_id' => 1,
                'shift_id' => $this->getShiftId(3),
                'created_at' => '2024-08-27 09:44:00',
                'updated_at' => '2024-08-27 09:44:00'
            ],
            [
                'id' => 32,
                'first_name' => 'Mason',
                'last_name' => 'Wilson',
                'email' => 'mason.wilson@example.com',
                'fingerprint_data' => NULL,
                'positions_id' => 1,
                'department' => 'Pathology',
                'status_id' => 1,
                'shift_id' => $this->getShiftId(1),
                'created_at' => '2024-08-27 09:44:00',
                'updated_at' => '2024-08-27 09:44:00'
            ],
            [
                'id' => 33,
                'first_name' => 'Logan',
                'last_name' => 'Moore',
                'email' => 'logan.moore@example.com',
                'fingerprint_data' => NULL,
                'positions_id' => 2,
                'department' => 'Psychiatry',
                'status_id' => 1,
                'shift_id' => $this->getShiftId(2),
                'created_at' => '2024-08-27 09:44:00',
                'updated_at' => '2024-08-27 09:44:00'
            ],
            [
                'id' => 34,
                'first_name' => 'Ethan',
                'last_name' => 'Taylor',
                'email' => 'ethan.taylor@example.com',
                'fingerprint_data' => NULL,
                'positions_id' => 3,
                'department' => 'Pulmonology',
                'status_id' => 1,
                'shift_id' => $this->getShiftId(3),
                'created_at' => '2024-08-27 09:44:00',
                'updated_at' => '2024-08-27 09:44:00'
            ],
            [
                'id' => 35,
                'first_name' => 'Lucas',
                'last_name' => 'Anderson',
                'email' => 'lucas.anderson@example.com',
                'fingerprint_data' => NULL,
                'positions_id' => 1,
                'department' => 'Radiology',
                'status_id' => 1,
                'shift_id' => $this->getShiftId(1),
                'created_at' => '2024-08-27 09:44:00',
                'updated_at' => '2024-08-27 09:44:00'
            ],
            [
                'id' => 36,
                'first_name' => 'Oliver',
                'last_name' => 'Thomas',
                'email' => 'oliver.thomas@example.com',
                'fingerprint_data' => NULL,
                'positions_id' => 2,
                'department' => 'Urology',
                'status_id' => 1,
                'shift_id' => $this->getShiftId(2),
                'created_at' => '2024-08-27 09:44:00',
                'updated_at' => '2024-08-27 09:44:00'
            ],
            [
                'id' => 37,
                'first_name' => 'Benjamin',
                'last_name' => 'Jackson',
                'email' => 'benjamin.jackson@example.com',
                'fingerprint_data' => NULL,
                'positions_id' => 3,
                'department' => 'Vascular Surgery',
                'status_id' => 1,
                'shift_id' => $this->getShiftId(3),
                'created_at' => '2024-08-27 09:44:00',
                'updated_at' => '2024-08-27 09:44:00'
            ],
            [
                'id' => 38,
                'first_name' => 'Caleb',
                'last_name' => 'Lewis',
                'email' => 'caleb.lewis@example.com',
                'fingerprint_data' => NULL,
                'positions_id' => 1,
                'department' => 'Thoracic Surgery',
                'status_id' => 1,
                'shift_id' => $this->getShiftId(1),
                'created_at' => '2024-08-27 09:44:00',
                'updated_at' => '2024-08-27 09:44:00'
            ],
            [
                'id' => 39,
                'first_name' => 'Jaxon',
                'last_name' => 'Martin',
                'email' => 'jaxon.martin@example.com',
                'fingerprint_data' => NULL,
                'positions_id' => 2,
                'department' => 'General Surgery',
                'status_id' => 1,
                'shift_id' => $this->getShiftId(2),
                'created_at' => '2024-08-27 09:44:00',
                'updated_at' => '2024-08-27 09:44:00'
            ],
            [
                'id' => 40,
                'first_name' => 'Hunter',
                'last_name' => 'Hall',
                'email' => 'hunter.hall@example.com',
                'fingerprint_data' => NULL,
                'positions_id' => 3,
                'department' => 'Colorectal Surgery',
                'status_id' => 1,
                'shift_id' => $this->getShiftId(3),
                'created_at' => '2024-08-27 09:44:00',
                'updated_at' => '2024-08-27 09:44:00'
            ],
            [
                'id' => 41,
                'first_name' => 'Aiden',
                'last_name' => 'Walker',
                'email' => 'aiden.walker@example.com',
                'fingerprint_data' => NULL,
                'positions_id' => 1,
                'department' => 'Dermatology',
                'status_id' => 1,
                'shift_id' => $this->getShiftId(1),
                'created_at' => '2024-08-27 09:44:00',
                'updated_at' => '2024-08-27 09:44:00'
            ],
            [
                'id' => 42,
                'first_name' => 'Elijah',
                'last_name' => 'Taylor',
                'email' => 'elijah.taylor@example.com',
                'fingerprint_data' => NULL,
                'positions_id' => 2,
                'department' => 'Endocrinology',
                'status_id' => 1,
                'shift_id' => $this->getShiftId(2),
                'created_at' => '2024-08-27 09:44:00',
                'updated_at' => '2024-08-27 09:44:00'
            ],
            [
                'id' => 43,
                'first_name' => 'William',
                'last_name' => 'Harris',
                'email' => 'william.harris@example.com',
                'fingerprint_data' => NULL,
                'positions_id' => 3,
                'department' => 'Gastroenterology',
                'status_id' => 1,
                'shift_id' => $this->getShiftId(3),
                'created_at' => '2024-08-27 09:44:00',
                'updated_at' => '2024-08-27 09:44:00'
            ],
            [
                'id' => 44,
                'first_name' => 'Liam',
                'last_name' => 'Nelson',
                'email' => 'liam.nelson@example.com',
                'fingerprint_data' => NULL,
                'positions_id' => 1,
                'department' => 'Nephrology',
                'status_id' => 1,
                'shift_id' => $this->getShiftId(1),
                'created_at' => '2024-08-27 09:44:00',
                'updated_at' => '2024-08-27 09:44:00'
            ],
            [
                'id' => 45,
                'first_name' => 'Noah',
                'last_name' => 'Garcia',
                'email' => 'noah.garcia@example.com',
                'fingerprint_data' => NULL,
                'positions_id' => 2,
                'department' => 'Neurology',
                'status_id' => 1,
                'shift_id' => $this->getShiftId(2),
                'created_at' => '2024-08-27 09:44:00',
                'updated_at' => '2024-08-27 09:44:00'
            ],
            [
                'id' => 46,
                'first_name' => 'Ethan',
                'last_name' => 'Miller',
                'email' => 'ethan.miller@example.com',
                'fingerprint_data' => NULL,
                'positions_id' => 3,
                'department' => 'Oncology',
                'status_id' => 1,
                'shift_id' => $this->getShiftId(3),
                'created_at' => '2024-08-27 09:44:00',
                'updated_at' => '2024-08-27 09:44:00'
            ],
            [
                'id' => 47,
                'first_name' => 'Lucas',
                'last_name' => 'Davis',
                'email' => 'lucas.davis@example.com',
                'fingerprint_data' => NULL,
                'positions_id' => 1,
                'department' => 'Orthopedics',
                'status_id' => 1,
                'shift_id' => $this->getShiftId(1),
                'created_at' => '2024-08-27 09:44:00',
                'updated_at' => '2024-08-27 09:44:00'
            ],
            [
                'id' => 48,
                'first_name' => 'Mason',
                'last_name' => 'Rodriguez',
                'email' => 'mason.rodriguez@example.com',
                'fingerprint_data' => NULL,
                'positions_id' => 2,
                'department' => 'Ophthalmology',
                'status_id' => 1,
                'shift_id' => $this->getShiftId(2),
                'created_at' => '2024-08-27 09:44:00',
                'updated_at' => '2024-08-27 09:44:00'
            ],
            [
                'id' => 49,
                'first_name' => 'Oliver',
                'last_name' => 'Lee',
                'email' => 'oliver.lee@example.com',
                'fingerprint_data' => NULL,
                'positions_id' => 3,
                'department' => 'Otolaryngology',
                'status_id' => 1,
                'shift_id' => $this->getShiftId(3),
                'created_at' => '2024-08-27 09:44:00',
                'updated_at' => '2024-08-27 09:44:00'
            ],
            [
                'id' => 50,
                'first_name' => 'Benjamin',
                'last_name' => 'Hernandez',
                'email' => 'benjamin.hernandez@example.com',
                'fingerprint_data' => NULL,
                'positions_id' => 1,
                'department' => 'Pathology',
                'status_id' => 1,
                'shift_id' => $this->getShiftId(1),
                'created_at' => '2024-08-27 09:44:00',
                'updated_at' => '2024-08-27 09:44:00'
            ]
        ];
            
       

        DB::table('employees')->insert($employees);
    }

    private function getShiftId($positionId)
    {
        // Define the mapping of position IDs to shift IDs
        $positionShiftMap = [
            1 => 3, // Doctor 24-Hour Shift
            2 => 1, // Nurse 24-Hour Shift Group A
            3 => 4, // Surgeon 16-Hour Shift
            4 => 2, // Nurse 24-Hour Shift Group B
            5 => 5            
        ];

        // Return the shift ID based on the position ID
        return $positionShiftMap[$positionId] ?? 1; // Default to shift ID 1 if not found
    }
}

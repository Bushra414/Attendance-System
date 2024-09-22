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
                'status_id' => 1, // Updated to match status_id table id
                'shift_id' => 1, // Added shift assignment id
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
                'status_id' => 1, // Updated to match status_id table id
                'shift_id' => 1, // Added shift assignment id
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
                'department' => 'Orthopedics',
                'status_id' => 1, // Updated to match status_id table id
                'shift_id' => 2, // Updated shift assignment id
                'created_at' => '2024-08-27 09:44:00',
                'updated_at' => '2024-08-27 09:44:00'
            ],
            [
                'id' => 4,
                'first_name' => 'Emily',
                'last_name' => 'Davis',
                'email' => 'emily.davis@example.com',
                'fingerprint_data' => NULL,
                'positions_id' => 4,
                'department' => 'Anesthesiology',
                'status_id' => 1, // Updated to match status_id table id
                'shift_id' => 2, // Updated shift assignment id
                'created_at' => '2024-08-27 09:44:00',
                'updated_at' => '2024-08-27 09:44:00'
            ],
            [
                'id' => 5,
                'first_name' => 'William',
                'last_name' => 'Taylor',
                'email' => 'william.taylor@example.com',
                'fingerprint_data' => NULL,
                'positions_id' => 5,
                'department' => 'Radiology',
                'status_id' => 1, // Updated to match status_id table id
                'shift_id' => 2, // Updated shift assignment id
                'created_at' => '2024-08-27 09:44:00',
                'updated_at' => '2024-08-27 09:44:00'
            ],
            [
                'id' => 6,
                'first_name' => 'David',
                'last_name' => 'Brown',
                'email' => 'david.brown@example.com',
                'fingerprint_data' => NULL,
                'positions_id' => 6,
                'department' => 'Pharmacy',
                'status_id' => 1, // Updated to match status_id table id
                'shift_id' => 2, // Updated shift assignment id
                'created_at' => '2024-08-27 09:44:00',
                'updated_at' => '2024-08-27 09:44:00'
            ],
            [
                'id' => 7,
                'first_name' => 'Patricia',
                'last_name' => 'Miller',
                'email' => 'patricia.miller@example.com',
                'fingerprint_data' => NULL,
                'positions_id' => 7,
                'department' => 'Laboratory',
                'status_id' => 1, // Updated to match status_id table id
                'shift_id' => 2, // Updated shift assignment id
                'created_at' => '2024-08-27 09:44:00',
                'updated_at' => '2024-08-27 09:44:00'
            ],
            [
                'id' => 8,
                'first_name' => 'Richard',
                'last_name' => 'Wilson',
                'email' => 'richard.wilson@example.com',
                'fingerprint_data' => NULL,
                'positions_id' => 8,
                'department' => 'Physical Therapy',
                'status_id' => 1, // Updated to match status_id table id
                'shift_id' => 2, // Updated shift assignment id
                'created_at' => '2024-08-27 09:44:00',
                'updated_at' => '2024-08-27 09:44:00'
            ],
            [
                'id' => 9,
                'first_name' => 'Linda',
                'last_name' => 'Moore',
                'email' => 'linda.moore@example.com',
                'fingerprint_data' => NULL,
                'positions_id' => 9,
                'department' => 'Occupational Therapy',
                'status_id' => 1, // Updated to match status_id table id
                'shift_id' => 2, // Updated shift assignment id
                'created_at' => '2024-08-27 09:44:00',
                'updated_at' => '2024-08-27 09:44:00'
            ],
            [
                'id' => 10,
                'first_name' => 'Kenneth',
                'last_name' => 'Taylor',
                'email' => 'kenneth.taylor@example.com',
                'fingerprint_data' => NULL,
                'positions_id' => 10,
                'department' => 'Dietetics',
                'status_id' => 1, // Updated to match status_id table id
                'shift_id' => 2, // Updated shift assignment id
                'created_at' => '2024-08-27 09:44:00',
                'updated_at' => '2024-08-27 09:44:00'
            ],
            [
                'id' => 11,
                'first_name' => 'Mary',
                'last_name' => 'Anderson',
                'email' => 'mary.anderson@example.com',
                'fingerprint_data' => NULL,
                'positions_id' => 11,
                'department' => 'Social Work',
                'status_id' => 1, // Updated to match status_id table id
                'shift_id' => 2, // Updated shift assignment id
                'created_at' => '2024-08-27 09:44:00',
                'updated_at' => '2024-08-27 09:44:00'
            ],
            [
                'id' => 12,
                'first_name' => 'Thomas',
                'last_name' => 'White',
                'email' => 'thomas.white@example.com',
                'fingerprint_data' => NULL,
                'positions_id' => 12,
                'department' => 'Psychology',
                'status_id' => 1, // Updated to match status_id table id
                'shift_id' => 2, // Updated shift assignment id
                'created_at' => '2024-08-27 09:44:00',
                'updated_at' => '2024-08-27 09:44:00'
            ],
            [
                'id' => 13,
                'first_name' => 'Barbara',
                'last_name' => 'Harris',
                'email' => 'barbara.harris@example.com',
                'fingerprint_data' => NULL,
                'positions_id' => 13,
                'department' => 'Chaplaincy',
                'status_id' => 1, // Updated to match status_id table id
                'shift_id' => 2, // Updated shift assignment id
                'created_at' => '2024-08-27 09:44:00',
                'updated_at' => '2024-08-27 09:44:00'
            ],
            [
                'id' => 14,
                'first_name' => 'Daniel',
                'last_name' => 'Martin',
                'email' => 'daniel.martin@example.com',
                'fingerprint_data' => NULL,
                'positions_id' => 14,
                'department' => 'Medical Assisting',
                'status_id' => 1, // Updated to match status_id table id
                'shift_id' => 2, // Updated shift assignment id
                'created_at' => '2024-08-27 09:44:00',
                'updated_at' => '2024-08-27 09:44:00'
            ],
            [
                'id' => 15,
                'first_name' => 'Elizabeth',
                'last_name' => 'Thompson',
                'email' => 'elizabeth.thompson@example.com',
                'fingerprint_data' => NULL,
                'positions_id' => 15,
                'department' => 'Medical Technology',
                'status_id' => 1, // Updated to match status_id table id
                'shift_id' => 2, // Updated shift assignment id
                'created_at' => '2024-08-27 09:44:00',
                'updated_at' => '2024-08-27 09:44:00'
            ],
            [
                'id' => 16,
                'first_name' => 'Charles',
                'last_name' => 'Garcia',
                'email' => 'charles.garcia@example.com',
                'fingerprint_data' => NULL,
                'positions_id' => 16,
                'department' => 'Radiation Therapy',
                'status_id' => 1, // Updated to match status_id table id
                'shift_id' => 2, // Updated shift assignment id
                'created_at' => '2024-08-27 09:44:00',
                'updated_at' => '2024-08-27 09:44:00'
            ],
            [
                'id' => 17,
                'first_name' => 'Betty',
                'last_name' => 'Martinez',
                'email' => 'betty.martinez@example.com',
                'fingerprint_data' => NULL,
                'positions_id' => 17,
                'department' => 'Respiratory Therapy',
                'status_id' => 1, // Updated to match status_id table id
                'shift_id' => 2, // Updated shift assignment id
                'created_at' => '2024-08-27 09:44:00',
                'updated_at' => '2024-08-27 09:44:00'
            ],
            [
                'id' => 18,
                'first_name' => 'George',
                'last_name' => 'Robinson',
                'email' => 'george.robinson@example.com',
                'fingerprint_data' => NULL,
                'positions_id' => 18,
                'department' => 'Surgical Technology',
                'status_id' => 1, // Updated to match status_id table id
                'shift_id' => 2, // Updated shift assignment id
                'created_at' => '2024-08-27 09:44:00',
                'updated_at' => '2024-08-27 09:44:00'
            ],
            [
                'id' => 19,
                'first_name' => 'Ruth',
                'last_name' => 'Clark',
                'email' => 'ruth.clark@example.com',
                'fingerprint_data' => NULL,
                'positions_id' => 19,
                'department' => 'Phlebotomy',
                'status_id' => 1, // Updated to match status_id table id
                'shift_id' => 2, // Updated shift assignment id
                'created_at' => '2024-08-27 09:44:00',
                'updated_at' => '2024-08-27 09:44:00'
            ],
            [
                'id' => 20,
                'first_name' => 'Andrew',
                'last_name' => 'Rodriguez',
                'email' => 'andrew.rodriguez@example.com',
                'fingerprint_data' => NULL,
                'positions_id' => 20,
                'department' => 'Emergency Medical Services',
                'status_id' => 1, // Updated to match status_id table id
                'shift_id' => 2, // Updated shift assignment id
                'created_at' => '2024-08-27 09:44:00',
                'updated_at' => '2024-08-27 09:44:00'
            ],
            [
                'id' => 21,
                'first_name' => 'Jessica',
                'last_name' => 'Smith',
                'email' => 'jessica.smith@example.com',
                'fingerprint_data' => NULL,
                'positions_id' => 2,
                'department' => 'Pediatrics',
                'status_id' => 1, // Updated to match status_id table id
                'shift_id' => 2, // Updated shift assignment id
                'created_at' => '2024-08-28 10:15:00',
                'updated_at' => '2024-08-28 10:15:00'
            ],
            [
                'id' => 22,
                'first_name' => 'Michael',
                'last_name' => 'Johnson',
                'email' => 'michael.johnson.1@example.com',
                'fingerprint_data' => NULL,
                'positions_id' => 10,
                'department' => 'Emergency Medical Services',
                'status_id' => 2, // Updated to match status_id table id
                'shift_id' => 2, // Updated shift assignment id
                'created_at' => '2024-08-29 11:00:00',
                'updated_at' => '2024-08-29 11:00:00'
            ],
            [
                'id' => 23,
                'first_name' => 'Samantha',
                'last_name' => 'Lee',
                'email' => 'samantha.lee@example.com',
                'fingerprint_data' => NULL,
                'positions_id' => 3,
                'department' => 'Surgery',
                'status_id' => 1, // Updated to match status_id table id
                'shift_id' => 2, // Updated shift assignment id
                'created_at' => '2024-08-30 08:30:00',
                'updated_at' => '2024-08-30 08:30:00'
            ],
            [
                'id' => 24,
                'first_name' => 'Daniel',
                'last_name' => 'Martinez',
                'email' => 'daniel.martinez@example.com',
                'fingerprint_data' => NULL,
                'positions_id' => 5,
                'department' => 'Radiology',
                'status_id' => 1, // Updated to match status_id table id
                'shift_id' => 2, // Updated shift assignment id
                'created_at' => '2024-08-30 09:00:00',
                'updated_at' => '2024-08-30 09:00:00'
            ],
            [
                'id' => 25,
                'first_name' => 'Emily',
                'last_name' => 'Davis',
                'email' => 'emily.davis.1@example.com',
                'fingerprint_data' => NULL,
                'positions_id' => 4,
                'department' => 'Anesthesiology',
                'status_id' => 1, // Updated to match status_id table id
                'shift_id' => 2, // Updated shift assignment id
                'created_at' => '2024-08-30 10:00:00',
                'updated_at' => '2024-08-30 10:00:00'
            ],
            [
                'id' => 26,
                'first_name' => 'Benjamin',
                'last_name' => 'Lopez',
                'email' => 'benjamin.lopez@example.com',
                'fingerprint_data' => NULL,
                'positions_id' => 7,
                'department' => 'Laboratory',
                'status_id' => 1, // Updated to match status_id table id
                'shift_id' => 2, // Updated shift assignment id
                'created_at' => '2024-08-31 08:10:00',
                'updated_at' => '2024-08-31 08:10:00'
            ],
            [
                'id' => 27,
                'first_name' => 'Sophia',
                'last_name' => 'Garcia',
                'email' => 'sophia.garcia@example.com',
                'fingerprint_data' => NULL,
                'positions_id' => 6,
                'department' => 'Pharmacy',
                'status_id' => 1, // Updated to match status_id table id
                'shift_id' => 2, // Updated shift assignment id
                'created_at' => '2024-08-31 09:30:00',
                'updated_at' => '2024-08-31 09:30:00'
            ],
            [
                'id' => 28,
                'first_name' => 'Jacob',
                'last_name' => 'Wilson',
                'email' => 'jacob.wilson@example.com',
                'fingerprint_data' => NULL,
                'positions_id' => 3,
                'department' => 'Orthopedics',
                'status_id' => 2, // Updated to match status_id table id
                'shift_id' => 2, // Updated shift assignment id
                'created_at' => '2024-09-01 07:45:00',
                'updated_at' => '2024-09-01 07:45:00'
            ],
            [
                'id' => 29,
                'first_name' => 'Emma',
                'last_name' => 'Clark',
                'email' => 'emma.clark@example.com',
                'fingerprint_data' => NULL,
                'positions_id' => 12,
                'department' => 'Psychiatry',
                'status_id' => 1, // Updated to match status_id table id
                'shift_id' => 2, // Updated shift assignment id
                'created_at' => '2024-09-01 10:15:00',
                'updated_at' => '2024-09-01 10:15:00'
            ],
            [
                'id' => 30,
                'first_name' => 'Aiden',
                'last_name' => 'Moore',
                'email' => 'aiden.moore@example.com',
                'fingerprint_data' => NULL,
                'positions_id' => 10,
                'department' => 'Dietary Services',
                'status_id' => 1, // Updated to match status_id table id
                'shift_id' => 2, // Updated shift assignment id
                'created_at' => '2024-09-02 08:00:00',
                'updated_at' => '2024-09-02 08:00:00'
            ],
            [
                'id' => 31,
                'first_name' => 'Chloe',
                'last_name' => 'Kim',
                'email' => 'chloe.kim@example.com',
                'fingerprint_data' => NULL,
                'positions_id' => 1,
                'department' => 'Cardiology',
                'status_id' => 1, // Updated to match status_id table id
                'shift_id' => 2, // Updated shift assignment id
                'created_at' => '2024-09-03 09:20:00',
                'updated_at' => '2024-09-03 09:20:00'
            ],
            [
                'id' => 32,
                'first_name' => 'Liam',
                'last_name' => 'Brown',
                'email' => 'liam.brown@example.com',
                'fingerprint_data' => NULL,
                'positions_id' => 2,
                'department' => 'Pediatrics',
                'status_id' => 1, // Updated to match status_id table id
                'shift_id' => 2, // Updated shift assignment id
                'created_at' => '2024-09-04 08:50:00',
                'updated_at' => '2024-09-04 08:50:00'
            ],
            [
                'id' => 33,
                'first_name' => 'Olivia',
                'last_name' => 'Nguyen',
                'email' => 'olivia.nguyen@example.com',
                'fingerprint_data' => NULL,
                'positions_id' => 8,
                'department' => 'Rehabilitation Services',
                'status_id' => 1, // Updated to match status_id table id
                'shift_id' => 2, // Updated shift assignment id
                'created_at' => '2024-09-05 10:10:00',
                'updated_at' => '2024-09-05 10:10:00'
            ],
            [
                'id' => 34,
                'first_name' => 'Noah',
                'last_name' => 'Evans',
                'email' => 'noah.evans@example.com',
                'fingerprint_data' => NULL,
                'positions_id' => 21,
                'department' => 'Dermatology',
                'status_id' => 2, // Updated to match status_id table id
                'shift_id' => 2, // Updated shift assignment id
                'created_at' => '2024-09-06 11:25:00',
                'updated_at' => '2024-09-06 11:25:00'
            ],
            [
                'id' => 35,
                'first_name' => 'Sophia',
                'last_name' => 'White',
                'email' => 'sophia.white@example.com',
                'fingerprint_data' => NULL,
                'positions_id' => 5,
                'department' => 'Radiology',
                'status_id' => 1, // Updated to match status_id table id
                'shift_id' => 2, // Updated shift assignment id
                'created_at' => '2024-09-07 09:40:00',
                'updated_at' => '2024-09-07 09:40:00'
            ],
            [
                'id' => 36,
                'first_name' => 'Mason',
                'last_name' => 'Allen',
                'email' => 'mason.allen@example.com',
                'fingerprint_data' => NULL,
                'positions_id' => 22,
                'department' => 'Oncology',
                'status_id' => 1, // Updated to match status_id table id
                'shift_id' => 2, // Updated shift assignment id
                'created_at' => '2024-09-08 08:30:00',
                'updated_at' => '2024-09-08 08:30:00'
            ],
            [
                'id' => 37,
                'first_name' => 'Isabella',
                'last_name' => 'Harris',
                'email' => 'isabella.harris@example.com',
                'fingerprint_data' => NULL,
                'positions_id' => 1,
                'department' => 'General Medicine',
                'status_id' => 2, // Updated to match status_id table id
                'shift_id' => 2, // Updated shift assignment id
                'created_at' => '2024-09-09 10:00:00',
                'updated_at' => '2024-09-09 10:00:00'
            ],
            [
                'id' => 38,
                'first_name' => 'Lucas',
                'last_name' => 'Walker',
                'email' => 'lucas.walker@example.com',
                'fingerprint_data' => NULL,
                'positions_id' => 23,
                'department' => 'Otolaryngology',
                'status_id' => 1, // Updated to match status_id table id
                'shift_id' => 2, // Updated shift assignment id
                'created_at' => '2024-09-10 11:15:00',
                'updated_at' => '2024-09-10 11:15:00'
            ],
            [
                'id' => 39,
                'first_name' => 'Mia',
                'last_name' => 'Young',
                'email' => 'mia.young@example.com',
                'fingerprint_data' => NULL,
                'positions_id' => 12,
                'department' => 'Psychiatry',
                'status_id' => 1, // Updated to match status_id table id
                'shift_id' => 2, // Updated shift assignment id
                'created_at' => '2024-09-11 09:00:00',
                'updated_at' => '2024-09-11 09:00:00'
            ],
            [
                'id' => 40,
                'first_name' => 'Elijah',
                'last_name' => 'Scott',
                'email' => 'elijah.scott@example.com',
                'fingerprint_data' => NULL,
                'positions_id' => 24,
                'department' => 'Neonatology',
                'status_id' => 5, // Updated to match status_id table id
                'shift_id' => 2, // Updated shift assignment id
                'created_at' => '2024-09-12 08:45:00',
                'updated_at' => '2024-09-12 08:45:00'
            ],
            [
                'id' => 41,
                'first_name' => 'Evelyn',
                'last_name' => 'King',
                'email' => 'evelyn.king@example.com',
                'fingerprint_data' => NULL,
                'positions_id' => 17,
                'department' => 'Pulmonary Medicine',
                'status_id' => 1, // Updated to match status_id table id
                'shift_id' => 2, // Updated shift assignment id
                'created_at' => '2024-09-13 08:30:00',
                'updated_at' => '2024-09-13 08:30:00'
            ],
            [
                'id' => 42,
                'first_name' => 'James',
                'last_name' => 'Wright',
                'email' => 'james.wright@example.com',
                'fingerprint_data' => NULL,
                'positions_id' => 25,
                'department' => 'Neurosurgery',
                'status_id' => 1, // Updated to match status_id table id
                'shift_id' => 2, // Updated shift assignment id
                'created_at' => '2024-09-13 09:15:00',
                'updated_at' => '2024-09-13 09:15:00'
            ],
            [
                'id' => 43,
                'first_name' => 'Charlotte',
                'last_name' => 'Hill',
                'email' => 'charlotte.hill@example.com',
                'fingerprint_data' => NULL,
                'positions_id' => 26,
                'department' => 'Maternity',
                'status_id' => 2, // Updated to match status_id table id
                'shift_id' => 2, // Updated shift assignment id
                'created_at' => '2024-09-14 07:45:00',
                'updated_at' => '2024-09-14 07:45:00'
            ],
            [
                'id' => 44,
                'first_name' => 'Alexander',
                'last_name' => 'Green',
                'email' => 'alexander.green@example.com',
                'fingerprint_data' => NULL,
                'positions_id' => 21,
                'department' => 'Ophthalmology',
                'status_id' => 1, // Updated to match status_id table id
                'shift_id' => 2, // Updated shift assignment id
                'created_at' => '2024-09-15 08:50:00',
                'updated_at' => '2024-09-15 08:50:00'
            ],
            [
                'id' => 45,
                'first_name' => 'Harper',
                'last_name' => 'Baker',
                'email' => 'harper.baker@example.com',
                'fingerprint_data' => NULL,
                'positions_id' => 27,
                'department' => 'Gastroenterology',
                'status_id' => 1, // Updated to match status_id table id
                'shift_id' => 2, // Updated shift assignment id
                'created_at' => '2024-09-15 09:30:00',
                'updated_at' => '2024-09-15 09:30:00'
            ],
            [
                'id' => 46,
                'first_name' => 'William',
                'last_name' => 'Adams',
                'email' => 'william.adams@example.com',
                'fingerprint_data' => NULL,
                'positions_id' => 2,
                'department' => 'Pediatrics',
                'status_id' => 2, // Updated to match status_id table id
                'shift_id' => 2, // Updated shift assignment id
                'created_at' => '2024-09-16 10:20:00',
                'updated_at' => '2024-09-16 10:20:00'
            ],
            [
                'id' => 47,
                'first_name' => 'Amelia',
                'last_name' => 'Perez',
                'email' => 'amelia.perez@example.com',
                'fingerprint_data' => NULL,
                'positions_id' => 6,
                'department' => 'Pharmacy',
                'status_id' => 4, // Updated to match status_id table id
                'shift_id' => 2, // Updated shift assignment id
                'created_at' => '2024-09-16 11:05:00',
                'updated_at' => '2024-09-16 11:05:00'
            ],
            [
                'id' => 48,
                'first_name' => 'Matthew',
                'last_name' => 'Carter',
                'email' => 'matthew.carter@example.com',
                'fingerprint_data' => NULL,
                'positions_id' => 28,
                'department' => 'Dentistry',
                'status_id' => 1, // Updated to match status_id table id
                'shift_id' => 2, // Updated shift assignment id
                'created_at' => '2024-09-17 08:00:00',
                'updated_at' => '2024-09-17 08:00:00'
            ],
            [
                'id' => 49,
                'first_name' => 'Ella',
                'last_name' => 'Mitchell',
                'email' => 'ella.mitchell@example.com',
                'fingerprint_data' => NULL,
                'positions_id' => 29,
                'department' => 'Medical Records',
                'status_id' => 1, // Updated to match status_id table id
                'shift_id' => 2, // Updated shift assignment id
                'created_at' => '2024-09-17 09:45:00',
                'updated_at' => '2024-09-17 09:45:00'
            ],
            [
                'id' => 50,
                'first_name' => 'Logan',
                'last_name' => 'Roberts',
                'email' => 'logan.roberts@example.com',
                'fingerprint_data' => NULL,
                'positions_id' => 12,
                'department' => 'Psychiatry',
                'status_id' => 3, // Updated to match status_id table id
                'shift_id' => 2, // Updated shift assignment id
                'created_at' => '2024-09-18 10:30:00',
                'updated_at' => '2024-09-18 10:30:00'
            ]
        ];

        DB::table('employees')->insert($employees);
    }
}

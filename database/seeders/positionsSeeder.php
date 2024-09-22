<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class positionsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('positions')->insert([
            [
                'title' => 'Doctor',
                'description' => 'Responsible for diagnosing and treating patients.',
                'salary' => 150000.00,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'Nurse',
                'description' => 'Provides care and support to patients.',
                'salary' => 70000.00,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'Pharmacist',
                'description' => 'Manages medication and advises on drug therapies.',
                'salary' => 90000.00,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'Surgeon',
                'description' => 'Performs surgical operations on patients.',
                'salary' => 250000.00,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'Anesthesiologist',
                'description' => 'Administers anesthesia and monitors patients during surgery.',
                'salary' => 300000.00,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'Radiologist',
                'description' => 'Interprets medical images and diagnoses conditions.',
                'salary' => 220000.00,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'Physical Therapist',
                'description' => 'Helps patients improve their physical abilities.',
                'salary' => 80000.00,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'Medical Laboratory Technician',
                'description' => 'Conducts tests and analyzes samples to assist in diagnosis.',
                'salary' => 60000.00,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'Health Information Manager',
                'description' => 'Manages patient records and health information systems.',
                'salary' => 90000.00,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'Hospital Administrator',
                'description' => 'Oversees the operations and management of the hospital.',
                'salary' => 120000.00,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'Dietitian',
                'description' => 'Plans and manages nutrition programs for patients.',
                'salary' => 70000.00,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'Social Worker',
                'description' => 'Provides support and resources to patients and families.',
                'salary' => 65000.00,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'Respiratory Therapist',
                'description' => 'Assists patients with breathing difficulties.',
                'salary' => 75000.00,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'Occupational Therapist',
                'description' => 'Helps patients develop, recover, and improve the skills needed for daily living.',
                'salary' => 85000.00,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'Speech-Language Pathologist',
                'description' => 'Diagnoses and treats communication and swallowing disorders.',
                'salary' => 80000.00,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'Clinical Psychologist',
                'description' => 'Provides mental health care and therapy to patients.',
                'salary' => 95000.00,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'Medical Assistant',
                'description' => 'Assists healthcare professionals with administrative and clinical tasks.',
                'salary' => 40000.00,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'Radiation Therapist',
                'description' => 'Administers radiation treatment to patients.',
                'salary' => 90000.00,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'Cardiologist',
                'description' => 'Specializes in diagnosing and treating heart conditions.',
                'salary' => 250000.00,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'Dermatologist',
                'description' => 'Specializes in treating skin conditions.',
                'salary' => 220000.00,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'Endocrinologist',
                'description' => 'Specializes in hormone-related conditions.',
                'salary' => 230000.00,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'Gastroenterologist',
                'description' => 'Specializes in digestive system disorders.',
                'salary' => 240000.00,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'Neurologist',
                'description' => 'Specializes in nervous system disorders.',
                'salary' => 260000.00,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'Oncologist',
                'description' => 'Specializes in cancer treatment.',
                'salary' => 300000.00,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'Pediatrician',
                'description' => 'Provides medical care for infants, children, and adolescents.',
                'salary' => 180000.00,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'Urologist',
                'description' => 'Specializes in urinary tract and male reproductive system disorders.',
                'salary' => 200000.00,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'Orthopedic Surgeon',
                'description' => 'Specializes in surgeries related to bones and joints.',
                'salary' => 280000.00,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'Ophthalmologist',
                'description' => 'Specializes in eye and vision care.',
                'salary' => 210000.00,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'Pathologist',
                'description' => 'Studies the causes and effects of diseases.',
                'salary' => 220000.00,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'Genetic Counselor',
                'description' => 'Provides information and support regarding genetic conditions.',
                'salary' => 90000.00,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'Infection Control Specialist',
                'description' => 'Develops and implements infection control policies.',
                'salary' => 95000.00,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'Clinical Research Coordinator',
                'description' => 'Manages clinical trials and research studies.',
                'salary' => 80000.00,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'Health Educator',
                'description' => 'Teaches individuals and communities about health topics.',
                'salary' => 60000.00,
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}

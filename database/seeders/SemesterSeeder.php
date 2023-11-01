<?php

namespace Database\Seeders;

use App\Models\Semester;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class SemesterSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        foreach (\App\Models\AcademicSession::select('id') as $year) {
            Semester::create([
                'year_id' => $year->id,
                'name' => "first semester",
                'start' => now()->subYears($year->id + 2),
                'end' => now()->subYears(1)->subDays(random_int(20, 50)),
            ]);
            Semester::create([
                'year_id' => $year->id,
                'name' => "second semester",
                'start' => now()->subYears($year->id + 1),
                'end' => now()->subYears(1)->subDays(random_int(20, 50)),
            ]);
        }
    }
}
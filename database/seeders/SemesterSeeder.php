<?php

namespace Database\Seeders;

use App\Models\Semester;
use Illuminate\Database\Seeder;

class SemesterSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        foreach ([1, 2, 3, 4, 5, 6, 7, 8, 9] as $year) {
            Semester::create([
                'year_id' => $year,
                'name' => "first semester",
                'start' => now()->subYears($year + 2),
                'end' => now()->subYears(1)->subDays(random_int(20, 50)),
            ]);
            Semester::create([
                'year_id' => $year,
                'name' => "second semester",
                'start' => now()->subYears($year + 1),
                'end' => now()->subYears(1)->subDays(random_int(20, 50)),
            ]);
        }
    }
}
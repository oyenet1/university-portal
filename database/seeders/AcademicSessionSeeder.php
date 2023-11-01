<?php

namespace Database\Seeders;

use App\Models\AcademicSession;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AcademicSessionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        for ($i = 1; $i <= 3; $i++) {
            AcademicSession::create([
                'program_id' => $i,
                'name' => "2021/22",
                'start' => now()->subYears(2),
                'end' => now()->subYears(1)->subDays(random_int(20, 50)),
            ]);

            AcademicSession::create([
                'program_id' => $i,
                'name' => "2022/23",
                'start' => now()->subYears(2),
                'end' => now()->subYears(1)->subDays(random_int(20, 50)),
            ]);

            AcademicSession::create([
                'program_id' => $i,
                'name' => "2023/24",
                'start' => now()->subDays(random_int(50, 250)),
                'end' => now()->addYears(1)->subDays(random_int(20, 50)),
            ]);
        }
    }
}
<?php

namespace Database\Seeders;

use App\Models\Grade;
use Illuminate\Database\Seeder;

class GradeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $grades = array(
            ['name' => 'distinction', 'character' => 'A+', 'mark' => 90],
            ['name' => 'excellent', 'character' => 'A', 'mark' => 70],
            ['name' => 'good', 'character' => 'B', 'mark' => 60],
            ['name' => 'credit', 'character' => 'C', 'mark' => 50],
            ['name' => 'pass', 'character' => 'D', 'mark' => 45],
            ['name' => 'fail', 'character' => 'F', 'mark' => 44],
        );

        foreach ($grades as $grade) {
            Grade::create($grade);
        }
    }
}

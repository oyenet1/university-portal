<?php

namespace Database\Seeders;

use App\Models\Faculty;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class FacultySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faculties = array(
            "Faculty of Science" => [
                "Department of Physics",
                "Department of Chemistry",
                "Department of Biology"
            ],
            "Faculty of Arts" => [
                "Department of History",
                "Department of English",
                "Department of Philosophy",
                "Department of Modern Languages"
            ],
            "Faculty of Engineering" => [
                "Department of Electrical Engineering",
                "Department of Mechanical Engineering",
                "Department of Civil Engineering",
                "Department of Computer Science"
            ],
            "Faculty of Medicine" => [
                "Department of Internal Medicine",
                "Department of Surgery",
                "Department of Pediatrics",
                "Department of Obstetrics and Gynecology",
                "Department of Psychiatry"
            ],
            "Faculty of Business and Economics" => [
                "Department of Finance",
                "Department of Marketing",
                "Department of Accounting",
                "Department of Economics"
            ],
            "Faculty of Fine Arts" => [
                "Department of Visual Arts",
                "Department of Music",
                "Department of Theater and Drama"
            ],
            "Faculty of Social Sciences" => [
                "Department of Sociology",
                "Department of Psychology",
                "Department of Political Science",
                "Department of Anthropology",
                "Department of Geography"
            ]
        );

        foreach ($faculties as $name => $facul) {
            $faculty = Faculty::create(['name' => $name, 'dean' => getUsersIdsByRole("dean")[array_rand(getUsersIdsByRole("dean"))]]);
            foreach ($facul as $department) {
                $faculty->departments()->create([
                    'name' => $department,
                    'description' => fake()->sentence(2),
                    'hod' => getUsersIdsByRole("hod")[array_rand(getUsersIdsByRole("hod"))]
                ]);
            }
        }

    }
}
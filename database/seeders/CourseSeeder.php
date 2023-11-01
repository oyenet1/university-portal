<?php

namespace Database\Seeders;

use App\Models\Course;
use Illuminate\Database\Seeder;

class CourseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $courses = [
            [
                "name" => "Introduction to Classical Mechanics",
                "code" => "PHY300",
                "unit" => 3,
                "department_id" => random_int(1, 10),
                "semester_id" => random_int(1, 6),
                "level_id" => 3,
            ],
            [
                "name" => "Organic Chemistry: Structure and Function",
                "code" => "CHE203",
                "unit" => 4,
                "department_id" => random_int(1, 10),
                "semester_id" => random_int(1, 6),
                "level_id" => 2,
            ],
            [
                "name" => "Ecology and Environmental Biology",
                "code" => "BIO300",
                "unit" => 2,
                "department_id" => random_int(1, 10),
                "semester_id" => random_int(1, 6),
                "level_id" => 3,
            ],
            [
                "name" => "Modern European History",
                "code" => "HIS100",
                "unit" => 3,
                "department_id" => random_int(1, 10),
                "semester_id" => random_int(1, 6),
                "level_id" => 1,
            ],
            [
                "name" => "Introduction to Literature",
                "code" => "ENG202",
                "unit" => 1,
                "department_id" => random_int(1, 10),
                "semester_id" => random_int(1, 6),
                "level_id" => 2,
            ],
            [
                "name" => "Creative Writing Workshop",
                "code" => "ENG301",
                "unit" => 2,
                "department_id" => random_int(1, 10),
                "semester_id" => random_int(1, 6),
                "level_id" => 3,
            ],
            [
                "name" => "Ethics and Moral Philosophy",
                "code" => "PHI400",
                "unit" => 4,
                "department_id" => random_int(1, 10),
                "semester_id" => random_int(1, 6),
                "level_id" => 4,
            ],
            [
                "name" => "Spanish Language and Culture",
                "code" => "SPA500",
                "unit" => 3,
                "department_id" => random_int(1, 10),
                "semester_id" => random_int(1, 6),
                "level_id" => 5,
            ],
            [
                "name" => "Thermodynamics and Fluid Mechanics",
                "code" => "MEC200",
                "unit" => 3,
                "department_id" => random_int(1, 10),
                "semester_id" => random_int(1, 6),
                "level_id" => 2,
            ],
            [
                "name" => "Digital Signal Processing",
                "code" => "ELE600",
                "unit" => 5,
                "department_id" => random_int(1, 10),
                "semester_id" => random_int(1, 6),
                "level_id" => 6,
            ],
            [
                "name" => "Structural Analysis and Design",
                "code" => "CIV500",
                "unit" => 5,
                "department_id" => random_int(1, 10),
                "semester_id" => random_int(1, 6),
                "level_id" => 5,
            ],
            [
                "name" => "General Surgery",
                "code" => "SUR600",
                "unit" => 6,
                "department_id" => random_int(1, 10),
                "semester_id" => random_int(1, 6),
                "level_id" => 6,
            ],
            [
                "name" => "Pediatric Development and Behavior",
                "code" => "PED200",
                "unit" => 3,
                "department_id" => random_int(1, 10),
                "semester_id" => random_int(1, 6),
                "level_id" => 2,
            ],
            [
                "name" => "Obstetrics and Prenatal Care",
                "code" => "OBS100",
                "unit" => 3,
                "department_id" => random_int(1, 10),
                "semester_id" => random_int(1, 6),
                "level_id" => 1,
            ],
            [
                "name" => "Financial Management",
                "code" => "FIN400",
                "unit" => 2,
                "department_id" => random_int(1, 10),
                "semester_id" => random_int(1, 6),
                "level_id" => 4,
            ],
            [
                "name" => "Marketing Principles",
                "code" => "MKT300",
                "unit" => 5,
                "department_id" => random_int(1, 10),
                "semester_id" => random_int(1, 6),
                "level_id" => 3,
            ],
            [
                "name" => "Auditing and Assurance Services",
                "code" => "ACC100",
                "unit" => 1,
                "department_id" => random_int(1, 10),
                "semester_id" => random_int(1, 6),
                "level_id" => 1,
            ],
            [
                "name" => "Microeconomics",
                "code" => "ECO200",
                "unit" => 3,
                "department_id" => random_int(1, 10),
                "semester_id" => random_int(1, 6),
                "level_id" => 2,
            ],
            [
                "name" => "Music Theory and Composition",
                "code" => "MUS300",
                "unit" => 3,
                "department_id" => random_int(1, 10),
                "semester_id" => random_int(1, 6),
                "level_id" => 3,
            ],
            [
                "name" => "Playwriting and Screenwriting",
                "code" => "THE400",
                "unit" => 4,
                "department_id" => random_int(1, 10),
                "semester_id" => random_int(1, 6),
                "level_id" => 4,
            ],
            [
                "name" => "Acting Techniques",
                "code" => "THE201",
                "unit" => 3,
                "department_id" => random_int(1, 10),
                "semester_id" => random_int(1, 6),
                "level_id" => 2,
            ],
            [
                "name" => "Introduction to Sociology",
                "code" => "SOC100",
                "unit" => 1,
                "department_id" => random_int(1, 10),
                "semester_id" => random_int(1, 6),
                "level_id" => 1,
            ],
            [
                "name" => "General Psychology",
                "code" => "PSY200",
                "unit" => 3,
                "department_id" => random_int(1, 10),
                "semester_id" => random_int(1, 6),
                "level_id" => 2,
            ],
            [
                "name" => "Comparative Politics",
                "code" => "POL500",
                "unit" => 2,
                "department_id" => random_int(1, 10),
                "semester_id" => random_int(1, 6),
                "level_id" => 5,
            ],
            [
                "name" => "Cultural Anthropology",
                "code" => "ANT400",
                "unit" => 6,
                "department_id" => random_int(1, 10),
                "semester_id" => random_int(1, 6),
                "level_id" => 4,
            ],
            [
                "name" => "Human Geography",
                "code" => "GEO200",
                "unit" => 2,
                "department_id" => random_int(1, 10),
                "semester_id" => random_int(1, 6),
                "level_id" => 2,
            ],
        ];

        foreach ($courses as $course) {
            Course::create($course);
        }

    }
}

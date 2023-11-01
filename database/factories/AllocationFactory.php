<?php

namespace Database\Factories;

use App\Models\Department;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Allocation>
 */
class AllocationFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $departments = Department::select("name")->take(random_int(1, 4))->pluck("name")->toArray();
        return [
            'course_id' => random_int(1, 10),
            'lecturer_id' => getUsersIdsByRole(5)[array_rand(getUsersIdsByRole(5))],
            'departments' => json_encode($departments),
        ];
    }
}

<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call([
            LaratrustSeeder::class,
            UserSeeder::class,
            ProgramSeeder::class,
            AcademicSessionSeeder::class,
            SemesterSeeder::class,
            FacultySeeder::class,
            LevelSeeder::class,
            CourseSeeder::class,
            AllocationSeeder::class,
            RegistrationPortalSeeder::class,
            ConversationSeeder::class,
            MessageSeeder::class,
        ]);
        // User::create([
        //     'firstname' => "Adeoluwa",
        //     'surname' => "Oyerinde",
        //     'current_role' => "customer",
        //     'email' => "bowofadeoyerinde@gmail.com",
        //     'password' => bcrypt('passowrd'),
        //     'phone' => fake()->phoneNumber()
        // ]);
    }
}

<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\User;
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
            ProvinceSeeder::class,
            CategorySeeder::class,
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
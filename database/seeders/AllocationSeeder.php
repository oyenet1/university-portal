<?php

namespace Database\Seeders;

use App\Models\Allocation;
use Illuminate\Database\Seeder;

class AllocationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Allocation::factory(11)->create();
    }
}

<?php

namespace Database\Seeders;

use App\Models\RegistrationPortal;
use Illuminate\Database\Seeder;

class RegistrationPortalSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        foreach (\App\Models\AcademicSession::select('id') as $semester) {
            RegistrationPortal::create([
                'year_id' => $semester->id,
                'open_at' => now()->subMonths(random_int(1, 5)),
                'close_at' => now()->subWeeks(random_int(1, 5)),
            ]);
        }

    }
}

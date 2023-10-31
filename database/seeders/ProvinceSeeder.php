<?php

namespace Database\Seeders;

use App\Models\Province;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProvinceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // $states = nigeriaState();
        // for ($i = 0; $i < count($states); $i++) {
        //     Province::create(['state' => $states[$i]]);
        // }
        foreach (cities() as $key => $cities) {
            $state =  Province::create(['state' => ucwords(str_replace("-", " ", $key))]);
            foreach ($cities as $key => $city) {
                $state->cities()->create(['name' => $city]);
            }
        }
    }
}

<?php

namespace Database\Seeders;

use App\Models\Conversation;
use Illuminate\Database\Seeder;

class ConversationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        foreach ([1 => 2, 2 => 3, 3 => 4, 6 => 5, 4 => 1] as $key => $value) {
            $chat = Conversation::create([
                "user_one" => $key,
                "user_two" => $value,
            ]);
            $chat->messages()->create(['text' => fake()->sentence(random_int(1, 25))]);
        }
    }
}

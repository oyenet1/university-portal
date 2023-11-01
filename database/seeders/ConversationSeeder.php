<?php

namespace Database\Seeders;

use App\Models\Conversation;
use App\Models\Message;
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
            $chat->messages()->save(factory(Message::class)->make());
        }
    }
}

<?php

namespace App\Observers;

use App\Models\User;
use Illuminate\Support\Str;
use App\Notifications\WelcomeNotification;
use Haruncpi\LaravelIdGenerator\IdGenerator;
use Illuminate\Support\Facades\Notification;

class UserObserver
{
    function creating(User $user): void
    {
        $user->phone = Str::startsWith($user->phone, '0') ? Str::replaceFirst('0', '', $user->phone) : $user->phone;
        $user->uci = IdGenerator::generate(['table' => 'users', 'field' => 'uci', 'length' => 12, 'reset_on_prefix_change' => true, 'prefix' => 'NG' . date('y')]);
    }
    function created(User $user): void
    {
        $user->profile()->create(); //create profile alongside user
        $user->addRole($user->current_role); //attach role to the user
        // $user->notify(new WelcomeNotification($user));
        // Notification::send($user, new WelcomeNotification($user));
    }
}

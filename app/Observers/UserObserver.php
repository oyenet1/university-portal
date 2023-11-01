<?php

namespace App\Observers;

use App\Models\User;
use Haruncpi\LaravelIdGenerator\IdGenerator;
use Illuminate\Support\Str;

class UserObserver
{
    function creating(User $user): void
    {
        $user->phone = Str::startsWith($user->phone, '0') ? Str::replaceFirst('0', '', $user->phone) : $user->phone;
        $user->school_id = IdGenerator::generate(['table' => 'users', 'field' => 'school_id', 'length' => 12, 'reset_on_prefix_change' => true, 'prefix' => date('y') . userNameAbbr($user->current_role)]);
    }
    function created(User $user): void
    {
        $user->profile()->create(); //create profile alongside user
        $user->addRole($user->current_role); //attach role to the user
        // $user->notify(new WelcomeNotification($user));
        // Notification::send($user, new WelcomeNotification($user));
    }
}

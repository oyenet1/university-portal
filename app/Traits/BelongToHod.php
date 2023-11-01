<?php

namespace App\Traits;

use App\Models\User;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

trait BelongToHod
{
    public function hod(): BelongsTo
    {
        return $this->belongTo(User::class, 'hod');
    }
}

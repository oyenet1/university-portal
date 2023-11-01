<?php

namespace App\Traits;

use App\Models\User;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

trait BelongToLecturer
{
    public function lecturer(): BelongsTo
    {
        return $this->belongTo(User::class, 'lecturer_id');
    }
}

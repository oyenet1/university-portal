<?php

namespace App\Traits;

use App\Models\User;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

trait BelongToUser
{
    public function user(): BelongsTo
    {
        return $this->belongTo(User::class);
    }
}

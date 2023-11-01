<?php

namespace App\Traits;

use App\Models\User;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

trait BelongToDean
{
    public function dean(): BelongsTo
    {
        return $this->belongTo(User::class, 'dean');
    }
}

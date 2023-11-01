<?php

namespace App\Traits;

use App\Models\Level;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

trait BelongToLevel
{
    public function level(): BelongsTo
    {
        return $this->belongTo(Level::class);
    }
}

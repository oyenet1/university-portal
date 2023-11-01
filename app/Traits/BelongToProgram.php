<?php

namespace App\Traits;

use App\Models\Program;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

trait BelongToProgram
{
    function program(): BelongsTo
    {
        return $this->belongTo(Program::class);
    }
}
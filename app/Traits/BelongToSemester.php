<?php

namespace App\Traits;

use App\Models\Semester;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

trait BelongToSemester
{
    function semester(): BelongsTo
    {
        return $this->belongTo(Semester::class);
    }
}
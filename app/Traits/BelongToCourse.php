<?php

namespace App\Traits;

use App\Models\Course;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

trait BelongToCourse
{
    public function course(): BelongsTo
    {
        return $this->belongTo(Course::class);
    }
}

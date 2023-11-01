<?php

namespace App\Traits;

use App\Models\User;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

trait BelongToStudent
{
    public function student(): BelongsTo
    {
        return $this->belongTo(User::class, 'student_id');
    }
}

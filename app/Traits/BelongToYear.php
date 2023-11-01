<?php

namespace App\Traits;

use App\Models\AcademicSession;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

trait BelongToYear
{
    public function academicYear(): BelongsTo
    {
        return $this->belongTo(AcademicSession::class, 'year_id');
    }
}

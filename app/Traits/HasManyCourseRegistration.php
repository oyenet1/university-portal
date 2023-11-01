<?php

namespace App\Traits;

use App\Models\StudentCourseReg;
use Illuminate\Database\Eloquent\Relations\HasMany;

trait HasManyCourseRegistration
{
    public function studentRegistration(): HasMany
    {
        return $this->hasMany(StudentCourseReg::class);
    }
}

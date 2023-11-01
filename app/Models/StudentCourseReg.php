<?php

namespace App\Models;

use App\Traits\BelongToLevel;
use App\Traits\BelongToSemester;
use App\Traits\BelongToStudent;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class StudentCourseReg extends Model
{
    use HasFactory, SoftDeletes, BelongToStudent, BelongToLevel, BelongToSemester;
    protected $guarded = [];
    protected $casts = [
        'created_at' => 'datetime',
        'updated_at' => 'datetime',
        'deleted_at' => 'datetime',
    ];
}

<?php

namespace App\Models;

use App\Traits\BelongToProgram;
use App\Traits\BelongToSemester;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\SoftDeletes;

class Course extends Model
{
    use HasFactory, SoftDeletes, BelongToProgram, BelongToSemester;
    protected $guarded = [];
    protected $casts = [
        'created_at' => 'datetime',
        'updated_at' => 'datetime',
        'deleted_at' => 'datetime',
    ];

    function department(): BelongsTo
    {
        return $this->belongsTo(Department::class);
    }

    function level(): BelongsTo
    {
        return $this->belongsTo(Level::class);
    }
}
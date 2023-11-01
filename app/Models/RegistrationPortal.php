<?php

namespace App\Models;

use App\Traits\BelongToYear;
use App\Traits\HasManyCourseRegistration;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class RegistrationPortal extends Model
{
    use HasFactory, SoftDeletes, BelongToYear, HasManyCourseRegistration;
    protected $guarded = [];
    protected $casts = [
        'created_at' => 'datetime',
        'updated_at' => 'datetime',
        'deleted_at' => 'datetime',
        'open_at' => 'datetime',
        'close_at' => 'datetime',
    ];
}

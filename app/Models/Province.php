<?php

namespace App\Models;

use App\Traits\HasSlug;
use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Province extends Model
{
    use HasFactory, HasSlug;

    function cities(): HasMany
    {
        return $this->hasMany(City::class);
    }


    static function boot()
    {
        parent::boot();
        self::creating(fn ($state) => $state->slug($state, $state->state));
        // self::created(function ($state) {
        //     $state->cities()->createMany();
        // });
    }
}

<?php

namespace App\Models;

use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Model;
use Haruncpi\LaravelIdGenerator\IdGenerator;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Category extends Model
{
    use HasFactory, SoftDeletes;
    protected $guarded = [];
    protected $casts = [
        'created_at' => 'datetime',
        'updated_at' => 'datetime',
        'deleted_at' => 'datetime',
    ];

    function subCategories(): HasMany
    {
        return $this->hasMany(Category::class, 'parent_id')->with('subCategories');
    }

    static function boot()
    {
        parent::boot();

        self::creating(function ($category) {
            $category->slug = Str::slug($category->name);
            $category->code = $category->parent_id ? null : IdGenerator::generate(['table' => 'categories', 'field' => 'code', 'reset_on_prefix_change' => true, 'length' => 11, 'prefix' => 'BINL' . Str::length($category->name)]);
        });
    }
}
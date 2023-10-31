<?php

namespace App\Traits;

use Illuminate\Support\Str;

trait HasSlug
{
    function slug(object $model, $column)
    {
        return $model->slug = Str::slug($column);
    }
}

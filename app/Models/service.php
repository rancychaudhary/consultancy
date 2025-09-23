<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class service extends Model
{
    //
    protected $fillable = [
        'order',
        'status',
        'title',
        'slug',
        'short_description',
        'description',
        'icon',
        'image',
        'image_1',
        "image_2",
        'seo_title',
        'seo_schema',
        'meta_keywords',
        'meta_description',
    ];
}

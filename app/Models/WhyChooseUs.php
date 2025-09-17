<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class WhyChooseUs extends Model
{
    //
    protected $fillable = [
        'order',
        'status',
        'title',
        'slug',
        'icon',
        'short_description',
        'description',
        'image',
        'image_1',
        "image_2",
        'seo_title',
        'seo_schema',
        'meta_keywords',
        'meta_description',
    ];
}

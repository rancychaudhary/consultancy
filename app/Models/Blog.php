<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    //
    protected $fillable = [
        'order',
        'status',
        'title',
        'slug',
        'description',
        'image',
        'seo_title',
        'seo_schema',
        'meta_keywords',
        'meta_description',
    ];
}

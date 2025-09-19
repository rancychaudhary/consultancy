<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Socialmedia extends Model
{
    //
    protected $fillable = [
        'order',
        'status',
        'name',
        'icon',
        'link',
    ];
}

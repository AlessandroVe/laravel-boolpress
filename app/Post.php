<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $fillable = [ //che possono essere rienpiti a partire da un array
        'cover',
        'description',
        'likes',
    ];
}
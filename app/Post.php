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

    public function postDetail(){
        // belongsto dove abbiamo inserito la foreign key
       return $this->belongsTo(PostDetail::class);

    }

    public function category(){
        // belongsto dove abbiamo inserito la foreign key
       return $this->belongsTo(Category::class);

    }
}
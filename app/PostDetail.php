<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PostDetail extends Model
{
    public function post(){
        // hasOne dove non abbiamo la foreign key 
        return $this->hasOne(Post::class);
 
     }
}

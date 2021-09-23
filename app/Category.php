<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    public function post(){
        // hasMany (perche' e' un rapporto 1 a molti) dove non abbiamo la foreign key 
        return $this->hasMany(Post::class);
 
    }
}

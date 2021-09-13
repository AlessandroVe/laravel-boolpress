<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Post;

class ControllerHome extends Controller
{
    public function index(){

        $allPosts = Post::all();
        
        return view('home',compact('allPosts'));
    }
}

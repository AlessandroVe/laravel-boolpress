<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Post;

class ControllerMain extends Controller
{
    public function index(){

        $allPosts = Post::all();
        
        return view('main',compact('allPosts'));
    }
}

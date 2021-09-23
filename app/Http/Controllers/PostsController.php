<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Post;
use App\PostDetail;
use App\Category;

use Illuminate\Support\Facades\Auth;

class PostsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $allPosts = Post::all();
        
        return view('posts.indexPosts',compact('allPosts'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        if(!Auth::check()) {
            return view('alert_log');
        }else{
            $categories = Category::all();
            return view('posts.createPost',compact('categories'));
        }
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'cover'=>'url',
            'description'=>'string',
            'likes'=>'numeric',
            'publication_year'=>'numeric',
            'publisher'=>'string',
            'form_factor'=>'string',
        ]);

        $data = $request->all();
        
        $postDetail = new PostDetail();
        $postDetail->form_factor = $data['form_factor'];
        $postDetail->publisher = $data['publisher'];
        $postDetail->publication_year = $data['publication_year'];
        $postDetail->save();


        $newPost = new Post ();
        $newPost->cover = $data['cover'];
        $newPost->description = $data['description'];
        $newPost->likes = $data['likes'];
        
        $newPost->post_detail_id = $postDetail->id;

        $newPost->category_id = $data['category_id'];

        $newPost->save();

        

        return redirect()->route('posts.show',['post' => $newPost->id]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $post= Post::find($id);
        return view('posts.post',compact('post'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Post $post)
    {
        if(!Auth::check()) {
            return view('alert_log');
        }else{
            return view('posts.postEdit', compact('post') );
        };
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Post $post)
    {

        $request->validate([
            'cover'=>'url',
            'description'=>'string',
            'likes'=>'numeric',
        ]);

        $data = $request->all();


        $post->fill($data);
        $post->save();

        /* si puo fare anche in questo modo :
            $post = new Post ();
            $post->cover = $data['cover'];
            $post->description = $data['description'];
            $post->likes = $data['likes'];
            $post->save();
        */

        return redirect()->route('posts.show', $post);

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        if(!Auth::check()) {
            return view('alert_log');
        }else{
            $post= Post::find($id);
            $post->delete();

            return redirect()->route('posts.index');
        }
    }
}

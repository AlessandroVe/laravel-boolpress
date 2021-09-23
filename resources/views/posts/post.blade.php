@extends('layouts.app')
@section('title', 'Post')
@section('content')
<div class="container container-post ">
    <div class="row justify-content-center">
        <div class='col-8'>
            <img src="{{$post->cover}}" alt="">
            <p>{{$post->description}}</p>
            <span>likes:{{$post->likes}}</span>
            
            <p>Form factor:{{$post->postDetail->form_factor}}</p>
            <p>Publisher:{{$post->postDetail->publisher}}</p>
            <p>Year:{{$post->postDetail->publication_year}}</p>

            <p>Categoria: {{$post->category->name}} </p>
        </div>

    </div>
</div>
@endsection
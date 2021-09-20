@extends('layouts.app')
@section('title', 'Post')
@section('content')
<div class="container container-post ">
    <div class="row justify-content-center">
        <div class='col-8'>
            <img src="{{$post->cover}}" alt="">
            <p>{{$post->description}}</p>
            <span>likes:{{$post->likes}}</span>
        </div>

    </div>
</div>
@endsection
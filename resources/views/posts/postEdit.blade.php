@extends('layouts.app')

@section('title', 'Edit-Post')

@section('content')
@if($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>
                    {{$error}}
                </li>
            @endforeach
        </ul>
    </div>
@endif
<div class='container'>
    <form action="{{route('posts.update',$post)}}"method="post">
        @csrf

        @method('PUT')

        <div class="form-group d-flex align-items-center">
            <label for="description">Description</label>
            <textarea name="description" id="description" cols="30" rows="10" aria-valuetext="">{{ $post->description }}</textarea>
        </div>

        <div class="form-group d-flex align-items-center">
            <label for="immagine">Immagine</label>
            <textarea name="cover" id="immagine" cols="30" rows="10">{{ $post->cover }}</textarea>
        </div>

        <div class="form-check d-flex align-items-center">
            <label for="likes">Likes</label>
            <input type="number" id="likes" name="likes" min="1" max="5000" value="{{ $post->likes }}">
        </div>

        <br>

        <button type="submit" class="btn btn-primary">Crea</button>
    </form>
</div>
@endsection
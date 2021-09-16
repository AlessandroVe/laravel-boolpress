@extends('layouts.app')

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
    <form action="{{route('posts.store')}}"method="post">
        @csrf

        <div class="form-group d-flex align-items-center">
            <label for="description">Description</label>
            
            <textarea name="description" id="description" cols="30" rows="10"></textarea>
        </div>

        <div class="form-group d-flex align-items-center">
            <label for="immagine">Immagine</label>
            <textarea name="cover" id="immagine" cols="30" rows="10"></textarea>
        </div>

        <div class="form-check d-flex align-items-center">
            <label for="likes">Likes</label>
            <input type="number" id="likes" name="likes" min="1" max="5000">
        </div>

        <br>

        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>
@endsection
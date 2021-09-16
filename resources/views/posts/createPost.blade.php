@extends('layouts.app')

@section('content')
<div class='container'>
    <form action="{{route('posts.store')}}"method="post">

        @csrf

        <label for="description">Description</label>
        <textarea name="description" id="description" cols="30" rows="10"></textarea>

        <label for="immagine">Immagine</label>
        <textarea name="cover" id="immagine" cols="30" rows="10"></textarea>

        <label for="likes">Likes</label>
        <input type="number" id="likes" name="likes" min="1" max="5000">

        <input type="submit" value="Carica">

    </form>
</div>
@endsection
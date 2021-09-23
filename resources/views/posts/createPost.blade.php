@extends('layouts.app')
@section('title', 'Create-Post')
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
            <label for="description">Description: </label>
            
            <textarea name="description" id="description" cols="30" rows="10"></textarea>
        </div>

        <div class="form-group d-flex align-items-center">
            <label for="immagine">Immagine: </label>
            <textarea placeholder="Inserici un l'indirizzo https dell'immagine " name="cover" id="immagine" cols="30" rows="10"></textarea>
        </div>

        <div class="form-check d-flex align-items-center">
            <label for="likes">Likes: </label>
            <input type="number" id="likes" name="likes" min="1" max="5000">
        </div>

        <br>
        <h2>Aggiungi i dettagli</h2>

        <div class="form-group d-flex align-items-center">
            <label for="form_factor">Form Factor?</label>
            <input type="text" id="form_factor" name="form_factor" >
        </div>

        <div class="form-group d-flex align-items-center">
            <label for="publisher">Publisher?</label>
            <input type="text" id="publisher" name="publisher" >
        </div>

        <div class="form-group d-flex align-items-center">
            <label for="publication_year">Year?</label>
            <input type="number" step="1" id="publication_year" name="publication_year" min="1940" max="2021" >
        </div>

        <h2>Scegli il genere</h2>
        <div class="form-group d-flex align-items-center">
            <select name="category_id" id="">
                <option selected>Choose...</option>
                @foreach($categories as $category)
                    <option value="{{$category->id}}">{{$category->name}}</option>
                @endforeach
            </select>
        </div>    
        


        <button type="submit" class="btn btn-primary">Crea</button>
    </form>
</div>
@endsection
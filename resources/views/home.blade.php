@extends('layouts.app')

@section('content')
<div class="container container-Home">
    <h1>Tutti i Post del tuo database</h1>
    @foreach($allPosts as $Post)
            <div>
                <div class="cover">
                    <img src="{{$Post['cover']}}" alt="">
                </div>
                <div class='description'>
                    <p>{{$Post['description']}}</p>
                </div>
                <div class='likes'>
                    <p>{{$Post['likes']}}</p>
                </div>
            </div>
    @endforeach
</div>
@endsection

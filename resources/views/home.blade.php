@extends('layouts.app')

@section('content')
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
@endsection

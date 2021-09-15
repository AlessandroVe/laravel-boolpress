@extends('layouts.app')

@section('content')

<!-- @foreach($allPosts as $Post)
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
@endforeach -->
<table class="table">
  <thead>
        <tr>
        <th scope="col">#</th>
        <th scope="col">description</th>
        <th scope="col">likes</th>
        <th scope="col">cover</th>
        </tr>
  </thead>
   <tbody>  
        @foreach($allPosts as $Post)
            <tr>
            <th scope="row">{{$loop->iteration}}</th>
            <td><p>{{$Post['description']}}</p></td>
            <td><p>{{$Post['likes']}}</p></td>
            <td><img src="{{$Post['cover']}}" alt=""></td>
            </tr>        
        @endforeach
  </tbody>  
</table>
@endsection
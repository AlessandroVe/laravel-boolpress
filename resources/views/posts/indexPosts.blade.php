@extends('layouts.app')

@section('content')
<div class="container">
      <table class="table">
        <thead>
              <tr>
              <th scope="col">#</th>
              <th scope="col">description</th>
              <th scope="col">likes</th>
              <th scope="col">cover</th>
              <th scope="col">select</th>
              </tr>
        </thead>
         <tbody>  
              @foreach($allPosts as $Post)
                  <tr>
                  <th scope="row">{{$Post->id}}</th>
                  <td><p>{{$Post['description']}}</p></td>
                  <td><p>{{$Post['likes']}}</p></td>
                  <td><img src="{{$Post['cover']}}" alt=""></td>
                  <td><a href="{{route('posts.show',$Post)}} "><i class="fas fa-door-open"></i></a></td>
                  </tr>        
              @endforeach
        </tbody>  
      </table>
</div>
@endsection
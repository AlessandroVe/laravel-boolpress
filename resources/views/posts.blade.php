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
<table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">First</th>
      <th scope="col">Last</th>
      <th scope="col">Handle</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">1</th>
      <td>Mark</td>
      <td>Otto</td>
      <td>@mdo</td>
    </tr>
    <tr>
      <th scope="row">2</th>
      <td>Jacob</td>
      <td>Thornton</td>
      <td>@fat</td>
    </tr>
    <tr>
      <th scope="row">3</th>
      <td>Larry</td>
      <td>the Bird</td>
      <td>@twitter</td>
    </tr>
  </tbody>
</table>
@endsection
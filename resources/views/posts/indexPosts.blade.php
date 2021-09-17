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
              <th scope="col">edit</th>
              <th scope="col">delete</th>
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
                        <td><a href="{{route('posts.edit',$Post)}} "><i class="fas fa-edit"></i></a></td>
                        <td>  
                              <form action="{{route('posts.destroy',$Post)}} " method='POST'>
                                    @csrf
                                    @method('DELETE')
                                    <!-- Button trigger modal -->
                                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
                                          <i class="fas fa-trash-alt"></i>
                                    </button>
                                    <!-- Modal -->
                                    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                          <div class="modal-dialog" role="document">
                                                <div class="modal-content">
                                                      <div class="modal-header">
                                                            <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                             <span aria-hidden="true">&times;</span>
                                                            </button>
                                                      </div>
                                                      <div class="modal-body">
                                                            <p>
                                                                  Sei sicuro di voler eliminare il post?
                                                            </p>
                                                      </div>
                                                      <div class="modal-footer">
                                                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                                            <button type="submit" class="btn btn-primary">Delete</button>
                                                      </div>
                                                </div>
                                          </div>
                                    </div>
                              </form>
                        </td>
                  </tr>        
              @endforeach
        </tbody>  
      </table>
</div>
@endsection
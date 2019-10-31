@extends('layouts/main')

@section('title', 'about')

@section('container')
    <div class="container mt-2">
        <div class="row">
            <div class="col-11">
            <a href="/books/create" class="btn btn-success btn-sm mb-2 "> + Add book</a> 
          
            @if(session('status'))
                <div class="alert alert-primary">
                    {{ session('status') }}
                </div>
            @endif
            
                <table class="table">
                  <div class="table-responsive">  
                    <thead class="thead-light">
                     <tr>
                      <th scope="col">No</th>                    
                      <th scope="col">Title</th>
                      <th scope="col">Page</th>
                      <th scope="col">Price</th>
                      <th scope="col">Description</th>
                      <th scope="col">Action</th>                     
                     </tr>
                    </thead>
                    <tbody>
                    @foreach($books as $book)
                     <tr>
                       <th scope="row">{{ $loop->iteration }}</th>
                       <td>{{$book->title}}</td>
                       <td>{{$book->page}}</td>
                       <td>${{$book->price}}</td>
                       <td class="col-3"><div class="">{{$book->description}}</div></td>
                       <td>
                        <a href="/books/{{$book->id}}" class="btn btn-primary">Show</a>
                        <a href="/books/{{ $book->id }}/edit" class="btn btn-success">Edit</a>

                        <!-- delete -->
                        <form action="/books/{{$book->id}}" method="post" class="d-inline">
                            @method('delete')
                            @csrf
                            <button href="" class="btn btn-danger"
                            onclick="return confirm('Delete {{$book->title}}')";>Delete</button>
                        </form>

                       </td>
                     </tr>
                    @endforeach
                    </tbody>
                  </div>
                </table>
            </div>
        </div>
    </div>
@endsection
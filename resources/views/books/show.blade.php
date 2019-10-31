@extends('layouts/main')

@section('title', 'Detail')

@section('container')
<div class="container mt-4">
<div class="row">
    <div class="col-8">
     <div class="card" style="width: 18rem;">
        <div class="card-body">
            <h5 class="card-title">{{ $book->title }}</h5> <hr>
            <h5 class="card-subtitle mb-2 text-muted"> {{ $book->page }} - pages </h5>
            <h5 class="card-text"> {{ $book->price}} - dollars </h5>    
            <p  class="card-text">"{{ $book->description }}"</p>
            <a href="{{ $book->id }}/edit" class="btn btn-primary">Edit</a>
            
            <form action="{{ $book->id }}" method="post" class="d-inline">
                @method('delete')
                @csrf
                <button href="" class="btn btn-danger"
                onclick="return confirm('Delete {{$book->title}}')">Delete</button>
            </form>
        </div>
    </div>
    <a href="/books" class="link-active"><<<</a>
    </div>
</div>
</div>
@endsection
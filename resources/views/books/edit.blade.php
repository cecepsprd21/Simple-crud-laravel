@extends('layouts/main')
@section('title', 'edit')

@section('container')
<div class="container mt-4">
    <div class="row">
        <div class="col-md-8">
        <h3 class="alert alert-primary">Edit</h1>   
        <form method="post" action="/books/{{$book->id}}">
        @method('patch')
        @csrf 
            <!-- title -->
            <div class="form-group">
               <input type="text" name="title" placeholder="Title" value="{{$book->title}}"
                class="form-control @error('title') is-invalid @enderror">
                @error('title') <div class="invalid-feedback">{{$message}}</div>
                @enderror 
            </div>

            <!-- page -->
            <div class="form-group">
               <input type="text" name="page" id="page" placeholder="Page.." value="{{$book->page}}"
                class="form-control @error('page') is-invalid @enderror">
                @error('page') <div class="invalid-feedback">{{$message}}</div>
                @enderror 
            </div>

            <!-- price -->
            <div class="form-group">
               <input type="text" name="price" placeholder="Price.." value="{{$book->price}}"
                class="form-control @error('price') is-invalid @enderror">
                @error('price') <div class="invalid-feedback">{{$message}}</div>
                @enderror 
            </div>

            <!-- description -->
            <div class="form-group">
               <textarea name="description" placeholder="Description.."
                class="form-control @error('description') is-invalid @enderror">{{$book->description}}  </textarea>
                @error('description') <div class="invalid-feedback">{{$message}}</div>
                @enderror 
            </div>

            <!-- button -->
            <div class="form-group">
                <button type="submit" class="btn btn-success">Update book</button>
            </div>

        </form>

        </div>
    </div>
</div>
@endsection
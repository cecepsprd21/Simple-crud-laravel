@extends('layouts/main')
@section('title', 'Detail')

@section('container')
<div class="container mt-4">
    <div class="row">
        <div class="col-md-8">
        <h3 class="alert alert-secondary">Add new book</h1>   
        <form method="post" action="/books">
        @csrf 
            <!-- title -->
            <div class="form-group">
               <input type="text" name="title" placeholder="Title" value="{{old('title')}}"
                class="form-control @error('title') is-invalid @enderror">
                @error('title') <div class="invalid-feedback">{{$message}}</div>
                @enderror 
            </div>

            <!-- page -->
            <div class="form-group">
               <input type="text" name="page" id="page" placeholder="Page.." value="{{old('page')}}"
                class="form-control @error('page') is-invalid @enderror">
                @error('page') <div class="invalid-feedback">{{$message}}</div>
                @enderror 
            </div>

            <!-- price -->
            <div class="form-group">
               <input type="text" name="price" placeholder="Price.." value="{{old('price')}}"
                class="form-control @error('price') is-invalid @enderror">
                @error('price') <div class="invalid-feedback">{{$message}}</div>
                @enderror 
            </div>

            <!-- description -->
            <div class="form-group">
               <textarea name="description" placeholder="Description.." value="{{old('description')}}"
                class="form-control @error('description') is-invalid @enderror"></textarea>
                @error('description') <div class="invalid-feedback">{{$message}}</div>
                @enderror 
            </div>

            <!-- button -->
            <div class="form-group">
                <button type="submit" class="btn btn-primary">Add book</button>
            </div>

        </form>

        </div>
    </div>
</div>
@endsection
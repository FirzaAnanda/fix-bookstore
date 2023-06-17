@extends('layouts.app')
@section('title','login')
@section('content')
<h1 class="text-center">Edit Products</h1>
<div class="container d-flex justify-content-center mb-3 mx-auto">
    <form method="POST" action="{{url("admin/{$book->id}")}}" class="w-50" enctype="multipart/form-data">
        @method('PATCH')
        @csrf
        <div class="mb-3">
            <label for="title" class="form-label">Title</label>
            <input type="text" class="form-control" id="title" name="title">
        </div>
        <div class="mb-3">
            <label for="author" class="form-label">Author</label>
            <input type="text" class="form-control" id="author" name="author">
        </div>
        <div class="mb-3">
            <label for="cover" class="form-label">Cover</label>
            <input type="file" class="form-control" id="cover" name="cover" accept="images/*">
        </div>
        <div class="mb-3">
            <label for="price" class="form-label">Price</label>
            <input type="number" class="form-control" id="price" name="price">
        </div>
        <div class="mb-3">
            <label for="description" class="form-label">Description</label>
            <input type="text" class="form-control" id="description" name="description">
        </div>
        <button type="submit" class="btn btn-primary mx-auto">Submit</button>
    </form>
</div>
@endsection




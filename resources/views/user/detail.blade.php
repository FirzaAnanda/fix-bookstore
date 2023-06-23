@extends('layouts.app')
@section('title','detail')
@section('content')

<div class="container bg-light rounded-3 my-5 p-4">
    <div class="row ">
        <div class="col-8">
            <h1 class="text-capitalize fw-bold">{{ $books->title }}</h1>
            <h4 class="text-capitalize">{{ $books->author }}</h4>
            <p class="col-9">{{ $books->description }}</p>
            <h4 class="text-capitalize">Rp. {{$books->price }}</h4>
        </div>
        <div class="col">
            <img src="{{ asset('storage/'.$books->cover) }}" alt="" height="500">
        </div>
    </div>

@endsection




@extends('layouts.app')
@section('title','login')
@section('content')
<div class="container">
<h1> Hi User {{$name->name}}</h1>
<a href="{{url("transactions/index")}}" class="btn btn-secondary">My Transactions</a>
@if (Auth::check())
<a href="{{url('user/logout')}}" class="btn btn-primary" type="button">Logout</a>
@endif

<div class=" container  horizontal-scrollable">
<div class="row d-flex  justify-content-between">
@foreach ($books as $data)
<div class="card" style="width: 16rem;">
    <img  src="{{asset('storage/'.$data->cover)}}" class="card-img-top" alt="...">
    <div class="card-body">
      <h5 class="card-title">{{$data->title}}</h5>
      <p class="card-text">{{$data->author}}</p>
      <a href="{{url("book/$data->id")}}" class="btn btn-primary">Detail</a>
      <a href="{{url("create")}}" class="btn btn-primary">Buy</a>
    </div>
  </div>
@endforeach
</div>
</div>
</div>
@endsection




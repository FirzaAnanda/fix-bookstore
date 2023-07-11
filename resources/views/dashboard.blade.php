@extends('layouts.main')

@section('title', 'Users')

@section('content')

<!-- Content Header (Page header) -->
<section class="content-header">
  <div class="container-fluid">
    <div class="row mb-2">
      <div class="col-sm-6">
        <h1 class="text-center">Welcome in Bookstore, {{ auth()->user()->name }}</h1>
      </div>
    </div>
  </div>
</section>

@endsection

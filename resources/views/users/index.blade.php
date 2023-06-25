@extends('layouts.main')

@section('title', 'Users')

@section('content')

<!-- Content Header (Page header) -->
<section class="content-header">
  <div class="container-fluid">
    <div class="row mb-2">
      <div class="col-sm-6">
        <h1>Users</h1>
      </div>
    </div>
  </div>
</section>

<!-- Main content -->
<section class="content">
  <div class="card">
    <div class="card-header">
      <h3 class="card-title">Users</h3>
      <div class="card-tools">
        <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
          <i class="fas fa-minus"></i>
        </button>
        <button type="button" class="btn btn-tool" data-card-widget="remove" title="Remove">
          <i class="fas fa-times"></i>
        </button>
      </div>
    </div>
    <div class="card-body">

      @include('users.create')

      <table class="table table-striped">
        <thead>
          <tr>
            <th>No</th>
            <th>Name</th>
            <th>Email</th>
            <th>Created At</th>
            <th>Action</th>
          </tr>
        </thead>
        <tbody>
          @foreach ($users as $user)
          <tr>
            <td>{{ $loop->iteration }}</td>
            <td>{{ $user->name }}</td>
            <td>{{ $user->email }}</td>
            <td>{{ $user->created_at->format('d-m-Y') }}</td>
            <td>
              {{-- <a href="{{ route('users.edit', $user->id) }}" class="btn btn-sm btn-warning"><i class="fas fa-pen"></i></a> --}}
              @include('users.edit')

            <form action="{{ route('users.destroy', $user->id) }}" class="d-inline" method="POST">
              @csrf
              @method('DELETE')
              <button type="submit" class="btn btn-sm btn-danger" onclick="return confirm('Are you sure?')">
                <i class="fas fa-trash"></i>
              </button>
            </form>
            </td>
          </tr>
          @endforeach
        </tbody>
      </table>
    </div>
  </div>
</section>

@endsection

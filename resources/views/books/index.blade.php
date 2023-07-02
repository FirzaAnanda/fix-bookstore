@extends('layouts.main')

@section('title', 'Books')

@section('content')

<!-- Content Header (Page header) -->
<section class="content-header">
  <div class="container-fluid">
    <div class="row mb-2">
      <div class="col-sm-6">
        <h1>Books</h1>
      </div>
    </div>
  </div>
</section>

<!-- Main content -->
<section class="content">
  <div class="card">
    <div class="card-header">
      <h3 class="card-title">Books</h3>
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

      @include('books.create')

      <table class="table table-striped" id="example">
        <thead>
          <tr>
            <th>No</th>
            <th>Cover</th>
            <th>Title</th>
            <th>Author</th>
            <th>Price</th>
            <th>Action</th>
          </tr>
        </thead>
        <tbody>
          @foreach ($books as $book)
          <tr>
            <td>{{ $loop->iteration }}</td>
            @if ($book->cover == null)
            <td><img src="{{ asset('dist/img/no-image-available.png') }}" width="100px" alt=""></td>
            @else
            <td><img src="/storage/{{ $book->cover }}" width="100px" alt=""></td>
            @endif
            <td>{{ $book->title }}</td>
            <td>{{ $book->author }}</td>
            <td>Rp.{{ number_format($book->price) }}</td>
            <td>
              {{-- <a href="{{ route('users.edit', $book->id) }}" class="btn btn-sm btn-warning"><i class="fas fa-pen"></i></a> --}}
              @include('books.edit')

            <form action="{{ route('books.destroy', $book->id) }}" class="d-inline" method="POST">
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

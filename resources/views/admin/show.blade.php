@extends('layouts.main')

@section('judul')

@endsection

@section('isi')
<div class="container-fluid">
  <h1 class="text-center"> Products</h1>
  <table class="table table-sm table-bordered table-striped">
    <thead>
      <tr>
        <th scope="col">#</th>
        <th scope="col">Cover</th>
        <th scope="col">Title</th>
        <th scope="col">Author</th>
        <th scope="col">Action</th>
      </tr>
    </thead>
    <tbody>
      @foreach ($data as $book)
      <tr>
        <th scope="row">{{$book->id}}</th>
        <td><img src="{{asset('storage/'.$book->cover)}}" class="img-thumbnail" style="width: 150px"></td>
        <td>{{$book->title}}</td>
        <td>{{$book->author}}</td>
        <td><a href="{{url("admin/$book->id/edit")}}" class="btn btn-primary">Edit</a></td>

        <td>
          <form method="POST" action="{{ url("admin/$book->id/delete") }}">
            @method('DELETE')
            @csrf
            <button type="submit" class="btn btn-danger">Hapus</button>
          </form>
        </td>
      </tr>
      @endforeach
    </tbody>
  </table>

</div>
@endsection

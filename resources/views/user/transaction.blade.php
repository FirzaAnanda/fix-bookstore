@extends('layouts.main')

@section('judul')

@endsection

@section('isi')
<div class="container-fluid">
    <h1 class="text-center">My Transaction</h1>
    <table class="table table-sm table-bordered table-striped">
        <thead>
            <tr>

                <th scope="col">User</th>
                <th scope="col">Buku</th>
                <th scope="col">Quantity</th>
                <th scope="col">Total</th>
                <th scope="col">Date</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($transactions as $transaction)
            <tr>
                <td>{{$transaction->book->title}}</td>
                <td>{{$transaction->book->price}}</td>
            </td>
            </tr>
            @endforeach
        </tbody>
    </table>

</div>
@endsection





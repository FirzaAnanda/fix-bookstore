@extends('layouts.main')

@section('title', 'Transasctions')

@section('content')

<!-- Content Header (Page header) -->
<section class="content-header">
  <div class="container-fluid">
    <div class="row mb-2">
      <div class="col-sm-6">
        <h1>Transactions</h1>
      </div>
    </div>
  </div>
</section>

<!-- Main content -->
<section class="content">
  <div class="card">
    <div class="card-header">
      <h3 class="card-title">Transasctions</h3>
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

      @include('transactions.create')

      <table class="table table-striped" id="example">
        <thead>
          <tr>
            <th>No</th>
            <th>Cover</th>
            <th>Transaction Code</th>
            <th>Book</th>
            <th>Order</th>
            <th>Amount</th>
            <th>Status</th>
          </tr>
        </thead>
        <tbody>
          @foreach ($transactions as $transaction)
          <tr>
            <td>{{ $loop->iteration }}</td>
            <td><img src="{{asset('storage/'.$transaction->book->cover)}}" class="img-thumbnail" style="width: 80px"> </td>
            <td>{{ $transaction->transaction_code }}</td>
            <td>{{ $transaction->book->title }}</td>
            <td>{{ $transaction->order }}</td>
            <td>{{ number_format($transaction->amount) }}</td>
            <td>{{ $transaction->status }}</td>
          </tr>
          @endforeach
        </tbody>
      </table>
    </div>
  </div>
</section>

@endsection

<?php

namespace App\Http\Controllers\user;

use App\Http\Controllers\Controller;
use App\Models\Book;
use App\Models\Transaction;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class TransactionUser extends Controller
{
  public function store(Request $request)
  {
    $transaction = Transaction::create([
      'user_id' => auth()->user()->id,
      'book_id' => $request->book_id,
      'transaction_code' => strtoupper(Str::random()),
      'amount' => $request->book->price,
      'status' => 'success'
    ]);
  }
}

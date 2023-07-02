<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreTransactionRequest;
use App\Http\Requests\UpdateTransactionRequest;
use App\Models\Book;
use App\Models\Transaction;
use Illuminate\Support\Facades\DB;

class TransactionController extends Controller
{
  /**
   * Display a listing of the resource.
   */
  public function index()
  {
    $user_id = auth()->user()->id;

    $transactions = Transaction::query()->latest('id')->get();

    if (!auth()->user()->is_admin) {
      $transactions = Transaction::query()->where('user_id', $user_id)->latest('id')->get();
    }

    // dd($transactions);

    $books = Book::query()->latest('id')->get();

    return view('transactions.index', compact('transactions', 'books'));
  }

  /**
   * Show the form for creating a new resource.
   */
  public function create()
  {
    //
  }

  /**
   * Store a newly created resource in storage.
   */
  public function store(StoreTransactionRequest $request)
  {
    $generate_code = rand(10000, 999999);

    $priceBook = DB::table('books')->where('id', $request->book_id)->first()->price;

    $asdf = Transaction::query()->create([
      'transaction_code' => $generate_code,
      'user_id' => auth()->user()->id,
      'book_id' => $request->book_id,
      'order' => $request->order,
      'amount' => $priceBook * $request->order,
    ]);

// dd($asdf);

    return back();
  }

  /**
   * Display the specified resource.
   */
  public function show(Transaction $transaction)
  {
    //
  }

  /**
   * Show the form for editing the specified resource.
   */
  public function edit(Transaction $transaction)
  {
    //
  }

  /**
   * Update the specified resource in storage.
   */
  public function update(UpdateTransactionRequest $request, Transaction $transaction)
  {
    //
  }

  /**
   * Remove the specified resource from storage.
   */
  public function destroy(Transaction $transaction)
  {
    //
  }
}

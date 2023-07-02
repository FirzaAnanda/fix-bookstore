<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreTransactionRequest;
use App\Http\Requests\UpdateTransactionRequest;
use App\Models\Book;
use App\Models\Transaction;

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
    //
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

<?php

namespace App\Http\Controllers;

use App\Models\Book;
use App\Http\Requests\StoreBookRequest;
use App\Http\Requests\UpdateBookRequest;

class BookController extends Controller
{
  /**
   * Display a listing of the resource.
   */
  public function index()
  {
    $books = Book::query()->latest('id')->get();

    return view('books.index', compact('books'));
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
  public function store(StoreBookRequest $request)
  {
    $cover = null;

    if ($request->cover) {
      $cover = $request->cover->store('images', 'public');
    }

    Book::query()->create([
      'title' => $request->title,
      'author' => $request->author,
      'cover' => $cover,
      'price' => $request->price,
      'description' => $request->description,
    ]);

    return back();
  }

  /**
   * Display the specified resource.
   */
  public function show(Book $book)
  {
    //
  }

  /**
   * Show the form for editing the specified resource.
   */
  public function edit(Book $book)
  {
    //
  }

  /**
   * Update the specified resource in storage.
   */
  public function update(UpdateBookRequest $request, Book $book)
  {
    $cover = $book->cover ?? null;

    if ($request->cover) {
      $cover = $request->cover->store('images', 'public');
    }

    $book->update([
      'title' => $request->title,
      'author' => $request->author,
      'cover' => $cover,
      'price' => $request->price,
      'description' => $request->description,
    ]);

    return back();
  }

  /**
   * Remove the specified resource from storage.
   */
  public function destroy(Book $book)
  {
    $book->delete();

    return back();
  }
}

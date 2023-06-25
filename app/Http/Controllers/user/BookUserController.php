<?php

namespace App\Http\Controllers\user;

use App\Http\Controllers\Controller;
use App\Models\Book;
use App\Models\User;
use Illuminate\Http\Request;

class BookUserController extends Controller
{
  public function index($id)
  {
    $name = User::find($id);
    $books = Book::all()->take(4);
    return view('user.index', ['books' => $books, 'name' => $name]);
  }

  public function show($id)
  {
    $books = Book::find($id);
    return view('user.detail', ['books' => $books]);
  }
}

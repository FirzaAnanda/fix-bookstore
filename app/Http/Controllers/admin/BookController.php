<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Book;
use Illuminate\Http\Request;

class BookController extends Controller
{
    public function dashboard()
    {
        return view('layouts.main');
    }
    public function getAll()
    {
        $data = Book::all();
        return view('admin.show', ['data'=>$data]);
    }

    public function create()
    {
        return view('admin.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'author' => 'required',
            'cover' => 'mimes:jpg,png,jpeg|image|max:2048',
            'price' => 'required|numeric',
            'description' => 'required'
        ]);

        if($request->hasFile('cover')){
            $path = $request->file('cover')->store('uploads');
        }else {
            $path = '';
        }

        Book::create([
            'title' => $request->input('title'),
            'author' => $request->input('author'),
            'cover' => $path,
            'price' => $request->input('price'),
            'description' => $request->input('description')
        ]);

        return redirect()->route('admin.All');
    }

    public function edit($id)
    {
        $book = Book::where('id', '=', $id)->first(); //mendapat data yang pertama

        $view_data = [
            'book' => $book
        ];

        return view('admin.edit', $view_data);
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'title' => 'required',
            'author' => 'required',
            'cover' => 'mimes:jpg,png,jpeg|image|max:2048',
            'price' => 'required|numeric',
            'description' => 'required'
        ]);

        if($request->hasFile('cover')){
            $path = $request->file('cover')->store('uploads');
        }else {
            $path = '';
        }

        Book::where('id', $id)->update([
            'title' => $request->input('title'),
            'author' => $request->input('author'),
            'cover' => $path,
            'price' => $request->input('price'),
            'description' => $request->input('description')
        ]);

        return redirect()->route('admin.All');
    }

    public function destroy($id)
    {
        Book::where('id', $id)->delete();
        return redirect()->route('admin.All');
    }
}
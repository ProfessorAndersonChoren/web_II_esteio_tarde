<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Book;
use Illuminate\Support\Facades\Validator;

class BookController extends Controller
{
    public function index()
    {
        $books = Book::all();
        return view('auth.dashboard', compact('books'));
    }

    public function create()
    {
        return view('auth.new-book');
    }

    public function store(Request $request)
    {
        $validator = Validator::make(
            $request->all(),
            [
                'isbn' => 'required|string|max:17',
                'title' => 'required|string|min:3',
                'author' => 'required|string|min:3',
                'publisher' => 'required|string|min:3',
                'pages' => 'required|numeric'
            ]
        );
        if($validator->fails()){
            return redirect()->route('book.create')->withErrors($validator)->withInput();
        }
        Book::create($request->all());
        return redirect()->route('book.index');
    }

    public function edit(int $id)
    {
        $book = Book::findOrFail($id);
        return view('auth.edit-book', compact('book'));
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Book;

class BookController extends Controller
{
    public function index()
    {
        $books = Book::all();
        return view('auth.dashboard',compact('books'));
    }

    public function create()
    {
        return view('auth.new-book');
    }
}

<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BookController;

Route::get('/', function () {
    return view('login');
})->name('login');

// Rotas do Book
Route::get('/book', [BookController::class, 'index'])->name('book.index');
Route::get('/book/create', [BookController::class, 'create'])->name('book.create');
Route::post('/book/create', [BookController::class, 'store'])->name('book.store');
Route::get('/book/edit/{id}', [BookController::class, 'edit'])->name('book.edit');

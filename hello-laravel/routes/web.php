<?php

use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

Route::get('/', [HomeController::class,'index']);
Route::get('/listagem', [HomeController::class, 'listagem']);

<?php

use App\Http\Controllers\BooksController;
use App\Http\Controllers\GenreController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
Route::resource('genre',GenreController::class);
Route::resource('books',BooksController::class);
Route::get('books/genre/{genre}',[BooksController::class,'book_by_genre'])->name('books.genre');


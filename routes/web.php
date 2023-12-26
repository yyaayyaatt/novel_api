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
Route::get('books/genre/{genre}',[BooksController::class,'book_by_genre'])->name('books.genre');
Route::get('books/search/{id_book}',[BooksController::class,'book_by_id'])->name('books.search');
Route::get('books/show/{id_book}',[BooksController::class,'get_list_books'])->name('books.show.id_book');


<?php

use App\Http\Controllers\API\AuthorController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BookController;
use App\Models\Book;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/index', [BookController::class, 'index'])->name('book.index');
Route::get('/index/{id}', [BookController::class, 'show'])->name('book.show');
Route::post('/index', [BookController::class, 'store'])->name('book.store');

Route::delete('/index/{id}', [BookController::class, 'destroy'])->name('book.delete');


//Authors routes
Route::get('/authors', [AuthorController::class, 'index'])->name('author.index');
Route::post('/authors', [AuthorController::class, 'store'])->name('author.store');
Route::get('/authors/{id}', [AuthorController::class, 'show'])->name('author.show');
Route::put('/authors/{id}', [AuthorController::class, 'update'])->name('author.update');
Route::delete('/authors/{id}', [AuthorController::class, 'destroy'])->name('author.delete');

Route::get('/authors/w/books', [AuthorController::class, 'authorsWithBooks'])->name('authors.books');
Route::post('/authors/{authorId}/{bookId}', [AuthorController::class, 'setBooks'])->name('author.set');
Route::get('/authors/{id}/books', [AuthorController::class, 'showWithBooks'])->name('author.show.books');
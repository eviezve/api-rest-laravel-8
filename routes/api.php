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

Route::get('/libro/indice', [BookController::class, 'index'])->name('book.index');
Route::get('/index/{id}', [BookController::class, 'show'])->name('book.show');
Route::post('/index', [BookController::class, 'store'])->name('book.store');

Route::delete('/index/{id}', [BookController::class, 'destroy'])->name('book.delete');

Route::get('/autor/indice', [AuthorController::class, 'index'])->name('author.index');
Route::post('/autor/registro', [AuthorController::class, 'store'])->name('author.store');
Route::get('/autor/detalle/{author}', [AuthorController::class, 'show'])->name('author.show');
Route::put('/autor/actualizar/{author}', [AuthorController::class, 'update'])->name('author.update');
Route::delete('/autor/eliminar/{author}', [AuthorController::class, 'destroy'])->name('author.delete');
Route::post('/autor/asignar/{author}/{book}', [AuthorController::class, 'attach'])->name('author.attach');
Route::post('autor/busqueda/{search}', [AuthorController::class, 'search'])->name('author.search');
<?php

use App\Http\Controllers\BookController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/



//Route::get('/index', [BookController::class, 'index'])->name('index');

/* Route::get('/contatti', [PageController::class, 'contatti'])->name('contatti'); */

Route::get('/libri', [BookController::class, 'index'])->name('books.index');
Route::get('/libri/crea', [BookController::class, 'create'])->name('books.create');
Route::post('/libri/salva', [BookController::class, 'store'])->name('books.store');
Route::get('/libri/{book}/dettagli', [BookController::class, 'show'])->name('books.show');

//

Route::get('/categorie', [BookController::class, 'index'])->name('categories.index');
Route::get('/categorie/crea', [BookController::class, 'create'])->name('categories.create');
Route::post('/categorie/salva', [BookController::class, 'store'])->name('categories.store');
Route::get('/categorie/{book}/dettagli', [BookController::class, 'show'])->name('categories.show');

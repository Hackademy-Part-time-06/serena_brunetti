<?php

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

Route::get('/stringa', function () {
    //resources\views\
    //homepage_stringa
    //.blade.php
    return view('homepage_stringa');
});

Route::get('/intero', function () {
    //resources\views\
    //intero
    //.blade.php
    return view('intero');
});

Route::get('/array', function () {
    //resources\views\
    //array
    //.blade.php
    $array = [4, 8, 'Sono l\'elemento di un array'];
    return $array[2];
});


Route::get('/chisiamo', function () {

    return view('chisiamo');
});

Route::get('/contatti', function () {
    return view('contatti');
});

Route::get('/storia', function () {
    return view('storia');
});



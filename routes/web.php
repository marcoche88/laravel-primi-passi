<?php

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
    // dati da passare alla home.blade.php come secondo parametro della funzione view()
    $data = [
        "greeting" => "Hello",
        "word" => "World",
    ];
    return view('home', $data);
});

Route::get('/pagina1', function () {
    return view('page1');
})->name('page1');

Route::get('/pagina2', function () {
    return view('page2');
})->name('page2');

Route::get('/pagina3', function () {
    return view('page3');
})->name('page3');

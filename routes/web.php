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
        "pages" => [1, 2, 3],
    ];
    return view('home', $data);
});

Route::get('/pagina1', function () {
    $data = ["title" => "Pagina 1"];
    return view('page1', $data);
})->name('page1');

Route::get('/pagina2', function () {
    $data = ["title" => "Pagina 2"];
    return view('page2', $data);
})->name('page2');

Route::get('/pagina3', function () {
    $data = ["title" => "Pagina 3"];
    return view('page3', $data);
})->name('page3');

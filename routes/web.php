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
    return view('home');
})->name('home');

Route::get('/statico', function () {
    return view('statico');
})->name('statico');


Route::get('/laravel-primi-passi', function () {
    
    $variabileDinamicaTitolo = 'hello world dinamico';
    return view('laravel-primi-passi',['title' => $variabileDinamicaTitolo]);
    echo "hello world!!";
    die();
})->name('paginaPrimiPassi');

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

Route::get('/characters', function () {
    return view('characters');
})->name('games');

Route::get('/games', function () {
    return view('games');
})->name('games');

Route::get('/comics', function () {
    return view('comics');
});

Route::get('/movies', function () {
    return view('movies');
})->name('movies');

Route::get('/tv', function () {
    return view('tv');
})->name('tv');
Route::get('/videos', function () {
    return view('videos');
});

Route::get('/', function () {
    $albums = config('myArray.comics');
    $advItems = config('myArray.adv-items');
    $data = [
        'albums' => $albums,
        'advItems' => $advItems,
    ];
    return view('home', $data);
})->name('home');

Route::get('/{id}', function ($id) {
    $albums = collect(config('myArray.comics'));
    $selectedAlbum = $albums->firstWhere('id', $id);
    if ($selectedAlbum == null) abort(404);
    return view('album', $selectedAlbum);
})->name('album');

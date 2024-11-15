<?php

use App\Http\Controllers\AlbumController;
use App\Http\Controllers\BandController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SongController;

Route::resource('songs', SongController::class);
Route::resource('bands', BandController::class);
Route::resource('albums', AlbumController::class);
Route::get('/', function () {
    return view('songs.index');
});
<?php

use Illuminate\Support\Facades\Route;


// Route::get('/', function () {
//     return view('welcome');
// });

// Auth::routes();

Route::get('/', 'GuestController@home')->name('home');

Route::get('api/videogames/list', 'ApiController@getVideogames') -> name('api.videogames.list');

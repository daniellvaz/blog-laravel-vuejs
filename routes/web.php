<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Web;

Route::get('/', [Web::class, "home"]);
Route::get('/account', [Web::class, 'login']);
Route::get('/logout', [Web::class, 'logout']);
Route::get('/profile', [Web::class, 'profile']);

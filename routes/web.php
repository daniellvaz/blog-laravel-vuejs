<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Web;

Route::get('/', [Web::class, "home"]);
Route::get('/new', [Web::class, 'new']);
Route::get('/profile', [Web::class, 'profile']);
Route::get('/timeline', [Web::class, 'timeline']);
Route::get('/post/{userId}/{slug}', [Web::class, 'post']);


Route::get('/login', [Web::class, 'login']);
Route::get('/logout', [Web::class, 'logout']);

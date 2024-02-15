<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Web;

Route::get('/', [Web::class, "home"]);
Route::get('/account', [Web::class, 'authentication']);

<?php

use App\Http\Controllers\Web\Auth;
use Illuminate\Support\Facades\Route;

Route::post('/sign-in', [Auth::class, 'signIn']);

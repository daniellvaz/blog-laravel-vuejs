<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Inertia\Inertia;
use Inertia\Response;

class Web extends Controller
{
    public function home(Request $request): Response
    {
        return  Inertia::render('Home');
    }
}
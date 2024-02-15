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

    public function authentication(Request $request): Response
    {
        $params = $request->query();
        $code = $params['code'];

        return Inertia::render('Account', ['code' => $code]);
    }
}

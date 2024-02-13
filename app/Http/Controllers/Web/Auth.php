<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Auth\Access\AuthorizationException;
use Illuminate\Http\Request;

class Auth extends Controller
{
    public function signIn(Request $request)
    {
        $user = User::where('email', $request->input('email'))->first();

        if (!$user) {
            throw new AuthorizationException('E-mail ou senha são inválidos');
        }

        return $user;
    }
}

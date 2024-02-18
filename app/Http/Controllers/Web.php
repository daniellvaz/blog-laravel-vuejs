<?php

namespace App\Http\Controllers;

use App\Models\User;
use Inertia\Inertia;
use Inertia\Response;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use App\Http\Controllers\Controller;
use App\Models\Post;
use Illuminate\Http\RedirectResponse;

class Web extends Controller
{
    public function home(Request $request): Response
    {
        $userId = session()->get('BLOG_USER_ID');
        $user = User::find($userId);

        return  Inertia::render('Home', [
            "user" => $user
        ]);
    }

    public function timeline(Request $request): Response
    {
        $userId = session()->get('BLOG_USER_ID');
        $user = User::find($userId);
        $posts = Post::all();

        return Inertia::render('Timeline', [
            "user" => $user,
            "posts" => $posts
        ]);
    }

    public function new(Request $request): Response
    {
        return Inertia::render('Post/New');
    }

    public function post(Request $request): Response
    {
        return Inertia::render('Post/Post');
    }

    public function profile(): RedirectResponse | Response
    {
        if (!session()->has('BLOG_USER_ID')) {
            return redirect('/');
        }

        $userId = session()->get('BLOG_USER_ID');
        $user = User::find($userId);

        return Inertia::render('Profile/Index', [
            "user"  => $user,
            "posts" => $user->posts
        ]);
    }

    public function login(Request $request): RedirectResponse
    {
        $params = $request->query();
        $code = $params['code'];
        $client_id = env('VITE_GITHUB_CLIENT_ID');
        $client_secret = env('VITE_GITHUB_CLIENT_SECRET');

        $response = Http::withHeaders([
            "Accept" => "application/json"
        ])->post("https://github.com/login/oauth/access_token?client_id={$client_id}&client_secret={$client_secret}&code={$code}");

        $user = Http::withToken($response->json('access_token'), $response->json('token_type'))->get("https://api.github.com/user");

        $userAlreadyExists = User::where('email', $user->json('email'))->first();

        if ($userAlreadyExists) {
            session()->put('BLOG_USER_ID', $userAlreadyExists->id);

            return redirect('/');
        }

        $result = User::create([
            "name" => $user->json('name'),
            "email" => $user->json('email'),
            "bio" => $user->json('bio'),
            "github_id" => $user->json('id'),
            "photo" => $user->json('avatar_url'),
        ]);

        session()->put('BLOG_USER_ID', $result->id);

        return redirect('/');
    }

    public function logout(): RedirectResponse
    {
        session()->flush();

        return redirect('/');
    }
}

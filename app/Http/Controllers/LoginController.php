<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Providers\RouteServiceProvider;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\ValidationException;

class LoginController extends Controller
{
    //
    public function create()
    {
        return \view('auth.login');
    }

    //
    public function store(Request $request)
    {
        $attr = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required', 'min:8'],
        ]);

        if (Auth::attempt($attr)) {
            return \redirect(RouteServiceProvider::HOME)->with('success', 'logged in!');
        }

        throw ValidationException::withMessages([
            'email' => 'your provide credentials does not match our records.',
        ]);

    }
}

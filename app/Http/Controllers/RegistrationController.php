<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class RegistrationController extends Controller
{
    //
    public function create()
    {
        return \view('auth.register');
    }

    //
    public function store(Request $request)
    {
        $request->validate([
            'username' => ['required', 'alpha_dash', 'min:3', 'max:15', 'unique:users,username'],
            'name' => ['required', 'string', 'min:3'],
            'email' => ['required', 'email', 'unique:users,email'],
            'password' => ['required', 'min:8'],
        ]);

        User::created([
            'username' => $request->username,
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);

        \session()->flash('success', 'you have been registered!');
        return \redirect('tasks');
    }
}

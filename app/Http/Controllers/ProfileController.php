<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProfileController extends Controller
{
    //
    public function __invoke(Request $request, $identity)
    {
        return \view('profile', ['username' => $identity]);
    }
}

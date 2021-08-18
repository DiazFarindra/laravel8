<?php

namespace App\View\Components;

use Illuminate\Support\Facades\Auth;
use Illuminate\View\Component;

class Navbar extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        $navigations = [
            'home' => '/',
            'blog' => '/blog',
            'about' => '/about',
            'profile' => '/profile/'.Auth::user()->username,
            'users' => '/users',
            'Tasks' => '/tasks',
        ];

        return view('components.navbar', ['navigations' => $navigations]);
    }
}

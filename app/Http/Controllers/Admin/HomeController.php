<?php

namespace App\Http\Controllers\Admin;

class HomeController
{
    public function index()
    {
        return view('dashboard');
    }
    public function register()
    {
        return view('auth.register');
    }
}

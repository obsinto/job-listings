<?php

namespace App\Http\Controllers;

class AuthenticatedSessionController extends Controller
{
    public function create()
    {
        return view('auth.login');
    }
}

<?php

namespace App\Http\Controllers;

class AuthenticatedSessionController extends Controller
{
    public function create()
    {
        return view('auth.login');
    }

    public function store()
    {
        dd('hello');
    }

    public function destroy()
    {

        auth()->logout();
        return redirect('/');
    }
}

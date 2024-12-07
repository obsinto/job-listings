<?php

namespace App\Http\Controllers;

use Illuminate\Validation\ValidationException;

class AuthenticatedSessionController extends Controller
{
    public function create()
    {
        return view('auth.login');
    }

    public function store()
    {
        //validate
        $attributes = request()->validate([
            'email' => 'required|email|max:254',
            'password' => 'required',
        ]);

        //attempt to login the user
        if (!Auth()->attempt($attributes)) {
            throw ValidationException::withMessages([
                'email' => 'Sorry, those credentials do not match'
            ]);
        }
        //regenerate the session token
        request()->session()->regenerate();
        return redirect('/');
    }

    public function destroy()
    {
        auth()->logout();
        return redirect('/');
    }
}

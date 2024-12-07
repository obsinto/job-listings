<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Validation\Rules\Password;

class RegisteredUserController extends Controller
{
    public function create()
    {
        return view('auth.register');
    }

    public function store()
    {
        //validate
        $validatedAttributes = request()->validate([
            'name' => 'required',
            'email' => 'required|email|max:254',
            'password' => ['required', Password::defaults(), 'min:8', 'confirmed'],

        ]);

        //create the user
        $user = User::create($validatedAttributes);
        // log in
        auth()->login($user);

        // redirect somewhere
        return redirect('/')->with('success', 'You have been registered!');
    }
}

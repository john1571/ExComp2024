<?php

namespace App\Http\Controllers;

use Illuminate\Validation\ValidationException;

class SessionsController extends Controller
{
    public function create()
    {
        return view('sessions.create');
    }
    public function store()
    {
        $attributes = request()->validate([
            'username' => 'required',
            'password' => 'required'
        ]);

        if(auth()->attempt($attributes)) {
            return redirect('/')->with('success','Welcome back.');
        }

        throw ValidationException::withMessages([
            'username' => 'Your username was not found.',
            'password' => 'Incorrect password.'
        ]);
    }

    public function destroy()
    {
        auth()->logout();

        return redirect('/')->with('success', 'You have been logged out.');
    }
}

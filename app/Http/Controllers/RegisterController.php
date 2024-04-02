<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class RegisterController extends Controller
{

    public function create() {
        return view('register.create');
    }

    public function store() {
        $whitelist = ["batman","sadams","rgeorge"];

        $attributes = request()->validate([
            'name' => ['required', 'max:255'],
            'username' => ['required', 'max:255', Rule::unique('users', 'username'), Rule::in($whitelist)],
            'password' => ['required', 'max:255', 'min:7']
        ]);

        $user = User::create($attributes);

        auth()->login($user);

        return redirect('/')->with('success','Your account has been created.');
    }
}

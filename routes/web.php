<?php

use Illuminate\Support\Facades\Route;
use App\Models\Workout;
use App\Models\User;

Route::get('/', function() {
    return view('welcome');
});

Route::get('/workout', function() {
    return view('workout', ['workouts' => Workout::all()]);
});

Route::get('/user', function() {
    return view('user', ['users' => User::all()]);
});
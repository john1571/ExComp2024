<?php

use Illuminate\Support\Facades\Route;
use App\Models\Workout;
use App\Models\User;
use App\Http\Controllers\WorkoutController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\SessionsController;

Route::get('/', function() {
    return view('welcome');
});

Route::get('/user', function() {
    return view('user', ['users' => User::all()]);
});

Route::get('workout', [WorkoutController::class, 'show']);
Route::get('new_workout', [WorkoutController::class, 'new']);
Route::post('workout', [WorkoutController::class, 'create']);
Route::get('register', [RegisterController::class, 'create'])->middleware('guest');
Route::post('register', [RegisterController::class, 'store'])->middleware('guest');
Route::post('logout', [SessionsController::class, 'destroy']);
Route::get('login', )
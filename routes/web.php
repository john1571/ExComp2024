<?php

use Illuminate\Support\Facades\Route;
use App\Models\Workout;
use App\Models\User;
use App\Http\Controllers\WorkoutController;
use App\Http\Controllers\RegisterController;

Route::get('/', function() {
    return view('welcome');
});

Route::get('/user', function() {
    return view('user', ['users' => User::all()]);
});

Route::get('workout', [WorkoutController::class, 'show']);
Route::get('new_workout', [WorkoutController::class, 'new']);
Route::post('workout', [WorkoutController::class, 'create']);
Route::get('register', [RegisterController::class, 'create']);
Route::post('register', [RegisterController::class, 'store']);
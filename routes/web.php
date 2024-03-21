<?php

use Illuminate\Support\Facades\Route;
use App\Models\Workout;
use App\Models\User;
use App\Http\Controllers\WorkoutController;

Route::get('/', function() {
    return view('welcome');
});

Route::get('/user', function() {
    return view('user', ['users' => User::all()]);
});

Route::get('/workout', [WorkoutController::class, 'show']);
Route::get('/new_workout', [WorkoutController::class, 'new']);
Route::post('workout', [WorkoutController::class, 'create']);
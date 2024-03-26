<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Workout;

class WorkoutController extends Controller
{
    public function show()
    {
        return view('workout', ['workouts' => auth()->user()->workouts]);
    }

    public function new()
    {
        return view('new_workout');
    }

    public function create()
    {
        $request = request()->all();
        Workout::create([
            'user_id' => auth()->user()->id,
            'type' => $request['type'],
            'distance' => $request['distance'],
            'points' => value($request['distance']),
            'date' => Today()->year . '-0' . Today()->month . '-' . Today()->day -1,
            'reps' => 0,
            'kids' => 0,
            'duration' => 0
        ]);
        
        return view('workout', ['workouts' => auth()->user()->workouts]);
    }
}

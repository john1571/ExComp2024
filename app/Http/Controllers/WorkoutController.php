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

        $type = $request['type'];
        $distance = 0;
        $reps = 0;
        $time = 0;
        $kids = 0;
        $points = 0;

        /* 
        "run"
        "walk"
        "bike"
        "swim"
        "pushups"
        "pullups"
        "squats"
        "situps"
        "workout"
        "sports/stretching"
        */

        if (in_array($type, ["run", "walk", "bike"] ))
        {
            $distance = value($request['distance']);
            $points = 0;
            if ($type == "bike")
                $points = $distance * 4;
            else
                $points = $distance * 10;
        }
        else if (in_array($type, ["pushups", "pullups", "squats", "situps"]))
        {
            $reps = value($request['reps']);
            if ($type == "pullups")
                $points = $reps / 3;
            else
                $points = $reps / 10;
            
            
        }
        else if (in_array($type, ['workout', 'sports/stretching']))
        {
            $time = value($request['minutes']);
            if ($type == 'sports/stretching')
            {
                $points = $time / 30;
            }
            else
            {
                if ($time < 15)
                    $points = 3*($time/5);
                else
                    $points = 10*($time/15);
            }
        }
        else
        {
            ddd($type);
        }
        Workout::create([
            'user_id' => auth()->user()->id,
            'type' => $type,
            'distance' => $distance,
            'points' => $points,
            'date' => Today()->year . '-0' . Today()->month . '-' . Today()->day -1,
            'reps' => $reps,
            'kids' => 0,
            'duration' => $time
        ]);

        return view('workout', ['workouts' => auth()->user()->workouts]);
    }
}

<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Workout;
class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();
        $test_user = new User;
        $test_user->name =  'Test User';
        $test_user->username =  'testexample';
        $test_user->password = bcrypt('12345');
        $test_user->total = 0;

        $test_user->save();

        Workout::create([
            'user_id' => $test_user->id,
            'type' => 'run',
            'distance' => 2.4,
            'points' => 24,
            'date' => '2024-03-19',
            'reps' => 0,
            'kids' => 0,
            'duration' => 0
        ]);

        Workout::create([
            'user_id' => $test_user->id,
            'type' => 'squats',
            'distance' => 0,
            'points' => 2,
            'date' => '2024-03-19',
            'reps' => 20,
            'kids' => 0,
            'duration' => 0
        ]);
    }
}

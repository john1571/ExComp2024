
<!DOCTYPE html>
<head>
    <title>ExComp2024 Workout</title>
</head>
<body>
    <nav>
        <div>
            @guest
                <a href="/register">Register</a>
            @endguest
        </div>
    </nav>
    @foreach($workouts as $workout)
        <h3>Type: {{ $workout->type }}</h3>
        <h3>Distance: {{ $workout->distance }}</h3>
        <h3>Points: {{ $workout->points }}</h3>
        <h3>Date: {{ $workout->date }}</h3>
        <h3>User: <a href="\user">{{ $workout->user->name }}</a></h3>
    @endforeach
</body>
</html>


<!DOCTYPE html>
<head>
    <title>ExComp2024 Workout</title>
</head>
<body>
    @foreach($workouts as $workout)
    <h3>Type: {{ $workout->type }}</h3>
    <h3>Distance: {{ $workout->distance }}</h3>
    <h3>Points: {{ $workout->points }}</h3>
    <h3>Date: {{ $workout->date }}</h3>
    <h3>User: {{ $workout->user->name }}</h3>
    @endforeach
</body>
</html>

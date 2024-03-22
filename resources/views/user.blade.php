
<!DOCTYPE html>
<head>
    <title>ExComp2024 User</title>
</head>
<body>
    @foreach($users as $user)
    <h3>Name: {{ $user->name }}</h3>
    <h3>Username: {{ $user->username }}</h3>
    <h3>Total Points: {{ $user->total }}</h3>
    @foreach($user->workouts as $workout)
    <h4>{{$workout->points}}<h4>
    @endforeach
    @endforeach
    <a href='\workout'>Workouts</a>

</body>
</html>


<!DOCTYPE html>
<head>
    <title>ExComp2024 User</title>
</head>
<body>
    @foreach($users as $user)
    <h3>Name: {{ $user->name }}</h3>
    <h3>Email: {{ $user->email }}</h3>
    <h3>Total Points: {{ $user->total }}</h3>
    @endforeach
    <a href='\workout'>Workouts</a>

</body>
</html>

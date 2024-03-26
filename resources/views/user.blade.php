
<!DOCTYPE html>

<script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>

<head>
    <title>ExComp2024 User</title>
</head>


<body>
    <nav>
        <a href='/workout'>Workouts</a>
        <a href='/'>Home</a>
        @guest
            <a href="/register">Register</a>
        @endguest
    </nav>
    
    @foreach($users as $user)
    <h3>Name: {{ $user->name }}</h3>
    <h3>Username: {{ $user->username }}</h3>
    <h3>Total Points: {{ $user->total }}</h3>
    @foreach($user->workouts as $workout)
    <h4>{{$workout->points}}<h4>
    @endforeach
    @endforeach

    <x-flash />

</body>
</html>

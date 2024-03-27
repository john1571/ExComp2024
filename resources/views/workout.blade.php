
<!DOCTYPE html>
<head>
    <title>ExComp2024 Workout</title>
</head>
<body>
    <nav>
        <div>                
            @auth
                <a>Hello {{ auth()->user()->name }}!</a>
                <form method="POST" action="/logout">
                    @csrf
                    <button type="submit">Log out</button>
                </form>
                <a href='/user'>Your Workouts</a>
            @else
                <a href="/register">Register</a>
                <a href="/login">Log in</a>
            @endauth
        </div>
    </nav>
    <table>
        <th>Date</th>
        <th>Type</th>
        <th>Points</th>
        <th>User</th>
    @foreach($workouts as $workout)
        <tr>
            <td>{{ $workout->date }}</td>
            <td>{{ $workout->type }}</td>
            <td>{{ $workout->points }}</td>
            <td><a href="\user">{{ $workout->user->name }}</a></td>
        </tr>
        @endforeach
    </table>
</body>
</html>

<!DOCTYPE html>
<head>
    <title>ExComp2024</title>
    
</head>
<body>
<nav>
    <div>                
        <a href='/'>Home</a>
        @auth
        <a>Hello {{ auth()->user()->name }}!</a>
            <form method="POST" action="/logout">
                @csrf
                <button type="submit">Log out</button>
            </form>
            <a href='/user'>Your Workouts</a>
            <a href='/workout'>Your Workouts</a>
        @else
            <a href="/register">Register</a>
            <a href="/login">Log in</a>
        @endauth
    </div>
</nav>

{{ $slot }}

</body>
@stack('scripts')
</html>
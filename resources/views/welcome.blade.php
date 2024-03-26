<!DOCTYPE html>
<head>
    <title>ExComp2024</title>
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
            @else
                <a href="/register">Register</a>
                <a href="/login">Log in</a>
            @endauth

        </div>
    </nav>

    <h1>Welcome!</h1>
</body>
</html>

<!DOCTYPE html>
<head>
    <title>ExComp2024</title>
</head>
<body>
    <nav>
        <div>
            @guest
                <a href="/register">Register</a>
            @endguest
                <a href="/login">Log in</a>
            @auth
                <a>Hello {{ auth()->user()->name }}!</a>
            @endauth

        </div>
    </nav>
</body>
</html>

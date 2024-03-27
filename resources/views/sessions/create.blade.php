<!DOCTYPE html>

<body>
    <nav>
        <a href='/'>Home</a>
        <a href='/workout'>Your Workouts</a>
        <a href="/register">Register</a>
    </nav>
    <main>
        <form method="POST" action="/login">
            @csrf
            <div>
                <label for="username">
                     Username
                </label>
                <input 
                    type="text"
                    name="username"
                    id="username" 
                    value="{{ old('username') }}"
                    required
                >
                @error('username')
                    <p>{{ $message }}</p>
                @enderror
            </div>
            <div>
                <label for="password">
                     Password
                </label>
                <input
                    type="password" 
                    name="password" 
                    id="password" 
                    required
                >
                @error('password')
                    <p>{{ $message }}</p>
                @enderror
            </div>
            <div>
                <button type="submit">
                    Submit
                </button>
            </div>
        </form>
    </main>
</body>
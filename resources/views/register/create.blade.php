<!DOCTYPE html>
<head>
    <title>ExComp2024 New User</title>
</head>
<body>
    <main>
        <form method="POST" action="/register">
            @csrf
            <div>
                <label for="name">
                     Name
                </label>
                <input 
                    type="text"
                    name="name"
                    id="name" 
                    value="{{ old('name') }}"
                    required
                >
                @error('name')
                    <p>{{ $message }}</p>
                @enderror
            </div>
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
</html>

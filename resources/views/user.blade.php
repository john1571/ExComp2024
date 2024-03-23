
<!DOCTYPE html>

<script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>

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

    @if (session()->has('success'))
            <div x-data="{ show: true }"
                x-init="setTimeout(() => show = false, 4000)"
                x-show="show"
            >
                <p>{{ session('success') }}</p>
            </div>
    @endif

</body>
</html>

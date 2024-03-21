
<!DOCTYPE html>
<head>
    <title>ExComp2024 New Workout</title>
</head>
<body>
    <form action="/workout" method="POST">
    @csrf
    <input type="select" name="type" id="type" value="run">
    <input type="number" class="distance" name="distance" id="distance" value="0">
    <input type="submit" value="Create New"/>    
    </form>

</body>
</html>

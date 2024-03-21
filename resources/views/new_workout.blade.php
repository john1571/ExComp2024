
<!DOCTYPE html>
<head>
    <title>ExComp2024 New Workout</title>
</head>
<body>
    <form action="/workout" method="POST">
    @csrf
    <label id='type'>Type</label>
    <select type="select" name="type" id="type" value="run">
        <option value="run">Run</option>
        <option value="walk">Walk</option>
        <option value="bike">Bike</option>
        <option value="swim">Swim</option>
        <option value="pushups">Pushups</option>
        <option value="pullups">Pullups</option>
        <option value="squats">Squats</option>
        <option value="situps">Situps</option>
        <option value="workout">Workout</option>
        <option value="sports/stretching">Sports/Stretching</option>
    </select><br/><br/>
    <label id='distance'>Miles</label>
    <input type="number" class="distance" name="distance" id="distance" value="0"><br/><br/>
    <input type="submit" value="Create New"/>    
    </form>

</body>
</html>

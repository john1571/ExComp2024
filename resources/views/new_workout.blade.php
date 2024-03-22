
<!DOCTYPE html>
<head>
    <title>ExComp2024 New Workout</title>
    <style>
        div:empty {
            display:none;
        }
    </style>
<script type="text/javascript">
var distance = document.getElementById("distance");
var reps = document.getElementById("reps");
var minutes = document.getElementById("minutes");
var type = document.getElementById('type');
window.onload = function() {
    onSelect(); 
}
function onSelect()
{
    var distance = document.getElementById("distance");
    var reps = document.getElementById("reps");
    var minutes = document.getElementById("minutes");
    var distanceLabel = document.getElementById("distanceLabel");
    var repsLabel = document.getElementById("repsLabel");
    var minutesLabel = document.getElementById("minutesLabel");
    var type = document.getElementById('type');  
    if (["run", "walk", "bike", "swim"].indexOf(type.value)!= -1)
    {
        reps.style.display = 'none';
        minutes.style.display = 'none';
        repsLabel.style.display = 'none';
        minutesLabel.style.display = 'none';
        distance.style.display = 'block';
        distanceLabel.style.display = 'block';
    }
    else if (["pushups", "pullups", "situps", "squat"].indexOf(type.value)!= -1)
    {
        reps.style.display = 'block';
        minutes.style.display = 'none';
        repsLabel.style.display = 'block';
        minutesLabel.style.display = 'none';
        distance.style.display = 'none';
        distanceLabel.style.display = 'none';
    } 
    else
    {
        reps.style.display = 'none';
        minutes.style.display = 'block';
        repsLabel.style.display = 'none';
        minutesLabel.style.display = 'block';
        distance.style.display = 'none';
        distanceLabel.style.display = 'none';
    }
}
</script>
</head>
<body>
    <form action="/workout" method="POST">
    @csrf
    <label id='typeLabel'>Type</label>
    <select type="select" name="type" id="type" value="run" onchange="javascript:onSelect();">
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
    <div>
        <label id='distanceLabel'>Miles</label>
        <input type="number" class="distance" name="distance" id="distance" value="0">
    </div>
    <div>
        <label id='repsLabel'>Reps</label>
        <input type="number" class="reps" name="reps" id="reps" value="0">
    </div>
    <div>
        <label id='minutesLabel'>Minutes</label>
        <input type="number" class="minutes" name="minutes" id="minutes" value="0">
    </div>
    <br/>
    <input type="submit" value="Create New"/>    
    </form>

</body>

</html>

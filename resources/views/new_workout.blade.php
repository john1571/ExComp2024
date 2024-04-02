
<x-layout>
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
    <div>
        <label id='poolLengthsLabel'>Pool Lengths</label>
        <input type="number" class="poolLengths" name="poolLengths" id="poolLengths" value="0">
    </div>
    <br/>
    <div>
        <label id="kidsLabel">Number of Accompanying Children</label>
        <input type="number" class="kids" name="kids" id="kids" value="0">
    </div>
    </br>
    <input type="submit" value="Create New"/>    
    </form>

</body>
@push('scripts')
<style>
        div:empty {
            display:none;
        }
</style>

<script type="text/javascript">

window.onload = function() {
    onSelect(); 
}
function onSelect()
{
    var distance = document.getElementById("distance");
    var reps = document.getElementById("reps");
    var minutes = document.getElementById("minutes");
    var poolLengths = document.getElementById("poolLengths");
    var distanceLabel = document.getElementById("distanceLabel");
    var repsLabel = document.getElementById("repsLabel");
    var minutesLabel = document.getElementById("minutesLabel");
    var poolLengthsLabel = document.getElementById("poolLengthsLabel");
    var kids = document.getElementById("kids");
    var kidsLabel = document.getElementById("kidsLabel");
    var type = document.getElementById('type');  

    reps.style.display = 'none';
    minutes.style.display = 'none';
    repsLabel.style.display = 'none';
    minutesLabel.style.display = 'none';
    distance.style.display = 'none';
    distanceLabel.style.display = 'none';
    poolLengths.style.display = 'none';
    poolLengthsLabel.style.display = 'none';
    kids.style.display = 'none';
    kidsLabel.style.display = 'none';

    if (["run", "walk", "bike"].indexOf(type.value)!= -1)
    {

        distance.style.display = 'block';
        distanceLabel.style.display = 'block';
        kids.style.display = "block";
        kidsLabel.style.display = "block";
    }
    else if (["pushups", "pullups", "situps", "squats"].indexOf(type.value)!= -1)
    {
        reps.style.display = 'block';
        repsLabel.style.display = 'block';
    } 
    else if (type.value == "swim")
    {
        poolLengths.style.display = "block";
        poolLengthsLabel.style.display = "block";
    }
    else
    {
        minutes.style.display = 'block';
        minutesLabel.style.display = 'block';
    }
}
</script>

@endpush
</x-layout>

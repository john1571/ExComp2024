<x-layout>
    <table>
        <th>Date</th>
        <th>Type</th>
        <th>Points</th>
        <th>User</th>
    @foreach($workouts as $workout)
        <tr>
            <td>{{ $workout->date }}</td>
            <td>{{ $workout->type }}</td>
            <td>{{ $workout->points }}</td>
            <td><a href="\user">{{ $workout->user->name }}</a></td>
        </tr>
        @endforeach
    </table>
</x-layout>
<table>
    <thead>
    <tr>
        <th>ID</th>
        <th>User ID</th>
        <th>Room ID</th>
        <th>Arrival</th>
        <th>Departure</th>
    </tr>
    </thead>
    <tbody>
    @foreach($reservations as $reservation)
        <tr>
            <td>{{$reservation->id}}</td>
            <td>{{$reservation->user_id}}</td>
            <td>{{$reservation->room_id}}</td>
            <td>{{$reservation->arrival}}</td>
            <td>{{$reservation->departure}}</td>
        </tr>
    @endforeach
    </tbody>
</table>

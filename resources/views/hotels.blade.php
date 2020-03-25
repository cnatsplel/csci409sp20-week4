<table>
    <thead>
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Address</th>
            <th>Image</th>
        </tr>
    </thead>
    <tbody>
        @foreach($hotels as $hotel)
            <tr>
                <td>{{$hotel->id}}</td>
                <td>{{$hotel->name}}</td>
                <td>
                    {{$hotel->address_1}}<br />
                    {{$hotel->address_2}}<br />
                    {{$hotel->city}} {{$hotel->state}}, {{$hotel->zip}}
                </td>
                <td>
                    <img src="{{$hotel->image}}" style="width:50%;height:50%;"/>
                </td>
            </tr>
        @endforeach
    </tbody>
</table>

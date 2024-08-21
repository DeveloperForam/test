<html>
    <body>
    <table border="2">
        <tr >
            <th>Sr. No</th>
            <th>Name</th>
            <th>City</th>
            <th>Email</th>
        </tr>
        @foreach ($disp as $e)
        <tr >
            <td>{{ $e->id}}</td>
            <td>{{$e->name}}</td>
            <td>{{$e->city}}</td>
            <td>{{$e->email}}</td>
        </tr>
        @endforeach
        </table>
    </body>
</html>
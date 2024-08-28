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
            <th>{{ $e->id}}</th>
            <th>{{$e->name}}</th>
            <th>{{$e->city}}</th>
            <th>{{$e->email}}</th>
            <th><a href="{{ route('employee-edit',$disp->id)}}">Edit</a></th>
        </tr>
        @endforeach
        </table>
    </body>
</html>
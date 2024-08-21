<html>
    <body>
    <table border="2">
        <tr >
            <th> No. </th>
            <th> Name </th>
            <th> City </th>
            <th> Email </th>
        </tr>
        @foreach ($disp as $f)
        <tr >
            <td>{{ $f->id }}</td>
            <td>{{ $f->name }}</td>
            <td>{{ $f->city }}</td>
            <td>{{ $f->email }}</td>
        </tr>
        @endforeach
        </table>
    </body>
</html>
<HTML>
<!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous"> -->
    <body>
        @php
            $data=["PHP","ASP","LARAVEL","MONGO"];
            $i=0;
            @endphp
        <table border="2">
            <tr>
                <th>Sr No</th>
                <th>Subject</th>    
            </tr>
        @foreach ($data as $d)
        <tr>
            <td>{{ ++$i }}</td>
            <td>{{ $d }}</td>
        </tr>    
        @endforeach
        </table>
    </body>
</HTML>
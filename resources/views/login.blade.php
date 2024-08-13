<html>
<head>
    <title>Student Form</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head >
<body>
    <h1>Student Registration Form</h1>
    <form method="post" action={{ url('student-submit') }}>
    @csrf
        <label for="firstname">First Name:</label>
        <input type="text" id="fname" name="fname" required><br><br>

        <label for="lastname">Last Name:</label>
        <input type="text" id="lname" name="lname" required><br><br>

        <label for="department">Department:</label>
        <input type="text" id="dept" name="dept" required><br><br>

        <button type="submit" class="btn btn-primary">Submit</button>    
    </form>
</body>
</html>
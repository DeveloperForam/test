<html>
<head>
    <title>Student Form</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</head >
<body>
    <h1>Employee Registration Form</h1>
    <form method="post" action={{ url('employee-submit') }}>
        @csrf
        <div>
            <label for="name">Name:</label>
            <input type="text" id="name" name="name"  required>
        </div>

        <div>
            <label for="email">Email:</label>
            <input type="email" id="email" name="email" required>
        </div>

        <div>
            <label for="phone">Phone:</label>
            <input type="text" id="phone" name="phone" required>
        </div>

        <div>
            <label for="address">Address:</label>
            <input type="text" id="address" name="address" >
        </div>

        <div>
            <label for="position">Position:</label>
            <input type="text" id="position" name="position" >
        </div>

        <button type="submit">Submit</button>
    </form>
</body>
</html>
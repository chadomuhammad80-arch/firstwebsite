<!DOCTYPE html>
<html>
<head>
    <title>Practice Student Validation</title>
</head>
<body>

    <h1>Student Validation Demo</h1>

    @if(session('success'))
        <p style="color: green;">{{ session('success') }}</p>
    @endif

    @if(session('error'))
        <p style="color: red;">{{ session('error') }}</p>
    @endif

    @if($errors->any())
        <h3 style="color: red;">Validation Errors:</h3>
        <ul>
            @foreach($errors->all() as $error)
                <li style="color: red;">{{ $error }}</li>
            @endforeach
        </ul>
    @endif

    <form method="POST" action="/practice-validation">
        @csrf

        <label>Name:</label>
        <input type="text" name="name">
        <br><br>

        <label>Email:</label>
        <input type="text" name="email">
        <br><br>

        <label>Course:</label>
        <input type="text" name="course">
        <br><br>

        <label>Age:</label>
        <input type="text" name="age">
        <br><br>

        <button type="submit">Submit</button>
    </form>

</body>
</html>
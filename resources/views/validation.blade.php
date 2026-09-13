<!DOCTYPE html>
<html>
<head>
    <title>Laravel Validation Demo</title>
</head>

<body>

    <h1>Laravel Validation Demo</h1>

    @if(session('success'))
        <p>{{ session('success') }}</p>
    @endif
    
    @if(session('error'))
    <p>{{ session('error') }}</p>
@endif
    @if($errors->any())

        <h3>Validation Errors:</h3>

        <ul>
            @foreach($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>

    @endif

    <form method="POST" action="/validation">

        @csrf

        <label>Name:</label>
        <input type="text" name="name">

        <br><br>

        <label>Email:</label>
        <input type="text" name="email">

        <br><br>

        <label>Password:</label>
        <input type="password" name="password">

        <br><br>

        <button type="submit">Submit</button>

    </form>

</body>
</html>
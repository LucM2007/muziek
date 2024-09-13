<!DOCTYPE html>
<html>
<head>
    <title>Create Song</title>
</head>
<body>
    <h1>Create New Song</h1>

    <form action="{{ url('/songs') }}" method="POST">
        @csrf
        <label for="song">Song Title:</label>
        <input type="text" id="song" name="song" required>
        <button type="submit">Add Song</button>
    </form>
    <a href="{{ url('/songs') }}">Back to List</a>
</body>
</html>

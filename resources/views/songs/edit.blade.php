<!DOCTYPE html>
<html>
<head>
    <title>Edit Song</title>
</head>
<body>
    <h1>Edit Song</h1>
    <!-- Form to edit a song -->
    <form action="#" method="POST">
        @csrf
        <label for="song">Song Title:</label>
        <input type="text" id="song" name="song" value="{{ $song }}">
        <button type="submit">Update Song</button>
    </form>
    <a href="{{ url('/songs') }}">Back to List</a>
</body>
</html>

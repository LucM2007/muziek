<!DOCTYPE html>
<html>
<head>
    <title>Songs</title>
</head>
<body>
    <h1>Songs List</h1>
    <ul>
    @foreach ($songs as $index => $song)
        <li><a href="{{ url('/songs/' . $index) }}">{{ $song }}</a></li>
    @endforeach
    </ul>
    
    <a href="{{ url('/songs/create') }}">Add New Song</a>
</body>
</html>

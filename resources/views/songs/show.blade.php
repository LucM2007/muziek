<!DOCTYPE html>
<html>
<head>
    <title>Show Song</title>
</head>
<body>
    <h1>Song Details</h1>
    <p>{{ $song }}</p>
    <a href="{{url('/songs/' . $index . '/edit')}}">edit</a>
    <a href="{{ url('/songs') }}">Back to List</a>
    
</body>
</html>

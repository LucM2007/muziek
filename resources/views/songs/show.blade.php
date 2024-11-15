<!-- resources/views/songs/show.blade.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Song Details</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="bg-gray-100 text-gray-900 font-sans antialiased">
    <div class="max-w-4xl mx-auto p-6">
        <h1 class="text-3xl font-semibold text-center mb-6">Song Details</h1>

        @if ($errors->any())
        <div class="bg-red-100 border-l-4 border-red-500 text-red-700 p-4 mb-4">
            <ul class="list-disc pl-5">
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
        @endif

        <div class="bg-white shadow-md rounded-lg p-6 mb-6">
            <p class="text-xl font-medium text-gray-800 mb-2"><strong>Title:</strong> {{ $song->title }}</p>
            <p class="text-xl font-medium text-gray-800"><strong>Singer:</strong> {{ $song->singer }}</p>
        </div>

        <div class="flex justify-between mt-6">
            <a href="{{ route('songs.index') }}" class="text-blue-500 hover:text-blue-700 font-medium">Back to Song List</a>
            <a href="{{ route('songs.edit', $song->id) }}" class="text-blue-500 hover:text-blue-700 font-medium">Edit Song</a>
        </div>
    </div>
</body>
</html>

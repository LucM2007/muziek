<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Album Details</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="bg-gray-100 text-gray-900 font-sans antialiased">

    <div class="max-w-4xl mx-auto p-6 bg-white shadow-lg rounded-lg mt-10">
        <h1 class="text-3xl font-semibold text-center mb-6">Album Details</h1>

        @if ($errors->any())
        <div class="bg-red-100 border-l-4 border-red-500 text-red-700 p-4 mb-6">
            <ul class="list-disc pl-5">
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
        @endif

        <div class="mb-4">
            <p class="text-lg"><strong>Name:</strong> {{ $album->name }}</p>
            <p class="text-lg"><strong>Year:</strong> {{ $album->year }}</p>
            <p class="text-lg"><strong>Times Sold:</strong> {{ $album->times_sold }}</p>
        </div>

        <!-- Actions -->
        <div class="mt-6 flex justify-between">
            <a href="{{ route('albums.index') }}" class="text-blue-500 hover:text-blue-700 font-medium">Back to Album List</a>
            <a href="{{ route('albums.edit', $album->id) }}" class="bg-blue-500 text-white px-6 py-2 rounded-md hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-blue-500">Edit Album</a>
        </div>
    </div>

</body>
</html>

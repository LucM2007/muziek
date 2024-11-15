<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Album List</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="bg-gray-100 text-gray-900 font-sans antialiased">

    <div class="max-w-4xl mx-auto p-6 bg-white shadow-lg rounded-lg mt-10">
        <h1 class="text-3xl font-semibold text-center mb-6">Album List</h1>

        @if ($errors->any())
        <div class="bg-red-100 border-l-4 border-red-500 text-red-700 p-4 mb-6">
            <ul class="list-disc pl-5">
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
        @endif

        <ul class="space-y-4">
            @foreach ($albums as $album)
                <li class="flex items-center justify-between">
                    <a href="{{ route('albums.show', $album->id) }}" class="text-xl font-medium text-blue-500 hover:text-blue-700">
                        {{ $album->name }}
                    </a>
                    <form action="{{ route('albums.destroy', $album->id) }}" method="POST" class="flex items-center">
                        @csrf
                        @method('DELETE')
                        <button type="submit" 
                            class="ml-4 bg-red-500 text-white px-4 py-2 rounded-md hover:bg-red-700 focus:outline-none focus:ring-2 focus:ring-red-500">
                            Delete
                        </button>
                    </form>
                </li>
            @endforeach
        </ul>

        <div class="mt-6 text-center">
            <a href="{{ route('albums.create') }}" class="text-blue-500 hover:text-blue-700 font-medium">Create New Album</a>
        </div>
    </div>

</body>
</html>

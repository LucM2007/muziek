<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create New Song</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="bg-gray-100 text-gray-900 font-sans antialiased">
    <div class="max-w-3xl mx-auto p-6 bg-white shadow-lg rounded-lg mt-10">
        <h1 class="text-3xl font-semibold text-center mb-6">Create a New Song</h1>

        @if ($errors->any())
        <div class="bg-red-100 border-l-4 border-red-500 text-red-700 p-4 mb-6">
            <ul class="list-disc pl-5">
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
        @endif

        <form method="POST" action="{{ route('songs.store') }}">
            @csrf
            <!-- Song Name Input -->
            <div class="mb-4">
                <label for="title" class="block text-sm font-medium text-gray-700">Song Name:</label>
                <input type="text" id="title" name="title" maxlength="255" 
                    class="mt-2 block w-full px-4 py-2 border border-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500" required>
            </div>

            <!-- Singer Name Input -->
            <div class="mb-4">
                <label for="singer" class="block text-sm font-medium text-gray-700">Singer Name:</label>
                <input type="text" id="singer" name="singer" maxlength="255" 
                    class="mt-2 block w-full px-4 py-2 border border-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500" required>
            </div>

            <!-- Submit Button -->
            <div class="flex justify-end">
                <button type="submit" class="bg-blue-500 text-white px-6 py-2 rounded-md hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-blue-500">
                    Add Song
                </button>
            </div>
        </form>

        <div class="mt-6 text-center">
            <a href="{{ route('songs.index') }}" class="text-blue-500 hover:text-blue-700 font-medium">Back to Song List</a>
        </div>
    </div>
</body>
</html>

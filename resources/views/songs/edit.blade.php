<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Song</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="bg-gray-100 text-gray-900 font-sans antialiased">
    <div class="max-w-3xl mx-auto p-6 bg-white shadow-lg rounded-lg mt-10">
        <h1 class="text-3xl font-semibold text-center mb-6">Edit Song</h1>

        <form action="{{ route('songs.update', $Song->id) }}" method="POST">
            @csrf
            @method('PUT')

            <!-- Title Input -->
            <div class="mb-4">
                <label for="title" class="block text-sm font-medium text-gray-700">Titel:</label>
                <input type="text" id="title" name="title" value="{{ old('title', $Song->title) }}" required maxlength="100" 
                    class="mt-2 block w-full px-4 py-2 border border-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500">
            </div>

            <!-- Singer Input -->
            <div class="mb-4">
                <label for="singer" class="block text-sm font-medium text-gray-700">Zanger:</label>
                <input type="text" id="singer" name="singer" value="{{ old('singer', $Song->singer) }}" 
                    class="mt-2 block w-full px-4 py-2 border border-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500">
            </div>

            <!-- Submit Button -->
            <div class="flex justify-end">
                <button type="submit" class="bg-blue-500 text-white px-6 py-2 rounded-md hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-blue-500">
                    Bijwerken
                </button>
            </div>
        </form>
    </div>
</body>
</html>

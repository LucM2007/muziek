<!-- resources/views/bands/create.blade.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create Band</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="bg-gray-100 text-gray-900 font-sans antialiased">
    <div class="max-w-4xl mx-auto p-6 bg-white shadow-lg rounded-lg mt-10">
        <h1 class="text-3xl font-semibold text-center mb-6">Create a New Band</h1>

        @if ($errors->any())
        <div class="bg-red-100 border-l-4 border-red-500 text-red-700 p-4 mb-6">
            <ul class="list-disc pl-5">
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
        @endif

        <form action="{{ route('bands.store') }}" method="POST">
            @csrf
            <div class="mb-4">
                <label for="name" class="block text-gray-700">Band Name</label>
                <input type="text" id="name" name="name" class="w-full p-2 border border-gray-300 rounded" value="{{ old('name') }}" required>
            </div>

            <div class="mb-4">
                <label for="genre" class="block text-gray-700">Genre</label>
                <input type="text" id="genre" name="genre" class="w-full p-2 border border-gray-300 rounded" value="{{ old('genre') }}" required>
            </div>

            <div class="mb-4">
                <label for="founded" class="block text-gray-700">Founded Year</label>
                <input type="number" id="founded" name="founded" class="w-full p-2 border border-gray-300 rounded" value="{{ old('founded') }}" required>
            </div>

            <div class="mb-6">
                <label for="active_until" class="block text-gray-700">Active Until</label>
                <input type="text" id="active_until" name="active_until" class="w-full p-2 border border-gray-300 rounded" value="{{ old('active_until') }}" placeholder="Enter a year or 'heden'">
            </div>

            <div class="text-center">
                <button type="submit" class="bg-blue-500 text-white px-6 py-3 rounded hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-blue-500">Create Band</button>
            </div>
        </form>

        <div class="mt-6 text-center">
            <a href="{{ route('bands.index') }}" class="text-blue-500 hover:text-blue-700">Back to Band List</a>
        </div>
    </div>
</body>
</html>

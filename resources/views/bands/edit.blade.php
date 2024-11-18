<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Band</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="bg-gray-100 text-gray-900 font-sans antialiased">
    
<div class="max-w-4xl mx-auto p-6 bg-white shadow-lg rounded-lg mt-10">
    <h1 class="text-3xl font-bold text-center mb-6">Edit Band</h1>
    
    @if ($errors->any())
    <div class="bg-red-100 border-l-4 border-red-500 text-red-700 p-4 mb-6">
        <ul class="list-disc pl-5">
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif

    <form action="{{ route('bands.update', $band->id) }}" method="POST" class="space-y-6">
        @csrf
        @method('PUT')

        <div class="flex flex-wrap gap-6">
            <div class="flex-1 min-w-[300px]">
                <label for="name" class="block text-lg font-medium text-gray-700">Band Name</label>
                <input type="text" id="name" name="name" value="{{ old('name', $band->name) }}" required maxlength="100" 
                       class="mt-1 block w-full px-4 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500">
            </div>

            <div class="flex-1 min-w-[300px]">
                <label for="genre" class="block text-lg font-medium text-gray-700">Genre</label>
                <input type="text" id="genre" name="genre" value="{{ old('genre', $band->genre) }}" 
                       class="mt-1 block w-full px-4 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500">
            </div>
        </div>

        <div class="flex flex-wrap gap-6">
            <div class="flex-1 min-w-[300px]">
                <label for="founded" class="block text-lg font-medium text-gray-700">Founded Year</label>
                <input type="text" id="founded" name="founded" value="{{ old('founded', $band->founded) }}" 
                       class="mt-1 block w-full px-4 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500">
            </div>

            <div class="flex-1 min-w-[300px]">
                <label for="active_until" class="block text-lg font-medium text-gray-700">Active Until</label>
                <input type="text" id="active_until" name="active_until" value="{{ old('active_until', $band->active_until) }}" 
                       class="mt-1 block w-full px-4 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500">
            </div>
        </div>

        <div class="text-center">
            <button type="submit" class="mt-4 bg-blue-500 text-white px-6 py-3 rounded hover:bg-blue-600 focus:outline-none focus:ring-2 focus:ring-blue-500">Update Band</button>
        </div>
    </form>

    <div class="mt-6 text-center">
        <a href="{{ route('bands.index') }}" class="text-blue-500 hover:text-blue-700">Back to Band List</a>
    </div>
</div>

</body>
</html>

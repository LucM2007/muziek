<!-- resources/views/songs/show.blade.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Band Details</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="bg-gray-100 text-gray-900 font-sans antialiased">
    <div class="max-w-4xl mx-auto p-6 bg-white shadow-lg rounded-lg mt-10">
        <h1 class="text-3xl font-semibold text-center mb-6">Band Details</h1>

        @if ($errors->any())
        <div class="bg-red-100 border-l-4 border-red-500 text-red-700 p-4 mb-6">
            <ul class="list-disc pl-5">
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
        @endif

        <div class="space-y-4">
            <p class="text-xl font-medium"><strong>Name:</strong> {{ $band->name }}</p>
            <p class="text-xl font-medium"><strong>Genre:</strong> {{ $band->genre }}</p>
            <p class="text-xl font-medium"><strong>Year Founded:</strong> {{ $band->founded }}</p>
            <p class="text-xl font-medium"><strong>Active Until:</strong> {{ $band->active_until }}</p>
        </div>

        <div class="flex justify-between mt-6">
            <a href="{{ route('bands.index') }}" class="text-blue-500 hover:text-blue-700 font-medium">Back to Bands List</a>
            <a href="{{ route('bands.edit', $band->id) }}" class="text-blue-500 hover:text-blue-700 font-medium">Edit Band</a>
        </div>
    </div>
</body>
</html>

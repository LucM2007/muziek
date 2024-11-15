<!-- resources/views/bands/index.blade.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Band List</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="bg-gray-100 text-gray-900 font-sans antialiased">
    <div class="max-w-4xl mx-auto p-6 bg-white shadow-lg rounded-lg mt-10">
        <h1 class="text-3xl font-semibold text-center mb-6">Band List</h1>

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
            @foreach ($bands as $band)
            <li class="bg-white shadow-md rounded-lg p-4 flex justify-between items-center">
                <a href="{{ route('bands.show', $band->id) }}" class="text-xl font-medium text-blue-500 hover:text-blue-700">
                    {{ $band->name }}
                </a>

                <form action="{{ route('bands.destroy', $band->id) }}" method="post" class="ml-4">
                    @csrf  
                    @method('delete')
                    <button type="submit" class="bg-red-500 text-white px-4 py-2 rounded hover:bg-red-700 focus:outline-none focus:ring-2 focus:ring-red-500">
                        Delete
                    </button>
                </form>
            </li>
            @endforeach
        </ul>

        <div class="mt-6 text-center">
            <a href="{{ route('bands.create') }}" class="text-blue-500 hover:text-blue-700 font-medium">Create New Band</a>
        </div>
    </div>
</body>
</html>

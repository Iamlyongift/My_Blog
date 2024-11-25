<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    @vite('resources/css/app.css')
</head>

<body>
    <x-navbar />
    <section>
        <form action="{{ route('pages.store') }}" method="POST"
            class="max-w-lg mx-auto bg-white p-8 rounded-lg shadow-md mt-10">
            <!-- CSRF token for security -->
            @csrf

            <h2 class="text-2xl font-semibold text-gray-800 mb-6 text-center">Create a New Comment</h2>

            <!-- Ninja Name -->
            <label for="title" class="block text-gray-700 font-medium mb-2">Title:</label>
            <input type="text" id="title" name="title" value="{{ old('title') }}" required
                class="w-full border border-gray-300 p-3 rounded-lg focus:outline-none focus:border-indigo-500 mb-4">

            <!-- Ninja Skill -->
            <label for="content" class="block text-gray-700 font-medium mb-2">Content:</label>
            <textarea type="text" id="content" name="content" required
                class="w-full border border-gray-300 p-3 rounded-lg focus:outline-none focus:border-indigo-500 mb-4">{{ old('content') }}</textarea>

            <!-- Ninja author -->
            <label for="author" class="block text-gray-700 font-medium mb-2">Author:</label>
            <input rows="5" id="author" name="author" value="{{ old('author') }}" required
                class="w-full border border-gray-300 p-3 rounded-lg focus:outline-none focus:border-indigo-500 mb-4"></input>

            <!-- Select a Dojo -->
            <label for="dojo_id" class="block text-gray-700 font-medium mb-2">Dojo:</label>
            <select id="dojo_id" name="dojo_id" required
                class="w-full border border-gray-300 p-3 rounded-lg focus:outline-none focus:border-indigo-500 mb-4">
                <option value="" disabled selected>Select a dojo</option>
                @foreach ($dojos as $dojo)
                    <option value="{{ $dojo->id }}" {{ $dojo->id == old('dojo_id') ? 'selected' : '' }}>
                        {{ $dojo->name }}
                    </option>
                @endforeach
            </select>

            <!-- Submit Button -->
            <button type="submit"
                class="w-full bg-indigo-600 text-white font-semibold p-3 rounded-lg hover:bg-indigo-700 transition duration-300 mt-4">
                Create Ninja
            </button>

            <!-- Validation Errors -->
            <!-- Display error messages here if needed -->
            @if ($errors->any())
                <ul class="px-4 py-2 bg-red-100">
                    @foreach ($errors->all() as $error)
                        <li class="my-2 text-red-500">{{ $error }}</li>
                    @endforeach
                </ul>
            @endif
        </form>

    </section>
    <x-footer />
</body>

</html>

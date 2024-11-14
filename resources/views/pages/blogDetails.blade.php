<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blog Details</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-gray-100 font-sans leading-relaxed tracking-wide">
    <x-navbar />

    <!-- Blog Details Section -->
    <section class="max-w-5xl mx-auto mt-8 p-6 bg-white rounded-lg shadow-lg mb-10">
        <!-- Blog Title -->
        <h2 class="text-3xl font-bold text-gray-800 mb-6">{{ $blog->title }}</h2>

        <!-- Blog Content -->
        <div class="mb-8">
            <h3 class="text-lg font-semibold text-gray-800 mb-2">Content:</h3>
            <p class="text-gray-700 text-base leading-relaxed">{{ $blog->content }}</p>
        </div>

        <!-- Author Info -->
        <div class="flex items-center space-x-4 mt-8 border-t pt-6">
            <img src="https://via.placeholder.com/50" alt="Author Image"
                class="w-12 h-12 rounded-full border-2 border-gray-300" />
            <div>
                <p class="text-gray-600 font-semibold"><strong>Author:</strong> {{ $blog->author }}</p>
                <p class="text-sm text-gray-500">Posted on {{ date('F j, Y', strtotime($blog->created_at)) }}</p>
            </div>
        </div>
    </section>

    <!-- Additional Information Section -->
    <section class="max-w-5xl mx-auto mb-10 p-6 bg-white rounded-lg shadow-lg">
        <h3 class="text-2xl font-bold text-gray-800 mb-4">Additional Information</h3>
        <div class="text-gray-700 space-y-2">
            <p><span class="font-semibold">Name:</span> {{ $blog->dojo->name }}</p>
            <p><span class="font-semibold">Location:</span> {{ $blog->dojo->location }}</p>
            <p><span class="font-semibold">About:</span> {{ $blog->dojo->description }}</p>
        </div>
    </section>

    <x-footer />
</body>

</html>

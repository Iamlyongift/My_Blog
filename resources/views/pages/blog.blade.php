<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    @vite('resources/css/app.css')
</head>

<body class="bg-gray-100 text-gray-800">
    <x-navbar />
    <section class="container mx-auto px-4 mb-5">
        <h1 class="text-2xl font-semibold mb-6">Latest News</h1>
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
            @foreach ($blogs as $blog)
                <div class="bg-white shadow-lg rounded-lg p-6 transition-transform transform hover:scale-105">
                    <div>
                        <h2 class="text-xl font-bold mb-2">{{ $blog->title }}</h2>
                        <p>{{ $blog->dojo->name }}</p>
                    </div>
                    <x-card href="{{ route('pages.blogDetails', $blog->id) }}"
                        class="block bg-slate-700 text-white p-2 rounded">
                        <p class="text-sm text-gray-600">{{ $blog->author }}</p>
                    </x-card>
                </div>
            @endforeach
        </div>
    </section>

    <x-footer />
</body>

</html>

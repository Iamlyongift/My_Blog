<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome to My Blog</title>
    @vite('resources/css/app.css')
</head>

<body class="bg-gray-100 text-gray-800">
    <x-navbar />

    <!-- Hero Section -->
    <section
        class="relative w-full bg-cover bg-no-repeat bg-center h-[100vh] flex items-center justify-center text-center text-white"
        style="background-image: url('https://i.pinimg.com/736x/0f/ea/af/0feaaf01776ea6b3517d927a6dbaa758.jpg');">
        <div class="absolute inset-0 bg-black opacity-20"></div> <!-- Overlay for better text readability -->
        <div class="relative z-10 max-w-2xl mx-auto">
            <h1 class="text-4xl md:text-5xl font-bold mb-4">Welcome to My Blog</h1>
            <p class="text-lg md:text-xl mb-6">
                Discover stories, insights, and inspiration on a wide range of topics. Join us on a journey of knowledge
                and discovery!
            </p>
            <a href="{{ route('pages.blog') }}"
                class="bg-red-600 text-white px-6 py-3 rounded-full font-semibold hover:bg-red-700 transition duration-300">
                Explore Now
            </a>
        </div>
    </section>


</body>

</html>

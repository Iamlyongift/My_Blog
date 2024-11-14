<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    @vite('resources/css/app.css')
</head>

<body>
    <x-navbar />
    <section class="container mx-auto px-4 py-12">
        <div class="mt-12 bg-white p-8 rounded-lg shadow-md">
            <h3 class="text-2xl font-semibold text-blue-600 mb-4">Contact Us</h3>
            <p class="text-gray-700 mb-4">Have questions, suggestions, or just want to say hello? We're always open to
                feedback and ideas from our readers. Feel free to reach out through our contact page, and one of our
                team
                members will get back to you as soon as possible.</p>
            <p class="text-gray-700 mb-4">Email us at: <a href="mailto:info@myblog.com"
                    class="text-blue-600 hover:underline">info@myblog.com</a></p>
            <p class="text-gray-700 mb-4">Or visit our social media channels to stay updated with the latest posts and
                community discussions.</p>
            <a href="/contact"
                class="inline-block bg-blue-600 text-white px-6 py-2 rounded hover:bg-blue-700 transition">Contact
                Us</a>
        </div>
    </section>
    <x-footer />
</body>

</html>

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
        <div class="text-center">
            <h2 class="text-4xl font-bold text-gray-700 mb-4">About Us</h2>
            <p class="text-lg text-gray-600 max-w-2xl mx-auto">Welcome to My Blog! We are passionate about sharing
                insightful articles, stories, and tips on various topics to engage, educate, and inspire our readers.
            </p>
        </div>

        <!-- Mission Section -->
        <div class="mt-12 bg-white p-8 rounded-lg shadow-md">
            <h3 class="text-2xl font-semibold text-blue-600 mb-4">Our Mission</h3>
            <p class="text-lg text-gray-600 max-w-2xl mx-auto">
                Welcome to My Blog! Our platform is dedicated to delivering a diverse range of articles, insights, and
                resources on topics that matter to our readers, from lifestyle and technology to personal growth and
                entrepreneurship. Whether you're looking to stay updated on the latest trends, improve your skills, or
                find inspiration for your personal journey, we have something for everyone.
                <br><br>
                We believe that knowledge is power, and our mission is to empower our readers by providing content that
                is both informative and engaging. Our team of passionate writers, designers, and experts work tirelessly
                to create high-quality articles that not only inform but also inspire meaningful conversations. Through
                our blog, we aim to be a trusted source of information, encouragement, and thought-provoking ideas,
                helping you make better decisions in life, career, and beyond.
                <br><br>
                At My Blog, community is at the heart of everything we do. We strive to create a welcoming space where
                readers from all backgrounds can come together to learn, grow, and share their perspectives. Our
                platform is more than just a collection of articles—it's a community of curious minds who are eager to
                make a positive impact on the world. Join us on this journey, and let's explore, learn, and grow
                together.
            </p>
        </div>

        <div class="mt-12 bg-white p-8 rounded-lg shadow-md">
            <h3 class="text-2xl font-semibold text-blue-600 mb-4">Our Mission</h3>
            <p class="text-gray-700">Our mission is to create a vibrant community where ideas and knowledge can flow
                freely. We believe in the power of storytelling and aim to produce content that resonates with readers
                from all walks of life. Whether you’re looking to stay informed, learn new skills, or simply find
                inspiration, our blog is here to guide you on your journey.</p>
            <p class="text-gray-700 mt-4">By focusing on quality over quantity, we ensure that every article is
                well-researched, engaging, and relevant. We are committed to fostering meaningful discussions and
                encouraging our readers to explore different perspectives.</p>
        </div>
        <!-- Team Section -->
        <div class="mt-12 bg-white p-8 rounded-lg shadow-md">
            <h3 class="text-2xl font-semibold text-blue-600 mb-4">Meet Our Team</h3>
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <div class="text-center">
                    <img src="https://via.placeholder.com/150" alt="Team Member"
                        class="w-32 h-32 rounded-full mx-auto mb-4">
                    <h4 class="text-lg font-semibold">Alex Johnson</h4>
                    <p class="text-gray-600">Editor & Content Strategist</p>
                    <p class="text-gray-500 mt-2">Alex is the backbone of our editorial team, ensuring that each article
                        meets our high standards. With a keen eye for detail and a passion for storytelling, Alex shapes
                        the voice of our blog and keeps content fresh and relevant.</p>
                </div>
                <div class="text-center">
                    <img src="https://via.placeholder.com/150" alt="Team Member"
                        class="w-32 h-32 rounded-full mx-auto mb-4">
                    <h4 class="text-lg font-semibold">Emily Brown</h4>
                    <p class="text-gray-600">Lead Writer</p>
                    <p class="text-gray-500 mt-2">Emily is a versatile writer who covers a broad range of topics, from
                        lifestyle trends to in-depth tutorials. Her ability to simplify complex topics makes her writing
                        accessible and enjoyable for readers of all backgrounds.</p>
                </div>
                <div class="text-center">
                    <img src="https://via.placeholder.com/150" alt="Team Member"
                        class="w-32 h-32 rounded-full mx-auto mb-4">
                    <h4 class="text-lg font-semibold">Michael Green</h4>
                    <p class="text-gray-600">Graphic Designer</p>
                    <p class="text-gray-500 mt-2">Michael brings our content to life through engaging visuals and
                        creative designs. From article images to infographics, his work ensures that our readers have a
                        visually immersive experience on our site.</p>
                </div>
            </div>
        </div>
    </section>
    <x-footer />
</body>

</html>

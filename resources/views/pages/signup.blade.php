<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Responsive Login Page</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body>
    <x-navbar />

    <section class="bg-gray-100 flex items-center justify-center min-h-screen py-6">
        <div class="bg-white shadow-lg rounded-lg flex flex-col md:flex-row w-11/12 md:w-4/5 max-w-4xl">
            <!-- Left Section -->
            <div
                class="w-full md:w-1/2 bg-gray-900 p-8 md:p-10 rounded-t-lg md:rounded-l-lg flex flex-col justify-center items-start text-white">
                <h4 class="text-2xl font-bold mb-2">My_Blog</h4>
                <p class="mb-6">Where Stories Come to Life, One Post at a Time.💎</p>
            </div>

            <!-- Right Section -->
            <div class="w-full md:w-1/2 p-8 md:p-10 flex flex-col justify-center">
                <h2 class="text-2xl font-bold text-gray-800 mb-2">Hello Again!</h2>
                <p class="text-gray-600 mb-8">Welcome Back</p>
                <form class="space-y-6">
                    <div class="relative border-b border-gray-300">
                        <label for="fullname" class="text-gray-500 absolute -top-3.5 left-0 text-sm">Full Name</label>
                        <input type="text" id="fullname" placeholder=" "
                            class="w-full p-2 focus:outline-none focus:border-purple-500 border-b border-transparent">
                    </div>
                    <div class="relative border-b border-gray-300">
                        <label for="username" class="text-gray-500 absolute -top-3.5 left-0 text-sm">Username</label>
                        <input type="text" id="username" placeholder=" "
                            class="w-full p-2 focus:outline-none focus:border-purple-500 border-b border-transparent">
                    </div>
                    <div class="relative border-b border-gray-300">
                        <label for="email" class="text-gray-500 absolute -top-3.5 left-0 text-sm">Email
                            Address</label>
                        <input type="email" id="email" placeholder=" "
                            class="w-full p-2 focus:outline-none focus:border-purple-500 border-b border-transparent">
                    </div>
                    <div class="relative border-b border-gray-300">
                        <label for="password" class="text-gray-500 absolute -top-3.5 left-0 text-sm">Password</label>
                        <input type="password" id="password" placeholder=" "
                            class="w-full p-2 focus:outline-none focus:border-purple-500 border-b border-transparent">
                    </div>
                    <button type="submit"
                        class="w-full py-3 rounded bg-gray-200 hover:bg-red-700 hover:text-white transition">Login</button>
                </form>
                <p class="text-center text-gray-500 mt-4">
                    <a href="#" class="text-purple-600 hover:underline">Forgot Password?</a>
                </p>
            </div>
        </div>
    </section>
    <x-footer />
</body>

</html>

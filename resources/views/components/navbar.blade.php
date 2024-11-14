<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My_App</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body>
    <header>
        <nav class="bg-slate-700 text-white p-4 ">
            <div class="container mx-auto flex items-center justify-between">
                <!-- Logo -->
                <a href="{{ route('welcome') }}" class="text-2xl font-bold">My_<span class="text-red-700">Blog</span></a>

                <!-- Hamburger Icon for Mobile -->
                <button id="menu-btn" class="block lg:hidden focus:outline-none transition-all duration-300">
                    <!-- Hamburger Icon (default) -->
                    <svg id="hamburger-icon" class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                        xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M4 6h16M4 12h16M4 18h16"></path>
                    </svg>
                    <!-- Close (X) Icon (hidden by default) -->
                    <svg id="close-icon" class="w-8 h-8 hidden" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                        xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12">
                        </path>
                    </svg>
                </button>

                <!-- Nav Links (Desktop and Mobile) -->
                <ul id="menu"
                    class="hidden lg:flex lg:space-x-6 items-center lg:static lg:flex-row lg:bg-transparent lg:shadow-none bg-slate-700 lg:p-0 p-4 absolute top-16 right-0 left-0 z-10 flex-col text-center transition-all duration-300">
                    <li class="hover:text-red-700"><a href="{{ route('pages.about') }}">About Us</a></li>
                    <li class="hover:text-red-700"><a href="{{ route('pages.blog') }}">Blog</a></li>
                    <li class="hover:text-red-700"><a href="{{ route('pages.contact') }}">Contact</a></li>

                    <a class="btn inline-block rounded-full px-4 py-2 bg-red-700 text-white hover:bg-gray-200 hover:text-slate-700 transition"
                        href="{{ route('pages.signup') }}">Sign Up</a>

                </ul>
            </div>
        </nav>
    </header>

    <script>
        // JavaScript for toggling the mobile menu and icon
        const menuBtn = document.getElementById('menu-btn');
        const menu = document.getElementById('menu');
        const hamburgerIcon = document.getElementById('hamburger-icon');
        const closeIcon = document.getElementById('close-icon');

        menuBtn.addEventListener('click', () => {
            menu.classList.toggle('hidden');
            hamburgerIcon.classList.toggle('hidden');
            closeIcon.classList.toggle('hidden');
        });
    </script>
</body>

</html>

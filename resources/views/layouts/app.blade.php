<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Your Name - Portfolio')</title>
    <!-- Tailwind CSS CDN -->
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&family=Montserrat:wght@400;600;700&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Inter', sans-serif;
            background-color: #1a202c; /* Deep dark background */
            color: #e2e8f0; /* Light gray for primary text */
            line-height: 1.6;
        }
        h1, h2, h3, h4, h5, h6 {
            font-family: 'Montserrat', sans-serif;
        }
        .section-container {
            min-height: calc(100vh - 120px); /* Adjust based on nav/footer height */
            padding: 80px 0;
            display: flex;
            align-items: center;
            justify-content: center;
        }
        .card-glow {
            box-shadow: 0 0 15px rgba(234, 179, 8, 0.4); /* Subtle golden glow */
        }
    </style>
</head>
<body class="antialiased">
    <!-- Navigation Bar -->
    <nav class="bg-gray-900 shadow-xl p-4 sticky top-0 z-50">
        <div class="container mx-auto flex justify-between items-center px-4 md:px-8">
            <a href="{{ url('/') }}" class="text-3xl font-extrabold text-amber-400 hover:text-amber-300 transition duration-300 ease-in-out">Rafi Nurfadhil </a>
            <div class="hidden md:flex space-x-8">
                <a href="{{ url('/') }}" class="text-gray-300 hover:text-amber-400 text-lg font-medium transition duration-300 ease-in-out p-2 rounded">Home</a>
                <a href="{{ url('/about') }}" class="text-gray-300 hover:text-amber-400 text-lg font-medium transition duration-300 ease-in-out p-2 rounded">About Me</a>
                <a href="{{ url('/skills') }}" class="text-gray-300 hover:text-amber-400 text-lg font-medium transition duration-300 ease-in-out p-2 rounded">Skills</a>
                <a href="{{ url('/portfolio') }}" class="text-gray-300 hover:text-amber-400 text-lg font-medium transition duration-300 ease-in-out p-2 rounded">Portfolio</a>
                <a href="{{ url('/resume') }}" class="text-gray-300 hover:text-amber-400 text-lg font-medium transition duration-300 ease-in-out p-2 rounded">Resume</a>
                <a href="{{ url('/contact') }}" class="text-gray-300 hover:text-amber-400 text-lg font-medium transition duration-300 ease-in-out p-2 rounded">Contact</a>
            </div>
            <!-- Mobile Menu Button -->
            <button id="mobile-menu-button" class="md:hidden text-gray-300 hover:text-amber-400 focus:outline-none p-2 rounded">
                <svg class="w-7 h-7" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16m-7 6h7"></path>
                </svg>
            </button>
        </div>
        <!-- Mobile Menu -->
        <div id="mobile-menu" class="hidden md:hidden bg-gray-800 px-4 pt-2 pb-4 shadow-md">
            <a href="{{ url('/') }}" class="block text-gray-300 hover:text-amber-400 py-2 px-4 rounded-md text-base font-medium">Home</a>
            <a href="{{ url('/about') }}" class="block text-gray-300 hover:text-amber-400 py-2 px-4 rounded-md text-base font-medium">About Me</a>
            <a href="{{ url('/skills') }}" class="block text-gray-300 hover:text-amber-400 py-2 px-4 rounded-md text-base font-medium">Skills</a>
            <a href="{{ url('/portfolio') }}" class="block text-gray-300 hover:text-amber-400 py-2 px-4 rounded-md text-base font-medium">Portfolio</a>
            <a href="{{ url('/resume') }}" class="block text-gray-300 hover:text-amber-400 py-2 px-4 rounded-md text-base font-medium">Resume</a>
            <a href="{{ url('/contact') }}" class="block text-gray-300 hover:text-amber-400 py-2 px-4 rounded-md text-base font-medium">Contact</a>
        </div>
    </nav>

    <main class="min-h-screen">
        @yield('content')
    </main>

    <!-- Footer -->
    <footer class="bg-gray-900 text-gray-400 py-8 text-center shadow-inner mt-12">
        <div class="container mx-auto px-4 md:px-8">
            <p>&copy; <span id="current-year"></span> Your Name. All rights reserved.</p>
            <div class="flex justify-center space-x-6 mt-4">
                <a href="https://linkedin.com/in/yourprofile" target="_blank" class="text-gray-400 hover:text-amber-400 transition duration-300">
                    <svg fill="currentColor" viewBox="0 0 24 24" class="w-7 h-7"><path d="M16 8a6 6 0 016 6v7h-4v-7a2 2 0 00-2-2 2 2 0 00-2 2v7h-4v-7a6 6 0 016-6zM2 9h4v12H2zM4 6a2 2 0 110-4 2 2 0 010 4z"></path></svg>
                </a>
                <a href="https://github.com/yourprofile" target="_blank" class="text-gray-400 hover:text-amber-400 transition duration-300">
                    <svg fill="currentColor" viewBox="0 0 24 24" class="w-7 h-7"><path fill-rule="evenodd" d="M12 2C6.477 2 2 6.484 2 12.017c0 4.425 2.865 8.18 6.839 9.504.475.088.687-.206.687-.457 0-.223-.008-.813-.013-1.636-2.782.603-3.37-1.34-3.37-1.34-.454-1.15-1.11-1.462-1.11-1.462-.908-.62.068-.608.068-.608 1.007.073 1.532 1.03 1.532 1.03.89 1.528 2.336 1.085 2.903.829.09-.643.349-1.085.635-1.336-2.22-.25-4.555-1.11-4.555-4.945 0-1.09.39-1.986 1.029-2.684-.103-.252-.446-1.272.097-2.659 0 0 .84-.27 2.75 1.025A9.643 9.643 0 0112 6.844c.85.006 1.7.113 2.508.337 1.909-1.295 2.748-1.025 2.748-1.025.542 1.387.2 2.407.098 2.659.64.698 1.028 1.594 1.028 2.684 0 3.844-2.339 4.69-4.565 4.935.359.309.678.92.678 1.855 0 1.336-.012 2.417-.012 2.747 0 .254.209.55.694.456C20.137 20.19 23 16.42 23 12.017 23 6.484 18.522 2 13 2h-1z" clip-rule="evenodd"></path></svg>
                            </a>
                            <a href="https://twitter.com/yourprofile" target="_blank" class="text-gray-400 hover:text-amber-400 transition duration-300">
                                <svg fill="currentColor" viewBox="0 0 24 24" class="w-7 h-7"><path d="M8.29 20.251c7.547 0 11.675-6.253 11.675-11.675 0-.178 0-.355-.012-.53A8.348 8.348 0 0022 5.92a8.19 8.19 0 01-2.357.646A4.18 4.18 0 0021.6 4.6c-.772.434-1.62.75-2.527.921A4.149 4.149 0 0012.02 2c-2.457 0-4.444 1.992-4.444 4.444 0 .35.04.69.118 1.02A12.553 12.553 0 013 4.298a4.484 4.484 0 001.385 5.978 4.095 4.095 0 01-1.8-.49v.056c0 2.152 1.53 3.945 3.567 4.368A4.183 4.183 0 016.35 15.6c-.198 0-.394-.01-.585-.055.56 1.76 2.195 3.044 4.138 3.078A8.346 8.346 0 013.5 20.08c-.768 0-1.52-.045-2.246-.132.98 1.83 2.766 3.102 4.885 3.23a11.758 11.758 0 007.457 2.585c8.455 0 13.045-6.974 13.045-13.046 0-.199-.004-.398-.013-.597A9.324 9.324 0 0022 5.92l-.001-.001-.001-.001z"></path></svg>
                            </a>
                        </div>
                    </div>
                </footer>

    <script>
        // Toggle mobile menu visibility
        const mobileMenuButton = document.getElementById('mobile-menu-button');
        const mobileMenu = document.getElementById('mobile-menu');
        mobileMenuButton.addEventListener('click', () => {
            mobileMenu.classList.toggle('hidden');
        });

        // Set current year in footer
        document.getElementById('current-year').textContent = new Date().getFullYear();
    </script>
</body>
</html>

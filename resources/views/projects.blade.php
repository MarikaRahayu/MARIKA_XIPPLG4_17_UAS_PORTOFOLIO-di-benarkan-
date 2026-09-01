<!DOCTYPE html>
<html lang="en" class="scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Projects</title>

    <script src="https://cdn.tailwindcss.com"></script>

    <!-- ENABLE DARK MODE -->
    <script>
        tailwind.config = {
            darkMode: 'class'
        }
    </script>
</head>

<body class="bg-pink-50 dark:bg-gray-900 transition-colors duration-300">

<!-- NAVBAR -->
<nav class="bg-white dark:bg-gray-800 shadow-md fixed top-0 w-full z-50 transition-colors duration-300">

    <div class="max-w-7xl mx-auto px-6">
        <div class="flex justify-between items-center h-16">

            <h1 class="text-2xl font-bold text-pink-500">
                Marika Portfolio
            </h1>

            <ul class="flex space-x-6 text-gray-700 dark:text-gray-200 font-medium">
                <li><a href="/dashboard" class="hover:text-pink-500">Home</a></li>
                <li><a href="/about" class="hover:text-pink-500">About</a></li>
                <li><a href="/skills" class="hover:text-pink-500">Skills</a></li>
                <li><a href="/experience" class="hover:text-pink-500">Experience</a></li>
                <li><a href="/projects" class="text-pink-500 font-bold">Projects</a></li>
                <li><a href="/contact" class="hover:text-pink-500">Contact</a></li>
            </ul>

            <div class="flex items-center gap-3">

                <!-- DARK TOGGLE -->
                <button onclick="toggleDark()"
                    class="px-3 py-2 rounded-lg bg-gray-200 dark:bg-gray-700 text-sm">
                    🌙 / ☀️
                </button>

                <!-- LOGOUT -->
                <form action="/logout" method="POST">
                    @csrf
                    <button class="bg-red-500 text-white px-4 py-2 rounded-lg hover:bg-red-600">
                        Logout
                    </button>
                </form>

            </div>

        </div>
    </div>
</nav>

<!-- PROJECTS -->
<section class="pt-28 pb-16 min-h-screen
    bg-pink-50 dark:bg-gray-900 transition-colors duration-300">

    <div class="text-center mb-12">

        <h1 class="text-4xl font-bold text-gray-800 dark:text-white">
            Featured Projects
        </h1>

        <p class="text-gray-500 dark:text-gray-400 mt-2">
            Beberapa project yang pernah saya buat.
        </p>

    </div>

    <div class="max-w-6xl mx-auto grid md:grid-cols-3 gap-8 px-4">

        <!-- CARD 1 -->
        <div class="bg-white dark:bg-gray-800 rounded-xl shadow-md overflow-hidden hover:scale-105 transition">

            <img src="{{ asset('images/a.jpeg') }}"
                 class="w-full h-48 object-cover"
                 alt="Portfolio">

            <div class="p-5">

                <div class="text-4xl mb-3">🌐</div>

                <h3 class="text-xl font-bold text-gray-900 dark:text-white mb-2">
                    Portfolio Website
                </h3>

                <p class="text-gray-600 dark:text-gray-300 mb-4">
                    Website portofolio menggunakan Laravel, MySQL dan Tailwind CSS.
                </p>

                <a href="{{ route('project.portfolio') }}"
                   class="bg-pink-500 text-white px-4 py-2 rounded-lg hover:bg-pink-600">
                    View Project
                </a>

            </div>
        </div>

        <!-- CARD 2 -->
        <div class="bg-white dark:bg-gray-800 rounded-xl shadow-md overflow-hidden hover:scale-105 transition">

            <img src="{{ asset('images/c.jpeg') }}"
                 class="w-full h-48 object-cover"
                 alt="POS">

            <div class="p-5">

                <div class="text-4xl mb-3">📚</div>

                <h3 class="text-xl font-bold text-gray-900 dark:text-white mb-2">
                    Point of Sale (POS) System
                </h3>

                <p class="text-gray-600 dark:text-gray-300 mb-4">
                    Aplikasi POS berbasis web menggunakan Laravel dan MySQL.
                </p>

                <a href="{{ route('project.student') }}"
                   class="bg-pink-500 text-white px-4 py-2 rounded-lg hover:bg-pink-600">
                    View Project
                </a>

            </div>
        </div>

        <!-- CARD 3 -->
        <div class="bg-white dark:bg-gray-800 rounded-xl shadow-md overflow-hidden hover:scale-105 transition">

            <img src="{{ asset('images/a.jpeg') }}"
                 class="w-full h-48 object-cover"
                 alt="Game">

            <div class="p-5">

                <div class="text-4xl mb-3">🎮</div>

                <h3 class="text-xl font-bold text-gray-900 dark:text-white mb-2">
                    Platformer Game
                </h3>

                <p class="text-gray-600 dark:text-gray-300 mb-4">
                    Game 2D Platformer menggunakan Unity dengan fitur level dan score.
                </p>

                <a href="{{ route('project.game') }}"
                   class="bg-pink-500 text-white px-4 py-2 rounded-lg hover:bg-pink-600">
                    View Project
                </a>

            </div>
        </div>

    </div>

</section>

<!-- FOOTER -->
<footer class="bg-white dark:bg-gray-800 border-t mt-20 transition-colors duration-300">

    <div class="max-w-7xl mx-auto px-6 py-6 text-center">

        <h3 class="text-lg font-bold text-pink-500">
            Marika Portfolio
        </h3>

        <p class="text-gray-500 dark:text-gray-300 mt-2">
            Web Developer & UI/UX Designer
        </p>

        <p class="text-sm text-gray-400 mt-3">
            © 2026 Marika Rahayu. All Rights Reserved.
        </p>

    </div>

</footer>

<!-- DARK MODE SCRIPT -->
<script>
    function setTheme(mode) {
        if (mode === 'dark') {
            document.documentElement.classList.add('dark');
            localStorage.setItem('theme', 'dark');
        } else {
            document.documentElement.classList.remove('dark');
            localStorage.setItem('theme', 'light');
        }
    }

    function toggleDark() {
        if (document.documentElement.classList.contains('dark')) {
            setTheme('light');
        } else {
            setTheme('dark');
        }
    }

    (function () {
        const saved = localStorage.getItem('theme');
        if (saved === 'dark') {
            document.documentElement.classList.add('dark');
        }
    })();
</script>

</body>
</html>
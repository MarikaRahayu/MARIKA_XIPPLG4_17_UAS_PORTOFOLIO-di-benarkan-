<!DOCTYPE html>
<html lang="en" class="scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Skills - Marika Portfolio</title>

    <script src="https://cdn.tailwindcss.com"></script>

    <!-- DARK MODE ENABLE -->
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

            <ul class="flex space-x-6 font-medium text-gray-700 dark:text-gray-200">
                <li><a href="/dashboard" class="hover:text-pink-500">Home</a></li>
                <li><a href="/about" class="hover:text-pink-500">About</a></li>
                <li><a href="/skills" class="text-pink-500 font-bold">Skills</a></li>
                <li><a href="/experience" class="hover:text-pink-500">Experience</a></li>
                <li><a href="/projects" class="hover:text-pink-500">Projects</a></li>
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

<!-- SKILLS -->
<section class="pt-28 pb-16 min-h-screen
    bg-pink-50 dark:bg-gray-900 transition-colors duration-300">

    <div class="text-center mb-12">

        <h1 class="text-5xl font-bold text-gray-800 dark:text-white">
            Skills & Technologies
        </h1>

        <p class="text-gray-500 dark:text-gray-400 mt-3">
            Teknologi yang saya gunakan dalam pembuatan website dan game.
        </p>

    </div>

    <div class="max-w-5xl mx-auto grid md:grid-cols-3 gap-6 px-4">

        <!-- CARD -->
        <div class="bg-white dark:bg-gray-800 rounded-xl shadow-md p-5 text-center hover:scale-105 transition">
            <div class="text-4xl mb-2">🌐</div>
            <h3 class="font-bold text-gray-900 dark:text-white">HTML</h3>
            <div class="w-full bg-gray-200 dark:bg-gray-700 rounded-full h-2 mt-3">
                <div class="bg-pink-500 h-2 rounded-full w-[95%]"></div>
            </div>
            <p class="mt-2 text-sm text-gray-500 dark:text-gray-300">95%</p>
        </div>

        <div class="bg-white dark:bg-gray-800 rounded-xl shadow-md p-5 text-center hover:scale-105 transition">
            <div class="text-4xl mb-2">🎨</div>
            <h3 class="font-bold text-gray-900 dark:text-white">CSS</h3>
            <div class="w-full bg-gray-200 dark:bg-gray-700 rounded-full h-2 mt-3">
                <div class="bg-pink-500 h-2 rounded-full w-[90%]"></div>
            </div>
            <p class="mt-2 text-sm text-gray-500 dark:text-gray-300">90%</p>
        </div>

        <div class="bg-white dark:bg-gray-800 rounded-xl shadow-md p-5 text-center hover:scale-105 transition">
            <div class="text-4xl mb-2">⚡</div>
            <h3 class="font-bold text-gray-900 dark:text-white">JavaScript</h3>
            <div class="w-full bg-gray-200 dark:bg-gray-700 rounded-full h-2 mt-3">
                <div class="bg-pink-500 h-2 rounded-full w-[85%]"></div>
            </div>
            <p class="mt-2 text-sm text-gray-500 dark:text-gray-300">85%</p>
        </div>

        <div class="bg-white dark:bg-gray-800 rounded-xl shadow-md p-5 text-center hover:scale-105 transition">
            <div class="text-4xl mb-2">🐘</div>
            <h3 class="font-bold text-gray-900 dark:text-white">PHP</h3>
            <div class="w-full bg-gray-200 dark:bg-gray-700 rounded-full h-2 mt-3">
                <div class="bg-pink-500 h-2 rounded-full w-[90%]"></div>
            </div>
            <p class="mt-2 text-sm text-gray-500 dark:text-gray-300">90%</p>
        </div>

        <div class="bg-white dark:bg-gray-800 rounded-xl shadow-md p-5 text-center hover:scale-105 transition">
            <div class="text-4xl mb-2">🚀</div>
            <h3 class="font-bold text-gray-900 dark:text-white">Laravel</h3>
            <div class="w-full bg-gray-200 dark:bg-gray-700 rounded-full h-2 mt-3">
                <div class="bg-pink-500 h-2 rounded-full w-[88%]"></div>
            </div>
            <p class="mt-2 text-sm text-gray-300">88%</p>
        </div>

        <div class="bg-white dark:bg-gray-800 rounded-xl shadow-md p-5 text-center hover:scale-105 transition">
            <div class="text-4xl mb-2">💨</div>
            <h3 class="font-bold text-gray-900 dark:text-white">Tailwind CSS</h3>
            <div class="w-full bg-gray-200 dark:bg-gray-700 rounded-full h-2 mt-3">
                <div class="bg-pink-500 h-2 rounded-full w-[85%]"></div>
            </div>
            <p class="mt-2 text-sm text-gray-300">85%</p>
        </div>

        <div class="bg-white dark:bg-gray-800 rounded-xl shadow-md p-5 text-center hover:scale-105 transition">
            <div class="text-4xl mb-2">🗄️</div>
            <h3 class="font-bold text-gray-900 dark:text-white">MySQL</h3>
            <div class="w-full bg-gray-200 dark:bg-gray-700 rounded-full h-2 mt-3">
                <div class="bg-pink-500 h-2 rounded-full w-[80%]"></div>
            </div>
            <p class="mt-2 text-sm text-gray-300">80%</p>
        </div>

        <div class="bg-white dark:bg-gray-800 rounded-xl shadow-md p-5 text-center hover:scale-105 transition">
            <div class="text-4xl mb-2">🐱</div>
            <h3 class="font-bold text-gray-900 dark:text-white">GitHub</h3>
            <div class="w-full bg-gray-200 dark:bg-gray-700 rounded-full h-2 mt-3">
                <div class="bg-pink-500 h-2 rounded-full w-[82%]"></div>
            </div>
            <p class="mt-2 text-sm text-gray-300">82%</p>
        </div>

        <div class="bg-white dark:bg-gray-800 rounded-xl shadow-md p-5 text-center hover:scale-105 transition">
            <div class="text-4xl mb-2">🎮</div>
            <h3 class="font-bold text-gray-900 dark:text-white">Game Dev</h3>
            <div class="w-full bg-gray-200 dark:bg-gray-700 rounded-full h-2 mt-3">
                <div class="bg-pink-500 h-2 rounded-full w-[75%]"></div>
            </div>
            <p class="mt-2 text-sm text-gray-300">75%</p>
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
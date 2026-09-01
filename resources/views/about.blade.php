<!DOCTYPE html>
<html lang="en" class="scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Me</title>

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

            <ul class="flex space-x-6 font-medium text-gray-700 dark:text-gray-200">
                <li><a href="/dashboard" class="hover:text-pink-500">Home</a></li>
                <li><a href="/about" class="text-pink-500 font-bold">About</a></li>
                <li><a href="/skills" class="hover:text-pink-500">Skills</a></li>
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

<!-- ABOUT -->
<section class="min-h-screen flex items-center justify-center pt-24
    bg-pink-50 dark:bg-gray-900 transition-colors duration-300">

    <div class="bg-white dark:bg-gray-800 shadow-xl rounded-2xl p-10 max-w-5xl w-full mx-6 transition-colors duration-300">

        <div class="grid md:grid-cols-2 gap-10 items-center">

            <!-- LEFT -->
            <div>

                <p class="text-pink-500 font-semibold">
                    About Me
                </p>

                <h1 class="text-5xl font-bold text-gray-900 dark:text-white mt-2">
                    Marika <span class="text-pink-500">Rahayu</span>
                </h1>

                <h2 class="text-xl text-gray-600 dark:text-gray-300 mt-3">
                    Web Developer & UI/UX Designer
                </h2>

                <p class="mt-6 text-gray-600 dark:text-gray-400">
                    Saya adalah mahasiswa yang memiliki minat dalam
                    pengembangan website dan desain antarmuka.
                    Website portofolio ini dibuat untuk menampilkan
                    profil, keterampilan, pengalaman, dan project
                    yang pernah saya kerjakan.
                </p>

                <div class="mt-6">
                    <a href="/dashboard"
                       class="bg-pink-500 text-white px-6 py-3 rounded-lg hover:bg-pink-600">
                        Back Home
                    </a>
                </div>

            </div>

            <!-- RIGHT -->
            <div class="flex justify-center">

                <img src="{{ asset('images/profile.jpg.jpeg') }}"
                     alt="Profile"
                     class="w-64 h-64 rounded-full object-cover border-4 border-pink-500 shadow-lg">

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
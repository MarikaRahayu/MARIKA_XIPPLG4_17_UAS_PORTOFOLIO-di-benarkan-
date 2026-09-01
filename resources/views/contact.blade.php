<!DOCTYPE html>
<html lang="en" class="scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact - Marika Portfolio</title>

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
                <li><a href="/dashboard">Home</a></li>
                <li><a href="/about">About</a></li>
                <li><a href="/skills">Skills</a></li>
                <li><a href="/experience">Experience</a></li>
                <li><a href="/projects">Projects</a></li>
                <li><a href="/contact" class="text-pink-500 font-bold">Contact</a></li>
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

<!-- CONTACT -->
<section class="py-20 pt-28 min-h-screen
    bg-white dark:bg-gray-900 transition-colors duration-300">

    <div class="text-center mb-12">

        <h2 class="text-4xl font-bold text-gray-800 dark:text-white">
            Contact Me
        </h2>

        <p class="text-gray-500 dark:text-gray-400 mt-2">
            Mari berdiskusi dan bekerja sama dalam project yang menarik.
        </p>

    </div>

    <div class="max-w-6xl mx-auto px-6 grid md:grid-cols-2 gap-10">

        <!-- CONTACT INFO -->
        <div class="space-y-5">

            <div class="bg-pink-50 dark:bg-gray-800 p-6 rounded-2xl shadow">
                <h3 class="font-bold text-lg text-gray-900 dark:text-white mb-2">
                    📧 Email:
                </h3>
               <p class="text-gray-600 dark:text-gray-300 font-extrabold">
    marikarahayu2@gmail.com
</p>
            </div>

            <div class="bg-pink-50 dark:bg-gray-800 p-6 rounded-2xl shadow">
                <h3 class="font-bold text-lg text-gray-900 dark:text-white mb-2">
                    📱 WhatsApp:
                </h3>
<p class="text-gray-600 dark:text-gray-300 font-extrabold">
    089507959279
</p>
            </div>

            <!-- Instagram -->
            <div class="bg-pink-50 dark:bg-gray-800 p-6 rounded-2xl shadow">
                <a href="https://instagram.com/ikaachuuuuuu"
                   target="_blank"
                   class="flex items-center gap-3">

                    <span class="text-2xl">📷</span>

                    <div class="text-gray-700 dark:text-gray-200">
                        <p class="font-bold">INSTAGRAM:</p>
                       <p class="font-bold text-gray-600 dark:text-gray-300">
    @ikaachuuuuuu
</p>
                    </div>

                </a>
            </div>

            <!-- GitHub -->
            <div class="bg-pink-50 dark:bg-gray-800 p-6 rounded-2xl shadow">
                <h3 class="font-bold text-lg text-gray-900 dark:text-white mb-2">
                    💻 GitHub
                </h3>

                <a href="https://github.com/242519299-art"
                   target="_blank"
                   class="text-pink-500 font-semibold">
                    github.com/242519299-art
                </a>
            </div>

            <!-- Address -->
            <div class="bg-pink-50 dark:bg-gray-800 p-6 rounded-2xl shadow">
                <h3 class="font-bold text-lg text-gray-900 dark:text-white mb-2">
                    📍 Address
                </h3>
                <p class="text-gray-600 dark:text-gray-300">
                    Indonesia
                </p>
            </div>

        </div>

        <!-- FORM -->
        <div class="bg-pink-50 dark:bg-gray-800 p-8 rounded-2xl shadow-lg">

            <form>

                <input type="text"
                       placeholder="Nama Lengkap"
                       class="w-full mb-4 border border-gray-300 rounded-lg p-3
                              dark:bg-gray-700 dark:border-gray-600 dark:text-white">

                <input type="email"
                       placeholder="Email"
                       class="w-full mb-4 border border-gray-300 rounded-lg p-3
                              dark:bg-gray-700 dark:border-gray-600 dark:text-white">

                <textarea rows="5"
                          placeholder="Tulis pesan..."
                          class="w-full mb-4 border border-gray-300 rounded-lg p-3
                                 dark:bg-gray-700 dark:border-gray-600 dark:text-white"></textarea>

                <button type="submit"
                        class="w-full bg-pink-500 hover:bg-pink-600 text-white py-3 rounded-lg font-semibold">
                    Kirim Pesan
                </button>

            </form>

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
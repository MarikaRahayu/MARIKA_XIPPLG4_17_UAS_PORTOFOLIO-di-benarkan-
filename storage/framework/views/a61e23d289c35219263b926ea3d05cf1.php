<!DOCTYPE html>
<html lang="en" class="scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Experience - Marika Portfolio</title>

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
                <li><a href="/about" class="hover:text-pink-500">About</a></li>
                <li><a href="/skills" class="hover:text-pink-500">Skills</a></li>
                <li><a href="/experience" class="text-pink-500 font-bold">Experience</a></li>
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
                    <?php echo csrf_field(); ?>
                    <button class="bg-red-500 text-white px-4 py-2 rounded-lg hover:bg-red-600">
                        Logout
                    </button>
                </form>

            </div>

        </div>
    </div>
</nav>

<!-- SPACER -->
<div class="h-20"></div>

<!-- EXPERIENCE -->
<section class="pb-16 min-h-screen
    bg-pink-50 dark:bg-gray-900 transition-colors duration-300">

    <div class="max-w-5xl mx-auto px-4">

        <!-- HEADER -->
        <div class="text-center mb-10">

            <h1 class="text-4xl md:text-5xl font-bold text-gray-800 dark:text-white">
                Experience
            </h1>

            <p class="text-gray-500 dark:text-gray-400 mt-3">
                Riwayat pendidikan dan project yang pernah saya kerjakan.
            </p>

        </div>

        <!-- CARDS -->
        <div class="grid md:grid-cols-2 gap-6">

            <!-- PENDIDIKAN -->
            <div class="bg-white dark:bg-gray-800 rounded-xl shadow-md p-6 hover:scale-105 transition">

                <div class="text-4xl mb-3">🎓</div>

                <h2 class="text-2xl font-bold text-gray-900 dark:text-white mb-4">
                    Pendidikan
                </h2>

                <ul class="space-y-2 text-gray-600 dark:text-gray-300">
                    <li>📚 SD Muhammadiyah 26</li>
                    <li>📚 SMP Negeri 17 Tasikmalaya</li>
                    <li>📚 SMK Negeri 4 Tasikmalaya</li>
                </ul>

            </div>

            <!-- PROJECT -->
            <div class="bg-white dark:bg-gray-800 rounded-xl shadow-md p-6 hover:scale-105 transition">

                <div class="text-4xl mb-3">💻</div>

                <h2 class="text-2xl font-bold text-gray-900 dark:text-white mb-4">
                    Pengalaman Project
                </h2>

                <ul class="space-y-2 text-gray-600 dark:text-gray-300">
                    <li>🌐 Website Portfolio Pribadi</li>
                    <li>📊 Sistem Manajemen Siswa</li>
                    <li>🎮 Platformer Game 2D</li>
                </ul>

            </div>

        </div>

        <!-- INFO -->
        <div class="bg-white dark:bg-gray-800 rounded-xl shadow-md p-6 mt-8 hover:scale-105 transition">

            <h2 class="text-2xl font-bold text-gray-900 dark:text-white mb-4">
                Kegunaan Halaman Experience
            </h2>

            <ul class="space-y-2 text-gray-600 dark:text-gray-300">
                <li>✅ Menampilkan riwayat pendidikan.</li>
                <li>✅ Menunjukkan pengalaman project.</li>
                <li>✅ Memberikan gambaran kemampuan.</li>
                <li>✅ Menjadi nilai tambah portfolio.</li>
            </ul>

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
</html><?php /**PATH C:\laragon\www\MARIKA_XIPPLG4_17_UAS_PORTOFOLIO\resources\views/experience.blade.php ENDPATH**/ ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Platformer Game Storyboard</title>

    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-pink-50">

<div class="max-w-5xl mx-auto py-10 px-6">

    <!-- Tombol Kembali -->
    <a href="/dashboard"
       class="inline-block bg-pink-500 hover:bg-pink-600 text-white px-5 py-2 rounded-lg mb-6">
        ← Back 
    </a>

    <!-- Card Project -->
    <div class="bg-white rounded-2xl shadow-lg overflow-hidden">

        <!-- Gambar -->
        <img src="{{ asset('images/b.jpeg') }}"
             alt="Platformer Game Storyboard"
             class="w-full">

        <!-- Isi -->
        <div class="p-8">

            <h1 class="text-4xl font-bold text-gray-800 mb-4">
                Platformer Game Storyboard
            </h1>

            <p class="text-gray-600 leading-8 mb-4">
                Project ini merupakan perancangan storyboard game platformer
                yang dibuat sebagai dasar pengembangan game. Storyboard
                digunakan untuk menggambarkan alur permainan, karakter,
                desain level, serta mekanisme gameplay sebelum proses
                implementasi dilakukan.
            </p>

            <h2 class="text-2xl font-semibold mb-3 text-pink-500">
                Tujuan Project
            </h2>

            <ul class="list-disc ml-6 text-gray-600 leading-8">
                <li>Membuat alur cerita permainan yang jelas.</li>
                <li>Merancang karakter utama dan musuh.</li>
                <li>Mendesain level dan tantangan permainan.</li>
                <li>Menentukan mekanisme gameplay.</li>
                <li>Menjadi panduan sebelum proses coding game.</li>
            </ul>

            <h2 class="text-2xl font-semibold mt-8 mb-3 text-pink-500">
                Fitur yang Dirancang
            </h2>

            <ul class="list-disc ml-6 text-gray-600 leading-8">
                <li>Karakter dapat berjalan dan melompat.</li>
                <li>Sistem pengumpulan koin.</li>
                <li>Musuh dengan pola pergerakan tertentu.</li>
                <li>Checkpoint dan sistem nyawa.</li>
                <li>Level progression.</li>
                <li>Menu Start dan Game Over.</li>
            </ul>

            <h2 class="text-2xl font-semibold mt-8 mb-3 text-pink-500">
                Teknologi yang Digunakan
            </h2>

            <div class="flex gap-3 flex-wrap">

                <span class="bg-purple-100 text-purple-700 px-4 py-2 rounded-full">
                    Unity
                </span>

                <span class="bg-blue-100 text-blue-700 px-4 py-2 rounded-full">
                    Storyboard
                </span>

                <span class="bg-green-100 text-green-700 px-4 py-2 rounded-full">
                    Game Design
                </span>

                <span class="bg-yellow-100 text-yellow-700 px-4 py-2 rounded-full">
                    Level Design
                </span>

            </div>

        </div>

    </div>

</div>

</body>
</html>
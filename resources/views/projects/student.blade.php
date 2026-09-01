<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Management</title>

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
        <img src="{{ asset('images/c.jpeg') }}"
             alt="Student Management"
             class="w-full">

        <!-- Isi -->
        <div class="p-8">

           <h1 class="text-4xl font-bold text-gray-800 mb-4">
    Point of Sale (POS) System
</h1>
 <p class="text-gray-600 leading-8 mb-4">
    Point of Sale (POS) System adalah aplikasi berbasis web yang dibuat menggunakan
    Laravel dan MySQL untuk membantu proses pengelolaan penjualan, produk,
    transaksi, serta monitoring aktivitas bisnis secara lebih cepat dan efisien.
    Sistem dilengkapi dengan dashboard yang menampilkan ringkasan penjualan harian,
    jumlah transaksi, serta status pembayaran untuk memudahkan pengambilan keputusan.
</p>

            <h2 class="text-2xl font-semibold mb-3 text-pink-500">
                Fitur Utama
            </h2>

            <ul class="list-disc ml-6 text-gray-600 leading-8">
    <li>Login Authentication</li>
    <li>Dashboard Penjualan</li>
    <li>Manajemen Produk</li>
    <li>CRUD Data Produk</li>
    <li>Transaksi Penjualan</li>
    <li>Monitoring Penjualan Harian</li>
    <li>Status Pembayaran dan Kas</li>
    <li>Manajemen User</li>
    <li>Pencarian Data Produk</li>
    <li>Responsive Design</li>
</ul>

            <h2 class="text-2xl font-semibold mt-8 mb-3 text-pink-500">
                Teknologi yang Digunakan
            </h2>

            <div class="flex gap-3 flex-wrap">

                <span class="bg-green-100 text-green-700 px-4 py-2 rounded-full">
                    Laravel
                </span>

                <span class="bg-yellow-100 text-yellow-700 px-4 py-2 rounded-full">
                    MySQL
                </span>

                <span class="bg-blue-100 text-blue-700 px-4 py-2 rounded-full">
                    Tailwind CSS
                </span>

                <span class="bg-purple-100 text-purple-700 px-4 py-2 rounded-full">
                    PHP
                </span>

            </div>

        </div>

    </div>

</div>

</body>
</html>
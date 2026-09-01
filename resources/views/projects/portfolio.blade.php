<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portfolio Website</title>

    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-pink-50">

<div class="max-w-5xl mx-auto py-10 px-6">

    <a href="/dashboard"
       class="inline-block mb-6 bg-pink-500 text-white px-5 py-2 rounded-lg">
        ← Back
    </a>

    <div class="bg-white rounded-2xl shadow-lg overflow-hidden">

        <img src="{{ asset('images/a.jpeg') }}"
             alt="Portfolio Website"
             class="w-full">

        <div class="p-8">

            <h1 class="text-4xl font-bold text-gray-800 mb-4">
                Portfolio Website
            </h1>

          <p class="text-gray-600 leading-8">
    Portfolio Website merupakan website pribadi yang dirancang untuk
    menampilkan profil, keterampilan, pengalaman, proyek, dan informasi
    kontak dalam satu platform yang modern dan responsif. Website ini
    dibuat menggunakan Laravel, PHP, MySQL, dan Tailwind CSS untuk
    memberikan tampilan yang menarik serta pengalaman pengguna yang baik.
</p>

<p class="text-gray-600 leading-8 mt-4">
    Melalui website ini, pengunjung dapat melihat informasi tentang
    kemampuan yang dimiliki, pengalaman yang pernah dijalani, serta
    berbagai proyek yang telah dikerjakan. Selain itu, website juga
    dilengkapi dengan sistem login dan dashboard untuk mengelola konten
    secara lebih mudah.
</p>

            <p class="text-gray-600 leading-8 mt-4">
                Fitur yang dibuat:
            </p>

            <ul class="list-disc ml-6 mt-2 text-gray-600">
                <li>Login Authentication</li>
                <li>Dashboard Portfolio</li>
                <li>Skills Section</li>
                <li>Experience Section</li>
                <li>Project Section</li>
                <li>Contact Form</li>
                <li>Responsive Design</li>
            </ul>

        </div>

    </div>

</div>

</body>
</html>
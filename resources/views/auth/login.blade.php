<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - Marika Portfolio</title>

    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="min-h-screen flex items-center justify-center bg-gradient-to-br from-pink-100 via-rose-100 to-pink-200">

    <div class="w-full max-w-md bg-white rounded-3xl shadow-2xl p-10 border border-pink-200">

        <!-- Logo -->
        <div class="text-center mb-8">

            <div class="w-24 h-24 mx-auto rounded-full overflow-hidden border-4 border-pink-300 shadow-lg">
                <img src="{{ asset('images/profile.jpg.jpeg') }}"
                     alt="Marika"
                     class="w-full h-full object-cover">
            </div>

            <h1 class="text-3xl font-bold text-pink-500 mt-4">
                Marika Portfolio
            </h1>

            <p class="text-gray-500 mt-2">
                Silahkan Login
            </p>

        </div>

        <!-- Error -->
        @if ($errors->any())
            <div class="mb-4 p-3 rounded-xl bg-red-100 border border-red-300 text-red-700 text-sm">
                {{ $errors->first() }}
            </div>
        @endif

        <!-- Form -->
        <form method="POST" action="{{ route('login.post') }}" class="space-y-5">
            @csrf

            <!-- Email -->
            <div>
                <label class="block text-sm font-medium text-gray-700 mb-2">
                    Email
                </label>

                <input
                    type="email"
                    name="email"
                    value="{{ old('email') }}"
                    placeholder="Enter your email"
                    required
                    class="w-full px-4 py-3 rounded-xl border border-pink-200 focus:outline-none focus:ring-2 focus:ring-pink-300 focus:border-pink-300"
                >
            </div>

            <!-- Password -->
            <div>
                <label class="block text-sm font-medium text-gray-700 mb-2">
                    Password
                </label>

                <input
                    type="password"
                    id="password"
                    name="password"
                    placeholder="Enter your password"
                    required
                    class="w-full px-4 py-3 rounded-xl border border-pink-200 focus:outline-none focus:ring-2 focus:ring-pink-300 focus:border-pink-300"
                >
            </div>

            <!-- Tampilkan Password -->
            <div class="flex items-center">
                <input
                    type="checkbox"
                    id="showPassword"
                    class="w-4 h-4 text-pink-500 border-pink-300 rounded cursor-pointer">

                <label for="showPassword" class="ml-2 text-sm text-gray-600 cursor-pointer">
                    Tampilkan Password
                </label>
            </div>

            <!-- Button -->
            <button
                type="submit"
                class="w-full bg-pink-400 hover:bg-pink-500 text-white font-semibold py-3 rounded-xl transition duration-300 shadow-md">
                Login
            </button>

        </form>

        <!-- Footer -->
        <div class="mt-8 text-center">
            <p class="text-sm text-gray-500">
                © {{ date('Y') }} Marika Portfolio
            </p>
        </div>

    </div>

    <!-- Script Show/Hide Password -->
    <script>
        const showPassword = document.getElementById('showPassword');
        const passwordInput = document.getElementById('password');

        showPassword.addEventListener('change', function () {
            passwordInput.type = this.checked ? 'text' : 'password';
        });
    </script>

</body>
</html>
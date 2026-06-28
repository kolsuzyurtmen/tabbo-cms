<!DOCTYPE html>
<html lang="tr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tabbo Hotel</title>

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="bg-[#0f172a] text-white">

    <!-- Navbar -->
    <nav class="bg-[#1e293b] border-b border-slate-700">
        <div class="max-w-7xl mx-auto flex justify-between items-center p-5">

            <h1 class="text-3xl font-bold text-yellow-400">
                TABBO
            </h1>

            <div class="space-x-8">
                <a href="#" class="hover:text-yellow-400">Home</a>
                <a href="#" class="hover:text-yellow-400">Community</a>
                <a href="#" class="hover:text-yellow-400">News</a>
                <a href="#" class="hover:text-yellow-400">Staff</a>
            </div>

            <div>
                <a href="/login"
                   class="bg-yellow-400 text-black px-5 py-2 rounded font-bold">
                    Enter Hotel
                </a>
            </div>

        </div>
    </nav>

    <!-- Hero -->
    <section class="text-center py-32">

        <h2 class="text-6xl font-extrabold text-yellow-400">
            Welcome to Tabbo
        </h2>

        <p class="text-xl text-gray-300 mt-6">
            Join thousands of players in our retro hotel.
        </p>

        <div class="mt-10">
            <a href="/register"
               class="bg-blue-500 px-8 py-4 rounded-lg font-bold hover:bg-blue-600">
                Create Account
            </a>
        </div>

    </section>

</body>
</html>
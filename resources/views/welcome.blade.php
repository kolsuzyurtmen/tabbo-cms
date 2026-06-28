<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tabbo CMS</title>

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-gray-100">

    <!-- Navbar -->
    <nav class="bg-white shadow">
        <div class="max-w-7xl mx-auto px-6 py-4 flex justify-between items-center">

            <h1 class="text-2xl font-bold text-blue-600">
                Tabbo CMS
            </h1>

            <div class="space-x-6">
                <a href="#" class="hover:text-blue-600">Ana Sayfa</a>
                <a href="#" class="hover:text-blue-600">Odalar</a>
                <a href="#" class="hover:text-blue-600">Restoran</a>
                <a href="#" class="hover:text-blue-600">Spa</a>
                <a href="#" class="hover:text-blue-600">İletişim</a>
            </div>

        </div>
    </nav>

    <!-- Hero -->
<section class="relative h-screen overflow-hidden">

    <img
        src="https://images.unsplash.com/photo-1566073771259-6a8506099945?q=80&w=1920"
        class="absolute inset-0 w-full h-full object-cover"
        alt="Hotel">

    <div class="absolute inset-0 bg-black/60"></div>

    <div class="relative z-10 h-full flex flex-col justify-center items-center text-center text-white px-6">

        <h2 class="text-6xl md:text-7xl font-bold mb-6">
            Luxury Hotel Experience
        </h2>

        <p class="text-xl md:text-2xl mb-10 text-gray-200">
            Discover comfort, elegance and unforgettable moments.
        </p>

        <div class="flex gap-4">

            <a href="#"
               class="bg-white text-black px-8 py-3 rounded-lg font-semibold hover:bg-gray-200 transition">
                Book Now
            </a>

            <a href="#"
               class="border border-white px-8 py-3 rounded-lg hover:bg-white hover:text-black transition">
                Explore
            </a>

        </div>

    </div>

</section>

</body>
</html>
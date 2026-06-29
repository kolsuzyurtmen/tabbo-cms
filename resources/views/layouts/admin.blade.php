<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tabbo CMS</title>

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="bg-slate-100">

<div class="flex min-h-screen">

    <!-- Sidebar -->
    <aside class="w-64 bg-slate-900 text-white">

        <div class="p-6 text-3xl font-bold border-b border-slate-700">
            🏨 TABBO CMS
        </div>

        <nav class="p-4 space-y-2">

            <a href="/admin"
               class="block p-3 rounded hover:bg-slate-700">
                🏠 Dashboard
            </a>

            <a href="/admin/news"
               class="block p-3 rounded hover:bg-slate-700">
                📰 Haberler
            </a>

            <a href="#"
               class="block p-3 rounded hover:bg-slate-700">
                👥 Kullanıcılar
            </a>

            <a href="#"
               class="block p-3 rounded hover:bg-slate-700">
                🛡 Personeller
            </a>

            <a href="#"
               class="block p-3 rounded hover:bg-slate-700">
                ⚙ Ayarlar
            </a>

            <hr class="border-slate-700 my-3">

            <a href="/"
               class="block p-3 rounded hover:bg-slate-700">
                🌐 Siteye Git
            </a>

        </nav>

    </aside>

    <!-- İçerik -->
    <main class="flex-1 p-8">

        @yield('content')

    </main>

</div>

</body>
</html>
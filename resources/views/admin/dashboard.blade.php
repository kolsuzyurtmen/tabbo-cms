<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <title>Tabbo CMS</title>

    @vite(['resources/css/app.css','resources/js/app.js'])
</head>

<body class="bg-slate-100">

<div class="flex min-h-screen">

    <!-- Sidebar -->

    <aside class="w-64 bg-slate-900 text-white">

        <div class="text-3xl font-bold p-6 border-b border-slate-700">
            TABBO CMS
        </div>

        <nav class="p-4 space-y-3">

            <a href="/admin"
               class="block hover:bg-slate-700 p-3 rounded">
                🏠 Dashboard
            </a>

            <a href="/news"
               class="block hover:bg-slate-700 p-3 rounded">
                📰 Haberler
            </a>

            <a href="#"
               class="block hover:bg-slate-700 p-3 rounded">
                👥 Kullanıcılar
            </a>

            <a href="#"
               class="block hover:bg-slate-700 p-3 rounded">
                🛡 Personeller
            </a>

            <a href="#"
               class="block hover:bg-slate-700 p-3 rounded">
                ⚙ Ayarlar
            </a>

        </nav>

    </aside>

    <!-- İçerik -->

    <main class="flex-1 p-10">

        <h1 class="text-4xl font-bold mb-8">
            Dashboard
        </h1>

        <div class="grid grid-cols-3 gap-6">

            <div class="bg-white rounded-xl shadow p-6">
                <h2 class="text-xl font-bold">
                    Haber Sayısı
                </h2>

                <div class="text-5xl mt-5">
                    {{ $news }}
                </div>
            </div>

            <div class="bg-white rounded-xl shadow p-6">
                <h2 class="text-xl font-bold">
                    Kullanıcı Sayısı
                </h2>

                <div class="text-5xl mt-5">
                    {{ $users }}
                </div>
            </div>

            <div class="bg-white rounded-xl shadow p-6">
                <h2 class="text-xl font-bold">
                    Sunucu
                </h2>

                <div class="text-3xl mt-5 text-green-600">
                    🟢 ONLINE
                </div>
            </div>

        </div>

    </main>

</div>

</body>
</html>
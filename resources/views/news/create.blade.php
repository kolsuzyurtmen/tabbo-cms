<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <title>Yeni Haber</title>

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-gray-100">

<div class="max-w-4xl mx-auto mt-10 bg-white p-8 rounded-xl shadow">

    <h1 class="text-3xl font-bold mb-6">
        Yeni Haber Ekle
    </h1>

    <form action="/news" method="POST">

        @csrf

        <label class="block mb-2 font-bold">
            Başlık
        </label>

        <input
            type="text"
            name="title"
            class="border rounded w-full p-3 mb-6">

        <label class="block mb-2 font-bold">
            İçerik
        </label>

        <textarea
            name="content"
            class="border rounded w-full p-3 h-56 mb-6"></textarea>

        <button
            class="bg-blue-600 text-white px-8 py-3 rounded hover:bg-blue-700">
            Haberi Kaydet
        </button>

    </form>

</div>

</body>
</html>
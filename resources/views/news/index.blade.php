<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <title>Haberler</title>

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-gray-100 p-10">

    <h1 class="text-4xl font-bold mb-6">
        Haberler
    </h1>

    @foreach($news as $item)
        <div class="bg-white p-5 rounded-lg shadow mb-4">
            <h2 class="text-2xl font-bold">
                {{ $item->title }}
            </h2>

            <p class="mt-2">
                {{ $item->content }}
            </p>
        </div>
    @endforeach

</body>
</html>
@extends('layouts.admin')

@section('content')

<h1 class="text-4xl font-bold mb-8">
    Dashboard
</h1>

<div class="grid grid-cols-1 md:grid-cols-3 gap-6">

    <div class="bg-white rounded-xl shadow p-6">
        <h2 class="text-xl font-bold text-gray-700">
            📰 Haber Sayısı
        </h2>

        <div class="text-5xl font-bold mt-5 text-blue-600">
            {{ $news }}
        </div>
    </div>

    <div class="bg-white rounded-xl shadow p-6">
        <h2 class="text-xl font-bold text-gray-700">
            👥 Kullanıcı Sayısı
        </h2>

        <div class="text-5xl font-bold mt-5 text-green-600">
            {{ $users }}
        </div>
    </div>

    <div class="bg-white rounded-xl shadow p-6">
        <h2 class="text-xl font-bold text-gray-700">
            🟢 Sunucu
        </h2>

        <div class="text-3xl font-bold mt-5 text-green-600">
            ONLINE
        </div>
    </div>

</div>

@endsection
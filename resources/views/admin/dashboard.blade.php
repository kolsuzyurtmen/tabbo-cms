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
<div class="grid grid-cols-1 md:grid-cols-2 gap-6 mt-8">

    <div class="bg-white rounded-xl shadow p-6">

        <h2 class="text-xl font-bold mb-4">
            📰 Son Eklenen Haber
        </h2>

        @if($lastNews)

            <div class="text-lg font-semibold">
                {{ $lastNews->title }}
            </div>

            <div class="text-gray-500 mt-2">
                {{ $lastNews->created_at->format('d.m.Y H:i') }}
            </div>

        @else

            <div class="text-gray-500">
                Henüz haber eklenmedi.
            </div>

        @endif

    </div>

    <div class="bg-white rounded-xl shadow p-6">

        <h2 class="text-xl font-bold mb-4">
            👤 Son Kayıt Olan Kullanıcı
        </h2>

        @if($lastUser)

            <div class="text-lg font-semibold">
                {{ $lastUser->name }}
            </div>

            <div class="text-gray-500 mt-2">
                {{ $lastUser->email }}
            </div>

        @else

            <div class="text-gray-500">
                Henüz kullanıcı yok.
            </div>

        @endif

    </div>

</div>
@endsection
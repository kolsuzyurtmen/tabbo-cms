@extends('layouts.admin')

@section('content')

<h1 class="text-4xl font-bold mb-8">
    Yeni Haber
</h1>

@if ($errors->any())
    <div class="bg-red-100 text-red-700 p-4 rounded mb-4">
        {{ $errors->first() }}
    </div>
@endif

<form action="/admin/news" method="POST" class="bg-white p-6 rounded-xl shadow">

    @csrf

    <div class="mb-4">
        <label class="block mb-2 font-bold">
            Başlık
        </label>

        <input
            type="text"
            name="title"
            class="w-full border rounded p-3"
            required>
    </div>

    <div class="mb-4">
        <label class="block mb-2 font-bold">
            İçerik
        </label>

        <textarea
            name="content"
            rows="10"
            class="w-full border rounded p-3"
            required></textarea>
    </div>

    <button
        type="submit"
        class="bg-blue-600 text-white px-6 py-3 rounded">
        Haberi Kaydet
    </button>

</form>

@endsection
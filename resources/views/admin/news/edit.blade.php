@extends('layouts.admin')

@section('content')

<h1 class="text-4xl font-bold mb-8">
    Haberi Düzenle
</h1>

<form action="/admin/news/{{ $news->id }}" method="POST" class="bg-white p-6 rounded-xl shadow">

    @csrf
    @method('PUT')

    <div class="mb-4">

        <label class="block mb-2 font-bold">
            Başlık
        </label>

        <input
            type="text"
            name="title"
            value="{{ $news->title }}"
            class="w-full border rounded p-3">

    </div>

    <div class="mb-4">

        <label class="block mb-2 font-bold">
            İçerik
        </label>

        <textarea
            name="content"
            rows="10"
            class="w-full border rounded p-3">{{ $news->content }}</textarea>

    </div>

    <button
        class="bg-green-600 text-white px-6 py-3 rounded">

        Güncelle

    </button>

</form>

@endsection
@extends('layouts.admin')

@section('content')

<h1 class="text-4xl font-bold mb-8">
    Kullanıcı Düzenle
</h1>

@if ($errors->any())
    <div class="bg-red-100 text-red-700 p-4 rounded mb-4">
        {{ $errors->first() }}
    </div>
@endif

<form action="/admin/users/{{ $user->id }}" method="POST" class="bg-white p-6 rounded-xl shadow">

    @csrf
    @method('PUT')

    <div class="mb-4">
        <label class="block mb-2 font-bold">
            Kullanıcı Adı
        </label>

        <input
            type="text"
            name="name"
            value="{{ $user->name }}"
            class="w-full border rounded p-3"
            required>
    </div>

    <div class="mb-4">
        <label class="block mb-2 font-bold">
            E-posta
        </label>

        <input
            type="email"
            name="email"
            value="{{ $user->email }}"
            class="w-full border rounded p-3"
            required>
    </div>

<div class="mb-4">
    <label class="block mb-2 font-bold">
        Yeni Şifre
    </label>

    <input
        type="password"
        name="password"
        class="w-full border rounded p-3">
</div>

<div class="mb-4">
    <label class="block mb-2 font-bold">
        Yeni Şifre (Tekrar)
    </label>

    <input
        type="password"
        name="password_confirmation"
        class="w-full border rounded p-3">
</div>

  <button
        type="submit"
        class="bg-green-600 text-white px-6 py-3 rounded">
        Güncelle
    </button>
</form>

@endsection
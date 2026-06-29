@extends('layouts.admin')

@section('content')

<h1 class="text-4xl font-bold mb-6">
    Kullanıcılar
</h1>

<div class="bg-white rounded-xl shadow p-6">

    <table class="w-full">

        <thead>
            <tr class="border-b">
                <th class="text-left p-3">ID</th>
                <th class="text-left p-3">İsim</th>
                <th class="text-left p-3">E-posta</th>
                <th class="text-left p-3">Kayıt Tarihi</th>
                <th class="text-left p-3">İşlem</th>
            </tr>
        </thead>

        <tbody>

        @foreach($users as $user)

            <tr class="border-b">

                <td class="p-3">{{ $user->id }}</td>

                <td class="p-3">{{ $user->name }}</td>

                <td class="p-3">{{ $user->email }}</td>

                <td class="p-3">{{ $user->created_at->format('d.m.Y') }}</td>
<td class="p-3 flex gap-2">

    <a href="/admin/users/{{ $user->id }}/edit"
       class="bg-yellow-500 text-white px-3 py-2 rounded">
        Düzenle
    </a>

    <form action="/admin/users/{{ $user->id }}" method="POST">

        @csrf
        @method('DELETE')

        <button
            type="submit"
            onclick="return confirm('Bu kullanıcıyı silmek istediğine emin misin?')"
            class="bg-red-600 text-white px-3 py-2 rounded">

            Sil

        </button>

    </form>

</td>
            </tr>

        @endforeach

        </tbody>

    </table>

</div>

@endsection
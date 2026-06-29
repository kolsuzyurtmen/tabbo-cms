@extends('layouts.admin')

@section('content')

<h1 class="text-4xl font-bold mb-6">
    Haberler
</h1>

<div class="bg-white rounded-xl shadow p-6">

    <table class="w-full">

        <thead>
            <tr class="border-b">
                <th class="text-left p-3">ID</th>
                <th class="text-left p-3">İşlem</th>
                <th class="text-left p-3">Başlık</th>
            </tr>
        </thead>

        <tbody>

        @foreach($news as $item)

            <tr class="border-b">

                <td class="p-3">{{ $item->id }}</td>

                <td class="p-3">{{ $item->title }}</td>
<td class="p-3 flex gap-2">

    <a href="/admin/news/{{ $item->id }}/edit"
       class="bg-yellow-500 text-white px-3 py-2 rounded">

        Düzenle

    </a>

    <form action="/admin/news/{{ $item->id }}" method="POST">

        @csrf
        @method('DELETE')

        <button
            onclick="return confirm('Bu haberi silmek istediğine emin misin?')"
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
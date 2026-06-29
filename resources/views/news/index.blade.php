@extends('layouts.admin')

@section('content')

<div class="flex justify-between items-center mb-8">

    <h1 class="text-4xl font-bold">
        Haberler
    </h1>

    <a href="/news/create"
       class="bg-blue-600 text-white px-5 py-3 rounded-lg hover:bg-blue-700">
        + Yeni Haber
    </a>

</div>

<div class="bg-white rounded-xl shadow overflow-hidden">

<table class="w-full">

<thead class="bg-slate-800 text-white">

<tr>

<th class="p-4 text-left">ID</th>
<th class="p-4 text-left">Başlık</th>
<th class="p-4 text-left">İşlem</th>

</tr>

</thead>

<tbody>

@foreach($news as $item)

<tr class="border-b">

<td class="p-4">
{{ $item->id }}
</td>

<td class="p-4">
{{ $item->title }}
</td>

<td class="p-4">

<button class="bg-yellow-500 text-white px-3 py-1 rounded">
Düzenle
</button>

<button class="bg-red-600 text-white px-3 py-1 rounded ml-2">
Sil
</button>

</td>

</tr>

@endforeach

</tbody>

</table>

</div>

@endsection
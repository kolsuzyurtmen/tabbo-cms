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
            </tr>
        </thead>

        <tbody>

        @foreach($users as $user)

            <tr class="border-b">

                <td class="p-3">{{ $user->id }}</td>

                <td class="p-3">{{ $user->name }}</td>

                <td class="p-3">{{ $user->email }}</td>

                <td class="p-3">{{ $user->created_at->format('d.m.Y') }}</td>

            </tr>

        @endforeach

        </tbody>

    </table>

</div>

@endsection
@extends('layouts.app')

@section('title', 'Profil')

@section('content')
<div class="bg-white rounded-xl shadow p-6 max-w-lg">
    <h1 class="text-2xl font-bold text-amber-900">Profil</h1>

    <p class="mt-4 text-sm text-stone-500">Username</p>
    <p class="font-semibold">{{ $username }}</p>

    <p class="mt-3 text-sm text-stone-500">Nama Toko</p>
    <p class="font-semibold">{{ $toko['nama'] }}</p>

    <p class="mt-3 text-sm text-stone-500">Alamat Toko</p>
    <p>{{ $toko['alamat'] }}</p>

    <p class="mt-3 text-sm text-stone-500">Tentang Toko</p>
    <p>{{ $toko['tentang'] }}</p>
</div>
@endsection
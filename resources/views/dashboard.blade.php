@extends('layouts.app')

@section('title', 'Dashboard')

@section('content')
<h1 class="text-3xl font-bold text-amber-900">Halo King {{ $username }}!</h1>
<p class="text-stone-600 mt-1">Selamat datang di panel katalog Wibu Nobar.</p>

<div class="grid sm:grid-cols-2 gap-4 mt-6">
    <div class="bg-white rounded-xl shadow p-5">
        <p class="text-sm text-stone-500">Total film</p>
        <p class="text-4xl font-bold text-amber-800">{{ $jumlahFilm }}</p>
    </div>
    <a href="/pengelolaan?username={{ $username }}"
       class="bg-amber-800 text-white rounded-xl shadow p-5 hover:bg-amber-900">
        <p class="text-sm opacity-80">Lihat semuanya</p>
        <p class="text-xl font-semibold">Buka Katalog →</p>
    </a>
</div>
@endsection
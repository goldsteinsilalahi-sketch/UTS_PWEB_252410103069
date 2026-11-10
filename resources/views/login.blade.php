@extends('layouts.app')

@section('title', 'Login')

@section('content')
<div class="max-w-sm mx-auto bg-white rounded-xl shadow p-6 mt-10">
    <h1 class="text-2xl font-bold text-amber-900 mb-1">Selamat Datang Demon Lord</h1>
    <p class="text-sm text-stone-500 mb-4">Masuk untuk melihat katalog serial ataupun film Anime yang tersedia di toko ini.</p>

    <form action="/dashboard" method="GET">
        <label class="block text-sm mb-1" for="username">Username</label>
        <input type="text" id="username" name="username" required
               class="w-full border rounded px-3 py-2 mb-4" placeholder="Masukkan username">
        <button type="submit"
                class="w-full bg-amber-800 text-white rounded py-2 hover:bg-amber-900">
            Masuk
        </button>
    </form>
</div>
@endsection
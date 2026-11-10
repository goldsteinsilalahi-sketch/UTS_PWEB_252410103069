@extends('layouts.app')

@section('title', 'Katalog Film')

@section('content')
<h1 class="text-2xl font-bold text-amber-900 mb-4">Katalog Anime</h1>

<div class="grid grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-5">
    @foreach ($film as $item)
        @include('partials.cardFilm', ['item' => $item])
    @endforeach
</div>
@endsection
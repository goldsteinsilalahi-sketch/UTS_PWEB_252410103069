<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title') - Wibu Nobar</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-amber-50 text-stone-800 min-h-screen flex flex-col">

    @isset($username)
        <x-navbar :username="$username" />
    @endisset

    <main class="flex-1 max-w-5xl w-full mx-auto px-4 py-8">
        @yield('content')
    </main>

    <x-footer />

</body>
</html>
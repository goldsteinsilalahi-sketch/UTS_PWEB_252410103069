@props(['username' => 'Tamu'])

<nav class="bg-amber-900 text-white">
    <div class="max-w-5xl mx-auto px-4 py-3 flex flex-wrap items-center justify-between gap-2">
        <span class="font-bold text-lg">Wibu Nobar</span>
        <div class="flex gap-4 text-sm">
            <a href="/dashboard?username={{ $username }}" class="hover:underline">Dashboard</a>
            <a href="/pengelolaan?username={{ $username }}" class="hover:underline">Katalog</a>
            <a href="/profile?username={{ $username }}" class="hover:underline">Profil</a>
            <a href="/" class="hover:underline">Keluar</a>
        </div>
    </div>
</nav>
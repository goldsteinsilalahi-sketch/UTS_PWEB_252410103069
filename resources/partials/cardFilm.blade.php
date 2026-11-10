<div class="bg-white rounded-xl shadow overflow-hidden">
    <img src="{{ asset('images/' . $item['gambar']) }}" alt="{{ $item['judul'] }}"
     class="w-full aspect-3/4 object-cover bg-stone-200">
    <div class="p-4">
        <span class="text-xs bg-amber-100 text-amber-800 rounded px-2 py-0.5">{{ $item['genre'] }}</span>
        <h3 class="font-semibold mt-2">{{ $item['judul'] }}</h3>
        <p class="text-sm text-stone-500">{{ $item['deskripsi'] }}</p>
        <p class="font-bold text-amber-800 mt-2">Rp {{ number_format($item['harga'], 0, ',', '.') }}</p>
    </div>
</div>
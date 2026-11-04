<!DOCTYPE html>
<html lang="id">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>GADANG.CODE V2 - GadgetKiniPadang.web.id</title>
<script src="https://cdn.tailwindcss.com"></script>
<link href="https://fonts.googleapis.com/css2?family=Space+Grotesk:wght@400;600;700&family=JetBrains+Mono:wght@400;700&display=swap" rel="stylesheet">
</head>
<body class="bg-[#0B1426] text-white" style="font-family:'Space Grotesk',sans-serif">
<header class="sticky top-0 z-50 backdrop-blur bg-[#0B1426]/90 border-b border-white/10">
<div class="max-w-7xl mx-auto px-4 py-3 flex items-center justify-between">
<div class="flex items-center gap-2">
<div class="w-8 h-8 bg-gradient-to-br from-amber-400 to-orange-600 rounded-lg flex items-center justify-center font-bold text-black">G</div>
<span class="font-bold tracking-widest">GADANG.CODE <span class="text-amber-400">V2</span></span>
</div>
<nav class="hidden md:flex gap-2">
<a href="/" class="px-4 py-2 rounded-full bg-white text-black text-sm font-bold">Uda AI</a>
<a href="#" class="px-4 py-2 rounded-full border border-white/20 text-sm">Batik AI</a>
<a href="#" class="px-4 py-2 rounded-full border border-white/20 text-sm">Scan Desk</a>
<a href="/katalog" class="px-4 py-2 rounded-full border border-white/20 text-sm bg-amber-500/20">Produk</a>
</nav>
<div class="flex gap-1 bg-white/5 rounded-full p-1 border border-white/10 text-xs">
<span class="px-3 py-1 rounded-full bg-white text-black font-bold">ID</span><span class="px-3 py-1 text-white/60">ENG</span><span class="px-3 py-1 text-amber-400 font-bold">MINANG</span>
</div>
</div>
</header>

<div class="max-w-7xl mx-auto px-4 py-6 grid grid-cols-12 gap-6">
<div class="col-span-12 lg:col-span-7 bg-[#111C33] border border-white/10 rounded-[24px] overflow-hidden">
<div class="p-5 border-b border-white/5 flex justify-between text-xs" style="font-family:'JetBrains Mono'"><span class="text-white/70">UDA AI • ASISTEN GADGET</span><span class="text-emerald-400">● Online</span></div>
<div class="p-8">
<h1 class="text-4xl md:text-5xl font-bold leading-[0.9]">Halo, Uda!<br><span class="text-white/40">Cari gadget</span><br><span class="text-amber-400">apa hari ko?</span></h1>
<p class="mt-4 text-sm text-white/50">Uda AI ngerti bahasa Minang. Tanyo seputar HP, Laptop, garansi Padang.</p>
<div class="grid grid-cols-2 gap-3 mt-8">
<a href="/katalog" class="bg-white text-black rounded-2xl p-4"><div class="text-[10px] opacity-60">01</div><div class="font-bold mt-1">Cari HP di<br>bawah 5jt?</div></a>
<a href="/katalog" class="bg-[#1A2744] border border-white/10 rounded-2xl p-4"><div class="text-[10px] text-amber-400">02</div><div class="font-bold mt-1">Laptop untuk<br>coding</div></a>
</div>
</div>
</div>
<div class="col-span-12 lg:col-span-5 bg-gradient-to-br from-[#1A2744] to-[#0B1426] border border-white/10 rounded-[24px] p-6">
<div class="text-[11px]" style="font-family:'JetBrains Mono'">Alam Takambang Jadi Guru</div>
<h2 class="text-2xl font-bold mt-4">Teman AI untuk<br>Gadget & Kode di Padang</h2>
<p class="text-sm text-white/50 mt-2">Belanja, belajar, bersama GADANG.CODE V2 — AI lokal yang paham budaya.</p>
<div class="mt-6 flex gap-3">
<a href="/katalog" class="flex-1 bg-amber-500 text-black text-center py-3 rounded-full font-bold">Lihat Produk →</a>
<a href="/katalog" class="flex-1 border border-white/20 text-center py-3 rounded-full">Coba Uda AI</a>
</div>
</div>
</div>

<div class="max-w-7xl mx-auto px-4 pb-20">
<h3 class="font-bold text-xl mb-4">Produk Gadang Hari Ini</h3>
<div class="grid grid-cols-2 md:grid-cols-4 gap-4">
@forelse($produks ?? [] as $produk)
<div class="bg-[#111C33] border border-white/10 rounded-2xl p-4">
<div class="h-32 bg-white/5 rounded-xl flex items-center justify-center">📱</div>
<div class="mt-3 font-bold text-sm">{{ $produk->nama ?? $produk->name }}</div>
<div class="text-amber-400 font-bold">Rp {{ number_format($produk->harga ?? 0,0,',','.') }}</div>
</div>
@empty
<div class="col-span-4 text-center py-10 text-white/30">Desain GADANG.CODE V2 udah aktif!</div>
@endforelse
</div>
</div>
</body>
</html>
<!DOCTYPE html>
<html lang="id">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>GADANG.CODE V2 - GadgetKini Padang</title>
<script src="https://cdn.tailwindcss.com"></script>
<link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@600;700;800&family=JetBrains+Mono:wght@400&display=swap" rel="stylesheet">
<style>
body{font-family:'Plus Jakarta Sans',sans-serif}
.mono{font-family:'JetBrains Mono',monospace}
.gonjong{
background: repeating-linear-gradient(90deg, #ff8a2a 0 8px, transparent 8px 16px);
height: 10px;
}
</style>
</head>
<body class="bg-[#0f1115] text-white">

<!-- NAV -->
<nav class="max-w-[1280px] mx-auto px-6 py-4 flex justify-between items-center">
  <div class="flex items-center gap-2">
    <div class="w-8 h-8 bg-[#ff8a2a] rounded-lg flex items-center justify-center font-extrabold text-black">G</div>
    <span class="font-extrabold tracking-wide text-[#ff9a5c]">GADANG.CODE V2</span>
  </div>
  <div class="hidden md:flex gap-2 bg-white/[0.06] p-1 rounded-full">
    <div class="bg-white text-black px-5 py-2 rounded-full text-sm font-bold">Uda AI</div>
    <div class="px-5 py-2 rounded-full text-sm text-zinc-400">Batik AI</div>
    <div class="px-5 py-2 rounded-full text-sm text-zinc-400">Scan Desk</div>
    <div class="px-5 py-2 rounded-full text-sm text-zinc-400">Produk</div>
  </div>
  <div class="flex gap-2 items-center">
    <span class="bg-white/10 px-3 py-1 rounded-full text-xs">ID</span>
    <span class="text-[#ff8a2a] text-xs font-bold">MINANG</span>
  </div>
</nav>

<!-- HERO -->
<div class="max-w-[1280px] mx-auto px-6 mt-4 grid lg:grid-cols-[1.1fr_0.9fr] gap-6">

  <!-- LEFT: UDA AI -->
  <div class="bg-[#171a21] border border-white/10 rounded-[28px] p-7 relative overflow-hidden">
    <div class="flex justify-between items-center mb-6">
      <span class="mono text-[10px] tracking-[0.2em] text-zinc-500">UDA AI • ASISTEN GADGET</span>
      <span class="text-xs text-emerald-400">● Online</span>
    </div>

    <h1 class="text-[40px] leading-[0.95] font-extrabold">
      Halo, Uda!<br>
      <span class="text-zinc-600">Cari gadget</span><br>
      <span class="text-[#ff9a5c]">apa hari ko?</span>
    </h1>
    <p class="mono text-xs text-zinc-500 mt-4">Uda AI ngerti bahasa Minang. Tanyo seputar HP, Laptop, garansi Padang.</p>

    <div class="grid grid-cols-2 gap-3 mt-8">
      <div class="bg-white text-black rounded-2xl p-4">
        <div class="text-[10px] mono text-zinc-400">01</div>
        <div class="font-bold text-sm mt-1">Cari HP di<br>bawah 5jt?</div>
      </div>
      <div class="bg-[#1e2530] border border-white/10 rounded-2xl p-4">
        <div class="text-[10px] mono text-[#ff8a2a]">02</div>
        <div class="font-bold text-sm mt-1">Laptop untuk<br>coding</div>
      </div>
    </div>

    <!-- IMAGE ORANG - INI YANG LU MAU BI -->
    <div class="mt-6 relative">
      <img src="https://images.unsplash.com/photo-1515378791036-0648a3ef77b2?auto=format&fit=crop&w=600&q=80" class="w-full h-[240px] object-cover rounded-2xl opacity-90" alt="Uda Padang Gadget">
      <div class="absolute bottom-3 left-3 bg-black/70 backdrop-blur px-3 py-2 rounded-full text-xs">📍 Anak Padang Asli • COD Pasar Raya</div>
    </div>

  </div>

  <!-- RIGHT: CONTENT + ORANG KEDUA -->
  <div class="bg-gradient-to-b from-[#1c202b] to-[#12151c] border border-white/10 rounded-[28px] p-7 relative overflow-hidden">
    <div class="absolute top-0 right-0 w-64 h-64 bg-[#ff8a2a]/20 blur-[80px] rounded-full"></div>

    <div class="mono text-[11px] tracking-widest">Alam Takambang Jadi Guru</div>
    <h2 class="text-[28px] font-extrabold leading-tight mt-3">Teman AI untuk<br>Gadget & Kode di Padang</h2>
    <p class="text-sm text-zinc-400 mt-3">Belanja, belajar, bersama GADANG.CODE V2 — AI lokal yang paham budaya.</p>

    <div class="flex gap-3 mt-6">
      <a href="#produk" class="bg-[#ffb86a] text-black font-bold px-6 py-3 rounded-full text-sm">Lihat Produk →</a>
      <div class="border border-white/20 px-6 py-3 rounded-full text-sm">Coba Uda AI</div>
    </div>

    <!-- GAMBAR ORANG KEDUA + GONJONG ORANYE -->
    <div class="mt-8 relative">
      <div class="bg-[#0f1115] rounded-2xl p-3 border border-[#ff8a2a]/20">
        <div class="flex items-center gap-3">
          <img src="https://images.unsplash.com/photo-1494790108377-be9c29b29330?auto=format&fit=crop&w=200&q=80" class="w-14 h-14 rounded-full object-cover">
          <div>
            <div class="font-bold text-sm">Uni Gadget</div>
            <div class="text-xs text-zinc-400">Best Seller • iPhone 15 Padang</div>
          </div>
          <div class="ml-auto bg-[#ff8a2a] text-black text-xs font-bold px-3 py-1 rounded-full">GONJONG ORANYE</div>
        </div>
        <div class="gonjong mt-4 rounded-full"></div>
        <div class="grid grid-cols-3 gap-2 mt-4">
          <div class="bg-white text-black rounded-xl p-2 text-center text-xs font-bold">iPhone<br>15 Pro</div>
          <div class="bg-white text-black rounded-xl p-2 text-center text-xs font-bold">MacBook<br>Air M2</div>
          <div class="bg-[#ff8a2a] text-black rounded-xl p-2 text-center text-xs font-bold">AirPods<br>Pro</div>
        </div>
      </div>
    </div>

    <div class="mt-6 flex gap-2">
      <span class="bg-white/10 px-3 py-2 rounded-full text-xs">🛡️ Garansi Resmi</span>
      <span class="bg-white/10 px-3 py-2 rounded-full text-xs">🚚 Padang 24 Jam</span>
      <span class="bg-white/10 px-3 py-2 rounded-full text-xs">💳 Cicilan 0%</span>
    </div>

  </div>
</div>

<!-- PRODUK -->
<div id="produk" class="max-w-[1280px] mx-auto px-6 mt-10">
  <h3 class="font-bold">Produk Gadang Hari Ini</h3>
  <div class="mt-4 h-2 w-full gonjong rounded-full opacity-60"></div>
</div>

</body>
</html>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GADANG CODE - GadgetKini Padang</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@600;700;800&display=swap" rel="stylesheet">
    <style>
        body{font-family:'Plus Jakarta Sans',sans-serif}
        .songket{
            background-image: url("data:image/svg+xml,%3Csvg width='100' height='20' xmlns='http://www.w3.org/2000/svg'%3E%3Cpath d='M0 10 L10 0 L20 10 L10 20 Z M20 10 L30 0 L40 10 L30 20 Z' fill='%23fb923c' fill-opacity='0.3'/%3E%3C/svg%3E");
        }
    </style>
</head>
<body class="bg-[#0a0a0a] text-white overflow-x-hidden">
    <!-- HEADER -->
    <header class="flex justify-between items-center p-6 lg:px-16">
        <div class="flex items-center gap-3">
            <div class="text-orange-400 text-4xl">⌂</div>
            <div>
                <h1 class="font-extrabold text-xl leading-none">GADANG<br>CODE</h1>
                <p class="text-orange-400 text-xs">GadgetKini Padang</p>
            </div>
        </div>
        <div class="hidden md:flex gap-6 text-sm text-gray-400">
            <span>Katalog</span><span>Garansi</span><span>Kontak</span>
        </div>
    </header>

    <!-- HERO -->
    <section class="grid lg:grid-cols-2 gap-8 px-6 lg:px-16 py-8 items-center">
        <div>
            <h2 class="text-4xl lg:text-6xl font-extrabold leading-[1.1] mb-6">
                GADANG CODE -<br>
                Toko Gadget Terpercaya<br>
                di Padang
            </h2>
            <p class="text-orange-300/80 text-lg mb-8">
                Gadget Kini Padang - Kualitas Gadang, Harga Kini.
            </p>
            
            <!-- TOMBOL MINANG -->
            <a href="/katalog" class="inline-flex items-center gap-3 bg-orange-400 hover:bg-orange-500 text-black font-bold px-8 py-4 rounded-2xl transition relative overflow-hidden">
                Lihat Katalog →
                <span class="absolute bottom-0 left-0 w-full h-[8px] bg-[url('https://www.toptal.com/designers/subtlepatterns/uploads/moroccan.png')] opacity-30"></span>
            </a>
            
            <!-- FEATURES -->
            <div class="flex flex-wrap gap-3 mt-8">
                <div class="bg-white/10 px-4 py-2 rounded-xl text-xs flex items-center gap-2">🛡️ Garansi Resmi</div>
                <div class="bg-white/10 px-4 py-2 rounded-xl text-xs flex items-center gap-2">🚚 Pengiriman Cepat Padang</div>
                <div class="bg-white/10 px-4 py-2 rounded-xl text-xs flex items-center gap-2">💳 Cicilan 0%</div>
            </div>
        </div>

        <div class="relative">
            <!-- Gonjong Oranye Background -->
            <div class="absolute -top-10 -right-10 text-orange-400/20 text-[12rem] leading-none select-none">⌂</div>
            <img src="https://i.ibb.co/0jZ3QYp/laptop-mockup.png" alt="Laptop" class="relative z-10 w-full rounded-2xl shadow-2xl" onerror="this.style.display='none'">
            <!-- UDA AI CARD -->
            <div class="absolute bottom-10 left-0 bg-white text-black p-4 rounded-2xl shadow-xl z-20 max-w-[280px]">
                <div class="flex gap-3">
                    <img src="https://cdn-icons-png.flaticon.com/512/4712/4712109.png" class="w-10 h-10" alt="AI">
                    <div>
                        <p class="font-bold text-sm">Uda AI</p>
                        <p class="text-xs text-gray-600">Asisten Gadget Kamu</p>
                    </div>
                </div>
                <div class="grid grid-cols-3 gap-2 mt-3">
                    <div class="bg-gray-100 p-2 rounded text-[10px] text-center">Airpods Pro</div>
                    <div class="bg-gray-100 p-2 rounded text-[10px] text-center">Smartwatch</div>
                    <div class="bg-gray-100 p-2 rounded text-[10px] text-center">Garansi</div>
                </div>
            </div>
        </div>
    </section>

    <footer class="text-center py-6 text-gray-500 text-xs border-t border-white/5 mt-10">
        © 2025 GadgetKini Padang - Kualitas Gadang, Harga Kini!
    </footer>
</body>
</html>
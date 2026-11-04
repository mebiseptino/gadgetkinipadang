<!DOCTYPE html>
<html lang="id">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>GADANG.CODE V3</title>
<link href="https://fonts.googleapis.com/css2?family=Space+Grotesk:wght@400;500;600;700&family=JetBrains+Mono:wght@400;600&display=swap" rel="stylesheet">
<style>
*{margin:0;padding:0;box-sizing:border-box}
body{font-family:'Space Grotesk',sans-serif;background:#0B1020;color:#fff;min-height:100vh}
.header{display:flex;justify-content:space-between;align-items:center;padding:18px 24px;background:rgba(11,16,32,0.8);backdrop-filter:blur(12px);position:sticky;top:0;z-index:10;border-bottom:1px solid rgba(255,255,255,0.08)}
.logo{display:flex;align-items:center;gap:10px;font-weight:700;font-size:18px}
.logo b{color:#FFB800}
.nav{display:flex;gap:8px}
.nav button{background:rgba(255,255,255,0.08);border:1px solid rgba(255,255,255,0.12);color:#fff;padding:8px 16px;border-radius:999px;font-size:13px;cursor:pointer}
.nav button.active{background:#fff;color:#000;font-weight:600}
.hero{display:grid;grid-template-columns:1.2fr 1fr;gap:20px;padding:24px;max-width:1300px;margin:0 auto}
.card{background:linear-gradient(180deg, rgba(26,41,82,0.9) 0%, rgba(15,23,48,0.9) 100%);border:1px solid rgba(255,255,255,0.12);border-radius:20px;padding:20px;position:relative;overflow:hidden}
.card-top{font-family:'JetBrains Mono',monospace;font-size:11px;letter-spacing:1px;opacity:0.6;margin-bottom:16px;display:flex;justify-content:space-between}
.h1{font-size:42px;line-height:1.05;font-weight:700;margin-bottom:12px}
.h1 span{color:#8B9EC7}.h1 b{color:#FFB800}
.sub{font-size:13px;opacity:0.7;line-height:1.5;margin-bottom:20px}
.chips{display:grid;grid-template-columns:1fr 1fr;gap:12px}
.chip{background:rgba(255,255,255,0.95);color:#000;border-radius:14px;padding:14px;font-size:13px}
.chip.blue{background:rgba(59,90,168,0.6);color:#fff;border:1px solid rgba(255,255,255,0.15)}
.right-card h2{font-size:28px;line-height:1.15;margin-bottom:12px}
.btn-row{display:flex;gap:10px;margin-bottom:20px}
.btn{padding:12px 20px;border-radius:999px;border:0;font-weight:600;cursor:pointer;font-size:13px}
.btn-yellow{background:#FFB800;color:#000}
.btn-ghost{background:transparent;border:1px solid rgba(255,255,255,0.2);color:#fff}
.uda-wrap{position:relative;border-radius:18px;overflow:hidden;background:#1a2a5a;border:1px solid rgba(255,255,255,0.15);height:320px;display:flex;align-items:end;justify-content:center}
.uda-wrap img{width:100%;height:100%;object-fit:cover;object-position:top center}
.uda-badge{position:absolute;bottom:12px;left:12px;background:rgba(0,0,0,0.7);padding:8px 12px;border-radius:999px;font-size:11px;border:1px solid rgba(255,255,255,0.15)}
@media(max-width:900px){.hero{grid-template-columns:1fr}.h1{font-size:32px}}
</style>
</head>
<body>
<header class="header">
<div class="logo">G GADANG.CODE <b>V3</b></div>
<div class="nav"><button class="active">Uda AI</button><button>Batik AI</button><button>Scan Desk</button><button>Produk</button></div>
</header>
<div class="hero">
<div class="card">
<div class="card-top"><span>UDA AI • ASISTEN GADGET</span><span style="color:#22C55E">● Online</span></div>
<div class="h1">Halo, Uda!<br><span>Cari gadget</span><br><b>apa hari ko?</b></div>
<div class="sub">Uda AI ngerti bahasa Minang. Tanyo seputar HP, Laptop, garansi Padang.</div>
<div class="chips">
<div class="chip">01<br>Cari HP di bawah 5jt? Klik di siko!</div>
<div class="chip blue">02<br>Laptop untuk coding & kuliah?</div>
</div>
</div>
<div class="card right-card">
<div class="card-top"><span>Alam Takambang Jadi Guru</span></div>
<h2>Teman AI untuk Gadget & Kode di Padang</h2>
<p style="font-size:13px;opacity:0.75;margin-bottom:20px">Belanja, belajar, bersama GADANG.CODE V3 — AI lokal yang paham budaya.</p>
<div class="btn-row"><button class="btn btn-yellow">Lihat Produk →</button><button class="btn btn-ghost">Coba Uda AI</button></div>
<div class="uda-wrap">
<img src="/images/uda-gadang.jpg?v=3" alt="Uda Gadang">
<div class="uda-badge">● Uda Gadang • AI Padang • Online</div>
</div>
</div>
</div>
</body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>The Wanderer Edit — Heritage Haat</title>
<link href="https://fonts.googleapis.com/css2?family=Playfair+Display:ital,wght@0,400;0,500;1,400;1,500&family=Jost:wght@300;400;500&display=swap" rel="stylesheet">
<style>
*, *::before, *::after { box-sizing: border-box; margin: 0; padding: 0; }
:root {
  --sand: #F2EDE4;
  --dusk: #1A1410;
  --ember: #C4622A;
  --gold: #B8963A;
  --mist: #8C7B6B;
  --cream: #FAF7F1;
  --border: rgba(26,20,16,0.1);
  --border-warm: rgba(196,98,42,0.2);
  --fd: 'Playfair Display', Georgia, serif;
  --fb: 'Jost', system-ui, sans-serif;
}
html { scroll-behavior: smooth; }
body { background: var(--cream); color: var(--dusk); font-family: var(--fb); font-size: 16px; line-height: 1.6; overflow-x: hidden; }

/* NAV */
nav {
  position: fixed; top: 0; left: 0; right: 0; z-index: 200;
  display: flex; align-items: center; justify-content: space-between;
  padding: 16px 48px;
  background: rgba(250,247,241,0.95); backdrop-filter: blur(12px);
  border-bottom: 0.5px solid var(--border);
}
.nav-logo { font-family: var(--fd); font-size: 20px; font-weight: 400; color: var(--dusk); text-decoration: none; }
.nav-logo span { color: var(--ember); }
.nav-links { display: flex; gap: 32px; list-style: none; }
.nav-links a { font-size: 12px; letter-spacing: 0.12em; text-transform: uppercase; color: var(--mist); text-decoration: none; transition: color 0.2s; }
.nav-links a:hover, .nav-links a.active { color: var(--ember); }
.nav-right { display: flex; align-items: center; gap: 16px; }
.nav-cart { font-size: 12px; font-weight: 500; letter-spacing: 0.1em; text-transform: uppercase; color: var(--dusk); text-decoration: none; border: 0.5px solid var(--border); padding: 8px 18px; transition: all 0.2s; }
.nav-cart:hover { background: var(--dusk); color: var(--cream); }
.hamburger { display: none; flex-direction: column; gap: 5px; cursor: pointer; background: none; border: none; padding: 4px; }
.hamburger span { display: block; width: 22px; height: 1.5px; background: var(--dusk); transition: all 0.3s; }

/* Mobile drawer */
.mob-menu { display: none; position: fixed; top: 57px; left: 0; right: 0; background: var(--cream); z-index: 190; border-bottom: 0.5px solid var(--border); padding: 20px 24px 28px; flex-direction: column; }
.mob-menu.open { display: flex; }
.mob-menu a { font-size: 14px; letter-spacing: 0.08em; text-transform: uppercase; color: var(--dusk); text-decoration: none; padding: 13px 0; border-bottom: 0.5px solid var(--border); }
.mob-menu a:last-child { border-bottom: none; }

/* HERO */
.hero { display: grid; grid-template-columns: 1fr 1fr; min-height: 92vh; margin-top: 57px; }
.hero-visual { position: relative; overflow: hidden; background: var(--dusk); }
.hero-visual img { width: 100%; height: 100%; object-fit: cover; object-position: center 25%; transition: transform 8s ease; display: block; }
.hero-visual:hover img { transform: scale(1.04); }
.hero-overlay { position: absolute; inset: 0; background: linear-gradient(135deg, rgba(26,20,16,0.4) 0%, transparent 60%); }
.hero-pills { position: absolute; top: 32px; left: 32px; display: flex; flex-direction: column; gap: 8px; }
.pill { font-size: 10px; font-weight: 500; letter-spacing: 0.18em; text-transform: uppercase; color: white; padding: 6px 14px; display: inline-block; }
.pill-ember { background: var(--ember); }
.pill-gold { background: var(--gold); }

.hero-copy {
  display: flex; flex-direction: column; justify-content: center;
  padding: 72px 64px 72px 56px;
  background: var(--sand); position: relative; overflow: hidden;
}
.hero-copy::before {
  content: 'W'; position: absolute; font-family: var(--fd); font-size: 260px; font-weight: 400; font-style: italic;
  color: rgba(196,98,42,0.055); right: -20px; bottom: -50px; line-height: 1; pointer-events: none; user-select: none;
}
.eyebrow { font-size: 11px; font-weight: 500; letter-spacing: 0.2em; text-transform: uppercase; color: var(--ember); margin-bottom: 18px; display: flex; align-items: center; gap: 10px; }
.eyebrow::before { content: ''; width: 24px; height: 1px; background: var(--ember); flex-shrink: 0; }
.hero-h1 { font-family: var(--fd); font-size: clamp(42px, 4.5vw, 72px); font-weight: 400; line-height: 1.05; color: var(--dusk); margin-bottom: 10px; }
.hero-h1 em { font-style: italic; color: var(--ember); }
.hero-sub { font-family: var(--fd); font-size: clamp(16px, 1.8vw, 23px); font-weight: 400; font-style: italic; color: var(--mist); margin-bottom: 28px; }
.hero-desc { font-size: 15px; font-weight: 300; color: var(--mist); line-height: 1.85; max-width: 400px; margin-bottom: 36px; }
.stats { display: flex; border: 0.5px solid var(--border-warm); margin-bottom: 36px; width: fit-content; }
.stat { padding: 16px 24px; border-right: 0.5px solid var(--border-warm); text-align: center; }
.stat:last-child { border-right: none; }
.stat-n { font-family: var(--fd); font-size: 26px; font-weight: 400; color: var(--ember); display: block; line-height: 1; margin-bottom: 3px; }
.stat-l { font-size: 10px; letter-spacing: 0.14em; text-transform: uppercase; color: var(--mist); }
.btn-main { display: inline-flex; align-items: center; gap: 12px; font-size: 12px; font-weight: 500; letter-spacing: 0.14em; text-transform: uppercase; color: var(--cream); background: var(--dusk); padding: 15px 32px; text-decoration: none; transition: all 0.25s; width: fit-content; }
.btn-main:hover { background: var(--ember); gap: 18px; }

/* MARQUEE */
.marquee { background: var(--ember); padding: 11px 0; overflow: hidden; }
.marquee-inner { display: inline-flex; white-space: nowrap; animation: ticker 26s linear infinite; }
.m-item { display: inline-flex; align-items: center; gap: 14px; padding: 0 20px; font-size: 10px; font-weight: 400; letter-spacing: 0.16em; text-transform: uppercase; color: rgba(255,255,255,0.85); }
.m-dot { color: rgba(255,255,255,0.4); font-size: 8px; }
@keyframes ticker { from { transform: translateX(0); } to { transform: translateX(-50%); } }

/* STORY STRIP */
.story { display: grid; grid-template-columns: 1fr 1fr 1fr; background: var(--dusk); }
.s-item { padding: 48px 40px; border-right: 0.5px solid rgba(255,255,255,0.06); transition: background 0.3s; position: relative; overflow: hidden; }
.s-item:last-child { border-right: none; }
.s-item:hover { background: rgba(255,255,255,0.03); }
.s-num { font-family: var(--fd); font-size: 56px; font-style: italic; color: rgba(196,98,42,0.12); position: absolute; top: 10px; right: 18px; line-height: 1; pointer-events: none; }
.s-title { font-family: var(--fd); font-size: 19px; color: rgba(255,255,255,0.88); margin-bottom: 11px; }
.s-body { font-size: 14px; font-weight: 300; color: rgba(255,255,255,0.4); line-height: 1.8; }
.s-body em { color: var(--ember); font-style: normal; }

/* COLLECTION */
.col-header { padding: 72px 72px 44px; display: flex; align-items: flex-end; justify-content: space-between; gap: 40px; flex-wrap: wrap; }
.col-h2 { font-family: var(--fd); font-size: clamp(28px, 3vw, 44px); font-weight: 400; line-height: 1.15; color: var(--dusk); margin-top: 14px; }
.col-h2 em { font-style: italic; color: var(--ember); }
.col-note { font-size: 13px; font-weight: 300; color: var(--mist); margin-top: 10px; max-width: 480px; line-height: 1.75; }


/* PRODUCT GRID */
.grid { padding: 0 72px 72px; display: grid; grid-template-columns: repeat(3, 1fr); gap: 2px; background: var(--border); }
.card { background: var(--cream); position: relative; overflow: hidden; cursor: pointer; }
.card.wide { grid-column: span 2; }
.card-img { width: 100%; overflow: hidden; position: relative; }
.card.wide .card-img { height: 580px; }
.card:not(.wide) .card-img { height: 480px; }
.card-img img { width: 100%; height: 100%; object-fit: cover; object-position: center; transition: transform 0.65s cubic-bezier(0.25,0.46,0.45,0.94); display: block; }
.card:hover .card-img img { transform: scale(1.06); }
.badge { position: absolute; top: 14px; left: 14px; font-size: 9px; font-weight: 500; letter-spacing: 0.16em; text-transform: uppercase; color: white; padding: 5px 12px; }
.b-dark { background: rgba(26,20,16,0.8); backdrop-filter: blur(4px); }
.b-ember { background: var(--ember); }
.b-gold { background: var(--gold); }
.units { position: absolute; bottom: 14px; right: 14px; font-size: 10px; font-weight: 500; letter-spacing: 0.1em; text-transform: uppercase; background: rgba(250,247,241,0.93); color: var(--ember); padding: 5px 11px; }
.qadd { position: absolute; bottom: 0; left: 0; right: 0; background: var(--dusk); color: var(--cream); font-size: 11px; font-weight: 500; letter-spacing: 0.14em; text-transform: uppercase; padding: 13px; text-align: center; transform: translateY(100%); transition: transform 0.3s cubic-bezier(0.25,0.46,0.45,0.94); cursor: pointer; border: none; font-family: var(--fb); width: 100%; }
.card:hover .qadd { transform: translateY(0); }
.qadd:hover { background: var(--ember); }
.cinfo { padding: 18px 22px 24px; }
.craft { font-size: 10px; font-weight: 500; letter-spacing: 0.16em; text-transform: uppercase; color: var(--ember); margin-bottom: 5px; }
.cname { font-family: var(--fd); font-size: 18px; font-weight: 400; color: var(--dusk); line-height: 1.3; margin-bottom: 5px; }
.cunique { font-size: 12px; font-weight: 300; font-style: italic; color: var(--mist); margin-bottom: 13px; line-height: 1.55; }
.cfoot { display: flex; align-items: center; justify-content: space-between; }
.cprice { font-family: var(--fd); font-size: 22px; font-weight: 400; color: var(--dusk); }
.cship { font-size: 11px; font-weight: 300; color: var(--mist); }

/* PROMISE */
.promise { background: var(--sand); padding: 80px 72px; display: grid; grid-template-columns: 1fr 1fr; gap: 72px; align-items: center; }
.p-imgs { display: grid; grid-template-columns: 1fr 1fr; gap: 2px; background: var(--border); }
.p-img { overflow: hidden; }
.p-img img { width: 100%; height: 260px; object-fit: cover; object-position: center; transition: transform 0.5s; display: block; }
.p-img:hover img { transform: scale(1.05); }
.p-quote { padding: 32px 28px; background: var(--dusk); display: flex; flex-direction: column; justify-content: center; }
.p-quote p { font-family: var(--fd); font-size: 16px; font-style: italic; color: rgba(255,255,255,0.82); line-height: 1.65; margin-bottom: 14px; }
.p-quote cite { font-size: 10px; letter-spacing: 0.12em; text-transform: uppercase; color: var(--ember); font-style: normal; }
.p-ember { padding: 32px 28px; background: var(--ember); display: flex; flex-direction: column; justify-content: center; }
.p-ember p { font-family: var(--fd); font-size: 16px; font-style: italic; color: rgba(255,255,255,0.92); line-height: 1.65; margin-bottom: 14px; }
.p-ember cite { font-size: 10px; letter-spacing: 0.12em; text-transform: uppercase; color: rgba(255,255,255,0.6); font-style: normal; }
.p-text {}
.p-h2 { font-family: var(--fd); font-size: clamp(28px, 3vw, 42px); font-weight: 400; line-height: 1.2; color: var(--dusk); margin: 16px 0 22px; }
.p-h2 em { font-style: italic; color: var(--ember); }
.p-body { font-size: 15px; font-weight: 300; color: var(--mist); line-height: 1.85; margin-bottom: 16px; }
.p-pull { padding: 20px 0 20px 22px; border-left: 2px solid var(--ember); margin: 24px 0; }
.p-pull p { font-family: var(--fd); font-size: 18px; font-style: italic; color: var(--dusk); line-height: 1.55; }

/* SHIP BAR */
.ship { background: var(--dusk); display: grid; grid-template-columns: repeat(4, 1fr); }
.s-item-ship { padding: 32px 28px; border-right: 0.5px solid rgba(255,255,255,0.06); display: flex; align-items: flex-start; gap: 14px; transition: background 0.3s; }
.s-item-ship:last-child { border-right: none; }
.s-item-ship:hover { background: rgba(255,255,255,0.03); }
.s-icon { width: 34px; height: 34px; display: flex; align-items: center; justify-content: center; flex-shrink: 0; }
.s-icon svg { width: 20px; height: 20px; stroke: var(--ember); fill: none; stroke-width: 1.3; stroke-linecap: round; stroke-linejoin: round; }
.s-title { font-family: var(--fd); font-size: 15px; color: rgba(255,255,255,0.85); margin-bottom: 4px; }
.s-body { font-size: 13px; font-weight: 300; color: rgba(255,255,255,0.38); line-height: 1.6; }

/* INSTA */
.insta { padding: 72px 72px 0; }
.insta-hdr { display: flex; align-items: center; justify-content: space-between; margin-bottom: 36px; }
.insta-h2 { font-family: var(--fd); font-size: 30px; color: var(--dusk); }
.insta-h2 em { font-style: italic; color: var(--ember); }
.insta-link { font-size: 13px; font-weight: 300; color: var(--mist); text-decoration: none; border-bottom: 0.5px solid var(--border); padding-bottom: 2px; transition: color 0.2s; }
.insta-link:hover { color: var(--ember); }
.insta-grid { display: grid; grid-template-columns: repeat(6, 1fr); gap: 2px; background: var(--border); }
.insta-cell { aspect-ratio: 1; overflow: hidden; position: relative; cursor: pointer; }
.insta-cell img { width: 100%; height: 100%; object-fit: cover; object-position: center; transition: transform 0.5s, filter 0.3s; display: block; }
.insta-cell:hover img { transform: scale(1.08); filter: brightness(0.75); }
.insta-ov { position: absolute; inset: 0; display: flex; align-items: center; justify-content: center; opacity: 0; transition: opacity 0.3s; }
.insta-cell:hover .insta-ov { opacity: 1; }
.insta-ov span { color: white; font-family: var(--fd); font-size: 22px; font-style: italic; }

/* FOOTER */
footer { background: var(--dusk); padding: 60px 72px 36px; margin-top: 2px; }
.f-grid { display: grid; grid-template-columns: 2fr 1fr 1fr 1fr; gap: 52px; padding-bottom: 44px; border-bottom: 0.5px solid rgba(255,255,255,0.07); margin-bottom: 28px; }
.f-logo { font-family: var(--fd); font-size: 22px; color: rgba(255,255,255,0.85); text-decoration: none; display: block; margin-bottom: 12px; }
.f-logo span { color: var(--ember); }
.f-tag { font-size: 13px; font-weight: 300; color: rgba(255,255,255,0.28); line-height: 1.75; max-width: 250px; margin-bottom: 20px; }
.f-contact a { display: block; font-size: 13px; color: rgba(255,255,255,0.32); text-decoration: none; margin-bottom: 5px; transition: color 0.2s; }
.f-contact a:hover { color: var(--ember); }
.f-col-h { font-size: 10px; font-weight: 500; letter-spacing: 0.16em; text-transform: uppercase; color: rgba(255,255,255,0.3); margin-bottom: 16px; }
.f-links { list-style: none; display: flex; flex-direction: column; gap: 10px; }
.f-links a { font-size: 14px; font-weight: 300; color: rgba(255,255,255,0.32); text-decoration: none; transition: color 0.2s; }
.f-links a:hover { color: var(--ember); }
.f-bottom { display: flex; align-items: center; justify-content: space-between; flex-wrap: wrap; gap: 12px; }
.f-copy { font-size: 12px; color: rgba(255,255,255,0.17); }
.f-made { font-family: var(--fd); font-size: 13px; font-style: italic; color: rgba(255,255,255,0.17); }
.f-made span { color: var(--ember); }

/* ANIMATIONS */
@keyframes fadeUp { from { opacity: 0; transform: translateY(18px); } to { opacity: 1; transform: translateY(0); } }
.f { animation: fadeUp 0.7s cubic-bezier(0.25,0.46,0.45,0.94) both; }
.d1{animation-delay:.1s}.d2{animation-delay:.25s}.d3{animation-delay:.4s}.d4{animation-delay:.55s}.d5{animation-delay:.7s}

/* ═══════════════════════
   RESPONSIVE
═══════════════════════ */
@media (max-width: 960px) {
  nav { padding: 14px 24px; }
  .nav-links, .nav-cart { display: none; }
  .hamburger { display: flex; }

  .hero { grid-template-columns: 1fr; min-height: auto; }
  .hero-visual { height: 65vw; min-height: 300px; max-height: 480px; }
  .hero-visual img { object-position: center 20%; }
  .hero-pills { top: 18px; left: 18px; }
  .hero-copy { padding: 44px 24px 52px; }
  .hero-copy::before { display: none; }
  .stats { width: 100%; }
  .stat { flex: 1; padding: 14px 10px; }
  .btn-main { width: 100%; justify-content: center; }

  .story { grid-template-columns: 1fr; }
  .s-item { border-right: none; border-bottom: 0.5px solid rgba(255,255,255,0.06); padding: 36px 24px; }
  .s-item:last-child { border-bottom: none; }

  .col-header { padding: 48px 24px 32px; flex-direction: column; align-items: flex-start; gap: 24px; }
  .filters { overflow-x: auto; flex-wrap: nowrap; padding-bottom: 4px; width: 100%; }
  .fbtn { white-space: nowrap; flex-shrink: 0; }

  .grid { grid-template-columns: 1fr; padding: 0 0 48px; }
  .card.wide { grid-column: span 1; }
  .card.wide .card-img { height: 72vw; }
  .card:not(.wide) .card-img { height: 72vw; }
  .qadd { transform: translateY(0); position: static; }

  .promise { grid-template-columns: 1fr; padding: 52px 24px; gap: 40px; }
  .p-imgs { grid-template-columns: 1fr 1fr; }
  .p-img img { height: 42vw; }

  .ship { grid-template-columns: 1fr 1fr; }
  .s-item-ship { border-right: none; border-bottom: 0.5px solid rgba(255,255,255,0.06); padding: 24px 20px; }
  .s-item-ship:nth-child(even) { border-left: 0.5px solid rgba(255,255,255,0.06); }
  .s-item-ship:nth-last-child(-n+2) { border-bottom: none; }

  .insta { padding: 48px 24px 0; }
  .insta-grid { grid-template-columns: repeat(3, 1fr); }

  footer { padding: 48px 24px 28px; }
  .f-grid { grid-template-columns: 1fr 1fr; gap: 32px; }
}

@media (max-width: 520px) {
  .hero-visual { height: 80vw; }
  .hero-h1 { font-size: 34px; }
  .stats { flex-direction: column; width: fit-content; }
  .stat { border-right: none; border-bottom: 0.5px solid var(--border-warm); }
  .stat:last-child { border-bottom: none; }
  .p-imgs { grid-template-columns: 1fr; }
  .p-img img { height: 56vw; }
  .ship { grid-template-columns: 1fr; }
  .s-item-ship { border-left: none !important; }
  .insta-grid { grid-template-columns: repeat(2, 1fr); }
  .f-grid { grid-template-columns: 1fr; }
  .insta-hdr { flex-direction: column; align-items: flex-start; gap: 12px; }
}
</style>
</head>
<body>

<?php include __DIR__ . '/corephp/header.php'; ?>
<div class="mob-menu">
  <a href="#">Collections</a>
  <a href="#">The Wanderer Edit</a>
  <a href="#">Our Artisans</a>
  <a href="#">Blog</a>
  <a href="#">Cart · 0</a>
</div>

<!-- HERO — IMG_1655: woman sitting with cowrie tote, palm trees. Best hero. -->
<section class="hero">
  <div class="hero-visual">
    <img src="IMG_1655.JPG" alt="The Wanderer Edit — Heritage Haat">
    <div class="hero-overlay"></div>
    <div class="hero-pills">
      <span class="pill pill-ember">Limited Edition</span>
      <span class="pill pill-gold">12 Designs Only</span>
    </div>
  </div>
  <div class="hero-copy">
    <div class="eyebrow f d1">The Wanderer Edit · 2025</div>
    <h1 class="hero-h1 f d2">Made to go<br><em>everywhere</em><br>you do.</h1>
    <p class="hero-sub f d3">For the ones who are always leaving.</p>
    <p class="hero-desc f d4">12 handpicked designs. Handcrafted in Kutch using centuries-old embroidery traditions. Built for beach days, layovers, bazaars, and everywhere in between. When these sell out, they don't come back.</p>
    <div class="stats f d4">
      <div class="stat"><span class="stat-n">12</span><span class="stat-l">Designs</span></div>
      <div class="stat"><span class="stat-n">1×</span><span class="stat-l">No restock</span></div>
      <div class="stat"><span class="stat-n">∞</span><span class="stat-l">Places to wear</span></div>
    </div>
    <a href="#collection" class="btn-main f d5">Shop the Edit →</a>
  </div>
</section>

<!-- MARQUEE -->
<div class="marquee">
  <div class="marquee-inner">
    <span class="m-item">Handcrafted in Kutch <span class="m-dot">✦</span></span>
    <span class="m-item">Beach · Bazaar · Boardwalk <span class="m-dot">✦</span></span>
    <span class="m-item">Limited to 12 designs <span class="m-dot">✦</span></span>
    <span class="m-item">No two exactly alike <span class="m-dot">✦</span></span>
    <span class="m-item">COD Available <span class="m-dot">✦</span></span>
    <span class="m-item">48hr Mumbai Delivery <span class="m-dot">✦</span></span>
    <span class="m-item">Ships Worldwide <span class="m-dot">✦</span></span>
    <span class="m-item">Free Returns <span class="m-dot">✦</span></span>
    <span class="m-item">Handcrafted in Kutch <span class="m-dot">✦</span></span>
    <span class="m-item">Beach · Bazaar · Boardwalk <span class="m-dot">✦</span></span>
    <span class="m-item">Limited to 12 designs <span class="m-dot">✦</span></span>
    <span class="m-item">No two exactly alike <span class="m-dot">✦</span></span>
    <span class="m-item">COD Available <span class="m-dot">✦</span></span>
    <span class="m-item">48hr Mumbai Delivery <span class="m-dot">✦</span></span>
    <span class="m-item">Ships Worldwide <span class="m-dot">✦</span></span>
    <span class="m-item">Free Returns <span class="m-dot">✦</span></span>
  </div>
</div>

<!-- STORY STRIP -->
<div class="story">
  <div class="s-item">
    <div class="s-num">1</div>
    <div class="s-title">For the always-leaving type.</div>
    <p class="s-body">The Wanderer Edit isn't a beach collection. It's a bag for wherever you go next — a coastal town today, a bazaar tomorrow, a rooftop somewhere next month. <em>These bags were made to travel.</em></p>
  </div>
  <div class="s-item">
    <div class="s-num">2</div>
    <div class="s-title">Why only 12 designs?</div>
    <p class="s-body">We don't list everything. We list what stops us. These 12 were handpicked from our Kutch artisan collective — <em>the ones we couldn't put back.</em> Once they're gone, they're gone.</p>
  </div>
  <div class="s-item">
    <div class="s-num">3</div>
    <div class="s-title">No two exactly alike.</div>
    <p class="s-body">Handcrafted means human hands made this. The bead placed a millimetre left. The fringe that falls its own way. <em>Your piece will be slightly unique.</em> That's not a flaw. That's your edition.</p>
  </div>
</div>

<!-- COLLECTION GRID -->
<div id="collection">
  <div class="col-header">
    <div>
      <div class="eyebrow">The collection</div>
      <h2 class="col-h2">12 pieces. <em>Each one</em><br>its own edition.</h2>
      <p class="col-note">The bag you receive may differ slightly from the photo — a bead placed differently, a fringe that falls its own way. Consider it your edition.</p>
    </div>
    <div style="font-size:13px;font-weight:300;color:var(--mist);letter-spacing:0.06em;">12 pieces &nbsp;·&nbsp; Limited edition &nbsp;·&nbsp; No restocks</div>
  </div>

  <div class="grid">

    <!-- WIDE #1 — IMG_1337: black mirror tote detail, jaw-dropping. Best wide card. -->
    <div class="card wide">
      <div class="card-img">
        <img src="IMG_1337.JPG" alt="Mirror Tote" style="object-position: center 40%;">
        <div class="badge b-ember">✦ Most Wanted</div>
        <div class="units">4 left</div>
        <button class="qadd">Add to Cart — ₹1,499</button>
      </div>
      <div class="cinfo">
        <div class="craft">Kutch Mirror Work · Banjara Embroidery</div>
        <div class="cname">The Midnight Tote</div>
        <div class="cunique">Rainbow mirrors on black canvas. Every inch hand-placed. A bag that catches light — and eyes — on every continent.</div>
        <div class="cfoot"><span class="cprice">₹1,499</span><span class="cship">Free shipping Mumbai</span></div>
      </div>
    </div>

    <!-- #2 — IMG_1672: coin sling flat on sand, turquoise & orange tribal -->
    <div class="card">
      <div class="card-img">
        <img src="IMG_1672.JPG" alt="Coin Sling">
        <div class="badge b-dark">Edition No. 2</div>
        <div class="units">6 left</div>
        <button class="qadd">Add to Cart — ₹1,299</button>
      </div>
      <div class="cinfo">
        <div class="craft">Banjara Coin Work · Tribal Weave</div>
        <div class="cname">The Nomad Sling</div>
        <div class="cunique">Turquoise, orange and silver coins. The sling that looks like it's already been everywhere.</div>
        <div class="cfoot"><span class="cprice">₹1,299</span><span class="cship">COD available</span></div>
      </div>
    </div>

    <!-- #3 — IMG_1660: cowrie sunburst stripe tote, beach sand. The hero product. -->
    <div class="card">
      <div class="card-img">
        <img src="IMG_1660.JPG" alt="Cowrie Stripe Tote">
        <div class="badge b-ember">✦ Hero Piece</div>
        <div class="units">5 left</div>
        <button class="qadd">Add to Cart — ₹1,499</button>
      </div>
      <div class="cinfo">
        <div class="craft">Cowrie Shell · Mirror Work · Stripe Canvas</div>
        <div class="cname">The Shore Tote</div>
        <div class="cunique">Multicolour stripe canvas with hand-placed cowrie sunbursts and mirror centres. The bag that holds everything — including the memory of wherever you wear it.</div>
        <div class="cfoot"><span class="cprice">₹1,499</span><span class="cship">Free shipping Mumbai</span></div>
      </div>
    </div>

    <!-- #4 — IMG_1677: pink tassel bead clutch flat on sand, vibrant detail -->
    <div class="card">
      <div class="card-img">
        <img src="IMG_1677.JPG" alt="Bead Tassel Clutch">
        <div class="badge b-gold">✦ Traveller's Pick</div>
        <button class="qadd">Add to Cart — ₹1,199</button>
      </div>
      <div class="cinfo">
        <div class="craft">Bead Embroidery · Tassel Trim</div>
        <div class="cname">The Fiesta Clutch</div>
        <div class="cunique">Coloured bead mosaic with pink and cream tassels. From flight to sunset dinner without changing your bag.</div>
        <div class="cfoot"><span class="cprice">₹1,199</span><span class="cship">Free returns</span></div>
      </div>
    </div>

    <!-- #4 — IMG_1460: red Banjara clutch held up against ocean + clean sky -->
    <div class="card">
      <div class="card-img">
        <img src="IMG_1460.JPG" alt="Banjara Clutch">
        <div class="badge b-dark">Edition No. 4</div>
        <div class="units">5 left</div>
        <button class="qadd">Add to Cart — ₹1,199</button>
      </div>
      <div class="cinfo">
        <div class="craft">Banjara Embroidery · Mirror Work</div>
        <div class="cname">The Clutch Royale</div>
        <div class="cunique">Vivid patchwork, mirror inlays, green tassel. Every piece of embroidery placed by a different hand.</div>
        <div class="cfoot"><span class="cprice">₹1,199</span><span class="cship">COD available</span></div>
      </div>
    </div>

    <!-- WIDE #2 — IMG_1414: woman standing with purple crochet bag, ocean behind. Editorial. -->
    <div class="card wide">
      <div class="card-img">
        <img src="IMG_1414.JPG" alt="Circle Crochet Bag" style="object-position: center 15%;">
        <div class="badge b-ember">✦ The Icon</div>
        <div class="units">5 left</div>
        <button class="qadd">Add to Cart — ₹1,199</button>
      </div>
      <div class="cinfo">
        <div class="craft">Crochet · Handwoven</div>
        <div class="cname">The Circle Bag</div>
        <div class="cunique">Bold pink and purple crochet circle tote. The one that turns heads on any beach, in any city, at any hour.</div>
        <div class="cfoot"><span class="cprice">₹1,199</span><span class="cship">Ships worldwide</span></div>
      </div>
    </div>

    <!-- #5 — IMG_1204: floral garden tote held up, golden hour green foliage -->
    <div class="card">
      <div class="card-img">
        <img src="IMG_1204.JPG" alt="Floral Garden Tote">
        <div class="badge b-gold">✦ Golden Hour Pick</div>
        <div class="units">4 left</div>
        <button class="qadd">Add to Cart — ₹1,299</button>
      </div>
      <div class="cinfo">
        <div class="craft">Hand Embroidery · Canvas</div>
        <div class="cname">The Garden Tote</div>
        <div class="cunique">Bead-embroidered florals on cream canvas. Pink chevron handles. The bag that started this whole edit.</div>
        <div class="cfoot"><span class="cprice">₹1,299</span><span class="cship">Free shipping Mumbai</span></div>
      </div>
    </div>

    <!-- #6 — IMG_1082: evil eye coin clutch, dramatic black+gold detail -->
    <div class="card">
      <div class="card-img">
        <img src="IMG_1082.JPG" alt="Evil Eye Coin Clutch">
        <div class="badge b-dark">Edition No. 6</div>
        <button class="qadd">Add to Cart — ₹1,499</button>
      </div>
      <div class="cinfo">
        <div class="craft">Bead & Coin Work · Gold Sequins</div>
        <div class="cname">The Oracle Clutch</div>
        <div class="cunique">Evil eye in pearl, gold sequins, hanging coins. The talisman you'll carry across every time zone.</div>
        <div class="cfoot"><span class="cprice">₹1,499</span><span class="cship">COD available</span></div>
      </div>
    </div>

    <!-- #7 — IMG_1127: cowrie shell clutch on rust-red rocks, earthy + stunning -->
    <div class="card">
      <div class="card-img">
        <img src="IMG_1127.JPG" alt="Cowrie Shell Clutch" style="object-position: center 40%;">
        <div class="badge b-ember">✦ Wanderer's Favourite</div>
        <div class="units">7 left</div>
        <button class="qadd">Add to Cart — ₹1,399</button>
      </div>
      <div class="cinfo">
        <div class="craft">Cowrie Shell · Jute & Bead Work</div>
        <div class="cname">The Shell Clutch</div>
        <div class="cunique">Natural jute with concentric cowrie shell work. Equally at home on a coast in Goa or a market in Marrakech.</div>
        <div class="cfoot"><span class="cprice">₹1,399</span><span class="cship">Free returns</span></div>
      </div>
    </div>

    <!-- #8 — 249132E5: cowrie+tassel bag in hands, red dress, beach sand -->
    <div class="card">
      <div class="card-img">
        <img src="249132E5-3B3A-41FA-8F21-2579B1EB61D0.JPEG" alt="Cowrie Tassel Bag">
        <div class="badge b-dark">Edition No. 8</div>
        <div class="units">4 left</div>
        <button class="qadd">Add to Cart — ₹1,299</button>
      </div>
      <div class="cinfo">
        <div class="craft">Cowrie Shell · Tassel & Fringe</div>
        <div class="cname">The Tribe Bag</div>
        <div class="cunique">Patchwork fabric, cowrie sunbursts, blue tassels. Carries the energy of the Kutch desert wherever you land.</div>
        <div class="cfoot"><span class="cprice">₹1,299</span><span class="cship">COD available</span></div>
      </div>
    </div>

    <!-- #11 — 249132E5: cowrie+tassel bag in red dress hands, beach sand -->
    <div class="card">
      <div class="card-img">
        <img src="249132E5-3B3A-41FA-8F21-2579B1EB61D0.JPEG" alt="Cowrie Tassel Bag">
        <div class="badge b-dark">Edition No. 11</div>
        <div class="units">4 left</div>
        <button class="qadd">Add to Cart — ₹1,299</button>
      </div>
      <div class="cinfo">
        <div class="craft">Cowrie Shell · Tassel & Fringe</div>
        <div class="cname">The Tribe Bag</div>
        <div class="cunique">Patchwork fabric, cowrie sunbursts, blue tassels and black fringe. Carries the energy of the Kutch desert wherever you land.</div>
        <div class="cfoot"><span class="cprice">₹1,299</span><span class="cship">COD available</span></div>
      </div>
    </div>

    <!-- #12 — crossbody: rattan weave leather trim -->
    <div class="card">
      <div class="card-img">
        <img src="crossbody.jpg" alt="Rattan Crossbody" onerror="this.parentElement.style.background='#D4C4A8';this.style.display='none'">
        <div class="badge b-gold">✦ Editor's Choice</div>
        <div class="units">5 left</div>
        <button class="qadd">Add to Cart — ₹1,099</button>
      </div>
      <div class="cinfo">
        <div class="craft">Rattan Weave · Leather Trim</div>
        <div class="cname">The Dune Crossbody</div>
        <div class="cunique">Natural rattan, leather flap, pearl button. Light enough for carry-on. Beautiful enough for everywhere.</div>
        <div class="cfoot"><span class="cprice">₹1,099</span><span class="cship">Ships worldwide</span></div>
      </div>
    </div>

  </div>
</div>

<!-- PROMISE -->
<div class="promise">
  <div class="p-imgs">
    <!-- IMG_1672: coin work detail — close-up craftsmanship -->
    <div class="p-img"><img src="IMG_1672.JPG" alt="Craft detail"></div>
    <div class="p-quote">
      <p>"Each stitch is placed by a hand that has placed ten thousand stitches before."</p>
      <cite>— Heritage Haat, on craft</cite>
    </div>
    <div class="p-ember">
      <p>"No two exactly alike. No restocks. No apologies."</p>
      <cite>— The Wanderer Edit</cite>
    </div>
    <!-- IMG_1127: cowrie shell on rock — beautiful earthy texture -->
    <div class="p-img"><img src="IMG_1127.JPG" alt="Detail shot" style="object-position: center 40%;"></div>
  </div>
  <div class="p-text">
    <div class="eyebrow">The Wanderer Promise</div>
    <h2 class="p-h2">Your bag arrives<br><em>slightly different.</em><br>That's the point.</h2>
    <p class="p-body">Every piece in The Wanderer Edit is made by hand in Kutch, Gujarat — by artisan families who have been embroidering since childhood, taught by their mothers, who were taught by theirs.</p>
    <p class="p-body">When something is made by human hands, it carries human variation. A bead placed differently. A fringe that falls its own way. A thread that ran a shade warmer.</p>
    <div class="p-pull">
      <p>"The bag you receive may differ slightly from the photo. Consider it your edition — made for you without knowing it."</p>
    </div>
    <p class="p-body">This is not a flaw we apologise for. It is the whole reason these bags exist.</p>
  </div>
</div>

<!-- SHIP BAR -->
<div class="ship">
  <div class="s-item-ship">
    <div class="s-icon"><svg viewBox="0 0 24 24"><path d="M8.25 18.75a1.5 1.5 0 01-3 0m3 0a1.5 1.5 0 00-3 0m3 0h6m-9 0H3.375a1.125 1.125 0 01-1.125-1.125V14.25m17.25 4.5a1.5 1.5 0 01-3 0m3 0a1.5 1.5 0 00-3 0m3 0h1.125c.621 0 1.129-.504 1.09-1.124a17.9 17.9 0 00-3.213-9.193 2.056 2.056 0 00-1.58-.86H14.25M16.5 18.75h-2.25m0-11.177v-.958c0-.568-.422-1.048-.987-1.106a48.554 48.554 0 00-10.026 0"/></svg></div>
    <div><div class="s-title">48hr Mumbai Delivery</div><p class="s-body">Order by 2pm, receive next day in Mumbai. Rest of India 3–5 days.</p></div>
  </div>
  <div class="s-item-ship">
    <div class="s-icon"><svg viewBox="0 0 24 24"><path d="M2.25 8.25h19.5M2.25 9h19.5m-16.5 5.25h6m-6 2.25h3m-3.75 3h15a2.25 2.25 0 002.25-2.25V6.75A2.25 2.25 0 0019.5 4.5h-15a2.25 2.25 0 00-2.25 2.25v10.5A2.25 2.25 0 004.5 19.5z"/></svg></div>
    <div><div class="s-title">COD Available</div><p class="s-body">Pay when it arrives. No prepayment needed anywhere in India.</p></div>
  </div>
  <div class="s-item-ship">
    <div class="s-icon"><svg viewBox="0 0 24 24"><path d="M12 21a9.004 9.004 0 008.716-6.747M12 21a9.004 9.004 0 01-8.716-6.747M12 21c2.485 0 4.5-4.03 4.5-9S14.485 3 12 3m0 18c-2.485 0-4.5-4.03-4.5-9S9.515 3 12 3m0 0a8.997 8.997 0 017.843 4.582M12 3a8.997 8.997 0 00-7.843 4.582m15.686 0A11.953 11.953 0 0112 10.5c-2.998 0-5.74-1.1-7.843-2.918m15.686 0A8.959 8.959 0 0121 12c0 .778-.099 1.533-.284 2.253"/></svg></div>
    <div><div class="s-title">Ships Worldwide</div><p class="s-body">We ship to 30+ countries. Carry your Heritage Haat anywhere you go.</p></div>
  </div>
  <div class="s-item-ship">
    <div class="s-icon"><svg viewBox="0 0 24 24"><path d="M16.023 9.348h4.992v-.001M2.985 19.644v-4.992m0 0h4.992m-4.993 0l3.181 3.183a8.25 8.25 0 0013.803-3.7M4.031 9.865a8.25 8.25 0 0113.803-3.7l3.181 3.182m0-4.991v4.99"/></svg></div>
    <div><div class="s-title">Free Returns, 7 Days</div><p class="s-body">Not in love? Full refund within 7 days. No questions asked.</p></div>
  </div>
</div>

<!-- INSTAGRAM -->
<div class="insta">
  <div class="insta-hdr">
    <h2 class="insta-h2">The Wanderer Edit, <em>in the wild</em></h2>
    <a href="#" class="insta-link">@heritagehaat →</a>
  </div>
  <div class="insta-grid">
    <div class="insta-cell"><img src="IMG_1655.JPG" alt=""><div class="insta-ov"><span>♡</span></div></div>
    <div class="insta-cell"><img src="IMG_1414.JPG" alt="" style="object-position:center 10%"><div class="insta-ov"><span>♡</span></div></div>
    <div class="insta-cell"><img src="IMG_1460.JPG" alt=""><div class="insta-ov"><span>♡</span></div></div>
    <div class="insta-cell"><img src="IMG_1204.JPG" alt=""><div class="insta-ov"><span>♡</span></div></div>
    <div class="insta-cell"><img src="IMG_1127.JPG" alt="" style="object-position:center 40%"><div class="insta-ov"><span>♡</span></div></div>
    <div class="insta-cell"><img src="249132E5-3B3A-41FA-8F21-2579B1EB61D0.JPEG" alt=""><div class="insta-ov"><span>♡</span></div></div>
  </div>
</div>

<?php include __DIR__ . '/corephp/footer.php'; ?>
</body>
</html>

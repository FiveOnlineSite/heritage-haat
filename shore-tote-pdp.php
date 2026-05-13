<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>The Shore Tote — The Wanderer Edit | Heritage Haat</title>
  <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:ital,wght@0,400;0,500;0,600;0,700;1,400;1,500&family=Jost:wght@300;400;500;600&display=swap" rel="stylesheet" />
  <style>
    *, *::before, *::after { box-sizing: border-box; margin: 0; padding: 0; }

    :root {
      --cream: #FAF7F1;
      --sand: #F2EDE4;
      --dusk: #1A1410;
      --ember: #C4622A;
      --gold: #B8963A;
      --mist: #8C7B6B;
      --border: rgba(26,20,16,0.12);
    }

    html { scroll-behavior: smooth; }

    body {
      background: var(--cream);
      color: var(--dusk);
      font-family: 'Jost', sans-serif;
      font-weight: 400;
      -webkit-font-smoothing: antialiased;
    }

    /* ─── SHIPPING BAR ─── */
    .shipping-bar {
      background: var(--dusk);
      color: var(--cream);
      font-family: 'Jost', sans-serif;
      font-size: 0.7rem;
      font-weight: 500;
      letter-spacing: 0.12em;
      text-transform: uppercase;
      padding: 0.55rem 1.5rem;
      display: flex;
      justify-content: center;
      gap: 2.5rem;
      overflow-x: auto;
      white-space: nowrap;
    }
    .shipping-bar span {
      display: flex;
      align-items: center;
      gap: 0.45rem;
      opacity: 0.9;
    }
    .shipping-bar svg { flex-shrink: 0; }

    /* ─── NAV ─── */
    nav {
      position: sticky;
      top: 0;
      z-index: 100;
      background: var(--cream);
      border-bottom: 1px solid var(--border);
      display: flex;
      align-items: center;
      justify-content: space-between;
      padding: 0 2.5rem;
      height: 64px;
    }
    .nav-logo {
      font-family: 'Playfair Display', serif;
      font-size: 1.35rem;
      font-weight: 600;
      color: var(--dusk);
      text-decoration: none;
      letter-spacing: 0.02em;
    }
    .nav-logo span { color: var(--ember); }
    .nav-links {
      display: flex;
      gap: 2rem;
      list-style: none;
    }
    .nav-links a {
      font-size: 0.72rem;
      font-weight: 500;
      letter-spacing: 0.12em;
      text-transform: uppercase;
      color: var(--dusk);
      text-decoration: none;
      opacity: 0.75;
      transition: opacity 0.2s;
    }
    .nav-links a:hover { opacity: 1; }
    .nav-right {
      display: flex;
      align-items: center;
      gap: 1.2rem;
    }
    .nav-cart {
      display: flex;
      align-items: center;
      gap: 0.4rem;
      font-size: 0.72rem;
      font-weight: 500;
      letter-spacing: 0.1em;
      text-transform: uppercase;
      color: var(--dusk);
      text-decoration: none;
      cursor: pointer;
    }
    .cart-count {
      background: var(--ember);
      color: white;
      font-size: 0.6rem;
      font-weight: 600;
      width: 16px;
      height: 16px;
      border-radius: 50%;
      display: flex;
      align-items: center;
      justify-content: center;
    }
    .hamburger {
      display: none;
      flex-direction: column;
      gap: 5px;
      cursor: pointer;
      padding: 4px;
    }
    .hamburger span {
      display: block;
      width: 22px;
      height: 1.5px;
      background: var(--dusk);
      transition: all 0.3s;
    }

    /* ─── MOBILE NAV DRAWER ─── */
    .mobile-nav {
      display: none;
      position: fixed;
      inset: 0;
      background: var(--cream);
      z-index: 200;
      flex-direction: column;
      padding: 2rem;
      gap: 2rem;
    }
    .mobile-nav.open { display: flex; }
    .mobile-nav-header {
      display: flex;
      justify-content: space-between;
      align-items: center;
    }
    .mobile-nav-close {
      font-size: 1.5rem;
      cursor: pointer;
      color: var(--dusk);
      background: none;
      border: none;
      line-height: 1;
    }
    .mobile-nav ul {
      list-style: none;
      display: flex;
      flex-direction: column;
      gap: 1.5rem;
    }
    .mobile-nav a {
      font-family: 'Playfair Display', serif;
      font-size: 1.6rem;
      color: var(--dusk);
      text-decoration: none;
    }

    /* ─── BREADCRUMB ─── */
    .breadcrumb {
      max-width: 1300px;
      margin: 0 auto;
      padding: 1.2rem 2.5rem 0;
      font-size: 0.7rem;
      font-weight: 500;
      letter-spacing: 0.1em;
      text-transform: uppercase;
      color: var(--mist);
      display: flex;
      gap: 0.5rem;
      align-items: center;
    }
    .breadcrumb a { color: var(--mist); text-decoration: none; transition: color 0.2s; }
    .breadcrumb a:hover { color: var(--ember); }
    .breadcrumb span { opacity: 0.5; }

    /* ─── HERO ─── */
    .pdp-hero {
      max-width: 1300px;
      margin: 0 auto;
      padding: 2rem 2.5rem 4rem;
      display: grid;
      grid-template-columns: 1fr 1fr;
      gap: 5rem;
      align-items: start;
    }

    /* LEFT — Main image */
    .pdp-image-wrap {
      position: sticky;
      top: 80px;
    }
    .pdp-main-image {
      width: 100%;
      aspect-ratio: 3/4;
      object-fit: cover;
      background: var(--sand);
      display: block;
      /* placeholder pattern */
      background-image: repeating-linear-gradient(
        135deg,
        rgba(184,150,58,0.08) 0px,
        rgba(184,150,58,0.08) 1px,
        transparent 1px,
        transparent 20px
      );
    }
    .pdp-main-image-placeholder {
      width: 100%;
      aspect-ratio: 3/4;
      background: var(--sand);
      background-image: repeating-linear-gradient(
        135deg,
        rgba(184,150,58,0.08) 0px,
        rgba(184,150,58,0.08) 1px,
        transparent 1px,
        transparent 20px
      );
      display: flex;
      flex-direction: column;
      align-items: center;
      justify-content: center;
      gap: 0.75rem;
      color: var(--mist);
    }
    .pdp-main-image-placeholder .placeholder-label {
      font-size: 0.7rem;
      letter-spacing: 0.15em;
      text-transform: uppercase;
      font-weight: 500;
    }
    .edition-ribbon {
      position: absolute;
      top: 1.5rem;
      left: 0;
      background: var(--ember);
      color: white;
      font-size: 0.62rem;
      font-weight: 600;
      letter-spacing: 0.15em;
      text-transform: uppercase;
      padding: 0.35rem 1rem 0.35rem 0.85rem;
      clip-path: polygon(0 0, 100% 0, calc(100% - 6px) 50%, 100% 100%, 0 100%);
    }
    .image-wrap-inner { position: relative; }

    /* RIGHT — Purchase info */
    .pdp-info {
      padding-top: 0.5rem;
    }
    .craft-tag {
      font-size: 0.68rem;
      font-weight: 600;
      letter-spacing: 0.18em;
      text-transform: uppercase;
      color: var(--ember);
      margin-bottom: 0.85rem;
    }
    .pdp-title {
      font-family: 'Playfair Display', serif;
      font-size: 2.75rem;
      font-weight: 600;
      line-height: 1.1;
      letter-spacing: -0.01em;
      color: var(--dusk);
      margin-bottom: 1.2rem;
    }
    .edition-meta {
      display: flex;
      align-items: center;
      gap: 0.75rem;
      margin-bottom: 1.5rem;
      flex-wrap: wrap;
    }
    .edition-num {
      font-size: 0.68rem;
      font-weight: 500;
      letter-spacing: 0.12em;
      text-transform: uppercase;
      color: var(--mist);
    }
    .limited-badge {
      display: flex;
      align-items: center;
      gap: 0.4rem;
      background: rgba(196,98,42,0.09);
      border: 1px solid rgba(196,98,42,0.25);
      color: var(--ember);
      font-size: 0.62rem;
      font-weight: 600;
      letter-spacing: 0.14em;
      text-transform: uppercase;
      padding: 0.25rem 0.65rem;
      border-radius: 2px;
    }
    .limited-badge::before {
      content: '';
      width: 5px;
      height: 5px;
      border-radius: 50%;
      background: var(--ember);
      animation: pulse 2s infinite;
    }
    @keyframes pulse {
      0%, 100% { opacity: 1; }
      50% { opacity: 0.4; }
    }

    .pdp-price {
      font-family: 'Playfair Display', serif;
      font-size: 2rem;
      font-weight: 500;
      color: var(--dusk);
      margin-bottom: 0.4rem;
    }
    .pdp-price-note {
      font-size: 0.7rem;
      color: var(--mist);
      letter-spacing: 0.05em;
      margin-bottom: 1.75rem;
    }

    .variation-note {
      background: rgba(184,150,58,0.07);
      border-left: 2px solid var(--gold);
      padding: 0.85rem 1rem;
      font-size: 0.8rem;
      line-height: 1.6;
      color: var(--mist);
      font-style: italic;
      margin-bottom: 1.75rem;
    }
    .variation-note strong {
      color: var(--dusk);
      font-style: normal;
      font-weight: 500;
    }

    .pdp-dims {
      display: grid;
      grid-template-columns: 1fr 1fr 1fr;
      gap: 0.5rem;
      margin-bottom: 2rem;
    }
    .dim-card {
      border: 1px solid var(--border);
      padding: 0.75rem 0.65rem;
      text-align: center;
    }
    .dim-val {
      font-family: 'Playfair Display', serif;
      font-size: 1rem;
      font-weight: 500;
      color: var(--dusk);
      display: block;
      margin-bottom: 0.2rem;
    }
    .dim-label {
      font-size: 0.62rem;
      font-weight: 500;
      letter-spacing: 0.1em;
      text-transform: uppercase;
      color: var(--mist);
    }

    .cta-stack {
      display: flex;
      flex-direction: column;
      gap: 0.75rem;
      margin-bottom: 1.75rem;
    }
    .btn-primary {
      display: flex;
      align-items: center;
      justify-content: center;
      gap: 0.6rem;
      background: var(--dusk);
      color: var(--cream);
      font-family: 'Jost', sans-serif;
      font-size: 0.78rem;
      font-weight: 600;
      letter-spacing: 0.16em;
      text-transform: uppercase;
      padding: 1.1rem 2rem;
      border: none;
      cursor: pointer;
      width: 100%;
      transition: background 0.25s;
    }
    .btn-primary:hover { background: var(--ember); }
    .btn-whatsapp {
      display: flex;
      align-items: center;
      justify-content: center;
      gap: 0.6rem;
      background: transparent;
      color: var(--dusk);
      font-family: 'Jost', sans-serif;
      font-size: 0.78rem;
      font-weight: 500;
      letter-spacing: 0.12em;
      text-transform: uppercase;
      padding: 1rem 2rem;
      border: 1px solid var(--border);
      cursor: pointer;
      width: 100%;
      transition: border-color 0.25s, background 0.25s;
    }
    .btn-whatsapp:hover {
      border-color: #25D366;
      background: rgba(37,211,102,0.04);
    }

    .trust-badges {
      display: flex;
      gap: 1rem;
      flex-wrap: wrap;
    }
    .trust-badge {
      display: flex;
      align-items: center;
      gap: 0.4rem;
      font-size: 0.68rem;
      font-weight: 500;
      letter-spacing: 0.06em;
      color: var(--mist);
    }
    .trust-badge svg { color: var(--gold); flex-shrink: 0; }

    /* ─── IMAGE GALLERY ─── */
    .gallery-section {
      max-width: 1300px;
      margin: 0 auto;
      padding: 0 2.5rem 5rem;
    }
    .gallery-label {
      font-size: 0.68rem;
      font-weight: 600;
      letter-spacing: 0.18em;
      text-transform: uppercase;
      color: var(--mist);
      margin-bottom: 1.25rem;
    }
    .gallery-grid {
      display: grid;
      grid-template-columns: 2fr 1fr 1fr;
      grid-template-rows: auto auto;
      gap: 1rem;
    }
    .gallery-item {
      background: var(--sand);
      overflow: hidden;
      position: relative;
    }
    .gallery-item:first-child {
      grid-row: span 2;
    }
    .gallery-img {
      width: 100%;
      height: 100%;
      object-fit: cover;
      display: block;
    }
    .gallery-placeholder {
      width: 100%;
      aspect-ratio: 1;
      background: var(--sand);
      display: flex;
      align-items: center;
      justify-content: center;
      font-size: 0.65rem;
      letter-spacing: 0.12em;
      text-transform: uppercase;
      color: var(--mist);
      opacity: 0.6;
    }
    .gallery-item:first-child .gallery-placeholder {
      aspect-ratio: auto;
      min-height: 320px;
    }

    /* ─── DIVIDER ─── */
    .section-divider {
      max-width: 1300px;
      margin: 0 auto;
      padding: 0 2.5rem;
      border: none;
      border-top: 1px solid var(--border);
      margin-bottom: 5rem;
    }

    /* ─── CRAFT STORY ─── */
    .craft-section {
      max-width: 1300px;
      margin: 0 auto;
      padding: 0 2.5rem 5rem;
      display: grid;
      grid-template-columns: 1fr 1fr;
      gap: 5rem;
      align-items: center;
    }
    .craft-eyebrow {
      font-size: 0.68rem;
      font-weight: 600;
      letter-spacing: 0.18em;
      text-transform: uppercase;
      color: var(--ember);
      margin-bottom: 1.25rem;
    }
    .craft-heading {
      font-family: 'Playfair Display', serif;
      font-size: 2rem;
      font-weight: 600;
      line-height: 1.2;
      color: var(--dusk);
      margin-bottom: 1.5rem;
    }
    .craft-body {
      font-size: 0.95rem;
      line-height: 1.85;
      color: var(--mist);
      margin-bottom: 1.5rem;
    }
    .craft-body p + p { margin-top: 1rem; }
    .craft-tags {
      display: flex;
      gap: 0.5rem;
      flex-wrap: wrap;
    }
    .craft-tag-pill {
      font-size: 0.65rem;
      font-weight: 600;
      letter-spacing: 0.14em;
      text-transform: uppercase;
      color: var(--dusk);
      border: 1px solid var(--border);
      padding: 0.3rem 0.75rem;
    }
    .craft-right {
      position: relative;
    }
    .craft-quote-wrap {
      background: var(--sand);
      padding: 3rem 2.75rem;
      position: relative;
    }
    .craft-quote-wrap::before {
      content: '\201C';
      font-family: 'Playfair Display', serif;
      font-size: 6rem;
      color: var(--gold);
      opacity: 0.3;
      position: absolute;
      top: 0.5rem;
      left: 1.5rem;
      line-height: 1;
    }
    .craft-quote {
      font-family: 'Playfair Display', serif;
      font-size: 1.5rem;
      font-weight: 500;
      font-style: italic;
      line-height: 1.55;
      color: var(--dusk);
      margin-bottom: 1.5rem;
      position: relative;
      z-index: 1;
    }
    .craft-technique {
      display: inline-flex;
      flex-direction: column;
      gap: 0.15rem;
    }
    .technique-name {
      font-size: 0.8rem;
      font-weight: 600;
      letter-spacing: 0.1em;
      text-transform: uppercase;
      color: var(--dusk);
    }
    .technique-origin {
      font-size: 0.68rem;
      font-weight: 400;
      letter-spacing: 0.08em;
      color: var(--mist);
    }
    .craft-accent-line {
      width: 2.5rem;
      height: 2px;
      background: var(--gold);
      margin-bottom: 1rem;
    }

    /* ─── YOUR EDITION ─── */
    .edition-section {
      background: var(--dusk);
      color: var(--cream);
      padding: 5rem 2.5rem;
      margin-bottom: 5rem;
    }
    .edition-inner {
      max-width: 1300px;
      margin: 0 auto;
      display: grid;
      grid-template-columns: 1fr 1fr;
      gap: 6rem;
      align-items: center;
    }
    .edition-eyebrow {
      font-size: 0.68rem;
      font-weight: 600;
      letter-spacing: 0.18em;
      text-transform: uppercase;
      color: var(--gold);
      margin-bottom: 1.25rem;
    }
    .edition-heading {
      font-family: 'Playfair Display', serif;
      font-size: 2.25rem;
      font-weight: 600;
      line-height: 1.2;
      color: var(--cream);
      margin-bottom: 1.5rem;
    }
    .edition-body {
      font-size: 0.95rem;
      line-height: 1.85;
      color: rgba(250,247,241,0.65);
      margin-bottom: 2rem;
    }
    .edition-body p + p { margin-top: 1rem; }
    .edition-traits {
      display: flex;
      flex-direction: column;
      gap: 1.25rem;
    }
    .edition-trait {
      display: flex;
      gap: 1rem;
      align-items: flex-start;
    }
    .trait-icon {
      width: 32px;
      height: 32px;
      border: 1px solid rgba(184,150,58,0.4);
      display: flex;
      align-items: center;
      justify-content: center;
      flex-shrink: 0;
      margin-top: 0.1rem;
    }
    .trait-text { flex: 1; }
    .trait-title {
      font-size: 0.78rem;
      font-weight: 600;
      letter-spacing: 0.08em;
      text-transform: uppercase;
      color: var(--cream);
      margin-bottom: 0.2rem;
    }
    .trait-desc {
      font-size: 0.82rem;
      line-height: 1.6;
      color: rgba(250,247,241,0.55);
    }
    .edition-quote-panel {
      border: 1px solid rgba(184,150,58,0.25);
      padding: 3rem;
    }
    .edition-quote-panel blockquote {
      font-family: 'Playfair Display', serif;
      font-size: 1.75rem;
      font-weight: 500;
      font-style: italic;
      line-height: 1.5;
      color: var(--cream);
      margin-bottom: 2rem;
    }
    .edition-tagline {
      font-size: 0.7rem;
      font-weight: 600;
      letter-spacing: 0.18em;
      text-transform: uppercase;
      color: var(--gold);
    }

    /* ─── ALSO WANDER ─── */
    .wander-section {
      max-width: 1300px;
      margin: 0 auto;
      padding: 0 2.5rem 5rem;
    }
    .wander-header {
      display: flex;
      justify-content: space-between;
      align-items: baseline;
      margin-bottom: 2rem;
    }
    .wander-heading {
      font-family: 'Playfair Display', serif;
      font-size: 1.65rem;
      font-weight: 600;
      color: var(--dusk);
    }
    .wander-link {
      font-size: 0.7rem;
      font-weight: 600;
      letter-spacing: 0.14em;
      text-transform: uppercase;
      color: var(--ember);
      text-decoration: none;
      border-bottom: 1px solid transparent;
      transition: border-color 0.2s;
    }
    .wander-link:hover { border-color: var(--ember); }
    .wander-grid {
      display: grid;
      grid-template-columns: repeat(3, 1fr);
      gap: 1.5rem;
    }
    .wander-card {
      cursor: pointer;
      group: true;
    }
    .wander-img-wrap {
      background: var(--sand);
      aspect-ratio: 3/4;
      overflow: hidden;
      margin-bottom: 1rem;
      position: relative;
    }
    .wander-img {
      width: 100%;
      height: 100%;
      object-fit: cover;
      display: block;
      transition: transform 0.5s ease;
    }
    .wander-card:hover .wander-img { transform: scale(1.04); }
    .wander-img-placeholder {
      width: 100%;
      height: 100%;
      background: var(--sand);
      background-image: repeating-linear-gradient(
        -45deg,
        rgba(184,150,58,0.06) 0px,
        rgba(184,150,58,0.06) 1px,
        transparent 1px,
        transparent 16px
      );
      display: flex;
      align-items: center;
      justify-content: center;
      font-size: 0.65rem;
      letter-spacing: 0.12em;
      text-transform: uppercase;
      color: var(--mist);
      opacity: 0.7;
    }
    .wander-craft {
      font-size: 0.62rem;
      font-weight: 600;
      letter-spacing: 0.14em;
      text-transform: uppercase;
      color: var(--ember);
      margin-bottom: 0.3rem;
    }
    .wander-name {
      font-family: 'Playfair Display', serif;
      font-size: 1.05rem;
      font-weight: 500;
      color: var(--dusk);
      margin-bottom: 0.3rem;
    }
    .wander-price {
      font-size: 0.82rem;
      font-weight: 500;
      color: var(--mist);
    }
    .wander-sold-out {
      position: absolute;
      top: 0.75rem;
      right: 0.75rem;
      background: var(--dusk);
      color: var(--cream);
      font-size: 0.58rem;
      font-weight: 600;
      letter-spacing: 0.12em;
      text-transform: uppercase;
      padding: 0.25rem 0.5rem;
    }

    /* ─── FOOTER ─── */
    footer {
      background: var(--dusk);
      color: var(--cream);
      padding: 4rem 2.5rem 2rem;
    }
    .footer-inner {
      max-width: 1300px;
      margin: 0 auto;
    }
    .footer-top {
      display: grid;
      grid-template-columns: 1.5fr 1fr 1fr 1fr;
      gap: 3rem;
      padding-bottom: 3rem;
      border-bottom: 1px solid rgba(250,247,241,0.1);
      margin-bottom: 2rem;
    }
    .footer-brand p {
      font-size: 0.82rem;
      line-height: 1.7;
      color: rgba(250,247,241,0.55);
      margin-top: 0.75rem;
      max-width: 240px;
    }
    .footer-col h4 {
      font-size: 0.65rem;
      font-weight: 600;
      letter-spacing: 0.16em;
      text-transform: uppercase;
      color: var(--gold);
      margin-bottom: 1rem;
    }
    .footer-col ul { list-style: none; display: flex; flex-direction: column; gap: 0.65rem; }
    .footer-col a {
      font-size: 0.8rem;
      color: rgba(250,247,241,0.55);
      text-decoration: none;
      transition: color 0.2s;
    }
    .footer-col a:hover { color: var(--cream); }
    .footer-bottom {
      display: flex;
      justify-content: space-between;
      align-items: center;
      font-size: 0.7rem;
      color: rgba(250,247,241,0.35);
      flex-wrap: wrap;
      gap: 0.5rem;
    }

    /* ─── RESPONSIVE ─── */
    @media (max-width: 960px) {
      .nav-links { display: none; }
      .hamburger { display: flex; }

      .pdp-hero {
        grid-template-columns: 1fr;
        gap: 2.5rem;
        padding: 1.5rem 1.5rem 3rem;
      }
      .pdp-image-wrap { position: static; }
      .pdp-title { font-size: 2.2rem; }

      .gallery-grid {
        grid-template-columns: 1fr 1fr;
      }
      .gallery-item:first-child { grid-row: span 1; }

      .craft-section {
        grid-template-columns: 1fr;
        gap: 2.5rem;
        padding: 0 1.5rem 4rem;
      }
      .edition-inner {
        grid-template-columns: 1fr;
        gap: 3rem;
      }
      .footer-top {
        grid-template-columns: 1fr 1fr;
        gap: 2rem;
      }
      .wander-grid {
        grid-template-columns: repeat(3, 260px);
        overflow-x: auto;
        padding-bottom: 1rem;
        gap: 1rem;
        scroll-snap-type: x mandatory;
      }
      .wander-card { scroll-snap-align: start; }
    }

    @media (max-width: 520px) {
      nav { padding: 0 1.25rem; }
      .breadcrumb { padding: 1rem 1.25rem 0; }
      .pdp-hero { padding: 1.25rem 1.25rem 2.5rem; }
      .pdp-title { font-size: 1.9rem; }
      .pdp-price { font-size: 1.65rem; }
      .pdp-dims { grid-template-columns: 1fr 1fr 1fr; }
      .gallery-section { padding: 0 1.25rem 3rem; }
      .gallery-grid { grid-template-columns: 1fr; }
      .gallery-item:first-child { grid-row: span 1; }
      .craft-section { padding: 0 1.25rem 3rem; }
      .edition-section { padding: 3rem 1.25rem; }
      .edition-quote-panel { padding: 2rem 1.5rem; }
      .edition-quote-panel blockquote { font-size: 1.35rem; }
      .wander-section { padding: 0 1.25rem 3rem; }
      .wander-grid { grid-template-columns: repeat(3, 220px); }
      footer { padding: 3rem 1.25rem 1.5rem; }
      .footer-top { grid-template-columns: 1fr; gap: 2rem; }
      .footer-bottom { flex-direction: column; align-items: flex-start; }
      .shipping-bar { gap: 1.25rem; font-size: 0.62rem; }
    }
  </style>
</head>
<body>

  <!-- SHIPPING BAR -->
  <div class="shipping-bar">
    <span>
      <svg width="13" height="13" fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24"><path d="M5 12h14M12 5l7 7-7 7"/></svg>
      Free returns · 7 days
    </span>
    <span>
      <svg width="13" height="13" fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24"><path d="M3 9l9-7 9 7v11a2 2 0 01-2 2H5a2 2 0 01-2-2z"/></svg>
      48hr Mumbai delivery
    </span>
    <span>
      <svg width="13" height="13" fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24"><circle cx="12" cy="12" r="10"/><path d="M12 6v6l4 2"/></svg>
      Ships worldwide
    </span>
    <span>
      <svg width="13" height="13" fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24"><rect x="2" y="5" width="20" height="14" rx="2"/><path d="M2 10h20"/></svg>
      COD available
    </span>
  </div>

  <?php include __DIR__ . '/corephp/header.php'; ?>

  <!-- MOBILE NAV -->
  <div class="mobile-nav" id="mobileNav">
    <div class="mobile-nav-header">
      <a href="/" class="nav-logo">Heritage <span>Haat</span></a>
      <button class="mobile-nav-close" onclick="document.getElementById('mobileNav').classList.remove('open')">×</button>
    </div>
    <ul>
      <li><a href="/collections/wanderer-edit">The Wanderer Edit</a></li>
      <li><a href="/pages/about">Our Craft</a></li>
      <li><a href="/pages/artisans">Artisans</a></li>
      <li><a href="/pages/care">Care</a></li>
    </ul>
  </div>

  <!-- BREADCRUMB -->
  <div class="breadcrumb">
    <a href="/">Home</a>
    <span>/</span>
    <a href="/collections/wanderer-edit">The Wanderer Edit</a>
    <span>/</span>
    The Shore Tote
  </div>

  <!-- HERO -->
  <section class="pdp-hero">

    <!-- LEFT: Image -->
    <div class="pdp-image-wrap">
      <div class="image-wrap-inner">
        <div class="edition-ribbon">Edition No. 03 of 12</div>
        <!-- Replace src with actual product image -->
        <div class="pdp-main-image-placeholder">
          <svg width="36" height="36" fill="none" stroke="currentColor" stroke-width="1" viewBox="0 0 24 24" opacity="0.3"><rect x="3" y="3" width="18" height="18" rx="1"/><circle cx="8.5" cy="8.5" r="1.5"/><polyline points="21 15 16 10 5 21"/></svg>
          <span class="placeholder-label">Product image goes here</span>
        </div>
      </div>
    </div>

    <!-- RIGHT: Purchase info -->
    <div class="pdp-info">
      <div class="craft-tag">Cowrie Shell · Mirror Work · Stripe Canvas</div>
      <h1 class="pdp-title">The Shore Tote</h1>

      <div class="edition-meta">
        <span class="edition-num">Edition 03 of 12</span>
        <span class="limited-badge">Limited — No Restock</span>
      </div>

      <div class="pdp-price">₹1,499</div>
      <div class="pdp-price-note">Incl. taxes · Free shipping on orders above ₹999</div>

      <div class="variation-note">
        <strong>Your piece may vary slightly from the photo.</strong> Each cowrie shell is hand-placed, each mirror individually set. The stripe canvas is hand-cut per bag. These are marks of craft, not inconsistency — <strong>consider it your edition.</strong>
      </div>

      <div class="pdp-dims">
        <div class="dim-card">
          <span class="dim-val">34 cm</span>
          <span class="dim-label">Width</span>
        </div>
        <div class="dim-card">
          <span class="dim-val">30 cm</span>
          <span class="dim-label">Height</span>
        </div>
        <div class="dim-card">
          <span class="dim-val">12 cm</span>
          <span class="dim-label">Depth</span>
        </div>
      </div>

      <div class="cta-stack">
        <button class="btn-primary">
          <svg width="16" height="16" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path d="M6 2L3 6v14a2 2 0 002 2h14a2 2 0 002-2V6l-3-4z"/><line x1="3" y1="6" x2="21" y2="6"/><path d="M16 10a4 4 0 01-8 0"/></svg>
          Add to Cart
        </button>
        <a href="https://wa.me/919XXXXXXXXX?text=I%27d%20like%20to%20order%20The%20Shore%20Tote%20from%20Heritage%20Haat" class="btn-whatsapp" target="_blank" rel="noopener">
          <svg width="15" height="15" viewBox="0 0 24 24" fill="currentColor"><path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347z"/><path d="M12 0C5.373 0 0 5.373 0 12c0 2.123.556 4.111 1.535 5.836L.057 23.215a.75.75 0 00.908.87l5.532-1.452A11.947 11.947 0 0012 24c6.627 0 12-5.373 12-12S18.627 0 12 0zm0 21.818a9.814 9.814 0 01-5.016-1.381l-.359-.214-3.728.977.997-3.649-.234-.374A9.818 9.818 0 012.182 12C2.182 6.57 6.57 2.182 12 2.182S21.818 6.57 21.818 12 17.43 21.818 12 21.818z"/></svg>
          Order on WhatsApp
        </a>
      </div>

      <div class="trust-badges">
        <span class="trust-badge">
          <svg width="13" height="13" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><rect x="2" y="5" width="20" height="14" rx="2"/><path d="M2 10h20"/></svg>
          COD Available
        </span>
        <span class="trust-badge">
          <svg width="13" height="13" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><circle cx="12" cy="12" r="10"/><path d="M12 6v6l4 2"/></svg>
          48hr Mumbai
        </span>
        <span class="trust-badge">
          <svg width="13" height="13" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg>
          Ships Worldwide
        </span>
        <span class="trust-badge">
          <svg width="13" height="13" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><polyline points="23 4 23 10 17 10"/><path d="M20.49 15a9 9 0 11-2.12-9.36L23 10"/></svg>
          7-Day Returns
        </span>
      </div>
    </div>
  </section>

  <!-- GALLERY -->
  <section class="gallery-section">
    <div class="gallery-label">More looks</div>
    <div class="gallery-grid">
      <div class="gallery-item">
        <div class="gallery-placeholder" style="min-height:380px;">Lifestyle shot</div>
      </div>
      <div class="gallery-item">
        <div class="gallery-placeholder">Detail — cowrie shells</div>
      </div>
      <div class="gallery-item">
        <div class="gallery-placeholder">Detail — mirror work</div>
      </div>
      <div class="gallery-item">
        <div class="gallery-placeholder">Interior / strap</div>
      </div>
    </div>
  </section>

  <hr class="section-divider" />

  <!-- CRAFT STORY -->
  <section class="craft-section">
    <div class="craft-left">
      <div class="craft-eyebrow">The Craft Behind It</div>
      <h2 class="craft-heading">Where the shore meets the stitch</h2>
      <div class="craft-body">
        <p>The Shore Tote is made by artisan families in the Bhuj district of Kutch — a region where embroidery is passed down not through institutions but through hands. The cowrie shells, threaded individually and placed by eye, come from the same trade routes that have supplied Kutch craftspeople for generations.</p>
        <p>The stripe canvas base — hand-cut and stitched — gives the bag its structure. The mirror work isn't decoration. In Kutchhi tradition, mirrors were believed to ward off misfortune. Every one you see here was placed with that same quiet intention.</p>
        <p>No pattern is printed. No machine has touched the embellishment. The woman who made yours — your specific bag — spent the better part of two days on it.</p>
      </div>
      <div class="craft-tags">
        <span class="craft-tag-pill">Cowrie Shell Work</span>
        <span class="craft-tag-pill">Kutch Mirror Work</span>
        <span class="craft-tag-pill">Stripe Canvas</span>
        <span class="craft-tag-pill">Bhuj, Gujarat</span>
      </div>
    </div>
    <div class="craft-right">
      <div class="craft-quote-wrap">
        <blockquote class="craft-quote">"Mirrors to reflect what matters. Shells to carry the sea with you wherever you go."</blockquote>
        <div class="craft-accent-line"></div>
        <div class="craft-technique">
          <span class="technique-name">Kutch Abhla Bharat</span>
          <span class="technique-origin">Mirror Embroidery · Bhuj District, Gujarat · Est. tradition 400+ years</span>
        </div>
      </div>
    </div>
  </section>

  <!-- YOUR EDITION -->
  <section class="edition-section">
    <div class="edition-inner">
      <div>
        <div class="edition-eyebrow">Why your piece looks different</div>
        <h2 class="edition-heading">No two exactly alike. No restocks. No apologies.</h2>
        <div class="edition-body">
          <p>When something is made by hand — entirely, genuinely — no two pieces can be the same. The artisan's placement of each cowrie shell, each mirror, each stripe cut is an unrepeatable decision.</p>
          <p>This isn't a quality control issue we're explaining away. This is the point. The variation is the proof that yours was made by a person, not a factory.</p>
        </div>
        <div class="edition-traits">
          <div class="edition-trait">
            <div class="trait-icon">
              <svg width="14" height="14" fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24" color="#B8963A"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/></svg>
            </div>
            <div class="trait-text">
              <div class="trait-title">Shell placement varies</div>
              <div class="trait-desc">Each cowrie is hand-threaded and placed by eye. Density and arrangement differ piece to piece.</div>
            </div>
          </div>
          <div class="edition-trait">
            <div class="trait-icon">
              <svg width="14" height="14" fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24" color="#B8963A"><circle cx="12" cy="12" r="10"/><path d="M12 8v4l3 3"/></svg>
            </div>
            <div class="trait-text">
              <div class="trait-title">Mirror count shifts slightly</div>
              <div class="trait-desc">Mirror work is placed intuitively, not measured. Your piece may have one more or fewer mirrors than the photo.</div>
            </div>
          </div>
          <div class="edition-trait">
            <div class="trait-icon">
              <svg width="14" height="14" fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24" color="#B8963A"><path d="M21 16V8a2 2 0 00-1-1.73l-7-4a2 2 0 00-2 0l-7 4A2 2 0 003 8v8a2 2 0 001 1.73l7 4a2 2 0 002 0l7-4A2 2 0 0021 16z"/></svg>
            </div>
            <div class="trait-text">
              <div class="trait-title">Stripe cut is handmade</div>
              <div class="trait-desc">Canvas is hand-cut and stitched. Stripe width and alignment carry slight, natural variation.</div>
            </div>
          </div>
        </div>
      </div>
      <div class="edition-quote-panel">
        <blockquote>"The bag that arrives at your door was made for you — not because we planned it that way, but because no one else could have made exactly that piece."</blockquote>
        <div class="edition-tagline">Consider it your edition.</div>
      </div>
    </div>
  </section>

  <!-- YOU MAY ALSO WANDER -->
  <section class="wander-section">
    <div class="wander-header">
      <h2 class="wander-heading">You May Also Wander</h2>
      <a href="/collections/wanderer-edit" class="wander-link">See all 12 →</a>
    </div>
    <div class="wander-grid">

      <!-- Product 1 — The Midnight Tote -->
      <div class="wander-card">
        <div class="wander-img-wrap">
          <div class="wander-img-placeholder">Product image</div>
        </div>
        <div class="wander-craft">Kutch Mirror · Banjara</div>
        <div class="wander-name">The Midnight Tote</div>
        <div class="wander-price">₹1,499</div>
      </div>

      <!-- Product 2 — The Nomad Sling -->
      <div class="wander-card">
        <div class="wander-img-wrap">
          <div class="wander-img-placeholder">Product image</div>
        </div>
        <div class="wander-craft">Banjara Coin · Tribal Weave</div>
        <div class="wander-name">The Nomad Sling</div>
        <div class="wander-price">₹1,299</div>
      </div>

      <!-- Product 4 — The Fiesta Clutch -->
      <div class="wander-card">
        <div class="wander-img-wrap">
          <div class="wander-img-placeholder">Product image</div>
          <div class="wander-sold-out">2 left</div>
        </div>
        <div class="wander-craft">Bead Embroidery · Tassel</div>
        <div class="wander-name">The Fiesta Clutch</div>
        <div class="wander-price">₹1,199</div>
      </div>

    </div>
  </section>

  <?php include __DIR__ . '/corephp/footer.php'; ?>
</body>
</html>

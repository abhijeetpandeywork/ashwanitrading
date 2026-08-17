<?php
/* Global Header — Ashwani Trading Co.
   Sticky, with persistent Call CTA in the header
   + mobile full-screen nav overlay
*/
// Force server to bypass cache
header("Cache-Control: no-store, no-cache, must-revalidate, max-age=0");
header("Cache-Control: post-check=0, pre-check=0", false);
header("Pragma: no-cache");

$currentPage = $currentPage ?? '';
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?= htmlspecialchars($pageTitle ?? 'Ashwani Trading Co. — Spare Parts, Services & Rentals, Jammu') ?></title>
  <meta name="description" content="<?= htmlspecialchars($metaDesc ?? 'Ashwani Trading Co. (ATC) — 60+ years supplying genuine earthmoving & construction machinery spare parts, accessories, workshop repairs and rentals in Jammu, Kashmir & Ladakh.') ?>">
  <meta name="robots" content="index, follow">
  <link rel="canonical" href="https://ashwanitrading.digitalrubix.site/">

  <!-- Open Graph -->
  <meta property="og:title"       content="<?= htmlspecialchars($pageTitle ?? 'Ashwani Trading Co.') ?>">
  <meta property="og:description" content="60+ years supplying spare parts & machinery services across Jammu, Kashmir & Ladakh.">
  <meta property="og:type"        content="website">
  <meta property="og:url"         content="https://ashwanitrading.digitalrubix.site/">

  <!-- Fonts & Icons -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Syne:wght@600;700;800&family=DM+Sans:ital,opsz,wght@0,9..40,300;0,9..40,400;0,9..40,500;0,9..40,600;0,9..40,700;1,9..40,400&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">

  <!-- Site CSS -->
  <link rel="stylesheet" href="/assets/css/style.css?v=5.3">

  <?php if (($currentPage ?? '') === 'home'): ?>
  <!-- LocalBusiness Schema — Homepage only -->
  <script type="application/ld+json">
  {
    "@context": "https://schema.org",
    "@type": "LocalBusiness",
    "name": "Ashwani Trading Co.",
    "alternateName": "ATC",
    "url": "https://ashwanitrading.digitalrubix.site/",
    "telephone": ["+919419186209", "+919419186331"],
    "email": "ashwanitradingcojammu@gmail.com",
    "description": "60+ year old supplier of earthmoving and construction machinery spare parts, accessories, workshop repair services and machinery rentals in Jammu, Kashmir and Ladakh.",
    "address": [
      {
        "@type": "PostalAddress",
        "streetAddress": "Sunjwan Morh, Bye Pass Road, Narwal",
        "addressLocality": "Jammu",
        "postalCode": "180006",
        "addressRegion": "Jammu & Kashmir",
        "addressCountry": "IN",
        "name": "Branch Office"
      },
      {
        "@type": "PostalAddress",
        "streetAddress": "Plot No. 112, Yard 6, Transport Nagar, Narwal",
        "addressLocality": "Jammu",
        "postalCode": "180006",
        "addressRegion": "Jammu & Kashmir",
        "addressCountry": "IN",
        "name": "Main Office"
      }
    ],
    "geo": {
      "@type": "GeoCoordinates",
      "latitude": 32.7266,
      "longitude": 74.8570
    },
    "areaServed": ["Jammu", "Kashmir", "Ladakh"],
    "sameAs": [
      "https://www.tradeindia.com/ashwani-trading-co-2560288/",
      "https://www.facebook.com/profile.php?id=61585148043428&mibextid=ZbWKwL",
      "https://www.instagram.com/ashwanitradingcojammu?igsh=N3AybXQ1dmRtcmZ1",
      "https://twitter.com/Ashwanitrading"
    ]
  }
  </script>
  <?php endif; ?>
</head>
<body>

<!-- ===================== TOP INFO BAR ===================== -->
<div class="top-bar">
  <div class="container top-bar__inner">
    <div class="top-bar__contact">
      <a href="tel:+919419186209"><i class="fas fa-phone-alt"></i>+91 94191 86209</a>
      <a href="tel:+919419186331"><i class="fas fa-phone-alt"></i>+91 94191 86331</a>
      <a href="mailto:ashwanitradingcojammu@gmail.com"><i class="fas fa-envelope"></i>ashwanitradingcojammu@gmail.com</a>
    </div>
    <div class="top-bar__social">
      <a href="https://maps.app.goo.gl/YvS83bKDwppUnGvC9" target="_blank" rel="noopener" aria-label="Google Maps Location"><i class="fas fa-map-marker-alt"></i></a>
      <a href="https://www.facebook.com/profile.php?id=61585148043428&mibextid=ZbWKwL" target="_blank" rel="noopener" aria-label="Facebook"><i class="fab fa-facebook-f"></i></a>
      <a href="https://www.instagram.com/ashwanitradingcojammu?igsh=N3AybXQ1dmRtcmZ1" target="_blank" rel="noopener" aria-label="Instagram"><i class="fab fa-instagram"></i></a>
      <a href="https://twitter.com/Ashwanitrading" target="_blank" rel="noopener" aria-label="Twitter / X"><i class="fab fa-x-twitter"></i></a>
      <a href="https://www.tradeindia.com/ashwani-trading-co-2560288/" target="_blank" rel="noopener" aria-label="TradeIndia"><i class="fas fa-building"></i></a>
    </div>
  </div>
</div>

<!-- ===================== MAIN HEADER ===================== -->
<header class="site-header" id="main-header">
  <div class="container header__inner">

    <!-- Logo -->
    <a href="/index.php" class="logo" aria-label="Ashwani Trading Co. — Home" style="position: relative; width: 110px; height: 72px; display: block;">
      <img src="/assets/img/WhatsApp%20Image%202026-08-12%20at%205.32.04%20PM.jpeg" alt="Ashwani Trading Co. Logo" style="position: absolute; top: 6px; left: 0; width: 110px; height: 110px; object-fit: cover; border-radius: 16px; border: 4px solid var(--white); box-shadow: 0 6px 12px rgba(0,0,0,0.15); z-index: 1000; background: var(--white);">
    </a>

    <!-- Desktop Navigation -->
    <nav class="main-nav" role="navigation" aria-label="Main navigation">
      <a href="/index.php"    class="<?= $currentPage==='home'    ?'active':'' ?>">Home</a>
      <a href="/about.php"   class="<?= $currentPage==='about'   ?'active':'' ?>">About Us</a>
      <a href="/services.php"class="<?= $currentPage==='services'?'active':'' ?>">Services</a>
      <a href="/catalog.php" class="<?= $currentPage==='catalog' ?'active':'' ?>">Catalog</a>
      <a href="/contact.php" class="<?= $currentPage==='contact' ?'active':'' ?>">Contact</a>
    </nav>

    <!-- Header CTA -->
    <div class="header__cta">
      <a href="tel:+919419186209" class="btn btn--primary" id="header-call-btn">
        <i class="fas fa-phone-alt"></i> Call Now
      </a>
      <!-- Hamburger (mobile only) -->
      <button class="hamburger" id="hamburger-btn" aria-label="Open menu" aria-expanded="false">
        <i class="fas fa-bars" id="hamburger-icon"></i>
      </button>
    </div>

  </div>
</header>

<!-- ===================== MOBILE NAV OVERLAY ===================== -->
<div class="mobile-nav-backdrop" id="mobile-backdrop"></div>
<nav class="mobile-nav" id="mobile-nav" aria-label="Mobile navigation" aria-hidden="true">
  <button class="mobile-nav__close" id="nav-close-btn" aria-label="Close menu">
    <i class="fas fa-times"></i>
  </button>
  <a href="/index.php"    class="<?= $currentPage==='home'    ?'active':'' ?>">Home</a>
  <a href="/about.php"   class="<?= $currentPage==='about'   ?'active':'' ?>">About Us</a>
  <a href="/services.php"class="<?= $currentPage==='services'?'active':'' ?>">Services</a>
  <a href="/catalog.php" class="<?= $currentPage==='catalog' ?'active':'' ?>">Catalog</a>
  <a href="/contact.php" class="<?= $currentPage==='contact' ?'active':'' ?>">Contact</a>
  <div style="margin-top:24px; display:flex; flex-direction:column; gap:12px;">
    <a href="tel:+919419186209" class="btn btn--primary" style="justify-content:center;">
      <i class="fas fa-phone-alt"></i> +91 94191 86209
    </a>
    <a href="https://wa.me/919419186209?text=Hi%2C%20I%20need%20spare%20parts%20information" target="_blank"
       class="btn" style="background:#25D366;color:#fff;justify-content:center;">
      <i class="fab fa-whatsapp"></i> WhatsApp Us
    </a>
  </div>
</nav>


<!-- ===================== FLOATING WHATSAPP (desktop) ===================== -->
<a href="https://wa.me/919419186209?text=Hi%2C%20I%20need%20spare%20parts%20information"
   target="_blank" rel="noopener"
   class="float-wa" id="float-whatsapp"
   aria-label="Chat on WhatsApp">
  <i class="fab fa-whatsapp"></i>
</a>

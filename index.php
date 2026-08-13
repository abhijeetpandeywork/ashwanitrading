<?php
$pageTitle   = 'Ashwani Trading Co. — Spare Parts, Repairs & Rentals | Jammu, Kashmir & Ladakh';
$metaDesc    = '60+ years supplying genuine earthmoving & construction machinery spare parts, accessories, workshop repairs and rentals in Jammu, Kashmir & Ladakh. Call now: +91 94191 86209';
$currentPage = 'home';
include 'includes/header.php';
?>

<!-- ============================================================
     HERO — Z-pattern layout
     Left: Headline + CTAs + Trust strip
     Right: SVG machinery illustration
     ============================================================ -->
<main id="main-content">

<section class="hero" aria-label="Ashwani Trading Co. — Spare Parts and Machinery Services">
  <div class="hero__inner">

    <!-- LEFT COLUMN -->
    <div class="hero__left">
      <div class="hero__eyebrow" data-reveal>
        <span class="hero__eyebrow-dot"></span>
        Trusted Since 60+ Years
      </div>

      <h1 class="hero__h1" data-reveal data-reveal-delay="1">
        60+ Years of Trust.<br>
        Powering <em>J&amp;K &amp; Ladakh.</em>
      </h1>

      <p class="hero__sub" data-reveal data-reveal-delay="2">
        Genuine &amp; aftermarket spare parts for JCB, Road Rollers, Drill Rods &amp; all earthmoving machinery — stocked and ready. Workshop repairs. Machinery rentals. One stop, Jammu.
      </p>

      <div class="hero__actions" data-reveal data-reveal-delay="3">
        <a href="tel:+919419186209" class="btn btn--primary" id="hero-call-btn">
          <i class="fas fa-phone-alt"></i> Call Now: +91 94191 86209
        </a>
        <a href="https://wa.me/919419186209?text=Hi%2C%20I%20need%20spare%20parts%20information"
           target="_blank" rel="noopener"
           class="btn btn--secondary" id="hero-whatsapp-btn">
          <i class="fab fa-whatsapp"></i> WhatsApp Us
        </a>
      </div>

      <!-- Trust Stats — most important element, above the fold -->
      <div class="hero__trust" data-reveal data-reveal-delay="4">
        <div class="trust-stat">
          <span class="trust-stat__number">60+</span>
          <span class="trust-stat__label">Years of Trust</span>
        </div>
        <div class="trust-stat">
          <span class="trust-stat__number">3</span>
          <span class="trust-stat__label">Regions Served</span>
        </div>
        <div class="trust-stat">
          <span class="trust-stat__number">4</span>
          <span class="trust-stat__label">Core Services</span>
        </div>
      </div>
    </div><!-- /hero__left -->

    <!-- RIGHT COLUMN — SVG Illustration (no external images, instant load) -->
    <div class="hero__right" aria-hidden="true">
      <svg class="hero__illustration" viewBox="0 0 540 440" fill="none" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="JCB excavator machinery illustration">
        <!-- Ground -->
        <rect x="0" y="360" width="540" height="80" fill="rgba(255,255,255,0.04)" rx="4"/>
        <!-- Excavator body -->
        <rect x="120" y="250" width="220" height="110" rx="12" fill="rgba(255,255,255,0.08)" stroke="rgba(255,255,255,0.15)" stroke-width="1.5"/>
        <!-- Cab -->
        <rect x="260" y="190" width="80" height="70" rx="8" fill="rgba(242,169,0,0.2)" stroke="rgba(242,169,0,0.4)" stroke-width="1.5"/>
        <!-- Cab window -->
        <rect x="272" y="202" width="56" height="38" rx="4" fill="rgba(255,255,255,0.07)" stroke="rgba(255,255,255,0.12)" stroke-width="1"/>
        <!-- Engine hood -->
        <rect x="120" y="220" width="140" height="40" rx="8" fill="rgba(255,255,255,0.06)" stroke="rgba(255,255,255,0.1)" stroke-width="1.5"/>
        <!-- Undercarriage track (left) -->
        <rect x="100" y="340" width="240" height="28" rx="14" fill="rgba(255,255,255,0.1)" stroke="rgba(255,255,255,0.15)" stroke-width="1.5"/>
        <!-- Track rollers -->
        <circle cx="130" cy="354" r="12" fill="rgba(255,255,255,0.07)" stroke="rgba(255,255,255,0.15)" stroke-width="1.5"/>
        <circle cx="180" cy="354" r="12" fill="rgba(255,255,255,0.07)" stroke="rgba(255,255,255,0.15)" stroke-width="1.5"/>
        <circle cx="230" cy="354" r="12" fill="rgba(255,255,255,0.07)" stroke="rgba(255,255,255,0.15)" stroke-width="1.5"/>
        <circle cx="310" cy="354" r="12" fill="rgba(255,255,255,0.07)" stroke="rgba(255,255,255,0.15)" stroke-width="1.5"/>
        <!-- Boom arm -->
        <line x1="340" y1="240" x2="420" y2="170" stroke="rgba(255,255,255,0.3)" stroke-width="14" stroke-linecap="round"/>
        <!-- Stick arm -->
        <line x1="420" y1="170" x2="460" y2="260" stroke="rgba(255,255,255,0.25)" stroke-width="10" stroke-linecap="round"/>
        <!-- Bucket -->
        <path d="M455 255 L480 280 L440 295 L420 268 Z" fill="rgba(242,169,0,0.4)" stroke="rgba(242,169,0,0.6)" stroke-width="1.5"/>
        <!-- Bucket teeth -->
        <line x1="445" y1="292" x2="440" y2="310" stroke="rgba(242,169,0,0.7)" stroke-width="4" stroke-linecap="round"/>
        <line x1="460" y1="290" x2="456" y2="308" stroke="rgba(242,169,0,0.7)" stroke-width="4" stroke-linecap="round"/>
        <line x1="475" y1="283" x2="472" y2="301" stroke="rgba(242,169,0,0.7)" stroke-width="4" stroke-linecap="round"/>
        <!-- Hydraulic cylinder boom -->
        <line x1="350" y1="260" x2="400" y2="200" stroke="rgba(242,169,0,0.25)" stroke-width="5" stroke-linecap="round"/>
        <!-- Gear icon top-left (decorative) -->
        <g transform="translate(40, 60)" opacity="0.12">
          <path d="M30 14l2 5 5-1.5-.6 5.5 5 2-3.5 4.5 3.5 4.5-5 2 .6 5.5-5-1.5-2 5-2-5-5 1.5.6-5.5-5-2 3.5-4.5-3.5-4.5 5-2-.6-5.5 5 1.5z" fill="white"/>
          <circle cx="30" cy="30" r="8" fill="rgba(11,77,44,1)"/>
          <circle cx="30" cy="30" r="4" fill="white" opacity=".5"/>
        </g>
        <!-- Gear icon bottom right (decorative) -->
        <g transform="translate(470, 350)" opacity="0.1">
          <path d="M20 8l1.5 3.5 3.5-1-.4 3.8 3.5 1.5-2.5 3 2.5 3-3.5 1.5.4 3.8-3.5-1-1.5 3.5-1.5-3.5-3.5 1 .4-3.8-3.5-1.5 2.5-3-2.5-3 3.5-1.5-.4-3.8 3.5 1z" fill="white"/>
          <circle cx="20" cy="20" r="5" fill="rgba(11,77,44,1)"/>
        </g>
        <!-- Part label callouts -->
        <g opacity="0.7">
          <rect x="58" y="145" width="90" height="24" rx="12" fill="rgba(242,169,0,0.18)" stroke="rgba(242,169,0,0.4)" stroke-width="1"/>
          <text x="103" y="162" text-anchor="middle" font-family="Inter, sans-serif" font-size="10" fill="rgba(242,169,0,0.9)" font-weight="600">Hydraulics</text>
          <line x1="148" y1="157" x2="200" y2="255" stroke="rgba(242,169,0,0.3)" stroke-width="1" stroke-dasharray="3 3"/>
          <rect x="370" y="100" width="100" height="24" rx="12" fill="rgba(255,255,255,0.07)" stroke="rgba(255,255,255,0.18)" stroke-width="1"/>
          <text x="420" y="117" text-anchor="middle" font-family="Inter, sans-serif" font-size="10" fill="rgba(255,255,255,0.7)" font-weight="600">Boom Arm</text>
          <line x1="420" y1="124" x2="420" y2="170" stroke="rgba(255,255,255,0.2)" stroke-width="1" stroke-dasharray="3 3"/>
          <rect x="430" y="295" width="90" height="24" rx="12" fill="rgba(242,169,0,0.18)" stroke="rgba(242,169,0,0.4)" stroke-width="1"/>
          <text x="475" y="312" text-anchor="middle" font-family="Inter, sans-serif" font-size="10" fill="rgba(242,169,0,0.9)" font-weight="600">Bucket Teeth</text>
        </g>
      </svg>
    </div><!-- /hero__right -->

  </div>
</section>


<!-- ============================================================
     WHAT WE DO — 4 service cards
     ============================================================ -->
<section class="section section--white" id="services-overview">
  <div class="container">

    <div class="section-head" data-reveal>
      <span class="tag">What We Do</span>
      <h2>Four Ways We Keep<br>Your Machines Running</h2>
      <p>From a single bolt to a full machinery rental — if it's earthmoving or construction, we've got it covered across Jammu, Kashmir &amp; Ladakh.</p>
    </div>

    <div class="services-grid">

      <div class="service-card" data-reveal data-reveal-delay="1">
        <div class="service-card__icon">
          <i class="fas fa-cogs" aria-hidden="true"></i>
        </div>
        <h3>Spare Parts</h3>
        <p>Genuine &amp; aftermarket spare parts for JCB, road rollers, drill rods, and all earthmoving machinery. Verified quality, fast availability.</p>
        <a href="/services.php#spare-parts" class="link-enquire">
          View Details <i class="fas fa-arrow-right" aria-hidden="true"></i>
        </a>
      </div>

      <div class="service-card" data-reveal data-reveal-delay="2">
        <div class="service-card__icon">
          <i class="fas fa-toolbox" aria-hidden="true"></i>
        </div>
        <h3>Accessories</h3>
        <p>Machinery attachments, ground engaging tools, safety equipment, and add-on accessories to maximize equipment productivity.</p>
        <a href="/services.php#accessories" class="link-enquire">
          View Details <i class="fas fa-arrow-right" aria-hidden="true"></i>
        </a>
      </div>

      <div class="service-card" data-reveal data-reveal-delay="3">
        <div class="service-card__icon">
          <i class="fas fa-wrench" aria-hidden="true"></i>
        </div>
        <h3>Workshop &amp; Repairs</h3>
        <p>On-site and workshop repair services for earthmoving &amp; construction machinery. Minimize downtime, maximize site productivity.</p>
        <a href="/services.php#workshop" class="link-enquire">
          View Details <i class="fas fa-arrow-right" aria-hidden="true"></i>
        </a>
      </div>

      <div class="service-card" data-reveal data-reveal-delay="4">
        <div class="service-card__icon">
          <i class="fas fa-truck-monster" aria-hidden="true"></i>
        </div>
        <h3>Machinery Rentals</h3>
        <p>Rent earthmoving &amp; construction machinery when you need it. Flexible hire terms for contractors and project owners across the region.</p>
        <a href="/services.php#rentals" class="link-enquire">
          View Details <i class="fas fa-arrow-right" aria-hidden="true"></i>
        </a>
      </div>

    </div>
  </div>
</section>


<!-- ============================================================
     WHY ATC — Deep Green Band (30% color)
     ============================================================ -->
<section class="section section--green" id="why-atc">
  <div class="container">
    <div style="display:grid; grid-template-columns:1fr 1fr; gap:80px; align-items:center;">

      <div data-reveal>
        <span class="tag tag--gold">Why ATC</span>
        <h2 style="margin:14px 0 18px;">Why Contractors &amp; Workshop Owners Choose Us</h2>
        <p style="margin-bottom:36px;">In a region where a delayed part means a stalled site, you need a supplier you can trust. Here's what sets ATC apart:</p>
        <a href="/about.php" class="btn btn--white">Our Full Story</a>
      </div>

      <div class="why-grid" data-reveal data-reveal-delay="1">
        <div class="why-item">
          <div class="why-item__icon"><i class="fas fa-award" aria-hidden="true"></i></div>
          <div>
            <h3>60+ Years of Proven Trust</h3>
            <p>Three generations of experience in earthmoving parts and machinery across Jammu, Kashmir &amp; Ladakh.</p>
          </div>
        </div>
        <div class="why-item">
          <div class="why-item__icon"><i class="fas fa-th-large" aria-hidden="true"></i></div>
          <div>
            <h3>Complete Solutions</h3>
            <p>Parts, accessories, repairs, and rentals under one roof — no need to go to multiple vendors.</p>
          </div>
        </div>
        <div class="why-item">
          <div class="why-item__icon"><i class="fas fa-map-marked-alt" aria-hidden="true"></i></div>
          <div>
            <h3>Regional Reach</h3>
            <p>Serving contractors, governments, and businesses across Jammu, Kashmir, and Ladakh from our Narwal yard.</p>
          </div>
        </div>
        <div class="why-item">
          <div class="why-item__icon"><i class="fas fa-headset" aria-hidden="true"></i></div>
          <div>
            <h3>Customer First</h3>
            <p>Real people, real advice. Call us with a part number, model, or just a description — we'll find what you need.</p>
          </div>
        </div>
      </div>

    </div>
  </div>
</section>


<!-- ============================================================
     POPULAR PART CATEGORIES — teaser tiles
     ============================================================ -->
<section class="section section--tint" id="categories">
  <div class="container">

    <div class="section-head" data-reveal>
      <span class="tag">Parts Catalog</span>
      <h2>Popular Spare Part Categories</h2>
      <p>Browse our most commonly enquired categories. Can't find your part? Call us — we source parts across all brands.</p>
    </div>

    <div class="catalog-grid" style="grid-template-columns:repeat(4,1fr);" data-reveal data-reveal-delay="1">

      <a href="/catalog.php#undercarriage" class="cat-card">
        <div class="cat-card__icon"><i class="fas fa-link" aria-hidden="true"></i></div>
        <h3>Undercarriage Parts</h3>
        <p>Track chains, rollers, idlers, sprockets</p>
      </a>

      <a href="/catalog.php#hydraulics" class="cat-card">
        <div class="cat-card__icon"><i class="fas fa-faucet" aria-hidden="true"></i></div>
        <h3>Hydraulic Components</h3>
        <p>Pumps, cylinders, valves, seal kits</p>
      </a>

      <a href="/catalog.php#ground-engaging" class="cat-card">
        <div class="cat-card__icon"><i class="fas fa-hammer" aria-hidden="true"></i></div>
        <h3>Ground Engaging Tools</h3>
        <p>Bucket teeth, cutting edges, adaptors</p>
      </a>

      <a href="/catalog.php#engine" class="cat-card">
        <div class="cat-card__icon"><i class="fas fa-oil-can" aria-hidden="true"></i></div>
        <h3>Engine &amp; Filtration</h3>
        <p>Filters, gaskets, overhaul kits</p>
      </a>

    </div>

    <div style="text-align:center; margin-top:36px;" data-reveal>
      <a href="/catalog.php" class="btn btn--outline">
        <i class="fas fa-th-large" aria-hidden="true"></i> View Full Catalog
      </a>
    </div>

  </div>
</section>


<!-- ============================================================
     REGIONS WE SERVE
     ============================================================ -->
<section class="section section--white" id="regions">
  <div class="container">

    <div class="section-head" data-reveal>
      <span class="tag">Our Coverage</span>
      <h2>Serving the Entire Union Territory</h2>
      <p>From the plains of Jammu to the valleys of Kashmir and the high altitude of Ladakh — ATC is your local parts partner.</p>
    </div>

    <div class="regions-strip" data-reveal data-reveal-delay="1">
      <div class="region-item">
        <div class="region-item__icon"><i class="fas fa-city" aria-hidden="true"></i></div>
        <h3>Jammu</h3>
        <p>Headquarters in Narwal, Jammu. Walk-in, call, or WhatsApp any time.</p>
      </div>
      <div class="region-item">
        <div class="region-item__icon"><i class="fas fa-mountain" aria-hidden="true"></i></div>
        <h3>Kashmir</h3>
        <p>Supplying contractors and machinery owners across the Kashmir Valley.</p>
      </div>
      <div class="region-item">
        <div class="region-item__icon"><i class="fas fa-snowflake" aria-hidden="true"></i></div>
        <h3>Ladakh</h3>
        <p>Parts and rentals reaching high-altitude construction projects in Ladakh.</p>
      </div>
    </div>

  </div>
</section>


<!-- ============================================================
     FINAL CTA BAND — Loss aversion framing
     ============================================================ -->
<section class="cta-band" id="cta-final">
  <div class="container">
    <span class="tag tag--gold" style="margin-bottom:18px; display:inline-block;" data-reveal>Don't Let Downtime Cost You</span>
    <h2 data-reveal data-reveal-delay="1">Machine downtime stalls your site.<br>Call us. We'll get you the part.</h2>
    <p data-reveal data-reveal-delay="2">Our team is ready to identify your part, confirm availability, and get it to you fast. One call. That's all it takes.</p>
    <a href="tel:+919419186209" class="cta-band__phone" data-reveal data-reveal-delay="2">
      +91 94191 86209
    </a>
    <div class="cta-band__actions" data-reveal data-reveal-delay="3">
      <a href="tel:+919419186209" class="btn btn--primary" id="cta-call-btn">
        <i class="fas fa-phone-alt"></i> Call Now
      </a>
      <a href="https://wa.me/919419186209?text=Hi%2C%20I%20need%20spare%20parts%20information"
         target="_blank" rel="noopener" class="btn btn--secondary" id="cta-whatsapp-btn">
        <i class="fab fa-whatsapp"></i> WhatsApp Us
      </a>
      <a href="/contact.php" class="btn btn--white" id="cta-enquiry-btn">
        <i class="fas fa-envelope"></i> Send Enquiry
      </a>
    </div>
  </div>
</section>

</main>

<?php include 'includes/footer.php'; ?>

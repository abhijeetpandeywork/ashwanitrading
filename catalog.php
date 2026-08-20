<?php
$pageTitle   = 'Spare Parts Catalog â€” Earthmoving & Construction Parts | Ashwani Trading Co.';
$metaDesc    = 'Browse spare part categories for JCB, road rollers, excavators & all earthmoving machinery. Hydraulics, undercarriage, engine, filtration & more. Enquire for price & availability.';
$currentPage = 'catalog';
include 'includes/header.php';
?>

<main id="main-content">

<!-- PAGE HERO -->
<section class="page-hero" style="background: linear-gradient(90deg, rgba(11,77,44,0.95) 0%, rgba(11,77,44,0.4) 100%), url('/assets/img/hero_catalog.webp') center/cover; padding: 140px 0 120px; border-bottom: 5px solid var(--gold);">
  <div class="container page-hero__inner">
    <nav class="breadcrumb" aria-label="Breadcrumb">
      <a href="/index.php">Home</a>
      <span class="breadcrumb__sep" aria-hidden="true">â€º</span>
      <span>Parts Catalog</span>
    </nav>
    <span class="tag tag--gold" style="box-shadow: 0 4px 15px rgba(242,169,0,0.3);">Parts Catalog</span>
    <h1 style="font-size: clamp(40px, 6vw, 72px); text-shadow: 0 4px 20px rgba(0,0,0,0.8); font-weight: 800; letter-spacing: -1px;">Spare Parts for Every<br><span style="color:var(--gold);">Earthmoving Machine</span></h1>
    <p style="font-size: 20px; line-height: 1.6; text-shadow: 0 2px 10px rgba(0,0,0,0.7); max-width: 760px;">Browse our enquiry categories. We stock genuine and aftermarket parts for all major brands â€” JCB, road rollers, excavators, compactors, drill rigs, and more. <strong style="color:var(--gold);">This is an enquiry catalog, not a priced webshop.</strong> Call or enquire for availability and pricing.</p>
  </div>
</section>





<!-- CATALOG GRID -->
<section class="section section--white" id="catalog-main">
  <div class="container">

    <div class="section-head section-head--svc" data-reveal>
      <span class="tag">Enquiry Categories</span>
      <h2>Browse by Category</h2>
      <p>Select a category to enquire. Our team will confirm availability, pricing, and lead times within hours.</p>
    </div>

    <div class="catalog-grid" data-reveal data-reveal-delay="1">

      <a href="/contact.php?category=undercarriage" class="cat-card" id="undercarriage">
        <div class="cat-card__image"><img src="/assets/img/parts_undercarriage.webp" alt="Undercarriage Parts" loading="lazy"></div>
        <div class="cat-card__body">
          <h3>Undercarriage Parts</h3>
          <p>Track chains, rollers, top rollers, idlers, sprockets, track shoes, track bolts</p>
        </div>
      </a>

      <a href="/contact.php?category=hydraulics" class="cat-card" id="hydraulics">
        <div class="cat-card__image"><img src="/assets/img/parts_pump.webp" alt="Hydraulic Components" loading="lazy"></div>
        <div class="cat-card__body">
          <h3>Hydraulic Components</h3>
          <p>Pumps, cylinders, motors, control valves, hoses, fittings, O-ring &amp; seal kits</p>
        </div>
      </a>

      <a href="/contact.php?category=ground-engaging" class="cat-card" id="ground-engaging">
        <div class="cat-card__image"><img src="/assets/img/jcb_accessories.webp" alt="Ground Engaging Tools" loading="lazy"></div>
        <div class="cat-card__body">
          <h3>Ground Engaging Tools</h3>
          <p>Bucket teeth, adapters, cutting edges, end bits, shrouds, blades, ripper shanks</p>
        </div>
      </a>

      <a href="/contact.php?category=engine" class="cat-card" id="engine">
        <div class="cat-card__image"><img src="/assets/img/parts_engine.webp" alt="Engine & Filtration" loading="lazy"></div>
        <div class="cat-card__body">
          <h3>Engine &amp; Filtration</h3>
          <p>Pistons, liners, bearings, gaskets, oil/fuel/air filters, overhaul kits</p>
        </div>
      </a>

      <a href="/contact.php?category=transmission" class="cat-card" id="transmission">
        <div class="cat-card__image"><img src="/assets/img/parts_transmission.webp" alt="Transmission & Drivetrain" loading="lazy"></div>
        <div class="cat-card__body">
          <h3>Transmission &amp; Drivetrain</h3>
          <p>Gearboxes, torque converters, axles, differentials, clutch plates</p>
        </div>
      </a>

      <a href="/contact.php?category=electrical" class="cat-card" id="electrical">
        <div class="cat-card__image"><img src="/assets/img/parts_jcb.webp" alt="Electrical Components" loading="lazy"></div>
        <div class="cat-card__body">
          <h3>Electrical Components</h3>
          <p>Starters, alternators, switches, relays, sensors, wiring harnesses</p>
        </div>
      </a>

      <a href="/contact.php?category=attachments" class="cat-card" id="attachments">
        <div class="cat-card__image"><img src="/assets/img/jcb_spare_parts.webp" alt="Attachments & Buckets" loading="lazy"></div>
        <div class="cat-card__body">
          <h3>Attachments &amp; Buckets</h3>
          <p>Rock, mud, and general-purpose buckets, quick hitches, coupler systems</p>
        </div>
      </a>

      <a href="/contact.php?category=body-structural" class="cat-card" id="body-structural">
        <div class="cat-card__image"><img src="/assets/img/parts_pins.webp" alt="Body & Structural Parts" loading="lazy"></div>
        <div class="cat-card__body">
          <h3>Body &amp; Structural Parts</h3>
          <p>Boom arms, dipper sticks, machine guards, panels, ROPS/FOPS structures</p>
        </div>
      </a>

      <a href="/contact.php?category=cooling" class="cat-card" id="cooling">
        <div class="cat-card__image"><img src="/assets/img/parts_filtration.webp" alt="Cooling System" loading="lazy"></div>
        <div class="cat-card__body">
          <h3>Cooling System</h3>
          <p>Radiators, water pumps, fan belts, thermostats, coolant hoses</p>
        </div>
      </a>

      <a href="/contact.php?category=drill-rods" class="cat-card" id="drill-rods">
        <div class="cat-card__image"><img src="/assets/img/hero_services.webp" alt="Drill Rods & Bits" loading="lazy"></div>
        <div class="cat-card__body">
          <h3>Drill Rods &amp; Bits</h3>
          <p>High-strength drill rods, shank adapters, couplings, rock drill bits</p>
        </div>
      </a>

      <a href="/contact.php?category=tyres-wheels" class="cat-card" id="tyres-wheels">
        <div class="cat-card__image"><img src="/assets/img/jcb_rentals.webp" alt="Tyres & Wheels" loading="lazy"></div>
        <div class="cat-card__body">
          <h3>Tyres &amp; Wheels</h3>
          <p>OTR tyres, wheel rims, valve stems for loaders, dozers, and compactors</p>
        </div>
      </a>

      <a href="/contact.php?category=other" class="cat-card" id="other-parts">
        <div class="cat-card__image"><img src="/assets/img/jcb_workshop.webp" alt="Other Parts" loading="lazy"></div>
        <div class="cat-card__body">
          <h3>Other / Not Listed</h3>
          <p>Can't find your category? Call us with your machine model and part description.</p>
        </div>
      </a>

    </div><!-- /catalog-grid -->

  </div>
</section>


<!-- HOW TO ENQUIRE -->
<section class="section section--tint">
  <div class="container">
    <div class="section-head" data-reveal>
      <span class="tag">How It Works</span>
      <h2>How to Get Your Part</h2>
      <p>No online cart, no complicated forms. We keep it simple â€” just like buying a part in person, but faster.</p>
    </div>
    <div class="services-grid services-grid--3col" data-reveal data-reveal-delay="1">
      <div class="service-card" style="text-align:center;">
        <div class="service-card__icon" style="margin:0 auto 16px;">
          <i class="fas fa-phone-alt"></i>
        </div>
        <h3 style="font-size:28px; color:var(--gold-dark); font-family:var(--f-head); margin-bottom:8px;">01</h3>
        <h3>Call or WhatsApp</h3>
        <p>Tell us your machine model, part name, or part number. Our team will identify it instantly.</p>
      </div>
      <div class="service-card" style="text-align:center;">
        <div class="service-card__icon" style="margin:0 auto 16px;">
          <i class="fas fa-check-circle"></i>
        </div>
        <h3 style="font-size:28px; color:var(--gold-dark); font-family:var(--f-head); margin-bottom:8px;">02</h3>
        <h3>Confirm Availability</h3>
        <p>We check our live stock and give you pricing and lead time â€” usually within hours.</p>
      </div>
      <div class="service-card" style="text-align:center;">
        <div class="service-card__icon" style="margin:0 auto 16px;">
          <i class="fas fa-truck"></i>
        </div>
        <h3 style="font-size:28px; color:var(--gold-dark); font-family:var(--f-head); margin-bottom:8px;">03</h3>
        <h3>Pick Up or Dispatch</h3>
        <p>Collect from our Narwal yard or we arrange dispatch to your location across J&amp;K &amp; Ladakh.</p>
      </div>
    </div>
  </div>
</section>


<!-- FINAL CTA -->
<section class="cta-band">
  <div class="container">
    <h2 data-reveal>Every minute of downtime costs money.</h2>
    <p data-reveal data-reveal-delay="1">Don't wait. Call us right now with your part requirement and we'll get back to you fast.</p>
    <a href="tel:+919419186209" class="cta-band__phone" data-reveal data-reveal-delay="2">+91 94191 86209</a>
    <div class="cta-band__actions" data-reveal data-reveal-delay="3">
      <a href="tel:+919419186209" class="btn btn--primary"><i class="fas fa-phone-alt"></i> Call Now</a>
      <a href="https://wa.me/919419186209" target="_blank" rel="noopener" class="btn btn--secondary"><i class="fab fa-whatsapp"></i> WhatsApp</a>
    </div>
  </div>
</section>

</main>
<?php include 'includes/footer.php'; ?>



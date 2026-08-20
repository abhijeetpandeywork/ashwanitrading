<?php /* v3-logo-fix */ ?>
<?php
include "includes/data.php";
$pageTitle   = 'Spare Parts Catalog — Earthmoving & Construction Parts | Ashwani Trading Co.';
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
      <span class="breadcrumb__sep" aria-hidden="true">›</span>
      <span>Parts Catalog</span>
    </nav>
    <span class="tag tag--gold" style="box-shadow: 0 4px 15px rgba(242,169,0,0.3);">Parts Catalog</span>
    <h1 style="font-size: clamp(40px, 6vw, 72px); text-shadow: 0 4px 20px rgba(0,0,0,0.8); font-weight: 800; letter-spacing: -1px;">Spare Parts for Every<br><span style="color:var(--gold);">Earthmoving Machine</span></h1>
    <p style="font-size: 20px; line-height: 1.6; text-shadow: 0 2px 10px rgba(0,0,0,0.7); max-width: 760px;">Browse our enquiry categories. We stock genuine and aftermarket parts for all major brands — JCB, road rollers, excavators, compactors, drill rigs, and more. <strong style="color:var(--gold);">This is an enquiry catalog, not a priced webshop.</strong> Call or enquire for availability and pricing.</p>
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

      <button class="cat-card btn-modal-trigger" data-service="All kind of engaging tools undercarriage" data-category="undercarriage" id="undercarriage" style="border:none;width:100%;cursor:pointer;padding:0;font-family:inherit;text-align:center;">
        <div class="cat-card__image"><img src="/assets/img/new_undercarriage.jpg" alt="Undercarriage Parts" loading="lazy"></div>
        <div class="cat-card__body">
          <h3>All kind of engaging tools Undercarriage Parts</h3>
          <p>Track chains, rollers, top rollers, idlers, sprockets, track shoes, track bolts</p>
        
          <span class="btn btn-primary" style="margin-top: 15px; display: inline-block; font-size: 14px; padding: 8px 20px;">Enquiry Now</span>
        </div>
      </button>

      <button class="cat-card btn-modal-trigger" data-service="All kind of engaging tools hydraulics" data-category="hydraulics" id="hydraulics" style="border:none;width:100%;cursor:pointer;padding:0;font-family:inherit;text-align:center;">
        <div class="cat-card__image"><img src="/assets/img/new_hydraulics.jpg" alt="Hydraulic Components" loading="lazy"></div>
        <div class="cat-card__body">
          <h3>All kind of engaging tools Hydraulic Components</h3>
          <p>Pumps, cylinders, motors, control valves, hoses, fittings, O-ring &amp; seal kits</p>
        
          <span class="btn btn-primary" style="margin-top: 15px; display: inline-block; font-size: 14px; padding: 8px 20px;">Enquiry Now</span>
        </div>
      </button>

      <button class="cat-card btn-modal-trigger" data-service="All kind of engaging tools ground-engaging" data-category="ground-engaging" id="ground-engaging" style="border:none;width:100%;cursor:pointer;padding:0;font-family:inherit;text-align:center;">
        <div class="cat-card__image"><img src="/assets/img/new_ground_engaging.jpg" alt="Ground Engaging Tools" loading="lazy"></div>
        <div class="cat-card__body">
          <h3>All kind of engaging tools Ground Engaging Tools</h3>
          <p>Bucket teeth, adapters, cutting edges, end bits, shrouds, blades, ripper shanks. Includes side cutter set &amp; bucket tooth set.</p>
        
          <span class="btn btn-primary" style="margin-top: 15px; display: inline-block; font-size: 14px; padding: 8px 20px;">Enquiry Now</span>
        </div>
      </button>

      <button class="cat-card btn-modal-trigger" data-service="All kind of engaging tools engine" data-category="engine" id="engine" style="border:none;width:100%;cursor:pointer;padding:0;font-family:inherit;text-align:center;">
        <div class="cat-card__image"><img src="/assets/img/parts_engine.webp" alt="Engine & Filtration" loading="lazy"></div>
        <div class="cat-card__body">
          <h3>All kind of engaging tools Engine &amp; Filtration</h3>
          <p>Pistons, liners, bearings, gaskets, oil/fuel/air filters, overhaul kits</p>
        
          <span class="btn btn-primary" style="margin-top: 15px; display: inline-block; font-size: 14px; padding: 8px 20px;">Enquiry Now</span>
        </div>
      </button>

      <button class="cat-card btn-modal-trigger" data-service="All kind of engaging tools transmission" data-category="transmission" id="transmission" style="border:none;width:100%;cursor:pointer;padding:0;font-family:inherit;text-align:center;">
        <div class="cat-card__image"><img src="/assets/img/parts_transmission.webp" alt="Transmission & Drivetrain" loading="lazy"></div>
        <div class="cat-card__body">
          <h3>All kind of engaging tools Transmission &amp; Drivetrain</h3>
          <p>Gearboxes, torque converters, axles, differentials, clutch plates</p>
        
          <span class="btn btn-primary" style="margin-top: 15px; display: inline-block; font-size: 14px; padding: 8px 20px;">Enquiry Now</span>
        </div>
      </button>

      <button class="cat-card btn-modal-trigger" data-service="All kind of engaging tools electrical" data-category="electrical" id="electrical" style="border:none;width:100%;cursor:pointer;padding:0;font-family:inherit;text-align:center;">
        <div class="cat-card__image"><img src="/assets/img/parts_jcb.webp" alt="Electrical Components" loading="lazy"></div>
        <div class="cat-card__body">
          <h3>All kind of engaging tools Electrical Components</h3>
          <p>Starters, alternators, switches, relays, sensors, wiring harnesses</p>
        
          <span class="btn btn-primary" style="margin-top: 15px; display: inline-block; font-size: 14px; padding: 8px 20px;">Enquiry Now</span>
        </div>
      </button>

      <button class="cat-card btn-modal-trigger" data-service="All kind of engaging tools attachments" data-category="attachments" id="attachments" style="border:none;width:100%;cursor:pointer;padding:0;font-family:inherit;text-align:center;">
        <div class="cat-card__image"><img src="/assets/img/jcb_spare_parts.webp" alt="Attachments & Buckets" loading="lazy"></div>
        <div class="cat-card__body">
          <h3>All kind of engaging tools Attachments &amp; Buckets</h3>
          <p>Comprehensive range of attachments and buckets in all sizes, including heavy-duty options with hard-facing for extreme durability.</p>
        
          <span class="btn btn-primary" style="margin-top: 15px; display: inline-block; font-size: 14px; padding: 8px 20px;">Enquiry Now</span>
        </div>
      </button>

      <button class="cat-card btn-modal-trigger" data-service="All kind of engaging tools body-structural" data-category="body-structural" id="body-structural" style="border:none;width:100%;cursor:pointer;padding:0;font-family:inherit;text-align:center;">
        <div class="cat-card__image"><img src="/assets/img/parts_pins.webp" alt="Body & Structural Parts" loading="lazy"></div>
        <div class="cat-card__body">
          <h3>All kind of engaging tools Body &amp; Structural Parts</h3>
          <p>Boom arms, dipper sticks, machine guards, panels, ROPS/FOPS structures</p>
        
          <span class="btn btn-primary" style="margin-top: 15px; display: inline-block; font-size: 14px; padding: 8px 20px;">Enquiry Now</span>
        </div>
      </button>

      <button class="cat-card btn-modal-trigger" data-service="All kind of engaging tools cooling" data-category="cooling" id="cooling" style="border:none;width:100%;cursor:pointer;padding:0;font-family:inherit;text-align:center;">
        <div class="cat-card__image"><img src="/assets/img/parts_filtration.webp" alt="Cooling System" loading="lazy"></div>
        <div class="cat-card__body">
          <h3>All kind of engaging tools Cooling System</h3>
          <p>Radiators, water pumps, fan belts, thermostats, coolant hoses</p>
        
          <span class="btn btn-primary" style="margin-top: 15px; display: inline-block; font-size: 14px; padding: 8px 20px;">Enquiry Now</span>
        </div>
      </button>

      <button class="cat-card btn-modal-trigger" data-service="All kind of engaging tools drill-rods" data-category="drill-rods" id="drill-rods" style="border:none;width:100%;cursor:pointer;padding:0;font-family:inherit;text-align:center;">
        <div class="cat-card__image"><img src="/assets/img/hero_services.webp" alt="Drill Rods & Bits" loading="lazy"></div>
        <div class="cat-card__body">
          <h3>All kind of engaging tools Drill Rods &amp; Bits</h3>
          <p>High-strength drill rods, shank adapters, couplings, rock drill bits</p>
        
          <span class="btn btn-primary" style="margin-top: 15px; display: inline-block; font-size: 14px; padding: 8px 20px;">Enquiry Now</span>
        </div>
      </button>

      <button class="cat-card btn-modal-trigger" data-service="All kind of engaging tools tyres-wheels" data-category="tyres-wheels" id="tyres-wheels" style="border:none;width:100%;cursor:pointer;padding:0;font-family:inherit;text-align:center;">
        <div class="cat-card__image"><img src="/assets/img/jcb_rentals.webp" alt="Tyres & Wheels" loading="lazy"></div>
        <div class="cat-card__body">
          <h3>All kind of engaging tools Tyres &amp; Wheels</h3>
          <p>OTR tyres, wheel rims, valve stems for loaders, dozers, and compactors</p>
        
          <span class="btn btn-primary" style="margin-top: 15px; display: inline-block; font-size: 14px; padding: 8px 20px;">Enquiry Now</span>
        </div>
      </button>

      <button class="cat-card btn-modal-trigger" data-service="All kind of engaging tools other-parts" data-category="other" id="other-parts" style="border:none;width:100%;cursor:pointer;padding:0;font-family:inherit;text-align:center;">
        <div class="cat-card__image"><img src="/assets/img/jcb_workshop.webp" alt="Other Parts" loading="lazy"></div>
        <div class="cat-card__body">
          <h3>All kind of engaging tools Other / Not Listed</h3>
          <p>Can't find your category? Call us with your machine model and part description.</p>
        
          <span class="btn btn-primary" style="margin-top: 15px; display: inline-block; font-size: 14px; padding: 8px 20px;">Enquiry Now</span>
        </div>
      </button>

    </div><!-- /catalog-grid -->

  </div>
</section>



<!-- ============================================================
     LUBRICANTS, OILS & FLUIDS
     ============================================================ -->
<section class="section section--white" id="lubricants" style="padding-top:0;">
  <div class="container">
    <div class="section-head section-head--svc" data-reveal>
      <span class="tag"><i class="fas fa-oil-can"></i> Service 02</span>
      <h2>Lubricants, Oils & Fluids</h2>
      <p>Quality lubrication is the most cost-effective way to extend machine life. Full range of industrial-grade oils, greases, coolants and lubrication equipment —  with professional specification advice.</p>
    </div>
    <div class="services-grid" style="margin-top:40px;">
<?php
subHead("Oils &amp; Fluids","tint");
$d=2;
foreach(["Engine Oils","Hydraulic Oils","Gear Oils","Transmission Oils","Compressor Oils",
  "Rock Drill Oils","Greases - EP Greases - Lithium Greases","Coolants","Antifreeze","Brake Fluid"] as $item){ card($item,"Lubricants, Oils & Fluids","Enquire Now",$d++,$imgs,$subs); }
subHead("Lubrication Equipment","toolbox");
foreach(["Grease Guns","Grease Pumps","Oil Pumps","Oil Dispensers","Grease Hoses",
  "Grease Couplers","Grease Nipples","Grease Adopters","Other accessories"] as $item){ card($item,"Lubricants, Oils & Fluids","Enquire Now",$d++,$imgs,$subs); }
?>
    </div>
  </div>
</section>


<!-- HOW TO ENQUIRE -->
<section class="section section--tint">
  <div class="container">
    <div class="section-head" data-reveal>
      <span class="tag">How It Works</span>
      <h2>How to Get Your Part</h2>
      <p>No online cart, no complicated forms. We keep it simple — just like buying a part in person, but faster.</p>
    </div>
    <div class="services-grid services-grid--3col" data-reveal data-reveal-delay="1">
      <div class="service-card" style="text-align:center;">
        <div class="service-card__icon" style="margin:0 auto 16px;">
          <i class="fas fa-phone-alt fa-flip-horizontal"></i>
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
        <p>We check our live stock and give you pricing and lead time — usually within hours.</p>
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
      <a href="tel:+919419186209" class="btn btn--primary"><i class="fas fa-phone-alt fa-flip-horizontal"></i> Call Now</a>
      <a href="https://wa.me/919419186209" target="_blank" rel="noopener" class="btn btn--secondary"><i class="fab fa-whatsapp"></i> WhatsApp</a>
    </div>
  </div>
</section>


<div class="lead-modal-overlay" id="leadModal">
  <div class="lead-modal">
    <button class="lead-modal__close" id="closeModal" aria-label="Close">&times;</button>
    <div class="lead-modal__header">
      <span class="tag tag--gold" id="modalCategory" style="margin-bottom:12px;">Category</span>
      <h3 id="modalTitle">Enquire</h3>
      <p>Fill in the form and our team will contact you shortly.</p>
    </div>
    <form action="process_lead.php" method="POST" class="lead-modal__form">
      <input type="hidden" name="service_category" id="inputCategory" value="">
      <input type="hidden" name="specific_item" id="inputItem" value="">
      <div class="form-group"><label>Your Name *</label><input type="text" name="name" required placeholder="Enter your full name"></div>
      <div class="form-group"><label>Phone Number *</label><input type="tel" name="phone" required placeholder="+91 XXXXX XXXXX"></div>
      <div class="form-group"><label>Additional Details</label><textarea name="message" rows="3" placeholder="Machine model, part number or specific requirement..."></textarea></div>
      <div class="form-group checkbox-group" style="display: flex; align-items: flex-start; gap: 10px; margin-bottom: 24px;">
        <input type="checkbox" id="consent_modal" name="consent" required style="margin-top: 4px; width: 18px; height: 18px; flex-shrink: 0; cursor: pointer;">
        <label for="consent_modal" style="font-size: 13px; color: var(--gray-600); line-height: 1.5; font-weight: 400; cursor: pointer;">I hereby consent to being contacted by Ashwani Trading Co. via phone calls, WhatsApp, or email regarding my requirement and related products or services. I acknowledge and agree to the applicable communication terms and conditions.</label>
      </div>
      <button type="submit" class="btn btn--primary" style="width:100%;margin-top:10px;display:flex;justify-content:center;"><i class="fas fa-paper-plane" style="margin-right:8px;"></i> Submit Enquiry</button>
    </form>
  </div>
</div>
<script>
document.addEventListener('DOMContentLoaded',()=>{
  const ov=document.getElementById('leadModal'),cl=document.getElementById('closeModal');
  const trg=document.querySelectorAll('.btn-modal-trigger');
  const cEl=document.getElementById('modalCategory'),tEl=document.getElementById('modalTitle');
  const cIn=document.getElementById('inputCategory'),iIn=document.getElementById('inputItem');
  function o(cat,item){cEl.textContent=cat;tEl.textContent="Enquire for " + item;cIn.value=cat;iIn.value=item;ov.classList.add('active');document.body.style.overflow='hidden';}
  function c(){ov.classList.remove('active');document.body.style.overflow='';}
  trg.forEach(b=>b.addEventListener('click',e=>{e.preventDefault();o(b.dataset.category,b.dataset.service);}));
  cl.addEventListener('click',c);
  ov.addEventListener('click',e=>{if(e.target===ov)c();});
});
</script>

</main>
<?php include 'includes/footer.php'; ?>




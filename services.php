<?php
$pageTitle   = 'Services — Spare Parts, Repairs, Accessories & Rentals | Ashwani Trading Co.';
$metaDesc    = 'ATC offers earthmoving spare parts, machinery accessories, workshop & repair services, and equipment rentals across Jammu, Kashmir & Ladakh. Call +91 94191 86209.';
$currentPage = 'services';
include 'includes/header.php';
?>

<main id="main-content">

<!-- PAGE HERO -->
<section class="page-hero" style="background: linear-gradient(90deg, rgba(11,77,44,0.95) 0%, rgba(11,77,44,0.2) 100%), url('/assets/img/hero_services.jpg') center/cover; padding: 140px 0 120px; color: #fff; text-align: left; border-bottom: 5px solid var(--gold);">
  <div class="container page-hero__inner" style="max-width: 1200px; margin: 0 auto; display: flex; flex-direction: column; align-items: flex-start;">
    <span class="tag tag--gold" style="margin-bottom: 24px; box-shadow: 0 4px 15px rgba(242,169,0,0.3);">Comprehensive Solutions</span>
    <h1 style="font-size: clamp(40px, 6vw, 72px); margin-bottom: 24px; color: #fff; line-height: 1.05; text-shadow: 0 4px 20px rgba(0,0,0,0.8); font-weight: 800; letter-spacing: -1px;">Heavy Machinery<br><span style="color:var(--gold);">Parts &amp; Services</span></h1>
    <p style="font-size: 22px; line-height: 1.5; opacity: 0.95; text-shadow: 0 2px 10px rgba(0,0,0,0.8); max-width: 600px; font-weight: 500;">Genuine spares, heavy attachments, expert workshop repairs, and equipment rentals in Jammu, Kashmir &amp; Ladakh.</p>
  </div>
</section>

<!-- SERVICES GRIDS -->
<section class="section section--white" id="services-detail" style="padding-top: 60px;">
  <div class="container">

    <!-- SERVICE 1: Spare Parts -->
    <div class="svc-section" id="spare-parts" style="margin-bottom: 80px;">
      <div class="section-head" style="text-align:left; max-width:100%; display:flex; flex-direction:column; align-items:flex-start;" data-reveal>
        <span class="tag"><i class="fas fa-cogs"></i> Service 01</span>
        <h2>Spare Parts for Earthmoving &amp; Construction Machinery</h2>
        <p style="max-width:800px; color:var(--gray-500); margin: 0;">We stock genuine OEM and quality-checked aftermarket spare parts for a wide range of earthmoving and construction equipment brands. From hydraulic pumps to bucket teeth, if it's a part for earthmoving machinery, we likely have it — or can source it fast.</p>
      </div>

      <div class="services-grid" style="margin-top:40px;" data-reveal data-reveal-delay="1">
        <?php
        $parts = [
          ['JCB & Excavator Parts', 'Genuine parts for all major earthmoving machinery.', '/assets/img/parts_jcb.jpg'],
          ['Hydraulic Pumps', 'High-pressure pumps, motors, and hydraulic cylinders.', '/assets/img/parts_pump.jpg'],
          ['Undercarriage Parts', 'Track chains, rollers, idlers, and sprockets.', '/assets/img/parts_undercarriage.jpg'],
          ['Engine Parts', 'Pistons, liners, bearings, and complete overhaul kits.', '/assets/img/parts_engine.jpg'],
          ['Filtration Systems', 'Premium oil, fuel, air, and hydraulic filters.', '/assets/img/parts_filtration.jpg'],
          ['Transmission Units', 'Gears, shafts, and complete transmission units.', '/assets/img/parts_transmission.jpg'],
          ['Pins & Seals', 'High-wear pins, bushes, and O-ring seal kits.', '/assets/img/parts_pins.jpg'],
          ['Electrical Parts', 'Starters, alternators, sensors, and wiring harnesses.', '/assets/img/parts_transmission.jpg'],
          ['Excavator Tracks', 'Durable rubber and steel tracks for all terrains.', '/assets/img/parts_undercarriage.jpg'],
          ['Engine Belts', 'High-tension drive belts for cooling systems.', '/assets/img/parts_engine.jpg'],
          ['Hydraulic Hoses', 'High-pressure flexible hoses and fittings.', '/assets/img/parts_pump.jpg'],
          ['Cabin Accessories', 'Shatter-proof glass, mirrors, and operator seats.', '/assets/img/parts_jcb.jpg']
        ];
        $delay = 1;
        foreach($parts as $part): ?>
        <button class="service-card btn-modal-trigger" data-service="<?php echo $part[0]; ?>" data-category="Spare Parts" style="text-align:center; border:none; width:100%; cursor:pointer; padding:0;" data-reveal data-reveal-delay="<?php echo $delay++; ?>">
          <div class="service-card__image" style="height:160px;">
            <img src="<?php echo $part[2]; ?>" alt="<?php echo $part[0]; ?>">
          </div>
          <div class="service-card__body" style="padding: 24px;">
            <h3 style="font-size:17px; margin-bottom:8px;"><?php echo $part[0]; ?></h3>
            <p style="font-size:14px; margin-bottom:20px; line-height:1.5;"><?php echo $part[1]; ?></p>
            <span class="link-enquire" style="font-size:14px; font-weight:700;">Enquire Now <i class="fas fa-arrow-right"></i></span>
          </div>
        </button>
        <?php endforeach; ?>
      </div>
    </div>

    <!-- SERVICE 2: Accessories -->
    <div class="svc-section" id="accessories" style="margin-bottom: 80px; padding-top:40px; border-top:1px solid rgba(11,77,44,0.1);">
      <div class="section-head" style="text-align:left; max-width:100%; display:flex; flex-direction:column; align-items:flex-start;" data-reveal>
        <span class="tag"><i class="fas fa-toolbox"></i> Service 02</span>
        <h2>Machinery Accessories &amp; Attachments</h2>
        <p style="max-width:800px; color:var(--gray-500); margin: 0;">Maximize the productivity and versatility of your earthmoving equipment with the right accessories. We supply attachments, ground engaging tools, and safety add-ons that keep your machinery working harder.</p>
      </div>

      <div class="services-grid" style="margin-top:40px;" data-reveal data-reveal-delay="1">
        <?php
        $accessories = [
          ['Bucket Attachments', 'Rock, mud, ditching, and general purpose buckets.', '/assets/img/parts_jcb.jpg'],
          ['Ground Engaging Tools', 'Adapters, teeth, cutting edges, and end bits.', '/assets/img/parts_undercarriage.jpg'],
          ['Ripper Shanks', 'Heavy-duty shanks and grading blades.', '/assets/img/parts_transmission.jpg'],
          ['Quick Hitch Systems', 'Fast and secure attachment coupler systems.', '/assets/img/parts_pump.jpg'],
          ['Operator Safety', 'ROPS, FOPS, and cab safety bars.', '/assets/img/parts_pins.jpg'],
          ['Lighting Accessories', 'High-intensity LED work lights and beacons.', '/assets/img/parts_filtration.jpg'],
          ['Protection Guards', 'Heavy-duty metal guards for vulnerable components.', '/assets/img/parts_engine.jpg'],
          ['Rock Breakers', 'Hydraulic breakers for solid rock excavation.', '/assets/img/parts_pump.jpg'],
          ['Auger Attachments', 'Drilling attachments for post holes and foundations.', '/assets/img/parts_transmission.jpg'],
          ['Compaction Wheels', 'Trench compactors for solid backfill.', '/assets/img/parts_undercarriage.jpg'],
          ['Heavy Duty Grapples', 'Timber and scrap handling grapples.', '/assets/img/parts_jcb.jpg'],
          ['Pallet Forks', 'Transform your loader into a material handling unit.', '/assets/img/parts_pins.jpg']
        ];
        $delay = 1;
        foreach($accessories as $acc): ?>
        <button class="service-card btn-modal-trigger" data-service="<?php echo $acc[0]; ?>" data-category="Accessories" style="text-align:center; border:none; width:100%; cursor:pointer; padding:0;" data-reveal data-reveal-delay="<?php echo $delay++; ?>">
          <div class="service-card__image" style="height:160px;">
            <img src="<?php echo $acc[2]; ?>" alt="<?php echo $acc[0]; ?>">
          </div>
          <div class="service-card__body" style="padding: 24px;">
            <h3 style="font-size:17px; margin-bottom:8px;"><?php echo $acc[0]; ?></h3>
            <p style="font-size:14px; margin-bottom:20px; line-height:1.5;"><?php echo $acc[1]; ?></p>
            <span class="link-enquire" style="font-size:14px; font-weight:700;">Enquire Now <i class="fas fa-arrow-right"></i></span>
          </div>
        </button>
        <?php endforeach; ?>
      </div>
    </div>

    <!-- SERVICE 3: Workshop -->
    <div class="svc-section" id="workshop" style="margin-bottom: 80px; padding-top:40px; border-top:1px solid rgba(11,77,44,0.1);">
      <div class="section-head" style="text-align:left; max-width:100%; display:flex; flex-direction:column; align-items:flex-start;" data-reveal>
        <span class="tag"><i class="fas fa-wrench"></i> Service 03</span>
        <h2>Workshop &amp; Repair Services</h2>
        <p style="max-width:800px; color:var(--gray-500); margin: 0;">A stalled machine is lost revenue. Our workshop team provides fast, expert repair and maintenance services for earthmoving and construction equipment — whether at our Jammu yard or on-site.</p>
      </div>

      <div class="services-grid" style="margin-top:40px;" data-reveal data-reveal-delay="1">
        <?php
        $repairs = [
          ['Hydraulic Repairs', 'Diagnosis and overhaul of complex hydraulics.', '/assets/img/parts_pump.jpg'],
          ['Engine Rebuilds', 'Complete engine strip-downs and rebuilds.', '/assets/img/parts_engine.jpg'],
          ['Undercarriage Replacements', 'Track chain swapping and roller replacements.', '/assets/img/parts_undercarriage.jpg'],
          ['Transmission Service', 'Fixing slipping gears and drivetrain faults.', '/assets/img/parts_transmission.jpg'],
          ['Electrical Diagnosis', 'Resolving complex wiring and sensor issues.', '/assets/img/parts_pins.jpg'],
          ['Preventive Maintenance', 'Scheduled servicing to prevent breakdowns.', '/assets/img/parts_filtration.jpg'],
          ['Welding & Fabrication', 'Custom metalwork and structural crack repairs.', '/assets/img/parts_jcb.jpg'],
          ['On-site Breakdown', 'Emergency dispatch to your project location.', '/assets/img/hero_services.jpg'],
          ['Oil & Fluid Analysis', 'Advanced diagnostics for engine and hydraulic fluids.', '/assets/img/parts_filtration.jpg'],
          ['Fuel System Calibration', 'Injector cleaning and fuel pump calibration.', '/assets/img/parts_engine.jpg'],
          ['Track Tensioning', 'Adjusting undercarriage tracks for optimal performance.', '/assets/img/parts_undercarriage.jpg'],
          ['Bucket Re-lining', 'Weld-on steel plating to extend bucket lifespan.', '/assets/img/parts_transmission.jpg']
        ];
        $delay = 1;
        foreach($repairs as $rep): ?>
        <button class="service-card btn-modal-trigger" data-service="<?php echo $rep[0]; ?>" data-category="Workshop & Repairs" style="text-align:center; border:none; width:100%; cursor:pointer; padding:0;" data-reveal data-reveal-delay="<?php echo $delay++; ?>">
          <div class="service-card__image" style="height:160px;">
            <img src="<?php echo $rep[2]; ?>" alt="<?php echo $rep[0]; ?>">
          </div>
          <div class="service-card__body" style="padding: 24px;">
            <h3 style="font-size:17px; margin-bottom:8px;"><?php echo $rep[0]; ?></h3>
            <p style="font-size:14px; margin-bottom:20px; line-height:1.5;"><?php echo $rep[1]; ?></p>
            <span class="link-enquire" style="font-size:14px; font-weight:700;">Book Service <i class="fas fa-arrow-right"></i></span>
          </div>
        </button>
        <?php endforeach; ?>
      </div>
    </div>

    <!-- SERVICE 4: Rentals -->
    <div class="svc-section" id="rentals" style="margin-bottom: 40px; padding-top:40px; border-top:1px solid rgba(11,77,44,0.1);">
      <div class="section-head" style="text-align:left; max-width:100%; display:flex; flex-direction:column; align-items:flex-start;" data-reveal>
        <span class="tag"><i class="fas fa-truck-monster"></i> Service 04</span>
        <h2>Machinery Rental &amp; Hire</h2>
        <p style="max-width:800px; color:var(--gray-500); margin: 0;">When buying isn't the right option, renting gives you flexibility without the long-term capital commitment. ATC offers earthmoving machinery hire across Jammu, Kashmir &amp; Ladakh.</p>
      </div>

      <div class="services-grid" style="margin-top:40px;" data-reveal data-reveal-delay="1">
        <?php
        $rentals = [
          ['Excavators for Hire', 'Large tonnage excavators for heavy digging.', '/assets/img/parts_jcb.jpg'],
          ['Backhoe Loaders', 'Versatile JCB loaders for multi-purpose tasks.', '/assets/img/hero_services.jpg'],
          ['Road Rollers', 'Soil and asphalt compactors for road works.', '/assets/img/parts_undercarriage.jpg'],
          ['Dump Trucks', 'Heavy-duty articulated dump trucks for site transport.', '/assets/img/parts_transmission.jpg'],
          ['Mini Excavators', 'Compact excavators for tight spaces and trenches.', '/assets/img/parts_pump.jpg'],
          ['Wheel Loaders', 'High-capacity wheel loaders for material handling.', '/assets/img/parts_jcb.jpg'],
          ['Motor Graders', 'Precision graders for road construction leveling.', '/assets/img/parts_transmission.jpg'],
          ['Trenchers', 'Specialized trenching equipment for cable laying.', '/assets/img/parts_pins.jpg'],
          ['Soil Compactors', 'Vibratory compactors for solid foundation works.', '/assets/img/parts_undercarriage.jpg'],
          ['Lighting Towers', 'Diesel-powered lighting towers for night shifts.', '/assets/img/parts_filtration.jpg'],
          ['Generators (DG Sets)', 'Industrial diesel generators for continuous power.', '/assets/img/parts_engine.jpg'],
          ['Project Deployments', 'Long-term machinery hire for major projects.', '/assets/img/hero_services.jpg']
        ];
        $delay = 1;
        foreach($rentals as $rent): ?>
        <button class="service-card btn-modal-trigger" data-service="<?php echo $rent[0]; ?>" data-category="Machinery Rentals" style="text-align:center; border:none; width:100%; cursor:pointer; padding:0;" data-reveal data-reveal-delay="<?php echo $delay++; ?>">
          <div class="service-card__image" style="height:160px;">
            <img src="<?php echo $rent[2]; ?>" alt="<?php echo $rent[0]; ?>">
          </div>
          <div class="service-card__body" style="padding: 24px;">
            <h3 style="font-size:17px; margin-bottom:8px;"><?php echo $rent[0]; ?></h3>
            <p style="font-size:14px; margin-bottom:20px; line-height:1.5;"><?php echo $rent[1]; ?></p>
            <span class="link-enquire" style="font-size:14px; font-weight:700;">Enquire Rental <i class="fas fa-arrow-right"></i></span>
          </div>
        </button>
        <?php endforeach; ?>
      </div>
    </div>

  </div><!-- /container -->
</section>

<!-- FINAL CTA -->
<section class="cta-band">
  <div class="container">
    <h2 data-reveal>Not sure which service you need?</h2>
    <p data-reveal data-reveal-delay="1">Call us and describe your situation. Our team will guide you to the right solution — fast.</p>
    <a href="tel:+919419186209" class="cta-band__phone" data-reveal data-reveal-delay="2">+91 94191 86209</a>
    <div class="cta-band__actions" data-reveal data-reveal-delay="3">
      <a href="tel:+919419186209" class="btn btn--primary"><i class="fas fa-phone-alt"></i> Call Now</a>
      <a href="https://wa.me/919419186209" target="_blank" rel="noopener" class="btn btn--secondary"><i class="fab fa-whatsapp"></i> WhatsApp</a>
      <a href="/contact.php" class="btn btn--white"><i class="fas fa-envelope"></i> Send Enquiry</a>
    </div>
  </div>
</section>

<!-- LEAD GENERATION MODAL -->
<div class="lead-modal-overlay" id="leadModal">
  <div class="lead-modal">
    <button class="lead-modal__close" id="closeModal" aria-label="Close form">&times;</button>
    <div class="lead-modal__header">
      <span class="tag tag--gold" id="modalCategory" style="margin-bottom:12px;">Category</span>
      <h3 id="modalTitle">Enquire</h3>
      <p>Fill out the form below and our team will contact you shortly.</p>
    </div>
    
    <!-- Normally points to a PHP processing script, using # for UI demonstration -->
    <form action="#" method="POST" class="lead-modal__form" onsubmit="event.preventDefault(); alert('Lead submitted successfully! Our team will contact you.'); document.getElementById('closeModal').click();">
      <input type="hidden" name="service_category" id="inputCategory" value="">
      <input type="hidden" name="specific_item" id="inputItem" value="">
      
      <div class="form-group">
        <label>Your Name *</label>
        <input type="text" name="name" required placeholder="Enter your full name">
      </div>
      <div class="form-group">
        <label>Phone Number *</label>
        <input type="tel" name="phone" required placeholder="+91 XXXXX XXXXX">
      </div>
      <div class="form-group">
        <label>Additional Details (Optional)</label>
        <textarea name="message" rows="3" placeholder="Machine model, part number, or specific requirement..."></textarea>
      </div>
      <button type="submit" class="btn btn--primary" style="width:100%; margin-top:10px; display:flex; justify-content:center;">
        <i class="fas fa-paper-plane" style="margin-right:8px;"></i> Submit Enquiry
      </button>
    </form>
  </div>
</div>

</main>

<script>
document.addEventListener('DOMContentLoaded', () => {
  const modalOverlay = document.getElementById('leadModal');
  const closeModalBtn = document.getElementById('closeModal');
  const triggers = document.querySelectorAll('.btn-modal-trigger');
  
  // Modal UI Elements
  const modalCategory = document.getElementById('modalCategory');
  const modalTitle = document.getElementById('modalTitle');
  
  // Modal Form Inputs
  const inputCategory = document.getElementById('inputCategory');
  const inputItem = document.getElementById('inputItem');

  function openModal(category, item) {
    // Update UI
    modalCategory.textContent = category;
    modalTitle.textContent = `Enquire for ${item}`;
    
    // Update Hidden Inputs
    inputCategory.value = category;
    inputItem.value = item;
    
    // Show Modal
    modalOverlay.classList.add('active');
    document.body.style.overflow = 'hidden'; // Prevent background scrolling
  }

  function closeModal() {
    modalOverlay.classList.remove('active');
    document.body.style.overflow = '';
  }

  // Bind clicks
  triggers.forEach(btn => {
    btn.addEventListener('click', (e) => {
      e.preventDefault();
      const category = btn.getAttribute('data-category');
      const item = btn.getAttribute('data-service');
      openModal(category, item);
    });
  });

  closeModalBtn.addEventListener('click', closeModal);

  // Close on outside click
  modalOverlay.addEventListener('click', (e) => {
    if (e.target === modalOverlay) {
      closeModal();
    }
  });
});
</script>

<?php include 'includes/footer.php'; ?>


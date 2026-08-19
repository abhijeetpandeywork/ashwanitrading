<?php
$pageTitle = "Compressor Spare Parts | Ashwani Trading Co.";
$metaDesc = "High quality replacement parts for air compressors, drilling compressors, and compressor engines. Ashwani Trading Co.";
$currentPage = "services";
include "includes/header.php";

$compressor_categories = [
    "01. Air Compressors used with drilling equipment" => [
        "Compressor Assembly", "Air End / Compressor Element", "Compressor Rotor", "Rotor Bearing", "Air End Seal", "Compressor Shaft", "Air/Oil Separator", "Air Filter", "Oil Filter", "Compressor Oil Filter", "Separator Element", "Compressor Oil Cooler", "Aftercooler", "Intercooler", "Radiator", "Cooling Fan", "Fan Belt", "V-Belt", "Pulley", "Coupling", "Air Receiver", "Pressure Valve", "Minimum Pressure Valve", "Safety Relief Valve", "Check Valve", "Unloader Valve", "Solenoid Valve", "Inlet Valve", "Intake Valve", "Blowdown Valve", "Pressure Regulator", "Pressure Sensor", "Temperature Sensor", "Pressure Gauge", "Temperature Gauge", "Air Hose", "Air Pipe", "Pipe Fittings", "Hose Fittings", "O-Rings", "Oil Seals", "Gaskets", "Seal Kits", "Repair Kits"
    ],
    "02. Compressor engine parts" => [
        "Engine Filters", "Fuel Filters", "Air Filters", "Oil Filters", "Water Separator", "Fuel Pump", "Injectors", "Injection Pump", "Turbocharger", "Radiator", "Water Pump", "Thermostat", "Fan", "Fan Belt", "Starter Motor", "Alternator", "Battery", "Sensors", "Engine Gasket Kits", "Engine Overhaul Kits"
    ],
    "03. COMPRESSOR SPARE PARTS" => [
        "Air Compressor Parts", "Screw Compressor Parts", "Reciprocating Compressor Parts", "Diesel Compressor Parts", "Compressor Air-End Parts", "Compressor Electrical Parts", "Compressor Hydraulic Parts"
    ],
    "04. Compressor Components" => [
        "Compressor Hoses & Fittings", "Compressor Service Kits", "Compressor Repair Kits", "Compressor Filters", "Compressor Valves", "Compressor Bearings & Seals", "Compressor Cooling System"
    ]
];

?>
<main id="main-content">
  <section class="page-hero" style="background: linear-gradient(90deg, rgba(11,77,44,0.95) 0%, rgba(11,77,44,0.4) 100%), url('/assets/img/hero_compressor_parts.jpg') center/cover; padding: 120px 0 100px; color: #fff; text-align: center; border-bottom: 5px solid var(--gold);">
    <div class="container page-hero__inner" style="position: relative; z-index: 2;">
      <span class="tag tag--gold" style="margin: 0 auto 24px; box-shadow: 0 4px 15px rgba(242,169,0,0.3);">Comprehensive Inventory</span>
      <h1 style="font-size: clamp(36px, 6vw, 64px); margin-bottom: 20px; color: #fff; text-shadow: 0 4px 20px rgba(0,0,0,0.8); font-weight: 800;">Compressor & Compressor Spare Parts</h1>
      <p style="font-size: 18px; line-height: 1.6; opacity: 0.95; text-shadow: 0 2px 10px rgba(0,0,0,0.7); max-width: 700px; margin: 0 auto;">Atlas Copco | Chicago Pneumatic | ELGi | Ingersoll Rand | Sullair | Kaeser | Doosan | Kirloskar | Other Major Brands</p>
    </div>
  </section>

  <section class="section section--tint" style="padding: 60px 0; position: relative; z-index: 10;">
    <div class="container">
      
      <!-- Search Filter Bar -->
      <div class="parts-search-bar" data-reveal>
        <i class="fas fa-search parts-search-icon"></i>
        <input type="text" id="partsSearch" placeholder="Type to search for a part or category..." autocomplete="off">
      </div>

      <!-- Accordion Grid -->
      <div class="accordion-grid" data-reveal data-reveal-delay="1">
        <?php foreach($compressor_categories as $cat_name => $items): ?>
        <div class="accordion-item" data-search-target>
          <div class="accordion-header">
            <h3 class="accordion-title"><?= htmlspecialchars($cat_name) ?></h3>
            <div class="accordion-icon"><i class="fas fa-chevron-down"></i></div>
          </div>
          <div class="accordion-content">
            <div class="accordion-content-inner">
              <ul class="parts-list">
                <?php foreach($items as $item): ?>
                  <li class="parts-list-item btn-modal-trigger" data-service="<?= htmlspecialchars($item) ?>" data-category="<?= htmlspecialchars(preg_replace('/^\d+\.\s*/', '', $cat_name)) ?>">
                    <i class="fas fa-check-circle" style="color:var(--gold); margin-right:8px; font-size:12px;"></i><?= htmlspecialchars($item) ?>
                  </li>
                <?php endforeach; ?>
              </ul>
              <div class="accordion-cta">
                <a href="/contact.php?enquiry=<?= urlencode($cat_name) ?>" class="btn btn--primary" style="width:100%; justify-content:center;">
                  <i class="fas fa-envelope"></i> Enquire About <?= htmlspecialchars(preg_replace('/^\d+\.\s*/', '', $cat_name)) ?>
                </a>
              </div>
            </div>
          </div>
        </div>
        <?php endforeach; ?>
      </div>

    </div>
  </section>

  <!-- CTA Band -->
  <section class="cta-band" style="background: var(--green-900); padding: 80px 0; text-align: center; border-top: 5px solid var(--gold);">
    <div class="container">
      <h2 style="color: #fff; font-size: 36px; margin-bottom: 24px;">Can't Find What You're Looking For?</h2>
      <p style="color: rgba(255,255,255,0.8); font-size: 18px; margin-bottom: 32px; max-width: 600px; margin-left: auto; margin-right: auto;">Our database includes thousands of parts. Give us a call or send a WhatsApp message with your machine model and part number.</p>
      <div style="display: flex; gap: 20px; justify-content: center; flex-wrap: wrap;">
        <a href="tel:+919419186209" class="btn btn--primary"><i class="fas fa-phone-alt"></i> Call +91 94191 86209</a>
        <a href="https://wa.me/919419186209" class="btn" style="background: #25D366; color: #fff; border: 1px solid #25D366;"><i class="fab fa-whatsapp"></i> WhatsApp Us</a>
      </div>
    </div>
  </section>
</main>

<script>
document.addEventListener('DOMContentLoaded', () => {
  // Accordion Logic
  const accordions = document.querySelectorAll('.accordion-header');
  accordions.forEach(acc => {
    acc.addEventListener('click', () => {
      const parent = acc.parentElement;
      const wasActive = parent.classList.contains('active');
      
      document.querySelectorAll('.accordion-item').forEach(item => {
        item.classList.remove('active');
      });

      if (!wasActive) {
        parent.classList.add('active');
      }
    });
  });

  // Search Logic
  const searchInput = document.getElementById('partsSearch');
  const searchTargets = document.querySelectorAll('[data-search-target]');

  searchInput.addEventListener('input', (e) => {
    const term = e.target.value.toLowerCase();
    
    searchTargets.forEach(target => {
      const textContent = target.textContent.toLowerCase();
      if(textContent.includes(term)) {
        target.style.display = 'block';
        if (term.length > 2 && !target.classList.contains('active')) {
           target.classList.add('active');
        } else if (term.length === 0) {
           target.classList.remove('active');
        }
      } else {
        target.style.display = 'none';
      }
    });
  });

  // Modal Logic for part clicks
  const ov = document.getElementById('leadModal');
  const cl = document.getElementById('closeModal');
  const trg = document.querySelectorAll('.btn-modal-trigger');
  const cEl = document.getElementById('modalCategory');
  const tEl = document.getElementById('modalTitle');
  const cIn = document.getElementById('inputCategory');
  const iIn = document.getElementById('inputItem');
  
  function openModal(cat, item) {
    if(cEl) cEl.textContent = cat;
    if(tEl) tEl.textContent = "Enquire for " + item;
    if(cIn) cIn.value = cat;
    if(iIn) iIn.value = item;
    if(ov) {
      ov.classList.add('active');
      document.body.style.overflow = 'hidden';
    }
  }
  
  function closeModal() {
    if(ov) ov.classList.remove('active');
    document.body.style.overflow = '';
  }
  
  trg.forEach(btn => btn.addEventListener('click', e => {
    e.preventDefault();
    openModal(btn.dataset.category, btn.dataset.service);
  }));
  
  if(cl) cl.addEventListener('click', closeModal);
  if(ov) ov.addEventListener('click', e => { if (e.target === ov) closeModal(); });
});
</script>

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

<?php include "includes/footer.php"; ?>


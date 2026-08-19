<?php
$pageTitle = "ROC / Rock Drilling Equipment Spare Parts | Ashwani Trading Co.";
$metaDesc = "High quality replacement parts for ROC and rock drilling rigs, including drill bits, hydraulic components, and wear parts. Ashwani Trading Co.";
$currentPage = "services";
include "includes/header.php";

$roc_categories = [
    "01. ROC & Rock Drilling Spare Parts" => [
        "ROC Drilling Rig Spare Parts", "Drill Rods", "Extension Rods", "Threaded Rods", "Drill Bits", "DTH Bits", "Button Bits", "Shank Adapters", "Coupling Sleeves", "Drill Couplings", "Rock Drilling Tools", "Hydraulic Drilling Components", "Drifter Parts", "Rock Drill Parts", "Compressor Parts", "Hydraulic Hoses", "Hydraulic Pumps", "Hydraulic Motors", "Feed Beam Parts", "Feed Chain Parts", "Feed Motor Parts", "Rotation Motor Parts", "Percussion / Drifter Parts", "Rock Drill Seal Kits", "Rod Clamps", "Rod Changers", "Drill Rod Holders", "Rod Guides", "Rod Support Components", "Dust Collection Parts", "Air Filters", "Water Injection Components", "Control Valves", "Solenoid Valves", "Sensors", "Electrical Components", "Engine Parts", "Filters", "Bearings", "Bushes", "Seals & O-Rings", "Hydraulic Cylinders", "Wear Parts", "Repair Kits"
    ]
];

?>
<main id="main-content">
  <section class="page-hero" style="background: linear-gradient(90deg, rgba(11,77,44,0.95) 0%, rgba(11,77,44,0.4) 100%), url('/assets/img/hero_roc_parts.jpg') center/cover; padding: 120px 0 100px; color: #fff; text-align: center; border-bottom: 5px solid var(--gold);">
    <div class="container page-hero__inner" style="position: relative; z-index: 2;">
      <span class="tag tag--gold" style="margin: 0 auto 24px; box-shadow: 0 4px 15px rgba(242,169,0,0.3);">Comprehensive Inventory</span>
      <h1 style="font-size: clamp(36px, 6vw, 64px); margin-bottom: 20px; color: #fff; text-shadow: 0 4px 20px rgba(0,0,0,0.8); font-weight: 800;">ROC & Rock Drilling Spare Parts</h1>
      <p style="font-size: 18px; line-height: 1.6; opacity: 0.95; text-shadow: 0 2px 10px rgba(0,0,0,0.7); max-width: 700px; margin: 0 auto;">Atlas Copco | Epiroc | Sandvik | Furukawa | Other Major Drilling Brands</p>
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
        <?php foreach($roc_categories as $cat_name => $items): ?>
        <div class="accordion-item active" data-search-target>
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
      <button type="submit" class="btn btn--primary" style="width:100%;margin-top:10px;display:flex;justify-content:center;"><i class="fas fa-paper-plane" style="margin-right:8px;"></i> Submit Enquiry</button>
    </form>
  </div>
</div>

<?php include "includes/footer.php"; ?>

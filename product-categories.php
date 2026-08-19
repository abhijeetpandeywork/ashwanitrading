<?php
$pageTitle = "Tools, Equipment & Industrial Spares | Ashwani Trading Co.";
$metaDesc = "Complete range of tools, equipment, bearings, pneumatics, hydraulics, lifting gear, and workshop supplies. Ashwani Trading Co.";
$currentPage = "services";
include "includes/header.php";

$tools_categories = [
    "01. HYDRAULIC & PNEUMATIC" => [
        "Hydraulic Pumps", "Hydraulic Motors", "Hydraulic Cylinders", "Hydraulic Valves", "Hydraulic Hoses", "Hydraulic Pipes", "Hydraulic Fittings", "Hydraulic Couplings", "Hydraulic Filters", "Hydraulic Seals", "Hydraulic Pressure Gauges", "Hydraulic Accumulators", "Hydraulic Tanks",
        "Pneumatic Tools", "Air Hoses", "Air Fittings", "FRL Units", "Pneumatic Valves", "Pneumatic Cylinders", "Pneumatic Regulators", "Pneumatic Couplings", "Air Preparation Equipment"
    ],
    "02. BEARINGS, SEALS & INDUSTRIAL SPARES" => [
        "Ball Bearings", "Roller Bearings", "Taper Roller Bearings", "Needle Bearings", "Pillow Block Bearings", "Bearing Housings",
        "Oil Seals", "Hydraulic Seals", "Mechanical Seals", "O-Rings", "O-Ring Kits", "Gaskets", "Seal Kits", "Repair Kits",
        "Pins", "Bushes", "Circlips", "Retaining Rings"
    ],
    "03. NUTS, BOLTS & FASTENERS" => [
        "Nuts", "Bolts", "Washers", "Screws", "Studs", "High-Tensile Fasteners", "Track Bolts", "Bucket Bolts", "Cutting Edge Bolts", "Wheel Bolts", "Wheel Nuts", "U-Bolts", "Anchor Bolts", "Pins", "Clips", "Clamps"
    ],
    "04. BELTS, CHAINS & POWER TRANSMISSION" => [
        "V-Belts", "Fan Belts", "Timing Belts", "Conveyor Belts", "Industrial Belts",
        "Roller Chains", "Conveyor Chains", "Sprockets", "Pulleys", "Couplings", "Gears", "Gearboxes", "Power Transmission Components"
    ],
    "05. HAND TOOLS" => [
        "Spanner Sets", "Combination Spanners", "Ring Spanners", "Open-End Spanners", "Socket Sets", "Ratchets", "Torque Wrenches", "Screwdrivers", "Pliers", "Cutters", "Hammers", "Files", "Allen Keys", "Pipe Wrenches", "Adjustable Wrenches", "Pullers", "Tool Kits"
    ],
    "06. PNEUMATIC TOOLS" => [
        "Air Impact Wrenches", "Pneumatic Ratchets", "Air Drills", "Air Grinders", "Air Sanders", "Air Polishers", "Air Hammers", "Pneumatic Chipping Hammers", "Air Riveters", "Air Blow Guns", "Pneumatic Grease Guns", "Pneumatic Pumps", "Air Tool Accessories"
    ],
    "07. POWER TOOLS" => [
        "Electric Drills", "Impact Drills", "Angle Grinders", "Bench Grinders", "Cut-Off Machines", "Rotary Hammers", "Demolition Hammers", "Impact Wrenches", "Sanders", "Polishers", "Circular Saws", "Cutting Machines", "Power Tool Accessories", "Drill Bits", "Cutting Discs", "Grinding Discs", "Marble Cutters"
    ],
    "08. WELDING & CUTTING EQUIPMENT" => [
        "MR-CAI Inverter Welding Machine MIG-MMA TIG-350", "MR-CAI Heavy Duty MMA 800", "MR-CAI IGBT-400A",
        "ARC/MMA Welding Machines", "MIG/MAG Welding Machines", "TIG Welding Machines", "MIG/TIG Combination Machines", "Inverter Welding Machines", "Rectifiers", "Transformers", "Stud Welding", "Spot Welding", "Plasma Cutting", "Welding Generators",
        "Holders", "Earth Clamps", "Cables", "Connectors", "Electrode Holders", "TIG Torches", "MIG Torches", "MIG Guns", "TIG Consumables", "Contact Tips", "Nozzles", "Diffusers", "Torch Liners", "Regulators", "Flow Meters",
        "Electrodes", "MIG Wire", "TIG Rods", "Flux", "Brazing Rods", "Cutting Electrodes",
        "Cutting Torches", "Cutting Nozzles", "Oxygen Regulators", "Gas Regulators", "Hoses", "Flashback Arrestors", "Gas Connectors",
        "Welding Helmets", "Auto-Darkening Helmets", "Safety Goggles", "Welding Gloves", "Aprons", "Sleeves", "Welding Screens", "Welding Curtains", "Welding Blankets"
    ],
    "09. LIFTING, RIGGING & MATERIAL HANDLING" => [
        "Wire Rope", "Wire Rope Slings", "Webbing Slings", "Round Slings", "Chain Slings", "Shackles", "Lifting Hooks", "Master Links", "Eye Bolts", "Turnbuckles", "Wire Rope Clips", "Lifting Belts", "Pattey",
        "Pulley Blocks", "Sheaves", "Chain Blocks", "Lever Hoists", "Wire Rope Hoists", "Winches", "Lifting Clamps", "Ratchet Straps", "Tie-Down Straps"
    ],
    "10. WORKSHOP & SKILLED-TRADE EQUIPMENT" => [
        "Hydraulic Jacks", "Bottle Jacks", "Floor Jacks", "Jack Stands", "Work Benches", "Tool Cabinets", "Tool Trolleys", "Parts Washers", "Oil Drainers", "Oil Transfer Pumps", "Grease Pumps", "Grease Guns", "Workshop Cranes", "Engine Hoists", "Press Machines", "Hydraulic Presses", "Air Compressors", "Pressure Washers",
        "Engine Stands", "Bearing Pullers", "Gear Pullers", "Hydraulic Pullers", "Bearing Installers", "Torque Wrenches", "Inspection Lamps", "Diagnostic Equipment"
    ],
    "11. TAPES, ADHESIVES & SEALANTS" => [
        "RTV Silicone", "Gasket Maker", "Thread Locker", "Thread Sealant", "Pipe Sealant", "PTFE / Teflon Tape", "Insulation Tape", "Duct Tape", "Double-Sided Tape", "Aluminium Tape", "Reflective Tape", "Masking Tape", "Epoxy", "Metal Repair Adhesive", "Anti-Seize Compound", "Penetrating Oil", "Rust Remover", "Brake Cleaner", "Degreaser"
    ],
    "12. SAFETY EQUIPMENT & PPE" => [
        "Safety Helmets", "Safety Shoes", "Safety Goggles", "Face Shields", "Safety Gloves", "Ear Protection", "Dust Masks", "Respirators", "Safety Jackets", "Reflective Vests", "Coveralls", "Safety Harnesses", "Fall Protection", "Welding PPE", "Fire Extinguishers", "First Aid Kits", "Traffic Cones", "Barricades", "Safety Signs", "Warning Tape", "LOTO Equipment"
    ],
    "13. ELECTRICAL & AUTO ELECTRICAL" => [
        "Batteries", "Battery Chargers", "Alternators", "Starter Motors", "Relays", "Fuses", "Switches", "Sensors", "Wiring Harnesses", "Connectors", "Terminals", "Cable Lugs", "Work Lights", "LED Lights", "Beacon Lights", "Warning Lights", "Reverse Alarms", "Horns", "Electrical Accessories"
    ],
    "14. TYRES & WHEEL EQUIPMENT" => [
        "Earthmover Tyres", "OTR Tyres", "Loader Tyres", "Backhoe Tyres", "Roller Tyres", "Paver Tyres", "Industrial Tyres", "Tubes", "Flaps", "Wheel Rims", "Wheel Nuts", "Wheel Studs"
    ],
    "15. DRILLING, CUTTING & WEAR TOOLS" => [
        "Drill Rods", "Extension Rods", "DTH Bits", "Button Bits", "Shank Adapters", "Coupling Sleeves", "Rock Drill Parts", "Drifter Parts",
        "Cutting Edges", "Bucket Teeth", "Tooth Adapters", "Side Cutters", "Ripper Teeth", "Ripper Shanks", "Wear Plates", "Crusher Wear Parts", "Grinding Wheels", "Cutting Wheels", "Drill Bits", "Saw Blades"
    ],
    "16. PARTS SOURCING & TECHNICAL SUPPORT" => [
        "Part Number Identification", "Parts Cross-Reference", "Machine Model Identification", "Spare Parts Sourcing", "OEM / Equivalent Parts", "Hard-to-Find Parts", "Urgent Parts Procurement", "Bulk Spare Parts Supply", "Technical Assistance"
    ],
    "17. MACHINERY SALES & TRADING" => [
        "New Machinery", "Used Machinery", "Used Excavators", "Used Backhoe Loaders", "Used Loaders", "Used Rollers", "Used Pavers", "Used Compressors", "Used Drilling Equipment"
    ]
];

?>
<main id="main-content">
  <section class="page-hero" style="background: linear-gradient(90deg, rgba(11,77,44,0.95) 0%, rgba(11,77,44,0.4) 100%), url('/assets/img/hero_tools_equip.jpg') center/cover; padding: 120px 0 100px; color: #fff; text-align: center; border-bottom: 5px solid var(--gold);">
    <div class="container page-hero__inner" style="position: relative; z-index: 2;">
      <span class="tag tag--gold" style="margin: 0 auto 24px; box-shadow: 0 4px 15px rgba(242,169,0,0.3);">All Product Categories</span>
      <h1 style="font-size: clamp(36px, 6vw, 64px); margin-bottom: 20px; color: #fff; text-shadow: 0 4px 20px rgba(0,0,0,0.8); font-weight: 800;">Tools, Equipment & Industrial Spares</h1>
      <p style="font-size: 18px; line-height: 1.6; opacity: 0.95; text-shadow: 0 2px 10px rgba(0,0,0,0.7); max-width: 700px; margin: 0 auto;">From heavy lifting gear and pneumatic tools to bearings, fasteners, and safety PPE, browse our massive 17-category industrial inventory.</p>
    </div>
  </section>

  <section class="section section--tint" style="padding: 60px 0; position: relative; z-index: 10;">
    <div class="container">
      
      <!-- Search Filter Bar -->
      <div class="parts-search-bar" data-reveal>
        <i class="fas fa-search parts-search-icon"></i>
        <input type="text" id="partsSearch" placeholder="Type to search for a product or category..." autocomplete="off">
      </div>

      <!-- Accordion Grid -->
      <div class="accordion-grid" data-reveal data-reveal-delay="1">
        <?php 
        $cat_index = 1;
        foreach($tools_categories as $cat_name => $items): 
        ?>
        <div class="accordion-item" id="cat-<?= $cat_index ?>" data-search-target>
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
                <a href="/contact.php?enquiry=<?= urlencode(preg_replace('/^\d+\.\s*/', '', $cat_name)) ?>" class="btn btn--primary" style="width:100%; justify-content:center;">
                  <i class="fas fa-envelope"></i> Enquire About <?= htmlspecialchars(preg_replace('/^\d+\.\s*/', '', $cat_name)) ?>
                </a>
              </div>
            </div>
          </div>
        </div>
        <?php 
        $cat_index++;
        endforeach; 
        ?>
      </div>

    </div>
  </section>

  <!-- CTA Band -->
  <section class="cta-band" style="background: var(--green-900); padding: 80px 0; text-align: center; border-top: 5px solid var(--gold);">
    <div class="container">
      <h2 style="color: #fff; font-size: 36px; margin-bottom: 24px;">Can't Find What You're Looking For?</h2>
      <p style="color: rgba(255,255,255,0.8); font-size: 18px; margin-bottom: 32px; max-width: 600px; margin-left: auto; margin-right: auto;">Our database includes thousands of parts. Give us a call or send a WhatsApp message with your requirement.</p>
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

  // Handle Hash Auto-open
  function handleHash() {
    if (window.location.hash) {
      const hash = window.location.hash; // e.g. #cat-hand-tools
      const targetItem = document.querySelector(hash);
      if (targetItem && targetItem.classList.contains('accordion-item')) {
        document.querySelectorAll('.accordion-item').forEach(item => {
          item.classList.remove('active');
        });
        targetItem.classList.add('active');
        setTimeout(() => {
          const offset = 120; // sticky header offset
          const elementPosition = targetItem.getBoundingClientRect().top;
          const offsetPosition = elementPosition + window.scrollY - offset;
          window.scrollTo({
               top: offsetPosition,
               behavior: "smooth"
          });
        }, 500);
      }
    }
  }
  handleHash();
  window.addEventListener('hashchange', handleHash);

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

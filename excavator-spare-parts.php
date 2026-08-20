<?php
$pageTitle = "Excavator Spare Parts | Ashwani Trading Co.";
$metaDesc = "Complete range of excavator spare parts including engine, hydraulic, undercarriage, bucket, filters, and more. Ashwani Trading Co.";
$currentPage = "services";
include "includes/header.php";

$excavator_categories = [
    "1. Engine Spare Parts" => [
        "Engine Assembly", "Cylinder Block", "Cylinder Head", "Cylinder Head Gasket", "Head Cover", "Rocker Arm", "Rocker Shaft", "Push Rod", "Tappet", "Valve", "Valve Guide", "Valve Seat", "Valve Spring", "Valve Retainer", "Camshaft", "Camshaft Gear", "Crankshaft", "Crankshaft Bearing", "Main Bearing", "Connecting Rod", "Connecting Rod Bearing", "Connecting Rod Bush", "Piston", "Piston Ring", "Piston Pin", "Cylinder Liner", "Engine Block", "Oil Pump", "Oil Pump Gear", "Oil Cooler", "Oil Filter", "Fuel Pump", "Fuel Injection Pump", "Fuel Injector", "Injector Nozzle", "Injector Seal", "Glow Plug", "Spark Plug, where applicable", "Timing Gear", "Timing Cover", "Timing Belt / Chain", "Flywheel", "Flywheel Housing", "Engine Mount", "Engine Gasket Set", "Engine Overhaul Kit", "Complete Engine Rebuild Kit"
    ],
    "2. Air Intake & Turbocharger Parts" => [
        "Air Filter", "Primary Air Filter", "Secondary Air Filter", "Air Filter Housing", "Air Intake Hose", "Air Intake Pipe", "Turbocharger", "Turbocharger Cartridge", "Turbocharger Shaft", "Turbocharger Bearing", "Turbocharger Seal", "Turbocharger Repair Kit", "Intercooler", "Charge Air Cooler", "Intake Manifold", "Exhaust Manifold", "Exhaust Pipe", "Muffler", "Silencer", "Exhaust Gasket", "Exhaust Bellows"
    ],
    "3. Fuel System Parts" => [
        "Fuel Tank", "Fuel Tank Cap", "Fuel Tank Strainer", "Fuel Tank Breather", "Fuel Filter", "Fuel Filter Element", "Fuel Water Separator", "Fuel Pump", "Fuel Transfer Pump", "Fuel Injection Pump", "Common Rail Pump", "Common Rail", "Fuel Injector", "Injector Nozzle", "Injector O-Ring", "Injector Seal", "Fuel Control Valve", "Fuel Solenoid", "Fuel Pressure Sensor", "Fuel Lines", "Fuel Hoses", "Fuel Pipes", "Fuel Return Line", "Fuel Shut-Off Valve"
    ],
    "4. Cooling System Parts" => [
        "Radiator", "Radiator Core", "Radiator Cap", "Radiator Hose", "Upper Radiator Hose", "Lower Radiator Hose", "Water Pump", "Water Pump Seal", "Water Pump Bearing", "Thermostat", "Thermostat Housing", "Cooling Fan", "Fan Blade", "Fan Hub", "Fan Belt", "Fan Pulley", "Fan Motor", "Viscous Fan Clutch", "Coolant Tank", "Expansion Tank", "Coolant Level Sensor", "Oil Cooler", "Hydraulic Oil Cooler", "Charge Air Cooler", "Temperature Sensor"
    ],
    "5. Hydraulic System Spare Parts" => [
        "Hydraulic Pump", "Main Hydraulic Pump", "Pilot Pump", "Gear Pump", "Hydraulic Motor", "Travel Motor", "Swing Motor", "Hydraulic Cylinder", "Boom Cylinder", "Arm Cylinder", "Bucket Cylinder", "Cylinder Barrel", "Cylinder Rod", "Cylinder Piston", "Cylinder Head", "Cylinder Seal Kit", "Piston Seal", "Rod Seal", "Wiper Seal", "Wear Ring", "O-Ring", "Backup Ring", "Hydraulic Valve", "Main Control Valve", "Control Valve Spool", "Relief Valve", "Solenoid Valve", "Pilot Valve", "Check Valve", "Counterbalance Valve", "Flow Control Valve", "Hydraulic Accumulator", "Hydraulic Filter", "Hydraulic Filter Element", "Hydraulic Tank", "Hydraulic Tank Cap", "Hydraulic Breather", "Hydraulic Hose", "Hydraulic Pipe", "Hydraulic Tube", "Hose Assembly", "Hose Fittings", "Hydraulic Coupling", "Hydraulic Adapter", "Hydraulic Oil Level Gauge", "Pressure Sensor", "Pressure Switch", "Hydraulic Pressure Gauge"
    ],
    "6. Hydraulic Pump Parts" => [
        "Pump Housing", "Pump Shaft", "Pump Piston", "Piston Shoe", "Cylinder Block", "Swash Plate", "Valve Plate", "Retainer Plate", "Center Pin", "Drive Shaft", "Bearing", "Seal", "O-Ring", "Regulator", "Pump Regulator", "Servo Piston", "Pump Control Solenoid", "Pump Repair Kit", "Complete Pump Rebuild Kit"
    ],
    "7. Travel / Final Drive Parts" => [
        "Final Drive", "Travel Motor", "Travel Reduction Gearbox", "Planetary Gear", "Sun Gear", "Planet Gear", "Ring Gear", "Carrier", "Sprocket", "Drive Shaft", "Travel Motor Seal Kit", "Floating Seal", "Mechanical Seal", "Bearing", "Thrust Washer", "Bush", "Pin", "O-Ring", "Gearbox Housing", "Final Drive Repair Kit"
    ],
    "8. Swing System Parts" => [
        "Swing Motor", "Swing Reduction Gearbox", "Swing Gearbox", "Swing Bearing", "Slewing Ring", "Swing Circle", "Swing Gear", "Pinion Gear", "Swing Motor Seal Kit", "Swing Brake", "Swing Brake Disc", "Swing Brake Piston", "Swing Brake Plate", "Bearing", "Gear", "Shaft", "Seal", "O-Ring"
    ],
    "9. Undercarriage Parts" => [
        "Track Chain", "Track Link", "Track Shoe", "Track Bolt", "Track Nut", "Track Group", "Track Roller", "Top Roller", "Bottom Roller", "Carrier Roller", "Front Idler", "Rear Idler", "Sprocket", "Track Adjuster", "Track Tensioner", "Recoil Spring", "Recoil Spring Assembly", "Track Guard", "Center Guard", "Track Frame", "Side Frame", "Undercarriage Bush", "Undercarriage Pin", "Track Chain Seal", "Track Link Seal", "Track Hardware"
    ],
    "10. Bucket & Attachment Parts" => [
        "Excavator Bucket", "Rock Bucket", "Heavy-Duty Bucket", "Mud Bucket", "Trenching Bucket", "Grading Bucket", "Bucket Tooth", "Bucket Tooth Adapter", "Bucket Tooth Pin", "Bucket Tooth Retainer", "Side Cutter", "Cutting Edge", "Wear Plate", "Bucket Pin", "Bucket Bush", "Bucket Link", "Bucket Link Pin", "Bucket Link Bush", "Connecting Link", "Quick Coupler", "Hydraulic Quick Coupler", "Attachment Coupler", "Bucket Cylinder Pin"
    ],
    "11. Boom & Arm Parts" => [
        "Boom", "Boom Foot Pin", "Boom Cylinder Pin", "Boom Bush", "Arm / Dipper", "Arm Pin", "Arm Bush", "Bucket Link", "Link Pin", "Link Bush", "Boom Wear Pad", "Arm Wear Pad", "Shim", "Pin Lock", "Retaining Ring", "Grease Seal", "Lubrication Fitting"
    ],
    "12. Electrical & Starting System" => [
        "Starter Motor", "Starter Solenoid", "Alternator", "Alternator Pulley", "Alternator Regulator", "Battery", "Battery Cable", "Battery Terminal", "Battery Relay", "Starter Relay", "Main Relay", "Fuse", "Fuse Box", "Circuit Breaker", "Wiring Harness", "Electrical Connector", "Terminal", "Ground Cable", "Ignition Switch", "Start Switch", "Stop Switch", "Combination Switch", "Key Switch", "Horn", "Buzzer", "Work Light", "Head Lamp", "Rear Lamp", "LED Work Lamp", "Warning Lamp"
    ],
    "13. Sensors & Electronic Components" => [
        "Engine Temperature Sensor", "Coolant Temperature Sensor", "Oil Pressure Sensor", "Fuel Pressure Sensor", "Hydraulic Pressure Sensor", "Hydraulic Oil Temperature Sensor", "Fuel Level Sensor", "Hydraulic Oil Level Sensor", "Air Pressure Sensor", "Boost Pressure Sensor", "RPM Sensor", "Crankshaft Position Sensor", "Camshaft Position Sensor", "Speed Sensor", "Travel Sensor", "Swing Sensor", "Proximity Sensor", "Position Sensor", "Throttle Sensor", "Accelerator Sensor", "Solenoid", "Control Solenoid", "Pressure Switch"
    ],
    "14. ECU & Control System" => [
        "Engine ECU", "Machine ECU", "Hydraulic ECU", "Controller", "Electronic Control Module", "Monitor Panel", "Display Panel", "Instrument Cluster", "Control Panel", "Joystick Controller", "Joystick Assembly", "Pilot Control Joystick", "Travel Joystick", "Foot Pedal", "Control Switch", "Relay", "Communication Module", "GPS / Telematics Module", "Wiring Harness"
    ],
    "15. Operator Cabin Parts" => [
        "Operator Seat", "Seat Suspension", "Seat Belt", "Cabin Door", "Door Lock", "Door Handle", "Door Glass", "Front Windshield", "Side Glass", "Rear Glass", "Glass Rubber", "Window Seal", "Wiper Motor", "Wiper Arm", "Wiper Blade", "Washer Pump", "Washer Tank", "Cabin Mirror", "Rear-View Mirror", "Cabin Filter", "Air Conditioner Filter", "Cabin Air Filter"
    ],
    "16. Air Conditioning & HVAC Parts" => [
        "AC Compressor", "AC Condenser", "AC Evaporator", "AC Receiver Drier", "Expansion Valve", "AC Blower Motor", "Blower Fan", "AC Belt", "AC Hose", "AC Pipe", "AC Pressure Switch", "AC Temperature Sensor", "Heater Core", "Heater Valve", "Cabin Filter", "AC Control Panel", "AC Relay", "AC Clutch", "AC Compressor Coil"
    ],
    "17. Transmission / Drive Parts" => [
        "Transmission Assembly", "Gearbox", "Drive Shaft", "Propeller Shaft", "Coupling", "Gear", "Bearing", "Bush", "Shaft", "Clutch", "Clutch Plate", "Pressure Plate", "Seal", "O-Ring", "Transmission Filter", "Transmission Oil Cooler", "Transmission Repair Kit"
    ],
    "18. Lubrication System Parts" => [
        "Grease Pump", "Automatic Greasing System", "Grease Tank", "Grease Hose", "Grease Pipe", "Grease Nipple", "Grease Fitting", "Lubrication Distributor", "Lubrication Metering Valve", "Central Lubrication Pump", "Lubrication Filter"
    ],
    "19. Filters" => [
        "Engine Oil Filter", "Hydraulic Oil Filter", "Fuel Filter", "Fuel Water Separator", "Primary Fuel Filter", "Secondary Fuel Filter", "Air Filter", "Primary Air Filter", "Secondary Air Filter", "Pilot Filter", "Transmission Filter", "Return Line Filter", "Suction Filter", "Breather Filter", "Cabin Air Filter", "AC Filter", "Coolant Filter"
    ],
    "20. Seals, Gaskets & Repair Kits" => [
        "O-Ring", "Oil Seal", "Hydraulic Seal", "Mechanical Seal", "Floating Seal", "Dust Seal", "Wiper Seal", "Rod Seal", "Piston Seal", "Buffer Seal", "Wear Ring", "Backup Ring", "V-Seal", "U-Seal", "Gasket", "Copper Gasket", "Metal Gasket", "Rubber Gasket", "Head Gasket", "Exhaust Gasket", "Intake Gasket", "Complete Gasket Kit", "Hydraulic Seal Kit", "Cylinder Seal Kit", "Pump Seal Kit", "Motor Seal Kit", "Final Drive Seal Kit", "Swing Motor Seal Kit", "Engine Overhaul Kit", "Repair Kit"
    ],
    "21. Pins, Bushes & Wear Components" => [
        "Bucket Bush", "Arm Bush", "Boom Bush", "Link Bush", "Bucket Pin", "Arm Pin", "Boom Pin", "Link Pin", "Cylinder Pin", "Track Pin", "Track Bush", "Pin Retainer", "Lock Pin", "Shim", "Thrust Washer", "Wear Plate", "Wear Pad"
    ],
    "22. Attachment & Hydraulic Attachment Parts" => [
        "Hydraulic Breaker", "Breaker Chisel", "Breaker Seal Kit", "Breaker Diaphragm", "Breaker Piston", "Breaker Bush", "Breaker Valve", "Breaker Repair Kit", "Rock Breaker Parts", "Hydraulic Hammer Parts", "Hydraulic Shear Parts", "Crusher Attachment Parts", "Auger Parts", "Grapple Parts", "Ripper Parts", "Quick Coupler Parts", "Tilt Bucket Parts"
    ],
    "23. Electrical Safety & Miscellaneous Parts" => [
        "Horn", "Alarm Buzzer", "Reverse Alarm", "Warning Beacon", "Emergency Stop Switch", "Fuse", "Relay", "Circuit Breaker", "Battery Isolator", "Safety Switch", "Limit Switch", "Electrical Connector", "Wiring Connector", "Cable", "Wire Harness", "Ground Strap", "Work Lights", "Warning Lights"
    ],
    "24. General Hardware & Consumables" => [
        "Nuts", "Bolts", "Washers", "Spring Washers", "Circlips", "Snap Rings", "Retaining Rings", "Studs", "Threaded Rods", "Clamps", "Hose Clamps", "Pipe Clamps", "Rubber Mounts", "Rubber Bushes", "Vibration Mounts", "Metal Shims", "Spacers", "Couplings", "Adapters", "Plugs", "Caps", "Fittings", "Grease Nipples", "Cable Ties"
    ]
];

?>
<main id="main-content">
  <section class="page-hero" style="background: linear-gradient(90deg, rgba(11,77,44,0.95) 0%, rgba(11,77,44,0.4) 100%), url('/assets/img/hero_excavator_parts.webp') center/cover; padding: 120px 0 100px; color: #fff; text-align: center; border-bottom: 5px solid var(--gold);">
    <div class="container page-hero__inner" style="position: relative; z-index: 2;">
      <span class="tag tag--gold" style="margin: 0 auto 24px; box-shadow: 0 4px 15px rgba(242,169,0,0.3);">Comprehensive Inventory</span>
      <h1 style="font-size: clamp(36px, 6vw, 64px); margin-bottom: 20px; color: #fff; text-shadow: 0 4px 20px rgba(0,0,0,0.8); font-weight: 800;">Excavator Spare Parts</h1>
      <p style="font-size: 18px; line-height: 1.6; opacity: 0.95; text-shadow: 0 2px 10px rgba(0,0,0,0.7); max-width: 700px; margin: 0 auto;">CAT_Caterpillar | JCB | Komatsu | Hitachi | Tata Hitachi | Hyundai | Volvo | JS 200-225 |Doosan / DEVELON | Kobelco | CASE | BULL |  SANY | XCMG | Liugong | John Deere | Mahindra | Escorts | Larsen & Toubro | SDLG | Other Major Brands</p>
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
        <?php foreach($excavator_categories as $cat_name => $items): ?>
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
      
      // Close all other accordions (Optional: remove this loop if you want multiple open)
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
        // Auto-expand if searching
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
    cEl.textContent = cat;
    tEl.textContent = "Enquire for " + item;
    cIn.value = cat;
    iIn.value = item;
    ov.classList.add('active');
    document.body.style.overflow = 'hidden';
  }
  
  function closeModal() {
    ov.classList.remove('active');
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



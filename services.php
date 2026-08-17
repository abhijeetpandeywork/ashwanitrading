<?php
$pageTitle   = 'Services — Earthmoving Spare Parts, Lubricants, Tools, Repairs & Rentals | Ashwani Trading Co.';
$metaDesc    = 'ATC offers earthmoving spare parts, lubricants & oils, industrial tools, expert workshop repairs, and equipment rentals across Jammu, Kashmir & Ladakh. Call +91 94191 86209.';
$currentPage = 'services';
include 'includes/header.php';
?>

<main id="main-content">

<!-- PAGE HERO -->
<section class="page-hero" style="background: linear-gradient(90deg, rgba(11,77,44,0.95) 0%, rgba(11,77,44,0.2) 100%), url('/assets/img/hero_services.jpg') center/cover; padding: 140px 0 120px; color: #fff; text-align: left; border-bottom: 5px solid var(--gold);">
  <div class="container page-hero__inner" style="max-width: 1200px; margin: 0 auto; display: flex; flex-direction: column; align-items: flex-start;">
    <span class="tag tag--gold" style="margin-bottom: 24px; box-shadow: 0 4px 15px rgba(242,169,0,0.3);">Five Services. One Trusted Partner.</span>
    <h1 style="font-size: clamp(40px, 6vw, 72px); margin-bottom: 24px; color: #fff; line-height: 1.05; text-shadow: 0 4px 20px rgba(0,0,0,0.8); font-weight: 800; letter-spacing: -1px;">Everything Your<br><span style="color:var(--gold);">Machines Need</span></h1>
    <p style="font-size: 22px; line-height: 1.5; opacity: 0.95; text-shadow: 0 2px 10px rgba(0,0,0,0.8); max-width: 640px; font-weight: 500;">From genuine spare parts and industrial lubricants to expert repairs, specialised tools, and flexible equipment rentals — all under one trusted roof in Jammu.</p>
    <nav style="display:flex; gap:10px; flex-wrap:wrap; margin-top:32px;">
      <a href="#spare-parts" style="background:rgba(255,255,255,0.15); color:#fff; padding:10px 20px; border-radius:30px; font-size:14px; font-weight:600; border:1px solid rgba(255,255,255,0.3); text-decoration:none;">Spare Parts</a>
      <a href="#lubricants" style="background:rgba(255,255,255,0.15); color:#fff; padding:10px 20px; border-radius:30px; font-size:14px; font-weight:600; border:1px solid rgba(255,255,255,0.3); text-decoration:none;">Lubricants &amp; Oils</a>
      <a href="#tools" style="background:rgba(255,255,255,0.15); color:#fff; padding:10px 20px; border-radius:30px; font-size:14px; font-weight:600; border:1px solid rgba(255,255,255,0.3); text-decoration:none;">Tools &amp; Equipment</a>
      <a href="#workshop" style="background:rgba(255,255,255,0.15); color:#fff; padding:10px 20px; border-radius:30px; font-size:14px; font-weight:600; border:1px solid rgba(255,255,255,0.3); text-decoration:none;">Services &amp; Repairs</a>
      <a href="#rentals" style="background:rgba(242,169,0,0.85); color:#062818; padding:10px 20px; border-radius:30px; font-size:14px; font-weight:700; text-decoration:none;">Machinery Rentals</a>
    </nav>
  </div>
</section>

<!-- SERVICES DETAIL -->
<section class="section section--white" id="services-detail" style="padding-top: 60px;">
  <div class="container">

<?php
function renderServiceSection($id,$tagNum,$icon,$title,$desc,$category,$btnLabel,$items){
  $border=$tagNum>1?'padding-top:40px; border-top:1px solid rgba(11,77,44,0.1);':'';
  echo "<div class=\"svc-section\" id=\"{$id}\" style=\"margin-bottom:80px; {$border}\">";
  echo "<div class=\"section-head\" style=\"text-align:left;max-width:100%;display:flex;flex-direction:column;align-items:flex-start;\" data-reveal>";
  echo "<span class=\"tag\"><i class=\"fas fa-{$icon}\"></i> Service 0{$tagNum}</span>";
  echo "<h2>{$title}</h2>";
  echo "<p style=\"max-width:800px;color:var(--gray-500);margin:0;\">{$desc}</p>";
  echo "</div>";
  echo "<div class=\"services-grid\" style=\"margin-top:40px;\" data-reveal data-reveal-delay=\"1\">";
  $d=1;
  foreach($items as $item){
    $name=htmlspecialchars($item[0]);$sub=htmlspecialchars($item[1]);$img=$item[2];
    echo "<button class=\"service-card btn-modal-trigger\" data-service=\"{$name}\" data-category=\"{$category}\" style=\"text-align:center;border:none;width:100%;cursor:pointer;padding:0;\" data-reveal data-reveal-delay=\"{$d}\">";
    echo "<div class=\"service-card__image\" style=\"height:160px;\"><img src=\"{$img}\" alt=\"{$name}\" loading=\"lazy\"></div>";
    echo "<div class=\"service-card__body\" style=\"padding:24px;\">";
    echo "<h3 style=\"font-size:17px;margin-bottom:8px;\">{$name}</h3>";
    echo "<p style=\"font-size:14px;margin-bottom:20px;line-height:1.5;\">{$sub}</p>";
    echo "<span class=\"link-enquire\" style=\"font-size:14px;font-weight:700;\">{$btnLabel} <i class=\"fas fa-arrow-right\"></i></span>";
    echo "</div></button>";
    $d++;
  }
  echo "</div></div>";
}

// SERVICE 1
$spareParts=[
  ['Excavator Spare Parts','Track links, bucket cylinders, slew rings & hydraulic components for all excavator models.','/assets/img/parts_jcb.jpg'],
  ['Backhoe Loader Spare Parts','Engine, transmission, axle, hydraulic & electrical parts for all backhoe loader models.','/assets/img/parts_pump.jpg'],
  ['Road Roller / Compactor Parts','Drum bearings, vibration mounts, drive belts and hydraulic components for smooth compaction.','/assets/img/parts_undercarriage.jpg'],
  ['Asphalt Paver Spare Parts','Screed plates, auger shafts, conveyor chains and heating elements to keep your paver road-ready.','/assets/img/parts_engine.jpg'],
  ['Hot Mix Plant Spare Parts','Drum burners, filler pumps, aggregate feeders and RAP components for uninterrupted production.','/assets/img/parts_filtration.jpg'],
  ['Crusher & Screening Plant Parts','Jaw plates, blow bars, screen meshes, bearings and drive components for crushing operations.','/assets/img/parts_transmission.jpg'],
  ['ROC / Rock Drilling Equipment Parts','Drill bits, shank adapters, drill rods and hammer components for rock drilling rigs.','/assets/img/parts_pins.jpg'],
  ['Compressor Spare Parts','Pistons, rings, valves, filters and separator elements for air compressor servicing and overhaul.','/assets/img/parts_jcb.jpg'],
];
renderServiceSection('spare-parts',1,'cogs','Earthmoving Machinery Spare Parts &amp; Accessories',
  'We stock genuine OEM and quality-checked aftermarket spare parts for every major category of earthmoving and construction equipment — from excavators to rock drilling rigs. Fast sourcing, verified quality, and expert guidance from a team with 60+ years in the field.',
  'Spare Parts','Enquire Now',$spareParts);

// SERVICE 2
$lubricants=[
  ['Engine Oils','Premium mineral and synthetic engine oils for all makes and grades of construction machinery.','/assets/img/parts_engine.jpg'],
  ['Hydraulic Oils','ISO-grade hydraulic oils for excavators, loaders, and all open and closed hydraulic circuits.','/assets/img/parts_pump.jpg'],
  ['Gear & Transmission Oils','High-EP gear oils and ATF fluids for gearboxes, axles, and torque converter systems.','/assets/img/parts_transmission.jpg'],
  ['Compressor Oils','Reciprocating and rotary screw compressor oils for long service intervals and thermal stability.','/assets/img/parts_filtration.jpg'],
  ['Rock Drill Oils','Specialist oils formulated for extreme pressures of rock drilling and percussion equipment.','/assets/img/parts_pins.jpg'],
  ['Greases — EP & Lithium','Extreme-pressure and lithium complex greases for pin joints, bearings and undercarriage lubrication.','/assets/img/parts_jcb.jpg'],
  ['Coolants & Antifreeze','Ready-mixed and concentrate coolants providing freeze, boil and corrosion protection in all seasons.','/assets/img/parts_undercarriage.jpg'],
  ['Brake Fluid','DOT-rated brake fluids for hydraulic disc and drum braking systems on heavy machinery.','/assets/img/parts_engine.jpg'],
  ['Grease Guns & Pumps','Manual and pneumatic grease guns, barrel pumps and oil dispensers for professional lubrication.','/assets/img/parts_pump.jpg'],
  ['Oil & Grease Dispensers','Oil transfer pumps, hand-operated dispensers and metered dispensers for precise lubrication.','/assets/img/parts_transmission.jpg'],
  ['Grease Hoses & Couplers','High-pressure grease hoses, lock-on couplers, grease nipples and adapters.','/assets/img/parts_filtration.jpg'],
  ['Lubrication Accessories','Grease nipple assortments, adapters, check valves and all ancillary lubrication hardware.','/assets/img/parts_pins.jpg'],
];
renderServiceSection('lubricants',2,'oil-can','Lubricants, Oils &amp; Fluids',
  'Quality lubrication is the single most cost-effective way to extend machine life. We supply a full range of branded and industrial-grade oils, greases, coolants, and lubrication equipment — with professional guidance on the right specification for your machine.',
  'Lubricants & Oils','Enquire Now',$lubricants);

// SERVICE 3
$tools=[
  ['Hydraulic & Pneumatic Components','Cylinders, valves, fittings, hoses, regulators, filters and pneumatic actuators for all systems.','/assets/img/parts_pump.jpg'],
  ['Bearings, Seals & Industrial Spares','Precision bearings (ball, roller, taper), oil seals, O-rings and mechanical shaft seals.','/assets/img/parts_filtration.jpg'],
  ['Nuts, Bolts & Fasteners','High-tensile bolts, lock nuts, washers, studs and all structural fasteners in metric and imperial.','/assets/img/parts_pins.jpg'],
  ['Belts, Chains & Power Transmission','V-belts, timing belts, conveyor chains, sprockets, pulleys and couplings for all drives.','/assets/img/parts_transmission.jpg'],
  ['Hand Tools','Spanners, sockets, ratchets, pliers, hammers, punches and professional workshop hand-tool sets.','/assets/img/parts_jcb.jpg'],
  ['Pneumatic Tools','Air impact wrenches, air ratchets, chisels, sanders and all compressor-powered workshop tools.','/assets/img/parts_engine.jpg'],
  ['Power Tools','Angle grinders, electric drills, jig saws, heat guns and all corded and cordless power tools.','/assets/img/parts_pump.jpg'],
  ['Welding & Cutting Equipment','MIG/MMA welders, oxy-acetylene sets, plasma cutters, electrodes and welding safety gear.','/assets/img/parts_undercarriage.jpg'],
  ['Lifting, Rigging & Material Handling','Chain blocks, wire rope hoists, slings, shackles, eye bolts and lifting clamps.','/assets/img/parts_transmission.jpg'],
  ['Workshop & Skilled-Trade Equipment','Hydraulic jacks, presses, bearing pullers, tap & die sets, pipe threaders and precision tools.','/assets/img/parts_filtration.jpg'],
  ['Safety Equipment & PPE','Helmets, safety boots, gloves, harnesses, reflective vests, ear defenders and all site PPE.','/assets/img/parts_pins.jpg'],
  ['Electrical & Auto Electrical','Cables, terminals, fuses, relays, batteries, starter motors and all auto-electrical components.','/assets/img/parts_jcb.jpg'],
  ['Tyres & Wheel Equipment','OTR tyres, rim hardware, valve assemblies, bead breakers and tyre pressure monitoring equipment.','/assets/img/parts_engine.jpg'],
  ['Drilling, Cutting & Wear Tools','Rock drill bits, carbide tips, circular saw blades, abrasive wheels and ground-engaging wear parts.','/assets/img/parts_undercarriage.jpg'],
  ['Tapes, Adhesives & Sealants','Industrial tapes, thread sealants, gasket makers, retaining compounds and anaerobic adhesives.','/assets/img/parts_pump.jpg'],
];
renderServiceSection('tools',3,'toolbox','Tools &amp; Equipment',
  'A well-equipped workshop is the backbone of every productive site. We supply the complete spectrum of professional tools and industrial supplies — from precision hand tools and pneumatic equipment to heavy lifting gear, safety PPE and wear parts.',
  'Tools & Equipment','Enquire Now',$tools);

// SERVICE 4
$repairs=[
  ['Engine Overhauling','Full engine strip-down, inspection, ring and liner replacement, and precision reassembly.','/assets/img/parts_engine.jpg'],
  ['Hydraulic System Service','Pump testing, valve calibration, cylinder resealing and full hydraulic circuit diagnosis.','/assets/img/parts_pump.jpg'],
  ['Transmission & Gearbox Repair','Slipping gear correction, clutch pack replacement and full gearbox overhaul services.','/assets/img/parts_transmission.jpg'],
  ['Axle, Differential & Driveline','Differential rebuild, driveshaft replacement and axle seal servicing for all heavy equipment.','/assets/img/parts_undercarriage.jpg'],
  ['Electrical & ECU Diagnostics','Sensor fault diagnosis, wiring repairs, ECU programming and full electrical system checks.','/assets/img/parts_pins.jpg'],
  ['Fuel Injection & Fuel Systems','Injector testing, common rail repair, fuel pump calibration and tank cleaning services.','/assets/img/parts_engine.jpg'],
  ['Cooling & Turbocharger Service','Radiator flush, thermostat replacement, intercooler inspection and turbo overhaul.','/assets/img/parts_filtration.jpg'],
  ['Brake & Steering Systems','Brake pad replacement, caliper overhaul, steering pump repair and wheel alignment.','/assets/img/parts_pump.jpg'],
  ['Undercarriage & Track Systems','Track tension adjustment, roller replacement, sprocket swap and track chain re-pinning.','/assets/img/parts_undercarriage.jpg'],
  ['Hydraulic Cylinder Resealing','Piston rod polishing, barrel honing and complete reseal for all cylinders and rams.','/assets/img/parts_transmission.jpg'],
  ['Boom, Arm & Attachment Service','Structural crack repairs, pin and bush replacement for dipper arms, booms and loader arms.','/assets/img/parts_pins.jpg'],
  ['Welding, Fabrication & Hard-Facing','Structural welding, hard-facing of wear surfaces and custom metalwork fabrication.','/assets/img/parts_jcb.jpg'],
  ['Engine & Hydraulic Oil Service','Scheduled oil changes with correct-grade oils and filter replacement on all machine types.','/assets/img/parts_engine.jpg'],
  ['Axle, Gear & Transmission Oil','Axle breather cleaning, gear oil flush and transmission oil service for heavy equipment.','/assets/img/parts_transmission.jpg'],
  ['Hot Mix Plant Maintenance','Drum burner calibration, conveyor belt tensioning and aggregate feeder servicing.','/assets/img/parts_filtration.jpg'],
  ['Crusher & Screening Maintenance','Jaw plate reversal, screen mesh replacement, drive belt tensioning and bearing lubrication.','/assets/img/parts_undercarriage.jpg'],
  ['Compressor & Drilling Maintenance','Valve kit replacement, piston ring service and separator element change for compressors.','/assets/img/parts_pump.jpg'],
  ['Preventive Maintenance Plans','Scheduled servicing contracts that prevent breakdowns and reduce total ownership cost.','/assets/img/parts_engine.jpg'],
  ['Machine Inspection & Health Check','Comprehensive pre-season and pre-purchase machine condition reports and defect listings.','/assets/img/parts_filtration.jpg'],
  ['AMC — Annual Maintenance Contracts','Tailored annual maintenance agreements covering all scheduled and unscheduled servicing.','/assets/img/parts_pins.jpg'],
  ['On-Site Breakdown Support','Emergency technician dispatch to your project site — minimising costly unplanned downtime.','/assets/img/parts_jcb.jpg'],
  ['On-Site Hydraulic & Welding Repair','Mobile workshop equipped for on-site hydraulic repairs and structural welding.','/assets/img/hero_services.jpg'],
];
renderServiceSection('workshop',4,'wrench','Services, Repairs &amp; Periodic Maintenance',
  'Downtime costs more than maintenance. Our fully equipped workshop in Narwal, Jammu handles everything from a quick oil service to a complete machine overhaul — while our mobile team handles on-site emergencies across J&K and Ladakh.',
  'Services & Repairs','Book Service',$repairs);

// SERVICE 5
$rentals=[
  ['Excavators','Large-tonnage hydraulic excavators for heavy earthmoving, foundation digging and trenching works.','/assets/img/parts_jcb.jpg'],
  ['Backhoe Loaders','Versatile JCB-style loaders for multi-purpose digging, loading and general construction tasks.','/assets/img/hero_services.jpg'],
  ['Hydra Cranes','Hydraulic pick-and-carry cranes for material lifting, pipe laying and steel erection on site.','/assets/img/parts_pump.jpg'],
  ['Road Rollers','Soil and asphalt compactors for road construction, embankment work and sub-base compaction.','/assets/img/parts_undercarriage.jpg'],
  ['Pavers','Asphalt paving machines for road laying with precision screed width and temperature control.','/assets/img/parts_engine.jpg'],
  ['Vibratory Rollers','Single-drum vibratory rollers for granular fill compaction and highway embankment construction.','/assets/img/parts_filtration.jpg'],
  ['Tralla / Platform Trailer','Heavy-duty low-bed trailers for safe machinery transport between project sites and across regions.','/assets/img/parts_transmission.jpg'],
  ['Motor Graders','Precision graders for road surface levelling, shoulder shaping and gravel road maintenance.','/assets/img/parts_pins.jpg'],
  ['Compressors','High-flow diesel-powered air compressors for rock drilling, sandblasting and pneumatic tool operation.','/assets/img/parts_jcb.jpg'],
];
renderServiceSection('rentals',5,'truck-monster','Machinery Rentals',
  'When capital investment is not the answer, our rental fleet gives contractors and project owners flexible, well-maintained equipment on short and long-term hire. All machines come serviced, safety-checked and ready to work.',
  'Machinery Rentals','Enquire Rental',$rentals);
?>

  </div>
</section>

<!-- FINAL CTA -->
<section class="cta-band">
  <div class="container">
    <h2 data-reveal>Not Sure Which Service You Need?</h2>
    <p data-reveal data-reveal-delay="1">Call us and describe your situation. Our team with 60+ years of experience will guide you to the right solution — fast.</p>
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
    <form action="process_lead.php" method="POST" class="lead-modal__form">
      <input type="hidden" name="service_category" id="inputCategory" value="">
      <input type="hidden" name="specific_item"    id="inputItem"     value="">
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
      <button type="submit" class="btn btn--primary" style="width:100%;margin-top:10px;display:flex;justify-content:center;">
        <i class="fas fa-paper-plane" style="margin-right:8px;"></i> Submit Enquiry
      </button>
    </form>
  </div>
</div>

</main>

<script>
document.addEventListener('DOMContentLoaded', () => {
  const modalOverlay  = document.getElementById('leadModal');
  const closeModalBtn = document.getElementById('closeModal');
  const triggers      = document.querySelectorAll('.btn-modal-trigger');
  const modalCategory = document.getElementById('modalCategory');
  const modalTitle    = document.getElementById('modalTitle');
  const inputCategory = document.getElementById('inputCategory');
  const inputItem     = document.getElementById('inputItem');
  function openModal(cat,item){
    modalCategory.textContent=cat;
    modalTitle.textContent=`Enquire for ${item}`;
    inputCategory.value=cat;
    inputItem.value=item;
    modalOverlay.classList.add('active');
    document.body.style.overflow='hidden';
  }
  function closeModal(){
    modalOverlay.classList.remove('active');
    document.body.style.overflow='';
  }
  triggers.forEach(btn=>{
    btn.addEventListener('click',(e)=>{
      e.preventDefault();
      openModal(btn.getAttribute('data-category'),btn.getAttribute('data-service'));
    });
  });
  closeModalBtn.addEventListener('click',closeModal);
  modalOverlay.addEventListener('click',(e)=>{if(e.target===modalOverlay)closeModal();});
});
</script>

<?php include 'includes/footer.php'; ?>
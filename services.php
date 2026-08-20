<?php
$pageTitle="Services | Ashwani Trading Co.";
$metaDesc="Earthmoving spare parts, lubricants, tools, repairs & rentals across J&K & Ladakh.";
$currentPage="services";
include "includes/header.php";

include "includes/data.php";
?>
<main id="main-content">
<section class="page-hero" style="background: linear-gradient(90deg, rgba(11,77,44,0.95) 0%, rgba(11,77,44,0.2) 100%), url('/assets/img/hero_services.webp') center/cover; padding: 140px 0 120px; color: #fff; text-align: left; border-bottom: 5px solid var(--gold);">
  <div class="container page-hero__inner" style="max-width: 1200px; margin: 0 auto; display: flex; flex-direction: column; align-items: flex-start;">
    <span class="tag tag--gold" style="margin-bottom: 24px; box-shadow: 0 4px 15px rgba(242,169,0,0.3);">Five Services. One Trusted Partner.</span>
    <h1 style="font-size: clamp(40px, 6vw, 72px); margin-bottom: 24px; color: #fff; line-height: 1.05; text-shadow: 0 4px 20px rgba(0,0,0,0.8); font-weight: 800; letter-spacing: -1px;">Everything Your<br><span style="color:var(--gold);">Machines Need</span></h1>
    <p style="font-size: 20px; line-height: 1.6; opacity: 0.92; text-shadow: 0 2px 10px rgba(0,0,0,0.7); max-width: 640px; font-weight: 500;">Genuine spare parts, industrial lubricants, professional tools, expert repairs and flexible equipment rentals — serving Jammu, Kashmir &amp; Ladakh for 60+ years.</p>
    <nav class="hero-svc-nav" style="display:flex; gap:10px; flex-wrap:wrap; margin-top:32px;">
      <a href="#spare-parts" class="hero-svc-link">01 — Spare Parts</a>
      <a href="#lubricants"  class="hero-svc-link">02 — Lubricants &amp; Oils</a>
      <a href="#tools"       class="hero-svc-link">03 — Tools &amp; Equipment</a>
      <a href="#workshop"    class="hero-svc-link">04 — Services &amp; Repairs</a>
      <a href="#rentals"     class="hero-svc-link">05 — Machinery Rentals</a>
    </nav>
  </div>
</section>
<section class="section section--white" id="services-detail" style="padding-top:60px;">
  <div class="container">
<?php
// SERVICE 1
echo "<div class=\"svc-section\" id=\"spare-parts\" style=\"margin-bottom:80px;\">";
echo "<div class=\"section-head section-head--svc\" data-reveal>";
echo "<span class=\"tag\"><i class=\"fas fa-cogs\"></i> Service 01</span>";
echo "<h2>Spare Parts &amp; Accessories</h2>";
echo "<p>Genuine OEM and quality-checked aftermarket spare parts for every major category of earthmoving and construction equipment. Fast sourcing, verified quality, 60+ years of expert guidance.</p>";
echo "</div><div class=\"services-grid\" style=\"margin-top:40px;\">";
$d=2;
foreach(["Excavator Spare Parts","Backhoe Loader Spare Parts","Road Roller / Compactor Spare Parts",
  "Asphalt Paver Spare Parts","Hot Mix Plant Spare Parts","Crusher & Screening Plant Spare Parts",
  "ROC / Rock Drilling Equipment Spare Parts","Compressor & Compressor Spare Parts",
  "Electricals & Auto Electricals (incl. Electric Scooter)"] as $item){ card($item,"Spare Parts & Accessories","Enquire Now",$d++,$imgs,$subs); }
echo "</div></div>";

// SERVICE 2
echo "<div class=\"svc-section\" id=\"lubricants\" style=\"margin-bottom:80px;padding-top:40px;border-top:1px solid rgba(11,77,44,0.1);\">";
echo "<div class=\"section-head section-head--svc\" data-reveal>";
echo "<span class=\"tag\"><i class=\"fas fa-oil-can\"></i> Service 02</span>";
echo "<h2>Lubricants, Oils &amp; Fluids</h2>";
echo "<p>Quality lubrication is the most cost-effective way to extend machine life. Full range of industrial-grade oils, greases, coolants and lubrication equipment — with professional specification advice.</p>";
echo "</div><div class=\"services-grid\" style=\"margin-top:40px;\">";
subHead("Oils &amp; Fluids","tint");
$d=2;
foreach(["Engine Oils","Hydraulic Oils","Gear Oils","Transmission Oils","Compressor Oils",
  "Rock Drill Oils","Greases - EP Greases - Lithium Greases","Coolants","Antifreeze","Brake Fluid"] as $item){ card($item,"Lubricants, Oils & Fluids","Enquire Now",$d++,$imgs,$subs); }
subHead("Lubrication Equipment","toolbox");
foreach(["Grease Guns","Grease Pumps","Oil Pumps","Oil Dispensers","Grease Hoses",
  "Grease Couplers","Grease Nipples","Grease Adopters","Other accessories"] as $item){ card($item,"Lubricants, Oils & Fluids","Enquire Now",$d++,$imgs,$subs); }
echo "</div></div>";

// SERVICE 3
echo "<div class=\"svc-section\" id=\"tools\" style=\"margin-bottom:80px;padding-top:40px;border-top:1px solid rgba(11,77,44,0.1);\">";
echo "<div class=\"section-head section-head--svc\" data-reveal>";
echo "<span class=\"tag\"><i class=\"fas fa-toolbox\"></i> Service 03</span>";
echo "<h2>Tools &amp; Equipment</h2>";
echo "<p>Complete spectrum of professional tools and industrial supplies — from precision hand tools and pneumatic equipment to heavy lifting gear, safety PPE and drilling wear parts.</p>";
echo "</div><div class=\"services-grid\" style=\"margin-top:40px;\">";
$d=2;
foreach(["HYDRAULIC & PNEUMATIC","BEARINGS, SEALS & INDUSTRIAL SPARES",
  "NUTS, BOLTS & FASTENERS","BELTS, CHAINS & POWER TRANSMISSION","HAND TOOLS","PNEUMATIC TOOLS",
  "POWER TOOLS","WELDING & CUTTING EQUIPMENT","LIFTING, RIGGING & MATERIAL HANDLING",
  "WORKSHOP & SKILLED-TRADE EQUIPMENT","TAPES, ADHESIVES & SEALANTS","SAFETY EQUIPMENT & PPE",
  "ELECTRICAL & AUTO ELECTRICAL","TYRES & WHEEL EQUIPMENT","DRILLING, CUTTING & WEAR TOOLS",
  "PARTS SOURCING & TECHNICAL SUPPORT","MACHINERY SALES & TRADING"] as $item){ card($item,"Tools & Equipment","Enquire Now",$d++,$imgs,$subs); }
echo "</div></div>";
?>
<?php
// SERVICE 4
echo "<div class=\"svc-section\" id=\"workshop\" style=\"margin-bottom:80px;padding-top:40px;border-top:1px solid rgba(11,77,44,0.1);\">";
echo "<div class=\"section-head section-head--svc\" data-reveal>";
echo "<span class=\"tag\"><i class=\"fas fa-wrench\"></i> Service 04</span>";
echo "<h2>Services, Repairs &amp; Maintenance</h2>";
echo "<p>Our fully equipped workshop in Narwal handles everything from a quick oil service to a complete machine overhaul. Mobile team responds to on-site emergencies across J&K and Ladakh.</p>";
echo "</div><div class=\"services-grid\" style=\"margin-top:40px;\">";

subHead("Machinery Services","cog");
$d=2;
foreach(["Engine Services & Overhauling","Hydraulic System Services","Transmission & Gearbox Services",
  "Axle, Differential & Driveline Services","Electrical & Electronic Services",
  "Fuel Injection & Fuel System Services",
  "Cooling System & Radiator Services","Air Intake & Turbocharger Services",
  "Brake System Services","Steering System Services","Undercarriage & Track System Services",
  "Final Drive & Travel Motor Services","Swing / Slew System Services",
  "Boom, Arm, Dipper & Loader Arm Services","Bucket & Attachment Services",
  "Hydraulic Cylinder Services","Hydraulic Pump & Motor Services",
  "Hydraulic Valve & Control System Services","Hydraulic Hose & Pipeline Services",
  "Chassis, Frame & Structural Repairs","Pin, Bush & Linkage Services",
  "Welding, Fabrication & Hard-Facing","Operator Cabin & Body Services",
  "Air-Conditioning (AC) & HVAC Services","Tyre, Wheel & Rim Services",
  "Lubrication, Oil & Filter Services","Preventive Maintenance Services",
  "Periodic / Scheduled Maintenance","Breakdown & Emergency Repair Services",
  "On-Site / Field Service","Machine Inspection & Health Check",
  "Pre-Purchase Machine Inspection","Machine Reconditioning & Refurbishment",
  "Complete Machine Overhauling","Spare Parts Supply & Replacement",
  "Genuine / OEM / Aftermarket Parts Services","Attachment Installation & Modification",
  "AMC / Annual Maintenance Contracts", "Paver Maintenance and Overall Service"] as $item){ card($item,"Services & Repairs","Book Service",$d++,$imgs,$subs, " - Opening & Fitting & Repairing Services"); }

subHead("Oil Services","oil-can");
foreach(["Hydraulic Oil Service","Engine Oil Service","Motor Oil Service","Axel Oil Service",
  "Transmission Oil Service","Gear oil Service","Others / All other types of oil service"] as $item){ card($item,"Oil Services","Book Service",$d++,$imgs,$subs); }

subHead("On-Site Services","truck");
foreach(["On-Site Inspection","On-Site Breakdown Support","On-Site Hydraulic Repair",
  "On-Site Welding","On-Site Maintenance","Emergency Technical Support"] as $item){ card($item,"On-Site Services","Book Service",$d++,$imgs,$subs); }
echo "</div></div>";

// SERVICE 5
echo "<div class=\"svc-section\" id=\"rentals\" style=\"margin-bottom:40px;padding-top:40px;border-top:1px solid rgba(11,77,44,0.1);\">";
echo "<div class=\"section-head section-head--svc\" data-reveal>";
echo "<span class=\"tag\"><i class=\"fas fa-truck-monster\"></i> Service 05</span>";
echo "<h2>Machinery Rentals</h2>";
echo "<p>Flexible, well-maintained equipment on short and long-term hire. All machines serviced, safety-checked and ready to work across Jammu, Kashmir &amp; Ladakh.</p>";
echo "</div><div class=\"services-grid\" style=\"margin-top:40px;\">";
$d=2;
foreach(["EXCAVATORS","BACKHOE LOADER","HYDRA","ROAD ROLLER","PAVER",
  "VIBERATOR RULER","TRALLA/ PLATFORM","MOTOR GRADER","COMPRESSOR"] as $item){ card($item,"Machinery Rentals","Enquire Rental",$d++,$imgs,$subs); }
echo "</div></div>";
?>
  </div>
</section>
<section class="cta-band">
  <div class="container">
    <h2 data-reveal>Not Sure Which Service You Need?</h2>
    <p data-reveal data-reveal-delay="1">Call us and describe your situation. Our 60+ year expert team will guide you to the right solution — fast.</p>
    <a href="tel:+919419186209" class="cta-band__phone" data-reveal data-reveal-delay="2">+91 94191 86209</a>
    <div class="cta-band__actions" data-reveal data-reveal-delay="3">
      <a href="tel:+919419186209" class="btn btn--primary"><i class="fas fa-phone-alt fa-flip-horizontal"></i> Call Now</a>
      <a href="https://wa.me/919419186209" target="_blank" rel="noopener" class="btn btn--secondary"><i class="fab fa-whatsapp"></i> WhatsApp</a>
      <a href="/contact.php" class="btn btn--white"><i class="fas fa-envelope"></i> Send Enquiry</a>
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
</main>
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

  // Highlight active hero link
  const links = document.querySelectorAll('.hero-svc-link');
  links.forEach(l => {
    l.addEventListener('click', function() {
      links.forEach(lnk => lnk.classList.remove('active'));
      this.classList.add('active');
    });
  });
});
</script>
<?php include 'includes/footer.php'; ?>



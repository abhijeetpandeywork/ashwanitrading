<?php
$pageTitle="Services | Ashwani Trading Co.";
$metaDesc="Earthmoving spare parts, lubricants, tools, repairs & rentals across J&K & Ladakh.";
$currentPage="services";
include "includes/header.php";

$imgs=[
  "Excavator"=>"/assets/img/parts_jcb.jpg","Backhoe"=>"/assets/img/parts_pump.jpg",
  "Road"=>"/assets/img/parts_undercarriage.jpg","Asphalt"=>"/assets/img/parts_engine.jpg",
  "Hot Mix"=>"/assets/img/parts_filtration.jpg","Crusher"=>"/assets/img/parts_transmission.jpg",
  "ROC"=>"/assets/img/parts_pins.jpg","Compressor"=>"/assets/img/parts_jcb.jpg",
  "Screening"=>"/assets/img/parts_undercarriage.jpg","Paver"=>"/assets/img/parts_engine.jpg",
  "Engine"=>"/assets/img/parts_engine.jpg","Hydraulic"=>"/assets/img/parts_pump.jpg",
  "Gear"=>"/assets/img/parts_transmission.jpg","Transmission"=>"/assets/img/parts_transmission.jpg",
  "Rock Drill"=>"/assets/img/parts_pins.jpg","Grease"=>"/assets/img/parts_filtration.jpg",
  "EP"=>"/assets/img/parts_filtration.jpg","Lithium"=>"/assets/img/parts_filtration.jpg",
  "Coolant"=>"/assets/img/parts_undercarriage.jpg","Antifreeze"=>"/assets/img/parts_undercarriage.jpg",
  "Brake"=>"/assets/img/parts_engine.jpg","Oil Pump"=>"/assets/img/parts_pump.jpg",
  "Oil Disp"=>"/assets/img/parts_pump.jpg","Hose"=>"/assets/img/parts_filtration.jpg",
  "Coupler"=>"/assets/img/parts_filtration.jpg","Nipple"=>"/assets/img/parts_pins.jpg",
  "Adopter"=>"/assets/img/parts_pins.jpg","Other"=>"/assets/img/parts_jcb.jpg",
  "Bearing"=>"/assets/img/parts_filtration.jpg","Nut"=>"/assets/img/parts_pins.jpg",
  "Belt"=>"/assets/img/parts_transmission.jpg","HAND"=>"/assets/img/parts_jcb.jpg",
  "PNEUMATIC"=>"/assets/img/parts_engine.jpg","POWER"=>"/assets/img/parts_pump.jpg",
  "Welding"=>"/assets/img/parts_undercarriage.jpg","Lifting"=>"/assets/img/parts_transmission.jpg",
  "Workshop"=>"/assets/img/parts_filtration.jpg","Tape"=>"/assets/img/parts_pins.jpg",
  "Safety"=>"/assets/img/parts_jcb.jpg","Electrical"=>"/assets/img/parts_engine.jpg",
  "Tyre"=>"/assets/img/parts_undercarriage.jpg","Drilling"=>"/assets/img/parts_pump.jpg",
  "Swing"=>"/assets/img/parts_transmission.jpg","Boom"=>"/assets/img/parts_pins.jpg",
  "Bucket"=>"/assets/img/parts_jcb.jpg","Cylinder"=>"/assets/img/parts_pump.jpg",
  "Valve"=>"/assets/img/parts_engine.jpg","Chassis"=>"/assets/img/parts_filtration.jpg",
  "Pin"=>"/assets/img/parts_pins.jpg","Cabin"=>"/assets/img/parts_jcb.jpg",
  "Air"=>"/assets/img/parts_engine.jpg","Final"=>"/assets/img/parts_transmission.jpg",
  "Fuel"=>"/assets/img/parts_engine.jpg","Axle"=>"/assets/img/parts_undercarriage.jpg",
  "Axel"=>"/assets/img/parts_undercarriage.jpg","Lubrication"=>"/assets/img/parts_filtration.jpg",
  "Preventive"=>"/assets/img/parts_engine.jpg","Periodic"=>"/assets/img/parts_transmission.jpg",
  "Breakdown"=>"/assets/img/parts_jcb.jpg","On-Site"=>"/assets/img/hero_services.jpg",
  "Machine"=>"/assets/img/parts_filtration.jpg","Pre-Purchase"=>"/assets/img/parts_engine.jpg",
  "Reconditioning"=>"/assets/img/parts_pump.jpg","Complete"=>"/assets/img/parts_jcb.jpg",
  "Spare Parts Supply"=>"/assets/img/parts_pins.jpg","Genuine"=>"/assets/img/parts_transmission.jpg",
  "Attachment"=>"/assets/img/parts_undercarriage.jpg","AMC"=>"/assets/img/parts_filtration.jpg",
  "Emergency"=>"/assets/img/hero_services.jpg","Steering"=>"/assets/img/parts_pump.jpg",
  "Undercarriage"=>"/assets/img/parts_undercarriage.jpg",
  "EXCAVATOR"=>"/assets/img/parts_jcb.jpg","BACKHOE"=>"/assets/img/parts_pump.jpg",
  "HYDRA"=>"/assets/img/parts_pump.jpg","ROAD ROLLER"=>"/assets/img/parts_undercarriage.jpg",
  "PAVER"=>"/assets/img/parts_engine.jpg","VIBER"=>"/assets/img/parts_filtration.jpg",
  "TRALLA"=>"/assets/img/parts_transmission.jpg","MOTOR"=>"/assets/img/parts_pins.jpg",
];

$subs=[
  "Excavator Spare Parts"=>"Track links, slew rings, bucket cylinders & hydraulic components for excavators.",
  "Backhoe Loader Spare Parts"=>"Engine, transmission, axle & hydraulic parts for all backhoe loader models.",
  "Road Roller / Compactor Spare Parts"=>"Drum bearings, vibration mounts, drive belts & compactor hydraulics.",
  "Asphalt Paver Spare Parts"=>"Screed plates, auger shafts, conveyor chains & heating elements.",
  "Hot Mix Plant Spare Parts"=>"Drum burners, filler pumps, aggregate feeders & RAP components.",
  "Crusher & Screening Plant Spare Parts"=>"Jaw plates, blow bars, screen meshes, bearings & drive components.",
  "ROC / Rock Drilling Equipment Spare Parts"=>"Drill bits, shank adapters, drill rods & hammer components.",
  "Compressor Spare Parts"=>"Pistons, rings, valves, filters & separator elements for overhaul.",
  "Engine Oils"=>"Premium mineral & synthetic engine oils for all machinery makes and grades.",
  "Hydraulic Oils"=>"ISO-grade hydraulic oils for open & closed hydraulic systems.",
  "Gear Oils"=>"High-EP gear oils for final drives, gearboxes & differentials.",
  "Transmission Oils"=>"ATF & power-shift fluids for torque converters & transmissions.",
  "Compressor Oils"=>"Reciprocating & rotary screw oils for long service intervals.",
  "Rock Drill Oils"=>"Specialist oils for extreme percussion drilling pressures.",
  "Greases"=>"General-purpose NLGI greases for workshop & site lubrication.",
  "EP Grease"=>"Extreme-pressure grease for heavily loaded joints & pin bores.",
  "Lithium Grease"=>"Water-resistant lithium complex grease for bearings & chassis.",
  "Coolants"=>"Ready-mixed coolants providing boil, freeze & corrosion protection.",
  "Antifreeze"=>"Concentrate antifreeze for harsh high-altitude winter conditions.",
  "Brake Fluid"=>"DOT-rated fluid for hydraulic disc & drum braking systems.",
  "Grease Guns"=>"Manual & pneumatic grease guns for professional lubrication.",
  "Grease Pumps"=>"Barrel & hand-lever pumps for drum-to-machine grease transfer.",
  "Oil Pumps"=>"Gear & piston pumps for efficient oil transfer & dispensing.",
  "Oil Dispensers"=>"Metered & non-metered dispensers for precise oil delivery.",
  "Grease Hoses"=>"High-pressure flexible grease hoses for all lubrication systems.",
  "Grease Couplers"=>"Lock-on & button-head couplers for fast, clean connection.",
  "Grease Nipples"=>"Standard & angle grease nipples in all thread sizes & patterns.",
  "Grease Adopters"=>"Thread adapters & extensions for hard-to-reach grease points.",
  "Other accessories"=>"Check valves, fittings, gauge kits & ancillary lubrication parts.",
  "Hydraulic components and Pneumatic components"=>"Cylinders, valves, fittings, hoses, regulators & pneumatic actuators.",
  "BEARINGS, SEALS & INDUSTRIAL SPARES"=>"Ball, roller & taper bearings; oil seals, O-rings & mechanical seals.",
  "NUTS, BOLTS & FASTENERS"=>"High-tensile bolts, lock nuts, studs & washers in metric & imperial.",
  "BELTS, CHAINS & POWER TRANSMISSION"=>"V-belts, timing belts, chains, sprockets, pulleys & couplings.",
  "HAND TOOLS"=>"Spanners, sockets, ratchets, pliers, hammers & professional sets.",
  "PNEUMATIC TOOLS"=>"Air impact wrenches, ratchets, chisels, sanders & compressor tools.",
  "POWER TOOLS"=>"Angle grinders, drills, jig saws, heat guns — corded & cordless.",
  "WELDING & CUTTING EQUIPMENT"=>"MIG/MMA welders, plasma cutters, oxy-acetylene sets & consumables.",
  "LIFTING, RIGGING & MATERIAL HANDLING"=>"Chain blocks, wire hoists, slings, shackles & rated lifting clamps.",
  "WORKSHOP & SKILLED-TRADE EQUIPMENT"=>"Hydraulic jacks, presses, pullers, tap & die sets & precision tools.",
  "TAPES, ADHESIVES & SEALANTS"=>"Thread sealants, gasket makers, retaining compounds & industrial tapes.",
  "SAFETY EQUIPMENT & PPE"=>"Helmets, boots, gloves, harnesses, vests & all site safety gear.",
  "ELECTRICAL & AUTO ELECTRICAL"=>"Cables, terminals, fuses, relays, batteries & auto-electrical parts.",
  "TYRES & WHEEL EQUIPMENT"=>"OTR tyres, rims, valve assemblies, bead breakers & TPMS equipment.",
  "DRILLING, CUTTING & WEAR TOOLS"=>"Rock bits, carbide tips, saw blades, abrasive wheels & wear plates.",
  "Engine Services & Overhauling"=>"Full strip-down, ring & liner replacement, and precision reassembly.",
  "Hydraulic System Services"=>"Pump testing, valve calibration, cylinder resealing & circuit diagnosis.",
  "Transmission & Gearbox Services"=>"Clutch pack replacement, gear correction & full gearbox overhaul.",
  "Axle, Differential & Driveline Services"=>"Differential rebuild, driveshaft replacement & axle seal servicing.",
  "Electrical & Electronic Services"=>"Wiring repairs, sensor fault diagnosis & full electrical system checks.",
  "Computer Diagnostics & ECU Services"=>"ECU programming, fault code reading & control unit repairs.",
  "Fuel Injection & Fuel System Services"=>"Injector testing, common rail repair & fuel pump calibration.",
  "Cooling System & Radiator Services"=>"Radiator flush, thermostat replacement & cooling system check.",
  "Air Intake & Turbocharger Services"=>"Intercooler inspection, air filter servicing & full turbo overhaul.",
  "Brake System Services"=>"Pad replacement, caliper overhaul, drum turning & system bleeding.",
  "Steering System Services"=>"Steering pump repair, tie rod replacement & full alignment service.",
  "Undercarriage & Track System Services"=>"Track tension, roller replacement, sprocket swap & re-pinning.",
  "Final Drive & Travel Motor Services"=>"Final drive oil change, motor repair & travel pressure testing.",
  "Swing / Slew System Services"=>"Slew ring replacement, swing motor overhaul & brake service.",
  "Boom, Arm, Dipper & Loader Arm Services"=>"Structural crack repairs & pin/bush replacement for all arms.",
  "Bucket & Attachment Services"=>"Bucket re-lining, cutting edge replacement & attachment repair.",
  "Hydraulic Cylinder Services"=>"Piston rod polishing, barrel honing & complete cylinder resealing.",
  "Hydraulic Pump & Motor Services"=>"Pump flow testing, motor rebuild & hydraulic drive system overhaul.",
  "Hydraulic Valve & Control System Services"=>"Valve body cleaning, spool replacement & pressure adjustment.",
  "Hydraulic Hose & Pipeline Services"=>"Custom hose fabrication, leak repair & pipeline pressure testing.",
  "Chassis, Frame & Structural Repairs"=>"Crack detection, frame straightening, structural welding & inspection.",
  "Pin, Bush & Linkage Services"=>"Worn pin removal, bush pressing, reaming & linkage shimming.",
  "Welding, Fabrication & Hard-Facing"=>"Structural welding, hard-facing of wear surfaces & custom fabrication.",
  "Operator Cabin & Body Services"=>"Cab glass replacement, door seals, mirror fitting & body repair.",
  "Air-Conditioning (AC) & HVAC Services"=>"AC regas, compressor repair, condenser cleaning & blower service.",
  "Tyre, Wheel & Rim Services"=>"OTR tyre fitting, rim straightening, valve replacement & balancing.",
  "Lubrication, Oil & Filter Services"=>"Full machine lube service with correct-grade oils & filter change.",
  "Preventive Maintenance Services"=>"Proactive servicing programme to minimise unplanned breakdowns.",
  "Periodic / Scheduled Maintenance"=>"Manufacturer-recommended interval-based maintenance for all machines.",
  "Breakdown & Emergency Repair Services"=>"Priority response for unexpected machine failures day or night.",
  "On-Site / Field Service"=>"Trained technician dispatched directly to your project location.",
  "Machine Inspection & Health Check"=>"Comprehensive inspection report covering all major machine systems.",
  "Pre-Purchase Machine Inspection"=>"Independent condition assessment before buying second-hand equipment.",
  "Machine Reconditioning & Refurbishment"=>"Full mechanical & structural refurbishment to working order.",
  "Complete Machine Overhauling"=>"End-to-end overhaul returning a worn machine to near-new condition.",
  "Spare Parts Supply & Replacement"=>"Genuine, OEM & quality aftermarket parts fitted by our expert team.",
  "Genuine / OEM / Aftermarket Parts Services"=>"Expert sourcing & fitting of the right-quality parts for your budget.",
  "Attachment Installation & Modification"=>"Custom attachment fitting, hydraulic routing & operator training.",
  "AMC / Annual Maintenance Contracts"=>"Tailored yearly contracts covering all scheduled & unscheduled service.",
  "Hydraulic Oil Service"=>"Full hydraulic oil flush, filter change & system top-up service.",
  "Engine Oil Service"=>"Scheduled engine oil & filter change with OEM-spec lubricants.",
  "Axel Oil Service"=>"Axle diff oil drain, flush & refill to OEM specification.",
  "Transmission Oil Service"=>"Transmission oil change, filter replacement & clutch-pack check.",
  "Gear oil Service"=>"Gearbox oil drain, breather clean & refill to correct grade.",
  "others"=>"Specialised fluid services — contact us for your specific requirement.",
  "Hot Mix Plant Maintenance"=>"Drum burner calibration, conveyor tensioning & aggregate feeder service.",
  "Crusher Maintenance"=>"Jaw plate reversal, drive belt tensioning & bearing lubrication.",
  "Screening Plant Maintenance"=>"Screen mesh replacement, vibrator shaft service & deck cleaning.",
  "Paver Maintenance"=>"Screed plate check, auger chain tensioning & hydraulic system service.",
  "Compressor Maintenance"=>"Valve kit, piston rings & separator element change for air compressors.",
  "Drilling Equipment Maintenance"=>"Rock drill service, drill rod inspection & feed mechanism overhaul.",
  "On-Site Inspection"=>"Detailed on-location inspection of machine systems & safety status.",
  "On-Site Breakdown Support"=>"Emergency technician & spares dispatched to your project site fast.",
  "On-Site Hydraulic Repair"=>"Mobile hydraulic repair — hose replacement, seal kits & pump work.",
  "On-Site Welding"=>"Field welding unit for structural crack repair & fabrication work.",
  "On-Site Maintenance"=>"Scheduled preventive maintenance at your project location.",
  "Emergency Technical Support"=>"24-hour technical helpline & priority callout for critical breakdowns.",
  "EXCAVATORS"=>"Large-tonnage hydraulic excavators for heavy digging & earthmoving.",
  "BACKHOE LOADER"=>"Versatile JCB-style loaders for multi-purpose construction tasks.",
  "HYDRA"=>"Hydraulic pick-and-carry cranes for lifting & pipe laying on site.",
  "ROAD ROLLER"=>"Soil & asphalt compactors for road construction & embankment work.",
  "PAVER"=>"Asphalt paving machines with precision screed for road laying.",
  "VIBERATOR RULER"=>"Single-drum vibratory rollers for granular fill & sub-grade compaction.",
  "TRALLA/ PLATFORM"=>"Heavy-duty low-bed trailers for safe machinery transport across regions.",
  "MOTOR GRADER"=>"Precision graders for road levelling, shoulder shaping & maintenance.",
  "COMPRESSOR"=>"Diesel-powered compressors for rock drilling, sandblasting & pneumatics.",
];

function getImg($name,&$imgs){
  foreach($imgs as $k=>$v){ if(stripos($name,$k)!==false) return $v; }
  return "/assets/img/parts_jcb.jpg";
}
function getSub($name,&$subs){ return $subs[$name] ?? "Contact us for full details on this service."; }
function card($name,$cat,$btn,$d,&$imgs,&$subs){
  $n=htmlspecialchars($name);$s=htmlspecialchars(getSub($name,$subs));$i=getImg($name,$imgs);
  
  if ($name === "Excavator Spare Parts") {
    echo "<a href=\"/excavator-spare-parts.php\" class=\"service-card\" style=\"text-align:center;border:none;width:100%;cursor:pointer;padding:0;display:block;text-decoration:none;\" data-reveal data-reveal-delay=\"{$d}\">";
    echo "<div class=\"service-card__image\" style=\"height:160px;\"><img src=\"{$i}\" alt=\"{$n}\" loading=\"lazy\"></div>";
    echo "<div class=\"service-card__body\" style=\"padding:20px;\"><h3 style=\"font-size:15px;margin-bottom:6px;color:#fff;\">{$n}</h3>";
    echo "<p style=\"font-size:13px;margin-bottom:16px;line-height:1.5;color:rgba(255,255,255,0.7);\">{$s}</p>";
    echo "<span class=\"link-enquire\" style=\"font-size:12px;font-weight:700;color:var(--gold);\">View All Parts <i class=\"fas fa-arrow-right\"></i></span>";
    echo "</div></a>";
  } else {
    echo "<button class=\"service-card btn-modal-trigger\" data-service=\"{$n}\" data-category=\"{$cat}\" style=\"text-align:center;border:none;width:100%;cursor:pointer;padding:0;\" data-reveal data-reveal-delay=\"{$d}\">";
    echo "<div class=\"service-card__image\" style=\"height:160px;\"><img src=\"{$i}\" alt=\"{$n}\" loading=\"lazy\"></div>";
    echo "<div class=\"service-card__body\" style=\"padding:20px;\"><h3 style=\"font-size:15px;margin-bottom:6px;\">{$n}</h3>";
    echo "<p style=\"font-size:13px;margin-bottom:16px;line-height:1.5;\">{$s}</p>";
    echo "<span class=\"link-enquire\" style=\"font-size:12px;font-weight:700;\">{$btn} <i class=\"fas fa-arrow-right\"></i></span>";
    echo "</div></button>";
  }
}
function subHead($label,$icon){
  echo "<div class=\"svc-sub-heading\"><div class=\"svc-sub-heading__icon\"><i class=\"fas fa-{$icon}\"></i></div><h3>{$label}</h3></div>";
}
?>
<main id="main-content">
<section class="page-hero" style="background: linear-gradient(90deg, rgba(11,77,44,0.95) 0%, rgba(11,77,44,0.2) 100%), url('/assets/img/hero_services.jpg') center/cover; padding: 140px 0 120px; color: #fff; text-align: left; border-bottom: 5px solid var(--gold);">
  <div class="container page-hero__inner" style="max-width: 1200px; margin: 0 auto; display: flex; flex-direction: column; align-items: flex-start;">
    <span class="tag tag--gold" style="margin-bottom: 24px; box-shadow: 0 4px 15px rgba(242,169,0,0.3);">Five Services. One Trusted Partner.</span>
    <h1 style="font-size: clamp(40px, 6vw, 72px); margin-bottom: 24px; color: #fff; line-height: 1.05; text-shadow: 0 4px 20px rgba(0,0,0,0.8); font-weight: 800; letter-spacing: -1px;">Everything Your<br><span style="color:var(--gold);">Machines Need</span></h1>
    <p style="font-size: 20px; line-height: 1.6; opacity: 0.92; text-shadow: 0 2px 10px rgba(0,0,0,0.7); max-width: 640px; font-weight: 500;">Genuine spare parts, industrial lubricants, professional tools, expert repairs and flexible equipment rentals — serving Jammu, Kashmir &amp; Ladakh for 60+ years.</p>
    <nav class="hero-svc-nav" style="display:flex; gap:10px; flex-wrap:wrap; margin-top:32px;">
      <a href="#spare-parts" class="hero-svc-link">01 — Spare Parts</a>
      <a href="#lubricants"  class="hero-svc-link">02 — Lubricants &amp; Oils</a>
      <a href="#tools"       class="hero-svc-link">03 — Tools &amp; Equipment</a>
      <a href="#workshop"    class="hero-svc-link">04 — Services &amp; Repairs</a>
      <a href="#rentals"     class="hero-svc-link">05 — Machinery Rentals</a>
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
echo "</div><div class=\"services-grid\" style=\"margin-top:40px;\" data-reveal>";
$d=2;
foreach(["Excavator Spare Parts","Backhoe Loader Spare Parts","Road Roller / Compactor Spare Parts",
  "Asphalt Paver Spare Parts","Hot Mix Plant Spare Parts","Crusher & Screening Plant Spare Parts",
  "ROC / Rock Drilling Equipment Spare Parts","Compressor Spare Parts"] as $item){ card($item,"Spare Parts & Accessories","Enquire Now",$d++,$imgs,$subs); }
echo "</div></div>";

// SERVICE 2
echo "<div class=\"svc-section\" id=\"lubricants\" style=\"margin-bottom:80px;padding-top:40px;border-top:1px solid rgba(11,77,44,0.1);\">";
echo "<div class=\"section-head section-head--svc\" data-reveal>";
echo "<span class=\"tag\"><i class=\"fas fa-oil-can\"></i> Service 02</span>";
echo "<h2>Lubricants, Oils &amp; Fluids</h2>";
echo "<p>Quality lubrication is the most cost-effective way to extend machine life. Full range of industrial-grade oils, greases, coolants and lubrication equipment — with professional specification advice.</p>";
echo "</div><div class=\"services-grid\" style=\"margin-top:40px;\" data-reveal>";
subHead("Oils &amp; Fluids","tint");
$d=2;
foreach(["Engine Oils","Hydraulic Oils","Gear Oils","Transmission Oils","Compressor Oils",
  "Rock Drill Oils","Greases","EP Grease","Lithium Grease","Coolants","Antifreeze","Brake Fluid"] as $item){ card($item,"Lubricants, Oils & Fluids","Enquire Now",$d++,$imgs,$subs); }
subHead("Lubrication Equipment","toolbox");
foreach(["Grease Guns","Grease Pumps","Oil Pumps","Oil Dispensers","Grease Hoses",
  "Grease Couplers","Grease Nipples","Grease Adopters","Other accessories"] as $item){ card($item,"Lubricants, Oils & Fluids","Enquire Now",$d++,$imgs,$subs); }
echo "</div></div>";

// SERVICE 3
echo "<div class=\"svc-section\" id=\"tools\" style=\"margin-bottom:80px;padding-top:40px;border-top:1px solid rgba(11,77,44,0.1);\">";
echo "<div class=\"section-head section-head--svc\" data-reveal>";
echo "<span class=\"tag\"><i class=\"fas fa-toolbox\"></i> Service 03</span>";
echo "<h2>Tools &amp; Equipment</h2>";
echo "<p>Complete spectrum of professional tools and industrial supplies — from precision hand tools and pneumatic equipment to heavy lifting gear, safety PPE and drilling wear parts.</p>";
echo "</div><div class=\"services-grid\" style=\"margin-top:40px;\" data-reveal>";
$d=2;
foreach(["Hydraulic components and Pneumatic components","BEARINGS, SEALS & INDUSTRIAL SPARES",
  "NUTS, BOLTS & FASTENERS","BELTS, CHAINS & POWER TRANSMISSION","HAND TOOLS","PNEUMATIC TOOLS",
  "POWER TOOLS","WELDING & CUTTING EQUIPMENT","LIFTING, RIGGING & MATERIAL HANDLING",
  "WORKSHOP & SKILLED-TRADE EQUIPMENT","TAPES, ADHESIVES & SEALANTS","SAFETY EQUIPMENT & PPE",
  "ELECTRICAL & AUTO ELECTRICAL","TYRES & WHEEL EQUIPMENT","DRILLING, CUTTING & WEAR TOOLS"] as $item){ card($item,"Tools & Equipment","Enquire Now",$d++,$imgs,$subs); }
echo "</div></div>";
?>
<?php
// SERVICE 4
echo "<div class=\"svc-section\" id=\"workshop\" style=\"margin-bottom:80px;padding-top:40px;border-top:1px solid rgba(11,77,44,0.1);\">";
echo "<div class=\"section-head section-head--svc\" data-reveal>";
echo "<span class=\"tag\"><i class=\"fas fa-wrench\"></i> Service 04</span>";
echo "<h2>Services, Repairs &amp; Maintenance</h2>";
echo "<p>Our fully equipped workshop in Narwal handles everything from a quick oil service to a complete machine overhaul. Mobile team responds to on-site emergencies across J&K and Ladakh.</p>";
echo "</div><div class=\"services-grid\" style=\"margin-top:40px;\" data-reveal>";

subHead("Machinery Services","cog");
$d=2;
foreach(["Engine Services & Overhauling","Hydraulic System Services","Transmission & Gearbox Services",
  "Axle, Differential & Driveline Services","Electrical & Electronic Services",
  "Computer Diagnostics & ECU Services","Fuel Injection & Fuel System Services",
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
  "AMC / Annual Maintenance Contracts"] as $item){ card($item,"Services & Repairs","Book Service",$d++,$imgs,$subs); }

subHead("Oil Services","oil-can");
foreach(["Hydraulic Oil Service","Engine Oil Service","Axel Oil Service",
  "Transmission Oil Service","Gear oil Service","others"] as $item){ card($item,"Oil Services","Book Service",$d++,$imgs,$subs); }

subHead("Transmission Repair &amp; Plant Services","industry");
foreach(["Hot Mix Plant Maintenance","Crusher Maintenance","Screening Plant Maintenance",
  "Paver Maintenance","Compressor Maintenance","Drilling Equipment Maintenance"] as $item){ card($item,"Plant Services","Book Service",$d++,$imgs,$subs); }

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
echo "</div><div class=\"services-grid\" style=\"margin-top:40px;\" data-reveal>";
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
    <p data-reveal data-reveal-delay="1">Call us and describe your situation. Our 60+ year expert team will guide you to the right solution — fast.</p>
    <a href="tel:+919419186209" class="cta-band__phone" data-reveal data-reveal-delay="2">+91 94191 86209</a>
    <div class="cta-band__actions" data-reveal data-reveal-delay="3">
      <a href="tel:+919419186209" class="btn btn--primary"><i class="fas fa-phone-alt"></i> Call Now</a>
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

<?php
$pageTitle = "Backhoe Loader Spare Parts | Ashwani Trading Co.";
$metaDesc = "Complete range of backhoe loader spare parts including engine, transmission, axle, hydraulics, attachments and more. Ashwani Trading Co.";
$currentPage = "services";
include "includes/header.php";

$backhoe_categories = [
    "01. Engine Spare Parts" => [
        "Complete Engine Assembly", "Short Block Assembly", "Long Block Assembly", "Cylinder Block", "Cylinder Head", "Cylinder Head Cover", "Cylinder Head Gasket", "Head Gasket Set", "Crankcase", "Oil Sump / Oil Pan", "Sump Gasket", "Timing Cover", "Front Cover", "Rear Oil Seal Housing", "Flywheel", "Flywheel Housing", "Engine Mounting", "Engine Overhaul Kit", "Engine Rebuild Kit", "Crankshaft", "Crankshaft Pulley", "Main Bearing", "Thrust Washer", "Connecting Rod", "Connecting Rod Bearing", "Connecting Rod Bush", "Piston", "Piston Ring", "Piston Pin / Gudgeon Pin", "Cylinder Liner", "Liner Seal", "Camshaft", "Camshaft Gear", "Camshaft Bush", "Tappet", "Push Rod", "Rocker Arm", "Rocker Shaft", "Valve", "Inlet Valve", "Exhaust Valve", "Valve Guide", "Valve Seat", "Valve Spring", "Valve Retainer", "Valve Collet", "Valve Stem Seal", "Timing Gear", "Timing Chain / Timing Belt", "Timing Tensioner", "Timing Idler", "Engine Gear", "Engine Oil Pump", "Oil Pump Gear", "Oil Pump Shaft", "Oil Strainer", "Oil Filter", "Oil Filter Housing", "Oil Cooler", "Oil Cooler Core", "Oil Pressure Relief Valve", "Oil Pressure Sensor", "Oil Dipstick", "Dipstick Tube", "Oil Filler Cap"
    ],
    "02. Fuel System Spare Parts" => [
        "Fuel Tank", "Fuel Tank Cap", "Fuel Tank Strainer", "Fuel Tank Breather", "Fuel Filter", "Fuel Filter Element", "Fuel Water Separator", "Fuel Sedimenter", "Fuel Filter Housing", "Fuel Priming Pump", "Fuel Lift Pump", "Fuel Transfer Pump", "Fuel Injection Pump", "High Pressure Fuel Pump", "Common Rail Pump", "Fuel Rail", "Fuel Injector", "Injector Nozzle", "Injector Seal", "Injector O-Ring", "Injector Copper Washer", "Fuel Pressure Regulator", "Fuel Pressure Sensor", "Fuel Shut-Off Solenoid", "Fuel Solenoid", "Fuel Control Valve", "Fuel Lines", "Fuel Pipes", "Fuel Return Pipes", "Fuel Hoses", "Fuel Hose Clamps", "Fuel Connectors", "Fuel Shut-Off Valve"
    ],
    "03. Air Intake & Turbocharger Parts" => [
        "Air Filter", "Primary Air Filter", "Secondary Air Filter", "Air Filter Element", "Air Filter Housing", "Air Filter Cover", "Air Intake Pipe", "Air Intake Hose", "Air Intake Elbow", "Air Cleaner Assembly", "Turbocharger", "Turbocharger Cartridge", "Turbocharger Core", "Turbocharger Shaft", "Turbocharger Bearing", "Turbocharger Seal", "Turbocharger Repair Kit", "Turbocharger Oil Pipe", "Turbocharger Air Pipe", "Wastegate", "Intercooler", "Charge Air Cooler", "Intake Manifold", "Intake Gasket", "Exhaust Manifold", "Exhaust Gasket", "Exhaust Pipe", "Muffler", "Silencer", "Exhaust Bellows"
    ],
    "04. Cooling System Parts" => [
        "Radiator Assembly", "Radiator Core", "Radiator Tank", "Radiator Cap", "Radiator Hose", "Upper Radiator Hose", "Lower Radiator Hose", "Water Pump", "Water Pump Housing", "Water Pump Seal", "Water Pump Bearing", "Thermostat", "Thermostat Housing", "Cooling Fan", "Fan Blade", "Fan Hub", "Fan Pulley", "Fan Belt", "Fan Tensioner", "Fan Clutch", "Viscous Fan Coupling", "Coolant Expansion Tank", "Coolant Reservoir", "Coolant Level Sensor", "Radiator Mount", "Oil Cooler", "Transmission Oil Cooler", "Hydraulic Oil Cooler", "Charge Air Cooler", "Temperature Sensor"
    ],
    "05. Transmission & Gearbox Parts" => [
        "Complete Transmission", "Transmission Housing", "Gearbox", "Gear Set", "Transmission Gear", "Input Shaft", "Output Shaft", "Counter Shaft", "Drive Shaft", "Transmission Pump", "Transmission Filter", "Transmission Oil Cooler", "Torque Converter", "Torque Converter Housing", "Torque Converter Pump", "Torque Converter Turbine", "Stator", "Transmission Clutch", "Clutch Pack", "Clutch Plate", "Friction Plate", "Steel Plate", "Clutch Piston", "Clutch Seal", "Clutch Spring", "Clutch Drum", "Synchronizer", "Synchronizer Ring", "Selector Fork", "Selector Shaft", "Selector Rod", "Range Selector", "Shuttle Assembly", "Forward/Reverse Shuttle Parts", "Solenoid Valve", "Transmission Control Valve", "Transmission Control Solenoid", "Transmission Seal Kit", "Transmission Repair Kit", "Transmission Gasket Kit", "Bearings", "Bushes", "Oil Seals", "O-Rings", "Snap Rings", "Circlips", "Shims", "Thrust Washers"
    ],
    "06. Front & Rear Axle Parts" => [
        "Front Axle Assembly", "Rear Axle Assembly", "Axle Housing", "Axle Carrier", "Differential Housing", "Differential Assembly", "Differential Gear", "Crown Wheel", "Pinion Gear", "Planetary Gear", "Sun Gear", "Planet Gear", "Planetary Carrier", "Axle Shaft", "Stub Axle", "Half Shaft", "Drive Shaft", "Propeller Shaft", "Intermediate Propeller Shaft", "Universal Joint", "U-Joint Cross", "Hub", "Wheel Hub", "Hub Bearing", "Hub Seal", "Hub Gasket", "Axle Seal", "Axle Bearing", "Axle Bush", "King Pin", "King Pin Bush", "Steering Knuckle", "Steering Arm", "Tie Rod", "Track Rod", "Track Rod End", "Drag Link", "Differential Lock Parts", "Differential Lock Solenoid", "Axle Breather", "Axle Oil Plug"
    ],
    "07. Steering System Parts" => [
        "Steering Orbitrol", "Steering Control Unit", "Steering Column", "Steering Shaft", "Steering Wheel", "Steering Pump", "Power Steering Pump", "Steering Cylinder", "Steering Cylinder Seal Kit", "Steering Ram", "Steering Hose", "Steering Pipe", "Steering Valve", "Steering Knuckle", "King Pin", "King Pin Bush", "Tie Rod", "Tie Rod End", "Drag Link", "Steering Arm", "Steering Joint", "Steering Seal", "Steering O-Ring"
    ],
    "08. Braking System Parts" => [
        "Brake Master Cylinder", "Brake Booster", "Brake Servo", "Brake Disc", "Brake Plate", "Brake Pad", "Brake Shoe", "Brake Drum", "Brake Caliper", "Brake Piston", "Brake Seal", "Brake Spring", "Brake Valve", "Brake Control Valve", "Brake Pressure Valve", "Brake Accumulator", "Brake Hose", "Brake Pipe", "Brake Line", "Brake Fluid Reservoir", "Brake Fluid Cap", "Parking Brake", "Hand Brake Assembly", "Parking Brake Cable", "Brake Switch", "Brake Pressure Sensor", "Brake Repair Kit"
    ],
    "09. Hydraulic System Parts" => [
        "Hydraulic Pump", "Main Hydraulic Pump", "Gear Pump", "Piston Pump", "Variable Displacement Pump", "Hydraulic Pump Assembly", "Hydraulic Pump Repair Kit", "Pump Seal Kit", "Pilot Pump", "Pilot Gear Pump", "Hydraulic Motor", "Hydraulic Control Valve", "Main Control Valve", "Loader Control Valve", "Backhoe Control Valve", "Pilot Control Valve", "Spool Valve", "Relief Valve", "Main Relief Valve", "Check Valve", "Pilot Valve", "Solenoid Valve", "Flow Control Valve", "Priority Valve", "Load-Sensing Valve", "Counterbalance Valve", "Safety Valve", "Hydraulic Accumulator", "Hydraulic Filter", "Hydraulic Filter Element", "Hydraulic Suction Filter", "Hydraulic Return Filter", "Hydraulic Tank", "Hydraulic Tank Cap", "Hydraulic Breather", "Hydraulic Oil Level Gauge", "Hydraulic Temperature Sensor", "Hydraulic Pressure Sensor", "Pressure Gauge", "Hydraulic Hose", "Hydraulic Pipe", "Hydraulic Tube", "Hose Assembly", "Hydraulic Fittings", "Hydraulic Couplings", "Hydraulic Adapters", "Hydraulic Clamps", "Hydraulic Pipe Clamps", "O-Rings", "Hydraulic Seals", "Hydraulic Seal Kits"
    ],
    "10. Hydraulic Cylinder Parts" => [
        "Loader Lift Cylinder", "Loader Bucket Cylinder", "Loader Tilt Cylinder", "Hydraulic Cylinder Barrel", "Cylinder Rod", "Piston", "Piston Nut", "Cylinder Head", "Cylinder Gland", "Cylinder Cap", "Piston Seal", "Rod Seal", "Wiper Seal", "Buffer Seal", "Wear Ring", "Guide Ring", "O-Ring", "Backup Ring", "Seal Kit", "Cylinder Repair Kit", "Boom Cylinder", "Dipper / Arm Cylinder", "Bucket Cylinder", "Extendable Dipper Cylinder", "Stabilizer Leg Cylinder", "Stabilizer Ram", "Stabilizer Cylinder Seal Kit", "Seals", "Bushes", "Pins"
    ],
    "11. Front Loader / Loader Arm Parts" => [
        "Loader Arm", "Loader Boom", "Loader Lift Arm", "Loader Bucket", "Loader Bucket Cylinder", "Loader Lift Cylinder", "Loader Tilt Cylinder", "Loader Control Valve", "Loader Arm Pin", "Loader Arm Bush", "Bucket Pin", "Bucket Bush", "Linkage", "Bell Crank", "Z-Bar Linkage", "Bucket Link", "Link Pin", "Link Bush", "Cross Tube", "Wear Pad", "Shim", "Retaining Pin", "Grease Nipple", "Bucket Cutting Edge", "Side Cutter", "Bucket Tooth", "Tooth Adapter", "Tooth Pin", "Tooth Retainer"
    ],
    "12. Backhoe / Rear Excavator Parts" => [
        "Backhoe Boom", "Boom Foot", "Boom Pin", "Boom Bush", "Boom Cylinder", "Boom Cylinder Pin", "Boom Wear Pad", "Boom Lock", "Boom Grease Point", "Dipper Arm", "Dipper Pin", "Dipper Bush", "Dipper Cylinder", "Dipper Cylinder Pin", "Dipper Wear Pad", "Dipper Link", "Bucket", "Bucket Pin", "Bucket Bush", "Bucket Link", "Bucket Link Pin", "Bucket Link Bush", "Connecting Link", "H-Link", "Bell Crank", "Link Plate", "Bucket Cylinder Pin", "Grease Nipple"
    ],
    "13. Stabilizer / Outrigger Parts" => [
        "Stabilizer Leg", "Stabilizer Arm", "Stabilizer Cylinder", "Stabilizer Foot", "Stabilizer Pad", "Stabilizer Pin", "Stabilizer Bush", "Stabilizer Lock", "Stabilizer Control Valve", "Stabilizer Hose", "Stabilizer Pipe", "Stabilizer Seal Kit", "Stabilizer Wear Pad", "Stabilizer Foot Plate", "Outrigger Leg", "Outrigger Cylinder", "Outrigger Pad", "Outrigger Pin", "Outrigger Bush"
    ],
    "14. Bucket & Ground Engaging Tools" => [
        "Loader Bucket", "Bucket Cutting Edge", "Cutting Edge Bolt", "Cutting Edge Nut", "Side Cutter", "Bucket Tooth", "Tooth Adapter", "Tooth Pin", "Tooth Retainer", "Wear Plate", "Corner Wear Plate", "Bucket Lip", "Bucket Reinforcement", "Digging Bucket", "Trenching Bucket", "Heavy-Duty Bucket", "Rock Bucket", "Grading Bucket", "Ditching Bucket", "Hydraulic Breaker", "Hydraulic Hammer", "Breaker Chisel", "Breaker Piston", "Breaker Seal Kit", "Breaker Bush", "Breaker Valve", "Breaker Diaphragm", "Hydraulic Auger", "Ripper", "Grapple", "Hydraulic Thumb", "Hydraulic Shear", "Quick Hitch", "Quick Coupler", "Fork Attachment"
    ],
    "15. Pins & Bushes" => [
        "Loader Arm Bush", "Loader Arm Pin", "Bucket Bush", "Bucket Pin", "Boom Bush", "Boom Pin", "Dipper Bush", "Dipper Pin", "Link Bush", "Link Pin", "Cylinder Bush", "Cylinder Pin", "Stabilizer Bush", "Stabilizer Pin", "King Pin", "King Pin Bush", "Axle Bush", "Pivot Bush", "Centre Pivot Bush", "Swing Pivot Bush", "Hinge Bush", "Bronze Bush", "Hardened Bush", "Flanged Bush", "Thrust Washer", "Shim", "Spacer", "Pin Retainer", "Lock Pin", "Circlip", "Grease Nipple"
    ],
    "16. Centre Pivot / Chassis Parts" => [
        "Centre Pivot", "Centre Pivot Pin", "Centre Pivot Bush", "Pivot Bearing", "Pivot Seal", "Chassis", "Main Frame", "Side Frame", "Cross Member", "Frame Bush", "Frame Pin", "Stabilizer Mount", "Loader Mounting", "Backhoe Mounting", "Wear Pad", "Rubber Mount", "Vibration Mount", "Mounting Bracket"
    ],
    "17. Wheels & Tyres" => [
        "Front Tyre", "Rear Tyre", "Front Wheel", "Rear Wheel", "Wheel Rim", "Wheel Disc", "Wheel Hub", "Wheel Stud", "Wheel Nut", "Wheel Bearing", "Wheel Seal", "Valve Stem", "Tyre Tube", "Tubeless Valve", "Wheel Spacer", "Wheel Centre", "Wheel Bolt"
    ],
    "18. Electrical System Parts" => [
        "Battery", "Battery Box", "Battery Cable", "Battery Terminal", "Battery Isolator", "Starter Motor", "Starter Solenoid", "Alternator", "Alternator Regulator", "Alternator Pulley", "Starter Relay", "Main Relay", "Fuse", "Fuse Box", "Circuit Breaker", "Wiring Harness", "Main Wiring Harness", "Engine Wiring Harness", "Cab Wiring Harness", "Electrical Connector", "Connector Plug", "Terminal", "Ground Cable", "Ground Strap", "Ignition Switch", "Key Switch", "Start Switch", "Stop Switch", "Combination Switch", "Light Switch", "Horn", "Horn Relay", "Reverse Alarm", "Warning Buzzer", "Beacon", "Work Light", "Head Lamp", "Tail Lamp", "Indicator Lamp", "LED Work Light", "Cabin Light"
    ],
    "19. Electronic & Sensor Parts" => [
        "ECU", "Engine ECU", "Machine ECU", "Transmission ECU", "Hydraulic Controller", "Display Monitor", "Instrument Cluster", "Digital Display", "RPM Sensor", "Crankshaft Sensor", "Camshaft Sensor", "Engine Temperature Sensor", "Coolant Temperature Sensor", "Oil Pressure Sensor", "Fuel Level Sensor", "Fuel Pressure Sensor", "Hydraulic Pressure Sensor", "Hydraulic Oil Temperature Sensor", "Transmission Temperature Sensor", "Speed Sensor", "Wheel Speed Sensor", "Position Sensor", "Throttle Sensor", "Accelerator Sensor", "Brake Switch", "Neutral Safety Switch", "Reverse Switch", "Limit Switch", "Proximity Sensor", "Solenoid", "Hydraulic Solenoid", "Fuel Solenoid", "Transmission Solenoid"
    ],
    "20. Operator Cabin & Body Parts" => [
        "Complete Cabin", "Cabin Frame", "Cabin Roof", "Cabin Door", "Door Frame", "Door Handle", "Door Lock", "Door Hinge", "Door Glass", "Front Windshield", "Rear Glass", "Side Glass", "Glass Rubber", "Window Seal", "Window Regulator", "Window Handle", "Window Wiper", "Operator Seat", "Seat Cushion", "Seat Back", "Seat Suspension", "Seat Slide", "Seat Belt", "Seat Belt Buckle", "Seat Armrest", "Headrest", "Dashboard", "Instrument Panel", "Control Panel", "Floor Mat", "Rubber Mat", "Interior Trim", "Cabin Rubber", "Cabin Mount", "Cabin Vibration Mount", "Rear-View Mirror", "Side Mirror", "Mirror Arm", "Sun Visor"
    ],
    "21. Air Conditioning & HVAC Parts" => [
        "AC Compressor", "AC Compressor Clutch", "AC Compressor Coil", "AC Condenser", "AC Evaporator", "Receiver Drier", "Expansion Valve", "AC Blower Motor", "Blower Fan", "Heater Core", "Heater Valve", "AC Pressure Switch", "AC Temperature Sensor", "AC Hose", "AC Pipe", "AC Fitting", "Cabin Filter", "AC Filter", "Fresh Air Filter", "Recirculation Filter", "AC Control Panel", "AC Relay", "AC Belt"
    ],
    "22. Filters" => [
        "Engine Oil Filter", "Air Filter", "Primary Air Filter", "Secondary Air Filter", "Fuel Filter", "Fuel Water Separator", "Hydraulic Oil Filter", "Hydraulic Return Filter", "Hydraulic Suction Filter", "Pilot Filter", "Hydraulic Breather", "Transmission Filter", "Transmission Suction Filter", "Transmission Strainer", "Cabin Air Filter", "AC Filter", "Fresh Air Filter", "Recirculation Filter"
    ],
    "23. Seals, O-Rings & Gaskets" => [
        "O-Ring", "O-Ring Kit", "Oil Seal", "Hydraulic Seal", "Mechanical Seal", "Floating Seal", "Dust Seal", "Wiper Seal", "Rod Seal", "Piston Seal", "Buffer Seal", "Wear Ring", "Backup Ring", "V-Seal", "U-Seal", "Gasket", "Copper Gasket", "Metal Gasket", "Rubber Gasket", "Head Gasket", "Exhaust Gasket", "Intake Gasket", "Manifold Gasket", "Water Pump Gasket", "Oil Pan Gasket", "Transmission Gasket", "Axle Gasket", "Differential Gasket", "Complete Gasket Set", "Engine Gasket Kit", "Hydraulic Seal Kit", "Cylinder Seal Kit", "Steering Seal Kit", "Axle Seal Kit", "Transmission Seal Kit", "Final Drive Seal Kit", "Pump Seal Kit"
    ],
    "24. Bearings" => [
        "Engine Bearing", "Main Bearing", "Connecting Rod Bearing", "Camshaft Bearing", "Water Pump Bearing", "Alternator Bearing", "Starter Bearing", "Hydraulic Pump Bearing", "Hydraulic Motor Bearing", "Transmission Bearing", "Gearbox Bearing", "Axle Bearing", "Differential Bearing", "Wheel Bearing", "Hub Bearing", "Pivot Bearing", "Thrust Bearing", "Needle Bearing", "Roller Bearing", "Ball Bearing"
    ],
    "25. Hoses, Pipes & Fittings" => [
        "Hydraulic Hose", "High Pressure Hose", "Low Pressure Hose", "Pilot Hose", "Return Hose", "Suction Hose", "Cylinder Hose", "Loader Hose", "Backhoe Hose", "Stabilizer Hose", "Radiator Hose", "Fuel Hose", "Oil Hose", "Air Intake Hose", "Turbo Hose", "Coolant Hose", "AC Hose", "AC Pipe", "Refrigerant Hose", "Hydraulic Fittings", "Hose Ends", "Elbows", "Tees", "Adapters", "Couplings", "Quick Couplers", "Pipe Clamps", "Hose Clamps", "P-Clamps", "O-Ring Face Seal Fittings"
    ],
    "26. Control Levers & Cables" => [
        "Loader Control Lever", "Backhoe Control Lever", "Hydraulic Control Lever", "Joystick", "Joystick Assembly", "Pilot Joystick", "Travel Lever", "Gear Selector", "Range Selector", "Forward/Reverse Lever", "Throttle Lever", "Throttle Cable", "Accelerator Cable", "Control Cable", "Gear Shift Cable", "Parking Brake Cable", "Bonnet Cable", "Door Cable", "Mechanical Linkage", "Control Rod", "Control Knob"
    ],
    "27. Lighting & Safety Parts" => [
        "Headlight", "Work Light", "LED Work Light", "Rear Light", "Tail Light", "Indicator", "Stop Light", "Beacon Light", "Warning Light", "Hazard Light", "Reverse Alarm", "Horn", "Emergency Stop Switch", "Safety Switch", "Seat Belt", "Fire Extinguisher Mount", "Reflector", "Warning Decal", "Safety Decal"
    ],
    "28. Hardware & General Components" => [
        "Nuts", "Bolts", "Washers", "Spring Washers", "Studs", "Screws", "Threaded Rods", "Circlips", "Snap Rings", "Retaining Rings", "Cotter Pins", "Split Pins", "Lock Pins", "Shims", "Spacers", "Bushes", "Clamps", "Brackets", "Mountings", "Rubber Mounts", "Rubber Bushes", "Sealing Washers", "Copper Washers", "Grease Nipples", "Plugs", "Caps", "Drain Plugs", "Breathers", "Hose Clamps", "Cable Ties"
    ],
    "29. Service & Maintenance Parts" => [
        "Engine Oil Filter", "Fuel Filter", "Air Filter", "Hydraulic Filter", "Transmission Filter", "Axle Oil", "Engine Oil", "Hydraulic Oil", "Transmission Oil", "Coolant", "Grease", "Gear Oil", "Brake Fluid", "AC Refrigerant", "Service Kits", "Filter Kits", "Maintenance Kits", "Engine Overhaul Kit", "Engine Gasket Kit", "Hydraulic Pump Repair Kit", "Hydraulic Cylinder Seal Kit", "Steering Seal Kit", "Transmission Repair Kit", "Axle Repair Kit", "Differential Repair Kit", "Brake Repair Kit", "Water Pump Repair Kit", "Turbocharger Repair Kit", "Injector Repair Kit", "Final Drive Repair Kit", "AC Repair Kit"
    ],
    "30. Lubrication System" => [
        "Grease Pump", "Grease Gun", "Automatic Greasing System", "Grease Tank", "Grease Hose", "Grease Pipe", "Grease Nipple", "Grease Fitting", "Lubrication Distributor", "Lubrication Metering Valve", "Central Greasing Pump", "Lubrication Filter", "Grease Cartridge"
    ],
    "31. Exhaust & Emission System" => [
        "Exhaust Manifold", "Exhaust Gasket", "Exhaust Pipe", "Muffler", "Silencer", "Exhaust Bellows", "Turbocharger", "Turbo Pipe", "DPF", "DPF Filter", "DPF Sensor", "DOC", "SCR Components", "DEF / AdBlue Tank", "DEF Pump", "DEF Injector", "DEF Filter", "NOx Sensor", "Temperature Sensor", "Pressure Sensor", "Emission Control Module"
    ],
    "32. Body, Bonnet & Exterior Parts" => [
        "Engine Bonnet", "Bonnet Cover", "Bonnet Hinge", "Bonnet Lock", "Bonnet Gas Strut", "Side Panel", "Side Cover", "Front Grill", "Rear Grill", "Fender", "Mudguard", "Step", "Footstep", "Handrail", "Ladder", "Counterweight", "Battery Box", "Tool Box", "Tool Box Lock", "Number Plate Bracket", "Rubber Trim", "Body Panel", "Mounting Bracket"
    ],
    "33. Mirrors & Glass" => [
        "Front Windshield", "Rear Glass", "Side Glass", "Door Glass", "Quarter Glass", "Glass Rubber", "Window Seal", "Window Frame", "Rear-View Mirror", "Side Mirror", "Mirror Arm", "Mirror Bracket", "Mirror Glass"
    ],
    "34. Tyres & Running Parts" => [
        "Front Tyres", "Rear Tyres", "Wheel Rims", "Wheel Discs", "Wheel Hubs", "Wheel Bearings", "Wheel Seals", "Wheel Studs", "Wheel Nuts", "Tyre Valves", "Inner Tubes", "Tubeless Valves", "Wheel Spacers"
    ],
    "35. Specialized Attachments" => [
        "Standard Backhoe Bucket", "Heavy-Duty Bucket", "Rock Bucket", "Trenching Bucket", "Grading Bucket", "Ditching Bucket", "Hydraulic Breaker", "Hydraulic Hammer", "Auger", "Ripper", "Grapple", "Hydraulic Thumb", "Fork Attachment", "Hydraulic Shear", "Quick Coupler", "Quick Hitch", "Compaction Wheel", "Sweeper Attachment", "Side Shift Attachment", "Extendable Dipper Components"
    ],
    "36. Complete Assemblies" => [
        "Complete Engine", "Engine Long Block", "Engine Short Block", "Complete Transmission", "Torque Converter", "Front Axle Assembly", "Rear Axle Assembly", "Differential Assembly", "Hydraulic Pump", "Hydraulic Control Valve", "Hydraulic Motor", "Complete Hydraulic Cylinder", "Steering Cylinder", "Loader Cylinder", "Backhoe Cylinder", "Stabilizer Cylinder", "Final Drive", "Water Pump", "Turbocharger", "Fuel Injection Pump", "Fuel Injector", "Starter Motor", "Alternator", "AC Compressor", "Radiator Assembly", "Oil Cooler", "Swing / Pivot Components", "Complete Loader Bucket", "Complete Backhoe Bucket", "Quick Coupler", "Hydraulic Breaker"
    ]
];

?>
<main id="main-content">
  <section class="page-hero" style="background: linear-gradient(90deg, rgba(11,77,44,0.95) 0%, rgba(11,77,44,0.4) 100%), url('/assets/img/hero_backhoe_parts.webp') center/cover; padding: 120px 0 100px; color: #fff; text-align: center; border-bottom: 5px solid var(--gold);">
    <div class="container page-hero__inner" style="position: relative; z-index: 2;">
      <span class="tag tag--gold" style="margin: 0 auto 24px; box-shadow: 0 4px 15px rgba(242,169,0,0.3);">Comprehensive Inventory</span>
      <h1 style="font-size: clamp(36px, 6vw, 64px); margin-bottom: 20px; color: #fff; text-shadow: 0 4px 20px rgba(0,0,0,0.8); font-weight: 800;">Backhoe Loader Spare Parts</h1>
      <p style="font-size: 18px; line-height: 1.6; opacity: 0.95; text-shadow: 0 2px 10px rgba(0,0,0,0.7); max-width: 700px; margin: 0 auto;">JCB | CASE | CAT | Mahindra | Escorts | Tata Hitachi | Komatsu | New Holland | John Deere | Terex Victra | Volvo | Hyundai | SANY | XCMG | LiuGong | L&T | Other Major Brands</p>
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
        <?php foreach($backhoe_categories as $cat_name => $items): ?>
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
        <a href="tel:+919419186209" class="btn btn--primary"><i class="fas fa-phone-alt fa-flip-horizontal"></i> Call +91 94191 86209</a>
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



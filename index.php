<?php 
$pageTitle = "Home | Ashwani Trading Co. — Spare Parts Experts";
$currentPage = "home";
include 'includes/header.php'; 
?>

<!-- ============================================================
     WORLD-CLASS HERO SLIDER SECTION
     ============================================================ -->
<section class="hero-slider" id="hero">

    <!-- === Slide 1: JCB Parts === -->
    <div class="slide slide-1 active">
        <div class="slide-grid"></div>
    </div>

    <!-- === Slide 2: Road Construction === -->
    <div class="slide slide-2">
        <div class="slide-grid"></div>
    </div>

    <!-- === Slide 3: Mining & Drilling === -->
    <div class="slide slide-3">
        <div class="slide-grid"></div>
    </div>

    <!-- === Decorative SVG Gears (Psychological: Signals precision engineering) === -->
    <svg class="hero-deco-gear" viewBox="0 0 200 200" xmlns="http://www.w3.org/2000/svg" fill="white">
        <path d="M100 10 L110 30 L130 25 L125 45 L145 50 L135 65 L150 78 L132 83 L132 103 L115 100 L108 120 L92 110 L80 128 L72 112 L52 118 L55 98 L35 90 L50 78 L40 60 L60 58 L62 38 L80 48 L92 32 Z"/>
        <circle cx="100" cy="100" r="28" fill="white"/>
        <circle cx="100" cy="100" r="16" fill="none" stroke="black" stroke-width="2" opacity="0.2"/>
    </svg>

    <svg class="hero-deco-bolt" viewBox="0 0 100 100" xmlns="http://www.w3.org/2000/svg" fill="white">
        <path d="M50 5 A45 45 0 1 1 49.99 5 Z" opacity="0.5"/>
        <rect x="44" y="15" width="12" height="45" rx="6"/>
        <polygon points="50,55 35,78 46,78 46,95 65,68 53,68"/>
    </svg>

    <!-- === Hero Content Overlay === -->
    <div class="hero-content-wrapper">
        <div class="hero-layout container">

            <!-- LEFT: Text Content -->
            <div class="hero-text">
                <div class="hero-badge">
                    <span class="dot"></span>
                    <span id="slide-badge">JCB Spare Parts Specialists</span>
                </div>

                <h1 class="hero-main-title">
                    <span id="slide-line1">SPARE</span><br>
                    <span class="highlight" id="slide-line2">PARTS</span><br>
                    <span id="slide-line3">EXPERTS</span>
                </h1>

                <p class="hero-subtitle" id="slide-sub">Est. 1960 · Jammu, J&K</p>

                <p class="hero-description" id="slide-desc">
                    60+ years of trust. Genuine and premium aftermarket spare parts for JCB, Road Rollers, Drill Rods, and all heavy earthmoving machinery. Serving Jammu, Kashmir &amp; Ladakh.
                </p>

                <div class="hero-actions">
                    <a href="catalog.php" class="btn btn-primary">
                        <i class="fas fa-th-large"></i> Browse Parts Catalog
                    </a>
                    <a href="contact.php" class="btn btn-ghost">
                        <i class="fas fa-headset"></i> Get Expert Help
                    </a>
                </div>

                <div class="hero-stats">
                    <div class="stat-item">
                        <span class="stat-number">60+</span>
                        <span class="stat-label">Years of Trust</span>
                    </div>
                    <div class="stat-item">
                        <span class="stat-number">5000+</span>
                        <span class="stat-label">Parts in Stock</span>
                    </div>
                    <div class="stat-item">
                        <span class="stat-number">3</span>
                        <span class="stat-label">Regions Served</span>
                    </div>
                </div>
            </div>

            <!-- RIGHT: Glassmorphism Lead Form -->
            <div class="hero-form-card">
                <p class="form-title">Request a Parts Quote</p>
                <p class="form-subtitle">Tell us what you need — our experts respond within hours.</p>
                <form class="lead-form" id="hero-lead-form">
                    <div class="form-group">
                        <input type="text" name="name" id="h-name" class="form-control" placeholder="Your Full Name *" required>
                    </div>
                    <div class="form-group">
                        <input type="tel" name="phone" id="h-phone" class="form-control" placeholder="Phone Number *" required>
                    </div>
                    <div class="form-group">
                        <select name="part_category" id="h-category" class="form-control form-select-native">
                            <option value="" disabled selected>Select Part Category</option>
                            <option>JCB Spare Parts</option>
                            <option>Road Roller Parts</option>
                            <option>Drill Rods & Bits</option>
                            <option>Hydraulic Components</option>
                            <option>Engine & Filtration Parts</option>
                            <option>Undercarriage Parts</option>
                            <option>Other / Not Sure</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <input type="text" name="part_name" id="h-part" class="form-control" placeholder="Part Name / Model / Part No.">
                    </div>
                    <button type="submit" class="btn btn-primary" style="width:100%; margin-top: 6px; font-size: 1rem;">
                        <i class="fas fa-paper-plane"></i> Send My Requirement
                    </button>
                    <p id="form-status" style="margin-top:12px; font-size:0.85rem; text-align:center; color: var(--gold-400); display:none;"></p>
                </form>
            </div>

        </div>
    </div>

    <!-- Slider Arrows -->
    <div class="slider-arrows">
        <button class="slider-arrow" id="prev-slide" aria-label="Previous Slide">
            <i class="fas fa-chevron-left"></i>
        </button>
        <button class="slider-arrow" id="next-slide" aria-label="Next Slide">
            <i class="fas fa-chevron-right"></i>
        </button>
    </div>

    <!-- Slider Dots -->
    <div class="slider-controls">
        <span class="slider-dot active" data-slide="0"></span>
        <span class="slider-dot" data-slide="1"></span>
        <span class="slider-dot" data-slide="2"></span>
    </div>

    <!-- Scroll Hint -->
    <div class="scroll-hint">
        <span class="scroll-line"></span>
        <span>Scroll</span>
        <div class="scroll-chevrons">
            <span></span>
            <span></span>
        </div>
    </div>

</section>

<!-- ============================================================
     WHY CHOOSE US — Trust Signals
     ============================================================ -->
<section class="section section-bg">
    <div class="container">
        <div class="section-header">
            <span class="section-tag">Why Choose ATC</span>
            <h2 class="section-title">The Region's Most <span>Trusted</span> Parts Supplier</h2>
            <p class="section-desc">We've powered construction projects across Jammu, Kashmir &amp; Ladakh for over six decades. Here's why contractors and fleet owners trust us.</p>
        </div>
        <div class="features-grid">
            <div class="feature-card">
                <div class="icon-wrapper"><i class="fas fa-shield-check feature-icon"></i></div>
                <h3>Genuine Quality Assured</h3>
                <p>Every part we supply — OEM or aftermarket — is quality-checked. We do not deal in substandard components that can damage your machinery.</p>
                <a href="about.php" class="card-link">Our Promise <i class="fas fa-arrow-right"></i></a>
            </div>
            <div class="feature-card">
                <div class="icon-wrapper"><i class="fas fa-warehouse feature-icon"></i></div>
                <h3>Massive Live Inventory</h3>
                <p>Thousands of spare parts ready to dispatch across all machine categories. Less waiting means less downtime for your project.</p>
                <a href="catalog.php" class="card-link">See Catalog <i class="fas fa-arrow-right"></i></a>
            </div>
            <div class="feature-card">
                <div class="icon-wrapper"><i class="fas fa-user-tie feature-icon"></i></div>
                <h3>60+ Years Experience</h3>
                <p>Our experts know every bolt, seal, and hydraulic spec. We help you identify the exact part by machine model, serial, or part number.</p>
                <a href="about.php" class="card-link">Our Story <i class="fas fa-arrow-right"></i></a>
            </div>
            <div class="feature-card">
                <div class="icon-wrapper"><i class="fas fa-map-marked-alt feature-icon"></i></div>
                <h3>Region-Wide Reach</h3>
                <p>Extensive supply network across Jammu, Kashmir &amp; Ladakh. Wherever your project is, we reach you with the right parts, fast.</p>
                <a href="contact.php" class="card-link">Find Us <i class="fas fa-arrow-right"></i></a>
            </div>
        </div>
    </div>
</section>

<!-- ============================================================
     SPARE PARTS CATEGORIES — Core Product Section
     ============================================================ -->
<section class="section">
    <div class="container">
        <div class="section-header">
            <span class="section-tag">Our Inventory</span>
            <h2 class="section-title">Spare Parts We <span>Specialize</span> In</h2>
            <p class="section-desc">From pins and bushes to complete hydraulic assemblies — if it runs on heavy machinery, we have the part.</p>
        </div>
        <div class="features-grid">
            <div class="feature-card">
                <div class="icon-wrapper"><i class="fas fa-hammer feature-icon"></i></div>
                <h3>JCB Spare Parts</h3>
                <p>Pins, bushes, bucket teeth, hydraulic pumps, seal kits, transmission parts, and more for all JCB models operating across the region.</p>
                <a href="contact.php?req=jcb" class="card-link">Get a Quote <i class="fas fa-arrow-right"></i></a>
            </div>
            <div class="feature-card">
                <div class="icon-wrapper"><i class="fas fa-truck-moving feature-icon"></i></div>
                <h3>Road Roller Parts</h3>
                <p>Scrapers, bearings, hydraulic motors, compaction drums, and vibration components for soil and asphalt compactors.</p>
                <a href="contact.php?req=roadroller" class="card-link">Get a Quote <i class="fas fa-arrow-right"></i></a>
            </div>
            <div class="feature-card">
                <div class="icon-wrapper"><i class="fas fa-drafting-compass feature-icon"></i></div>
                <h3>Drill Rods & Bits</h3>
                <p>High-strength, wear-resistant drill rods, shank adapters, couplings, and bits engineered for extreme torque and rock conditions.</p>
                <a href="contact.php?req=drillrods" class="card-link">Get a Quote <i class="fas fa-arrow-right"></i></a>
            </div>
            <div class="feature-card">
                <div class="icon-wrapper"><i class="fas fa-cogs feature-icon"></i></div>
                <h3>Hydraulic Components</h3>
                <p>Pumps, cylinders, control valves, hoses, fittings, and O-ring kits to keep your hydraulic systems running at peak performance.</p>
                <a href="contact.php?req=hydraulics" class="card-link">Get a Quote <i class="fas fa-arrow-right"></i></a>
            </div>
            <div class="feature-card">
                <div class="icon-wrapper"><i class="fas fa-oil-can feature-icon"></i></div>
                <h3>Engine & Filtration</h3>
                <p>Oil, fuel &amp; air filters, gaskets, overhaul kits, and engine components to maintain peak uptime and avoid costly failures.</p>
                <a href="contact.php?req=engine" class="card-link">Get a Quote <i class="fas fa-arrow-right"></i></a>
            </div>
            <div class="feature-card">
                <div class="icon-wrapper"><i class="fas fa-link feature-icon"></i></div>
                <h3>Undercarriage Parts</h3>
                <p>Track chains, rollers, idlers, sprockets, and track shoes for crawler excavators, dozers, and piling rigs.</p>
                <a href="contact.php?req=undercarriage" class="card-link">Get a Quote <i class="fas fa-arrow-right"></i></a>
            </div>
        </div>
        <div style="text-align:center; margin-top: 50px;">
            <a href="catalog.php" class="btn btn-outline">View Full Parts Catalog <i class="fas fa-long-arrow-alt-right"></i></a>
        </div>
    </div>
</section>

<!-- ============================================================
     CTA BANNER — Urgency + Social Proof
     ============================================================ -->
<section style="background: linear-gradient(135deg, var(--green-900) 0%, var(--green-800) 100%); padding: 80px 0; position: relative; overflow: hidden;">
    <!-- SVG Decoration inside CTA -->
    <svg style="position:absolute;right:-60px;top:-60px;width:350px;opacity:0.05;" viewBox="0 0 200 200" fill="white" xmlns="http://www.w3.org/2000/svg">
        <circle cx="100" cy="100" r="95" fill="none" stroke="white" stroke-width="3"/>
        <circle cx="100" cy="100" r="70" fill="none" stroke="white" stroke-width="2"/>
        <circle cx="100" cy="100" r="40" fill="white"/>
    </svg>
    <div class="container" style="text-align:center; position:relative; z-index:2;">
        <span style="display:inline-block; background:rgba(245,179,1,0.15); border:1px solid rgba(245,179,1,0.3); color:var(--gold-400); padding:6px 18px; border-radius:50px; font-size:0.78rem; font-weight:800; letter-spacing:0.12em; text-transform:uppercase; margin-bottom:22px;">24/7 Parts Support</span>
        <h2 style="color:white; font-size: clamp(2rem, 4vw, 3rem); margin-bottom:18px; letter-spacing:-0.03em;">Your Equipment Can't Afford Downtime</h2>
        <p style="color:rgba(255,255,255,0.65); font-size:1.1rem; max-width:600px; margin:0 auto 40px; line-height:1.8;">Call us now or send your part requirement. We will get back to you with availability and pricing fast — because every hour of downtime costs money.</p>
        <div style="display:flex; gap:20px; justify-content:center; flex-wrap:wrap;">
            <a href="tel:+919419186209" class="btn btn-primary"><i class="fas fa-phone-alt"></i> Call Now: +91 9419186209</a>
            <a href="contact.php" class="btn btn-ghost"><i class="fas fa-envelope"></i> Send Requirements</a>
        </div>
    </div>
</section>

<?php include 'includes/footer.php'; ?>

<?php 
$pageTitle = "Home | Ashwani Trading Co. — Spare Parts Experts, Jammu";
$currentPage = "home";
include 'includes/header.php'; 
?>

<!-- ============================================================
     HERO SECTION — HORIZONTAL Background Image Slider
     ============================================================ -->
<section class="hero-section" id="hero">

    <!-- === HORIZONTAL SLIDING TRACK === -->
    <!-- All 3 slides sit side by side. JS moves the track left/right -->
    <div class="slider-track-wrap">
        <div class="slider-track" id="slider-track">

            <!-- SLIDE 1: Heavy Machinery Spare Parts Workshop -->
            <div class="h-slide">
                <img src="https://images.unsplash.com/photo-1581094288338-2314dddb7ece?w=1920&q=85&auto=format&fit=crop" 
                     alt="Spare Parts Workshop" loading="eager">
                <div class="slide-overlay"></div>
            </div>

            <!-- SLIDE 2: Industrial Gears & Metal Parts -->
            <div class="h-slide">
                <img src="https://images.unsplash.com/photo-1565689157206-0fddef7589a2?w=1920&q=85&auto=format&fit=crop" 
                     alt="Industrial Gears and Machine Parts" loading="lazy">
                <div class="slide-overlay overlay-alt"></div>
            </div>

            <!-- SLIDE 3: Road Construction Equipment -->
            <div class="h-slide">
                <img src="https://images.unsplash.com/photo-1504307651254-35680f356db4?w=1920&q=85&auto=format&fit=crop" 
                     alt="Road Construction Machinery" loading="lazy">
                <div class="slide-overlay overlay-green"></div>
            </div>

        </div>
    </div>

    <!-- === HERO CONTENT (ALWAYS ON TOP) === -->
    <div class="hero-content">
        <div class="hero-inner">

            <!-- LEFT: Text Side -->
            <div class="hero-left">

                <div class="hero-badge">
                    <span class="badge-dot"></span>
                    <span id="badge-text">JCB Spare Parts Specialists</span>
                </div>

                <h1 class="hero-title">
                    <span class="title-top" id="title-top">GENUINE</span>
                    <span class="title-mid gold-glow" id="title-mid">SPARE PARTS</span>
                    <span class="title-bot" id="title-bot">DELIVERED FAST</span>
                </h1>

                <p class="hero-desc" id="hero-desc">
                    60+ years of trust. Genuine &amp; aftermarket spare parts for JCB, Road Rollers, Drill Rods &amp; all earthmoving machinery. Serving Jammu, Kashmir &amp; Ladakh.
                </p>

                <div class="hero-btns">
                    <a href="catalog.php" class="btn btn-gold">
                        <i class="fas fa-th-large"></i> Browse Parts Catalog
                    </a>
                    <a href="tel:+919419186209" class="btn btn-outline-white">
                        <i class="fas fa-phone-alt"></i> Call Now
                    </a>
                </div>

                <div class="hero-stats-row">
                    <div class="hstat">
                        <strong>60+</strong><span>Years of Trust</span>
                    </div>
                    <div class="hstat-divider"></div>
                    <div class="hstat">
                        <strong>5000+</strong><span>Parts in Stock</span>
                    </div>
                    <div class="hstat-divider"></div>
                    <div class="hstat">
                        <strong>J&amp;K &amp; Ladakh</strong><span>Regions Served</span>
                    </div>
                </div>

            </div>

            <!-- RIGHT: Glassmorphism Quote Form -->
            <div class="hero-right">
                <div class="glass-form-card">
                    <div class="form-shine-bar"></div>
                    <div class="form-header">
                        <div class="form-icon-wrap"><i class="fas fa-bolt"></i></div>
                        <div>
                            <h3 class="form-card-title">Get Instant Quote</h3>
                            <p class="form-card-sub">Our experts reply within hours</p>
                        </div>
                    </div>
                    <form class="lead-form" id="hero-lead-form">
                        <div class="fg">
                            <div class="input-icon-wrap">
                                <i class="fas fa-user input-icon"></i>
                                <input type="text" name="name" class="form-inp" placeholder="Your Full Name *" required>
                            </div>
                        </div>
                        <div class="fg">
                            <div class="input-icon-wrap">
                                <i class="fas fa-phone-alt input-icon"></i>
                                <input type="tel" name="phone" class="form-inp" placeholder="Phone Number *" required>
                            </div>
                        </div>
                        <div class="fg">
                            <div class="input-icon-wrap">
                                <i class="fas fa-layer-group input-icon"></i>
                                <select name="part_category" class="form-inp form-sel">
                                    <option value="" disabled selected>Select Part Category</option>
                                    <option>JCB Spare Parts</option>
                                    <option>Road Roller Parts</option>
                                    <option>Drill Rods &amp; Bits</option>
                                    <option>Hydraulic Components</option>
                                    <option>Engine &amp; Filtration</option>
                                    <option>Undercarriage Parts</option>
                                    <option>Other / Not Sure</option>
                                </select>
                            </div>
                        </div>
                        <div class="fg">
                            <div class="input-icon-wrap">
                                <i class="fas fa-search input-icon"></i>
                                <input type="text" name="part_name" class="form-inp" placeholder="Part Name / Model / Part No.">
                            </div>
                        </div>
                        <button type="submit" class="btn-submit" id="submit-btn">
                            <i class="fas fa-paper-plane"></i> Send My Requirement
                        </button>
                        <p id="form-status" style="display:none; margin-top:10px; font-size:0.85rem; text-align:center;"></p>
                    </form>
                </div>
            </div>

        </div>
    </div>

    <!-- === ARROW CONTROLS === -->
    <button class="slide-arrow left-arrow" id="prev-slide" aria-label="Previous Slide">
        <i class="fas fa-chevron-left"></i>
    </button>
    <button class="slide-arrow right-arrow" id="next-slide" aria-label="Next Slide">
        <i class="fas fa-chevron-right"></i>
    </button>

    <!-- === DOT NAVIGATION === -->
    <div class="slide-dots">
        <button class="sdot active" data-s="0"></button>
        <button class="sdot" data-s="1"></button>
        <button class="sdot" data-s="2"></button>
    </div>

    <!-- === PROGRESS BAR === -->
    <div class="slide-progress-bar" id="progress-bar"></div>

    <!-- === SCROLL INDICATOR === -->
    <div class="scroll-indicator">
        <span>Scroll</span>
        <div class="scroll-mouse"><div class="scroll-wheel"></div></div>
    </div>

    <!-- === DECORATIVE SVG GEAR === -->
    <svg class="deco-gear" viewBox="0 0 200 200" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
        <path d="M97 5l8 18 18-5-2 19 18 7-12 15 12 15-18 7 2 19-18-5-8 18-8-18-18 5 2-19-18-7 12-15-12-15 18-7-2-19 18 5z" fill="rgba(255,255,255,0.07)"/>
        <circle cx="100" cy="100" r="28" fill="rgba(255,255,255,0.06)"/>
        <circle cx="100" cy="100" r="12" fill="rgba(245,179,1,0.1)"/>
    </svg>

</section>

<!-- ============================================================
     WHY CHOOSE US
     ============================================================ -->
<section class="section section-bg">
    <div class="container">
        <div class="section-header">
            <span class="section-tag">Why Choose ATC</span>
            <h2 class="section-title">The Region's Most <span>Trusted</span> Parts Supplier</h2>
            <p class="section-desc">60+ years powering construction across Jammu, Kashmir &amp; Ladakh. Here's why every contractor trusts us.</p>
        </div>
        <div class="features-grid">
            <div class="feature-card">
                <div class="icon-wrapper"><i class="fas fa-shield-alt feature-icon"></i></div>
                <h3>Genuine Quality Assured</h3>
                <p>Every OEM or aftermarket part is quality-checked. Zero compromise on components that power your equipment.</p>
                <a href="about.php" class="card-link">Our Promise <i class="fas fa-arrow-right"></i></a>
            </div>
            <div class="feature-card">
                <div class="icon-wrapper"><i class="fas fa-warehouse feature-icon"></i></div>
                <h3>Massive Live Inventory</h3>
                <p>Thousands of parts in stock — less waiting, less downtime, more productivity on your site.</p>
                <a href="catalog.php" class="card-link">See Catalog <i class="fas fa-arrow-right"></i></a>
            </div>
            <div class="feature-card">
                <div class="icon-wrapper"><i class="fas fa-user-tie feature-icon"></i></div>
                <h3>Expert Identification</h3>
                <p>Find any part by model, serial number, or description. 60+ years of hands-on field experience.</p>
                <a href="about.php" class="card-link">Our Story <i class="fas fa-arrow-right"></i></a>
            </div>
            <div class="feature-card">
                <div class="icon-wrapper"><i class="fas fa-map-marked-alt feature-icon"></i></div>
                <h3>Region-Wide Reach</h3>
                <p>Serving Jammu, Kashmir &amp; Ladakh with a strong supply network wherever your project is located.</p>
                <a href="contact.php" class="card-link">Find Us <i class="fas fa-arrow-right"></i></a>
            </div>
        </div>
    </div>
</section>

<!-- ============================================================
     SPARE PARTS CATEGORIES
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
                <p>Pins, bushes, bucket teeth, hydraulic pumps, seal kits, transmission parts for all JCB models.</p>
                <a href="contact.php?req=jcb" class="card-link">Get Quote <i class="fas fa-arrow-right"></i></a>
            </div>
            <div class="feature-card">
                <div class="icon-wrapper"><i class="fas fa-truck-moving feature-icon"></i></div>
                <h3>Road Roller Parts</h3>
                <p>Scrapers, bearings, hydraulic motors, compaction drums for soil and asphalt compactors.</p>
                <a href="contact.php?req=roadroller" class="card-link">Get Quote <i class="fas fa-arrow-right"></i></a>
            </div>
            <div class="feature-card">
                <div class="icon-wrapper"><i class="fas fa-drafting-compass feature-icon"></i></div>
                <h3>Drill Rods &amp; Bits</h3>
                <p>High-strength drill rods, shank adapters, couplings, and bits for rock drilling.</p>
                <a href="contact.php?req=drillrods" class="card-link">Get Quote <i class="fas fa-arrow-right"></i></a>
            </div>
            <div class="feature-card">
                <div class="icon-wrapper"><i class="fas fa-cogs feature-icon"></i></div>
                <h3>Hydraulic Components</h3>
                <p>Pumps, cylinders, control valves, hoses, fittings, and O-ring kits for all systems.</p>
                <a href="contact.php?req=hydraulics" class="card-link">Get Quote <i class="fas fa-arrow-right"></i></a>
            </div>
            <div class="feature-card">
                <div class="icon-wrapper"><i class="fas fa-oil-can feature-icon"></i></div>
                <h3>Engine &amp; Filtration</h3>
                <p>Oil, fuel &amp; air filters, gaskets, overhaul kits, and engine parts to minimize downtime.</p>
                <a href="contact.php?req=engine" class="card-link">Get Quote <i class="fas fa-arrow-right"></i></a>
            </div>
            <div class="feature-card">
                <div class="icon-wrapper"><i class="fas fa-link feature-icon"></i></div>
                <h3>Undercarriage Parts</h3>
                <p>Track chains, rollers, idlers, sprockets, and track shoes for crawler excavators.</p>
                <a href="contact.php?req=undercarriage" class="card-link">Get Quote <i class="fas fa-arrow-right"></i></a>
            </div>
        </div>
        <div style="text-align:center; margin-top: 50px;">
            <a href="catalog.php" class="btn btn-outline">View Full Parts Catalog &nbsp;<i class="fas fa-long-arrow-alt-right"></i></a>
        </div>
    </div>
</section>

<!-- ============================================================
     CTA BANNER
     ============================================================ -->
<section class="cta-banner">
    <div class="cta-inner container">
        <div class="cta-text">
            <span class="section-tag" style="background:rgba(245,179,1,0.15); border-color:rgba(245,179,1,0.3); color:var(--gold-400);">24/7 Parts Support</span>
            <h2>Your Equipment Can't Afford Downtime</h2>
            <p>Call us now or send your requirement. We respond fast — because every hour of downtime costs money.</p>
        </div>
        <div class="cta-actions">
            <a href="tel:+919419186209" class="btn btn-gold"><i class="fas fa-phone-alt"></i> +91 9419186209</a>
            <a href="contact.php" class="btn btn-outline-white-dark"><i class="fas fa-envelope"></i> Send Requirements</a>
        </div>
    </div>
</section>

<?php include 'includes/footer.php'; ?>

<?php 
$pageTitle = "Home | Ashwani Trading Co. — Spare Parts Experts, Jammu";
$currentPage = "home";
include 'includes/header.php'; 
?>

<!-- ============================================================
     HERO SECTION — Full-Screen Background Image Slider
     ============================================================ -->
<section class="hero-section" id="hero">

    <!-- ===== BACKGROUND IMAGE SLIDES ===== -->
    <div class="slide-container">

        <div class="bg-slide active" id="slide-0">
            <img src="https://images.unsplash.com/photo-1541625602330-2277a4c46182?w=1920&q=80&auto=format&fit=crop" alt="JCB Heavy Machinery" loading="eager">
            <div class="slide-overlay"></div>
        </div>

        <div class="bg-slide" id="slide-1">
            <img src="https://images.unsplash.com/photo-1504307651254-35680f356db4?w=1920&q=80&auto=format&fit=crop" alt="Road Construction Equipment" loading="lazy">
            <div class="slide-overlay"></div>
        </div>

        <div class="bg-slide" id="slide-2">
            <img src="https://images.unsplash.com/photo-1558618666-fcd25c85cd64?w=1920&q=80&auto=format&fit=crop" alt="Drill Rods Mining" loading="lazy">
            <div class="slide-overlay"></div>
        </div>

    </div>

    <!-- ===== HERO CONTENT ON TOP ===== -->
    <div class="hero-content">
        <div class="hero-inner">

            <!-- LEFT: Main Message -->
            <div class="hero-left">

                <!-- Animated Badge -->
                <div class="hero-badge">
                    <span class="badge-dot"></span>
                    <span class="badge-text" id="badge-text">JCB Spare Parts Specialists</span>
                </div>

                <!-- Main Title — Dynamic per slide -->
                <h1 class="hero-title">
                    <span class="title-top" id="title-top">GENUINE</span>
                    <span class="title-mid gold-glow" id="title-mid">SPARE PARTS</span>
                    <span class="title-bot" id="title-bot">DELIVERED FAST</span>
                </h1>

                <!-- Description -->
                <p class="hero-desc" id="hero-desc">
                    60+ years of trust. Genuine &amp; aftermarket spare parts for JCB, Road Rollers, Drill Rods &amp; all earthmoving machinery. Serving Jammu, Kashmir &amp; Ladakh.
                </p>

                <!-- CTA Buttons -->
                <div class="hero-btns">
                    <a href="catalog.php" class="btn btn-gold">
                        <i class="fas fa-th-large"></i> Browse Parts Catalog
                    </a>
                    <a href="tel:+919419186209" class="btn btn-outline-white">
                        <i class="fas fa-phone-alt"></i> Call Now
                    </a>
                </div>

                <!-- Trust Stats Row -->
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
                        <strong>J&K &amp; Ladakh</strong><span>Regions Served</span>
                    </div>
                </div>

            </div>

            <!-- RIGHT: Glassmorphism Quote Form -->
            <div class="hero-right">
                <div class="glass-form-card">

                    <!-- Shining top border animation -->
                    <div class="form-shine-bar"></div>

                    <div class="form-header">
                        <div class="form-icon-wrap">
                            <i class="fas fa-bolt"></i>
                        </div>
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

    <!-- ===== SLIDER CONTROLS ===== -->
    <!-- Navigation Arrows -->
    <button class="slide-arrow left-arrow" id="prev-slide" aria-label="Previous">
        <i class="fas fa-chevron-left"></i>
    </button>
    <button class="slide-arrow right-arrow" id="next-slide" aria-label="Next">
        <i class="fas fa-chevron-right"></i>
    </button>

    <!-- Progress Dots -->
    <div class="slide-dots">
        <button class="sdot active" data-s="0" aria-label="Slide 1"></button>
        <button class="sdot" data-s="1" aria-label="Slide 2"></button>
        <button class="sdot" data-s="2" aria-label="Slide 3"></button>
    </div>

    <!-- Progress Bar (Auto-slide timer visual) -->
    <div class="slide-progress-bar" id="progress-bar"></div>

    <!-- Scroll Indicator -->
    <div class="scroll-indicator">
        <span>Scroll</span>
        <div class="scroll-mouse">
            <div class="scroll-wheel"></div>
        </div>
    </div>

    <!-- SVG Decorative Gear (Bottom Right) -->
    <svg class="deco-gear" viewBox="0 0 200 200" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
        <g fill="rgba(255,255,255,0.07)">
            <path d="M97 5l8 18 18-5-2 19 18 7-12 15 12 15-18 7 2 19-18-5-8 18-8-18-18 5 2-19-18-7 12-15-12-15 18-7-2-19 18 5z"/>
            <circle cx="100" cy="100" r="28"/>
            <circle cx="100" cy="100" r="14" fill="rgba(245,179,1,0.12)"/>
        </g>
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
            <p class="section-desc">60+ years powering construction across Jammu, Kashmir &amp; Ladakh. Here's why every contractor trusts us for spare parts.</p>
        </div>
        <div class="features-grid">
            <div class="feature-card">
                <div class="icon-wrapper"><i class="fas fa-shield-alt feature-icon"></i></div>
                <h3>Genuine Quality Assured</h3>
                <p>Every OEM or aftermarket part we sell is quality-checked. Zero compromise on components that power your equipment.</p>
                <a href="about.php" class="card-link">Our Promise <i class="fas fa-arrow-right"></i></a>
            </div>
            <div class="feature-card">
                <div class="icon-wrapper"><i class="fas fa-warehouse feature-icon"></i></div>
                <h3>Massive Live Inventory</h3>
                <p>Thousands of parts in stock across all categories — less waiting, less downtime, more productivity on site.</p>
                <a href="catalog.php" class="card-link">See Catalog <i class="fas fa-arrow-right"></i></a>
            </div>
            <div class="feature-card">
                <div class="icon-wrapper"><i class="fas fa-user-tie feature-icon"></i></div>
                <h3>Expert Identification</h3>
                <p>Our team can find any part by model, serial number, or description. 60+ years of hands-on field experience.</p>
                <a href="about.php" class="card-link">Our Story <i class="fas fa-arrow-right"></i></a>
            </div>
            <div class="feature-card">
                <div class="icon-wrapper"><i class="fas fa-map-marked-alt feature-icon"></i></div>
                <h3>Region-Wide Reach</h3>
                <p>Serving Jammu, Kashmir &amp; Ladakh with a strong supply network. Your parts reach you wherever your project is.</p>
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
                <p>Pins, bushes, bucket teeth, hydraulic pumps, seal kits, transmission parts — all JCB models covered.</p>
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
                <p>High-strength drill rods, shank adapters, couplings, and bits for extreme torque and rock conditions.</p>
                <a href="contact.php?req=drillrods" class="card-link">Get Quote <i class="fas fa-arrow-right"></i></a>
            </div>
            <div class="feature-card">
                <div class="icon-wrapper"><i class="fas fa-cogs feature-icon"></i></div>
                <h3>Hydraulic Components</h3>
                <p>Pumps, cylinders, control valves, hoses, fittings, and O-ring kits for all hydraulic systems.</p>
                <a href="contact.php?req=hydraulics" class="card-link">Get Quote <i class="fas fa-arrow-right"></i></a>
            </div>
            <div class="feature-card">
                <div class="icon-wrapper"><i class="fas fa-oil-can feature-icon"></i></div>
                <h3>Engine &amp; Filtration</h3>
                <p>Oil, fuel &amp; air filters, gaskets, overhaul kits, and engine parts to minimize machine downtime.</p>
                <a href="contact.php?req=engine" class="card-link">Get Quote <i class="fas fa-arrow-right"></i></a>
            </div>
            <div class="feature-card">
                <div class="icon-wrapper"><i class="fas fa-link feature-icon"></i></div>
                <h3>Undercarriage Parts</h3>
                <p>Track chains, rollers, idlers, sprockets, and track shoes for crawler excavators and dozers.</p>
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

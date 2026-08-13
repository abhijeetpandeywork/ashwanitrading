<?php 
$pageTitle = "Home | Heavy Equipment & JCB Spare Parts";
$currentPage = "home";
include 'includes/header.php'; 
?>

<!-- Hero Section with Lead Capture -->
<section class="hero">
    <div class="container">
        <div class="hero-content">
            <h1>Premium <span>Spare Parts</span> for Earthmoving Machinery</h1>
            <p>60+ Years of Trust. Your #1 source for JCB Spare Parts, Road Roller Components, Drill Rods, and all Heavy Equipment Spares across Jammu, Kashmir & Ladakh.</p>
            <a href="catalog.php" class="btn btn-primary">View Parts Catalog</a>
        </div>
        
        <div class="lead-capture-form">
            <h3>Get a Parts Quote</h3>
            <p>Need a specific spare part? Fill out the form and our experts will give you the best price.</p>
            <form class="lead-form" method="POST">
                <div class="form-group">
                    <input type="text" name="name" class="form-control" placeholder="Your Name" required>
                </div>
                <div class="form-group">
                    <input type="tel" name="phone" class="form-control" placeholder="Phone Number" required>
                </div>
                <div class="form-group">
                    <input type="email" name="email" class="form-control" placeholder="Email Address">
                </div>
                <div class="form-group">
                    <textarea name="requirement" class="form-control" rows="3" placeholder="Enter Part Name, Machine Model, or Part Number..." required></textarea>
                </div>
                <button type="submit" class="btn btn-primary">Request Price</button>
            </form>
        </div>
    </div>
</section>

<!-- Trust Indicators -->
<section class="section section-bg text-center">
    <div class="container">
        <h2 class="section-title">Why Buy Parts From Us?</h2>
        <div class="features-grid">
            <div class="feature-card">
                <div class="icon-wrapper"><i class="fas fa-shield-alt feature-icon"></i></div>
                <h3>Genuine Quality</h3>
                <p>We source and supply only the highest quality aftermarket and OEM spare parts.</p>
            </div>
            <div class="feature-card">
                <div class="icon-wrapper"><i class="fas fa-boxes feature-icon"></i></div>
                <h3>Massive Inventory</h3>
                <p>Thousands of parts in stock for JCB, road rollers, excavators, and more.</p>
            </div>
            <div class="feature-card">
                <div class="icon-wrapper"><i class="fas fa-shipping-fast feature-icon"></i></div>
                <h3>Fast Availability</h3>
                <p>Extensive network across Jammu, Kashmir & Ladakh ensures you get your parts fast.</p>
            </div>
            <div class="feature-card">
                <div class="icon-wrapper"><i class="fas fa-tools feature-icon"></i></div>
                <h3>Expert Support</h3>
                <p>60+ years of experience to help you find the exact part you need.</p>
            </div>
        </div>
    </div>
</section>

<!-- Our Main Product Categories -->
<section id="services" class="section text-center">
    <div class="container">
        <h2 class="section-title">Our Spare Parts Inventory</h2>
        <div class="features-grid">
            <div class="feature-card">
                <div class="icon-wrapper"><i class="fas fa-hammer feature-icon"></i></div>
                <h3>JCB Spare Parts</h3>
                <p>Complete range of mechanical, hydraulic, and structural parts for all JCB models.</p>
            </div>
            <div class="feature-card">
                <div class="icon-wrapper"><i class="fas fa-truck-moving feature-icon"></i></div>
                <h3>Road Roller Parts</h3>
                <p>High-durability spares for compactors and road rollers to keep projects moving.</p>
            </div>
            <div class="feature-card">
                <div class="icon-wrapper"><i class="fas fa-drafting-compass feature-icon"></i></div>
                <h3>Drill Rods & Tools</h3>
                <p>Tough, wear-resistant drill rods and drilling accessories for heavy-duty applications.</p>
            </div>
            <div class="feature-card">
                <div class="icon-wrapper"><i class="fas fa-cogs feature-icon"></i></div>
                <h3>Engine & Hydraulic Components</h3>
                <p>Pumps, filters, seals, and engine components for maximum machinery uptime.</p>
            </div>
        </div>
        <div style="margin-top: 40px;">
            <a href="catalog.php" class="btn btn-outline">Browse Full Catalog</a>
        </div>
    </div>
</section>

<!-- Additional Services (Secondary Focus) -->
<section class="section section-bg text-center" style="padding-top: 40px; padding-bottom: 60px;">
    <div class="container">
        <h3 style="margin-bottom: 15px;">We Also Provide</h3>
        <p style="color: var(--text-light); max-width: 600px; margin: 0 auto 30px;">Beyond spare parts, Ashwani Trading Co. supports your operations with comprehensive machinery solutions.</p>
        <div style="display: flex; justify-content: center; gap: 20px; flex-wrap: wrap;">
            <span style="background: #fff; padding: 10px 20px; border-radius: 30px; box-shadow: 0 2px 10px rgba(0,0,0,0.05); font-weight: 500;"><i class="fas fa-wrench" style="color: var(--accent-color);"></i> Workshop Maintenance</span>
            <span style="background: #fff; padding: 10px 20px; border-radius: 30px; box-shadow: 0 2px 10px rgba(0,0,0,0.05); font-weight: 500;"><i class="fas fa-tractor" style="color: var(--accent-color);"></i> Machinery Rentals</span>
        </div>
    </div>
</section>

<?php include 'includes/footer.php'; ?>

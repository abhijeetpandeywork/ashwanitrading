<?php 
$pageTitle = "Spare Parts Catalog | Ashwani Trading Co.";
$currentPage = "catalog";
include 'includes/header.php'; 
?>

<!-- Page Header -->
<section class="section section-bg text-center">
    <div class="container">
        <h1 class="section-title" style="margin-bottom: 20px;">Spare Parts Catalog</h1>
        <p style="font-size: 1.2rem; max-width: 800px; margin: 0 auto;">Browse our extensive categories of genuine and high-quality aftermarket spare parts.</p>
    </div>
</section>

<!-- Catalog Grid -->
<section class="section">
    <div class="container">
        <div class="features-grid">
            
            <div class="feature-card">
                <div class="icon-wrapper"><i class="fas fa-hammer feature-icon"></i></div>
                <h3>JCB Spare Parts</h3>
                <p>Pins, bushes, bucket teeth, hydraulic pumps, seal kits, and transmission parts specifically for JCB machinery.</p>
                <a href="contact.php?req=jcb" class="btn btn-outline" style="margin-top:15px; width: 100%;">Get a Quote</a>
            </div>
            
            <div class="feature-card">
                <div class="icon-wrapper"><i class="fas fa-truck-moving feature-icon"></i></div>
                <h3>Road Roller Parts</h3>
                <p>Scrapers, shock absorbers, hydraulic motors, and compaction drums for soil and asphalt rollers.</p>
                <a href="contact.php?req=roadroller" class="btn btn-outline" style="margin-top:15px; width: 100%;">Get a Quote</a>
            </div>
            
            <div class="feature-card">
                <div class="icon-wrapper"><i class="fas fa-drafting-compass feature-icon"></i></div>
                <h3>Drill Rods & Bits</h3>
                <p>High-strength drill rods, couplings, shank adapters, and drill bits for rock and earth drilling.</p>
                <a href="contact.php?req=drillrods" class="btn btn-outline" style="margin-top:15px; width: 100%;">Get a Quote</a>
            </div>
            
            <div class="feature-card">
                <div class="icon-wrapper"><i class="fas fa-cogs feature-icon"></i></div>
                <h3>Hydraulic Parts</h3>
                <p>Hydraulic cylinders, control valves, hoses, fittings, and O-ring kits for all heavy equipment.</p>
                <a href="contact.php?req=hydraulics" class="btn btn-outline" style="margin-top:15px; width: 100%;">Get a Quote</a>
            </div>

            <div class="feature-card">
                <div class="icon-wrapper"><i class="fas fa-oil-can feature-icon"></i></div>
                <h3>Engine & Filtration</h3>
                <p>Oil filters, fuel filters, air filters, gaskets, and engine overhaul kits for heavy-duty engines.</p>
                <a href="contact.php?req=engine" class="btn btn-outline" style="margin-top:15px; width: 100%;">Get a Quote</a>
            </div>

            <div class="feature-card">
                <div class="icon-wrapper"><i class="fas fa-link feature-icon"></i></div>
                <h3>Undercarriage Parts</h3>
                <p>Track chains, rollers, idlers, sprockets, and track shoes for crawler excavators and dozers.</p>
                <a href="contact.php?req=undercarriage" class="btn btn-outline" style="margin-top:15px; width: 100%;">Get a Quote</a>
            </div>
            
        </div>
        
        <div style="text-align: center; margin-top: 50px;">
            <p style="color: var(--text-light); margin-bottom: 20px;">Have a specific part number or machine model?</p>
            <a href="contact.php" class="btn btn-primary">Send Us Your Part List</a>
        </div>
    </div>
</section>

<?php include 'includes/footer.php'; ?>

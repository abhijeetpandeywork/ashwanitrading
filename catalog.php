<?php 
$pageTitle = "Catalog | Ashwani Trading Co.";
$currentPage = "catalog";
include 'includes/header.php'; 
?>

<!-- Page Header -->
<section class="section section-bg text-center">
    <div class="container">
        <h1 class="section-title" style="margin-bottom: 20px;">Product Catalog</h1>
        <p style="font-size: 1.2rem; max-width: 800px; margin: 0 auto;">Explore our range of high-quality earthmoving machinery, spare parts, and accessories.</p>
    </div>
</section>

<!-- Catalog Grid -->
<section class="section">
    <div class="container">
        <div class="features-grid">
            
            <div class="feature-card">
                <i class="fas fa-cogs feature-icon"></i>
                <h3>Earthmoving Machinery</h3>
                <p>Top-tier machinery for construction and earthmoving projects.</p>
                <a href="contact.php?req=machinery" class="btn btn-outline" style="margin-top:15px; width: 100%;">Enquire Now</a>
            </div>
            
            <div class="feature-card">
                <i class="fas fa-hammer feature-icon"></i>
                <h3>JCB Spare Parts</h3>
                <p>Genuine and high-quality aftermarket spare parts for JCB machines.</p>
                <a href="contact.php?req=jcb" class="btn btn-outline" style="margin-top:15px; width: 100%;">Enquire Now</a>
            </div>
            
            <div class="feature-card">
                <i class="fas fa-truck-moving feature-icon"></i>
                <h3>Road Roller Parts</h3>
                <p>Durable spare parts to ensure the smooth operation of road rollers.</p>
                <a href="contact.php?req=roadroller" class="btn btn-outline" style="margin-top:15px; width: 100%;">Enquire Now</a>
            </div>
            
            <div class="feature-card">
                <i class="fas fa-drafting-compass feature-icon"></i>
                <h3>Drill Rods</h3>
                <p>High-strength drill rods suitable for various heavy-duty drilling tasks.</p>
                <a href="contact.php?req=drillrods" class="btn btn-outline" style="margin-top:15px; width: 100%;">Enquire Now</a>
            </div>
            
        </div>
        
        <div style="text-align: center; margin-top: 50px;">
            <p style="color: var(--text-light); margin-bottom: 20px;">Don't see what you're looking for? We probably have it in stock!</p>
            <a href="contact.php" class="btn btn-primary">Contact Us for Full Inventory</a>
        </div>
    </div>
</section>

<?php include 'includes/footer.php'; ?>

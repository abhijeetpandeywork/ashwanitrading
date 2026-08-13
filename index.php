<?php 
$pageTitle = "Home | Earthmoving Machinery Spare Parts";
$currentPage = "home";
include 'includes/header.php'; 
?>

<!-- Hero Section with Lead Capture -->
<section class="hero">
    <div class="container">
        <div class="hero-content">
            <h1>Powering <span>Construction</span> & Earthmoving</h1>
            <p>60+ Years of Trust. Your reliable partner for Earthmoving Machinery Spare Parts, JCB Accessories, Workshop Maintenance, and Rentals across Jammu, Kashmir & Ladakh.</p>
            <a href="#services" class="btn btn-primary">Explore Services</a>
        </div>
        
        <div class="lead-capture-form">
            <h3>Get a Free Quote</h3>
            <p>Need spare parts or machinery? Fill out the form and our experts will contact you.</p>
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
                    <textarea name="requirement" class="form-control" rows="3" placeholder="What do you need? (e.g., JCB parts, repair service)" required></textarea>
                </div>
                <button type="submit" class="btn btn-primary">Submit Request</button>
            </form>
        </div>
    </div>
</section>

<!-- Trust Indicators -->
<section class="section section-bg text-center">
    <div class="container">
        <h2 class="section-title">Why Ashwani Trading Co.?</h2>
        <div class="features-grid">
            <div class="feature-card">
                <i class="fas fa-shield-alt feature-icon"></i>
                <h3>60+ Years Experience</h3>
                <p>Decades of practical knowledge and trusted service in the machinery industry.</p>
            </div>
            <div class="feature-card">
                <i class="fas fa-cogs feature-icon"></i>
                <h3>Complete Solutions</h3>
                <p>Spare parts, accessories, workshop maintenance, and rental machines under one roof.</p>
            </div>
            <div class="feature-card">
                <i class="fas fa-map-marked-alt feature-icon"></i>
                <h3>Regional Reach</h3>
                <p>Extensive service network serving customers across Jammu, Kashmir & Ladakh.</p>
            </div>
            <div class="feature-card">
                <i class="fas fa-handshake feature-icon"></i>
                <h3>Customer First</h3>
                <p>Honest advice, reliable service, and relationships built for the long term.</p>
            </div>
        </div>
    </div>
</section>

<!-- Our Services Snippet -->
<section id="services" class="section text-center">
    <div class="container">
        <h2 class="section-title">What We Offer</h2>
        <div class="features-grid">
            <div class="feature-card">
                <i class="fas fa-tractor feature-icon"></i>
                <h3>Spare Parts</h3>
                <p>Wide range of spare parts for all types of heavy equipment to keep them performing reliably.</p>
            </div>
            <div class="feature-card">
                <i class="fas fa-tools feature-icon"></i>
                <h3>Maintenance & Repairs</h3>
                <p>Expert inspection, troubleshooting, and repairs to reduce downtime.</p>
            </div>
            <div class="feature-card">
                <i class="fas fa-truck-pickup feature-icon"></i>
                <h3>Machinery Rentals</h3>
                <p>Practical rental solutions for earthmoving and construction projects.</p>
            </div>
        </div>
        <div style="margin-top: 40px;">
            <a href="services.php" class="btn btn-outline">View All Services</a>
        </div>
    </div>
</section>

<?php include 'includes/footer.php'; ?>

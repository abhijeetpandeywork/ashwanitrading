<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ashwani Trading Co. | <?php echo isset($pageTitle) ? $pageTitle : 'Earthmoving Machinery Spare Parts'; ?></title>
    <meta name="description" content="For over 60 years, Ashwani Trading Co. has been a trusted name in the earthmoving and construction machinery industry serving Jammu, Kashmir, and Ladakh.">
    <!-- FontAwesome for icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <!-- Main Stylesheet -->
    <link rel="stylesheet" href="assets/css/style.css">
</head>
<body>

    <!-- Top Bar -->
    <div class="top-bar">
        <div class="container">
            <div class="top-bar-contact">
                <a href="tel:+919419186209"><i class="fas fa-phone-alt"></i> +91 9419186209</a>
                <a href="mailto:ashwanitradingcojammu@gmail.com"><i class="fas fa-envelope"></i> ashwanitradingcojammu@gmail.com</a>
                <a href="#"><i class="fas fa-map-marker-alt"></i> Narwal, Jammu</a>
            </div>
            <div class="top-bar-social">
                <a href="https://www.facebook.com/profile.php?id=61585148043428" target="_blank" title="Facebook"><i class="fab fa-facebook-f"></i></a>
                <a href="https://www.instagram.com/ashwanitradingcojammu" target="_blank" title="Instagram"><i class="fab fa-instagram"></i></a>
                <a href="https://twitter.com/Ashwanitrading" target="_blank" title="Twitter"><i class="fab fa-twitter"></i></a>
                <a href="https://www.tradeindia.com/ashwani-trading-co-2560288/" target="_blank" title="TradeIndia"><i class="fas fa-globe"></i></a>
            </div>
        </div>
    </div>

    <!-- Header Navigation -->
    <header>
        <div class="container nav-container">
            <a href="index.php" class="logo-container">
                <!-- If you have the logo image ready, replace this with <img src="assets/images/logo.jpg" alt="ATC Logo" style="height: 60px;"> -->
                <div class="logo-text">ATC <span>Ashwani</span> Trading Co.</div>
            </a>
            
            <div class="mobile-menu-btn">
                <i class="fas fa-bars"></i>
            </div>

            <nav>
                <ul>
                    <li><a href="index.php" class="<?php echo ($currentPage == 'home') ? 'active' : ''; ?>">Home</a></li>
                    <li><a href="about.php" class="<?php echo ($currentPage == 'about') ? 'active' : ''; ?>">About Us</a></li>
                    <li><a href="services.php" class="<?php echo ($currentPage == 'services') ? 'active' : ''; ?>">Services</a></li>
                    <li><a href="catalog.php" class="<?php echo ($currentPage == 'catalog') ? 'active' : ''; ?>">Catalog</a></li>
                    <li><a href="contact.php" class="<?php echo ($currentPage == 'contact') ? 'active' : ''; ?>">Contact</a></li>
                </ul>
            </nav>
        </div>
    </header>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo isset($pageTitle) ? $pageTitle : 'Ashwani Trading Co. | Earthmoving Spare Parts Experts — Jammu'; ?></title>
    <meta name="description" content="Ashwani Trading Co. — 60+ years supplying genuine JCB spare parts, road roller components, drill rods & hydraulic parts across Jammu, Kashmir & Ladakh. Get expert support.">
    <meta name="keywords" content="JCB spare parts Jammu, road roller parts, drill rods, earthmoving parts, heavy machinery parts Jammu Kashmir, Ashwani Trading">
    <meta property="og:title" content="Ashwani Trading Co. — Spare Parts Experts, Jammu">
    <meta property="og:description" content="Your #1 source for earthmoving machinery spare parts. 60+ years of trust in J&K.">
    <!-- Icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
    <!-- Stylesheet -->
    <link rel="stylesheet" href="assets/css/style.css">
</head>
<body>

    <!-- ===== TOP BAR ===== -->
    <div class="top-bar">
        <div class="container">
            <div class="top-bar-contact">
                <a href="tel:+919419186209"><i class="fas fa-phone-alt"></i> +91 9419186209</a>
                <a href="tel:+919186191331"><i class="fas fa-phone-alt"></i> +91 9186191331</a>
                <a href="mailto:ashwanitradingcojammu@gmail.com"><i class="fas fa-envelope"></i> ashwanitradingcojammu@gmail.com</a>
            </div>
            <div class="top-bar-social">
                <a href="https://www.facebook.com/profile.php?id=61585148043428" target="_blank" aria-label="Facebook"><i class="fab fa-facebook-f"></i></a>
                <a href="https://www.instagram.com/ashwanitradingcojammu" target="_blank" aria-label="Instagram"><i class="fab fa-instagram"></i></a>
                <a href="https://twitter.com/Ashwanitrading" target="_blank" aria-label="Twitter"><i class="fab fa-twitter"></i></a>
                <a href="https://www.tradeindia.com/ashwani-trading-co-2560288/" target="_blank" aria-label="TradeIndia"><i class="fas fa-globe"></i></a>
            </div>
        </div>
    </div>

    <!-- ===== STICKY HEADER / NAVBAR ===== -->
    <header id="main-header">
        <div class="nav-container">

            <!-- Logo with SVG Gear Icon -->
            <a href="index.php" class="logo-container" aria-label="Ashwani Trading Co. Home">
                <svg class="logo-icon-svg" viewBox="0 0 100 100" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                    <!-- Gear Shape -->
                    <circle cx="50" cy="50" r="18" fill="#004d26"/>
                    <circle cx="50" cy="50" r="10" fill="#f5b301"/>
                    <?php
                    // Generate gear teeth as PHP for consistency
                    $teeth = 10; $r_outer = 42; $r_inner = 35;
                    $points = [];
                    for ($i = 0; $i < $teeth * 2; $i++) {
                        $angle = ($i / ($teeth * 2)) * 2 * M_PI - M_PI / ($teeth * 2);
                        $r = ($i % 2 == 0) ? $r_outer : $r_inner;
                        $points[] = round(50 + $r * cos($angle), 1) . ',' . round(50 + $r * sin($angle), 1);
                    }
                    echo '<polygon points="' . implode(' ', $points) . '" fill="#004d26"/>';
                    echo '<circle cx="50" cy="50" r="14" fill="#f5b301" opacity="0.9"/>';
                    echo '<circle cx="50" cy="50" r="7" fill="#004d26"/>';
                    ?>
                </svg>
                <div class="logo-text">
                    <span class="logo-brand">ATC</span>
                    <span class="logo-sub">Ashwani Trading Co.</span>
                </div>
            </a>

            <!-- Mobile Menu Button -->
            <button class="mobile-menu-btn" id="mobile-menu-btn" aria-label="Open navigation menu">
                <i class="fas fa-bars" id="menu-icon"></i>
            </button>

            <!-- Navigation Links -->
            <nav>
                <ul id="nav-menu">
                    <li><a href="index.php"   class="<?php echo ($currentPage == 'home')    ? 'active' : ''; ?>">Home</a></li>
                    <li><a href="about.php"   class="<?php echo ($currentPage == 'about')   ? 'active' : ''; ?>">About Us</a></li>
                    <li><a href="services.php" class="<?php echo ($currentPage == 'services')? 'active' : ''; ?>">Services</a></li>
                    <li><a href="catalog.php" class="<?php echo ($currentPage == 'catalog') ? 'active' : ''; ?>">Catalog</a></li>
                    <li><a href="contact.php" class="<?php echo ($currentPage == 'contact') ? 'active' : ''; ?>">Contact</a></li>
                    <li><a href="contact.php" class="nav-cta-btn"><i class="fas fa-bolt"></i> Get Quote</a></li>
                </ul>
            </nav>

        </div>
    </header>

<?php
// header.php - Modern Editorial Consulting Header & Navigation
require_once __DIR__ . '/config.php';

$currentPage = basename($_SERVER['PHP_SELF']);

if (!isset($pageTitle)) {
    $pageTitle = "Sohel Vaseem | Brand Strategist & Business Consultant";
}
if (!isset($metaDescription)) {
    $metaDescription = "Brand strategy, consulting, marketing, web design, and creative production by Sohel Vaseem. Helping businesses build distinctive brands and sustainable growth.";
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="<?php echo htmlspecialchars($metaDescription); ?>">
    <meta name="keywords" content="Sohel Vaseem, Brand Strategist, Brand Consultant, Marketing Strategy, Branding, Web Development, Creative Production, Business Consulting, Mumbai, Hyderabad">
    <meta name="author" content="Sohel Vaseem">
    
    <!-- Favicon -->
    <link rel="apple-touch-icon" sizes="180x180" href="images/favicons/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="images/favicons/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="images/favicons/favicon-16x16.png">
    <link rel="shortcut icon" href="images/favicons/favicon.ico">
    
    <title><?php echo htmlspecialchars($pageTitle); ?></title>
    
    <!-- Google Typography: Cormorant Garamond, Playfair Display, Manrope, Inter -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Cormorant+Garamond:ital,wght@0,400;0,500;0,600;0,700;1,400;1,500;1,600&family=Inter:wght@300;400;500;600;700&family=Manrope:wght@400;500;600;700&family=Playfair+Display:ital,wght@0,400;0,500;0,600;0,700;1,400;1,500&display=swap" rel="stylesheet">
    
    <!-- Font Awesome Icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    
    <!-- Modern Editorial Consulting Stylesheet -->
    <link rel="stylesheet" href="css/style.css?v=<?php echo filemtime(__DIR__ . '/css/style.css'); ?>">
</head>
<body>

<!-- Top Info Bar (Identical across all pages) -->
<div class="top-info-bar">
    <div class="container">
        <div class="top-info-content">
            <div class="top-info-left">
                <div class="top-info-item">
                    <i class="fa-solid fa-location-dot"></i> Mumbai &bull; Hyderabad
                </div>
                <div class="top-info-item">
                    <i class="fa-solid fa-envelope"></i>
                    <a href="mailto:info@sohealvaseem.com">info@sohealvaseem.com</a>
                </div>
                <div class="top-info-item">
                    <i class="fa-solid fa-phone"></i>
                    <a href="tel:+919014365364">+91 9014 365 364</a>
                </div>
            </div>
            
            <div class="top-info-right">
                <div class="top-social">
                    <a href="https://www.linkedin.com/in/sohealvaseem" target="_blank" rel="noopener" title="LinkedIn"><i class="fa-brands fa-linkedin-in"></i></a>
                    <a href="https://www.youtube.com/user/Sohealvaseem" target="_blank" rel="noopener" title="YouTube"><i class="fa-brands fa-youtube"></i></a>
                    <a href="https://www.instagram.com/soheal_vaseem" target="_blank" rel="noopener" title="Instagram"><i class="fa-brands fa-instagram"></i></a>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Main Sticky Navbar -->
<header class="main-navbar">
    <div class="container">
        <div class="nav-container">
            <!-- Brand Mark -->
            <a href="index.php" class="brand-mark" title="Sohel Vaseem — Brand Strategist &amp; Filmmaker">
                <div class="brand-monogram">SV</div>
                <div class="brand-text">
                    <span class="brand-title">SOHEL VASEEM</span>
                    <span class="brand-subtitle">BRAND STRATEGIST &amp; FILMMAKER</span>
                </div>
            </a>

            <!-- Desktop Navigation Menu -->
            <nav class="nav-desktop-wrap" aria-label="Main Navigation">
                <ul class="nav-menu">
                    <li class="nav-item <?php echo ($currentPage == 'index.php') ? 'active' : ''; ?>">
                        <a href="index.php" class="nav-link">Home</a>
                    </li>
                    <li class="nav-item <?php echo ($currentPage == 'about.php') ? 'active' : ''; ?>">
                        <a href="about.php" class="nav-link">About</a>
                    </li>
                    <li class="nav-item <?php echo (in_array($currentPage, ['services.php', 'services_two.php', 'services_three.php'])) ? 'active' : ''; ?>">
                        <a href="services.php" class="nav-link">Expertise</a>
                    </li>
                    <li class="nav-item <?php echo (in_array($currentPage, ['portfolio.php', 'portfolio_two.php'])) ? 'active' : ''; ?>">
                        <a href="portfolio.php" class="nav-link">Work</a>
                    </li>
                    <li class="nav-item <?php echo ($currentPage == 'media.php') ? 'active' : ''; ?>">
                        <a href="media.php" class="nav-link">Insights</a>
                    </li>
                    <li class="nav-item <?php echo ($currentPage == 'contact.php') ? 'active' : ''; ?>">
                        <a href="contact.php" class="nav-link">Contact</a>
                    </li>
                </ul>
            </nav>

            <!-- Nav CTA & Mobile Toggle -->
            <div class="nav-actions-group">
                <a href="filmmaking.php" class="nav-cta-btn <?php echo ($currentPage == 'filmmaking.php') ? 'active' : ''; ?>" title="Film Making &amp; Direction Portfolio">
                    <span>Film Making</span>
                    <i class="fa-solid fa-arrow-right"></i>
                </a>
                <button type="button" class="mobile-toggle" aria-label="Toggle navigation menu" id="mobileToggleBtn">
                    <span class="toggle-line line-top"></span>
                    <span class="toggle-line line-mid"></span>
                    <span class="toggle-line line-bot"></span>
                </button>
            </div>
        </div>
    </div>
</header>

<!-- Mobile Offcanvas Drawer -->
<div class="drawer-backdrop" id="drawerBackdrop"></div>
<aside class="mobile-drawer" id="mobileDrawer" aria-label="Mobile Navigation">
    <div class="drawer-header">
        <a href="index.php" class="drawer-brand-lockup" title="Sohel Vaseem">
            <div class="brand-monogram">SV</div>
            <div class="brand-text">
                <span class="brand-title">SOHEL VASEEM</span>
                <span class="brand-subtitle">BRAND STRATEGY &bull; FILMMAKING</span>
            </div>
        </a>
        <button type="button" class="drawer-close" aria-label="Close navigation menu" id="drawerCloseBtn">
            <i class="fa-solid fa-xmark"></i>
        </button>
    </div>

    <div class="drawer-nav-wrap">
        <div class="drawer-meta-tag">
            <span class="dash"></span>
            <span>DIRECTORY &bull; 2026</span>
        </div>
        <ul class="drawer-menu">
            <li>
                <a href="index.php" class="drawer-link <?php echo ($currentPage == 'index.php') ? 'active' : ''; ?>">
                    <span class="drawer-num">01</span>
                    <span class="drawer-text">Home</span>
                    <i class="fa-solid fa-arrow-right drawer-arrow"></i>
                </a>
            </li>
            <li>
                <a href="about.php" class="drawer-link <?php echo ($currentPage == 'about.php') ? 'active' : ''; ?>">
                    <span class="drawer-num">02</span>
                    <span class="drawer-text">About</span>
                    <i class="fa-solid fa-arrow-right drawer-arrow"></i>
                </a>
            </li>
            <li>
                <a href="services.php" class="drawer-link <?php echo (in_array($currentPage, ['services.php', 'services_two.php', 'services_three.php'])) ? 'active' : ''; ?>">
                    <span class="drawer-num">03</span>
                    <span class="drawer-text">Expertise</span>
                    <i class="fa-solid fa-arrow-right drawer-arrow"></i>
                </a>
            </li>
            <li>
                <a href="portfolio.php" class="drawer-link <?php echo (in_array($currentPage, ['portfolio.php', 'portfolio_two.php'])) ? 'active' : ''; ?>">
                    <span class="drawer-num">04</span>
                    <span class="drawer-text">Work</span>
                    <i class="fa-solid fa-arrow-right drawer-arrow"></i>
                </a>
            </li>
            <li>
                <a href="filmmaking.php" class="drawer-link <?php echo ($currentPage == 'filmmaking.php') ? 'active' : ''; ?>">
                    <span class="drawer-num">05</span>
                    <span class="drawer-text">Film Making</span>
                    <i class="fa-solid fa-arrow-right drawer-arrow"></i>
                </a>
            </li>
            <li>
                <a href="media.php" class="drawer-link <?php echo ($currentPage == 'media.php') ? 'active' : ''; ?>">
                    <span class="drawer-num">06</span>
                    <span class="drawer-text">Insights &amp; Press</span>
                    <i class="fa-solid fa-arrow-right drawer-arrow"></i>
                </a>
            </li>
            <li>
                <a href="contact.php" class="drawer-link <?php echo ($currentPage == 'contact.php') ? 'active' : ''; ?>">
                    <span class="drawer-num">07</span>
                    <span class="drawer-text">Contact &amp; Advisory</span>
                    <i class="fa-solid fa-arrow-right drawer-arrow"></i>
                </a>
            </li>
        </ul>
    </div>

    <!-- Drawer Footer Actions -->
    <div class="drawer-footer">
        <a href="contact.php" class="drawer-cta-btn">
            <span>Schedule Advisory Call</span>
            <i class="fa-solid fa-arrow-right"></i>
        </a>
        <div class="drawer-contact-block">
            <a href="tel:+919014365364" class="drawer-contact-link">
                <i class="fa-solid fa-phone"></i>
                <span>+91 9014 365 364</span>
            </a>
            <a href="mailto:info@sohealvaseem.com" class="drawer-contact-link">
                <i class="fa-solid fa-envelope"></i>
                <span>info@sohealvaseem.com</span>
            </a>
        </div>
        <div class="drawer-social-strip">
            <a href="https://www.linkedin.com/in/sohealvaseem" target="_blank" rel="noopener" title="LinkedIn"><i class="fa-brands fa-linkedin-in"></i></a>
            <a href="https://www.youtube.com/user/Sohealvaseem" target="_blank" rel="noopener" title="YouTube"><i class="fa-brands fa-youtube"></i></a>
            <a href="https://www.instagram.com/soheal_vaseem" target="_blank" rel="noopener" title="Instagram"><i class="fa-brands fa-instagram"></i></a>
            <a href="https://facebook.com/soheal.vaseem" target="_blank" rel="noopener" title="Facebook"><i class="fa-brands fa-facebook-f"></i></a>
        </div>
        <div class="drawer-city-tag">
            <span>Mumbai &bull; Hyderabad &bull; Working Nationally</span>
        </div>
    </div>
</aside>

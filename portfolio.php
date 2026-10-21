<?php
$pageTitle = "Selected Works & Verified Client Projects | Sohel Vaseem";
$metaDescription = "Explore the verified project portfolio of Sohel Vaseem. Showcasing live client platforms, e-commerce systems, healthcare applications, hospitality portals, and brand architectures.";
require_once __DIR__ . '/header.php';

// Fetch verified client projects from database/config
$verified_projects = getPortfolioProjects();

// Supplementary creative archive items (branding & packaging visual systems)
$archive_items = [
    [
        'id' => 101,
        'title' => 'Signature Brand Identity System',
        'category' => 'archive',
        'cat_label' => 'Brand Architecture',
        'image_path' => 'images/portfolio/01.jpg',
        'logo_path' => '',
        'project_url' => '',
        'description' => 'Comprehensive brand architecture, corporate identity manual, and visual stationery system developed for coherent multi-touchpoint communication.'
    ],
    [
        'id' => 102,
        'title' => 'Luxury Packaging & Structural Design',
        'category' => 'archive',
        'cat_label' => 'Packaging System',
        'image_path' => 'images/portfolio/02.jpg',
        'logo_path' => '',
        'project_url' => '',
        'description' => 'Premium retail packaging structural design engineered for standout retail presence and tactile shelf appeal.'
    ],
    [
        'id' => 103,
        'title' => 'Commercial Advertising Campaign',
        'category' => 'archive',
        'cat_label' => 'Campaign Direction',
        'image_path' => 'images/portfolio/03.jpg',
        'logo_path' => '',
        'project_url' => '',
        'description' => 'Visual advertising campaign roll-out with multi-channel creative direction across print, outdoor displays, and commercial media.'
    ],
    [
        'id' => 104,
        'title' => 'Corporate Symbol & Monogram Mark',
        'category' => 'archive',
        'cat_label' => 'Logo Design',
        'image_path' => 'images/portfolio/04.jpg',
        'logo_path' => '',
        'project_url' => '',
        'description' => 'Bespoke corporate typographic mark designed for enduring corporate stature and high digital scalability.'
    ],
    [
        'id' => 105,
        'title' => 'Theatrical Commercial Key Visual Art',
        'category' => 'archive',
        'cat_label' => 'Key Visual Art',
        'image_path' => 'images/portfolio/07.jpg',
        'logo_path' => '',
        'project_url' => '',
        'description' => 'Cinematic visual art and promotional poster layout designed for widescreen theatrical release and billboard advertising.'
    ],
    [
        'id' => 106,
        'title' => 'Television Commercial Storyboard Art',
        'category' => 'archive',
        'cat_label' => 'Directorial Art',
        'image_path' => 'images/portfolio/14.jpg',
        'logo_path' => '',
        'project_url' => '',
        'description' => 'Directorial storyboards mapping camera shot compositions, temporal pacing, and dramatic beats before on-set filming.'
    ]
];

// Combine verified client projects with archive items
$all_portfolio_items = array_merge($verified_projects, $archive_items);
?>

<!-- ===================================================================
     PORTFOLIO EDITORIAL HERO BANNER (IDEAS MADE VISIBLE)
     =================================================================== -->
<section class="page-hero-editorial hero-page-work">
    <div class="hero-editorial-overlay"></div>
    <div class="container">
        <div class="hero-editorial-content">
            <div class="hero-editorial-badge">
                <span class="dash"></span>
                <span>CURATED WORK &bull; CASE STUDIES</span>
            </div>
            <h1 class="hero-editorial-headline">
                Ideas Made <span class="hero-italic-gold">Visible.</span>
            </h1>
            <p class="hero-editorial-lead">
                A selection of creative work shaped by strategy, storytelling, and purposeful execution.
            </p>
            <div class="hero-editorial-actions">
                <a href="#portfolio-grid" class="btn-hero-dark-pill" title="Explore Selected Projects">
                    <span>EXPLORE PROJECTS</span>
                    <i class="fa-solid fa-arrow-down"></i>
                </a>
                <a href="contact.php" class="btn-hero-outline-pill" title="Start a Project Conversation">
                    <span>START A PROJECT</span>
                    <i class="fa-solid fa-arrow-right"></i>
                </a>
            </div>
            <div class="hero-editorial-breadcrumbs">
                <a href="index.php">Home</a>
                <span class="sep">/</span>
                <span>Work</span>
            </div>
        </div>
    </div>
</section>

<!-- ===================================================================
     PORTFOLIO GALLERY & INTERACTIVE CATEGORY FILTERS
     =================================================================== -->
<section class="section-padding bg-canvas" id="portfolio-grid">
    <div class="container">
        
        <!-- Category Filter Tabs -->
        <div class="portfolio-filter-bar">
            <button type="button" class="portfolio-filter-btn active" data-filter="all">All Projects (<?php echo count($all_portfolio_items); ?>)</button>
            <button type="button" class="portfolio-filter-btn" data-filter="ecommerce">E-Commerce &amp; Retail</button>
            <button type="button" class="portfolio-filter-btn" data-filter="healthcare">Healthcare &amp; Medical</button>
            <button type="button" class="portfolio-filter-btn" data-filter="hospitality">Hospitality &amp; Events</button>
            <button type="button" class="portfolio-filter-btn" data-filter="tech">Technology &amp; Web</button>
            <button type="button" class="portfolio-filter-btn" data-filter="fashion">Fashion</button>
            <button type="button" class="portfolio-filter-btn" data-filter="realestate">Real Estate</button>
            <button type="button" class="portfolio-filter-btn" data-filter="archive">Brand Architecture</button>
        </div>

        <!-- Portfolio Projects Grid -->
        <div class="work-grid-editorial">
            <?php foreach ($all_portfolio_items as $item): ?>
            <div class="work-card-editorial portfolio-item" data-category="<?php echo htmlspecialchars($item['category']); ?>">
                
                <!-- Project Visual Box -->
                <div class="work-img-box">
                    <img src="<?php echo htmlspecialchars($item['image_path']); ?>" alt="<?php echo htmlspecialchars($item['title']); ?>" loading="lazy">
                    
                    <!-- Genuine Brand Logo Badge -->
                    <?php if (!empty($item['logo_path'])): ?>
                    <div class="work-brand-logo-badge" title="<?php echo htmlspecialchars($item['title']); ?> Verified Brand Identity">
                        <img src="<?php echo htmlspecialchars($item['logo_path']); ?>" alt="<?php echo htmlspecialchars($item['title']); ?> Official Logo">
                    </div>
                    <?php endif; ?>
                </div>

                <!-- Project Content Details -->
                <div class="work-content-box">
                    <span class="work-cat-tag"><?php echo htmlspecialchars($item['cat_label']); ?></span>
                    <h4 class="work-title-text"><?php echo htmlspecialchars($item['title']); ?></h4>
                    <p class="work-desc-text">
                        <?php echo htmlspecialchars($item['description']); ?>
                    </p>
                    
                    <!-- Action Link: Direct to live URL or Lightbox Visual -->
                    <div class="work-card-actions">
                        <?php if (!empty($item['project_url']) && $item['project_url'] !== '#'): ?>
                        <a href="<?php echo htmlspecialchars($item['project_url']); ?>" target="_blank" rel="noopener" class="work-view-link">
                            <span>View Project</span> <i class="fa-solid fa-arrow-up-right-from-square" style="font-size: 0.72rem;"></i>
                        </a>
                        <span style="font-size: 0.75rem; color: var(--text-muted); display: flex; align-items: center; gap: 4px;">
                            <i class="fa-solid fa-circle-check" style="color: #10b981;"></i> Live Platform
                        </span>
                        <?php else: ?>
                        <a href="#" class="work-view-link" data-lightbox-img="<?php echo htmlspecialchars($item['image_path']); ?>" data-caption="<?php echo htmlspecialchars($item['title'] . ' — ' . $item['cat_label']); ?>">
                            <span>Inspect Visual</span> <i class="fa-solid fa-magnifying-glass-plus" style="font-size: 0.72rem;"></i>
                        </a>
                        <span style="font-size: 0.75rem; color: var(--text-muted); display: flex; align-items: center; gap: 4px;">
                            <i class="fa-solid fa-folder-open" style="color: var(--accent-bronze);"></i> Project Archive
                        </span>
                        <?php endif; ?>
                    </div>
                </div>

            </div>
            <?php endforeach; ?>
        </div>

    </div>
</section>

<!-- ===================================================================
     COMMISSION / ADVISORY CTA
     =================================================================== -->
<section class="section-padding bg-surface" style="border-top: 1px solid var(--border-light);">
    <div class="container" style="text-align: center; max-width: 720px;">
        <span class="editorial-badge" style="justify-content: center;">Bespoke Strategy &amp; Platforms</span>
        <h2 style="font-size: clamp(2.2rem, 3.6vw, 3rem); margin: 16px 0 20px;">
            Commission a New Brand Identity or Digital Platform
        </h2>
        <p style="font-size: 1.05rem; color: var(--text-secondary); line-height: 1.8; margin-bottom: 32px;">
            Whether architecting an enterprise web application, high-volume e-commerce storefront, or signature brand identity, let us discuss your commercial goals and roadmap.
        </p>
        <div style="display: flex; gap: 16px; justify-content: center; flex-wrap: wrap;">
            <a href="contact.php" class="btn btn-primary" style="padding: 14px 34px;">
                <span>Start a Conversation</span>
                <i class="fa-solid fa-arrow-right" style="margin-left: 8px;"></i>
            </a>
            <a href="services.php" class="btn btn-outline" style="padding: 14px 28px;">
                <span>Explore Capabilities</span>
            </a>
        </div>
    </div>
</section>

<?php require_once __DIR__ . '/footer.php'; ?>

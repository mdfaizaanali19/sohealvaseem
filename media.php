<?php
$pageTitle = "Media, Press & Published Insights | Sohel Vaseem";
$metaDescription = "Explore press features, national newspaper clippings, and media coverages highlighting Sohel Vaseem in The Hindu, Deccan Chronicle, Eenadu, and The Siasat Daily.";
require_once __DIR__ . '/header.php';

$press_items = [
    [
        'publication' => 'The Hindu',
        'title' => 'Directorial Acumen & Cinematic Vision',
        'desc' => 'National newspaper coverage highlighting Sohel Vaseem’s innovative approach to visual storytelling, brand narratives, and production leadership.',
        'thumb' => 'images/resource/Hindu.jpg',
        'zoom' => 'images/resource/Hindu_zoom.jpg',
        'type' => 'National Daily'
    ],
    [
        'publication' => 'Deccan Chronicle',
        'title' => 'Television Series & Ad Direction Spotlight',
        'desc' => 'In-depth feature examining Sohel’s directorial execution across television drama serials and nationwide advertising campaigns.',
        'thumb' => 'images/resource/chronicle.jpg',
        'zoom' => 'images/resource/chronicle_zoom.jpg',
        'type' => 'Print Feature'
    ],
    [
        'publication' => 'Deccan Chronicle',
        'title' => 'Creative Excellence in Modern Commercials',
        'desc' => 'Chronicle reporting on Sohel Vaseem’s storytelling craft and his leadership on high-profile corporate commercial film sets.',
        'thumb' => 'images/resource/chronicleone.jpg',
        'zoom' => 'images/resource/chronicleone_zoom.jpg',
        'type' => 'Commercial Spotlight'
    ],
    [
        'publication' => 'Eenadu',
        'title' => 'Director Sohel Vaseem’s Creative Milestone',
        'desc' => 'Extensive regional daily reporting highlighting Sohel’s artistic storytelling contributions and commercial campaign triumph.',
        'thumb' => 'images/resource/eenadu.jpg',
        'zoom' => 'images/resource/eenadu_zoom.jpg',
        'type' => 'Regional Leader'
    ],
    [
        'publication' => 'Andhra Jyothi',
        'title' => 'Artistic Journey Behind The Camera',
        'desc' => 'Feature article examining the making of high-concept television commercials and on-set directorial discipline.',
        'thumb' => 'images/resource/andhrajyothi.jpg',
        'zoom' => 'images/resource/andhrajyothi_zoom.jpg',
        'type' => 'Cultural Daily'
    ],
    [
        'publication' => 'The Siasat Daily',
        'title' => 'Acclaimed Filmmaker & Directorial Craft',
        'desc' => 'Prominent coverage spotlighting Sohel Vaseem’s national advertising campaigns and cultural storytelling.',
        'thumb' => 'images/resource/siasatone.jpg',
        'zoom' => 'images/resource/siasatone_zoom.jpg',
        'type' => 'National Daily'
    ],
    [
        'publication' => 'The Siasat Daily',
        'title' => 'Media & Television Directorial Triumph',
        'desc' => 'Special press reporting on prime-time television direction and successful brand inception initiatives.',
        'thumb' => 'images/resource/siasattwo.jpg',
        'zoom' => 'images/resource/siasattwo_zoom.jpg',
        'type' => 'Press Profile'
    ],
    [
        'publication' => 'Vaartha',
        'title' => 'Milestone Commercial Achievements',
        'desc' => 'Daily news profile tracing Sohel Vaseem’s evolution as a strategic brand builder and creative director.',
        'thumb' => 'images/resource/vaarta.jpg',
        'zoom' => 'images/resource/vaarta_zoom.jpg',
        'type' => 'Print Feature'
    ]
];
?>

<!-- ===================================================================
     INSIGHTS HERO BANNER (PERSPECTIVES THAT MOVE BRANDS FORWARD)
     =================================================================== -->
<section class="page-hero-editorial hero-page-insights">
    <div class="hero-editorial-overlay"></div>
    <div class="container">
        <div class="hero-editorial-content">
            <div class="hero-editorial-badge">
                <span class="dash"></span>
                <span>PERSPECTIVES &bull; PRESS ARCHIVE</span>
            </div>
            <h1 class="hero-editorial-headline">
                Perspectives That Move<br>
                Brands <span class="hero-italic-gold">Forward.</span>
            </h1>
            <p class="hero-editorial-lead">
                Ideas and observations on branding, creativity, communication, and the changing business landscape.
            </p>
            <div class="hero-editorial-actions">
                <a href="#press-archive" class="btn-hero-dark-pill" title="Explore Press Archive">
                    <span>EXPLORE PRESS ARCHIVE</span>
                    <i class="fa-solid fa-arrow-down"></i>
                </a>
                <a href="contact.php?type=press" class="btn-hero-outline-pill" title="Media & Speaking Inquiries">
                    <span>MEDIA INQUIRIES</span>
                    <i class="fa-solid fa-arrow-right"></i>
                </a>
            </div>
            <div class="hero-editorial-breadcrumbs">
                <a href="index.php">Home</a>
                <span class="sep">/</span>
                <span>Insights</span>
            </div>
        </div>
    </div>
</section>

<!-- Editorial Perspectives & Commentary Philosophy -->
<section class="section-padding bg-surface" style="border-bottom: 1px solid var(--border-light);">
    <div class="container">
        <div class="section-header-editorial" style="margin-bottom: 0;">
            <div>
                <span class="editorial-badge">Critical Recognition</span>
                <h2>Three Decades of Media Coverage &amp; Documented Craft.</h2>
            </div>
            <p class="section-header-lead">
                A verified archive of national newspaper features and published commentary tracking Sohel Vaseem’s directorial milestones, commercial storytelling, and brand leadership across Indian media.
            </p>
        </div>
    </div>
</section>

<!-- Press Articles Grid -->
<section class="section-padding bg-canvas" id="press-archive">
    <div class="container">
        
        <div class="work-grid-editorial">
            <?php foreach ($press_items as $press): ?>
            <div class="work-card-editorial">
                <div class="work-img-box">
                    <img src="<?php echo htmlspecialchars($press['thumb']); ?>" alt="<?php echo htmlspecialchars($press['publication'] . ' - ' . $press['title']); ?>" loading="lazy">
                </div>
                <div class="work-content-box">
                    <span class="work-cat-tag"><?php echo htmlspecialchars($press['publication'] . ' &bull; ' . $press['type']); ?></span>
                    <h4 class="work-title-text"><?php echo htmlspecialchars($press['title']); ?></h4>
                    <p class="work-desc-text">
                        <?php echo htmlspecialchars($press['desc']); ?>
                    </p>
                    <a href="#" class="work-view-link" data-lightbox-img="<?php echo htmlspecialchars($press['zoom']); ?>" data-caption="<?php echo htmlspecialchars($press['publication'] . ' — ' . $press['title']); ?>">
                        <span>Inspect Article Clipping</span> <i class="fa-solid fa-arrow-right"></i>
                    </a>
                </div>
            </div>
            <?php endforeach; ?>
        </div>

    </div>
</section>

<!-- Direct Editorial Advisory CTA -->
<section class="cta-meaningful-section" id="contact">
    <div class="container">
        <div class="cta-meaningful-inner">
            <span class="editorial-badge" style="justify-content: center;">Media &amp; Speaking</span>
            <h2>Let's Start With a Conversation.</h2>
            <p>
                For speaking engagements, press commentary on branding &amp; advertising, or strategic consulting on brand architecture.
            </p>
            <div style="display: flex; gap: 16px; justify-content: center; flex-wrap: wrap;">
                <a href="contact.php" class="btn btn-primary" style="padding: 14px 34px;">
                    <span>Start a Conversation</span>
                    <i class="fa-solid fa-arrow-right"></i>
                </a>
                <a href="services.php" class="btn btn-outline" style="padding: 14px 28px;">
                    <span>Explore Capabilities</span>
                </a>
            </div>
        </div>
    </div>
</section>

<?php require_once __DIR__ . '/footer.php'; ?>

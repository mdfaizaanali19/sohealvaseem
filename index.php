<?php
$pageTitle = "Sohel Vaseem | Brand Strategist & Filmmaker";
$metaDescription = "I help businesses find their voice, shape their identity, and communicate with greater impact through strategic thinking and cinematic storytelling.";
require_once __DIR__ . '/header.php';
?>

<!-- ===================================================================
     HERO: LUXURY CINEMATIC EDITORIAL BANNER (MATCHING REFERENCE IMAGE)
     =================================================================== -->
<section class="hero-cinematic" id="hero">
    <div class="hero-cinematic-inner">
        
        <!-- Left Side: Editorial Typography & Actions -->
        <div class="hero-cinematic-content">
            <div class="hero-category-label">
                <span>BRAND STRATEGY</span>
                <span class="dot">&bull;</span>
                <span>CREATIVE DIRECTION</span>
                <span class="dot">&bull;</span>
                <span>FILMMAKING</span>
            </div>

            <h1 class="hero-cinematic-headline">
                Building Brands<br>
                With Purpose.<br>
                <span class="hero-italic-gold">Stories That Stay.</span>
            </h1>

            <p class="hero-cinematic-lead">
                I help businesses find their voice, shape their identity, and communicate with greater impact &mdash; through strategic thinking and cinematic storytelling.
            </p>

            <div class="hero-cinematic-actions">
                <a href="#work" class="btn-cinematic-dark" title="Explore My Work">
                    <span>EXPLORE MY WORK</span>
                    <i class="fa-solid fa-arrow-right"></i>
                </a>
                <a href="contact.php" class="btn-cinematic-outline" title="Let's Build Your Brand">
                    <span>LET'S BUILD YOUR BRAND</span>
                    <i class="fa-solid fa-arrow-right"></i>
                </a>
            </div>
        </div>

        <!-- Dedicated Portrait (Rendered on mobile screen below text, hidden on desktop) -->
        <div class="hero-cinematic-visual-mobile">
            <div class="hero-mobile-portrait-wrapper">
                <img src="images/resource/home_portrait_mobile.jpg?v=2" alt="Sohel Vaseem" class="hero-mobile-portrait-img" loading="eager">
            </div>
        </div>

    </div>
</section>

<!-- ===================================================================
SECTION 1: BRAND PHILOSOPHY
=================================================================== -->
<section class="philosophy-editorial-section">
<div class="container">
<div class="philosophy-editorial-wrapper">
<span class="editorial-badge">Brand Philosophy</span>
<h2 class="philosophy-editorial-headline">
Great Brands Begin With <em>Clear Thinking.</em>
</h2>
<p class="philosophy-editorial-lead">
In a crowded commercial landscape, brand distinction is never accidental—it is engineered. Meaningful growth happens when strategic business clarity, sharp market positioning, and disciplined creative execution operate in total alignment. When an organization understands precisely who it is, why it matters, and where it is going, every design choice, campaign, and digital touchpoint builds compounding enterprise value.
</p>
</div>
</div>
</section>

<!-- ===================================================================
SECTION 2: CORE EXPERTISE PREVIEW (4 KEY AREAS)
=================================================================== -->
<section class="expertise-preview-section" id="services">
<div class="container">
<div class="section-header-editorial">
<div>
<span class="editorial-badge">Strategic Disciplines</span>
<h2>Core Areas of Expertise</h2>
</div>
<p class="section-header-lead">
End-to-end strategic advisory, visual identity, and growth capabilities tailored for ambitious businesses.
</p>
</div>

<div class="expertise-preview-grid">
<!-- 01 -->
<div class="expertise-preview-card">
<span class="expertise-preview-num">01</span>
<h3 class="expertise-preview-title">Brand Strategy and Positioning</h3>
<p class="expertise-preview-desc">
Formulating rigorous market positioning, value propositions, and strategic narratives that distinguish enterprises from competitor noise.
</p>
</div>

<!-- 02 -->
<div class="expertise-preview-card">
<span class="expertise-preview-num">02</span>
<h3 class="expertise-preview-title">Branding and Creative Direction</h3>
<p class="expertise-preview-desc">
Architecting complete visual identities, typographic systems, brand guidelines, and collateral that build immediate prestige and customer recognition.
</p>
</div>

<!-- 03 -->
<div class="expertise-preview-card">
<span class="expertise-preview-num">03</span>
<h3 class="expertise-preview-title">Digital Marketing and Growth</h3>
<p class="expertise-preview-desc">
Designing multi-channel campaigns, performance media planning, and content strategies that connect with qualified audiences and drive acquisition.
</p>
</div>

<!-- 04 -->
<div class="expertise-preview-card">
<span class="expertise-preview-num">04</span>
<h3 class="expertise-preview-title">Business Strategy and Consulting</h3>
<p class="expertise-preview-desc">
Providing confidential advisory to leadership teams on market expansion, product incubation, and strategic organizational alignment.
</p>
</div>
</div>

<div class="expertise-preview-footer">
<a href="services.php" class="btn btn-secondary">
<span>Explore All Expertise</span>
<i class="fa-solid fa-arrow-right"></i>
</a>
</div>
</div>
</section>

<!-- ===================================================================
SECTION 3: SELECTED WORK
=================================================================== -->
<section class="work-editorial-section" id="work">
<div class="container">
<div class="section-header-editorial">
<div>
<span class="editorial-badge">Verified Client Work</span>
<h2>Selected Work &amp; Digital Platforms</h2>
</div>
<a href="portfolio.php" class="btn btn-outline btn-sm">
<span>View All Projects</span>
<i class="fa-solid fa-arrow-right"></i>
</a>
</div>

<?php
$homeProjects = getPortfolioProjects(true, 6);
?>
<div class="work-grid-editorial">
<?php foreach ($homeProjects as $project): ?>
<div class="work-card-editorial">
<div class="work-img-box">
<img src="<?php echo htmlspecialchars($project['image_path']); ?>" alt="<?php echo htmlspecialchars($project['title']); ?>" loading="lazy">
<?php if (!empty($project['logo_path'])): ?>
<div class="work-brand-logo-badge" title="<?php echo htmlspecialchars($project['title']); ?> Official Brand Logo">
<img src="<?php echo htmlspecialchars($project['logo_path']); ?>" alt="<?php echo htmlspecialchars($project['title']); ?> Logo">
</div>
<?php endif; ?>
</div>
<div class="work-content-box">
<span class="work-cat-tag"><?php echo htmlspecialchars($project['cat_label']); ?></span>
<h4 class="work-title-text"><?php echo htmlspecialchars($project['title']); ?></h4>
<p class="work-desc-text">
<?php echo htmlspecialchars($project['description']); ?>
</p>
<div class="work-card-actions">
<?php if (!empty($project['project_url']) && $project['project_url'] !== '#'): ?>
<a href="<?php echo htmlspecialchars($project['project_url']); ?>" target="_blank" rel="noopener" class="work-view-link">
<span>View Project</span> <i class="fa-solid fa-arrow-up-right-from-square"></i>
</a>
<?php else: ?>
<a href="portfolio.php" class="work-view-link">
<span>Explore Case Study</span> <i class="fa-solid fa-arrow-right"></i>
</a>
<?php endif; ?>
</div>
</div>
</div>
<?php endforeach; ?>
</div>
</div>
</section>

<!-- ===================================================================
SECTION 4: LATEST INSIGHTS
=================================================================== -->
<section class="insights-editorial-section" id="insights">
<div class="container">
<div class="section-header-editorial">
<div>
<span class="editorial-badge">Documented Recognition</span>
<h2>Latest Insights &amp; Press</h2>
</div>
<a href="media.php" class="btn btn-outline btn-sm">
<span>Read All Insights</span>
<i class="fa-solid fa-arrow-right"></i>
</a>
</div>

<div class="insights-preview-grid">
<!-- Article 1 -->
<div class="insight-card-editorial">
<div class="insight-thumb-box">
<img src="images/resource/Hindu.jpg" alt="The Hindu — Directorial Acumen &amp; Cinematic Vision" loading="lazy">
</div>
<div class="insight-content-box">
<span class="insight-meta-source">The Hindu &bull; National Daily</span>
<h4 class="insight-title-text">Directorial Acumen &amp; Cinematic Vision</h4>
<p class="insight-excerpt-text">
National newspaper coverage highlighting Sohel Vaseem’s innovative approach to visual storytelling, brand narratives, and production leadership.
</p>
<a href="media.php" class="insight-read-link">
<span>Read Full Feature</span> <i class="fa-solid fa-arrow-right"></i>
</a>
</div>
</div>

<!-- Article 2 -->
<div class="insight-card-editorial">
<div class="insight-thumb-box">
<img src="images/resource/chronicle.jpg" alt="Deccan Chronicle — Television Series &amp; Ad Direction Spotlight" loading="lazy">
</div>
<div class="insight-content-box">
<span class="insight-meta-source">Deccan Chronicle &bull; Print Feature</span>
<h4 class="insight-title-text">Television Series &amp; Ad Direction Spotlight</h4>
<p class="insight-excerpt-text">
In-depth feature examining Sohel’s directorial execution across television drama serials and nationwide advertising campaigns.
</p>
<a href="media.php" class="insight-read-link">
<span>Read Full Feature</span> <i class="fa-solid fa-arrow-right"></i>
</a>
</div>
</div>

<!-- Article 3 -->
<div class="insight-card-editorial">
<div class="insight-thumb-box">
<img src="images/resource/eenadu.jpg" alt="Eenadu — Director Sohel Vaseem’s Creative Milestone" loading="lazy">
</div>
<div class="insight-content-box">
<span class="insight-meta-source">Eenadu &bull; Regional Leader</span>
<h4 class="insight-title-text">Director Sohel Vaseem’s Creative Milestone</h4>
<p class="insight-excerpt-text">
Extensive regional daily reporting highlighting Sohel’s artistic storytelling contributions and commercial campaign triumph.
</p>
<a href="media.php" class="insight-read-link">
<span>Read Full Feature</span> <i class="fa-solid fa-arrow-right"></i>
</a>
</div>
</div>
</div>
</div>
</section>

<!-- ===================================================================
SECTION 5: FINAL CALL TO ACTION
=================================================================== -->
<section class="cta-meaningful-section" id="contact">
<div class="container">
<div class="cta-meaningful-inner">
<span class="editorial-badge" style="justify-content: center;">Start a Conversation</span>
<h2>Let's Build Something Meaningful.</h2>
<p>
Have a brand, business, or marketing challenge in mind? Let's start a conversation about the possibilities.
</p>
<a href="contact.php" class="btn btn-primary">
<span>Start a Conversation</span>
<i class="fa-solid fa-arrow-right"></i>
</a>
</div>
</div>
</section>

<?php require_once __DIR__ . '/footer.php'; ?>

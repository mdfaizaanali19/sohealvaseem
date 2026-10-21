<?php
$pageTitle = "Events and Consulting | Sohel Vaseem";
$metaDescription = "Turnkey business consulting, executive brand advisory, event creative direction, and strategic go-to-market solutions by Sohel Vaseem.";
require_once __DIR__ . '/header.php';
?>

<!-- Page Hero Banner -->
<section class="page-hero-editorial hero-page-expertise">
    <div class="hero-editorial-overlay"></div>
    <div class="container">
        <div class="hero-editorial-content">
            <div class="hero-editorial-badge">
                <span class="dash"></span>
                <span>EXECUTIVE ADVISORY &bull; TURNKEY CONSULTING</span>
            </div>
            <h1 class="hero-editorial-headline">
                Events &amp; Turnkey <span class="hero-italic-gold">Consulting.</span>
            </h1>
            <p class="hero-editorial-lead">
                Partnering with founders, leadership boards, and growing enterprises to solve critical positioning challenges, structure turnkey roll-outs, and execute high-stakes events.
            </p>
            <div class="hero-editorial-actions">
                <a href="#consulting-detail" class="btn-hero-dark-pill">
                    <span>EXPLORE ADVISORY</span>
                    <i class="fa-solid fa-arrow-down"></i>
                </a>
                <a href="contact.php" class="btn-hero-outline-pill">
                    <span>SCHEDULE ADVISORY</span>
                    <i class="fa-solid fa-arrow-right"></i>
                </a>
            </div>
            <div class="hero-editorial-breadcrumbs">
                <a href="index.php">Home</a>
                <span class="sep">/</span>
                <a href="services.php">Expertise</a>
                <span class="sep">/</span>
                <span>Consulting</span>
            </div>
        </div>
    </div>
</section>

<!-- Consulting Overview -->
<section class="section-padding bg-canvas" id="consulting-detail">
    <div class="container">
        <div class="about-intro-grid" style="margin-bottom: 70px;">
            <div class="about-intro-copy">
                <span class="editorial-badge">Executive Advisory</span>
                <h2>Transforming Business Vision Into Market Authority</h2>
                <p>
                    As a brand consultant and turnkey strategist, Sohel Vaseem collaborates with founders, business owners, and corporate boards to dismantle commercial bottlenecks, define differentiated value, and execute growth roadmaps with absolute confidence.
                </p>
                <p>
                    With deep experience navigating consumer psychology, brand storytelling, and media production, he guides enterprises on structuring brand architectures that protect margin pricing, cultivate customer loyalty, and command respect in competitive categories.
                </p>
            </div>

            <div class="about-intro-visual">
                <div class="about-intro-frame">
                    <img src="images/resource/websolutions.jpg" alt="Turnkey Business Solutions & Consulting" loading="lazy">
                </div>
            </div>
        </div>

        <!-- 4 Advisory Pillars -->
        <div style="border-top: 1px solid var(--border-light); padding-top: 60px;">
            <div class="section-header-editorial" style="margin-bottom: 40px;">
                <div>
                    <span class="editorial-badge">Advisory Areas</span>
                    <h2>Strategic Consulting Pillars</h2>
                </div>
            </div>

            <div class="approach-grid" style="margin-top: 0;">
                <div class="approach-step-card">
                    <span class="step-num-badge">01</span>
                    <h3>Turnkey Brand Setups</h3>
                    <p>End-to-end guidance from initial concept formulation to full commercial launch across physical and digital formats.</p>
                </div>
                <div class="approach-step-card">
                    <span class="step-num-badge">02</span>
                    <h3>Corporate Event Direction</h3>
                    <p>Creative direction, stage narrative design, investor presentations, and visual identity for corporate summits and launches.</p>
                </div>
                <div class="approach-step-card">
                    <span class="step-num-badge">03</span>
                    <h3>Executive Brand Advisory</h3>
                    <p>Confidential, high-level strategic counsel for corporate leaders navigating reputational milestones or market repositioning.</p>
                </div>
                <div class="approach-step-card">
                    <span class="step-num-badge">04</span>
                    <h3>Market Entry Roadmaps</h3>
                    <p>Formulating go-to-market strategies, channel roll-outs, and messaging architectures that reduce market friction.</p>
                </div>
            </div>
        </div>

        <!-- Consultation Invitation -->
        <div style="margin-top: 70px; padding: 36px; background: var(--bg-surface); border: 1px solid var(--border-light); display: flex; align-items: center; justify-content: space-between; flex-wrap: wrap; gap: 20px;">
            <div>
                <span class="editorial-badge" style="margin-bottom: 6px;">Executive Engagement</span>
                <div style="font-family: var(--font-serif); font-size: 1.35rem; font-weight: 500; color: var(--text-primary);">
                    Schedule an Executive Advisory Session
                </div>
                <p style="margin-bottom: 0; color: var(--text-secondary); font-size: 0.95rem;">
                    Discuss your corporate goals, brand transformation, or event creative direction in confidence.
                </p>
            </div>
            <a href="contact.php?service=consulting" class="btn btn-primary btn-sm">
                <span>Initiate Advisory Inquiry</span>
                <i class="fa-solid fa-arrow-right"></i>
            </a>
        </div>
    </div>
</section>

<?php require_once __DIR__ . '/footer.php'; ?>

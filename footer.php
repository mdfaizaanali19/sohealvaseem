<?php
// footer.php - Editorial Luxury Footer & Interactive Modals
require_once __DIR__ . '/config.php';
?>

<!-- Minimal Luxury Editorial Footer -->
<footer class="main-footer" id="footer">
    <div class="container">
        <!-- Pre-Footer Editorial Statement Bar -->
        <div class="footer-statement-bar">
            <div class="footer-statement-tag">
                <span class="dash"></span>
                <span>BRAND STRATEGY &bull; CREATIVE DIRECTION &bull; FILMMAKING</span>
            </div>
            <div class="footer-statement-cta">
                <span class="cta-prompt">Ready to give your brand clear direction?</span>
                <a href="contact.php" class="footer-cta-pill">
                    <span>Start a Conversation</span>
                    <i class="fa-solid fa-arrow-right"></i>
                </a>
            </div>
        </div>

        <!-- Main 4-Column Footer Grid -->
        <div class="footer-grid">
            <!-- Col 1: Brand Profile & Philosophy -->
            <div class="footer-brand">
                <a href="index.php" class="footer-brand-lockup" title="Sohel Vaseem — Brand Strategist &amp; Filmmaker">
                    <div class="brand-monogram">SV</div>
                    <div class="brand-text">
                        <span class="brand-title">SOHEL VASEEM</span>
                        <span class="brand-subtitle">BRAND STRATEGIST &amp; FILMMAKER</span>
                    </div>
                </a>
                <p>
                    Partnering with visionary founders, enterprises, and creative leaders to craft enduring brand strategy, distinctive identity systems, and high-impact cinematic storytelling.
                </p>
                <div class="footer-location-badge">
                    <i class="fa-solid fa-location-dot"></i>
                    <span>Mumbai &bull; Hyderabad &bull; Working Nationally</span>
                </div>
            </div>

            <!-- Col 2: Primary Navigation -->
            <div class="footer-nav-col">
                <h5>Navigation</h5>
                <ul class="footer-nav-list">
                    <li><a href="index.php"><i class="fa-solid fa-angle-right"></i> Home</a></li>
                    <li><a href="about.php"><i class="fa-solid fa-angle-right"></i> About</a></li>
                    <li><a href="services.php"><i class="fa-solid fa-angle-right"></i> Expertise</a></li>
                    <li><a href="portfolio.php"><i class="fa-solid fa-angle-right"></i> Work</a></li>
                    <li><a href="filmmaking.php"><i class="fa-solid fa-angle-right"></i> Film Making</a></li>
                    <li><a href="media.php"><i class="fa-solid fa-angle-right"></i> Insights &amp; Press</a></li>
                    <li><a href="contact.php"><i class="fa-solid fa-angle-right"></i> Contact</a></li>
                </ul>
            </div>

            <!-- Col 3: Practice Areas & Disciplines -->
            <div class="footer-nav-col">
                <h5>Practice Areas</h5>
                <ul class="footer-nav-list">
                    <li><a href="services.php#strategy"><i class="fa-solid fa-angle-right"></i> Brand Strategy &amp; Positioning</a></li>
                    <li><a href="services.php#identity"><i class="fa-solid fa-angle-right"></i> Identity Systems &amp; Design</a></li>
                    <li><a href="filmmaking.php"><i class="fa-solid fa-angle-right"></i> Commercial &amp; Narrative Film</a></li>
                    <li><a href="portfolio.php"><i class="fa-solid fa-angle-right"></i> Advertising &amp; Campaigns</a></li>
                    <li><a href="services.php#advisory"><i class="fa-solid fa-angle-right"></i> Executive Brand Advisory</a></li>
                </ul>
            </div>

            <!-- Col 4: Direct Advisory & Contact -->
            <div class="footer-nav-col">
                <h5>Start a Dialogue</h5>
                <ul class="footer-contact-list">
                    <li>
                        <i class="fa-solid fa-envelope"></i>
                        <div>
                            <span class="contact-label">Direct Inquiries</span>
                            <a href="mailto:info@sohealvaseem.com" class="contact-val">info@sohealvaseem.com</a>
                        </div>
                    </li>
                    <li>
                        <i class="fa-solid fa-phone"></i>
                        <div>
                            <span class="contact-label">Executive Advisory</span>
                            <a href="tel:+919014365364" class="contact-val">+91 9014 365 364</a>
                        </div>
                    </li>
                    <li>
                        <i class="fa-solid fa-calendar-check"></i>
                        <div>
                            <span class="contact-label">Private Consultation</span>
                            <a href="contact.php" class="footer-advisory-btn">
                                <span>Schedule Advisory Call</span>
                                <i class="fa-solid fa-arrow-right"></i>
                            </a>
                        </div>
                    </li>
                </ul>
            </div>
        </div>

        <!-- Footer Bottom Bar -->
        <div class="footer-bottom-bar">
            <div class="footer-copyright">
                &copy; <?php echo date('Y'); ?> Sohel Vaseem. All rights reserved. Strategic Branding &bull; Creative Consulting.
            </div>
            <div class="footer-bottom-tagline">
                <em>Obsessed With Impact. Driven By Story.</em>
            </div>
            <div class="footer-bottom-actions">
                <div class="footer-social-strip">
                    <a href="https://www.linkedin.com/in/sohealvaseem" target="_blank" rel="noopener" title="LinkedIn"><i class="fa-brands fa-linkedin-in"></i></a>
                    <a href="https://www.youtube.com/user/Sohealvaseem" target="_blank" rel="noopener" title="YouTube"><i class="fa-brands fa-youtube"></i></a>
                    <a href="https://www.instagram.com/soheal_vaseem" target="_blank" rel="noopener" title="Instagram"><i class="fa-brands fa-instagram"></i></a>
                    <a href="https://facebook.com/soheal.vaseem" target="_blank" rel="noopener" title="Facebook"><i class="fa-brands fa-facebook-f"></i></a>
                </div>
                <a href="#top" class="footer-back-top" title="Back to top" aria-label="Back to top" onclick="window.scrollTo({top: 0, behavior: 'smooth'}); return false;">
                    <i class="fa-solid fa-arrow-up"></i>
                </a>
            </div>
        </div>
    </div>
</footer>

<!-- Lightbox Modal for Work/Press Inspection -->
<div class="modal-backdrop-custom" id="imageLightboxModal" style="display:none; position:fixed; inset:0; background:rgba(0,0,0,0.85); z-index:3000; align-items:center; justify-content:center; padding:20px;">
    <div style="position:relative; max-width:900px; width:100%; text-align:center;">
        <button type="button" class="modal-close-btn" style="position:absolute; top:-40px; right:0; background:none; border:none; color:#ffffff; font-size:1.8rem; cursor:pointer;" aria-label="Close">&times;</button>
        <img id="lightboxModalImg" src="" alt="" style="max-height:80vh; max-width:100%; margin:0 auto; box-shadow:0 20px 40px rgba(0,0,0,0.5);">
        <div id="lightboxModalCaption" style="color:#ffffff; margin-top:14px; font-size:0.95rem; font-family:var(--font-serif);"></div>
    </div>
</div>

<!-- Video Player Modal -->
<div class="modal-backdrop-custom" id="videoModal" style="display:none; position:fixed; inset:0; background:rgba(0,0,0,0.9); z-index:3000; align-items:center; justify-content:center; padding:20px;">
    <div style="position:relative; max-width:960px; width:100%;">
        <button type="button" class="modal-close-btn" style="position:absolute; top:-40px; right:0; background:none; border:none; color:#ffffff; font-size:1.8rem; cursor:pointer;" aria-label="Close">&times;</button>
        <div style="position:relative; padding-bottom:56.25%; height:0; overflow:hidden;">
            <iframe id="videoModalIframe" src="" style="position:absolute; top:0; left:0; width:100%; height:100%; border:0;" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
        </div>
    </div>
</div>

<!-- Core JavaScript -->
<script src="js/main.js"></script>
</body>
</html>

<?php
$pageTitle = "Contact & Schedule Advisory | Sohel Vaseem";
$metaDescription = "Start a conversation with brand strategist and consultant Sohel Vaseem. Inquiries for brand positioning, marketing advisory, web development, and creative production.";
require_once __DIR__ . '/header.php';

$contact_status = "";

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['contact_submit'])) {
    $name = trim($_POST['name'] ?? '');
    $email = trim($_POST['email'] ?? '');
    $message = trim($_POST['message'] ?? '');
    $ip = $_SERVER['REMOTE_ADDR'] ?? '127.0.0.1';

    if (!empty($name) && !empty($email) && !empty($message)) {
        if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
            if ($pdo) {
                try {
                    $stmt = $pdo->prepare("INSERT INTO enquiries (name, email, message, ip_address) VALUES (:name, :email, :message, :ip_address)");
                    $stmt->execute([
                        ':name' => $name,
                        ':email' => $email,
                        ':message' => $message,
                        ':ip_address' => $ip,
                    ]);
                    $contact_status = "<div class='alert alert-success'><i class='fa-solid fa-circle-check'></i> Thank you, " . htmlspecialchars($name, ENT_QUOTES, 'UTF-8') . "! Your message has been received. I will respond to your inquiry promptly.</div>";
                } catch (Exception $e) {
                    $contact_status = "<div class='alert alert-danger'><i class='fa-solid fa-triangle-exclamation'></i> Database error: Unable to record your message. Please email directly.</div>";
                }
            } else {
                $contact_status = "<div class='alert alert-success'><i class='fa-solid fa-circle-check'></i> Thank you, " . htmlspecialchars($name, ENT_QUOTES, 'UTF-8') . "! Your message has been received.</div>";
            }

            @mail("info@sohealvaseem.com", "Consulting Inquiry from: " . $name, "Name: $name\nEmail: $email\nMessage:\n$message", "From: $email\r\nReply-To: $email");
        } else {
            $contact_status = "<div class='alert alert-danger'><i class='fa-solid fa-circle-exclamation'></i> Please provide a valid email address.</div>";
        }
    } else {
        $contact_status = "<div class='alert alert-danger'><i class='fa-solid fa-circle-exclamation'></i> Please complete all required fields.</div>";
    }
}
?>

<!-- ===================================================================
     CONTACT HERO BANNER (LET'S START A CONVERSATION)
     =================================================================== -->
<section class="page-hero-editorial hero-page-contact">
    <div class="hero-editorial-overlay"></div>
    <div class="container">
        <div class="hero-editorial-content">
            <div class="hero-editorial-badge">
                <span class="dash"></span>
                <span>DIRECT ENGAGEMENT &bull; STRATEGIC ADVISORY</span>
            </div>
            <h1 class="hero-editorial-headline">
                Let's Start a <span class="hero-italic-gold">Conversation.</span>
            </h1>
            <p class="hero-editorial-lead">
                Have a project, an idea, or an opportunity in mind? Let's explore what we can create together.
            </p>
            <div class="hero-editorial-actions">
                <a href="#inquiry-form" class="btn-hero-dark-pill" title="Submit Project Brief">
                    <span>MESSAGE DIRECTLY</span>
                    <i class="fa-solid fa-arrow-down"></i>
                </a>
                <a href="tel:+919014365364" class="btn-hero-outline-pill" title="Call Direct Office Line">
                    <span>+91 9014 365 364</span>
                    <i class="fa-solid fa-phone"></i>
                </a>
            </div>
            <div class="hero-editorial-breadcrumbs">
                <a href="index.php">Home</a>
                <span class="sep">/</span>
                <span>Contact</span>
            </div>
        </div>
    </div>
</section>

<!-- Contact Details & Form Section -->
<section class="section-padding bg-canvas" id="inquiry-form">
    <div class="container">
        <div class="row" style="align-items: flex-start; justify-content: space-between;">
            
            <div class="col-md-5" style="margin-bottom: 40px;">
                <span class="editorial-badge">Consultation Inquiries</span>
                <h2>Let's Discuss Your Commercial Objectives</h2>
                <p style="font-size: 1.05rem; color: var(--text-secondary); line-height: 1.8; margin-bottom: 30px;">
                    Every project begins with understanding your strategic vision and challenges. Reach out directly or complete the brief form to initiate a conversation.
                </p>

                <div style="display: flex; flex-direction: column; gap: 20px; border-top: 1px solid var(--border-light); padding-top: 28px;">
                    <div>
                        <div style="font-size: 0.78rem; text-transform: uppercase; letter-spacing: 0.14em; color: var(--text-muted); margin-bottom: 4px;">Direct Telephone</div>
                        <a href="tel:+919014365364" style="font-family: var(--font-serif); font-size: 1.35rem; font-weight: 600; color: var(--text-primary);">+91 9014 365 364</a>
                    </div>

                    <div>
                        <div style="font-size: 0.78rem; text-transform: uppercase; letter-spacing: 0.14em; color: var(--text-muted); margin-bottom: 4px;">Direct Email</div>
                        <a href="mailto:info@sohealvaseem.com" style="font-family: var(--font-serif); font-size: 1.35rem; font-weight: 600; color: var(--text-primary);">info@sohealvaseem.com</a>
                    </div>

                    <div>
                        <div style="font-size: 0.78rem; text-transform: uppercase; letter-spacing: 0.14em; color: var(--text-muted); margin-bottom: 4px;">Primary Locations</div>
                        <span style="font-size: 1.05rem; color: var(--text-primary); font-weight: 500;">Mumbai &bull; Hyderabad &bull; Available Nationally</span>
                    </div>

                    <div style="margin-top: 6px;">
                        <div style="font-size: 0.78rem; text-transform: uppercase; letter-spacing: 0.14em; color: var(--text-muted); margin-bottom: 8px;">Professional Network</div>
                        <div class="top-social" style="font-size: 1.1rem; gap: 16px;">
                            <a href="https://www.linkedin.com/in/sohealvaseem" target="_blank" rel="noopener" title="LinkedIn"><i class="fa-brands fa-linkedin-in"></i></a>
                            <a href="https://www.youtube.com/user/Sohealvaseem" target="_blank" rel="noopener" title="YouTube"><i class="fa-brands fa-youtube"></i></a>
                            <a href="https://www.instagram.com/soheal_vaseem" target="_blank" rel="noopener" title="Instagram"><i class="fa-brands fa-instagram"></i></a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-6">
                <div style="background: #ffffff; border: 1px solid var(--border-light); padding: 40px; box-shadow: var(--shadow-subtle);">
                    <h3 style="margin-bottom: 6px;">Submit a Project Brief</h3>
                    <p style="font-size: 0.92rem; color: var(--text-secondary); margin-bottom: 26px;">
                        Share your goals, current brand challenges, and timeline. I review all inquiries and respond within 24 hours.
                    </p>

                    <?php if (!empty($contact_status)) echo $contact_status; ?>

                    <form method="POST" action="contact.php#inquiry-form">
                        <input type="hidden" name="contact_submit" value="1">
                        
                        <div class="form-group">
                            <label for="contact-name">Your Full Name *</label>
                            <input id="contact-name" type="text" name="name" class="form-control" placeholder="Enter your full name" required>
                        </div>

                        <div class="form-group">
                            <label for="contact-email">Email Address *</label>
                            <input id="contact-email" type="email" name="email" class="form-control" placeholder="name@company.com" required>
                        </div>

                        <div class="form-group">
                            <label for="contact-message">Project Brief or Objective *</label>
                            <textarea id="contact-message" name="message" class="form-control" rows="5" placeholder="Describe your brand, key requirements, and timeline..." required></textarea>
                        </div>

                        <button type="submit" class="btn btn-primary" style="width: 100%; justify-content: center;">
                            <span>Send Project Inquiry</span>
                            <i class="fa-solid fa-arrow-right"></i>
                        </button>
                    </form>
                </div>
            </div>

        </div>
    </div>
</section>

<!-- Section 3: Strategic Consultation Process -->
<section class="section-padding bg-surface" style="border-top: 1px solid var(--border-light);">
    <div class="container">
        <div class="section-header-editorial" style="margin-bottom: 48px;">
            <div>
                <span class="editorial-badge">The Advisory Pathway</span>
                <h2>How We Structure Engagements.</h2>
            </div>
            <p class="section-header-lead">
                A disciplined, transparent three-stage framework from initial discovery to commercial deployment.
            </p>
        </div>

        <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(280px, 1fr)); gap: 32px;">
            <div style="background: #ffffff; border: 1px solid var(--border-light); padding: 32px 28px;">
                <span style="font-family: var(--font-serif); font-size: 1.8rem; font-weight: 600; color: var(--accent-bronze); display: block; margin-bottom: 12px;">01</span>
                <h4 style="margin-bottom: 10px;">Strategic Discovery</h4>
                <p style="font-size: 0.95rem; color: var(--text-secondary); line-height: 1.7; margin: 0;">
                    We review current market positioning, competitor saturation, core customer behavior, and internal growth targets through structured discussion.
                </p>
            </div>
            <div style="background: #ffffff; border: 1px solid var(--border-light); padding: 32px 28px;">
                <span style="font-family: var(--font-serif); font-size: 1.8rem; font-weight: 600; color: var(--accent-bronze); display: block; margin-bottom: 12px;">02</span>
                <h4 style="margin-bottom: 10px;">Architecture &amp; Roadmap</h4>
                <p style="font-size: 0.95rem; color: var(--text-secondary); line-height: 1.7; margin: 0;">
                    Formulating the brand thesis, messaging pillars, visual direction, and technical execution roadmap with clear milestones.
                </p>
            </div>
            <div style="background: #ffffff; border: 1px solid var(--border-light); padding: 32px 28px;">
                <span style="font-family: var(--font-serif); font-size: 1.8rem; font-weight: 600; color: var(--accent-bronze); display: block; margin-bottom: 12px;">03</span>
                <h4 style="margin-bottom: 10px;">Execution &amp; Value</h4>
                <p style="font-size: 0.95rem; color: var(--text-secondary); line-height: 1.7; margin: 0;">
                    Orchestrating design systems, campaign rollouts, film production, or digital platforms to build lasting commercial equity.
                </p>
            </div>
        </div>
    </div>
</section>

<?php require_once __DIR__ . '/footer.php'; ?>

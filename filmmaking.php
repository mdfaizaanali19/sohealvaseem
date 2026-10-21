<?php
$pageTitle = "Film Making & Commercial Direction | Sohel Vaseem";
$metaDescription = "Explore the filmmaking portfolio of Sohel Vaseem — 20+ years directing commercial films, television commercials (TVCs), corporate documentaries, and prime-time drama.";
require_once __DIR__ . '/header.php';
?>

<!-- ===================================================================
     FILMMAKING EDITORIAL HERO BANNER (STORIES BEYOND THE FRAME)
     =================================================================== -->
<section class="page-hero-editorial hero-page-filmmaking">
    <div class="hero-editorial-overlay"></div>
    <div class="container">
        <div class="hero-editorial-content">
            <div class="hero-editorial-badge">
                <span class="dash"></span>
                <span>DIRECTORIAL CRAFT &bull; 20+ YEARS</span>
            </div>
            <h1 class="hero-editorial-headline">
                Stories Beyond<br>
                the <span class="hero-italic-gold">Frame.</span>
            </h1>
            <p class="hero-editorial-lead">
                Bringing ideas to life through visual storytelling, film, and advertising.
            </p>
            <div class="hero-editorial-actions">
                <a href="#showreel" class="btn-hero-dark-pill" title="Experience Directorial Showreel">
                    <span>EXPLORE SHOWREEL</span>
                    <i class="fa-solid fa-arrow-down"></i>
                </a>
                <a href="contact.php" class="btn-hero-outline-pill" title="Discuss Film Production">
                    <span>DISCUSS PRODUCTION</span>
                    <i class="fa-solid fa-arrow-right"></i>
                </a>
            </div>
            <div class="hero-editorial-breadcrumbs">
                <a href="index.php">Home</a>
                <span class="sep">/</span>
                <span>Film Making</span>
            </div>
        </div>
    </div>
</section>

<!-- ===================================================================
     DIRECTORIAL MILESTONES & CREDENTIALS
     =================================================================== -->
<section style="background-color: var(--bg-card); border-bottom: 1px solid var(--border-light); padding: 42px 0;">
    <div class="container">
        <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(220px, 1fr)); gap: 32px; text-align: left;">
            <div style="border-left: 2px solid var(--accent-bronze); padding-left: 18px;">
                <div style="font-family: var(--font-serif); font-size: 2.5rem; font-weight: 600; color: var(--text-primary); line-height: 1;">150+</div>
                <div style="font-size: 0.8rem; text-transform: uppercase; letter-spacing: 0.12em; color: var(--accent-bronze); margin-top: 6px; font-weight: 600;">Commercial Films Directed</div>
                <div style="font-size: 0.85rem; color: var(--text-secondary); margin-top: 4px;">Nationwide broadcast and multi-channel campaigns</div>
            </div>
            <div style="border-left: 2px solid var(--accent-bronze); padding-left: 18px;">
                <div style="font-family: var(--font-serif); font-size: 2.5rem; font-weight: 600; color: var(--text-primary); line-height: 1;">20+</div>
                <div style="font-size: 0.8rem; text-transform: uppercase; letter-spacing: 0.12em; color: var(--accent-bronze); margin-top: 6px; font-weight: 600;">Years Directorial Craft</div>
                <div style="font-size: 0.85rem; color: var(--text-secondary); margin-top: 4px;">Decades commanding film sets &amp; soundstages</div>
            </div>
            <div style="border-left: 2px solid var(--accent-bronze); padding-left: 18px;">
                <div style="font-family: var(--font-serif); font-size: 2.5rem; font-weight: 600; color: var(--text-primary); line-height: 1;">Prime-Time</div>
                <div style="font-size: 0.8rem; text-transform: uppercase; letter-spacing: 0.12em; color: var(--accent-bronze); margin-top: 6px; font-weight: 600;">Television Drama Series</div>
                <div style="font-size: 0.85rem; color: var(--text-secondary); margin-top: 4px;">Critically acclaimed multi-episode broadcasts</div>
            </div>
            <div style="border-left: 2px solid var(--accent-bronze); padding-left: 18px;">
                <div style="font-family: var(--font-serif); font-size: 2.5rem; font-weight: 600; color: var(--text-primary); line-height: 1;">National</div>
                <div style="font-size: 0.8rem; text-transform: uppercase; letter-spacing: 0.12em; color: var(--accent-bronze); margin-top: 6px; font-weight: 600;">Media Recognition</div>
                <div style="font-size: 0.85rem; color: var(--text-secondary); margin-top: 4px;">Covered in The Hindu, Deccan Chronicle, Siasat</div>
            </div>
        </div>
    </div>
</section>

<!-- ===================================================================
     FEATURED DIRECTORIAL SHOWREEL (4K VIDEO PLAYER)
     =================================================================== -->
<section class="section-padding bg-canvas" id="showreel">
    <div class="container">
        <div style="max-width: 820px; margin: 0 auto 48px; text-align: center;">
            <span class="editorial-badge"><i class="fa-solid fa-play"></i> Cinematic Reel</span>
            <h2 style="font-size: clamp(2rem, 3.2vw, 2.75rem); margin: 14px 0;">The Directorial Showreel (4K)</h2>
            <p style="color: var(--text-secondary); font-size: 1.05rem; line-height: 1.8;">
                A curated sequence of commercial television commercials, brand monographs, and broadcast visual narratives directed by Sohel Vaseem. Click below to experience the directorial reel.
            </p>
        </div>

        <div style="max-width: 1040px; margin: 0 auto; position: relative; border-radius: var(--radius-sm); overflow: hidden; box-shadow: 0 24px 60px rgba(0,0,0,0.12); border: 1px solid var(--border-light);">
            <div style="position: relative; aspect-ratio: 16/9; background: #000000; overflow: hidden; display: flex; align-items: center; justify-content: center;">
                <img src="images/resource/slider02.jpg" alt="Sohel Vaseem Directorial Showreel" style="width: 100%; height: 100%; object-fit: cover; opacity: 0.82; transition: transform 0.6s ease;" id="showreelPoster">
                
                <!-- Darkened scrim overlay -->
                <div style="position: absolute; inset: 0; background: linear-gradient(to top, rgba(14, 18, 28, 0.85) 0%, rgba(14, 18, 28, 0.3) 60%, rgba(14, 18, 28, 0.4) 100%);"></div>

                <!-- Centered Interactive Play Trigger -->
                <a href="#" data-video-id="O0AT4TKrUSY" title="Play Cinematic Showreel (4K)" aria-label="Play 4K Showreel" style="position: absolute; display: flex; flex-direction: column; align-items: center; justify-content: center; gap: 14px; text-decoration: none; z-index: 2; transition: transform 0.3s ease;">
                    <div style="width: 88px; height: 88px; border-radius: 50%; background: rgba(157, 120, 68, 0.9); border: 2px solid rgba(255,255,255,0.8); display: flex; align-items: center; justify-content: center; color: #ffffff; font-size: 1.8rem; box-shadow: 0 10px 30px rgba(0,0,0,0.4); transition: all 0.3s ease;" class="play-pulse-btn">
                        <i class="fa-solid fa-play" style="margin-left: 4px;"></i>
                    </div>
                    <span style="font-size: 0.82rem; font-weight: 700; letter-spacing: 0.16em; text-transform: uppercase; color: #ffffff; background: rgba(0,0,0,0.65); padding: 6px 16px; border-radius: 20px; border: 1px solid rgba(255,255,255,0.2);">
                        Play Directorial Reel (4K)
                    </span>
                </a>

                <!-- Corner Badge -->
                <div style="position: absolute; bottom: 20px; left: 24px; z-index: 2; color: #ffffff;">
                    <span style="font-size: 0.72rem; letter-spacing: 0.16em; text-transform: uppercase; color: var(--accent-bronze); font-weight: 700; display: block;">Commercial Direction</span>
                    <span style="font-family: var(--font-serif); font-size: 1.25rem;">Cinema &bull; TVCs &bull; Brand Narratives</span>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- ===================================================================
     DIRECTORIAL CREED & CRAFT PHILOSOPHY
     =================================================================== -->
<section class="section-padding bg-surface" style="border-top: 1px solid var(--border-light); border-bottom: 1px solid var(--border-light);">
    <div class="container">
        <div class="row" style="align-items: center;">
            <div class="col-md-6" style="margin-bottom: 36px;">
                <div style="position: relative; border-radius: var(--radius-sm); overflow: hidden; box-shadow: 0 16px 40px rgba(0,0,0,0.08); border: 1px solid var(--border-light);">
                    <img src="images/resource/slider03.jpg" alt="Directorial Monitor & Cinematography on Soundstage" style="width: 100%; height: auto; display: block;" loading="lazy">
                    <div style="position: absolute; bottom: 0; left: 0; right: 0; padding: 18px 20px; background: linear-gradient(to top, rgba(20,24,33,0.9), transparent); color: #ffffff;">
                        <span style="font-size: 0.72rem; letter-spacing: 0.14em; text-transform: uppercase; color: var(--accent-bronze); font-weight: 700; display: block;">Directorial Craft</span>
                        <span style="font-size: 0.9rem;">Behind the monitor: Precision lighting, camera movement &amp; shot discipline</span>
                    </div>
                </div>
            </div>

            <div class="col-md-6">
                <span class="editorial-badge">Directorial Creed</span>
                <h2 style="font-size: clamp(2rem, 3.2vw, 2.65rem); margin: 14px 0 20px;">
                    Great Films Begin With Narrative Clarity &amp; Emotional Truth.
                </h2>
                <p style="color: var(--text-secondary); font-size: 1.05rem; line-height: 1.8; margin-bottom: 16px;">
                    Sohel Vaseem operates at the convergence of high-craft filmmaking and rigorous brand architecture. For over twenty years, he has brought a director&rsquo;s eye to the emotional core of human stories and a strategist&rsquo;s precision to corporate positioning.
                </p>
                <p style="color: var(--text-secondary); font-size: 1.05rem; line-height: 1.8; margin-bottom: 24px;">
                    From directing national television commercials to architecting corporate monographs for emerging enterprises, his methodology remains unyielding: strip away superficial distraction, discover the unmistakable narrative core, and execute with obsessive cinematic discipline.
                </p>

                <div style="padding: 20px 24px; background: var(--bg-card); border-left: 3px solid var(--accent-bronze); border-radius: 0 var(--radius-xs) var(--radius-xs) 0;">
                    <p style="font-family: var(--font-serif); font-style: italic; font-size: 1.15rem; color: var(--text-primary); margin-bottom: 8px;">
                        &ldquo;A commercial should never merely announce a product. It should capture an indelible human feeling that permanently elevates brand stature.&rdquo;
                    </p>
                    <span style="font-size: 0.82rem; letter-spacing: 0.1em; text-transform: uppercase; color: var(--accent-bronze); font-weight: 700;">
                        &mdash; Sohel Vaseem, Filmmaker &amp; Director
                    </span>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- ===================================================================
     THE FOUR PILLARS OF FILMMAKING CAPABILITIES
     =================================================================== -->
<section class="section-padding bg-canvas">
    <div class="container">
        <div style="max-width: 760px; margin: 0 auto 56px; text-align: center;">
            <span class="editorial-badge">Directorial Disciplines</span>
            <h2 style="font-size: clamp(2rem, 3.2vw, 2.75rem); margin: 14px 0;">Directorial Capabilities &amp; Production Formats</h2>
            <p style="color: var(--text-secondary); font-size: 1.05rem; line-height: 1.8;">
                End-to-end directorial leadership from conceptual scriptwriting and storyboards to 4K cinematography, multi-camera sets, and master sound delivery.
            </p>
        </div>

        <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(280px, 1fr)); gap: 28px;">
            <!-- Pillar 1 -->
            <div style="background: var(--bg-card); border: 1px solid var(--border-light); border-radius: var(--radius-sm); padding: 36px 30px; transition: transform 0.3s ease, box-shadow 0.3s ease;">
                <div style="font-size: 0.8rem; font-weight: 800; letter-spacing: 0.16em; color: var(--accent-bronze); margin-bottom: 14px;">01 &mdash; BROADCAST</div>
                <div style="width: 48px; height: 48px; border-radius: 6px; background: rgba(157, 120, 68, 0.12); display: flex; align-items: center; justify-content: center; color: var(--accent-bronze); font-size: 1.3rem; margin-bottom: 20px;">
                    <i class="fa-solid fa-tv"></i>
                </div>
                <h3 style="font-size: 1.35rem; margin-bottom: 12px;">Television Commercials (TVCs)</h3>
                <p style="color: var(--text-secondary); font-size: 0.95rem; line-height: 1.7; margin-bottom: 0;">
                    30-second and 60-second broadcast spots formulated for high emotional impact, memorability, and commercial audience retention across national networks.
                </p>
            </div>

            <!-- Pillar 2 -->
            <div style="background: var(--bg-card); border: 1px solid var(--border-light); border-radius: var(--radius-sm); padding: 36px 30px; transition: transform 0.3s ease, box-shadow 0.3s ease;">
                <div style="font-size: 0.8rem; font-weight: 800; letter-spacing: 0.16em; color: var(--accent-bronze); margin-bottom: 14px;">02 &mdash; NARRATIVE</div>
                <div style="width: 48px; height: 48px; border-radius: 6px; background: rgba(157, 120, 68, 0.12); display: flex; align-items: center; justify-content: center; color: var(--accent-bronze); font-size: 1.3rem; margin-bottom: 20px;">
                    <i class="fa-solid fa-film"></i>
                </div>
                <h3 style="font-size: 1.35rem; margin-bottom: 12px;">Corporate Documentaries &amp; Monographs</h3>
                <p style="color: var(--text-secondary); font-size: 0.95rem; line-height: 1.7; margin-bottom: 0;">
                    In-depth cinematic monographs capturing manufacturing scale, founding heritage, executive vision, and institutional milestones for enterprises.
                </p>
            </div>

            <!-- Pillar 3 -->
            <div style="background: var(--bg-card); border: 1px solid var(--border-light); border-radius: var(--radius-sm); padding: 36px 30px; transition: transform 0.3s ease, box-shadow 0.3s ease;">
                <div style="font-size: 0.8rem; font-weight: 800; letter-spacing: 0.16em; color: var(--accent-bronze); margin-bottom: 14px;">03 &mdash; PRE-PRODUCTION</div>
                <div style="width: 48px; height: 48px; border-radius: 6px; background: rgba(157, 120, 68, 0.12); display: flex; align-items: center; justify-content: center; color: var(--accent-bronze); font-size: 1.3rem; margin-bottom: 20px;">
                    <i class="fa-solid fa-pen-nib"></i>
                </div>
                <h3 style="font-size: 1.35rem; margin-bottom: 12px;">Conceptual Scripting &amp; Storyboards</h3>
                <p style="color: var(--text-secondary); font-size: 0.95rem; line-height: 1.7; margin-bottom: 0;">
                    Rigorous pre-visualization including directorial shooting scripts, camera blocking diagrams, lighting blueprints, and frame-by-frame storyboard art.
                </p>
            </div>

            <!-- Pillar 4 -->
            <div style="background: var(--bg-card); border: 1px solid var(--border-light); border-radius: var(--radius-sm); padding: 36px 30px; transition: transform 0.3s ease, box-shadow 0.3s ease;">
                <div style="font-size: 0.8rem; font-weight: 800; letter-spacing: 0.16em; color: var(--accent-bronze); margin-bottom: 14px;">04 &mdash; CINEMATOGRAPHY</div>
                <div style="width: 48px; height: 48px; border-radius: 6px; background: rgba(157, 120, 68, 0.12); display: flex; align-items: center; justify-content: center; color: var(--accent-bronze); font-size: 1.3rem; margin-bottom: 20px;">
                    <i class="fa-solid fa-video"></i>
                </div>
                <h3 style="font-size: 1.35rem; margin-bottom: 12px;">Cinematography &amp; Master Post</h3>
                <p style="color: var(--text-secondary); font-size: 0.95rem; line-height: 1.7; margin-bottom: 0;">
                    Direction of high dynamic range cinema cameras, master lighting choreography, editorial assembly, orchestral score integration, and final color grading.
                </p>
            </div>
        </div>
    </div>
</section>

<!-- ===================================================================
     CURATED PRODUCTION ARCHIVE & STILLS SHOWCASE
     =================================================================== -->
<section class="section-padding bg-surface" style="border-top: 1px solid var(--border-light);">
    <div class="container">
        <div style="display: flex; justify-content: space-between; align-items: flex-end; flex-wrap: wrap; gap: 20px; margin-bottom: 48px;">
            <div>
                <span class="editorial-badge">Verified Production Archive</span>
                <h2 style="font-size: clamp(2rem, 3.2vw, 2.75rem); margin: 12px 0 6px;">Directorial Stills &amp; Key Visuals</h2>
                <p style="color: var(--text-secondary); margin: 0; font-size: 1.05rem;">
                    Archived stills from commercials, key visual art, television series, and on-set production assets.
                </p>
            </div>
            <div>
                <a href="portfolio.php" class="btn btn-outline" style="border-color: var(--border-medium);">
                    View Full Portfolio <i class="fa-solid fa-arrow-right" style="margin-left: 8px;"></i>
                </a>
            </div>
        </div>

        <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(320px, 1fr)); gap: 28px;">
            
            <!-- Still 1: Infinite Horizon -->
            <div style="background: var(--bg-card); border: 1px solid var(--border-light); border-radius: var(--radius-sm); overflow: hidden; display: flex; flex-direction: column;">
                <a href="#" data-lightbox-img="images/resource/slider01.jpg" data-caption="Infinite Horizon — Natura Commercial Ad Campaign Film Stills" style="display: block; position: relative; aspect-ratio: 16/10; overflow: hidden;">
                    <img src="images/resource/slider01.jpg" alt="Infinite Horizon Natura Commercial Film" style="width: 100%; height: 100%; object-fit: cover; transition: transform 0.4s ease;" loading="lazy">
                    <span style="position: absolute; bottom: 12px; right: 12px; background: rgba(0,0,0,0.7); color: #ffffff; padding: 4px 10px; border-radius: 4px; font-size: 0.75rem;">
                        <i class="fa-solid fa-expand"></i> Zoom
                    </span>
                </a>
                <div style="padding: 24px; flex-grow: 1; display: flex; flex-direction: column;">
                    <div style="font-size: 0.76rem; letter-spacing: 0.12em; text-transform: uppercase; color: var(--accent-bronze); font-weight: 700; margin-bottom: 6px;">
                        Commercial Ad Campaign
                    </div>
                    <h3 style="font-size: 1.25rem; margin-bottom: 10px;">Infinite Horizon &bull; Natura Film</h3>
                    <p style="color: var(--text-secondary); font-size: 0.92rem; line-height: 1.6; margin-bottom: 0;">
                        National multi-location commercial ad campaign featuring outdoor natural-light cinematography, vast horizon framing, and brand storytelling.
                    </p>
                </div>
            </div>

            <!-- Still 2: TVC Studio Camera Rig -->
            <div style="background: var(--bg-card); border: 1px solid var(--border-light); border-radius: var(--radius-sm); overflow: hidden; display: flex; flex-direction: column;">
                <a href="#" data-lightbox-img="images/resource/slider02.jpg" data-caption="Commercial Multi-Camera Studio Setup & Direction" style="display: block; position: relative; aspect-ratio: 16/10; overflow: hidden;">
                    <img src="images/resource/slider02.jpg" alt="Commercial Multi-Camera Studio Setup" style="width: 100%; height: 100%; object-fit: cover; transition: transform 0.4s ease;" loading="lazy">
                    <span style="position: absolute; bottom: 12px; right: 12px; background: rgba(0,0,0,0.7); color: #ffffff; padding: 4px 10px; border-radius: 4px; font-size: 0.75rem;">
                        <i class="fa-solid fa-expand"></i> Zoom
                    </span>
                </a>
                <div style="padding: 24px; flex-grow: 1; display: flex; flex-direction: column;">
                    <div style="font-size: 0.76rem; letter-spacing: 0.12em; text-transform: uppercase; color: var(--accent-bronze); font-weight: 700; margin-bottom: 6px;">
                        Studio Production &bull; TVC
                    </div>
                    <h3 style="font-size: 1.25rem; margin-bottom: 10px;">Commercial Television Studio Production</h3>
                    <p style="color: var(--text-secondary); font-size: 0.92rem; line-height: 1.6; margin-bottom: 0;">
                        Studio lighting choreography and high-speed multi-camera tracking engineered for product commercial films and television broadcasts.
                    </p>
                </div>
            </div>

            <!-- Still 3: Corporate Documentaries -->
            <div style="background: var(--bg-card); border: 1px solid var(--border-light); border-radius: var(--radius-sm); overflow: hidden; display: flex; flex-direction: column;">
                <a href="#" data-lightbox-img="images/resource/slider03.jpg" data-caption="Executive Monographs & Corporate Documentaries" style="display: block; position: relative; aspect-ratio: 16/10; overflow: hidden;">
                    <img src="images/resource/slider03.jpg" alt="Corporate Documentaries & Executive Narratives" style="width: 100%; height: 100%; object-fit: cover; transition: transform 0.4s ease;" loading="lazy">
                    <span style="position: absolute; bottom: 12px; right: 12px; background: rgba(0,0,0,0.7); color: #ffffff; padding: 4px 10px; border-radius: 4px; font-size: 0.75rem;">
                        <i class="fa-solid fa-expand"></i> Zoom
                    </span>
                </a>
                <div style="padding: 24px; flex-grow: 1; display: flex; flex-direction: column;">
                    <div style="font-size: 0.76rem; letter-spacing: 0.12em; text-transform: uppercase; color: var(--accent-bronze); font-weight: 700; margin-bottom: 6px;">
                        Corporate Monograph
                    </div>
                    <h3 style="font-size: 1.25rem; margin-bottom: 10px;">Enterprise Leadership &amp; Heritage Documentaries</h3>
                    <p style="color: var(--text-secondary); font-size: 0.92rem; line-height: 1.6; margin-bottom: 0;">
                        Directorial monitor setup capturing boardroom leadership profiles, manufacturing operations, and enterprise legacy narratives.
                    </p>
                </div>
            </div>

            <!-- Still 4: Theatrical Poster Art -->
            <div style="background: var(--bg-card); border: 1px solid var(--border-light); border-radius: var(--radius-sm); overflow: hidden; display: flex; flex-direction: column;">
                <a href="#" data-lightbox-img="images/portfolio/07.jpg" data-caption="Theatrical Commercial Poster Art & Key Visuals" style="display: block; position: relative; aspect-ratio: 16/10; overflow: hidden;">
                    <img src="images/portfolio/07.jpg" alt="Theatrical Commercial Poster Art" style="width: 100%; height: 100%; object-fit: cover; transition: transform 0.4s ease;" loading="lazy">
                    <span style="position: absolute; bottom: 12px; right: 12px; background: rgba(0,0,0,0.7); color: #ffffff; padding: 4px 10px; border-radius: 4px; font-size: 0.75rem;">
                        <i class="fa-solid fa-expand"></i> Zoom
                    </span>
                </a>
                <div style="padding: 24px; flex-grow: 1; display: flex; flex-direction: column;">
                    <div style="font-size: 0.76rem; letter-spacing: 0.12em; text-transform: uppercase; color: var(--accent-bronze); font-weight: 700; margin-bottom: 6px;">
                        Key Visual &bull; Theatrical Release
                    </div>
                    <h3 style="font-size: 1.25rem; margin-bottom: 10px;">Theatrical Commercial Key Visual Poster</h3>
                    <p style="color: var(--text-secondary); font-size: 0.92rem; line-height: 1.6; margin-bottom: 0;">
                        Cinematic key visual creation, lighting mood boards, and promotional artwork engineered for theatrical premiere release.
                    </p>
                </div>
            </div>

            <!-- Still 5: Storyboards -->
            <div style="background: var(--bg-card); border: 1px solid var(--border-light); border-radius: var(--radius-sm); overflow: hidden; display: flex; flex-direction: column;">
                <a href="#" data-lightbox-img="images/portfolio/14.jpg" data-caption="Directorial Storyboards & Framing Visualization" style="display: block; position: relative; aspect-ratio: 16/10; overflow: hidden;">
                    <img src="images/portfolio/14.jpg" alt="Television Commercial Storyboards" style="width: 100%; height: 100%; object-fit: cover; transition: transform 0.4s ease;" loading="lazy">
                    <span style="position: absolute; bottom: 12px; right: 12px; background: rgba(0,0,0,0.7); color: #ffffff; padding: 4px 10px; border-radius: 4px; font-size: 0.75rem;">
                        <i class="fa-solid fa-expand"></i> Zoom
                    </span>
                </a>
                <div style="padding: 24px; flex-grow: 1; display: flex; flex-direction: column;">
                    <div style="font-size: 0.76rem; letter-spacing: 0.12em; text-transform: uppercase; color: var(--accent-bronze); font-weight: 700; margin-bottom: 6px;">
                        Pre-Visualization &bull; Art
                    </div>
                    <h3 style="font-size: 1.25rem; margin-bottom: 10px;">Frame-by-Frame TVC Storyboard Art</h3>
                    <p style="color: var(--text-secondary); font-size: 0.92rem; line-height: 1.6; margin-bottom: 0;">
                        Hand-drawn directorial storyboards establishing scene transitions, camera angles, temporal pacing, and dramatic beats before filming.
                    </p>
                </div>
            </div>

            <!-- Still 6: Television Drama Series -->
            <div style="background: var(--bg-card); border: 1px solid var(--border-light); border-radius: var(--radius-sm); overflow: hidden; display: flex; flex-direction: column;">
                <a href="#" data-lightbox-img="images/resource/g2video.jpg" data-caption="Prime-Time Television Drama Series Direction" style="display: block; position: relative; aspect-ratio: 16/10; overflow: hidden;">
                    <img src="images/resource/g2video.jpg" alt="Prime-Time Television Drama Series" style="width: 100%; height: 100%; object-fit: cover; transition: transform 0.4s ease;" loading="lazy">
                    <span style="position: absolute; bottom: 12px; right: 12px; background: rgba(0,0,0,0.7); color: #ffffff; padding: 4px 10px; border-radius: 4px; font-size: 0.75rem;">
                        <i class="fa-solid fa-expand"></i> Zoom
                    </span>
                </a>
                <div style="padding: 24px; flex-grow: 1; display: flex; flex-direction: column;">
                    <div style="font-size: 0.76rem; letter-spacing: 0.12em; text-transform: uppercase; color: var(--accent-bronze); font-weight: 700; margin-bottom: 6px;">
                        Television Drama &bull; Broadcast
                    </div>
                    <h3 style="font-size: 1.25rem; margin-bottom: 10px;">Prime-Time Television Drama Series</h3>
                    <p style="color: var(--text-secondary); font-size: 0.92rem; line-height: 1.6; margin-bottom: 0;">
                        Directorial staging for serialized multi-episode television drama series, commanding multi-camera continuity and ensemble performances.
                    </p>
                </div>
            </div>

        </div>
    </div>
</section>

<!-- ===================================================================
     MEDIA & PRESS COVERAGE ON FILMMAKING
     =================================================================== -->
<section class="section-padding bg-canvas" style="border-top: 1px solid var(--border-light);">
    <div class="container">
        <div style="max-width: 760px; margin: 0 auto 52px; text-align: center;">
            <span class="editorial-badge">National Press</span>
            <h2 style="font-size: clamp(2rem, 3.2vw, 2.75rem); margin: 14px 0;">Directorial Acumen in National Media</h2>
            <p style="color: var(--text-secondary); font-size: 1.05rem; line-height: 1.8;">
                Verified press features and national newspaper coverage highlighting Sohel Vaseem's directorial work across television, commercials, and visual storytelling.
            </p>
        </div>

        <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(320px, 1fr)); gap: 32px;">
            
            <!-- Press 1: The Hindu -->
            <div style="background: var(--bg-card); border: 1px solid var(--border-light); border-radius: var(--radius-sm); overflow: hidden; padding: 24px;">
                <a href="#" data-lightbox-img="images/resource/Hindu_zoom.jpg" data-caption="The Hindu — Directorial Acumen &amp; Cinematic Vision" style="display: block; position: relative; height: 220px; overflow: hidden; border-radius: var(--radius-xs); margin-bottom: 18px;">
                    <img src="images/resource/Hindu.jpg" alt="The Hindu - Directorial Acumen &amp; Cinematic Vision" style="width: 100%; height: 100%; object-fit: cover;" loading="lazy">
                    <span style="position: absolute; bottom: 10px; right: 10px; background: rgba(0,0,0,0.7); color: #ffffff; padding: 4px 8px; border-radius: 3px; font-size: 0.72rem;">
                        <i class="fa-solid fa-magnifying-glass-plus"></i> Read Article
                    </span>
                </a>
                <div style="font-size: 0.76rem; letter-spacing: 0.1em; text-transform: uppercase; color: var(--accent-bronze); font-weight: 700; margin-bottom: 6px;">
                    The Hindu &bull; National Daily
                </div>
                <h4 style="font-size: 1.2rem; margin-bottom: 8px;">Directorial Acumen &amp; Cinematic Vision</h4>
                <p style="color: var(--text-secondary); font-size: 0.92rem; line-height: 1.6; margin-bottom: 0;">
                    National newspaper coverage highlighting Sohel Vaseem&rsquo;s innovative approach to visual storytelling, brand narratives, and production leadership.
                </p>
            </div>

            <!-- Press 2: Deccan Chronicle -->
            <div style="background: var(--bg-card); border: 1px solid var(--border-light); border-radius: var(--radius-sm); overflow: hidden; padding: 24px;">
                <a href="#" data-lightbox-img="images/resource/chronicle_zoom.jpg" data-caption="Deccan Chronicle — Television Series &amp; Ad Direction Spotlight" style="display: block; position: relative; height: 220px; overflow: hidden; border-radius: var(--radius-xs); margin-bottom: 18px;">
                    <img src="images/resource/chronicle.jpg" alt="Deccan Chronicle - Television Series &amp; Ad Direction" style="width: 100%; height: 100%; object-fit: cover;" loading="lazy">
                    <span style="position: absolute; bottom: 10px; right: 10px; background: rgba(0,0,0,0.7); color: #ffffff; padding: 4px 8px; border-radius: 3px; font-size: 0.72rem;">
                        <i class="fa-solid fa-magnifying-glass-plus"></i> Read Article
                    </span>
                </a>
                <div style="font-size: 0.76rem; letter-spacing: 0.1em; text-transform: uppercase; color: var(--accent-bronze); font-weight: 700; margin-bottom: 6px;">
                    Deccan Chronicle &bull; Print Feature
                </div>
                <h4 style="font-size: 1.2rem; margin-bottom: 8px;">Television Series &amp; Ad Direction Spotlight</h4>
                <p style="color: var(--text-secondary); font-size: 0.92rem; line-height: 1.6; margin-bottom: 0;">
                    In-depth feature examining Sohel&rsquo;s directorial execution across television drama serials and nationwide advertising campaigns.
                </p>
            </div>

            <!-- Press 3: The Siasat Daily -->
            <div style="background: var(--bg-card); border: 1px solid var(--border-light); border-radius: var(--radius-sm); overflow: hidden; padding: 24px;">
                <a href="#" data-lightbox-img="images/resource/siasatone_zoom.jpg" data-caption="The Siasat Daily — Acclaimed Filmmaker &amp; Directorial Craft" style="display: block; position: relative; height: 220px; overflow: hidden; border-radius: var(--radius-xs); margin-bottom: 18px;">
                    <img src="images/resource/siasatone.jpg" alt="The Siasat Daily - Acclaimed Filmmaker &amp; Directorial Craft" style="width: 100%; height: 100%; object-fit: cover;" loading="lazy">
                    <span style="position: absolute; bottom: 10px; right: 10px; background: rgba(0,0,0,0.7); color: #ffffff; padding: 4px 8px; border-radius: 3px; font-size: 0.72rem;">
                        <i class="fa-solid fa-magnifying-glass-plus"></i> Read Article
                    </span>
                </a>
                <div style="font-size: 0.76rem; letter-spacing: 0.1em; text-transform: uppercase; color: var(--accent-bronze); font-weight: 700; margin-bottom: 6px;">
                    The Siasat Daily &bull; National Daily
                </div>
                <h4 style="font-size: 1.2rem; margin-bottom: 8px;">Acclaimed Filmmaker &amp; Directorial Craft</h4>
                <p style="color: var(--text-secondary); font-size: 0.92rem; line-height: 1.6; margin-bottom: 0;">
                    Prominent coverage spotlighting Sohel Vaseem&rsquo;s national advertising campaigns, directorial craft, and cultural storytelling.
                </p>
            </div>

        </div>

        <div style="text-align: center; margin-top: 40px;">
            <a href="media.php" class="btn btn-outline" style="border-color: var(--border-medium);">
                Explore All Press Coverage <i class="fa-solid fa-arrow-right" style="margin-left: 8px;"></i>
            </a>
        </div>
    </div>
</section>

<!-- ===================================================================
     COMMISSION / PRODUCTION INQUIRY CTA
     =================================================================== -->
<section class="section-padding bg-surface" style="border-top: 1px solid var(--border-light); text-align: center;">
    <div class="container">
        <div style="max-width: 720px; margin: 0 auto;">
            <span class="editorial-badge">Directorial Engagement</span>
            <h2 style="font-size: clamp(2.2rem, 3.6vw, 3rem); margin: 16px 0 20px;">
                Commission a Commercial Film or Documentary
            </h2>
            <p style="font-size: 1.1rem; color: var(--text-secondary); line-height: 1.8; margin-bottom: 36px;">
                Whether you require a nationwide television commercial (TVC), a signature brand monograph, or directorial leadership on soundstages, let us discuss your production vision and delivery timelines.
            </p>
            <div style="display: flex; gap: 16px; justify-content: center; flex-wrap: wrap;">
                <a href="contact.php?service=film" class="btn btn-primary" style="padding: 14px 34px;">
                    Commission a Project <i class="fa-solid fa-arrow-right" style="margin-left: 8px;"></i>
                </a>
                <a href="tel:+919014365364" class="btn btn-outline" style="padding: 14px 28px;">
                    <i class="fa-solid fa-phone" style="margin-right: 8px; color: var(--accent-bronze);"></i> +91 9014 365 364
                </a>
            </div>
        </div>
    </div>
</section>

<?php require_once __DIR__ . '/footer.php'; ?>

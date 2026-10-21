/**
 * Soheal Vaseem - Film Maker & Brand Strategist
 * Core Interactive JavaScript (Zero external dependencies)
 */

document.addEventListener('DOMContentLoaded', function () {
  'use strict';

  // 1. Sticky Navbar
  const navbar = document.querySelector('.main-navbar');
  if (navbar) {
    window.addEventListener('scroll', function () {
      if (window.scrollY > 40) {
        navbar.classList.add('scrolled');
      } else {
        navbar.classList.remove('scrolled');
      }
    });
  }

  // 2. Mobile Offcanvas Navigation (Animated Luxury Toggle & Drawer)
  const mobileToggle = document.querySelector('.mobile-toggle');
  const mobileDrawer = document.querySelector('.mobile-drawer');
  const drawerClose = document.querySelector('.drawer-close');
  const drawerBackdrop = document.querySelector('.drawer-backdrop');
  const drawerLinks = document.querySelectorAll('.drawer-link, .drawer-cta-btn');

  function openDrawer() {
    if (mobileDrawer && drawerBackdrop) {
      mobileDrawer.classList.add('active');
      drawerBackdrop.classList.add('active');
      if (mobileToggle) mobileToggle.classList.add('active');
      document.body.classList.add('drawer-open');
      document.body.style.overflow = 'hidden';
    }
  }

  function closeDrawer() {
    if (mobileDrawer && drawerBackdrop) {
      mobileDrawer.classList.remove('active');
      drawerBackdrop.classList.remove('active');
      if (mobileToggle) mobileToggle.classList.remove('active');
      document.body.classList.remove('drawer-open');
      document.body.style.overflow = '';
    }
  }

  if (mobileToggle) {
    mobileToggle.addEventListener('click', function(e) {
      e.stopPropagation();
      if (mobileDrawer && mobileDrawer.classList.contains('active')) {
        closeDrawer();
      } else {
        openDrawer();
      }
    });
  }

  if (drawerClose) drawerClose.addEventListener('click', closeDrawer);
  if (drawerBackdrop) drawerBackdrop.addEventListener('click', closeDrawer);
  drawerLinks.forEach(link => link.addEventListener('click', closeDrawer));

  // 3. Hero Visual Slider
  const slides = document.querySelectorAll('.hero-slide');
  const prevSlideBtn = document.querySelector('.hero-slide-btn.prev');
  const nextSlideBtn = document.querySelector('.hero-slide-btn.next');
  const sliderDots = document.querySelectorAll('.slider-dot');
  const scenePills = document.querySelectorAll('.scene-pill');
  const captionText = document.querySelector('.hero-slide-caption-badge .caption-text');
  const heroCinema = document.querySelector('.hero-cinema');

  if (slides.length > 0) {
    let currentSlide = 0;
    let slideInterval = null;

    function showSlide(index) {
      if (index < 0) index = slides.length - 1;
      if (index >= slides.length) index = 0;
      currentSlide = index;

      slides.forEach((slide, i) => {
        slide.classList.toggle('active', i === index);
      });

      if (sliderDots.length > 0) {
        sliderDots.forEach((dot, i) => {
          dot.classList.toggle('active', i === index);
        });
      }

      if (scenePills.length > 0) {
        scenePills.forEach((pill, i) => {
          pill.classList.toggle('active', i === index);
        });
      }

      if (captionText && slides[index]) {
        const caption = slides[index].getAttribute('data-caption');
        if (caption) {
          captionText.textContent = caption;
        }
      }
    }

    function nextSlide() {
      showSlide(currentSlide + 1);
    }

    function prevSlide() {
      showSlide(currentSlide - 1);
    }

    if (nextSlideBtn) {
      nextSlideBtn.addEventListener('click', function (e) {
        e.preventDefault();
        nextSlide();
        resetTimer();
      });
    }

    if (prevSlideBtn) {
      prevSlideBtn.addEventListener('click', function (e) {
        e.preventDefault();
        prevSlide();
        resetTimer();
      });
    }

    sliderDots.forEach((dot) => {
      dot.addEventListener('click', function () {
        const idx = parseInt(this.getAttribute('data-index'), 10);
        if (!isNaN(idx)) {
          showSlide(idx);
          resetTimer();
        }
      });
    });

    scenePills.forEach((pill) => {
      pill.addEventListener('click', function () {
        const idx = parseInt(this.getAttribute('data-index'), 10);
        if (!isNaN(idx)) {
          showSlide(idx);
          resetTimer();
        }
      });
    });

    function startTimer() {
      if (!slideInterval) {
        slideInterval = setInterval(nextSlide, 6000);
      }
    }

    function stopTimer() {
      if (slideInterval) {
        clearInterval(slideInterval);
        slideInterval = null;
      }
    }

    function resetTimer() {
      stopTimer();
      startTimer();
    }

    if (heroCinema) {
      heroCinema.addEventListener('mouseenter', stopTimer);
      heroCinema.addEventListener('mouseleave', startTimer);
    }

    startTimer();
  }

  // 4. Quote Modal Logic
  const quoteModal = document.getElementById('quoteModal');
  const quoteTriggers = document.querySelectorAll('.quote-btn-trigger');
  const quoteCloseBtn = quoteModal ? quoteModal.querySelector('.modal-close-btn') : null;

  function openQuoteModal(serviceName) {
    if (quoteModal) {
      if (serviceName) {
        const quoteforSelect = quoteModal.querySelector('select[name="quotefor"]');
        if (quoteforSelect) {
          quoteforSelect.value = serviceName;
        }
      }
      quoteModal.classList.add('active');
      document.body.style.overflow = 'hidden';
    }
  }

  function closeQuoteModal() {
    if (quoteModal) {
      quoteModal.classList.remove('active');
      document.body.style.overflow = '';
    }
  }

  quoteTriggers.forEach(btn => {
    btn.addEventListener('click', function (e) {
      e.preventDefault();
      const service = this.getAttribute('data-service') || '';
      openQuoteModal(service);
    });
  });

  if (quoteCloseBtn) quoteCloseBtn.addEventListener('click', closeQuoteModal);
  if (quoteModal) {
    quoteModal.addEventListener('click', function (e) {
      if (e.target === quoteModal) closeQuoteModal();
    });
  }

  // 5. Video Player Modal Logic
  const videoModal = document.getElementById('videoModal');
  const videoTriggers = document.querySelectorAll('[data-video-id]');
  const videoIframe = document.getElementById('videoModalIframe');
  const videoCloseBtn = videoModal ? videoModal.querySelector('.modal-close-btn') : null;

  function openVideoModal(videoId) {
    if (videoModal && videoIframe && videoId) {
      videoIframe.src = `https://www.youtube.com/embed/${videoId}?autoplay=1&rel=0`;
      videoModal.classList.add('active');
      document.body.style.overflow = 'hidden';
    }
  }

  function closeVideoModal() {
    if (videoModal && videoIframe) {
      videoIframe.src = '';
      videoModal.classList.remove('active');
      document.body.style.overflow = '';
    }
  }

  videoTriggers.forEach(el => {
    el.addEventListener('click', function (e) {
      e.preventDefault();
      const videoId = this.getAttribute('data-video-id');
      if (videoId) openVideoModal(videoId);
    });
  });

  if (videoCloseBtn) videoCloseBtn.addEventListener('click', closeVideoModal);
  if (videoModal) {
    videoModal.addEventListener('click', function (e) {
      if (e.target === videoModal) closeVideoModal();
    });
  }

  // 6. Image Lightbox Modal Logic
  const imageModal = document.getElementById('imageLightboxModal');
  const lightboxTriggers = document.querySelectorAll('[data-lightbox-img]');
  const lightboxImg = document.getElementById('lightboxModalImg');
  const lightboxCaption = document.getElementById('lightboxModalCaption');
  const imageCloseBtn = imageModal ? imageModal.querySelector('.modal-close-btn') : null;

  function openImageLightbox(imgSrc, caption) {
    if (imageModal && lightboxImg) {
      lightboxImg.src = imgSrc;
      if (lightboxCaption) lightboxCaption.textContent = caption || '';
      imageModal.classList.add('active');
      document.body.style.overflow = 'hidden';
    }
  }

  function closeImageLightbox() {
    if (imageModal) {
      imageModal.classList.remove('active');
      document.body.style.overflow = '';
    }
  }

  lightboxTriggers.forEach(el => {
    el.addEventListener('click', function (e) {
      e.preventDefault();
      const src = this.getAttribute('data-lightbox-img');
      const caption = this.getAttribute('data-caption') || this.getAttribute('title') || '';
      if (src) openImageLightbox(src, caption);
    });
  });

  if (imageCloseBtn) imageCloseBtn.addEventListener('click', closeImageLightbox);
  if (imageModal) {
    imageModal.addEventListener('click', function (e) {
      if (e.target === imageModal) closeImageLightbox();
    });
  }

  // 7. Global ESC Key to Close Active Modals
  document.addEventListener('keydown', function (e) {
    if (e.key === 'Escape') {
      closeQuoteModal();
      closeVideoModal();
      closeImageLightbox();
      closeDrawer();
    }
  });

  // 8. Portfolio Category Filter
  const filterBtns = document.querySelectorAll('.filter-btn, .portfolio-filter-btn');
  const portfolioItems = document.querySelectorAll('.portfolio-item');

  if (filterBtns.length > 0 && portfolioItems.length > 0) {
    filterBtns.forEach(btn => {
      btn.addEventListener('click', function () {
        filterBtns.forEach(b => b.classList.remove('active'));
        this.classList.add('active');

        const filter = this.getAttribute('data-filter');

        portfolioItems.forEach(item => {
          if (filter === 'all' || item.getAttribute('data-category') === filter) {
            item.style.display = 'flex';
            setTimeout(() => { item.style.opacity = '1'; item.style.transform = 'scale(1)'; }, 50);
          } else {
            item.style.opacity = '0';
            item.style.transform = 'scale(0.95)';
            setTimeout(() => { item.style.display = 'none'; }, 250);
          }
        });
      });
    });
  }

  // 9. Intersection Observer for Scroll Reveals
  if ('IntersectionObserver' in window) {
    const revealTargets = document.querySelectorAll(
      '.featured-work-card, .expertise-preview-card, .work-card-editorial, .insight-card-editorial, .philosophy-editorial-wrapper'
    );

    const revealObserver = new IntersectionObserver(
      (entries, observer) => {
        entries.forEach(entry => {
          if (entry.isIntersecting) {
            entry.target.classList.add('is-revealed');
            observer.unobserve(entry.target);
          }
        });
      },
      {
        threshold: 0.12,
        rootMargin: '0px 0px -40px 0px'
      }
    );

    revealTargets.forEach(el => {
      el.classList.add('reveal-item');
      revealObserver.observe(el);
    });
  }

  // 10. Smooth Scroll for Anchor Links
  document.querySelectorAll('a[href^="#"]:not([href="#"])').forEach(anchor => {
    anchor.addEventListener('click', function (e) {
      const targetId = this.getAttribute('href');
      const targetEl = document.querySelector(targetId);
      if (targetEl) {
        e.preventDefault();
        const navHeight = navbar ? navbar.offsetHeight : 0;
        const targetPos = targetEl.getBoundingClientRect().top + window.scrollY - navHeight;
        window.scrollTo({
          top: targetPos,
          behavior: 'smooth'
        });
      }
    });
  });
});

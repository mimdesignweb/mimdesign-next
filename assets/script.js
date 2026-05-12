/* ============================================================
   MIMDESIGN LP — script.js
   ============================================================ */

(function () {
  'use strict';

  // ─── Header Scroll ──────────────────────────────────────────
  const header = document.getElementById('header');

  // ─── Hamburger Menu state (declared early for handleScroll) ─
  const hamburger = document.getElementById('hamburger');
  const nav       = document.getElementById('nav');
  const overlay   = document.getElementById('nav-overlay');

  let menuOpen     = false;
  let animating    = false;
  let savedScrollY = 0;

  function handleScroll() {
    if (menuOpen) return;
    if (window.scrollY > 40) {
      header.classList.add('scrolled');
    } else {
      header.classList.remove('scrolled');
    }
  }

  window.addEventListener('scroll', handleScroll, { passive: true });
  handleScroll();

  function lockScroll() {
    savedScrollY = window.scrollY;
    document.body.style.position = 'fixed';
    document.body.style.top      = `-${savedScrollY}px`;
    document.body.style.left     = '0';
    document.body.style.width    = '100%';
    document.body.style.overflow = 'hidden';
  }

  function unlockScroll() {
    document.body.style.position = '';
    document.body.style.top      = '';
    document.body.style.left     = '';
    document.body.style.width    = '';
    document.body.style.overflow = '';
    window.scrollTo(0, savedScrollY);
  }

  function openMenu() {
    if (animating || menuOpen) return;
    animating = true;
    menuOpen  = true;

    nav.classList.add('open');
    overlay.classList.add('open');
    hamburger.classList.add('open');
    hamburger.setAttribute('aria-label', 'メニューを閉じる');
    nav.setAttribute('aria-hidden', 'false');
    overlay.setAttribute('aria-hidden', 'false');

    lockScroll();

    setTimeout(() => { animating = false; }, 320);
  }

  function closeMenu() {
    if (animating || !menuOpen) return;
    animating = true;
    menuOpen  = false;

    nav.classList.remove('open');
    overlay.classList.remove('open');
    hamburger.classList.remove('open');
    hamburger.setAttribute('aria-label', 'メニューを開く');
    nav.setAttribute('aria-hidden', 'true');
    overlay.setAttribute('aria-hidden', 'true');

    unlockScroll();

    setTimeout(() => { animating = false; }, 320);
  }

  hamburger.addEventListener('click', (e) => {
    e.stopPropagation();
    if (menuOpen) { closeMenu(); } else { openMenu(); }
  });

  // Overlay click: close
  overlay.addEventListener('click', closeMenu);

  // Nav links: close then scroll
  nav.querySelectorAll('.nav-link, .nav-cta').forEach(link => {
    link.addEventListener('click', closeMenu);
  });

  // ─── Scroll Fade-In Animation ───────────────────────────────
  const fadeEls = document.querySelectorAll('.fade-in');

  const observerOptions = {
    threshold: 0.12,
    rootMargin: '0px 0px -48px 0px'
  };

  const observer = new IntersectionObserver((entries) => {
    entries.forEach(entry => {
      if (entry.isIntersecting) {
        entry.target.classList.add('visible');
        observer.unobserve(entry.target);
      }
    });
  }, observerOptions);

  fadeEls.forEach(el => observer.observe(el));

  // ─── FAQ Accordion ──────────────────────────────────────────
  const faqItems = document.querySelectorAll('.faq-item');

  faqItems.forEach(item => {
    const btn = item.querySelector('.faq-q');
    const answer = item.querySelector('.faq-a');

    btn.addEventListener('click', () => {
      const isExpanded = btn.getAttribute('aria-expanded') === 'true';

      // Close all others
      faqItems.forEach(other => {
        if (other !== item) {
          other.querySelector('.faq-q').setAttribute('aria-expanded', 'false');
          other.querySelector('.faq-a').classList.remove('open');
        }
      });

      // Toggle current
      btn.setAttribute('aria-expanded', String(!isExpanded));
      answer.classList.toggle('open', !isExpanded);
    });
  });

  // ─── Contact Modal ──────────────────────────────────────────
  const contactModalOverlay = document.getElementById('contact-modal');
  const contactModalClose   = document.getElementById('modal-close');
  const contactForm         = document.getElementById('contact-form');
  const contactModalSuccess = document.getElementById('modal-success');
  const contactSubmitBtn    = document.getElementById('modal-submit');

  function openContactModal() {
    if (!contactModalOverlay) return;
    if (menuOpen) closeMenu();
    contactModalOverlay.classList.add('open');
    contactModalOverlay.setAttribute('aria-hidden', 'false');
    savedScrollY = window.scrollY;
    document.body.style.position = 'fixed';
    document.body.style.top      = `-${savedScrollY}px`;
    document.body.style.width    = '100%';
    document.body.style.overflow = 'hidden';
    setTimeout(() => {
      const first = contactForm && contactForm.querySelector('input');
      if (first) first.focus();
    }, 320);
  }

  function closeContactModal() {
    if (!contactModalOverlay) return;
    contactModalOverlay.classList.remove('open');
    contactModalOverlay.setAttribute('aria-hidden', 'true');
    document.body.style.position = '';
    document.body.style.top      = '';
    document.body.style.width    = '';
    document.body.style.overflow = '';
    window.scrollTo(0, savedScrollY);
  }

  if (contactModalClose) contactModalClose.addEventListener('click', closeContactModal);
  if (contactModalOverlay) {
    contactModalOverlay.addEventListener('click', e => {
      if (e.target === contactModalOverlay) closeContactModal();
    });
  }
  document.addEventListener('keydown', e => {
    if (e.key === 'Escape' && contactModalOverlay && contactModalOverlay.classList.contains('open')) {
      closeContactModal();
    }
  });

  // Intercept all CTA links that would go to #contact or mailto
  document.querySelectorAll(
    'a[href$="#contact"], a[href="mailto:info@mimdesign.jp"]'
  ).forEach(el => {
    el.addEventListener('click', e => {
      e.preventDefault();
      openContactModal();
    });
  });

  // Form submission via Formspree
  if (contactForm) {
    contactForm.addEventListener('submit', async e => {
      e.preventDefault();
      contactSubmitBtn.disabled = true;
      contactSubmitBtn.textContent = '送信中...';

      try {
        const res = await fetch(contactForm.action, {
          method: 'POST',
          body: new FormData(contactForm),
          headers: { 'Accept': 'application/json' }
        });
        if (res.ok) {
          window.location.href = (location.hostname === 'localhost' ? 'thanks.html' : '/thanks/');
        } else {
          throw new Error();
        }
      } catch {
        contactSubmitBtn.disabled = false;
        contactSubmitBtn.textContent = '送信する ›';
        alert('送信に失敗しました。\nm.imamura.web@gmail.com までご連絡ください。');
      }
    });
  }

  // ─── Smooth Scroll for anchor links ─────────────────────────
  document.querySelectorAll('a[href^="#"]').forEach(link => {
    link.addEventListener('click', e => {
      const id = link.getAttribute('href');
      if (id === '#') return;
      if (id === '#contact') return; // handled by modal
      const target = document.querySelector(id);
      if (!target) return;
      e.preventDefault();

      const headerHeight = header.offsetHeight;
      const targetTop = target.getBoundingClientRect().top + window.scrollY - headerHeight - 8;

      window.scrollTo({ top: targetTop, behavior: 'smooth' });
    });
  });

  // ─── Hero entrance animation ────────────────────────────────
  const heroContent  = document.querySelector('.hero-content');
  const heroFeatures = document.querySelector('.hero-features');

  if (heroContent)  heroContent.style.opacity  = '0';
  if (heroFeatures) heroFeatures.style.opacity  = '0';

  window.addEventListener('load', () => {
    if (heroContent) {
      heroContent.style.transition = 'opacity .8s ease, transform .8s ease';
      heroContent.style.transform  = 'translateY(20px)';
      setTimeout(() => {
        heroContent.style.opacity   = '1';
        heroContent.style.transform = 'translateY(0)';
      }, 120);
    }
    if (heroFeatures) {
      heroFeatures.style.transition = 'opacity .8s ease .4s';
      setTimeout(() => { heroFeatures.style.opacity = '1'; }, 300);
    }
  });

})();

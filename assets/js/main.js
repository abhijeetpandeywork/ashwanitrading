/* ==========================================================================
   Ashwani Trading Co. — Main JS
   Lightweight: mobile menu, scroll-reveal, sticky header, form submit
   No heavy libraries — speed = trust for this audience
   ========================================================================== */

document.addEventListener('DOMContentLoaded', function () {

  // =====================================================================
  // STICKY HEADER — add shadow on scroll
  // =====================================================================
  const header = document.getElementById('main-header');
  if (header) {
    window.addEventListener('scroll', function () {
      header.classList.toggle('scrolled', window.scrollY > 40);
    }, { passive: true });
  }

  // =====================================================================
  // MOBILE NAV — hamburger toggle
  // =====================================================================
  const hamburgerBtn = document.getElementById('hamburger-btn');
  const hamburgerIcon = document.getElementById('hamburger-icon');
  const mobileNav = document.getElementById('mobile-nav');
  const navCloseBtn = document.getElementById('nav-close-btn');
  const mobileBackdrop = document.getElementById('mobile-backdrop');

  function openNav() {
    mobileNav.classList.add('open');
    if(mobileBackdrop) mobileBackdrop.classList.add('open');
    mobileNav.setAttribute('aria-hidden', 'false');
    hamburgerBtn.setAttribute('aria-expanded', 'true');
    if (hamburgerIcon) {
      hamburgerIcon.classList.replace('fa-bars', 'fa-times');
    }
    document.body.style.overflow = 'hidden';
  }

  function closeNav() {
    mobileNav.classList.remove('open');
    if(mobileBackdrop) mobileBackdrop.classList.remove('open');
    mobileNav.setAttribute('aria-hidden', 'true');
    hamburgerBtn.setAttribute('aria-expanded', 'false');
    if (hamburgerIcon) {
      hamburgerIcon.classList.replace('fa-times', 'fa-bars');
    }
    document.body.style.overflow = '';
  }

  if (hamburgerBtn && mobileNav) {
    hamburgerBtn.addEventListener('click', function () {
      mobileNav.classList.contains('open') ? closeNav() : openNav();
    });
    if (navCloseBtn) {
      navCloseBtn.addEventListener('click', closeNav);
    }
    if (mobileBackdrop) {
      mobileBackdrop.addEventListener('click', closeNav);
    }
  }

  // Close nav when a link is tapped
  if (mobileNav) {
    mobileNav.querySelectorAll('a').forEach(function (link) {
      link.addEventListener('click', closeNav);
    });
  }

  // Close nav on outside click
  document.addEventListener('click', function (e) {
    if (mobileNav && mobileNav.classList.contains('open')) {
      if (!mobileNav.contains(e.target) && !hamburgerBtn.contains(e.target)) {
        closeNav();
      }
    }
  });

  // =====================================================================
  // SCROLL REVEAL — [data-reveal] elements animate in on scroll
  // =====================================================================
  var revealEls = document.querySelectorAll('[data-reveal]');
  if (revealEls.length > 0 && 'IntersectionObserver' in window) {
    var revealObs = new IntersectionObserver(function (entries) {
      entries.forEach(function (entry) {
        if (entry.isIntersecting) {
          entry.target.classList.add('revealed');
          revealObs.unobserve(entry.target);
        }
      });
    }, { threshold: 0.1, rootMargin: '0px 0px -40px 0px' });
    revealEls.forEach(function (el) { revealObs.observe(el); });
  } else {
    // Fallback for browsers without IntersectionObserver
    revealEls.forEach(function (el) { el.classList.add('revealed'); });
  }

  // =====================================================================
  // LEAD FORMS — AJAX submit to process_lead.php
  // =====================================================================
  document.querySelectorAll('.lead-form').forEach(function (form) {
    form.addEventListener('submit', function (e) {
      e.preventDefault();

      var btn      = form.querySelector('[type="submit"]');
      var statusEl = form.querySelector('.form-status');
      var origHTML = btn ? btn.innerHTML : '';

      if (btn) {
        btn.innerHTML = '<i class="fas fa-spinner fa-spin"></i> Sending…';
        btn.disabled = true;
      }

      var fd = new FormData(form);

      // Build requirement from part_category + part_name if separate fields
      if (!fd.get('requirement') || fd.get('requirement').trim() === '') {
        var cat  = fd.get('part_category') || '';
        var part = fd.get('part_name')     || '';
        var msg  = fd.get('message')       || '';
        fd.set('requirement', [
          cat  ? 'Category: '    + cat  : '',
          part ? 'Part/Model: '  + part : '',
          msg  ? 'Message: '     + msg  : ''
        ].filter(Boolean).join('\n') || 'General enquiry');
      }

      fetch('/process_lead.php', { method: 'POST', body: fd })
        .then(function (r) { return r.json(); })
        .then(function (data) {
          if (statusEl) {
            statusEl.className = 'form-status ' + (data.status === 'success' ? 'success' : 'error');
            statusEl.textContent = data.status === 'success'
              ? '✓ Received! Our team will call you shortly.'
              : (data.message || 'Something went wrong. Please call +91 94191 86209 directly.');
          }
          if (data.status === 'success') {
            form.reset();
            if (btn) {
              btn.innerHTML = '<i class="fas fa-check-circle"></i> Sent!';
              btn.style.background = '#15803d';
            }
          } else {
            if (btn) { btn.innerHTML = origHTML; btn.disabled = false; }
          }
          setTimeout(function () {
            if (btn) { btn.innerHTML = origHTML; btn.disabled = false; btn.style.background = ''; }
            if (statusEl) { statusEl.className = 'form-status'; statusEl.textContent = ''; }
          }, 6000);
        })
        .catch(function () {
          if (statusEl) {
            statusEl.className = 'form-status error';
            statusEl.textContent = 'Network error. Please call +91 94191 86209 directly.';
          }
          if (btn) { btn.innerHTML = origHTML; btn.disabled = false; }
        });
    });
  });

  // =====================================================================
  // CATALOG — "Can't find" sticky bar (catalog page only)
  // =====================================================================
  var stickyBar = document.getElementById('sticky-find-bar');
  if (stickyBar) {
    // Already handled by CSS sticky — just ensure it's visible after header height
    // The CSS sets top: 72px (header height)
  }

  // =====================================================================
  // SMOOTH ANCHOR SCROLL — for in-page #anchors on services page
  // =====================================================================
  document.querySelectorAll('a[href^="#"]').forEach(function (anchor) {
    anchor.addEventListener('click', function (e) {
      var target = document.querySelector(this.getAttribute('href'));
      if (target) {
        e.preventDefault();
        var headerH = header ? header.offsetHeight : 72;
        var top = target.getBoundingClientRect().top + window.pageYOffset - headerH - 16;
        window.scrollTo({ top: top, behavior: 'smooth' });
      }
    });
  });

});


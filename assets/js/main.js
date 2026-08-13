/* ==========================================================================
   Ashwani Trading Co. — Main JavaScript
   ========================================================================== */

document.addEventListener('DOMContentLoaded', function () {

    // =====================================================================
    // HERO BACKGROUND IMAGE SLIDER
    // =====================================================================
    const bgSlides  = document.querySelectorAll('.bg-slide');
    const dots      = document.querySelectorAll('.sdot');
    const prevBtn   = document.getElementById('prev-slide');
    const nextBtn   = document.getElementById('next-slide');
    const progressBar = document.getElementById('progress-bar');

    const SLIDE_DURATION = 6000; // ms per slide
    const INTERVAL_TICK  = 60;   // progress bar update ms

    const slideData = [
        {
            badge:  'JCB Spare Parts Specialists',
            top:    'GENUINE',
            mid:    'SPARE PARTS',
            bot:    'DELIVERED FAST',
            desc:   '60+ years of trust. Genuine & aftermarket spare parts for JCB, Road Rollers, Drill Rods & all earthmoving machinery. Serving Jammu, Kashmir & Ladakh.'
        },
        {
            badge:  'Road Roller & Compactor Parts',
            top:    'MAXIMUM',
            mid:    'UPTIME',
            bot:    'GUARANTEED',
            desc:   'Don\'t let a broken part stop your road project. All compactor, roller, and paver spare parts stocked and ready to dispatch across the region.'
        },
        {
            badge:  'Drill Rods & Mining Parts',
            top:    'TOUGH PARTS',
            mid:    'FOR TOUGH',
            bot:    'JOBS',
            desc:   'High-strength drill rods, shank adapters, bits, and couplings engineered for the harshest rock drilling operations in J&K and Ladakh.'
        }
    ];

    let current   = 0;
    let timer     = null;
    let progress  = 0;
    let progTimer = null;

    function goTo(idx) {
        // Remove active
        bgSlides.forEach(s => s.classList.remove('active'));
        dots.forEach(d => d.classList.remove('active'));

        current = (idx + bgSlides.length) % bgSlides.length;
        bgSlides[current].classList.add('active');
        dots[current].classList.add('active');

        // Update text
        updateText(slideData[current]);

        // Reset progress
        resetProgress();
    }

    function updateText(data) {
        const els = {
            badge: document.getElementById('badge-text'),
            top:   document.getElementById('title-top'),
            mid:   document.getElementById('title-mid'),
            bot:   document.getElementById('title-bot'),
            desc:  document.getElementById('hero-desc'),
        };

        // Fade out
        ['badge','top','mid','bot','desc'].forEach(k => {
            if (els[k]) els[k].style.opacity = '0';
        });

        // Swap content then fade in
        setTimeout(() => {
            if (els.badge) els.badge.textContent = data.badge;
            if (els.top)   els.top.textContent   = data.top;
            if (els.mid)   els.mid.textContent   = data.mid;
            if (els.bot)   els.bot.textContent   = data.bot;
            if (els.desc)  els.desc.textContent  = data.desc;

            ['badge','top','mid','bot','desc'].forEach(k => {
                if (els[k]) {
                    els[k].style.transition = 'opacity 0.6s ease';
                    els[k].style.opacity    = '1';
                }
            });
        }, 350);
    }

    function resetProgress() {
        progress = 0;
        if (progressBar) progressBar.style.width = '0%';
        clearInterval(progTimer);
        progTimer = setInterval(() => {
            progress += (INTERVAL_TICK / SLIDE_DURATION) * 100;
            if (progress > 100) progress = 100;
            if (progressBar) progressBar.style.width = progress + '%';
        }, INTERVAL_TICK);
    }

    function startAuto() {
        clearInterval(timer);
        timer = setInterval(() => goTo(current + 1), SLIDE_DURATION);
    }

    function restart() {
        clearInterval(timer);
        startAuto();
    }

    if (bgSlides.length > 0) {
        // Arrow buttons
        if (prevBtn) prevBtn.addEventListener('click', () => { goTo(current - 1); restart(); });
        if (nextBtn) nextBtn.addEventListener('click', () => { goTo(current + 1); restart(); });

        // Dots
        dots.forEach(dot => {
            dot.addEventListener('click', () => {
                goTo(parseInt(dot.dataset.s));
                restart();
            });
        });

        // Keyboard
        document.addEventListener('keydown', e => {
            if (e.key === 'ArrowLeft')  { goTo(current - 1); restart(); }
            if (e.key === 'ArrowRight') { goTo(current + 1); restart(); }
        });

        // Touch swipe support
        let touchStartX = 0;
        const hero = document.getElementById('hero');
        if (hero) {
            hero.addEventListener('touchstart', e => { touchStartX = e.touches[0].clientX; }, { passive: true });
            hero.addEventListener('touchend', e => {
                const diff = touchStartX - e.changedTouches[0].clientX;
                if (Math.abs(diff) > 50) {
                    if (diff > 0) { goTo(current + 1); restart(); }
                    else          { goTo(current - 1); restart(); }
                }
            }, { passive: true });
        }

        startAuto();
        resetProgress();
    }

    // =====================================================================
    // STICKY HEADER — blur shadow on scroll
    // =====================================================================
    const header = document.getElementById('main-header');
    if (header) {
        window.addEventListener('scroll', () => {
            header.classList.toggle('scrolled', window.scrollY > 60);
        }, { passive: true });
    }

    // =====================================================================
    // MOBILE MENU TOGGLE
    // =====================================================================
    const mobileBtn = document.getElementById('mobile-menu-btn');
    const navMenu   = document.getElementById('nav-menu');
    const menuIcon  = document.getElementById('menu-icon');

    if (mobileBtn && navMenu) {
        mobileBtn.addEventListener('click', () => {
            const open = navMenu.classList.toggle('open');
            if (menuIcon) {
                menuIcon.classList.toggle('fa-bars',  !open);
                menuIcon.classList.toggle('fa-times',  open);
            }
        });
        navMenu.querySelectorAll('a').forEach(a => {
            a.addEventListener('click', () => {
                navMenu.classList.remove('open');
                if (menuIcon) {
                    menuIcon.classList.add('fa-bars');
                    menuIcon.classList.remove('fa-times');
                }
            });
        });
    }

    // =====================================================================
    // LEAD FORM — AJAX Submit
    // =====================================================================
    const forms = document.querySelectorAll('.lead-form');

    forms.forEach(form => {
        form.addEventListener('submit', function (e) {
            e.preventDefault();

            const btn = form.querySelector('#submit-btn') || form.querySelector('button[type="submit"]');
            const statusEl = form.querySelector('#form-status');
            const originalHTML = btn ? btn.innerHTML : '';

            if (btn) {
                btn.innerHTML = '<i class="fas fa-spinner fa-spin"></i> Sending…';
                btn.disabled = true;
            }

            const fd = new FormData(form);

            // Merge part_category + part_name into requirement if no requirement field
            if (!fd.get('requirement')) {
                const cat  = fd.get('part_category') || '';
                const part = fd.get('part_name')     || '';
                fd.append('requirement', `Category: ${cat}\nPart/Model: ${part}`);
            }

            fetch('process_lead.php', { method: 'POST', body: fd })
                .then(r => r.json())
                .then(data => {
                    if (data.status === 'success') {
                        if (btn) {
                            btn.innerHTML = '<i class="fas fa-check-circle"></i> Sent! We\'ll Call You';
                            btn.style.background = 'linear-gradient(135deg,#22c55e,#16a34a)';
                        }
                        if (statusEl) {
                            statusEl.style.display = 'block';
                            statusEl.style.color   = '#4ade80';
                            statusEl.textContent   = '✓ Received! Our expert will contact you shortly.';
                        }
                        form.reset();
                    } else {
                        if (btn) { btn.innerHTML = originalHTML; btn.disabled = false; }
                        if (statusEl) {
                            statusEl.style.display = 'block';
                            statusEl.style.color   = '#f87171';
                            statusEl.textContent   = data.message || 'Something went wrong. Please call us directly.';
                        }
                    }
                    setTimeout(() => {
                        if (btn) { btn.innerHTML = originalHTML; btn.disabled = false; btn.style.background = ''; }
                    }, 5000);
                })
                .catch(() => {
                    if (btn) { btn.innerHTML = originalHTML; btn.disabled = false; }
                    if (statusEl) {
                        statusEl.style.display = 'block';
                        statusEl.style.color   = '#f87171';
                        statusEl.textContent   = 'Network error. Please call +91 9419186209.';
                    }
                });
        });
    });

    // =====================================================================
    // SCROLL REVEAL — Cards & Sections
    // =====================================================================
    const revealEls = document.querySelectorAll('.feature-card, .section-header');
    const revealObs = new IntersectionObserver((entries) => {
        entries.forEach((entry, i) => {
            if (entry.isIntersecting) {
                setTimeout(() => {
                    entry.target.style.opacity   = '1';
                    entry.target.style.transform = 'translateY(0)';
                }, i * 90);
                revealObs.unobserve(entry.target);
            }
        });
    }, { threshold: 0.08 });

    revealEls.forEach(el => {
        el.style.opacity   = '0';
        el.style.transform = 'translateY(28px)';
        el.style.transition = 'opacity 0.6s ease, transform 0.6s ease';
        revealObs.observe(el);
    });

});

/* ==========================================================================
   Ashwani Trading Co. — Main JavaScript
   ========================================================================== */

document.addEventListener('DOMContentLoaded', function () {

    // =====================================================================
    // HERO HORIZONTAL IMAGE SLIDER
    // Uses a flex track (300% wide) that slides left via translateX
    // =====================================================================
    const track       = document.getElementById('slider-track');
    const dots        = document.querySelectorAll('.sdot');
    const prevBtn     = document.getElementById('prev-slide');
    const nextBtn     = document.getElementById('next-slide');
    const progressBar = document.getElementById('progress-bar');

    const TOTAL_SLIDES   = 3;
    const SLIDE_DURATION = 6000;   // ms each slide shows
    const TICK_MS        = 60;     // progress bar update interval

    const slideData = [
        {
            badge: 'JCB Spare Parts Specialists',
            top:   'GENUINE',
            mid:   'SPARE PARTS',
            bot:   'DELIVERED FAST',
            desc:  '60+ years of trust. Genuine & aftermarket spare parts for JCB, Road Rollers, Drill Rods & all earthmoving machinery. Serving Jammu, Kashmir & Ladakh.'
        },
        {
            badge: 'Industrial Gears & Components',
            top:   'PRECISION',
            mid:   'COMPONENTS',
            bot:   'FOR EVERY MACHINE',
            desc:  'Hydraulic pumps, seals, pins, bushes, and industrial gear components for all earthmoving and construction equipment brands across the region.'
        },
        {
            badge: 'Road Roller & Compactor Parts',
            top:   'MAXIMUM',
            mid:   'UPTIME',
            bot:   'GUARANTEED',
            desc:  'All compactor, roller, and road machinery spare parts stocked and ready to dispatch across Jammu, Kashmir & Ladakh — fast.'
        }
    ];

    let current   = 0;
    let autoTimer = null;
    let progress  = 0;
    let progTimer = null;

    function goTo(idx) {
        current = (idx + TOTAL_SLIDES) % TOTAL_SLIDES;

        // === HORIZONTAL SLIDE — move track by 33.33% per slide ===
        if (track) {
            const offset = current * (100 / TOTAL_SLIDES);
            track.style.transform = `translateX(-${offset}%)`;
        }

        // Update nav dots
        dots.forEach((d, i) => d.classList.toggle('active', i === current));

        // Fade-swap overlay text content
        const els = {
            badge: document.getElementById('badge-text'),
            top:   document.getElementById('title-top'),
            mid:   document.getElementById('title-mid'),
            bot:   document.getElementById('title-bot'),
            desc:  document.getElementById('hero-desc'),
        };

        // Fade out + slide down
        Object.values(els).forEach(el => {
            if (el) { el.style.opacity = '0'; el.style.transform = 'translateY(12px)'; }
        });

        // Swap content then fade back in
        setTimeout(() => {
            const d = slideData[current];
            if (els.badge) els.badge.textContent = d.badge;
            if (els.top)   els.top.textContent   = d.top;
            if (els.mid)   els.mid.textContent   = d.mid;
            if (els.bot)   els.bot.textContent   = d.bot;
            if (els.desc)  els.desc.textContent  = d.desc;

            Object.values(els).forEach(el => {
                if (el) {
                    el.style.transition = 'opacity 0.55s ease, transform 0.55s ease';
                    el.style.opacity    = '1';
                    el.style.transform  = 'translateY(0)';
                }
            });
        }, 360);

        resetProgress();
    }

    function resetProgress() {
        progress = 0;
        if (progressBar) progressBar.style.width = '0%';
        clearInterval(progTimer);
        progTimer = setInterval(() => {
            progress += (TICK_MS / SLIDE_DURATION) * 100;
            if (progressBar) progressBar.style.width = Math.min(progress, 100) + '%';
        }, TICK_MS);
    }

    function startAuto() {
        clearInterval(autoTimer);
        autoTimer = setInterval(() => goTo(current + 1), SLIDE_DURATION);
    }

    function restart() { clearInterval(autoTimer); startAuto(); }

    if (track) {
        // Arrow buttons
        if (prevBtn) prevBtn.addEventListener('click', () => { goTo(current - 1); restart(); });
        if (nextBtn) nextBtn.addEventListener('click', () => { goTo(current + 1); restart(); });

        // Dot navigation
        dots.forEach(dot => {
            dot.addEventListener('click', () => { goTo(parseInt(dot.dataset.s)); restart(); });
        });

        // Keyboard navigation
        document.addEventListener('keydown', e => {
            if (e.key === 'ArrowLeft')  { goTo(current - 1); restart(); }
            if (e.key === 'ArrowRight') { goTo(current + 1); restart(); }
        });

        // Touch / swipe support
        let touchStartX = 0;
        const heroEl = document.getElementById('hero');
        if (heroEl) {
            heroEl.addEventListener('touchstart', e => {
                touchStartX = e.touches[0].clientX;
            }, { passive: true });

            heroEl.addEventListener('touchend', e => {
                const diff = touchStartX - e.changedTouches[0].clientX;
                if (Math.abs(diff) > 50) {
                    diff > 0 ? goTo(current + 1) : goTo(current - 1);
                    restart();
                }
            }, { passive: true });
        }

        // Pause on hover
        if (heroEl) {
            heroEl.addEventListener('mouseenter', () => clearInterval(autoTimer));
            heroEl.addEventListener('mouseleave', () => startAuto());
        }

        startAuto();
        resetProgress();
    }

    // =====================================================================
    // STICKY HEADER — adds shadow/blur on scroll
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
                if (menuIcon) { menuIcon.classList.add('fa-bars'); menuIcon.classList.remove('fa-times'); }
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
            const statusEl   = form.querySelector('#form-status');
            const origHTML   = btn ? btn.innerHTML : '';

            if (btn) { btn.innerHTML = '<i class="fas fa-spinner fa-spin"></i> Sending…'; btn.disabled = true; }

            const fd = new FormData(form);
            if (!fd.get('requirement')) {
                fd.append('requirement', `Category: ${fd.get('part_category') || ''}\nPart: ${fd.get('part_name') || ''}`);
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
                        if (btn) { btn.innerHTML = origHTML; btn.disabled = false; }
                        if (statusEl) {
                            statusEl.style.display = 'block';
                            statusEl.style.color   = '#f87171';
                            statusEl.textContent   = data.message || 'Error. Please call +91 9419186209.';
                        }
                    }
                    setTimeout(() => {
                        if (btn) { btn.innerHTML = origHTML; btn.disabled = false; btn.style.background = ''; }
                    }, 5000);
                })
                .catch(() => {
                    if (btn) { btn.innerHTML = origHTML; btn.disabled = false; }
                    if (statusEl) {
                        statusEl.style.display = 'block';
                        statusEl.style.color   = '#f87171';
                        statusEl.textContent   = 'Network error. Please call +91 9419186209.';
                    }
                });
        });
    });

    // =====================================================================
    // SCROLL REVEAL — Cards animate in on scroll
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
        el.style.opacity    = '0';
        el.style.transform  = 'translateY(28px)';
        el.style.transition = 'opacity 0.6s ease, transform 0.6s ease';
        revealObs.observe(el);
    });

});

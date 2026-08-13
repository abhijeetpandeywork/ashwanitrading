/* ==========================================================================
   Ashwani Trading Co. — Main JavaScript
   ========================================================================== */

document.addEventListener('DOMContentLoaded', function () {

    // =====================================================================
    // HERO IMAGE SLIDER
    // =====================================================================
    const slides = document.querySelectorAll('.slide');
    const dots   = document.querySelectorAll('.slider-dot');
    const prevBtn = document.getElementById('prev-slide');
    const nextBtn = document.getElementById('next-slide');

    // Slide content for each panel
    const slideData = [
        {
            badge: 'JCB Spare Parts Specialists',
            line1: 'SPARE',
            line2: 'PARTS',
            line3: 'EXPERTS',
            sub:   'Est. 1960 · Jammu, J&K',
            desc:  '60+ years of trust. Genuine and premium aftermarket spare parts for JCB, Road Rollers, Drill Rods, and all heavy earthmoving machinery. Serving Jammu, Kashmir & Ladakh.'
        },
        {
            badge: 'Road Roller & Compactor Parts',
            line1: 'MAXIMUM',
            line2: 'UPTIME',
            line3: 'GUARANTEED',
            sub:   'Transport Nagar · Narwal · Jammu',
            desc:  'Don\'t let a broken part stop your road project. We supply all compactor, roller, and paver spare parts with fast availability across the region.'
        },
        {
            badge: 'Drill Rods & Mining Parts',
            line1: 'TOUGH',
            line2: 'PARTS',
            line3: 'FOR TOUGH JOBS',
            sub:   'Mining · Tunneling · Foundation Works',
            desc:  'High-strength drill rods, shank adapters, bits, and coupling sleeves engineered for the harshest rock drilling operations in J&K and Ladakh.'
        }
    ];

    let currentSlide = 0;
    let sliderInterval;

    function goToSlide(index) {
        // Remove active from all
        slides.forEach(s => s.classList.remove('active'));
        dots.forEach(d => d.classList.remove('active'));

        // Set new active
        currentSlide = (index + slides.length) % slides.length;
        slides[currentSlide].classList.add('active');
        dots[currentSlide].classList.add('active');

        // Update text content with smooth fade
        const data = slideData[currentSlide];
        const elements = {
            badge: document.getElementById('slide-badge'),
            line1: document.getElementById('slide-line1'),
            line2: document.getElementById('slide-line2'),
            line3: document.getElementById('slide-line3'),
            sub:   document.getElementById('slide-sub'),
            desc:  document.getElementById('slide-desc'),
        };

        Object.values(elements).forEach(el => { if (el) el.style.opacity = '0'; });

        setTimeout(() => {
            if (elements.badge) elements.badge.textContent = data.badge;
            if (elements.line1) elements.line1.textContent = data.line1;
            if (elements.line2) elements.line2.textContent = data.line2;
            if (elements.line3) elements.line3.textContent = data.line3;
            if (elements.sub)   elements.sub.textContent   = data.sub;
            if (elements.desc)  elements.desc.textContent  = data.desc;
            Object.values(elements).forEach(el => {
                if (el) { el.style.transition = 'opacity 0.5s ease'; el.style.opacity = '1'; }
            });
        }, 300);
    }

    function startSlider() {
        sliderInterval = setInterval(() => goToSlide(currentSlide + 1), 6000);
    }

    function resetSlider() {
        clearInterval(sliderInterval);
        startSlider();
    }

    if (slides.length > 0) {
        // Arrow controls
        if (prevBtn) prevBtn.addEventListener('click', () => { goToSlide(currentSlide - 1); resetSlider(); });
        if (nextBtn) nextBtn.addEventListener('click', () => { goToSlide(currentSlide + 1); resetSlider(); });

        // Dot controls
        dots.forEach(dot => {
            dot.addEventListener('click', () => {
                goToSlide(parseInt(dot.dataset.slide));
                resetSlider();
            });
        });

        // Keyboard controls
        document.addEventListener('keydown', e => {
            if (e.key === 'ArrowLeft')  { goToSlide(currentSlide - 1); resetSlider(); }
            if (e.key === 'ArrowRight') { goToSlide(currentSlide + 1); resetSlider(); }
        });

        startSlider();
    }

    // =====================================================================
    // STICKY HEADER SHADOW ON SCROLL
    // =====================================================================
    const header = document.getElementById('main-header');
    if (header) {
        window.addEventListener('scroll', () => {
            header.classList.toggle('scrolled', window.scrollY > 60);
        });
    }

    // =====================================================================
    // MOBILE NAVIGATION TOGGLE
    // =====================================================================
    const mobileBtn = document.getElementById('mobile-menu-btn');
    const navMenu   = document.getElementById('nav-menu');
    const menuIcon  = document.getElementById('menu-icon');

    if (mobileBtn && navMenu) {
        mobileBtn.addEventListener('click', () => {
            navMenu.classList.toggle('open');
            menuIcon.classList.toggle('fa-bars');
            menuIcon.classList.toggle('fa-times');
        });

        // Close on link click
        navMenu.querySelectorAll('a').forEach(link => {
            link.addEventListener('click', () => {
                navMenu.classList.remove('open');
                menuIcon.classList.add('fa-bars');
                menuIcon.classList.remove('fa-times');
            });
        });
    }

    // =====================================================================
    // LEAD FORM AJAX SUBMISSION
    // =====================================================================
    const forms = document.querySelectorAll('.lead-form');

    forms.forEach(form => {
        form.addEventListener('submit', function (e) {
            e.preventDefault();

            const btn = form.querySelector('button[type="submit"]');
            const statusEl = form.querySelector('#form-status') || document.createElement('p');
            const originalText = btn.innerHTML;

            btn.innerHTML = '<i class="fas fa-spinner fa-spin"></i> Sending...';
            btn.disabled = true;

            const formData = new FormData(form);

            // Add part name if present as requirement
            if (!formData.get('requirement') && formData.get('part_name')) {
                formData.append('requirement', `Category: ${formData.get('part_category') || 'Not specified'}\nPart: ${formData.get('part_name')}`);
            }

            fetch('process_lead.php', {
                method: 'POST',
                body: formData
            })
            .then(r => r.json())
            .then(data => {
                if (data.status === 'success') {
                    btn.innerHTML = '<i class="fas fa-check"></i> Sent! We\'ll call you.';
                    btn.style.background = 'linear-gradient(135deg, #22c55e, #16a34a)';
                    statusEl.style.display = 'block';
                    statusEl.style.color = '#4ade80';
                    statusEl.textContent = '✓ Your requirement has been received. Our expert will contact you shortly.';
                    form.reset();
                } else {
                    btn.innerHTML = originalText;
                    btn.disabled = false;
                    statusEl.style.display = 'block';
                    statusEl.style.color = '#f87171';
                    statusEl.textContent = data.message || 'Something went wrong. Please call us directly.';
                }
                setTimeout(() => {
                    btn.innerHTML = originalText;
                    btn.disabled = false;
                    btn.style.background = '';
                }, 5000);
            })
            .catch(() => {
                btn.innerHTML = originalText;
                btn.disabled = false;
                statusEl.style.display = 'block';
                statusEl.style.color = '#f87171';
                statusEl.textContent = 'Network error. Please call +91 9419186209 directly.';
            });
        });
    });

    // =====================================================================
    // SCROLL REVEAL ANIMATION — Cards animate in on scroll
    // =====================================================================
    const revealItems = document.querySelectorAll('.feature-card, .section-header, .hero-stats');

    const revealObserver = new IntersectionObserver((entries) => {
        entries.forEach((entry, i) => {
            if (entry.isIntersecting) {
                setTimeout(() => {
                    entry.target.style.opacity = '1';
                    entry.target.style.transform = 'translateY(0)';
                }, i * 80);
                revealObserver.unobserve(entry.target);
            }
        });
    }, { threshold: 0.1 });

    revealItems.forEach(item => {
        item.style.opacity = '0';
        item.style.transform = 'translateY(30px)';
        item.style.transition = 'opacity 0.6s ease, transform 0.6s ease';
        revealObserver.observe(item);
    });

});

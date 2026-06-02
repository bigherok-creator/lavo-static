/**
 * LAVO — Professional Scroll & Load Animation Engine
 * IntersectionObserver + requestAnimationFrame
 */

(function () {
    'use strict';

    const CONFIG = {
        rootMargin: '0px 0px -8% 0px',
        threshold: 0.08,
        once: true
    };

    /* ─── 1. IntersectionObserver for scroll-triggered animations ─── */
    const observer = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                const el = entry.target;

                /* stagger children: parent gets is-visible, children animate via CSS */
                if (el.hasAttribute('data-animate') && el.getAttribute('data-animate') === 'stagger') {
                    el.classList.add('is-visible');
                }
                /* count-up numbers */
                else if (el.hasAttribute('data-animate') && el.getAttribute('data-animate') === 'count-up') {
                    el.classList.add('is-visible');
                    animateCountUp(el);
                }
                /* standard single-element animations */
                else {
                    el.classList.add('is-visible');
                }

                if (CONFIG.once) {
                    observer.unobserve(el);
                }
            }
        });
    }, {
        rootMargin: CONFIG.rootMargin,
        threshold: CONFIG.threshold
    });

    /* ─── 2. Count-up animation ─── */
    function animateCountUp(el) {
        const target = parseInt(el.dataset.target || el.textContent.replace(/\D/g, ''), 10);
        if (!target || isNaN(target)) return;

        const suffix = el.dataset.suffix || '';
        const duration = parseInt(el.dataset.duration || '2000', 10);
        const startTime = performance.now();

        function tick(now) {
            const elapsed = now - startTime;
            const progress = Math.min(elapsed / duration, 1);
            const eased = 1 - Math.pow(1 - progress, 3); /* easeOutCubic */
            const current = Math.floor(eased * target);
            el.textContent = current + suffix;

            if (progress < 1) {
                requestAnimationFrame(tick);
            } else {
                el.textContent = target + suffix;
            }
        }
        requestAnimationFrame(tick);
    }

    /* ─── 3. Initialize ─── */
    function init() {
        /* scroll-triggered */
        document.querySelectorAll('[data-animate]').forEach(el => {
            el.classList.add('animate-on-scroll');
            observer.observe(el);
        });

        /* load-triggered (immediate, no scroll needed) */
        document.querySelectorAll('[data-animate-load]').forEach((el, i) => {
            el.classList.add('animate-on-load');
            const delay = parseFloat(el.dataset.delay || '0') * 1000;
            setTimeout(() => {
                el.classList.add('is-visible');
            }, delay + (i * 80));
        });

        /* header show/hide on scroll */
        initHeaderScroll();
    }

    /* ─── 4. Header scroll behavior ─── */
    function initHeaderScroll() {
        const header = document.querySelector('header');
        if (!header) return;

        let lastScroll = 0;
        let ticking = false;

        window.addEventListener('scroll', () => {
            if (!ticking) {
                requestAnimationFrame(() => {
                    const currentScroll = window.scrollY;

                    if (currentScroll > 80) {
                        header.classList.add('header-scrolled');
                    } else {
                        header.classList.remove('header-scrolled');
                    }

                    lastScroll = currentScroll;
                    ticking = false;
                });
                ticking = true;
            }
        }, { passive: true });
    }

    /* ─── 5. Run ─── */
    if (document.readyState === 'loading') {
        document.addEventListener('DOMContentLoaded', init);
    } else {
        init();
    }
})();

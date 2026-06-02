/**
 * LAVO — Carousel Engine v3
 * 1 slide per view, infinite loop, autoplay
 * Uses setProperty('important') to beat Tailwind CDN
 */
(function () {
    'use strict';

    function Carousel(container, options) {
        var self = this;
        self.container = container;
        self.track = container.querySelector('.carousel-track');
        self.slides = Array.from(self.track.children);
        self.prevBtn = container.querySelector('.carousel-prev');
        self.nextBtn = container.querySelector('.carousel-next');
        self.delay = (options && options.autoplayDelay) || 4000;
        self.index = 0;
        self.timer = null;

        // Force styles with !important to beat Tailwind CDN
        self.track.style.setProperty('display', 'flex', 'important');
        self.track.style.setProperty('overflow', 'hidden', 'important');
        self.track.style.setProperty('transition', 'transform 0.5s ease', 'important');
        self.track.style.setProperty('gap', '0px', 'important');
        self.track.style.setProperty('width', '100%', 'important');
        self.slides.forEach(function (s) {
            s.style.setProperty('flex', '0 0 100%', 'important');
            s.style.setProperty('max-width', '100%', 'important');
            s.style.setProperty('width', '100%', 'important');
            s.style.setProperty('min-width', '100%', 'important');
        });

        self.bind();
        self.start();
    }

    Carousel.prototype.go = function (idx) {
        var total = this.slides.length;
        if (total === 0) return;
        if (idx < 0) idx = total - 1;
        if (idx >= total) idx = 0;
        this.index = idx;
        this.track.style.transform = 'translateX(-' + (idx * 100) + '%)';
    };

    Carousel.prototype.next = function () { this.go(this.index + 1); };
    Carousel.prototype.prev = function () { this.go(this.index - 1); };

    Carousel.prototype.bind = function () {
        var self = this;
        if (self.prevBtn) {
            self.prevBtn.addEventListener('click', function (e) {
                e.preventDefault(); self.prev(); self.reset();
            });
        }
        if (self.nextBtn) {
            self.nextBtn.addEventListener('click', function (e) {
                e.preventDefault(); self.next(); self.reset();
            });
        }
        var startX = 0;
        self.track.addEventListener('touchstart', function (e) {
            startX = e.touches[0].clientX; self.pause();
        }, { passive: true });
        self.track.addEventListener('touchend', function (e) {
            var diff = startX - e.changedTouches[0].clientX;
            if (Math.abs(diff) > 40) {
                if (diff > 0) self.next(); else self.prev();
            }
            self.reset();
        });
        self.container.addEventListener('mouseenter', function () { self.pause(); });
        self.container.addEventListener('mouseleave', function () { self.start(); });
    };

    Carousel.prototype.start = function () {
        if (this.timer) return;
        var self = this;
        this.timer = setInterval(function () { self.next(); }, self.delay);
    };
    Carousel.prototype.pause = function () {
        if (this.timer) { clearInterval(this.timer); this.timer = null; }
    };
    Carousel.prototype.reset = function () { this.pause(); this.start(); };

    function initAll() {
        document.querySelectorAll('.carousel-container').forEach(function (c) {
            var type = c.dataset.carouselType || 'default';
            new Carousel(c, { autoplayDelay: type === 'brands' ? 3000 : 4000 });
        });
    }

    // Wait for Tailwind CDN to finish, then init
    if (document.readyState === 'loading') {
        document.addEventListener('DOMContentLoaded', function () {
            setTimeout(initAll, 500);
        });
    } else {
        setTimeout(initAll, 500);
    }
})();

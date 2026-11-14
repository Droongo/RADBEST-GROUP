import { $$ } from '../utils/dom';

/* ---------- animated counters: <span class="count" data-to="300">0</span> ---------- */
export function initCounters() {
    const counters = $$('.count');
    if (!counters.length) return;

    const co = new IntersectionObserver(function (es) {
        es.forEach(function (e) {
            if (!e.isIntersecting) return;
            const el = e.target, to = +el.dataset.to, t0 = performance.now(), d = 1600;
            const tick = function (t) {
                const p = Math.min((t - t0) / d, 1);
                el.textContent = Math.round(to * (1 - Math.pow(1 - p, 3))).toLocaleString('en-US');
                if (p < 1) requestAnimationFrame(tick);
            };
            requestAnimationFrame(tick);
            co.unobserve(el);
        });
    }, { threshold: .5 });
    counters.forEach(function (el) { co.observe(el); });
}

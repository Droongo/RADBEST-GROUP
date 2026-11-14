import { $$ } from '../utils/dom';

/* ---------- reveal on scroll: adds .in to every .rv element as it enters the viewport ---------- */
export function initReveal() {
    const items = $$('.rv');
    if (!items.length) return;

    const io = new IntersectionObserver(function (es) {
        es.forEach(function (e) {
            if (e.isIntersecting) { e.target.classList.add('in'); io.unobserve(e.target); }
        });
    }, { threshold: .12 });
    items.forEach(function (el) { io.observe(el); });
}

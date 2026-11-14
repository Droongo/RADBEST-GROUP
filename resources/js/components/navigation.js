import { $, $$ } from '../utils/dom';

/* ---------- sticky nav + mobile menu + divisions dropdown ---------- */
export function initNavigation() {
    const nav = $('#nav');
    if (!nav) return;

    const onScroll = function () { nav.classList.toggle('solid', window.scrollY > 40); };
    window.addEventListener('scroll', onScroll, { passive: true });
    onScroll();

    const burger = $('.burger', nav);
    if (burger) burger.addEventListener('click', function () { nav.classList.toggle('open'); });
    $$('.links a', nav).forEach(function (a) {
        a.addEventListener('click', function () { nav.classList.remove('open'); });
    });

    /* dropdown: first tap opens it on touch tablets, second tap follows the link */
    $$('.has-dd>a', nav).forEach(function (a) {
        a.addEventListener('click', function (e) {
            const p = a.parentNode;
            if (window.innerWidth > 820 && window.matchMedia('(hover:none)').matches && !p.classList.contains('open')) {
                e.preventDefault();
                p.classList.add('open');
            }
        });
    });
    document.addEventListener('click', function (e) {
        $$('.has-dd.open').forEach(function (p) { if (!p.contains(e.target)) p.classList.remove('open'); });
    });
}

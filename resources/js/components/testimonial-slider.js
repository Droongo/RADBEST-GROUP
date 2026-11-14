import { $$ } from '../utils/dom';

/* ---------- testimonial slider ([data-slider]) — auto-advances every 6.5s, pauses on hover ---------- */
export function initTestimonialSliders() {
    $$('[data-slider]').forEach(function (sl) {
        const slides = $$('.ts-slide', sl), btns = $$('.ts-b', sl);
        let cur = 0, timer;

        const go = function (n) {
            cur = (n + slides.length) % slides.length;
            slides.forEach(function (x, i) { x.classList.toggle('on', i === cur); });
            btns.forEach(function (x, i) { x.classList.toggle('on', i === cur); });
        };
        const restart = function () {
            clearInterval(timer);
            if (slides.length > 1) timer = setInterval(function () { go(cur + 1); }, 6500);
        };

        btns.forEach(function (b, i) { b.addEventListener('click', function () { go(i); restart(); }); });
        sl.addEventListener('mouseenter', function () { clearInterval(timer); });
        sl.addEventListener('mouseleave', restart);
        restart();
    });
}

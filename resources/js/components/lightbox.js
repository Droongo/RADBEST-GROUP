import { $, $$ } from '../utils/dom';

/* ---------- lightbox (any container with [data-lightbox]) ----------
   Figures carrying .hide (gallery filters) are skipped when paging. */
export function initLightbox() {
    const groups = $$('[data-lightbox]');
    if (!groups.length) return;

    const lb = document.createElement('div');
    lb.className = 'lightbox';
    lb.innerHTML = '<button class="lb-x" aria-label="Close">✕</button><button class="lb-p" aria-label="Previous">←</button><img alt=""><button class="lb-n" aria-label="Next">→</button><div class="lb-cap"></div>';
    document.body.appendChild(lb);

    const lbi = $('img', lb), cap = $('.lb-cap', lb);
    let list = [], idx = 0;

    const show = function (n) {
        idx = (n + list.length) % list.length;
        const f = list[idx], im = $('img', f), c = $('figcaption', f);
        lbi.src = im.getAttribute('data-full') || im.src;
        lbi.alt = im.alt;
        cap.textContent = c ? c.textContent.replace(/\s+/g, ' ').trim() : im.alt;
        lb.classList.add('open');
    };
    const close = function () { lb.classList.remove('open'); };

    groups.forEach(function (g) {
        $$('figure', g).forEach(function (f) {
            f.addEventListener('click', function () {
                list = $$('figure', g).filter(function (x) { return !x.classList.contains('hide'); });
                show(list.indexOf(f));
            });
        });
    });

    $('.lb-x', lb).onclick = close;
    $('.lb-p', lb).onclick = function (e) { e.stopPropagation(); show(idx - 1); };
    $('.lb-n', lb).onclick = function (e) { e.stopPropagation(); show(idx + 1); };
    lb.addEventListener('click', function (e) { if (e.target === lb) close(); });
    window.addEventListener('keydown', function (e) {
        if (!lb.classList.contains('open')) return;
        if (e.key === 'Escape') close();
        if (e.key === 'ArrowLeft') show(idx - 1);
        if (e.key === 'ArrowRight') show(idx + 1);
    });
}

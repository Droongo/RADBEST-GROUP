import { $, $$ } from '../utils/dom';

/* ---------- masonry: size each tile's grid rows from its image ratio (no gaps) ----------
   Used by the gallery page and the trading showroom (.mason). Re-runs after
   gallery filter clicks / hash changes because hidden tiles change the layout. */
export function initMasonry() {
    const masons = $$('.mason');
    if (!masons.length) return;

    const layoutMason = function () {
        masons.forEach(function (g) {
            $$('figure', g).forEach(function (f) {
                if (f.classList.contains('hide')) return;
                const im = $('img', f), w = f.getBoundingClientRect().width;
                const iw = +im.getAttribute('width'), ih = +im.getAttribute('height');
                if (!w || !iw || !ih) return;
                f.style.gridRowEnd = 'span ' + Math.ceil((w * ih / iw + 18) / 8);
            });
        });
    };

    layoutMason();
    window.addEventListener('load', layoutMason);
    window.addEventListener('resize', layoutMason);
    $$('.filters .tab').forEach(function (t) { t.addEventListener('click', function () { setTimeout(layoutMason, 0); }); });
    window.addEventListener('hashchange', function () { setTimeout(layoutMason, 0); });
    setTimeout(layoutMason, 300);
}

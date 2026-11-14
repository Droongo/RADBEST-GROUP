import { $, $$ } from '../utils/dom';

/* ---------- gallery filters (gallery page only) ----------
   Tabs toggle .hide on .mason figures, update the "Showing N photos" count
   and mirror the category in the URL hash (#coffee, #trading, #manufacturing)
   so links such as /gallery#coffee open pre-filtered. */
const filters = $('.filters');
if (filters) {
    const figs = $$('.mason figure'), count = $('.gal-count b');

    const apply = function (cat) {
        let n = 0;
        figs.forEach(function (f) {
            const ok = cat === 'all' || f.dataset.cat === cat;
            f.classList.toggle('hide', !ok);
            if (ok) { n++; f.style.animation = 'none'; void f.offsetWidth; f.style.animation = ''; }
        });
        if (count) count.textContent = n;
        $$('.tab', filters).forEach(function (t) { t.setAttribute('aria-selected', t.dataset.cat === cat); });
    };

    $$('.tab', filters).forEach(function (t) {
        t.addEventListener('click', function () {
            apply(t.dataset.cat);
            history.replaceState(null, '', t.dataset.cat === 'all' ? location.pathname : '#' + t.dataset.cat);
        });
    });

    const galHash = function () {
        const h = location.hash.replace('#', '');
        if (h && $('.tab[data-cat="' + h + '"]', filters)) apply(h);
    };
    galHash();
    window.addEventListener('hashchange', galHash);
}

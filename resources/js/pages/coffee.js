import { $, $$ } from '../utils/dom';

/* ---------- coffee origin tabs (coffee page only) ----------
   Supports deep links such as /coffee#guji. */
const tabs = $('[data-tabs]');
if (tabs) {
    const btns = $$('.tab', tabs), panels = $$('.panel', tabs);

    const pick = function (id) {
        btns.forEach(function (b) { b.setAttribute('aria-selected', b.dataset.t === id); });
        panels.forEach(function (p) { p.classList.toggle('on', p.id === id); });
    };

    btns.forEach(function (b) { b.addEventListener('click', function () { pick(b.dataset.t); }); });

    const fromHash = function () {
        const hh = location.hash.replace('#', '');
        const el = hh && document.getElementById(hh);
        if (el && el.classList.contains('panel')) pick(hh);
    };
    fromHash();
    window.addEventListener('hashchange', fromHash);
}

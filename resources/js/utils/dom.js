// Tiny DOM helpers shared by every module (same helpers the original main.js used).
export const $ = (s, c) => (c || document).querySelector(s);
export const $$ = (s, c) => Array.prototype.slice.call((c || document).querySelectorAll(s));

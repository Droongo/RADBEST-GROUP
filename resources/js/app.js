/* =====================================================================
   Global entry point — loaded on every page by layouts/app.blade.php.
   Each module guards itself and does nothing when its markup is absent.
   Page-only behaviour lives in resources/js/pages/*.js.
   ===================================================================== */
import { initNavigation } from './components/navigation';
import { initReveal } from './components/reveal';
import { initCounters } from './components/counters';
import { initLightbox } from './components/lightbox';
import { initTestimonialSliders } from './components/testimonial-slider';
import { initMasonry } from './components/masonry';
import { initNewsletter } from './components/newsletter';

initNavigation();
initReveal();
initCounters();
initLightbox();
initTestimonialSliders();
initMasonry();
initNewsletter();

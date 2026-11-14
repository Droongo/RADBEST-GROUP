# HTML → Laravel Blade migration notes

The original static site (7 HTML pages, `assets/css/style.css`, `assets/js/main.js`, `assets/img/`) has been rebuilt as a Laravel 12 Blade application. The original HTML files and `assets/` folder were removed on 2026-11-13, after sign-off (see "Cleanup" below).

## 1. Pages → routes → views

| Original | URL | Route name | Controller | Blade view | Page CSS | Page JS |
|---|---|---|---|---|---|---|
| `rad.html` | `/` | `home` | `HomeController@index` | `pages/home` | `pages/home.css` | – |
| `about.html` | `/about` | `about` | `PageController@about` | `pages/about` | `pages/about.css` | – |
| `coffee.html` | `/coffee` | `coffee` | `PageController@coffee` | `pages/coffee` | `pages/coffee.css` | `pages/coffee.js` |
| `manufacturing.html` | `/manufacturing` | `manufacturing` | `PageController@manufacturing` | `pages/manufacturing` | `pages/manufacturing.css` (no page-only rules) | – |
| `trading.html` | `/trading` | `trading` | `PageController@trading` | `pages/trading` | `pages/trading.css` | – |
| `gallery.html` | `/gallery` | `gallery` | `PageController@gallery` | `pages/gallery` | `pages/gallery.css` | `pages/gallery.js` |
| `contact.html` | `/contact` | `contact` | `ContactController@show` | `pages/contact` | `pages/contact.css` | `pages/contact.js` |

Every old `*.html` URL returns a **301 redirect** to its new URL. The `#hash` part of the URL is kept, so `/gallery.html#trading` still opens the gallery filtered to Trading.

Form endpoints (CSRF-protected and rate-limited):

| Route | Purpose |
|---|---|
| `POST /contact` (`contact.store`, 5/min) | Contact form → `contact_messages` table + email to `CONTACT_RECIPIENT` |
| `POST /newsletter` (`newsletter.store`, 10/min) | Footer subscribe → `newsletter_subscribers` table |

## 2. Shared Blade components (`resources/views/components/`)

| Component | Replaces | Used on |
|---|---|---|
| `site-header` | The `<nav>` copied into all 7 pages. The active link is now set from the current route. | all |
| `site-footer` | The `<footer>` copied into all 7 pages | all |
| `page-hero` | Inner-page hero (breadcrumbs, eyebrow, title, intro, optional buttons and stats) | 6 inner pages |
| `cta-band` | Closing "Let's work together" band | 6 pages |
| `testimonial-slider` | Slider markup (data in `config/site.php`) | home, manufacturing, trading |
| `client-marquee` | The 30 hand-written logo tiles (15 clients ×2) | home, about |
| `mason-figure` | One masonry photo tile | gallery, trading |

## 3. CSS: where `style.css` went

`resources/css/app.css` is loaded on every page and imports these files **in this order** (the order matters; the reasons are noted inside the files):

```
base/variables.css      :root design tokens (unchanged values)
base/reset.css          *, html, img, a
base/global.css         body
base/typography.css     .serif, .eyebrow, h1–h3, .lead
components/buttons.css  .btn*, .tab                ← must come before animations.css
base/animations.css     .rv reveal, shared keyframes, reduced-motion
layouts/container.css   .wrap
layouts/sections.css    section rhythm, .alt, .tight, .center, .testi, .divisions, .numbers
layouts/grid.css        .about-grid, .split, .div-head, .journey-head, .gal-head
components/navigation.css, hero.css, media-stack.css, prose.css,
components/cta.css      ← must come before cards.css
components/cards.css    .step, .fact, .point, .offer
components/journey-band.css, photo-grids.css (mosaic, masonry, lightbox),
components/testimonials.css (slider, logo marquee), footer.css
```

**Page-only rules** were moved to `resources/css/pages/<page>.css`. Each file is loaded only on its own page via `@push('styles')`, and every selector in it starts with that page's body class (`<body class="page-home">` and so on). That way, page styles can't affect other pages.

Rules moved out of the shared stylesheet into page files:
- **Home**: `.marquee`, `.scroll-cue`, `.pillar(s)`, `.link-more`, `.card` (division cards), `.div-grid`, `.people`, `.num-grid`, `.gallery`/`.g1–g6`
- **About**: `.vm`, `.team-grid`, `.point.cta`, `.steps.three`, `a.step`, `.small.s2`
- **Coffee**: `.ticks`, `.tabs`, `.panel`, `.origin`, `.lot(s)`, `.spec`
- **Gallery**: `.filters`, `.gal-count`
- **Contact**: `.contact-grid`, `.info`, `.form`, `.field`, `.form-msg`, `.map`, `.faq-*`, `details`/`summary`
- **Trading**: `.offer.plain`, `.offer.span2`

### Conflicts and risky selectors resolved
- **Bare `footer {}` element selectors** became `.site-footer {}`.
- **Bare `details`/`summary` selectors** are now scoped to the Contact page.
- **`section { padding }`** became `main > section`. Its specificity stays at element level, so every existing class override (`.cta`, `.tight`…) still wins exactly as before.
- **About 30 inline `style=""` attributes** were moved into page CSS. Each new selector is specific enough to win in the same places the inline style did, including the mobile breakpoints. Example: the home "facts" row stays 4 columns on phones, exactly as in the original.
- **Hero background photos** are the only inline styles kept. They are per-page content, passed in as component props.
- **Duplicate definitions merged**:
  - `.mason` was declared twice (CSS columns, then a grid). Only the effective grid version is kept.
  - `.links`, `.f-bot` and `nav.main.open .links` had their split declarations merged.
- **Unused rules removed.** I checked each one against all 7 pages first:
  - classes never used on any page: `.topbar`, `.people-grid`, `.people .ph/.quote`, `.t-grid`, `.t-card`, `.who`, `.clients`, `.wordmark`, `.member`, `.cert-grid`, `.about-grid.flip`, `.faq-side .ph`, `.f-copy a.dev`, `em.serif`, `noscript .rv`
  - rules that never took effect: the `.cta-box::before` background (every CTA band uses a real `<img>`), and the old CSS-columns `.mason` media queries
- **CSS frameworks**: none. The Tailwind and axios packages that come with the Laravel skeleton were removed.

## 4. JavaScript: where `main.js` went

| `main.js` section | New location | Loaded on |
|---|---|---|
| `$`, `$$` helpers | `js/utils/dom.js` | – |
| sticky nav, mobile menu, dropdown | `js/components/navigation.js` | all (`app.js`) |
| reveal on scroll | `js/components/reveal.js` | all |
| counters | `js/components/counters.js` | all (no-op without `.count`) |
| lightbox | `js/components/lightbox.js` | all (no-op without `[data-lightbox]`) |
| testimonial slider | `js/components/testimonial-slider.js` | all (no-op without `[data-slider]`) |
| masonry | `js/components/masonry.js` | all (no-op without `.mason`) |
| newsletter | `js/components/newsletter.js` | all (footer) |
| gallery filters | `js/pages/gallery.js` | gallery only |
| coffee origin tabs | `js/pages/coffee.js` | coffee only |
| contact form + FAQ | `js/pages/contact.js` | contact only |

Except for the two forms, the logic is the original code, unchanged.

**Contact form:**
- **Before:** it opened the visitor's email app with a `mailto:` link.
- **Now:** it submits to `POST /contact` with `fetch()` and shows the result in the same `.form-msg` box. Validation errors also appear in that box.
- **Without JavaScript:** the form submits normally, the page reloads, and the server shows the same message.

**Newsletter:**
- **Before:** it only changed the button label; nothing was sent or stored.
- **Now:** it stores the address, then shows the same "Thank you ✓" label.

The logo's inline `onerror` text fallback was kept on purpose. It has to work before the deferred JavaScript loads.

## 5. Assets
- `assets/img/**` was copied **with identical paths and filenames** to `public/assets/img/**` (97 files) and is referenced with `asset()`.
- The two logo PNGs, which the original loaded from `radbestgroup.com`, are now local copies in `public/assets/img/logo/` (`radbest-logo.png`, `radbest-logo-white.png`).
- Favicon: the original site had none. `public/favicon.ico` (16 + 32 px) and `public/favicon-16x16.png` / `favicon-32x32.png` show the white RAD emblem and light-blue swoosh from the logo on a rounded navy (`#123543`) tile. "BEST" and the wordmark were left out because they're unreadable at that size.
- The one image used in CSS (`coffee-cherries-hands.jpg`, behind the home "Coffee" card) is bundled by Vite through the `@images` alias.
- Unchanged external dependencies:
  - Google Fonts (Manrope, Fraunces)
  - the Google Maps embed
  - links to `radbesttrading.com`

## 6. Verification performed
1. **Visual equivalence** (headless Edge): each original page vs its Laravel version at 1920×1080, 1440×900, 768×1024, 390×844 and 360×800. For every element (236–448 per page) the script compared position and size, the full computed style, `::before`/`::after` styles and the visible text, plus a full-page pixel diff.
   - **Result:** all 35 combinations match. 0–30 pixels differed per page because of image-decoding noise.
   - **One apparent difference:** the hero title's `ch`-based width on the first page loaded in a fresh browser. It turned out to be a Chromium font-metrics caching quirk: it hits whichever site loads first, original or Laravel alike, so it isn't a CSS difference.
2. **Interaction checks**, 27 passing:
   - nav: solid on scroll, dropdown, mobile menu
   - counters, testimonial slider, lightbox (open, keys, filtered paging)
   - gallery filters and `#hash` deep links; coffee tabs and `#hash` deep links
   - FAQ (one open at a time)
   - contact form with and without JavaScript; newsletter
   - legacy redirects
   - no JavaScript errors on any page
3. **`php artisan test`**: 16 feature tests pass (all pages, redirects, gallery counts, active nav, both forms, validation).
4. **`npm run build`** succeeds. `route:cache`, `config:cache` and `view:cache` all compile.

## 7. Remaining items / needs a decision
- **Email delivery**: enquiries are always saved to the database. They are emailed only once real SMTP settings (`MAIL_*`) are in `.env`; until then the email is written to `storage/logs/laravel.log`.
- **No admin screen**: there is no page for viewing enquiries or subscribers yet. They're in the `contact_messages` and `newsletter_subscribers` tables.
- **Newsletter**: addresses are collected only. Nothing sends newsletters or handles unsubscribes.
- **Footer legal links**: "Terms & conditions" and "Privacy policy" still point to `#`, as in the original. A privacy policy matters more now that the site stores personal data.
- **Trading page**: `/trading` exists, but the site's navigation still links to the external `radbesttrading.com`, as the original did.
## 8. Cleanup
**Done (2026-11-13):** the 7 original HTML files, the unused raw photos (`AB6A*.JPG`, `IMG_*`, `photo_*`, `*.HEIC`) and the company-profile PDF were moved to the Windows Recycle Bin.

The original `assets/` folder was then moved to the Recycle Bin as well. Before deleting, all 97 of its images were confirmed byte-identical to the copies in `public/assets/img/`.

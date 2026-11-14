@extends('layouts.app')

@section('title', 'RAD Best Business Group')
@section('description', 'RAD Best Business Group — specialty Ethiopian coffee export, textile manufacturing, and workspace & interior solutions. From Ethiopia to the world.')
@section('body_class', 'page-home')

@push('styles')
    @vite('resources/css/pages/home.css')
@endpush

@section('content')

<!-- HERO -->
<header class="hero" id="top">
  <div class="bg" style="background-image:url('{{ asset('assets/img/coffee-team-workers.jpg') }}')"></div>
  <div class="wrap on-dark">
    <span class="eyebrow rv">RAD Best Business Group · Addis Ababa</span>
    <h1 class="rv d1">From Ethiopia, <span class="serif">to the world.</span></h1>
    <p class="rv d2">Specialty Ethiopian coffee, modern textile manufacturing and workspace solutions, brought together under one group built on quality, integrity and lasting partnerships.</p>
    <div class="ctas rv d3">
      <a href="#divisions" class="btn btn-sky">Explore our businesses <span class="arr">→</span></a>
      <a href="{{ route('about') }}" class="btn btn-ghost">About the group</a>
    </div>
    <div class="hero-stats rv d4">
      <div><b>2021</b><small>Founded in Addis Ababa</small></div>
      <div><b>3</b><small>Core business divisions</small></div>
      <div><b>300+</b><small>Employees across the group</small></div>
      <div><b>Global</b><small>Export &amp; trade reach</small></div>
    </div>
  </div>
  <div class="scroll-cue">Scroll</div>
</header>

<div class="marquee" aria-hidden="true">
  <div class="track">
    <span>Specialty Ethiopian Coffee</span><span>Dyed Yarns, Fabrics &amp; Garments</span><span>Workspace &amp; Interior Solutions</span><span>Quality at Every Stage</span><span>Trusted Partnerships</span><span>Made in Ethiopia</span>
    <span>Specialty Ethiopian Coffee</span><span>Dyed Yarns, Fabrics &amp; Garments</span><span>Workspace &amp; Interior Solutions</span><span>Quality at Every Stage</span><span>Trusted Partnerships</span><span>Made in Ethiopia</span>
  </div>
</div>

<!-- ABOUT (summary) -->
<section id="about">
  <div class="wrap about-grid">
    <div class="about-media rv">
      <div class="big"><img src="{{ asset('assets/img/coffee-team-sorting.jpg') }}" alt="RAD Best team members hand-sorting coffee cherries on a drying bed" width="1800" height="1350" loading="lazy"></div>
      <div class="small"><img src="{{ asset('assets/img/mfg-ribbons-3.jpg') }}" alt="Woven elastic tapes produced by RAD Best Manufacturing" width="1200" height="1800" loading="lazy"></div>
      <div class="badge-yr"><b>2021</b><small>founded in<br>Addis Ababa</small></div>
    </div>
    <div>
      <span class="eyebrow rv">Who we are</span>
      <h2 class="rv d1">One group. Three industries. <span class="serif">One standard.</span></h2>
      <p class="lead rv d2">Founded in 2021 and headquartered at Garad City Mall in Addis Ababa, RAD Best Business Group is a diversified Ethiopian group spanning specialty coffee export, textile manufacturing and workspace solutions. What connects every business is simple: we hold each product, partner and shipment to the same high standard.</p>
      <div class="pillars">
        <div class="pillar rv d2">
          <div class="ic"><svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M12 2l3 6.5 7 .9-5.1 4.8 1.3 6.9L12 17.8 5.8 21l1.3-6.9L2 9.4l7-.9z"/></svg></div>
          <div><h3>Quality &amp; excellence</h3><p>Quality assurance is embedded across sourcing, production, manufacturing and distribution, so every product reflects consistency and reliability.</p></div>
        </div>
        <div class="pillar rv d3">
          <div class="ic"><svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M9 18h6M10 22h4M12 2a7 7 0 0 0-4 12.7V17h8v-2.3A7 7 0 0 0 12 2z"/></svg></div>
          <div><h3>Innovation &amp; efficiency</h3><p>Modern technology, skilled expertise and efficient processes that keep improving how we operate and respond to markets.</p></div>
        </div>
        <div class="pillar rv d4">
          <div class="ic"><svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M8 12l3 3 5-6"/><circle cx="12" cy="12" r="10"/></svg></div>
          <div><h3>Trusted partnerships</h3><p>Long-term relationships with customers, suppliers, producers and partners, built on transparency, responsiveness and accountability.</p></div>
        </div>
      </div>
      <a href="{{ route('about') }}" class="link-more rv d4">Read our full story <span class="arr">→</span></a>
    </div>
  </div>
</section>

<!-- DIVISIONS -->
<section class="divisions on-dark" id="divisions">
  <div class="wrap">
    <div class="div-head">
      <div>
        <span class="eyebrow rv">Our businesses</span>
        <h2 class="rv d1">Built for <span class="serif">what's next.</span></h2>
      </div>
      <p class="lead rv d2">Each division serves a distinct market while contributing to one mission. Together they bring expertise, quality and innovation to partners at home and abroad.</p>
    </div>
    <div class="div-grid">
      <article class="card coffee rv">
        <span class="num">01</span>
        <span class="tag">RAD Best Coffee</span>
        <h3>Export of specialty Ethiopian coffee</h3>
        <p>Connecting global buyers with premium Ethiopian specialty coffees through responsible sourcing, quality assurance and reliable export services, from Yirgacheffe, Guji and Sidama.</p>
        <ul><li>Yirgacheffe</li><li>Guji</li><li>Sidama</li><li>Washed &amp; natural</li></ul>
        <a href="{{ route('coffee') }}" class="more">Explore RAD Best Coffee <span class="arr">→</span></a>
      </article>
      <article class="card mfg rv d1">
        <span class="num">02</span>
        <span class="tag">RAD Best Manufacturing</span>
        <h3>Dyed yarns, fabrics &amp; garments</h3>
        <p>High-quality dyed yarns, textile products and garments from a 30,000 m² integrated facility in Lege-Tafo, Addis Ababa.</p>
        <div class="stat"><b>300+</b><span>employees · yarn to finished garment</span></div>
        <a href="{{ route('manufacturing') }}" class="more">Explore Manufacturing <span class="arr">→</span></a>
      </article>
      <article class="card trd rv d2">
        <span class="num">03</span>
        <span class="tag">RAD Best Trading</span>
        <h3>Workspace &amp; interior solutions</h3>
        <p>Modern office furniture, architectural glass, LED lighting, blinds, carpets and façade systems, with installation and after-sales support.</p>
        <div class="stat"><b>End-to-end</b><span>planning, delivery &amp; installation</span></div>
        <a href="https://radbesttrading.com/" target="_blank" rel="noopener" class="more">Explore Trading <span class="arr">→</span></a>
      </article>
    </div>
  </div>
</section>

<!-- COFFEE JOURNEY -->
<section id="journey">
  <div class="wrap">
    <div class="journey-head">
      <div>
        <span class="eyebrow rv">From cherry to cup</span>
        <h2 class="rv d1">Every bean, <span class="serif">touched by hand.</span></h2>
      </div>
      <p class="lead rv d2">Our coffee is grown in Ethiopia's highland origins and handled with care at every stage. Here is how a single cherry becomes an export-grade green bean.</p>
    </div>
    <div class="steps">
      <div class="step rv">
        <div class="ph"><img src="{{ asset('assets/img/t/coffee-cherries-hands.jpg') }}" alt="Hands holding freshly picked red coffee cherries" width="600" height="800" loading="lazy"></div>
        <div class="tx"><h3>Selective harvest</h3><p>Farmers handpick only ripe, deep-red cherries, so each one captures the essence of the land.</p></div>
      </div>
      <div class="step rv d1">
        <div class="ph"><img src="{{ asset('assets/img/t/coffee-women-beds.jpg') }}" alt="Women hand-sorting coffee cherries on raised drying beds" width="600" height="800" loading="lazy"></div>
        <div class="tx"><h3>Sorting &amp; grading</h3><p>Cherries are sorted for ripeness and density so each lot is uniform and defect-free.</p></div>
      </div>
      <div class="step rv d2">
        <div class="ph"><img src="{{ asset('assets/img/t/coffee-beds-wide.jpg') }}" alt="Coffee drying on raised beds under the highland sun" width="600" height="800" loading="lazy"></div>
        <div class="tx"><h3>Drying on raised beds</h3><p>Natural and washed lots dry slowly in the highland sun, turned by hand throughout the day.</p></div>
      </div>
      <div class="step rv d3">
        <div class="ph"><img src="{{ asset('assets/img/t/coffee-green-hands.jpg') }}" alt="Washed green coffee beans held in two hands" width="600" height="800" loading="lazy"></div>
        <div class="tx"><h3>Green bean export</h3><p>Graded, cupped and packed for export, to preserve quality on its way to roasters worldwide.</p></div>
      </div>
    </div>
    <div class="journey-band rv">
      <img src="{{ asset('assets/img/coffee-aerial.jpg') }}" alt="Aerial view of rows of raised coffee drying beds in the Ethiopian highlands" width="1800" height="1012" loading="lazy">
      <div class="tx on-dark">
        <span class="eyebrow">Origin</span>
        <h3>Rows of raised beds, framed by forest.</h3>
        <p>Drying stations like this one let air move around every cherry. It is slow, careful work, and a big reason Ethiopian coffee tastes the way it does: bright, floral and complex.</p>
        <a href="{{ route('coffee') }}" class="link-more">Discover our coffee origins <span class="arr">→</span></a>
      </div>
    </div>
  </div>
</section>

<!-- FACTS -->
<section class="people">
  <div class="wrap">
    <div class="facts">
      <div class="fact rv d2"><b>On the ground</b><span>Our team works side by side with producers at the washing stations.</span></div>
      <div class="fact rv d3"><b>Trusted suppliers</b><span>Long-term work with growers and cooperatives in renowned regions.</span></div>
      <div class="fact rv d3"><b>Local employment</b><span>300+ jobs across our factory floor, offices and supply chain.</span></div>
      <div class="fact rv d4"><b>Made in Ethiopia</b><span>Bringing Ethiopian products and capability to the world.</span></div>
    </div>
  </div>
</section>

<!-- NUMBERS -->
<div class="numbers">
  <div class="wrap num-grid">
    <div class="rv"><b><span class="count" data-to="300">0</span><i>+</i></b><span>Employees across coffee, trading and manufacturing</span></div>
    <div class="rv d1"><b><span class="count" data-to="3">0</span></b><span>Core business divisions under one group</span></div>
    <div class="rv d3"><b><span class="count" data-to="3">0</span></b><span>Renowned coffee origins: Yirgacheffe, Guji and Sidama</span></div>
  </div>
</div>

<!-- GALLERY PREVIEW -->
<section id="gallery">
  <div class="wrap">
    <div class="gal-head">
      <div>
        <span class="eyebrow rv">Gallery</span>
        <h2 class="rv d1">Moments <span class="serif">across the group.</span></h2>
      </div>
      <p class="lead rv d2">From the drying beds of Ethiopia's highlands to our factory floor and showroom. Click any image to view it full size.</p>
    </div>
    <div class="gallery" data-lightbox>
      <figure class="g1 rv"><img src="{{ asset('assets/img/t/coffee-team-workers.jpg') }}" alt="Team and workers at the drying beds" width="800" height="450" data-full="{{ asset('assets/img/coffee-team-workers.jpg') }}" loading="lazy"><figcaption>The team at the drying beds</figcaption></figure>
      <figure class="g2 rv d1"><img src="{{ asset('assets/img/t/coffee-cherries-field.jpg') }}" alt="Ripe coffee cherries on a drying bed" width="800" height="450" data-full="{{ asset('assets/img/coffee-cherries-field.jpg') }}" loading="lazy"><figcaption>Ripe cherries</figcaption></figure>
      <figure class="g3 rv d2"><img src="{{ asset('assets/img/t/trade-meeting-1.jpg') }}" alt="Executive meeting table with leather chairs" width="800" height="450" data-full="{{ asset('assets/img/trade-meeting-1.jpg') }}" loading="lazy"><figcaption>Boardroom furniture</figcaption></figure>
      <figure class="g4 rv"><img src="{{ asset('assets/img/t/coffee-women-beds.jpg') }}" alt="Women sorting natural coffee" width="600" height="800" data-full="{{ asset('assets/img/coffee-women-beds.jpg') }}" loading="lazy"><figcaption>Hand-sorting naturals</figcaption></figure>
      <figure class="g5 rv d1"><img src="{{ asset('assets/img/t/mfg-ribbons-3.jpg') }}" alt="Stacked woven elastic tapes" width="533" height="800" data-full="{{ asset('assets/img/mfg-ribbons-3.jpg') }}" loading="lazy"><figcaption>Woven elastic &amp; tapes</figcaption></figure>
      <figure class="g6 rv d2"><img src="{{ asset('assets/img/t/trade-desk-corner.jpg') }}" alt="Executive desk with built-in storage" width="450" height="800" data-full="{{ asset('assets/img/trade-desk-corner.jpg') }}" loading="lazy"><figcaption>Executive desk</figcaption></figure>
    </div>
    <div class="center rv"><a href="{{ route('gallery') }}" class="btn btn-navy">View the full gallery <span class="arr">→</span></a></div>
  </div>
</section>

<!-- TESTIMONIALS -->
<section class="testi">
  <div class="wrap">
    <div class="center">
      <span class="eyebrow rv">What partners say</span>
      <h2 class="rv d1">Trusted by industry <span class="serif">leaders.</span></h2>
    </div>
    <x-testimonial-slider :items="['royal-coffee', 'amaga', 'eeig']" />
    <x-client-marquee />
  </div>
</section>

<!-- CTA -->
<x-cta-band id="contact" image="assets/img/coffee-aerial.jpg" width="1800" height="1012">
  <x-slot:title>Together, we turn opportunities into <span class="serif">lasting value.</span></x-slot:title>
  Whether you're a roaster looking for exceptional Ethiopian coffee, a brand seeking a reliable manufacturer, or a business furnishing a new space, let's connect and build something stronger together.
  <x-slot:checks><span>Specialty Ethiopian coffee sourcing</span><span>Workspace &amp; interior solutions</span><span>Modern textile manufacturing</span><span>Quality-driven solutions</span></x-slot:checks>
</x-cta-band>

@endsection

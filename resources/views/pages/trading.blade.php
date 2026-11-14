@extends('layouts.app')

@section('title', 'RAD Best Trading — Workspace & Interior Solutions')
@section('description', 'RAD Best Trading supplies office furniture, architectural glass, FSL LED lighting, window blinds, carpets and façade systems, with installation and after-sales support across Ethiopia.')
@section('body_class', 'page-trading')

@push('styles')
    @vite('resources/css/pages/trading.css')
@endpush

@section('content')

<x-page-hero image="assets/img/trade-exec-1.jpg" position="center 45%" :crumbs="[['label' => 'Divisions', 'url' => route('home').'#divisions'], ['label' => 'Trading']]" eyebrow="RAD Best Trading">
  <x-slot:title>Workspace &amp; Interior Solutions <span class="serif">for Modern Businesses.</span></x-slot:title>
  A well-designed workspace supports productivity, collaboration and the professional image of an organization. We supply furniture and interior solutions that combine functionality, durability and contemporary design.
  <x-slot:ctas>
      <a href="#offer" class="btn btn-sky">What we offer <span class="arr">→</span></a>
      <a href="#showroom" class="btn btn-ghost">Browse the showroom</a>
  </x-slot:ctas>
  <x-slot:stats>
      <div><b>7+</b><small>Product categories</small></div>
      <div><b>FSL</b><small>Authorised LED lighting agent</small></div>
      <div><b>1st &amp; 3rd</b><small>Showroom floors, Garad City Mall</small></div>
      <div><b>One-stop</b><small>Plan, supply, install, support</small></div>
  </x-slot:stats>
</x-page-hero>

<!-- INTRO -->
<section id="about-trading">
  <div class="wrap about-grid">
    <div class="about-media rv">
      <div class="big"><img src="{{ asset('assets/img/t/trade-chair-shelf.jpg') }}" alt="Executive chair beside lit shelving in a modern office" width="449" height="800" loading="lazy"></div>
      <div class="small"><img src="{{ asset('assets/img/t/trade-chair-detail.jpg') }}" alt="Black leather office chairs at a meeting table" width="800" height="451" loading="lazy"></div>
      <div class="badge-yr"><b>7+</b><small>product lines for<br>the modern workplace</small></div>
    </div>
    <div class="prose">
      <span class="eyebrow rv">Our approach</span>
      <h2 class="rv d1">Complete Workplaces, <span class="serif">Sourced and Installed.</span></h2>
      <p class="lead rv d2">Through RAD Best Trading, we supply workspace and interior solutions that combine functionality, durability and contemporary design for commercial, institutional and corporate environments across Ethiopia.</p>
      <p class="rv d2">Our product portfolio includes office furniture, architectural glass systems, lighting solutions, façade cladding, window blinds, office carpets and professional installation materials sourced from trusted manufacturers. By combining quality products with technical support and installation services, we provide clients with complete workplace solutions tailored to their operational requirements.</p>
      <div class="chips rv d3"><span>Office furniture</span><span>Architectural glass</span><span>LED lighting</span><span>Façade cladding</span><span>Window blinds</span><span>Office Carpets</span><span>Sealants</span></div>
    </div>
  </div>
</section>

<!-- WHAT WE OFFER -->
<section class="alt" id="offer">
  <div class="wrap">
    <div class="journey-head">
      <div>
        <span class="eyebrow rv">What we offer</span>
        <h2 class="rv d1">Everything for a <span class="serif">Success-Inspiring Workspace.</span></h2>
      </div>
      <p class="lead rv d2">Each product is selected for functionality, durability and long-term performance, and meets industry standards for safety, quality and contemporary design.</p>
    </div>
    <div class="offer-grid">
      <article class="offer rv"><div class="ph"><img src="{{ asset('assets/img/t/trade-office-furniture.jpg') }}" alt="Luxury executive office desk" width="684" height="520" loading="lazy"></div><div class="tx"><span class="tagline">01 · Furniture</span><h3>Luxury Office Furniture</h3><p>Executive offices, modular workstations, ergonomic seating, meeting tables, filing and storage systems, and reception furniture designed for modern working environments.</p></div></article>
      <article class="offer rv d1"><div class="ph"><img src="{{ asset('assets/img/t/trade-glass.jpg') }}" alt="Glass partitions in an office interior" width="684" height="521" loading="lazy"></div><div class="tx"><span class="tagline">02 · Glass</span><h3>Glass &amp; Glass Accessories</h3><p>Architectural façade glass and glass accessories for office buildings, commercial developments and interior applications, meeting industry standards for safety and quality.</p></div></article>
      <article class="offer rv d2"><div class="ph"><img src="{{ asset('assets/img/t/trade-lighting.jpg') }}" alt="Circular LED ceiling lighting in an open-plan office" width="684" height="526" loading="lazy"></div><div class="tx"><span class="tagline">03 · Lighting</span><h3>FSL LED Lighting</h3><p>As an authorised FSL agent, we supply certified, energy-efficient lighting for offices, retail spaces and hospitality facilities, promoting energy efficiency and long service life.</p></div></article>
      <article class="offer rv"><div class="ph"><img src="{{ asset('assets/img/t/trade-blinds.jpg') }}" alt="Executive desk and chairs with window blinds" width="800" height="443" loading="lazy"></div><div class="tx"><span class="tagline">04 · Blinds</span><h3>Window Blind Systems</h3><p>Roller blinds and dual-layer day-and-night blinds that provide flexible light control, privacy and visual appeal for contemporary offices.</p></div></article>
      <article class="offer rv d1"><div class="ph"><img src="{{ asset('assets/img/t/trade-cladding.jpg') }}" alt="Timber-look exterior cladding on a building corner" width="800" height="618" loading="lazy"></div><div class="tx"><span class="tagline">05 · Façade</span><h3>Exterior Façade Cladding</h3><p>Façade systems that enhance both the appearance and performance of commercial buildings, improving exterior durability and modern architectural aesthetics.</p></div></article>
      <article class="offer rv d2"><div class="ph"><img src="{{ asset('assets/img/t/trade-carpet.jpg') }}" alt="Commercial carpet tiles in an office corridor" width="800" height="617" loading="lazy"></div><div class="tx"><span class="tagline">06 · Flooring</span><h3>Office Carpets</h3><p>Carpets designed for commercial environments, offering durability, ease of maintenance and long-term performance in high-traffic areas.</p></div></article>
      <article class="offer rv"><div class="ph"><img src="{{ asset('assets/img/t/trade-sealant.jpg') }}" alt="Applying silicone sealant to a window frame" width="800" height="620" loading="lazy"></div><div class="tx"><span class="tagline">07 · Finishing</span><h3>Wacker Silicone Sealant</h3><p>Wacker silicone sealants for glazing, façade installation and interior finishing, manufactured to international quality standards for demanding projects.</p></div></article>
      <article class="offer plain span2 rv d1"><div class="tx"><span class="tagline">Need something specific?</span><h3>We Source Workplace Products From Trusted Manufacturers.</h3><p>Tell us what your project needs and our team will plan, supply and install it.</p><a href="{{ route('contact') }}" class="btn btn-sky">Talk to our team <span class="arr">→</span></a></div></article>
    </div>
  </div>
</section>

<!-- SHOWROOM GALLERY -->
<section id="showroom">
  <div class="wrap">
    <div class="gal-head">
      <div>
        <span class="eyebrow rv">The furniture collection</span>
        <h2 class="rv d1">Designed for Work, <span class="serif">Built to Last.</span></h2>
      </div>
      <p class="lead rv d2">Executive desks, boardroom tables, ergonomic chairs and lounge seating from our showroom at Garad City Mall. Click any image to view it full size.</p>
    </div>
    <div class="mason" data-lightbox>
      <x-mason-figure file="trade-exec-1.jpg" cat="trading" label="Executive" alt="Executive desk with guest chairs and city view" caption="Executive office suite" w="800" h="449" />
      <x-mason-figure file="trade-meeting-2.jpg" cat="trading" label="Meeting" alt="Conference table with leather chairs" caption="Boardroom table & chairs" w="800" h="454" />
      <x-mason-figure file="trade-desk-corner.jpg" cat="trading" label="Executive" alt="Executive desk corner detail" caption="Executive desk detail" w="450" h="800" />
      <x-mason-figure file="trade-lounge.jpg" cat="trading" label="Lounge" alt="Leather sofa and armchairs with coffee table" caption="Leather lounge seating" w="800" h="450" />
      <x-mason-figure file="trade-chair-shelf.jpg" cat="trading" label="Seating" alt="High-back executive chair beside shelving" caption="High-back executive chair" w="449" h="800" />
      <x-mason-figure file="trade-exec-2.jpg" cat="trading" label="Executive" alt="Beige executive desk with guest chairs" caption="Executive desk & credenza" w="800" h="447" />
      <x-mason-figure file="trade-table-detail.jpg" cat="trading" label="Meeting" alt="Meeting table with integrated power modules" caption="Table with power modules" w="800" h="459" />
      <x-mason-figure file="trade-armchairs.jpg" cat="trading" label="Seating" alt="Two tan leather armchairs with a side table" caption="Reception armchairs" w="800" h="450" />
      <x-mason-figure file="trade-meeting-chairs.jpg" cat="trading" label="Seating" alt="Black ergonomic meeting chairs" caption="Ergonomic meeting chairs" w="800" h="460" />
      <x-mason-figure file="trade-chair-desk.jpg" cat="trading" label="Executive" alt="Grey executive chair at a white desk" caption="Executive chair & desk" w="800" h="450" />
    </div>
    <div class="center rv"><a href="{{ route('gallery') }}#trading" class="btn btn-navy">See all trading photos <span class="arr">→</span></a></div>
  </div>
</section>

<!-- SERVICE APPROACH -->
<section class="divisions on-dark" id="service">
  <div class="wrap">
    <div class="div-head">
      <div>
        <span class="eyebrow rv">Our service approach</span>
        <h2 class="rv d1">Beyond Product Supply, <span class="serif">Through the Whole Project.</span></h2>
      </div>
      <p class="lead rv d2">By combining quality products with responsive customer service and technical expertise, we help organizations create efficient, functional and professional work environments.</p>
    </div>
    <div class="points">
      <div class="point rv"><div class="ic">01</div><h3>Consultation &amp; Workspace Planning</h3><p>We start with your operational needs and plan the space around how your people work.</p></div>
      <div class="point rv d1"><div class="ic">02</div><h3>Product Selection</h3><p>The right furniture, glass, lighting and finishes chosen for function, durability and design.</p></div>
      <div class="point rv d2"><div class="ic">03</div><h3>Procurement &amp; Delivery</h3><p>Products sourced from trusted manufacturers and delivered to your site.</p></div>
      <div class="point rv"><div class="ic">04</div><h3>Professional Installation</h3><p>Technical support and installation services for complete, ready-to-use workplaces.</p></div>
      <div class="point rv d1"><div class="ic">05</div><h3>After-Sales Support</h3><p>Responsive service that keeps your workspace performing long after handover.</p></div>
      <div class="point rv d2"><div class="ic"><svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M3 9l1.5-5h15L21 9M3 9v11h18V9M3 9h18M9 20v-6h6v6"/></svg></div><h3>Visit Our Showroom</h3><p>Wello Sefer, Garad City Mall, 1st and 3rd Floor, Addis Ababa, Ethiopia.</p></div>
    </div>
    <div class="journey-band rv">
      <img src="{{ asset('assets/img/trade-meeting-1.jpg') }}" alt="Large boardroom table with leather chairs" width="1672" height="941" loading="lazy">
      <div class="tx on-dark"><span class="eyebrow">One-stop solution</span><h3>"It truly is your one-stop solution for creating success-inspiring workspaces."</h3></div>
    </div>
  </div>
</section>

<!-- TESTIMONIAL -->
<section class="testi tight">
  <div class="wrap">
    <div class="center"><span class="eyebrow rv">Trusted by leading organizations</span><h2 class="rv d1">Built on <span class="serif">Long-Term Relationships.</span></h2></div>
    <x-testimonial-slider :items="['eeig']" />
  </div>
</section>

<x-cta-band id="enquire" image="assets/img/trade-exec-3.jpg" width="1672" height="941">
  <x-slot:title>Let's Create a Workspace That <span class="serif">Inspires Success.</span></x-slot:title>
  Tell us about your office, building or project and RAD Best Trading will plan, supply and install the right solution.
  <x-slot:checks><span>Showroom: Garad City Mall, 1st &amp; 3rd Floor, Wello Sefer</span><span>Authorised FSL LED lighting agent</span><span>Installation &amp; after-sales support</span></x-slot:checks>
</x-cta-band>

@endsection

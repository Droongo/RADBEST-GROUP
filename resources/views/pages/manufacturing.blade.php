@extends('layouts.app')

@section('title', 'RAD Best Manufacturing — Dyed Yarns, Fabrics & Garments')
@section('description', 'RAD Best Manufacturing operates a 30,000 m² integrated textile facility in Lege-Tafo, Addis Ababa: yarn dyeing, fabric production and garment manufacturing for local and international markets.')
@section('body_class', 'page-manufacturing')

@push('styles')
    @vite('resources/css/pages/manufacturing.css')
@endpush

@section('content')

<x-page-hero image="assets/img/mfg-thread.jpg" position="center 50%" :crumbs="[['label' => 'Divisions', 'url' => route('home').'#divisions'], ['label' => 'Manufacturing']]" eyebrow="RAD Best Manufacturing">
  <x-slot:title>Supporting Ethiopia's <span class="serif">growing textile industry.</span></x-slot:title>
  Integrated manufacturing capabilities, from yarn dyeing to finished garments, designed to serve both domestic and international markets.
  <x-slot:ctas>
      <a href="#produce" class="btn btn-sky">What we produce <span class="arr">→</span></a>
      <a href="#range" class="btn btn-ghost">See the product range</a>
  </x-slot:ctas>
  <x-slot:stats>
      <div><b>30,000 m²</b><small>Production facility</small></div>
      <div><b>153</b><small>Employees</small></div>
      <div><b>3</b><small>Stages under one roof</small></div>
      <div><b>Lege-Tafo</b><small>Addis Ababa</small></div>
  </x-slot:stats>
</x-page-hero>

<!-- INTRO -->
<section id="about-mfg">
  <div class="wrap about-grid">
    <div class="about-media rv">
      <div class="big"><img src="{{ asset('assets/img/t/mfg-spinning.jpg') }}" alt="Spinning machines with rows of white yarn packages" width="533" height="800" loading="lazy"></div>
      <div class="small"><img src="{{ asset('assets/img/t/mfg-ribbons-1.jpg') }}" alt="Colourful woven tapes and elastic" width="533" height="800" loading="lazy"></div>
      <div class="badge-yr"><b>30,000</b><small>square meters of<br>production space</small></div>
    </div>
    <div class="prose">
      <span class="eyebrow rv">Integrated manufacturing</span>
      <h2 class="rv d1">From yarn to garment, <span class="serif">in one production environment.</span></h2>
      <p class="lead rv d2">RAD Best Manufacturing contributes to Ethiopia's expanding textile and garment sector through integrated manufacturing capabilities designed to serve both domestic and international markets.</p>
      <p class="rv d2">Operating from a 30,000 square meter production facility in the Lege-Tafo area of Addis Ababa, our manufacturing operations include yarn dyeing, fabric production and garment manufacturing. Managing these processes within a single production environment allows us to maintain consistent quality standards, improve operational efficiency and respond effectively to diverse customer requirements.</p>
      <p class="rv d3">Our integrated production model enables clients to work with one manufacturing partner throughout multiple stages of the textile value chain.</p>
    </div>
  </div>
</section>

<!-- WHAT WE PRODUCE -->
<section class="alt" id="produce">
  <div class="wrap">
    <div class="journey-head">
      <div>
        <span class="eyebrow rv">What we produce</span>
        <h2 class="rv d1">Commitment to quality <span class="serif">and a diverse range.</span></h2>
      </div>
      <p class="lead rv d2">Three product lines that follow the textile value chain, each made to client specifications for domestic and export markets.</p>
    </div>
    <div class="offer-grid">
      <article class="offer rv"><div class="ph"><img src="{{ asset('assets/img/t/mfg-yarn-cones.jpg') }}" alt="Cones of dyed yarn on a creel" width="650" height="800" loading="lazy"></div><div class="tx"><span class="tagline">01 · Yarn</span><h3>Dyed yarns</h3><p>High-quality dyed yarns in a range of specifications, suitable for apparel, industrial textiles and commercial manufacturing applications.</p></div></article>
      <article class="offer rv d1"><div class="ph"><img src="{{ asset('assets/img/t/mfg-lace.jpg') }}" alt="Samples of white lace and trims" width="533" height="800" loading="lazy"></div><div class="tx"><span class="tagline">02 · Fabric</span><h3>Fabrics</h3><p>A fabric portfolio supporting garment production as well as commercial and industrial textile applications, with reliable quality and consistent performance.</p></div></article>
      <article class="offer rv d2"><div class="ph"><img src="{{ asset('assets/img/t/mfg-ribbons-1.jpg') }}" alt="Woven tapes and finished trims" width="533" height="800" loading="lazy"></div><div class="tx"><span class="tagline">03 · Garments</span><h3>Finished garments</h3><p>Corporate uniforms, workwear, fashion apparel and custom garments made to client specifications for domestic and export markets.</p></div></article>
    </div>
  </div>
</section>

<!-- PROCESS -->
<section class="divisions on-dark" id="process">
  <div class="wrap">
    <div class="div-head">
      <div>
        <span class="eyebrow rv">Our integrated model</span>
        <h2 class="rv d1">One partner across the <span class="serif">textile value chain.</span></h2>
      </div>
      <p class="lead rv d2">From raw material processing to finished products, every stage is monitored to ensure consistency, product reliability and customer satisfaction.</p>
    </div>
    <div class="points">
      <div class="point rv"><div class="ic">01</div><h3>Yarn dyeing</h3><p>High-quality dyed yarns produced in a range of specifications.</p></div>
      <div class="point rv d1"><div class="ic">02</div><h3>Fabric production</h3><p>Fabrics for garments and for commercial and industrial textiles.</p></div>
      <div class="point rv d2"><div class="ic">03</div><h3>Garment manufacturing</h3><p>Uniforms, workwear, fashion apparel and custom garments.</p></div>
    </div>
  </div>
</section>

<!-- RANGE GALLERY -->
<section id="range">
  <div class="wrap">
    <div class="gal-head">
      <div>
        <span class="eyebrow rv">Product range</span>
        <h2 class="rv d1">Threads, tapes <span class="serif">and trims.</span></h2>
      </div>
      <a href="{{ route('gallery') }}#manufacturing" class="btn btn-navy rv d2">More factory photos <span class="arr">→</span></a>
    </div>
    <div class="mosaic" data-lightbox>
      <figure class="h2 rv"><img src="{{ asset('assets/img/t/mfg-ribbons-2.jpg') }}" alt="Stacked black elastic and woven tapes" width="533" height="800" data-full="{{ asset('assets/img/mfg-ribbons-2.jpg') }}" loading="lazy"><figcaption>Elastic bands &amp; tapes</figcaption></figure>
      <figure class="w2 rv d1"><img src="{{ asset('assets/img/t/mfg-thread.jpg') }}" alt="Dyed thread spools" width="800" height="533" data-full="{{ asset('assets/img/mfg-thread.jpg') }}" loading="lazy"><figcaption>Dyed thread in every colour</figcaption></figure>
      <figure class="h2 rv d2"><img src="{{ asset('assets/img/t/mfg-ribbons-3.jpg') }}" alt="Jacquard woven elastic tapes" width="533" height="800" data-full="{{ asset('assets/img/mfg-ribbons-3.jpg') }}" loading="lazy"><figcaption>Jacquard woven elastic</figcaption></figure>
      <figure class="rv d1"><img src="{{ asset('assets/img/t/mfg-lace.jpg') }}" alt="Lace and trims" width="533" height="800" data-full="{{ asset('assets/img/mfg-lace.jpg') }}" loading="lazy"><figcaption>Lace &amp; trims</figcaption></figure>
      <figure class="rv d2"><img src="{{ asset('assets/img/t/mfg-yarn-cones.jpg') }}" alt="Yarn cones on a creel" width="650" height="800" data-full="{{ asset('assets/img/mfg-yarn-cones.jpg') }}" loading="lazy"><figcaption>Yarn cones</figcaption></figure>
      <figure class="w2 rv"><img src="{{ asset('assets/img/t/mfg-ribbons-1.jpg') }}" alt="Woven tapes in many patterns" width="533" height="800" data-full="{{ asset('assets/img/mfg-ribbons-1.jpg') }}" loading="lazy"><figcaption>Patterned woven tapes</figcaption></figure>
      <figure class="w2 rv d1"><img src="{{ asset('assets/img/t/mfg-spinning.jpg') }}" alt="Spinning machines with rows of white yarn packages" width="533" height="800" data-full="{{ asset('assets/img/mfg-spinning.jpg') }}" loading="lazy"><figcaption>The spinning line</figcaption></figure>
    </div>
  </div>
</section>

<!-- QUALITY + PEOPLE -->
<section class="alt" id="quality">
  <div class="wrap split">
    <div class="prose">
      <span class="eyebrow rv">Commitment to quality</span>
      <h2 class="rv d1">Quality management, <span class="serif">built into the line.</span></h2>
      <p class="rv d2">Quality management is integrated throughout our manufacturing operations. From raw material processing to finished products, every stage is monitored to ensure consistency, product reliability and customer satisfaction.</p>
      <p class="rv d2">By combining modern production facilities with skilled personnel and standardized quality procedures, we deliver textile products that meet the requirements of both local manufacturers and international buyers.</p>
    </div>
    <div class="prose">
      <span class="eyebrow rv">Investing in people and industry</span>
      <h2 class="rv d1">300+ jobs, <span class="serif">and growing.</span></h2>
      <p class="rv d2">With a workforce of more than 300 employees, RAD Best Manufacturing contributes to employment creation while supporting the continued development of Ethiopia's textile industry.</p>
      <p class="rv d2">Alongside expanding production capacity, we continue to invest in workforce development, operational improvement and manufacturing capability, strengthening both our business and the broader industrial ecosystem in which we operate.</p>
    </div>
  </div>
</section>

<!-- TESTIMONIAL -->
<section class="testi tight">
  <div class="wrap">
    <x-testimonial-slider :items="['amaga']" />
  </div>
</section>

<x-cta-band id="enquire" image="assets/img/mfg-thread.jpg" width="1800" height="1200">
  <x-slot:title>Looking for a reliable <span class="serif">textile partner?</span></x-slot:title>
  Tell us about your yarn, fabric or garment requirements and our Lege-Tafo team will get back to you.
  <x-slot:checks><span>Dyed yarns</span><span>Fabrics</span><span>Uniforms, workwear &amp; custom garments</span><span>Local and export orders</span></x-slot:checks>
</x-cta-band>

@endsection

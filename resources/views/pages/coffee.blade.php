@extends('layouts.app')

@section('title', 'RAD Best Coffee — Specialty Ethiopian Coffee Export')
@section('description', 'RAD Best Coffee connects global buyers with specialty Ethiopian coffees from Yirgacheffe, Guji and Sidama, with structured quality assurance and reliable export services.')
@section('body_class', 'page-coffee')

@push('styles')
    @vite('resources/css/pages/coffee.css')
@endpush

@push('scripts')
    @vite('resources/js/pages/coffee.js')
@endpush

@section('content')

<x-page-hero image="assets/img/coffee-cherries-field.jpg" position="center 55%" :crumbs="[['label' => 'Divisions', 'url' => route('home').'#divisions'], ['label' => 'Coffee']]" eyebrow="RAD Best Coffee">
  <x-slot:title>Ethiopia's Finest Origins, <span class="serif">to Global Markets.</span></x-slot:title>
  We connect international buyers with specialty coffees from some of Ethiopia's most respected growing regions, combining origin expertise with rigorous quality management and dependable export services.
  <x-slot:ctas>
      <a href="#origins" class="btn btn-sky">Explore our origins <span class="arr">→</span></a>
      <a href="#enquire" class="btn btn-ghost">Export enquiries</a>
  </x-slot:ctas>
  <x-slot:stats>
      <div><b>3</b><small>Renowned origins</small></div>
      <div><b>2,400 m</b><small>Highest-altitude lots (Guji)</small></div>
      <div><b>4+</b><small>Processing methods</small></div>
      <div><b>Heirloom</b><small>Indigenous Ethiopian varieties</small></div>
  </x-slot:stats>
</x-page-hero>

<!-- INTRO -->
<section id="about-coffee">
  <div class="wrap about-grid">
    <div class="about-media rv">
      <div class="big"><img src="{{ asset('assets/img/t/coffee-women-beds.jpg') }}" alt="Women hand-sorting natural coffee cherries on raised drying beds" width="600" height="800" loading="lazy"></div>
      <div class="small"><img src="{{ asset('assets/img/t/coffee-green-hands.jpg') }}" alt="Washed green coffee beans held in two hands" width="600" height="800" loading="lazy"></div>
      <div class="badge-yr"><b>3</b><small>iconic origins<br>one export partner</small></div>
    </div>
    <div class="prose">
      <span class="eyebrow rv">Bringing Ethiopia's finest coffee origins to global markets</span>
      <h2 class="rv d1">More Than Export. <span class="serif">Traceable, Carefully Selected.</span></h2>
      <p class="lead rv d2">Coffee is one of Ethiopia's most significant agricultural exports and a defining part of the country's heritage. At RAD Best Coffee, we connect international buyers with specialty coffees sourced from some of Ethiopia's most respected coffee-growing regions.</p>
      <p class="rv d2">Our portfolio reflects the diversity of Ethiopian coffee. We source from renowned origins including Yirgacheffe, Guji and Sidama, each offering distinctive flavor profiles shaped by unique altitudes, climates and generations of coffee-growing knowledge. Through close collaboration with trusted suppliers and washing stations, we ensure every lot meets the standards expected by specialty buyers worldwide.</p>
      <ul class="ticks rv d3">
        <li>Specialty-grade lots from Yirgacheffe, Guji and Sidama</li>
        <li>Washed, natural, anaerobic and red honey processing</li>
        <li>Traceable lots with structured quality assurance</li>
        <li>Export documentation and logistics handled end to end</li>
      </ul>
    </div>
  </div>
</section>

<!-- QUOTE BAND -->
<section class="promise">
  <div class="wrap">
    <div class="journey-band rv">
      <img src="{{ asset('assets/img/coffee-smelling.jpg') }}" alt="Coffee farmer checking the aroma of drying coffee on a raised bed" width="1800" height="1296" loading="lazy">
      <div class="tx on-dark">
        <span class="eyebrow">Our promise</span>
        <h3>"We do more than export coffee."</h3>
        <p>We deliver traceable, carefully selected coffees that represent the quality, diversity, and heritage of Ethiopian specialty coffee.</p>
      </div>
    </div>
  </div>
</section>

<!-- ORIGINS -->
<section class="alt" id="origins">
  <div class="wrap">
    <div class="journey-head">
      <div>
        <span class="eyebrow rv">Ethiopia's distinguished coffee origins</span>
        <h2 class="rv d1">Three Origins, <span class="serif">Three Cup Profiles.</span></h2>
      </div>
      <p class="lead rv d2">Each origin carries its own altitude, rainfall, heirloom varieties and community of growers. Choose an origin to see its profile, lots and cupping notes.</p>
    </div>

    <div data-tabs>
      <div class="tabs rv" role="tablist">
        <button class="tab" role="tab" data-t="yirgacheffe" aria-selected="true">Yirgacheffe</button>
        <button class="tab" role="tab" data-t="guji" aria-selected="false">Guji</button>
        <button class="tab" role="tab" data-t="sidama" aria-selected="false">Sidama</button>
        <button class="tab" role="tab" data-t="experimental" aria-selected="false">Specialty &amp; experimental</button>
      </div>

      <!-- YIRGACHEFFE -->
      <div class="panel on" id="yirgacheffe">
        <div class="origin">
          <div class="media"><img src="{{ asset('assets/img/t/coffee-team-sorting.jpg') }}" alt="RAD Best team sorting ripe red coffee cherries in Yirgacheffe" width="800" height="600" loading="lazy"><span class="pill">Gedeo Zone · 1,900–2,200 m</span></div>
          <div>
            <div class="intro">
              <h3 class="big">Yirgacheffe</h3>
              <p>Internationally recognized as one of Ethiopia's premier specialty coffee regions, Yirgacheffe produces coffees celebrated for their floral complexity, bright acidity and refined cup profile. Our selections include coffees from the Gedeb area, including Halo Hartume, Worka Sakaro and Banko Gotiti, sourced from high-altitude farms where favorable growing conditions contribute to exceptional quality.</p>
              <p>These coffees are well suited to specialty roasters seeking elegant floral aromatics, citrus characteristics and clean, balanced finishes.</p>
              <p><b>The Gedeb community.</b> In the verdant highlands of Yirgacheffe sits Gedeb village: small, close-knit, and entirely devoted to its coffee trees. Families rise with the sun, and children learn the same cultivation techniques their grandparents mastered. Coffee is not an industry to them; it is an identity.</p>
            </div>
            <div class="lots">
              <div class="lot">
                <span class="tagline">Floral Ethiopian delight</span>
                <h4>Yirgacheffe Gedeb Halo Hartume</h4>
                <p>Farmers handpick ripe cherries, which then undergo meticulous washing, enhancing their brightness and complexity.</p>
                <dl class="spec"><div><dt>Origin</dt><dd>Yirgacheffe, Ethiopia</dd></div><div><dt>Variety</dt><dd>Heirloom</dd></div><div><dt>Altitude</dt><dd>1,900–2,200 m above sea level</dd></div><div><dt>Rainfall</dt><dd>≈1,500–2,000 mm annually</dd></div><div class="full"><dt>Cupping profile</dt><dd>Bright acidity, floral aroma, notes of bergamot, jasmine and citrus, with a silky body and a lingering finish.</dd></div></dl>
              </div>
              <div class="lot">
                <span class="tagline">A bright and complex coffee</span>
                <h4>Yirgacheffe Gedeb Worka Sakaro</h4>
                <p>Comes from smallholder farmers in Gedeb Woreda of the Gedeo Zone, where coffee farming is a vital part of livelihoods and techniques pass from generation to generation.</p>
                <dl class="spec"><div><dt>Origin</dt><dd>Yirgacheffe, Gedeb Worka Sakaro</dd></div><div><dt>Variety</dt><dd>Ethiopian Heirloom</dd></div><div><dt>Altitude</dt><dd>≈1,900–2,200 m above sea level</dd></div><div><dt>Process</dt><dd>Washed</dd></div><div><dt>Roast level</dt><dd>Light to medium</dd></div><div><dt>Brewing</dt><dd>Pour-over, Chemex, AeroPress or espresso</dd></div><div class="full"><dt>Flavor profile</dt><dd>Complex and vibrant: floral notes of jasmine and bergamot, bright citrus acidity, sweetness reminiscent of honey or ripe stone fruits, a delicate tea-like body and a clean, refreshing finish.</dd></div></dl>
              </div>
              <div class="lot">
                <span class="tagline">A floral Ethiopian delight</span>
                <h4>Yirgacheffe Gedeb Banko Gotiti Washed</h4>
                <p>Farmers of Gedeb Banko Gotiti pour their hearts into cultivating some of the world's most coveted coffee beans. High altitude and abundant rainfall create an optimal environment, with distinctive floral, citrus and tea-like characteristics.</p>
                <dl class="spec"><div><dt>Origin</dt><dd>Yirgacheffe, Banko Gotiti Kebele, Gedeb Woreda, Gedeo Zone</dd></div><div><dt>Variety</dt><dd>Ethiopian Heirloom</dd></div><div><dt>Altitude</dt><dd>≈1,900–2,200 m above sea level</dd></div><div><dt>Process</dt><dd>Washed</dd></div></dl>
              </div>
            </div>
          </div>
        </div>
      </div>

      <!-- GUJI -->
      <div class="panel" id="guji">
        <div class="origin">
          <div class="media"><img src="{{ asset('assets/img/t/coffee-cherries-hands.jpg') }}" alt="Hands holding ripe coffee cherries" width="600" height="800" loading="lazy"><span class="pill">Oromia · 2,100–2,400 m</span></div>
          <div>
            <div class="intro">
              <h3 class="big">Guji: Vibrant &amp; Distinctive</h3>
              <p>Located in Ethiopia's Oromia Region, Guji has earned global recognition for producing expressive coffees with vibrant fruit characteristics and floral complexity. We source from respected growing communities including Layo, Buku Abel, Buku Sayisa and Siko, where high elevations and fertile volcanic soils create ideal conditions for specialty coffee production.</p>
              <p>Guji coffees are distinguished by bright acidity, berry and stone-fruit notes, floral aromatics and a lingering sweetness that appeals to specialty coffee markets.</p>
            </div>
            <div class="lots">
              <div class="lot">
                <span class="tagline">Featured lot</span>
                <h4>Guji Layo Coffee</h4>
                <dl class="spec"><div><dt>Origin</dt><dd>Guji Zone, Layo, Ethiopia</dd></div><div><dt>Variety</dt><dd>Indigenous Ethiopian Heirloom</dd></div><div><dt>Altitude</dt><dd>2,100–2,400 m above sea level</dd></div><div><dt>Process</dt><dd>Washed or natural</dd></div><div><dt>Annual rainfall</dt><dd>≈1,400–1,900 mm</dd></div><div><dt>Roast recommendation</dt><dd>Light to medium</dd></div><div class="full"><dt>Cup profile</dt><dd>Bright, wine-like acidity with notes of blueberry, stone fruits and florals, a full body and a long, sweet finish.</dd></div></dl>
              </div>
            </div>
          </div>
        </div>
      </div>

      <!-- SIDAMA -->
      <div class="panel" id="sidama">
        <div class="origin">
          <div class="media"><img src="{{ asset('assets/img/t/coffee-beds-wide.jpg') }}" alt="Coffee drying on raised beds in Sidama" width="600" height="800" loading="lazy"><span class="pill">Sidama · 1,700–2,200 m</span></div>
          <div>
            <div class="intro">
              <h3 class="big">Sidama: A Legacy of Balanced Excellence</h3>
              <p>Sidama is one of Ethiopia's most established coffee-producing regions, known for consistently delivering clean, balanced coffees with exceptional sweetness and clarity. Our selections include lots from Bombe, Shantawene, Arbegona and Bura, each reflecting the region's renowned quality while offering unique characteristics of its own.</p>
              <p>Sidama coffees typically present bright citrus acidity, delicate floral notes, balanced sweetness and a clean finish, making them suitable for a wide range of specialty roasting profiles.</p>
            </div>
            <div class="lots">
              <div class="lot">
                <span class="tagline">Featured origin</span>
                <h4>Sidama Coffee</h4>
                <dl class="spec"><div><dt>Origin</dt><dd>Sidama Region, Ethiopia</dd></div><div><dt>Variety</dt><dd>Indigenous Ethiopian Heirloom</dd></div><div><dt>Altitude</dt><dd>1,700–2,200 m above sea level</dd></div><div><dt>Process</dt><dd>Washed or natural</dd></div><div><dt>Annual rainfall</dt><dd>≈1,300–1,800 mm</dd></div><div><dt>Roast recommendation</dt><dd>Light to medium</dd></div><div class="full"><dt>Cup profile</dt><dd>Bright citrus acidity with notes of berries and florals, a medium to full body and a clean, sweet finish.</dd></div></dl>
              </div>
            </div>
          </div>
        </div>
      </div>

      <!-- EXPERIMENTAL -->
      <div class="panel" id="experimental">
        <div class="origin">
          <div class="media"><img src="{{ asset('assets/img/t/coffee-washing-channel.jpg') }}" alt="Washed coffee moving through a washing channel at the station" width="416" height="800" loading="lazy"><span class="pill">Innovation in Ethiopian coffee</span></div>
          <div>
            <div class="intro">
              <h3 class="big">Specialty &amp; Experimental Collection</h3>
              <p>In addition to traditional washed and natural coffees, RAD Best offers specialty and experimental processing methods that respond to the evolving preferences of the global specialty coffee industry.</p>
              <p>Our portfolio includes coffees processed using Anaerobic and Red Honey methods, as well as limited experimental lots featuring RUE, Dark Room and Mosto processing techniques. These coffees give specialty roasters distinctive flavor profiles while showcasing the innovation emerging within Ethiopia's coffee sector.</p>
            </div>
            <div class="chips"><span>Washed</span><span>Natural</span><span>Anaerobic</span><span>Red Honey</span><span>RUE</span><span>Dark Room</span><span>Mosto</span></div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- QUALITY COMMITMENT -->
<section class="divisions on-dark" id="quality">
  <div class="wrap">
    <div class="div-head">
      <div>
        <span class="eyebrow rv">The RAD Best quality commitment</span>
        <h2 class="rv d1">Quality at <span class="serif">Every Stage.</span></h2>
      </div>
      <p class="lead rv d2">Quality is central to every stage of our export process. From origin selection through final shipment, every coffee lot undergoes a structured quality assurance process designed to ensure consistency, traceability and compliance with international export requirements.</p>
    </div>
    <div class="points">
      <div class="point rv"><div class="ic">01</div><h3>Careful Sourcing</h3><p>From trusted farmers, cooperatives and washing stations.</p></div>
      <div class="point rv d1"><div class="ic">02</div><h3>Grading &amp; Moisture</h3><p>Physical grading and moisture content inspection on every lot.</p></div>
      <div class="point rv d2"><div class="ic">03</div><h3>Defect Analysis</h3><p>Defect analysis and quality screening before a lot is approved.</p></div>
      <div class="point rv"><div class="ic">04</div><h3>Cupping &amp; Sensory Evaluation</h3><p>Professional cupping and sensory evaluation of each coffee.</p></div>
      <div class="point rv d1"><div class="ic">05</div><h3>Regulatory Compliance</h3><p>Compliance with Ethiopian export regulations and international quality standards.</p></div>
      <div class="point rv d2"><div class="ic">06</div><h3>Export Logistics</h3><p>Efficient export documentation and logistics coordination.</p></div>
    </div>
  </div>
</section>

<!-- CHERRY TO CUP -->
<section id="journey">
  <div class="wrap">
    <div class="journey-head">
      <div>
        <span class="eyebrow rv">From cherry to cup</span>
        <h2 class="rv d1">Every Bean, <span class="serif">Touched by Hand.</span></h2>
      </div>
      <p class="lead rv d2">At altitude, coffee trees flourish in a cool climate and produce prized beans. Here is how a cherry becomes an export-grade green bean.</p>
    </div>
    <div class="steps">
      <div class="step rv"><div class="ph"><img src="{{ asset('assets/img/t/coffee-cherries-hands.jpg') }}" alt="Freshly picked coffee cherries" width="600" height="800" loading="lazy"></div><div class="tx"><h3>Selective Harvest</h3><p>Farmers handpick only ripe cherries, so each one captures the land's essence.</p></div></div>
      <div class="step rv d1"><div class="ph"><img src="{{ asset('assets/img/t/coffee-women-beds.jpg') }}" alt="Women sorting cherries on raised beds" width="600" height="800" loading="lazy"></div><div class="tx"><h3>Sorting &amp; Grading</h3><p>Cherries are sorted by hand for ripeness and density before drying.</p></div></div>
      <div class="step rv d2"><div class="ph"><img src="{{ asset('assets/img/t/coffee-washed-beans.jpg') }}" alt="Washed parchment coffee on a drying bed" width="600" height="800" loading="lazy"></div><div class="tx"><h3>Washing &amp; Drying</h3><p>Meticulous washing, then slow drying on raised beds, turned by hand.</p></div></div>
      <div class="step rv d3"><div class="ph"><img src="{{ asset('assets/img/t/coffee-green-hands.jpg') }}" alt="Green coffee beans in hands" width="600" height="800" loading="lazy"></div><div class="tx"><h3>Cupping &amp; Export</h3><p>Graded, cupped and packed for export to specialty buyers worldwide.</p></div></div>
    </div>
  </div>
</section>

<!-- PHOTO MOSAIC -->
<section class="alt tight">
  <div class="wrap">
    <div class="gal-head">
      <div><span class="eyebrow rv">At origin</span><h2 class="rv d1">Faces and Places <span class="serif">Behind the Lots.</span></h2></div>
      <a href="{{ route('gallery') }}#coffee" class="btn btn-navy rv d2">More coffee photos <span class="arr">→</span></a>
    </div>
    <div class="mosaic" data-lightbox>
      <figure class="w2 h2 rv"><img src="{{ asset('assets/img/t/coffee-team-workers.jpg') }}" alt="Team and workers on the drying beds" width="800" height="450" data-full="{{ asset('assets/img/coffee-team-workers.jpg') }}" loading="lazy"><figcaption>Team and workers on the beds</figcaption></figure>
      <figure class="rv d1"><img src="{{ asset('assets/img/t/coffee-cherries-close.jpg') }}" alt="Selecting cherries" width="600" height="800" data-full="{{ asset('assets/img/coffee-cherries-close.jpg') }}" loading="lazy"><figcaption>Selecting ripe cherries</figcaption></figure>
      <figure class="rv d2"><img src="{{ asset('assets/img/t/coffee-green-hands.jpg') }}" alt="Green beans" width="600" height="800" data-full="{{ asset('assets/img/coffee-green-hands.jpg') }}" loading="lazy"><figcaption>Washed green beans</figcaption></figure>
      <figure class="w2 rv d1"><img src="{{ asset('assets/img/t/coffee-tasting.jpg') }}" alt="Quality checks at origin" width="800" height="351" data-full="{{ asset('assets/img/coffee-tasting.jpg') }}" loading="lazy"><figcaption>Aroma checks at the beds</figcaption></figure>
    </div>
  </div>
</section>

<x-cta-band id="enquire" image="assets/img/coffee-tasting.jpg" width="1800" height="789" phone="+251911216682" phone-label="+251 91 121 6682">
  <x-slot:title>Ready to Elevate Your Coffee Offerings and Build a Strong <span class="serif">Export Partnership?</span></x-slot:title>
  RAD Best Coffee is your direct gateway to Ethiopian specialty coffee, sourced with integrity and exported with precision.
  <x-slot:checks><span>Export enquiries: <a class="mail" href="mailto:Export@radbesttrading.com">Export@radbesttrading.com</a></span><span><a class="mail" href="mailto:info@radbesttrading.com">info@radbesttrading.com</a></span><span>+251 911 216 682 · +251 911 212 609 · +251 903 444 440 · +251 939 611 111</span></x-slot:checks>
</x-cta-band>

@endsection

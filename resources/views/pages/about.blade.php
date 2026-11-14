@extends('layouts.app')

@section('title', 'About Us — RAD Best Business Group')
@section('description', 'About RAD Best Business Group: founded in 2021 in Addis Ababa, a diversified Ethiopian group in specialty coffee export, textile manufacturing and workspace solutions.')
@section('body_class', 'page-about')

@push('styles')
    @vite('resources/css/pages/about.css')
@endpush

@section('content')

<x-page-hero image="assets/img/coffee-team-sorting.jpg" position="center 35%" :crumbs="[['label' => 'About us']]" eyebrow="About us">
  <x-slot:title>A group built on Ethiopia's <span class="serif">greatest strengths.</span></x-slot:title>
  Founded in 2021, RAD Best Business Group is a diversified Ethiopian business group operating across specialty coffee export, textile manufacturing, and workspace and interior solutions.
  <x-slot:stats>
      <div><b>2021</b><small>Founded in Addis Ababa</small></div>
      <div><b>3</b><small>Core business divisions</small></div>
      <div><b>300+</b><small>Employees</small></div>
      <div><b>Global</b><small>Export &amp; trade reach</small></div>
  </x-slot:stats>
</x-page-hero>

<!-- STORY -->
<section id="story">
  <div class="wrap about-grid">
    <div class="about-media rv">
      <div class="big"><img src="{{ asset('assets/img/t/coffee-team-bed.jpg') }}" alt="RAD Best team member turning coffee cherries on a drying bed" width="600" height="800" loading="lazy"></div>
      <div class="small"><img src="{{ asset('assets/img/t/trade-lounge.jpg') }}" alt="Leather lounge seating from RAD Best Trading" width="800" height="450" loading="lazy"></div>
      <div class="small s2"><img src="{{ asset('assets/img/t/mfg-thread.jpg') }}" alt="Spools of dyed thread from RAD Best Manufacturing" width="800" height="533" loading="lazy"></div>
      <div class="badge-yr"><b>2021</b><small>our founding year<br>in Addis Ababa</small></div>
    </div>
    <div class="prose">
      <span class="eyebrow rv">Our story</span>
      <h2 class="rv d1">Ethiopia's strengths, <span class="serif">on the world stage.</span></h2>
      <p class="lead rv d2">Ethiopia is a country of extraordinary resources, ancient coffee forests, a growing industrial base, and a generation of entrepreneurs determined to put it on the world map.</p>
      <p class="rv d2">Guided by a commitment to quality, integrity and long-term value creation, RAD Best Business Group has built a reputation for delivering products and services that meet the evolving needs of domestic and international markets.</p>
      <p class="rv d3">By combining Ethiopia's agricultural strengths with growing industrial capabilities, RAD Best contributes to the country's economic development while creating reliable partnerships with customers, suppliers and stakeholders. Through its diversified business model, the Group continues to expand its presence across sectors that play an important role in Ethiopia's growth.</p>
    </div>
  </div>
</section>

<!-- WHO WE ARE -->
<section class="alt" id="who">
  <div class="wrap split">
    <div class="prose">
      <span class="eyebrow rv">Who we are</span>
      <h2 class="rv d1">Three divisions, <span class="serif">one operating standard.</span></h2>
      <p class="rv d2">RAD Best Business Group is headquartered at Garad City Mall in Addis Ababa and operates through three core business divisions (RAD Best Coffee, RAD Best Trading and RAD Best Manufacturing), supported by dedicated export operations.</p>
      <p class="rv d2">Although each business serves a distinct market, they are united by shared operational standards, quality management practices, and a commitment to responsible business conduct. This integrated approach lets the Group stay consistent while responding to the needs of clients in different industries.</p>
      <p class="rv d3">Over the years, RAD Best has built relationships with international coffee buyers, construction companies, manufacturers, and commercial organizations throughout Ethiopia. The Group has also received recognition from the Ethiopian Ministry of Revenue for its consistent tax compliance.</p>
    </div>
    <div class="facts">
      <div class="fact rv"><b>Headquarters</b><span>Garad City Mall, 5th Floor, Wello Sefer, Addis Ababa.</span></div>
      <div class="fact rv d1"><b>RAD Best Coffee</b><span>Connecting global buyers with premium Ethiopian specialty coffees.</span></div>
      <div class="fact rv d2"><b>RAD Best Trading</b><span>Modern workspace, architectural and interior solutions.</span></div>
      <div class="fact rv d3"><b>RAD Best Manufacturing</b><span>High-quality dyed yarns, textile products and garments.</span></div>
      <div class="about-photo rv d3"><img src="{{ asset('assets/img/t/coffee-team-workers.jpg') }}" alt="RAD Best team and workers at the coffee drying beds" width="800" height="450" loading="lazy"></div>
    </div>
  </div>
</section>

<!-- HOW THE GROUP FITS TOGETHER -->
<section id="together">
  <div class="wrap">
    <div class="journey-head">
      <div>
        <span class="eyebrow rv">How the group fits together</span>
        <h2 class="rv d1">Complementary businesses, <span class="serif">shared expertise.</span></h2>
      </div>
      <p class="lead rv d2">Our coffee export business connects Ethiopian producers with international markets. Our manufacturing division supports Ethiopia's growing textile sector, and our trading division supplies modern workspace solutions across the country, all under the same principles of professionalism, consistency and customer focus.</p>
    </div>
    <div class="steps three">
      <a class="step rv" href="{{ route('coffee') }}">
        <div class="ph"><img src="{{ asset('assets/img/t/coffee-cherries-close.jpg') }}" alt="Hands selecting ripe coffee cherries" width="600" height="800" loading="lazy"></div>
        <div class="tx"><h3>Coffee export</h3><p>Bringing Ethiopia's finest coffee to the world.</p></div>
      </a>
      <a class="step rv d1" href="https://radbesttrading.com/" target="_blank" rel="noopener">
        <div class="ph"><img src="{{ asset('assets/img/t/trade-armchairs.jpg') }}" alt="Two leather armchairs in a modern office lounge" width="800" height="450" loading="lazy"></div>
        <div class="tx"><h3>Trading</h3><p>Where design meets comfort.</p></div>
      </a>
      <a class="step rv d2" href="{{ route('manufacturing') }}">
        <div class="ph"><img src="{{ asset('assets/img/t/mfg-thread.jpg') }}" alt="Spools of dyed thread in many colours" width="800" height="533" loading="lazy"></div>
        <div class="tx"><h3>Manufacturing</h3><p>Ethiopia's texture, future built today.</p></div>
      </a>
    </div>
  </div>
</section>

<!-- VISION / MISSION -->
<section class="divisions on-dark" id="vision">
  <div class="wrap">
    <div class="div-head">
      <div>
        <span class="eyebrow rv">Unlocking Ethiopia's potential</span>
        <h2 class="rv d1">Where we're headed, <span class="serif">and why.</span></h2>
      </div>
      <p class="lead rv d2">Since its establishment, RAD Best has pursued a long-term vision of contributing to Ethiopia's industrial and commercial development through businesses that create measurable value, supported by long-term investment in people, infrastructure and operational systems.</p>
    </div>
    <div class="vm">
      <div class="vm-card rv"><span class="serif">Vision</span><p>To become East Africa's most trusted and diversified business group, recognized for operational excellence, quality, and sustainable growth.</p></div>
      <div class="vm-card rv d1"><span class="serif">Mission</span><p>To provide products and services that exceed customer expectations while actively contributing to Ethiopia's industrialization, long-term economic growth, and global competitiveness.</p></div>
    </div>
  </div>
</section>

<!-- WHY CHOOSE -->
<section id="why">
  <div class="wrap">
    <div class="journey-head">
      <div>
        <span class="eyebrow rv">Why choose RAD Best?</span>
        <h2 class="rv d1">Diversified capabilities, <span class="serif">consistent standards.</span></h2>
      </div>
      <p class="lead rv d2">Organizations choose RAD Best because we combine diversified capabilities with consistent operational standards, allowing us to deliver dependable products and services across multiple industries.</p>
    </div>
    <div class="points">
      <div class="point rv"><div class="ic">01</div><h3>Integrated business model</h3><p>Operations across coffee exports, manufacturing and trading give clients a partner that understands complex supply chains, quality management and international business requirements.</p></div>
      <div class="point rv d1"><div class="ic">02</div><h3>Reliable partnerships</h3><p>Successful business relationships are built on transparency, responsiveness and accountability, working closely with customers and partners for long-term collaboration.</p></div>
      <div class="point rv d2"><div class="ic">03</div><h3>Commitment to quality</h3><p>From sourcing and production to logistics and customer service, our processes are designed to ensure consistency, traceability and compliance with industry standards.</p></div>
      <div class="point rv"><div class="ic">04</div><h3>Experienced team</h3><p>A multidisciplinary team with expertise in manufacturing, international trade, coffee exports, procurement and project delivery.</p></div>
      <div class="point rv d1"><div class="ic">05</div><h3>Responsible business practices</h3><p>Regulatory compliance, ethical conduct and responsible corporate governance have built the trust of customers, suppliers and government institutions alike.</p></div>
      <div class="point cta rv d2"><div><h3>Let's build something together.</h3></div><a href="{{ route('contact') }}" class="btn btn-sky">Contact us <span class="arr">→</span></a></div>
    </div>
  </div>
</section>

<!-- TEAM -->
<section class="alt" id="team">
  <div class="wrap">
    <div class="journey-head">
      <div>
        <span class="eyebrow rv">Team members</span>
        <h2 class="rv d1">Executive <span class="serif">team.</span></h2>
      </div>
      <p class="lead rv d2">Our multidisciplinary leadership brings together expertise in manufacturing, international trade, finance, people and project delivery.</p>
    </div>
    <div class="team-grid">
      <div class="point rv"><h3>Dereje Getachew</h3><p>Human Resources</p></div>
      <div class="point rv d1"><h3>Samuel Abebe</h3><p>Deputy Manager</p></div>
      <div class="point rv d2"><h3>Kitachew Eskeziya</h3><p>General Manager (Factory)</p></div>
      <div class="point rv d3"><h3>Fasika Baye</h3><p>CFO (Chief Financial Officer)</p></div>
    </div>
  </div>
</section>

<!-- RESPONSIBILITY -->
<section id="responsibility">
  <div class="wrap">
    <div class="split">
      <div class="prose">
        <span class="eyebrow rv">Corporate responsibility</span>
        <h2 class="rv d1">Responsible business, <span class="serif">in practice.</span></h2>
        <p class="rv d2">Responsible business practices are integral to the way we operate. We maintain high standards of corporate governance, regulatory compliance and financial accountability across all divisions, and have received consecutive recognition from the Ethiopian Ministry of Revenue for timely tax compliance.</p>
        <p class="rv d2">Our coffee export operations comply with the requirements of the Ethiopian Coffee and Tea Authority and the Ministry of Trade and Regional Integration, while our trading division continues to build long-term relationships with leading organizations, including EEIG Construction.</p>
      </div>
      <div class="csr-list">
        <div class="point rv"><div class="ic"><svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M12 2l3 6.5 7 .9-5.1 4.8 1.3 6.9L12 17.8 5.8 21l1.3-6.9L2 9.4l7-.9z"/></svg></div><h3>Learning spaces for children</h3><p>Through our recent CSR initiatives, we donated classroom seating to a kindergarten in Sheger City to improve everyday learning conditions.</p></div>
        <div class="point rv d1"><div class="ic"><svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M8 12l3 3 5-6"/><circle cx="12" cy="12" r="10"/></svg></div><h3>Supporting a school in Amhara</h3><p>Expanding our reach to the Amhara Region, we supported the construction and establishment of a school, including teaching and learning materials.</p></div>
      </div>
    </div>
  </div>
</section>

<!-- COMMUNITIES + CLIENTS -->
<div class="numbers">
  <div class="wrap">
    <div class="split">
      <div>
        <span class="eyebrow rv">The communities behind the business</span>
        <h2 class="rv d1">Value beyond <span class="serif">commercial success.</span></h2>
      </div>
      <div class="numbers-copy rv d2">
        <p>Our coffee export operations support Ethiopia's internationally recognized coffee sector by sourcing from established coffee-growing regions and contributing to export opportunities that strengthen rural livelihoods.</p>
        <p>Through RAD Best Manufacturing, we provide employment for more than 300 people while investing in skills development and manufacturing capability. Across every division, we build long-term relationships that contribute to sustainable growth and Ethiopia's economic development.</p>
      </div>
    </div>
  </div>
</div>

<section class="tight testi" id="clients">
  <div class="wrap">
    <div class="center">
      <span class="eyebrow rv">Our clients</span>
      <h2 class="rv d1">Trusted by leading <span class="serif">organizations.</span></h2>
    </div>
    <x-client-marquee />
  </div>
</section>

<x-cta-band id="contact" image="assets/img/coffee-aerial.jpg" width="1800" height="1012">
  <x-slot:title>Choose RAD Best Group as your trusted <span class="serif">partner.</span></x-slot:title>
  Innovation in every sector. Excellence in every result. Tell us what you need and we will connect you with the right division.
</x-cta-band>

@endsection

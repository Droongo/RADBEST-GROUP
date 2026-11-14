@extends('layouts.app')

@section('title', 'Contact Us — RAD Best Business Group')
@section('description', 'Contact RAD Best Business Group at Garad City Mall, Wello Sefer, Addis Ababa. Send us a message, call us, or read our frequently asked questions.')
@section('body_class', 'page-contact')

@push('styles')
    @vite('resources/css/pages/contact.css')
@endpush

@push('scripts')
    @vite('resources/js/pages/contact.js')
@endpush

@section('content')

<x-page-hero image="assets/img/coffee-tasting.jpg" position="center 40%" :crumbs="[['label' => 'Contact us']]" eyebrow="Contact us">
  <x-slot:title>Let's start a <span class="serif">conversation.</span></x-slot:title>
  Whether you're a roaster looking for exceptional Ethiopian coffee, a brand seeking a reliable manufacturer, or a business furnishing a new space, we'd love to hear from you.
</x-page-hero>

<section id="get-in-touch">
  <div class="wrap">
    <div class="contact-grid">
      <div>
        <span class="eyebrow rv">Get in touch</span>
        <h2 class="rv d1">Reach the <span class="serif">right team.</span></h2>
        <div class="info-list">
          <div class="info rv"><div class="ic"><svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M12 22s7-6.2 7-12a7 7 0 0 0-14 0c0 5.8 7 12 7 12z"/><circle cx="12" cy="10" r="2.5"/></svg></div><div><h3>Office address</h3><p>Garad Mall, 5th Floor, Wello Sefer,<br>Addis Ababa, Ethiopia</p></div></div>
          <div class="info rv d1"><div class="ic"><svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M22 16.9v3a2 2 0 0 1-2.2 2 19.8 19.8 0 0 1-8.6-3.1 19.5 19.5 0 0 1-6-6A19.8 19.8 0 0 1 2.1 4.2 2 2 0 0 1 4.1 2h3a2 2 0 0 1 2 1.7c.1 1 .4 1.9.7 2.8a2 2 0 0 1-.5 2.1L8.1 9.9a16 16 0 0 0 6 6l1.3-1.3a2 2 0 0 1 2.1-.4c.9.3 1.8.6 2.8.7a2 2 0 0 1 1.7 2z"/></svg></div><div><h3>Call us directly</h3><a href="tel:+251903444440">+251 90 344 4440</a><a href="tel:+251911212609">+251 91 121 2609</a></div></div>
          <div class="info rv d2"><div class="ic"><svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><rect x="2" y="4" width="20" height="16" rx="2"/><path d="M22 7l-10 6L2 7"/></svg></div><div><h3>Email</h3><a href="mailto:info@radbesttrading.com">info@radbesttrading.com</a></div></div>
          <div class="info rv d3"><div class="ic"><svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="10"/><path d="M12 6v6l4 2"/></svg></div><div><h3>Working hours</h3><p>Mon – Sat<br>09:00am – 18:00pm</p></div></div>
          <div class="info rv"><div class="ic"><svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M4 8h13v6a5 5 0 0 1-5 5H9a5 5 0 0 1-5-5V8zM17 10h2a2 2 0 0 1 0 4h-2M7 2v3M11 2v3M15 2v3"/></svg></div><div><h3>Coffee export division</h3><a href="mailto:Export@radbesttrading.com">Export@radbesttrading.com</a><a href="tel:+251911216682">+251 911 216 682</a><a href="tel:+251939611111">+251 939 611 111</a></div></div>
          <div class="info rv d1"><div class="ic"><svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M3 9l1.5-5h15L21 9M3 9v11h18V9M3 9h18M9 20v-6h6v6"/></svg></div><div><h3>Trading showroom</h3><p>Wello Sefer, Garad City Mall,<br>1st and 3rd Floor, Addis Ababa</p></div></div>
        </div>
      </div>
      <div class="form rv d1">
        <h3>Send us a message</h3>
        <p>Tell us what you need and we'll get back to you as soon as we can.</p>
        {{-- POST /contact — validated by App\Http\Requests\ContactRequest, sent by resources/js/pages/contact.js --}}
        <form id="contact-form" action="{{ route('contact.store') }}" method="POST">
          @csrf
          <div class="field"><input placeholder="Full name *" name="name" type="text" required autocomplete="name" value="{{ old('name') }}"></div>
          <div class="field"><input placeholder="Phone number *" name="phone" type="tel" required autocomplete="tel" value="{{ old('phone') }}"></div>
          <div class="field"><input placeholder="Email address *" name="email" type="email" required autocomplete="email" value="{{ old('email') }}"></div>
          <div class="field"><input placeholder="Company name" name="company" type="text" autocomplete="organization" value="{{ old('company') }}"></div>
          <div class="field"><textarea placeholder="Please write your message here" name="message">{{ old('message') }}</textarea></div>
          <button class="btn btn-navy" type="submit">Send your message <span class="arr">→</span></button>
          {{-- Server-rendered result for browsers without JavaScript --}}
          <p @class(['form-msg', 'show' => session('contact_status') || $errors->any()]) role="status">@if (session('contact_status')){{ session('contact_status') }}@elseif ($errors->any()){{ implode(' ', $errors->all()) }}@endif</p>
        </form>
      </div>
    </div>
    <div class="map rv">
      <iframe src="https://www.google.com/maps/embed?pb=!1m13!1m8!1m3!1d544.076952753874!2d38.774908923454895!3d8.993214295586375!3m2!1i1024!2i768!4f13.1!3m2!1m1!2zOMKwNTknMzUuOSJOIDM4wrA0NicyOC45IkU!5e1!3m2!1sen!2set!4v1786175745393!5m2!1sen!2set" title="Map to Garad Mall, Wello Sefer, Addis Ababa" allowfullscreen loading="lazy" referrerpolicy="strict-origin-when-cross-origin"></iframe>
    </div>
  </div>
</section>

<section class="alt" id="faq">
  <div class="wrap faq-grid">
    <div class="faq-side">
      <span class="eyebrow rv">FAQ</span>
      <h2 class="rv d1">Questions, <span class="serif">answered.</span></h2>
      <p class="lead rv d2">Everything you need to know about our businesses and capabilities. Can't find your answer? Call us on <a href="tel:+251903444440">+251 90 344 4440</a>.</p>
      <div class="faq-pics rv d3"><img src="{{ asset('assets/img/t/coffee-green-hands.jpg') }}" alt="Washed green coffee beans" width="600" height="800" loading="lazy"><img src="{{ asset('assets/img/t/trade-lounge.jpg') }}" alt="Leather lounge seating" width="800" height="450" loading="lazy"><img src="{{ asset('assets/img/t/mfg-ribbons-3.jpg') }}" alt="Woven elastic tapes" width="533" height="800" loading="lazy"></div>
    </div>
    <div class="rv d1">
      <details open><summary>Where do you source your coffee? <span class="pm">+</span></summary><p>We source specialty coffee from Ethiopia's renowned growing regions, including Yirgacheffe, Guji and Sidama, working with trusted farmers, cooperatives and washing stations to select beans with exceptional quality, character and consistency.</p></details>
      <details><summary>Which coffee processing methods do you offer? <span class="pm">+</span></summary><p>We offer traditional washed and natural coffees, as well as specialty and experimental lots processed using Anaerobic and Red Honey methods, and limited experimental lots such as RUE, Dark Room and Mosto.</p></details>
      <details><summary>How do you ensure coffee quality? <span class="pm">+</span></summary><p>Every lot goes through a structured quality assurance process: physical grading and moisture inspection, defect analysis and screening, professional cupping and sensory evaluation, and compliance with Ethiopian export regulations and international quality standards.</p></details>
      <details><summary>Do you export to international markets? <span class="pm">+</span></summary><p>Yes. Our coffee is selected, processed and packaged to meet international standards, and we handle export documentation and logistics coordination for importers, roasters and specialty buyers worldwide. Export enquiries: Export@radbesttrading.com.</p></details>
      <details><summary>What does RAD Best Trading supply? <span class="pm">+</span></summary><p>We supply workspace and interior solutions: luxury office furniture, architectural glass and accessories, FSL LED lighting (as an authorised FSL agent), window blind systems, exterior façade cladding, office carpets and Wacker silicone sealants.</p></details>
      <details><summary>Do you provide installation and after-sales support? <span class="pm">+</span></summary><p>Yes. Our service extends beyond product supply to consultation and workspace planning, product selection, procurement, delivery, professional installation and after-sales support.</p></details>
      <details><summary>What products does RAD Best Manufacturing produce? <span class="pm">+</span></summary><p>Our 30,000 m² facility in Lege-Tafo, Addis Ababa, produces dyed yarns, fabrics and finished garments, including corporate uniforms, workwear, fashion apparel and custom garments, for domestic and export markets.</p></details>
      <details><summary>Where is your showroom and office? <span class="pm">+</span></summary><p>Our headquarters is at Garad City Mall, 5th Floor, Wello Sefer, Addis Ababa. The RAD Best Trading showroom is in the same building, on the 1st and 3rd floors.</p></details>
      <details><summary>What are your working hours? <span class="pm">+</span></summary><p>We are open Monday to Saturday, 09:00 to 18:00.</p></details>
      <details><summary>How can we become a partner? <span class="pm">+</span></summary><p>Fill in the form on this page, email info@radbesttrading.com or call +251 90 344 4440. We will talk through your needs and connect you with the right division for your project.</p></details>
    </div>
  </div>
</section>

@endsection

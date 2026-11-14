{{--
    Sticky main navigation (styles: resources/css/components/navigation.css,
    behaviour: resources/js/components/navigation.js).
    Logos: public/assets/img/logo/ (local copies of the files the original site
    loaded from radbestgroup.com). The inline onerror swaps in the text wordmark
    if an image fails, and stays inline so it works before the deferred JS loads.
--}}
@php
    $inDivision = request()->routeIs('coffee', 'manufacturing', 'trading');
@endphp
<nav class="main" id="nav">
  <div class="wrap nav-in">
    <a href="{{ route('home') }}" class="logo" id="logo">
      <img class="ld" src="{{ asset('assets/img/logo/radbest-logo.png') }}" alt="RAD Best Business Group" onerror="this.parentNode.classList.add('noimg');this.remove()">
      <img class="lw" src="{{ asset('assets/img/logo/radbest-logo-white.png') }}" alt="RAD Best Business Group" onerror="this.parentNode.classList.add('noimg');this.remove()">
      <span class="txt">RAD Best Business Group</span>
    </a>
    <div class="links">
      <a href="{{ route('about') }}" @class(['active' => request()->routeIs('about')])>About</a>
      <div class="has-dd">
        <a href="{{ route('home') }}#divisions" @class(['active' => $inDivision]) aria-haspopup="true">Divisions <svg width="10" height="10" viewBox="0 0 10 10" fill="none" stroke="currentColor" stroke-width="1.8"><path d="M1.5 3.5L5 7l3.5-3.5"/></svg></a>
        <div class="dd"><div class="dd-in">
          <a href="{{ route('coffee') }}"><b>RAD Best Coffee</b><small>Specialty Ethiopian coffee export</small></a>
          <a href="https://radbesttrading.com/" target="_blank" rel="noopener"><b>RAD Best Trading</b><small>Workspace &amp; interior solutions</small></a>
          <a href="{{ route('manufacturing') }}"><b>RAD Best Manufacturing</b><small>Dyed yarns, fabrics &amp; garments</small></a>
        </div></div>
      </div>
      <a href="{{ route('gallery') }}" @class(['active' => request()->routeIs('gallery')])>Gallery</a>
      <a href="{{ route('contact') }}" @class(['mob-only', 'active' => request()->routeIs('contact')])>Contact Us</a>
    </div>
    <a href="{{ route('contact') }}" class="btn btn-navy nav-cta">Contact Us <span class="arr">→</span></a>
    <button class="burger" aria-label="Menu"><span></span><span></span><span></span></button>
  </div>
</nav>

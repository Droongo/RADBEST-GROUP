{{-- Site footer (styles: resources/css/components/footer.css) --}}
<footer class="site-footer">
  <div class="wrap">
    <div class="f-grid">
      <div>
        <div class="f-logo"><img src="{{ asset('assets/img/logo/radbest-logo-white.png') }}" alt="RAD Best Business Group" onerror="this.parentNode.classList.add('noimg');this.remove()"><div class="txt">RAD Best<span class="tm">™</span> Business Group</div></div>
        <p>With an unwavering commitment to quality and reliability, we strive to set new standards of excellence across every industry we serve.</p>
        {{-- POST /newsletter — resources/js/components/newsletter.js submits it without a reload --}}
        <form class="news" action="{{ route('newsletter.store') }}" method="POST">@csrf<input type="email" name="email" placeholder="Your email" aria-label="Email" required autocomplete="email"><button>{{ session('newsletter_status', 'Subscribe') }}</button></form>
        <div class="socials" aria-label="Social media">
          <a href="https://www.facebook.com/share/1A5xgWtS7w/" target="_blank" rel="noopener" aria-label="Facebook"><svg width="18" height="18" viewBox="0 0 24 24" fill="currentColor"><path d="M13.5 22v-8h2.7l.4-3.2h-3.1V8.8c0-.9.3-1.5 1.6-1.5h1.7V4.4c-.3 0-1.3-.1-2.4-.1-2.4 0-4 1.5-4 4.1v2.4H7.7V14h2.7v8z"/></svg></a>
          <a href="https://www.instagram.com/radbesttradingplc/" target="_blank" rel="noopener" aria-label="Instagram"><svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><rect x="3" y="3" width="18" height="18" rx="5"/><circle cx="12" cy="12" r="4"/><circle cx="17.5" cy="6.5" r="1" fill="currentColor" stroke="none"/></svg></a>
          <a href="https://t.me/radbesttradingplc" target="_blank" rel="noopener" aria-label="Telegram"><svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linejoin="round"><path d="M22 2 11 13M22 2l-7 20-4-9-9-4z"/></svg></a>
        </div>
      </div>
      <div><h4>Divisions</h4><ul><li><a href="{{ route('coffee') }}">RAD Best Coffee</a></li><li><a href="https://radbesttrading.com/" target="_blank" rel="noopener">RAD Best Trading</a></li><li><a href="{{ route('manufacturing') }}">RAD Best Manufacturing</a></li></ul></div>
      <div><h4>Pages</h4><ul><li><a href="{{ route('home') }}">Home</a></li><li><a href="{{ route('about') }}">About Us</a></li><li><a href="{{ route('gallery') }}">Gallery</a></li><li><a href="{{ route('contact') }}">Contact Us</a></li><li><a href="{{ route('contact') }}#faq">FAQ</a></li></ul></div>
      <div><h4>Visit &amp; Call</h4><ul><li>Garad Mall, 5th Floor, Wello Sefer,<br>Addis Ababa, Ethiopia</li><li><a href="tel:+251903444440">Tel. +251 90 344 4440</a></li><li><a href="tel:+251911212609">Tel. +251 91 121 2609</a></li><li><a href="mailto:info@radbesttrading.com">info@radbesttrading.com</a></li></ul></div>
    </div>
    <div class="f-bot">
      <div class="f-copy">
        <span>© 2026 RAD Best Business Group, All Rights Reserved.</span>
        <span class="f-tm">RAD Best<span class="tm">™</span> and the RAD Best logo are trademarks of RAD Best Business Group.</span>
        <span>Designed &amp; Developed by <strong>Drongo Technology PLC</strong></span>
      </div>
      <span class="f-legal"><a href="#">Terms &amp; conditions</a> · <a href="#">Privacy policy</a></span>
    </div>
  </div>
</footer>

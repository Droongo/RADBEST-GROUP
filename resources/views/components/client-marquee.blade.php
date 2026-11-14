{{--
    Infinite client logo marquee (styles: resources/css/components/testimonials.css).
    The list is rendered twice so the CSS animation (translateX -50%) loops seamlessly.
    Logos: config('site.clients').
--}}
<div class="logo-marquee rv" aria-label="Our clients"><div class="logo-track">
  @foreach ([1, 2] as $pass)
    @foreach (config('site.clients') as $client)
  <div class="logo-item"><img src="{{ asset('assets/img/clients/'.$client['file']) }}" alt="{{ $client['name'] }}" title="{{ $client['name'] }}"></div>
    @endforeach
  @endforeach
</div></div>

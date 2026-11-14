{{--
    Testimonial slider (styles: resources/css/components/testimonials.css,
    behaviour: resources/js/components/testimonial-slider.js).

    Props
      items  keys from config('site.testimonials'), in display order.
             The logo buttons are only rendered when there is more than one.
--}}
@props(['items'])
@php
    $testimonials = collect($items)->map(fn ($key) => config("site.testimonials.$key"));
@endphp
<div class="tslider rv" data-slider>
  <div class="ts-track">
    @foreach ($testimonials as $t)
    <div @class(['ts-slide', 'on' => $loop->first])>
      <div class="ts-logo"><img src="{{ asset('assets/img/clients/'.$t['logo']) }}" alt="{{ $t['name'] }}"></div>
      <div>
        <blockquote class="ts-quote">{{ $t['quote'] }}</blockquote>
        <div class="ts-who"><b>{{ $t['name'] }}</b><small>{{ $t['role'] }}</small></div>
      </div>
    </div>
    @endforeach
  </div>
  @if ($testimonials->count() > 1)
  <div class="ts-nav">
    @foreach ($testimonials as $t)
    <button @class(['ts-b', 'on' => $loop->first]) aria-label="{{ $t['name'] }}"><img src="{{ asset('assets/img/clients/'.$t['logo']) }}" alt="{{ $t['name'] }}"></button>
    @endforeach
  </div>
  @endif
</div>

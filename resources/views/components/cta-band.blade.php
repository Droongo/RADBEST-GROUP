{{--
    Closing call-to-action band (styles: resources/css/components/cta.css)

    Props
      id                 section id (anchor target, e.g. #enquire)
      image              background photo under public/
      width, height      intrinsic size of the photo
      phone, phoneLabel  number dialled by the ghost button
    Slots
      title (required), default slot = paragraph, checks (optional ✓ list)
--}}
@props([
    'id' => 'contact',
    'image',
    'width',
    'height',
    'phone' => '+251903444440',
    'phoneLabel' => '+251 90 344 4440',
])
<section class="cta" id="{{ $id }}">
  <div class="wrap">
    <div class="cta-box on-dark has-img rv">
      <img src="{{ asset($image) }}" alt="" width="{{ $width }}" height="{{ $height }}" class="bgimg" loading="lazy">
      <span class="eyebrow">Let's work together</span>
      <h2>{{ $title }}</h2>
      <p>{{ $slot }}</p>
      <div class="cta-row">
        <a href="{{ route('contact') }}" class="btn btn-sky">Contact us <span class="arr">→</span></a>
        <a href="tel:{{ $phone }}" class="btn btn-ghost">Call {{ $phoneLabel }}</a>
      </div>
      @isset($checks)
      <div class="chk">{{ $checks }}</div>
      @endisset
    </div>
  </div>
</section>

{{--
    One masonry tile (gallery page, trading showroom).
    Thumbnail: assets/img/t/{file} — full size for the lightbox: assets/img/{file}
--}}
@props(['file', 'cat', 'label', 'alt', 'caption' => null, 'w', 'h'])
<figure data-cat="{{ $cat }}" data-label="{{ $label }}"><img src="{{ asset('assets/img/t/'.$file) }}" alt="{{ $alt }}" width="{{ $w }}" height="{{ $h }}" data-full="{{ asset('assets/img/'.$file) }}" loading="lazy"><figcaption><b>{{ $caption ?? $alt }}</b></figcaption></figure>

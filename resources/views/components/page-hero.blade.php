{{--
    Inner-page hero (styles: resources/css/components/hero.css → .hero.page)

    Props
      image     path under public/, e.g. 'assets/img/coffee-aerial.jpg'
      position  optional CSS background-position for the photo
      crumbs    breadcrumb trail after "Home": [['label' => 'Divisions', 'url' => ...], ['label' => 'Coffee']]
      eyebrow   small label above the title
    Slots
      title (required), default slot = intro paragraph, ctas (optional), stats (optional)
--}}
@props(['image', 'position' => null, 'crumbs' => [], 'eyebrow'])
<header class="hero page" id="top">
  <div class="bg" style="background-image:url('{{ asset($image) }}')@if($position);background-position:{{ $position }}@endif"></div>
  <div class="wrap on-dark">
    <div class="crumbs rv"><a href="{{ route('home') }}">Home</a>@foreach($crumbs as $crumb)<i>/</i>@isset($crumb['url'])<a href="{{ $crumb['url'] }}">{{ $crumb['label'] }}</a>@else<span>{{ $crumb['label'] }}</span>@endisset @endforeach</div>
    <span class="eyebrow rv">{{ $eyebrow }}</span>
    <h1 class="rv d1">{{ $title }}</h1>
    <p class="rv d2">{{ $slot }}</p>
    @isset($ctas)
    <div class="ctas rv d3">
      {{ $ctas }}
    </div>
    @endisset
    @isset($stats)
    <div class="hero-stats rv d4">
      {{ $stats }}
    </div>
    @endisset
  </div>
</header>

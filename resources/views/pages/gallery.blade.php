@extends('layouts.app')

@section('title', 'Gallery — RAD Best Business Group')
@section('description', 'Photo gallery of RAD Best Business Group: Ethiopian coffee at origin, workspace and furniture from RAD Best Trading, textile manufacturing and our people.')
@section('body_class', 'page-gallery')

@push('styles')
    @vite('resources/css/pages/gallery.css')
@endpush

@push('scripts')
    @vite('resources/js/pages/gallery.js')
@endpush

@section('content')

<x-page-hero image="assets/img/coffee-aerial.jpg" position="center 60%" :crumbs="[['label' => 'Gallery']]" eyebrow="Gallery">
  <x-slot:title>The Group, <span class="serif">in Pictures.</span></x-slot:title>
  From the raised drying beds of Ethiopia's coffee highlands to our showroom and factory floor. Filter by business and click any photo to view it full size.
</x-page-hero>

<section id="photos">
  <div class="wrap">
    {{-- Filter tabs — resources/js/pages/gallery.js; photo list: config/gallery.php --}}
    <div class="filters rv" role="tablist" aria-label="Filter photos">
      <button class="tab" data-cat="all" aria-selected="true">All photos<i>{{ $photos->count() }}</i></button>
      @foreach ($categories as $cat => $label)
      <button class="tab" data-cat="{{ $cat }}" aria-selected="false">{{ $label }}<i>{{ $counts[$cat] ?? 0 }}</i></button>
      @endforeach
    </div>
    <p class="gal-count">Showing <b>{{ $photos->count() }}</b> photos</p>
    <div class="mason" data-lightbox>
      @foreach ($photos as $photo)
      <x-mason-figure :file="$photo['file']" :cat="$photo['cat']" :label="$photo['label']" :alt="$photo['caption']" :w="$photo['w']" :h="$photo['h']" />
      @endforeach
    </div>
  </div>
</section>

<x-cta-band id="enquire" image="assets/img/coffee-team-workers.jpg" width="1800" height="1013">
  <x-slot:title>Want to See It <span class="serif">in Person?</span></x-slot:title>
  Visit our trading showroom at Garad City Mall, or get in touch to arrange a visit to our coffee or manufacturing operations.
</x-cta-band>

@endsection

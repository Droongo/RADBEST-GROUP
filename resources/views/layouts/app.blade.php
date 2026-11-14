<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>@yield('title', config('site.name'))</title>
<meta name="description" content="@yield('description')">
<link rel="icon" href="{{ asset('favicon.ico') }}" sizes="16x16 32x32">
<link rel="icon" type="image/png" sizes="32x32" href="{{ asset('favicon-32x32.png') }}">
<link rel="icon" type="image/png" sizes="16x16" href="{{ asset('favicon-16x16.png') }}">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Manrope:wght@300;400;500;600;700;800&family=Fraunces:ital,opsz,wght@1,9..144,300;1,9..144,400&display=swap" rel="stylesheet">
@vite(['resources/css/app.css', 'resources/js/app.js'])
@stack('styles')
<noscript><style>.rv{opacity:1;transform:none}</style></noscript>
</head>
<body class="@yield('body_class')">

<x-site-header />

<main>
@yield('content')
</main>

<x-site-footer />

@stack('scripts')
</body>
</html>

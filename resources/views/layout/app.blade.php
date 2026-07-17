<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta name="robots" content="index, follow, max-image-preview:large, max-snippet:-1, max-video-preview:-1" />
  <!-- Google tag (gtag.js) -->
  <script async src="https://www.googletagmanager.com/gtag/js?id=G-R76WFQ3D5G"></script>
  <script>
    window.dataLayer = window.dataLayer || [];

    function gtag() {
      dataLayer.push(arguments);
    }
    gtag('js', new Date());

    gtag('config', 'G-R76WFQ3D5G');
  </script>

  {{-- Clean Path for Hreflang & Canonical (Removes query params & existing locale prefixes) --}}
  @php
    $currentPath = request()->path();
    $cleanPath = preg_replace('#^(en|id)/#', '', $currentPath);
    $cleanPath = $cleanPath === '/' ? '' : '/' . $cleanPath;
    $canonicalUrl = url($cleanPath);
  @endphp

  {{-- SEO & Open Graph Dinamis dengan Fallback Default --}}
  <title>@yield('title', t('brand_spark_robotics'))</title>
  <meta name="description" content="@yield('description', t('meta_description'))">

  {{-- Open Graph / Facebook / WhatsApp --}}
  <meta property="og:locale" content="{{ app()->getLocale() == 'id' ? 'id_ID' : 'en_US' }}">
  <meta property="og:title" content="@yield('title', t('meta_og_title'))">
  <meta property="og:description" content="@yield('description', t('meta_og_description'))">
  <meta property="og:site_name" content="{{ t('brand_spark_robotics') }}">
  <meta property="og:type" content="website">
  <meta property="og:url" content="{{ $canonicalUrl }}">
  <meta property="og:image" content="@yield('image', asset('images/og.webp'))" />
  <meta property="og:image:type" content="image/webp">
  <meta property="og:image:width" content="1200" />
  <meta property="og:image:height" content="630" />
  <meta property="og:image:alt" content="{{ t('brand_spark_robotics') . ' - ' . t('meta_og_title') }}" />

  {{-- Twitter --}}
  <meta name="twitter:card" content="summary_large_image">
  <meta name="twitter:domain" content="sparkrobotics.id">
  <meta name="twitter:url" content="{{ $canonicalUrl }}">
  <meta name="twitter:title" content="@yield('title', t('brand_spark_robotics'))">
  <meta name="twitter:description" content="@yield('description', t('meta_og_description'))">
  <meta name="twitter:image" content="@yield('image', asset('images/og.webp'))">

  {{-- Meta Statis --}}
  <meta name="author" content="{{ t('brand_spark_robotics') }}">

  {{-- Canonical & Hreflang --}}
  <link rel="alternate" hreflang="en" href="{{ $canonicalUrl }}" />
  <link rel="alternate" hreflang="id" href="{{ url('/id' . $cleanPath) }}" />
  <link rel="alternate" hreflang="x-default" href="{{ $canonicalUrl }}" />
  <link rel="canonical" href="{{ $canonicalUrl }}">

  {{-- Favicon & Assets --}}
  <link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon.png">
  <link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png">
  <link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png">
  <link rel="manifest" href="/site.webmanifest">
  @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="font-sans antialiased">
  <x-layout.header :activePage="$activePage ?? ''" />
  @yield('content')
  <x-layout.footer />
</body>

</html>

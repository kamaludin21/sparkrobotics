<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta name="robots" content="index, follow, max-image-preview:large, max-snippet:-1, max-video-preview:-1" />

  {{-- SEO & Open Graph Dinamis dengan Fallback Default --}}
  <title>@yield('title', t('brand_spark_robotics'))</title>
  <meta name="description" content="@yield('description', t('meta_description'))">

  {{-- Open Graph / Facebook / WhatsApp --}}
  <meta property="og:title" content="@yield('title', t('meta_og_title'))">
  <meta property="og:description" content="@yield('description', t('meta_og_description'))">
  <meta property="og:site_name" content="{{ t('brand_spark_robotics') }}">
  <meta property="og:type" content="website">
  <meta property="og:url" content="{{ url()->current() }}">
  <meta property="og:image" content="@yield('image', asset('images/og.webp'))" />
  <meta property="og:image:type" content="image/webp">
  <meta property="og:image:width" content="1200" />
  <meta property="og:image:height" content="630" />
  <meta property="og:image:alt" content="{{ t('brand_spark_robotics') . ' - ' . t('meta_og_title') }}" />

  {{-- Twitter --}}
  <meta name="twitter:card" content="summary_large_image">
  <meta name="twitter:domain" content="sparkrobotics.id">
  <meta name="twitter:url" content="{{ url()->current() }}">
  <meta name="twitter:title" content="@yield('title', t('brand_spark_robotics'))">
  <meta name="twitter:description" content="@yield('description', __('seo.meta.description'))">
  <meta name="twitter:image" content="@yield('image', asset('images/og.webp'))">

  {{-- Meta Statis --}}
  <meta name="author" content="{{ t('brand_spark_robotics') }}">
  <meta name="keywords" content="{{ t('meta_keywords') }}">

  {{-- Canonical & Hreflang --}}
  <link rel="alternate" hreflang="en" href="{{ url('/en' . request()->getRequestUri()) }}" />
  <link rel="alternate" hreflang="id" href="{{ url('/id' . request()->getRequestUri()) }}" />
  <link rel="alternate" hreflang="x-default" href="{{ url('/' . request()->getRequestUri()) }}" />
  <link rel="canonical" href="{{ url()->current() }}">

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

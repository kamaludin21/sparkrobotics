<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta name="robots" content="index, follow, max-image-preview:large, max-snippet:-1, max-video-preview:-1" />

  {{-- SEO & Open Graph Dinamis dengan Fallback Default --}}
  <title>@yield('title', t('brand_spark_robotics'))</title>
  <meta name="description" content="@yield('description', __('seo.meta.description'))">

  {{-- Open Graph / Facebook / WhatsApp --}}
  <meta property="og:title" content="@yield('title', t('brand_spark_robotics'))">
  <meta property="og:description" content="@yield('description', __('seo.meta.description'))">
  <meta property="og:type" content="@yield('og_type', 'website')">
  <meta property="og:url" content="{{ url()->current() }}">
  {{-- Jika page tidak set 'image', maka pakai og-spark.png --}}
  <meta property="og:image" content="@yield('image', asset('images/og-spark.png'))">

  {{-- Twitter --}}
  <meta name="twitter:card" content="summary_large_image">
  <meta name="twitter:title" content="@yield('title', t('brand_spark_robotics'))">
  <meta name="twitter:description" content="@yield('description', __('seo.meta.description'))">
  <meta name="twitter:image" content="@yield('image', asset('images/og-spark.png'))">

  {{-- Meta Statis --}}
  <meta name="author" content="SPARK Robotics">
  <meta name="keywords"
    content="SPARK Robotics Indonesia, Distributor Resmi DJI Enterprise Indonesia, Authorized Unitree Robotics Indonesia, PT Spark Space Indonesia">

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

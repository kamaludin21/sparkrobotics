<!doctype html lang="en">
<html>

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon.png">
  <link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png">
  <link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png">
  <link rel="manifest" href="/site.webmanifest">
  @vite(['resources/css/app.css', 'resources/js/app.js'])
  <title>{{ t('brand_spark_robotics') }}</title>
</head>

<body class="font-sans antialiased">
  <x-layout.header :activePage="$activePage ?? ''" />
  @yield('content')
  <x-layout.footer />
</body>
</html>

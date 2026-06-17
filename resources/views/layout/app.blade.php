<!doctype html lang="en">
<html>

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="font-sans antialiased">
  <x-layout.header  />
  @yield('content')
  <x-layout.footer />
</body>
</html>

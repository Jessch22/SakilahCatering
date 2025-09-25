<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>@yield('title', 'Sakilah Catering')</title>
  <link rel="stylesheet" href="{{ asset('css/root.css')}}">
  <link rel="stylesheet" href="{{ asset('css/layout.css')}}">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&family=Imperial+Script&display=swap">
  @stack('styles')
</head>
<body>

  <div class = "hero-home">
    @yield('hero-home')
  </div>

  <div class = "home-content">
    @yield('content')
  </div>

  @stack('scripts')
</body>
</html>
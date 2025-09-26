<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>@yield('title', 'Sakilah Catering')</title>
  <link rel="stylesheet" href="{{ asset('css/root.css')}}">
  <link rel="stylesheet" href="{{ asset('css/layout.css')}}">
  <link rel="stylesheet" href="{{ asset('css/font.css')}}">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
  <link rel="stylesheet" href="{{ asset('css/components/header.css')}}">
  <link rel="stylesheet" href="{{ asset('css/components/footer.css')}}">
  @stack('styles')
</head>
<body>
  @include('components.header')

  <div class = "hero-home">
    @yield('hero-home')
  </div>

  <div class = "home-content">
    @yield('content')
  </div>

  @include('components.footer')
  <script src="{{ asset('js/components/header.js')}}"></script>

  @stack('scripts')
</body>
</html>
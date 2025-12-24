<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>@yield('title', 'Sakilah Catering')</title>
  <link rel="stylesheet" href="{{ asset('css/root.css')}}">
  <link rel="stylesheet" href="{{ asset('css/layout.css')}}">
  <link rel="stylesheet" href="{{ asset('css/components/header.css')}}">
  <link rel="stylesheet" href="{{ asset('css/components/footer.css')}}">

  <!-- FONT CUSTOM -->
  <link rel="stylesheet" href="{{ asset('css/font.css')}}">
  <!-- FONT AWESOME -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
  <link rel="stylesheet" href="{{ asset('css/all.min.css') }}">

  @stack('styles')
</head>
<body>
  @include('components.header')

  <div class="hero">
    <h1 class="title">@yield('title-hero')</h1>
    <p class="accent"></p>
  </div>

  <div class = "content">
    @yield('content')
  </div>

  @include('components.footer')

  @include('components.wa-button')
  <script src="{{ asset('js/components/header.js')}}"></script>

  @stack('scripts')
</body>
</html>
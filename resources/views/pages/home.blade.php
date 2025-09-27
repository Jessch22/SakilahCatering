@extends('layouts.homeapp')

@section('title', 'Event Kami')

@push('styles')
<link rel="stylesheet" href="{{ asset('css/pages/home.css')}}">
<link rel="stylesheet" href="{{ asset('css/components/logomarquee.css')}}">
<link rel="stylesheet" href="{{ asset('css/components/cardhover.css')}}">
<link rel="stylesheet" href="{{ asset('css/components/testicard.css')}}">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
@endpush

@section('title-hero', 'Event Kami')

@section('hero-home')
<div class="hero-banner">
  <div class="hero-overlay"></div>
  <div class="hero-content">
    <h1 class="hero-title">Sakilah Catering</h1>
    <div class="hero-slogan">Wedding Organizer & Catering Service</div>
    <a href="/menu" class="hero-btn">Pesan Sekarang</a>
  </div>
</div>
@endsection


@section('content')

<div class="white-section">
  <div class="title-white-section">
    <h2>Tentang Kami</h2>
    <p class="accent-content"></p>
  </div>
  <div class="about-us-content">
    <img class="about-us-image" src="https://cdn.pixabay.com/photo/2016/11/23/15/48/audience-1853662_1280.jpg" alt="">
    <div class="about-us-keterangan">
      <p class="about-us-isi">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco </p>
      <a href="/about-us" class="about-us-btn">Selengkapnya</a>
    </div>
  </div>
</div>


<div class="blue-section company-profile">
  <h2 class="center">Company Profile</h2>
  <div class="video-container">
    <iframe 
      src="https://www.youtube.com/embed/D0UnqGm_miA?controls=0&autoplay=1&loop=1&playlist=D0UnqGm_miA&modestbranding=1&rel=0" 
      title="YouTube video player" 
      allow="autoplay; encrypted-media" 
      referrerpolicy="strict-origin-when-cross-origin" 
      allowfullscreen>
    </iframe>
  </div>
</div>

<div class="white-section service-section">
  <div class="title-white-section">
    <h2>Paket Kami</h2>
    <p class="accent-content"></p>
  </div>
  <div class="card-hover-wrapper">
    <div class="card-hover-container service-container">
        @for ($i = 1; $i <= 4; $i++)
            <x-card-hover />
        @endfor
    </div>
    <div class="scroll-dots"></div>
    </div>
</div>

<div class="white-section menu-section">
  <div class="title-white-section">
    <h2>Menu Kami</h2>
    <p class="accent-content"></p>
  </div>
  <div class="card-hover-wrapper">
    <div class="card-hover-container menu-container">
        @for ($i = 1; $i <= 3; $i++)
            <x-card-hover />
        @endfor
    </div>
    <div class="scroll-dots"></div>
    </div>
</div>

<div class="blue-section testi">
  <h2 class="center">Testimoni</h2>
  <div class="testi-wrapper">
    <button class="prev"><i class="fas fa-chevron-left"></i></button>
    <div class="testi-container">
      @for ($i = 1; $i <= 3; $i++)
          <x-testi-card class="testi-card"/>
      @endfor
    </div>
    <button class="next"><i class="fas fa-chevron-right"></i></button>
  </div>
</div>

<div class="white-section">
  <div class="title-white-section">
    <h2>Acara Terdahulu</h2>
    <p class="accent-content"></p>
  </div>
  <x-logo-marquee />
</div>

<div class="blue-section achievements">
  <h2>Our Achievements</h2>
  <div class="achievements-list">
      <div class="achievement-item">
        <span class="achievement-main">3</span>
        <span class="achievement-desc">Years of Experience</span>
    </div>
    <div class="achievement-item">
        <span class="achievement-main">100+</span>
        <span class="achievement-desc">Events Served</span>
    </div>
    <div class="achievement-item">
        <span class="achievement-main">20+</span>
        <span class="achievement-desc">Catering Packages</span>
    </div>
  </div>
</div>
@endsection

@push('scripts')
  <script src="{{ asset('js/components/testicard-scroll.js')}}"></script>
  <script src="{{ asset('js/components/dot.js')}}"></script>
  <script src="{{ asset('js/components/cardhover.js')}}"></script>
@endpush
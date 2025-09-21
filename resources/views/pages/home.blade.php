@extends('layouts.homeapp')

@section('title', 'Event Kami')

@push('styles')
<link rel="stylesheet" href="{{ asset('css/pages/home.css')}}">
<link rel="stylesheet" href="{{ asset('css/components/logomarquee.css')}}">
<link rel="stylesheet" href="{{ asset('css/components/cardhover.css')}}">
@endpush

@section('title-hero', 'Event Kami')

@section('hero-home')
<div class="hero-banner">
  <div class="hero-overlay"></div>
  <div class="hero-content">
    <h1 class="hero-title">Sakilah Catering</h1>
    <div class="hero-slogan">-SLOGAN-</div>
    <a href="#" class="hero-btn">Pesan Sekarang</a>
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
      <a href="#" class="about-us-btn">Selengkapnya</a>
    </div>
  </div>
</div>


<div class="blue-section">
  <h2 class="center">Company Profile</h2>

</div>

<div class="white-section">
  <div class="title-white-section">
    <h2>Layanan Kami</h2>
    <p class="accent-content"></p>
  </div>
  <div class="card-hover-container">
      @for ($i = 1; $i <= 4; $i++)
          <x-card-hover />
      @endfor
  </div>
</div>

<div class="white-section">
  <div class="title-white-section">
    <h2>Menu Kami</h2>
    <p class="accent-content"></p>
  </div>
  <div class="card-hover-container">
      @for ($i = 1; $i <= 3; $i++)
          <x-card-hover />
      @endfor
  </div>
</div>

<div class="blue-section">
  <h2 class="center">Testimoni</h2>

</div>

<div class="white-section">
  <div class="title-white-section">
    <h2>Klien Kami</h2>
    <p class="accent-content"></p>
  </div>
  <x-logo-marquee />
</div>

<div class="blue-section">
  <h2>Our Achievements</h2>
</div>
@endsection
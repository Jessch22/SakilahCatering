@extends('layouts.homeapp')

@section('title', 'Beranda')

@push('styles')
<link rel="stylesheet" href="{{ asset('css/pages/home.css')}}">
<link rel="stylesheet" href="{{ asset('css/components/logomarquee.css')}}">
<link rel="stylesheet" href="{{ asset('css/components/cardhover.css')}}">
<link rel="stylesheet" href="{{ asset('css/components/testicard.css')}}">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
@endpush

@section('title-hero', 'Beranda')

@section('hero-home')
<div class="hero-banner">
  <div class="hero-overlay"></div>
  <div class="hero-content">
    <h1 class="hero-title">Sakilah Catering</h1>
    <div class="hero-slogan">Wedding Organizer & Catering Service</div>
    <a href="https://wa.me/+6285183098884" class="hero-btn">Pesan Sekarang</a>
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
    <img class="about-us-image" src="{{ asset('img/asset/IMG-20250927-WA0054.jpg') }}" alt="">
    <div class="about-us-keterangan">
        <div class="about-us-isi">
          <p>
              <strong>Sakilah Catering</strong>, di bawah naungan CV. Sakilah Cahaya Kharisma, hadir sebagai mitra layanan catering dan event organizer profesional yang berbasis di Jati Asih, Bekasi.
          </p>

          <p>
          Sakilah melayani seluruh wilayah Jabodetabek dengan tawaran paket beragam:
          </p>
          <ul>
              <li>
                <strong>Paket Catering Hemat:</strong> Mulai Rp28.000/porsi (Sudah termasuk alat & waiters)
              </li>
              <li>
                <strong>All-In Wedding Package:</strong> Mulai Rp60 Juta (Lengkap dengan Venue, Dekorasi, & WO)
              </li>
          </ul>
          <br>
      </div>
      <a href="{{ url('/about-us') }}" class="about-us-btn">Selengkapnya</a>
    </div>
  </div>
</div>

<div class="blue-section cp">
  <h2 class="center">Portofolio Catering</h2>
  <div class="cp-wrapper">
    <button class="prev"><i class="fas fa-chevron-left"></i></button>
    <div class="cp-container">
      <img src="{{ asset('img/asset/IMG-20250927-WA0055.jpg') }}">
      <img src="{{ asset('img/asset/IMG-20250927-WA0094.jpg') }}">
      <img src="{{ asset('img/asset/IMG-20250927-WA0090.jpg') }}">
    </div>
    <button class="next"><i class="fas fa-chevron-right"></i></button>
  </div>
  
  <div class="center" style="margin-top: 40px;">
    <a href="{{ url('/event') }}" class="btn-gallery">Lihat Galeri Lainnya</a>
  </div>
</div>

<div class="white-section service-section">
  <div class="title-white-section">
    <h2>Paket Kami</h2>
    <p class="accent-content"></p>
  </div>
  <div class="card-hover-wrapper">
    <div class="card-hover-container service-container">
      
      <div class="card-hover" style="background-image: url('https://cdn.pixabay.com/photo/2016/11/23/15/48/audience-1853662_1280.jpg');">
        <div class="card-content">
          <div class="card-title">PAKET CATERING ONLY</div>
          <div class="card-desc">Mulai dari Rp28.000/pax!</div>
          <a href="#" class="card-btn">Tanya Selengkapnya</a>
        </div>
      </div>

      <div class="card-hover" style="background-image: url('https://cdn.pixabay.com/photo/2016/11/23/15/48/audience-1853662_1280.jpg');">
        <div class="card-content">
          <div class="card-title">PAKET ALL-IN WEDDING</div>
          <div class="card-desc">Mulai dari Rp60juta!</div>
          <a href="#" class="card-btn">Tanya Selengkapnya</a>
        </div>
      </div>

    </div>
    <div class="scroll-dots"></div>
    </div>
</div>

<div class="blue-section testi">
  <h2 class="center">Testimoni</h2>
  <div class="video-container">
    <div class="instagram-wrapper">
      <blockquote class="instagram-media" data-instgrm-permalink="https://www.instagram.com/reel/DSRGrhZATRR/?utm_source=ig_embed&amp;utm_campaign=loading" data-instgrm-version="14">
      </blockquote>
    </div>

    <div class="instagram-wrapper">
      <blockquote class="instagram-media" data-instgrm-permalink="https://www.instagram.com/reel/DR32x8lgcTC/?utm_source=ig_embed&amp;utm_campaign=loading" data-instgrm-version="14">
      </blockquote>
    </div>
  </div>
</div>

<div class="white-section">
  <div class="title-white-section">
    <h2>Supported Event</h2>
    <p class="accent-content"></p>
  </div>
  <x-logo-marquee />
</div>

<div class="blue-section achievements">
  <h2>Our Achievements</h2>
  <br>
  <div class="achievements-list">
      <div class="achievement-item">
        <span class="achievement-main">2</span>
        <span class="achievement-desc">Tahun Pengalaman</span>
    </div>
    <div class="achievement-item">
        <span class="achievement-main">100+</span>
        <span class="achievement-desc">Acara Dilayani</span>
    </div>
    <div class="achievement-item">
        <span class="achievement-main">100%</span>
        <span class="achievement-desc">Halal & Higienis</span>
    </div>
  </div>
</div>
@endsection

@push('scripts')
  <script src="{{ asset('js/components/scroll-card.js')}}"></script>
  <script src="{{ asset('js/components/dot.js')}}"></script>
  <script src="{{ asset('js/components/cardhover.js')}}"></script>
  <script async src="//www.instagram.com/embed.js"></script>
@endpush
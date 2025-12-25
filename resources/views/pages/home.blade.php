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
    <h1 class="hero-title">{{ $hero['title'] }}</h1>
    <div class="hero-slogan">{{ $hero['slogan'] }}</div>
    <a href="{{ $waLink }}?text=Halo%20Sakilah%20Catering,%20saya%20mau%20tanya-tanya" class="hero-btn" target="_blank">
        {{ $hero['button_text'] }}
    </a>
  </div>
</div>
@endsection


@section('content')
<!-- 1. TENTANG KAMI -->
<div class="white-section">
  <div class="title-white-section">
    <h2>Tentang Kami</h2>
    <p class="accent-content"></p>
  </div>
  <div class="about-us-content">
    <img class="about-us-image" src="{{ asset($about['image']) }}" alt="Tentang Sakilah Catering">
    <div class="about-us-keterangan">
        <div class="about-us-isi">
          {!! $about['content'] !!}
        </div>
      <a href="{{ $about['button_url'] }}" class="about-us-btn">{{ $about['button_text'] }}</a>
    </div>
  </div>
</div>

<!-- 2. PORTOFOLIO -->
<div class="blue-section cp">
  <h2 class="center">{{ $portfolio['title'] }}</h2>
  <div class="cp-wrapper">
    <button class="prev"><i class="fas fa-chevron-left"></i></button>
    <div class="cp-container">
      @foreach($portfolio['images'] as $img)
        <img src="{{ asset($img) }}" alt="Portofolio Event">
      @endforeach
    </div>
    <button class="next"><i class="fas fa-chevron-right"></i></button>
  </div>
  
  <div class="center" style="margin-top: 40px;">
    <a href="{{ $portfolio['button_url'] }}" class="btn-gallery">{{ $portfolio['button_text'] }}</a>
  </div>
</div>

<!-- 3. LAYANAN KAMI -->
<div class="white-section service-section">
  <div class="title-white-section">
    <h2>Layanan Kami</h2>
    <p class="accent-content"></p>
  </div>
  <div class="card-hover-wrapper">
    <div class="card-hover-container service-container">
      @foreach($services as $item)
        <x-card-hover 
            :item="$item" 
            :whatsappLink="$waLink . '?'" 
        />
      @endforeach

    </div>
    <div class="scroll-dots"></div>
    </div>
</div>

<!-- 4. TESTIMONI -->
<div class="blue-section testi">
  <h2 class="center">Testimoni</h2>
  <div class="video-container">
    
    @foreach($testimonials as $link)
    <div class="instagram-wrapper">
      <blockquote class="instagram-media" 
        data-instgrm-permalink="{{ $link }}" 
        data-instgrm-version="14">
      </blockquote>
    </div>
    @endforeach

  </div>
</div>

<!-- 5. SUPPORTED EVENT -->
<div class="white-section">
  <div class="title-white-section">
    <h2>Supported Event</h2>
    <p class="accent-content"></p>
  </div>
  <x-logo-marquee />
</div>

<!-- 6. ACHIEVEMENTS -->
<div class="blue-section achievements">
  <h2>Our Achievements</h2>
  <br>
  <div class="achievements-list">
    
    @foreach($achievements as $ach)
    <div class="achievement-item">
        <span class="achievement-main">{{ $ach['number'] }}</span>
        <span class="achievement-desc">{{ $ach['desc'] }}</span>
    </div>
    @endforeach

  </div>
</div>
@endsection

@push('scripts')
  <script src="{{ asset('js/components/scroll-card.js')}}"></script>
  <script src="{{ asset('js/components/dot.js')}}"></script>
  <script src="{{ asset('js/components/cardhover.js')}}"></script>
  <script async src="//www.instagram.com/embed.js"></script>
@endpush
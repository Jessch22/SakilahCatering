@php
    $imageRaw = $about['image'];
    $isUrl = \Illuminate\Support\Str::startsWith($imageRaw, ['http://', 'https://']);
    $finalImage = $isUrl ? $imageRaw : asset('img/asset/' . $imageRaw);
@endphp

@extends('layouts.app')

@section('title', 'Tentang Kami')

@push('styles')
    <link rel="stylesheet" href="{{ asset('css/components/logomarquee.css')}}">
    <link rel="stylesheet" href="{{ asset('css/pages/aboutus.css')}}">
    <link rel="stylesheet" href="{{ asset('css/components/sosmed.css')}}">
@endpush

@section('title-hero', 'Tentang Kami')

@section('content')
    <div class="about-us-content">
        <!-- GAMBAR -->
        <img class="about-us-image" src="{{ asset($finalImage) }}" alt="Suasana Acara Catering">
        
        <div class="about-us-keterangan">
            {!! $htmlContent !!}
        </div>
    </div>

    <div class="features-section">
        <h2 class="section-title">Kenapa Memilih Kami?</h2>
        <div class="features-grid">
            <!-- FEATURES -->
            @foreach($about['features'] as $feature)
            <div class="feature-card">
                <div class="feature-icon"><i class="{{ $feature['icon'] }}"></i></div>
                <h3 class="feature-title">{{ $feature['title'] }}</h3>
                <p class="feature-desc">{{ $feature['desc'] }}</p>
            </div>
            @endforeach
        </div>
    </div>

    <div class="map-section">
        <h2 class="section-title">Lokasi & Layanan</h2>
        <div class="map-container">
            <div class="map-info">
                <p class="about-us-isi">
                    Berbasis di Bekasi, Sakilah Catering siapmenjangkau lokasi acara Anda di seluruh wilayah Jabodetabek.
                </p>
                
                <h4 class="about-us-subheading">Layanan Kami:</h4>
                <div class="service-tags-container">
                    <!-- BADGE SERVICES -->
                    @foreach($about['services'] as $service)
                        <span class="service-tag">{{ $service }}</span>
                    @endforeach
                </div>

                <h4 class="about-us-subheading">Cakupan Wilayah:</h4>
                <ul class="area-list-grid">
                    <!-- AREA -->
                    @foreach($about['areas'] as $area)
                        <li><i class="fa-solid fa-map-pin"></i> {{ $area }}</li>
                    @endforeach
                </ul>
            </div>
            
            <div class="map-frame">
                <iframe 
                    src="{{ $maps_link }}" 
                    allowfullscreen="" 
                    loading="lazy" 
                    referrerpolicy="no-referrer-when-downgrade">
                </iframe>
            </div>
        </div>
    </div>

    <div class="logo-marquee-content">
        <h2 class="section-title">Acara Terdahulu</h2>
        <x-logo-marquee/>
    </div>

    <h2 class="section-title">Sosial Media</h2>
    <div class="social-media-wrapper">
        <!-- INSTAGRAM -->
        <div class="social-card instagram-card">
            <blockquote class="instagram-media" 
                data-instgrm-permalink="{{ $social['instagram_embed'] }}" 
                data-instgrm-version="14">
                <div style="padding:16px;">
                    <a href="{{ $social['instagram_embed'] }}" target="_blank" style="text-decoration:none;">
                    {{ $social['instagram_text'] }}
                    </a>
                </div>
            </blockquote>
        </div>

        <!-- TIKTOK -->
        <div class="social-card tiktok-card">
            <blockquote class="tiktok-embed" 
                cite="{{ $social['tiktok_url'] }}" 
                data-unique-id="{{ $social['tiktok_username'] }}" 
                data-embed-type="creator" 
                style="max-width: 780px; min-width: 288px;">
                <section>
                    <a target="_blank" href="{{ $social['tiktok_embed'] }}">
                    @ {{ $social['tiktok_username'] }}
                    </a>
                </section>
            </blockquote>
        </div>
    </div>

@endsection

@push('scripts')
    <script async src="//www.instagram.com/embed.js"></script>
    <script async src="https://www.tiktok.com/embed.js"></script>
@endpush
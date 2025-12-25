@extends('layouts.app')

@section('title', 'Daftar Menu')

@push('styles')
<link rel="stylesheet" href="{{ asset('css/pages/menu.css')}}">
<link rel="stylesheet" href="{{ asset('css/components/menucard.css')}}">
@endpush

@section('title-hero', 'Menu Kami')

@section('content')

<!-- Prasmanan -->
<div class="menu-section">
    <div class="section-header">
        <h2>Paket Prasmanan</h2>
        <p>Pilihan paket lengkap untuk acara pernikahan, khitanan, atau gathering Anda.</p>
    </div>

    <div class="pricing-grid">
        @foreach($buffetPackages as $package)
            <x-menu-card :item="$package" :waLink="$waLink" />
        @endforeach
    </div>
</div>

<!-- Gubugan -->
<div class="gubugan-section">
    <div class="section-header">
        <h2>Menu Gubugan Favorit</h2>
        <p>Pelengkap sempurna untuk memanjakan tamu undangan Anda.</p>
    </div>

    <div class="gubugan-grid">
        @foreach($gubuganList as $gubugan)
        <div class="gubugan-item">
            <span class="gubugan-name">{{ $gubugan['name'] }}</span>
            <span class="gubugan-dots"></span>
            <span class="gubugan-price">{{ $gubugan['price'] }}</span>
        </div>
        @endforeach
    </div>
    
    <div class="gubugan-cta">
        <p>Ingin lihat menu gubugan lainnya? Ada lebih dari 50+ pilihan menu!</p>
        <a href="{{ $waLink }}?text=Halo,%20boleh%20minta%20price%20list%20lengkap%20menu%20gubugan?" class="btn-outline">
            <i class="fa-brands fa-whatsapp"></i> Minta Price List Lengkap
        </a>
    </div>
</div>

@endsection
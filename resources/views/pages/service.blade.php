@extends('layouts.app')

@section('title', 'Service Kami')

@push('styles')
<link rel="stylesheet" href="{{ asset('css/pages/service.css')}}">
<link rel="stylesheet" href="{{ asset('css/pages/menucard.css')}}">
<link rel="stylesheet" href="{{ asset('css/components/eventcard.css')}}">
<link rel="stylesheet" href="{{ asset('css/components/logomarquee.css')}}">
@endpush

<!-- cuma ganti nama -->
<!-- title hero ambil dari app.blade -->
@section('title-hero', 'Layanan Kami') 

@section('content')
<div class="weiters-container">
    <h1 class="title-text">WEITERS</h1>
</div>

<div class="card-container">
    <div class="menu-card">
        <div class="menu-card-image"></div>
        <div class="menu-card-content">
            <h2 class="menu-title">PAKET WEITERS A</h2>
            <ul class="menu-items">
                <li>Nasi</li>
                <li>Ayam</li>
                <li>Daging</li>
                <li>Tumisan</li>
                <li>Kerupuk</li>
                <li>Air Minum</li>
                <li>Buah</li>
            </ul>
            <p class="menu-items">
                Nasi Putih | Pilihan Sop | Pilihan Ayam | 
                Menu Pelengkap | Kerupuk Udang | Air Mineral | 
                Buah Potong
            </p>
            <div class="cta-container">
                <p class="cta-info">KLIK UNTUK INFO SELENGKAPNYA</p>
                <a href="#" class="cta-button">Pesan Sekarang</a>
            </div>
        </div>
    </div>

    <div class="menu-card">
        <div class="menu-card-image"></div>
        <div class="menu-card-content">
            <h2 class="menu-title">PAKET WEITERS B</h2>
            <p class="menu-items">
                Nasi Goreng | Telur Mata Sapi | Sate Ayam | 
                Acar | Kerupuk Bawang | Es Teh Manis | 
                Puding Coklat
            </p>
            <div class="cta-container">
                <p class="cta-info">KLIK UNTUK INFO SELENGKAPNYA</p>
                <a href="#" class="cta-button">Pesan Sekarang</a>
            </div>
        </div>
    </div>

    <div class="menu-card">
        <div class="menu-card-image"></div>
        <div class="menu-card-content">
            <h2 class="menu-title">PAKET WEITERS C</h2>
            <p class="menu-items">
                Nasi Goreng | Telur Mata Sapi | Sate Ayam | 
                Acar | Kerupuk Bawang | Es Teh Manis | 
                Puding Coklat
            </p>
            <div class="cta-container">
                <p class="cta-info">KLIK UNTUK INFO SELENGKAPNYA</p>
                <a href="#" class="cta-button">Pesan Sekarang</a>
            </div>
        </div>
    </div>

    <div class="menu-card">
        <div class="menu-card-image"></div>
        <div class="menu-card-content">
            <h2 class="menu-title">PAKET WEITERS D</h2>
            <p class="menu-items">
                Nasi Goreng | Telur Mata Sapi | Sate Ayam | 
                Acar | Kerupuk Bawang | Es Teh Manis | 
                Puding Coklat
            </p>
            <div class="cta-container">
                <p class="cta-info">KLIK UNTUK INFO SELENGKAPNYA</p>
                <a href="#" class="cta-button">Pesan Sekarang</a>
            </div>
        </div>
    </div>

</div>


@endsection
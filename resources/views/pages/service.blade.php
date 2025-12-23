@extends('layouts.app')

@section('title', 'Layanan Kami')

@push('styles')
<link rel="stylesheet" href="{{ asset('css/pages/service.css')}}">
<link rel="stylesheet" href="{{ asset('css/pages/home.css')}}">

<link rel="stylesheet" href="{{ asset('css/pages/menucard.css')}}">
<link rel="stylesheet" href="{{ asset('css/components/eventcard.css')}}">
@endpush

@section('title-hero', 'Layanan Kami') 

@section('content')
<h1 class="title-text">Paket Catering</h1>
<p class="accent-content"></p>


<h1 class="title-text">Paket All-In Wedding</h1>
<p class="accent-content"></p>





<div class="card-container">
    <div class="menu-card">
        <div class="menu-card-image"></div>
        <div class="menu-card-content">
            <h2 class="menu-title">PAKET WAITERS A</h2>
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
            <h2 class="menu-title">PAKET WAITERS B</h2>
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
            <h2 class="menu-title">PAKET WAITERS C</h2>
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
            <h2 class="menu-title">PAKET WAITERS D</h2>
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
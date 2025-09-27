@extends('layouts.app')

@section('title', 'Menu Kami')

@push('styles')
<link rel="stylesheet" href="{{ asset('css/pages/menu.css')}}">
<link rel="stylesheet" href="{{ asset('css/pages/menucard.css')}}">
<link rel="stylesheet" href="{{ asset('css/components/eventcard.css')}}">
<link rel="stylesheet" href="{{ asset('css/components/logomarquee.css')}}">
@endpush

<!-- cuma ganti nama -->
<!-- title hero ambil dari app.blade -->
@section('title-hero', 'Menu Kami') 

@section('content')
<div class="ricebox-container">
    <h2 class="title-text">Buffet</h2>
</div>

<div class="card-container">
    <div class="menu-card">
        <div class="menu-card-image"></div>
        <div class="menu-card-content">
            <h2 class="menu-title">MENU A</h2>
            <ul class="menu-items">
                <li>Nasi Putih</li>
                <li>Pilihan Sop</li>
                <li>Pilihan Ayam</li>
                <li>Menu Pelengkap</li>
                <li>Kerupuk Udang</li>
                <li>Air Mineral</li>
                <li>Buah Potong</li>
            </ul>
            <div class="cta-container">
                <p class="cta-info">KLIK UNTUK INFO SELENGKAPNYA</p>
                <a href="#" class="cta-button">Pesan Sekarang</a>
            </div>
        </div>
    </div>

    <div class="menu-card">
        <div class="menu-card-image"></div>
        <div class="menu-card-content">
            <h2 class="menu-title">MENU B</h2>
            <ul class="menu-items">
                <li>Nasi Putih</li>
                <li>Pilihan Sop</li>
                <li>Pilihan Daging / Ikan</li>
                <li>Menu Pelengkap</li>
                <li>Kerupuk Udang</li>
                <li>Air Mineral</li>
                <li>Buah Potong</li>
            </ul>
            <div class="cta-container">
                <p class="cta-info">KLIK UNTUK INFO SELENGKAPNYA</p>
                <a href="#" class="cta-button">Pesan Sekarang</a>
            </div>
        </div>
    </div>

    <div class="menu-card">
        <div class="menu-card-image"></div>
        <div class="menu-card-content">
            <h2 class="menu-title">MENU C</h2>
            <ul class="menu-items">
                <li>Nasi Putih</li>
                <li>Pilihan Sop</li>
                <li>Pilihan Ayam</li>
                <li>Olahan Daging / Ikan</li>
                <li>Menu Pelengkap</li>
                <li>Kerupuk Udang</li>
                <li>Air Mineral</li>
                <li>Buah Potong</li>
            </ul>
            <div class="cta-container">
                <p class="cta-info">KLIK UNTUK INFO SELENGKAPNYA</p>
                <a href="#" class="cta-button">Pesan Sekarang</a>
            </div>
        </div>
    </div>

    <div class="menu-card">
        <div class="menu-card-image"></div>
        <div class="menu-card-content">
            <h2 class="menu-title">MENU D</h2>
            <ul class="menu-items">
                <li>Nasi Putih</li>
                <li>Pilihan Sop</li>
                <li>Pilihan Ayam</li>
                <li>Olahan Daging / Ikan</li>
                <li>Menu Pelengkap</li>
                <li>Kerupuk Udang</li>
                <li>Air Mineral</li>
                <li>Buah Potong</li>
                <li>Puding + Vla</li>
                <li>Softdrink</li>
            </ul>
            <div class="cta-container">
                <p class="cta-info">KLIK UNTUK INFO SELENGKAPNYA</p>
                <a href="#" class="cta-button">Pesan Sekarang</a>
            </div>
        </div>
    </div>

    <div class="menu-card">
        <div class="menu-card-image"></div>
        <div class="menu-card-content">
            <h2 class="menu-title">MENU E</h2>
            <ul class="menu-items">
                <li>Nasi Putih</li>
                <li>Nasi Goreng</li>
                <li>Pilihan Sop</li>
                <li>Pilihan Ayam</li>
                <li>Olahan Daging / Ikan</li>
                <li>Menu Pelengkap</li>
                <li>Kerupuk Udang</li>
                <li>Air Mineral</li>
                <li>Buah Potong</li>
                <li>Softdrink</li>
            </ul>
                <div class="cta-container">
                <p class="cta-info">KLIK UNTUK INFO SELENGKAPNYA</p>
                <a href="#" class="cta-button">Pesan Sekarang</a>
            </div>
        </div>
    </div>

    <div class="menu-card">
        <div class="menu-card-image"></div>
        <div class="menu-card-content">
            <h2 class="menu-title">MENU LENGKAP</h2>
            <ul class="menu-items">
                <li>Nasi Putih</li>
                <li>Nasi Goreng</li>
                <li>Pilihan Sop</li>
                <li>Pilihan Ayam</li>
                <li>Olahan Daging</li>
                <li>Olahan Ikan</li>
                <li>Menu Pelengkap</li>
                <li>Kerupuk Udang</li>
                <li>Air Mineral</li>
                <li>Buah Potong</li>
                <li>Puding + Vla</li>
                <li>Mini Cake</li>
                <li>Softdrink</li>
            </ul>
            <div class="cta-container">
                <p class="cta-info">KLIK UNTUK INFO SELENGKAPNYA</p>
                <a href="#" class="cta-button">Pesan Sekarang</a>
            </div>
        </div>
    </div>

</div>

<div class="ricebox-container">
    <h2 class="title-text">Rice Box</h2>
</div>

<div class="card-container">
    <div class="menu-card">
        <div class="menu-card-image"></div>
        <div class="menu-card-content">
            <h2 class="menu-title">PAKET A</h2>
            <ul class="menu-items">
                <li>Nasi</li>
                <li>Ayam</li>
                <li>Tumisan</li>
                <li>Kerupuk</li>
                <li>Air Minum</li>
                <li>Buah</li>
            </ul>
            <div class="cta-container">
                <p class="cta-info">KLIK UNTUK INFO SELENGKAPNYA</p>
                <a href="#" class="cta-button">Pesan Sekarang</a>
            </div>
        </div>
    </div>

    <div class="menu-card">
        <div class="menu-card-image"></div>
        <div class="menu-card-content">
            <h2 class="menu-title">PAKET B</h2>
            <ul class="menu-items">
                <li>Nasi</li>
                <li>Daging</li>
                <li>Tumisan</li>
                <li>Kerupuk</li>
                <li>Air Minum</li>
                <li>Buah</li>
            </ul>
            <div class="cta-container">
                <p class="cta-info">KLIK UNTUK INFO SELENGKAPNYA</p>
                <a href="#" class="cta-button">Pesan Sekarang</a>
            </div>
        </div>
    </div>

    <div class="menu-card">
        <div class="menu-card-image"></div>
        <div class="menu-card-content">
            <h2 class="menu-title">PAKET C</h2>
            <ul class="menu-items">
                <li>Nasi</li>
                <li>Ayam</li>
                <li>Daging</li>
                <li>Tumisan</li>
                <li>Kerupuk</li>
                <li>Air Minum</li>
                <li>Buah</li>
            </ul>
            <div class="cta-container">
                <p class="cta-info">KLIK UNTUK INFO SELENGKAPNYA</p>
                <a href="#" class="cta-button">Pesan Sekarang</a>
            </div>
        </div>
    </div>

</div>

<div class="gabungan-container">
    <h2 class="title-text">Gubugan</h2>
</div>

<div class="card-container">
    <section class="gubugan-section">
        <div class="menu-container">
            <ul class="menu-list">
                <li>Bakwan Malang</li>
                <li>Mie Bakso</li>
                <li>Solo Betawi</li>
                <li>Sate Padang</li>
                <li>Kambing Guling</li>
                <li>Dimsum</li>
            </ul>

            <ul class="menu-list">
                <li>Siomay</li>
                <li>Nasi Gudeg</li>
                <li>Es Dawet</li>
                <li>Es Doger</li>
                <li>Ice Cream Waffle</li>
                <li>dll...</li>
            </ul>
        </div>
    </section>

</div>

@endsection
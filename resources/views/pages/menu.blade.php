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
<div class="menu-container">
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
            <p class="menu-items">
            Nasi <br>
            Daging <br>
            Tumisan <br>
            Kerupuk <br>
            Air Minum <br>
            Buah 
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
            <h2 class="menu-title">PAKET C</h2>
            <p class="menu-items">
                Nasi <br>
                Ayam <br>
                Daging <br>
                Tumisan <br>
                Kerupuk <br>
                Air Minum <br>
                Buah
            </p>
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
    <div class="menu-card">
        <div class="menu-card-image"></div>
        <div class="menu-card-content">
            <h2 class="menu-title">GABUNGAN A</h2>
            <p class="menu-items">
                Nasi Putih | Pilihan Sop | Pilihan Ayam | Menu Pelengkap | Kerupuk Udang | Air Mineral | Buah Potong
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
            <h2 class="menu-title">GABUNGAN B</h2>
            <p class="menu-items">
                Nasi Goreng | Telur Mata Sapi | Sate Ayam | Acar | Kerupuk Bawang | Es Teh Manis | Puding Coklat
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
            <h2 class="menu-title">GABUNGAN C</h2>
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
            <h2 class="menu-title">GABUNGAN D</h2>
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
            <h2 class="menu-title">GABUNGAN E</h2>
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
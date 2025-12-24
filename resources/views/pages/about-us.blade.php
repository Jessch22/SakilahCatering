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
        <img class="about-us-image" src="{{ asset('img/asset/IMG-20250927-WA0074.jpg') }}" alt="Suasana Acara Catering">
        
        <div class="about-us-keterangan">            
            <p class="about-us-isi">
                Sakilah Catering berdiri dengan satu keyakinan: setiap acara spesial layak dirayakan dengan istimewa tanpa harus memberatkan. Berawal dari dapur di Bekasi, layanan kini telah meluas hingga mencakup seluruh area Jakarta, Bogor, Depok, Tangerang, dan Bekasi (Jabodetabek).
            </p>
            <p class="about-us-isi">
                Fokus utama Sakilah Catering adalah menyajikan keseimbangan antara rasa, estetika, dan harga. Kebutuhan klien akan Catering dan Wedding Organizer diterjemahkan melalui perencanaan matang dan eksekusi detail.
            </p>
            <p class="about-us-isi">
                Tersedia berbagai opsi paket yang dapat disesuaikan dengan anggaran:
            </p>
            <ul class="about-us-list">
                <li>
                    <strong>Catering Service:</strong> Menyajikan menu mulai dari <strong>Rp28.000 per pax</strong>, sudah termasuk set meja prasmanan, alat makan sesuai pax, dessert table, tim waiters, dan dekorasi catering.
                </li>
                <li>
                    <strong>Wedding Organizer:</strong> Paket All-in mulai dari <strong>Rp60 Juta</strong>, segala kebutuhan mulai dari venue, dekorasi, tata rias & busana, dokumentasi, hingga catering sudah tertangani dengan rapi.
                </li>
            </ul>

            <p class="about-us-isi">
                Dedikasi penuh diberikan pada setiap projek untuk memastikan acara berjalan lancar dan meninggalkan kesan mendalam bagi tuan rumah maupun para tamu undangan. Percayakan momen berharga bersama Sakilah Catering.
            </p>
        </div>
    </div>

    <div class="features-section">
        <h2 class="section-title">Kenapa Memilih Kami?</h2>
        <div class="features-grid">
            <div class="feature-card">
                <div class="feature-icon"><i class="fa-solid fa-money-bill-wave"></i></div>
                <h3 class="feature-title">Harga Transparan</h3>
                <p class="feature-desc">Mulai dari 28rb/pax hingga paket All-in 60 Juta. Tanpa biaya tersembunyi.</p>
            </div>
            <div class="feature-card">
                <div class="feature-icon"><i class="fa-solid fa-utensils"></i></div>
                <h3 class="feature-title">Halal & Higienis</h3>
                <p class="feature-desc">Prioritas utama pada kebersihan dapur serta penggunaan bahan baku yang 100% halal.</p>
            </div>
            <div class="feature-card">
                <div class="feature-icon"><i class="fa-solid fa-hand-holding-heart"></i></div>
                <h3 class="feature-title">Pelayanan Prima</h3>
                <p class="feature-desc">Tim berpengalaman yang siap melayani kebutuhan acara dari awal hingga akhir.</p>
            </div>
            <div class="feature-card">
                <div class="feature-icon"><i class="fa-solid fa-map-location-dot"></i></div>
                <h3 class="feature-title">Jangkauan Luas</h3>
                <p class="feature-desc">Siap melayani acara di seluruh wilayah Jabodetabek.</p>
            </div>
        </div>
    </div>

    <div class="map-section">
        <h2 class="section-title">Lokasi Kami</h2>
        <div class="map-container">
            <div class="map-info">
                <p class="about-us-isi">
                    Berbasis di <strong>Bekasi</strong>, Sakilah Catering siap menjangkau lokasi acara Anda di seluruh wilayah Jabodetabek. Jarak bukan halangan untuk menghadirkan hidangan terbaik di meja Anda.
                </p>
                
                <h4 class="about-us-subheading">Melayani Wilayah:</h4>
                <ul class="area-list">
                    <li class="area-badge">Jakarta Timur</li>
                    <li class="area-badge">Jakarta Selatan</li>
                    <li class="area-badge">Jakarta Pusat</li>
                    <li class="area-badge">Jakarta Barat</li>
                    <li class="area-badge">Jakarta Utara</li>
                    <li class="area-badge">Kota Bekasi</li>
                    <li class="area-badge">Kab. Bekasi</li>
                    <li class="area-badge">Depok</li>
                    <li class="area-badge">Bogor</li>
                    <li class="area-badge">Tangerang</li>
                </ul>
            </div>
            
            <div class="map-frame">
                <iframe 
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d247.87187068415398!2d106.94681384558567!3d-6.270315200364007!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e698d007d056607%3A0x87255faeb2c27b34!2sSakilah%20Catering!5e0!3m2!1sid!2sid!4v1766593568049!5m2!1sid!2sid" 
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
        <div class="social-card instagram-card">
            <blockquote class="instagram-media" 
                data-instgrm-permalink="https://www.instagram.com/sakilahcatering/?utm_source=ig_embed&utm_campaign=loading" 
                data-instgrm-version="14">
                <div style="padding:16px;">
                    <a href="https://www.instagram.com/sakilahcatering/?utm_source=ig_embed&utm_campaign=loading" target="_blank" style="text-decoration:none;">
                    Lihat Instagram Sakilah Catering
                    </a>
                </div>
            </blockquote>
        </div>

        <div class="social-card tiktok-card">
            <blockquote class="tiktok-embed" 
                cite="https://www.tiktok.com/@sakilahcatering" 
                data-unique-id="sakilahcatering" 
                data-embed-type="creator" 
                style="max-width: 780px; min-width: 288px;">
                <section>
                    <a target="_blank" href="https://www.tiktok.com/@sakilahcatering?refer=embed">
                    @sakilahcatering
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
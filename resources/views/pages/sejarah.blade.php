@extends('layouts.app')

@section('title', ' Sejarah')

@push('styles')
<link rel="stylesheet" href="{{ asset('css/pages/sejarah.css')}}">
<link rel="stylesheet" href="{{ asset('css/pages/menucard.css')}}">
<link rel="stylesheet" href="{{ asset('css/components/eventcard.css')}}">
<link rel="stylesheet" href="{{ asset('css/components/logomarquee.css')}}">
@endpush

<!-- cuma ganti nama -->
<!-- title hero ambil dari app.blade -->
@section('title-hero', 'Sejarah') 

@section('content')
    <div class="sejarah-section">
        <h2 class="section-title">Sejarah</h2>

        <div class="gallery-container">
            <button class="nav-arrow left-arrow">
                <i class="fas fa-chevron-left"></i>
            </button>
            
            <div class="gallery-wrapper">
                <div class="gallery-item">
                    <img src="https://images.unsplash.com/photo-1587825140708-dfaf72ae4b04?q=80&w=2070" alt="Acara Sejarah 2">
                </div>
                <div class="gallery-item">
                    <img src="https://images.unsplash.com/photo-1587825140708-dfaf72ae4b04?q=80&w=2070" alt="Acara Sejarah 2">
                </div>
                <div class="gallery-item">
                    <img src="https://images.unsplash.com/photo-1587825140708-dfaf72ae4b04?q=80&w=2070" alt="Acara Sejarah 2">
                </div>
                <div class="gallery-item">
                    <img src="https://images.unsplash.com/photo-1587825140708-dfaf72ae4b04?q=80&w=2070" alt="Acara Sejarah 2">
                </div>
            </div>
            
            <button class="nav-arrow right-arrow">
                <i class="fas fa-chevron-right"></i>
            </button>
        </div>

        <div class="text-container">
            <p>
                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud
                exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
            </p>
            <p>
                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud
                exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
            </p>
        </div>
    </div>

    <script src="js/components/sejarah.js" defer></script>
@endsection

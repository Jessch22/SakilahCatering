@extends('layouts.app')

@section('title', 'Visi & Misi Kami')

@push('styles')
<link rel="stylesheet" href="{{ asset('css/pages/visimisi.css')}}">
<link rel="stylesheet" href="{{ asset('css/pages/menucard.css')}}">
<link rel="stylesheet" href="{{ asset('css/components/eventcard.css')}}">
<link rel="stylesheet" href="{{ asset('css/components/logomarquee.css')}}">
@endpush

<!-- cuma ganti nama -->
<!-- title hero ambil dari app.blade -->
@section('title-hero', 'VISI & MISI KAMI') 

@section('content')
    <div class="vm-container">
        <h2 class="vm-title">Visi</h2>
        <p class="vm-text">
            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
        </p>
        <p class="vm-text">
            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
        </p>

        <h2 class="vm-title misi-title">Misi</h2>
        
        <div class="mission-list">
            <div class="mission-item">
                <div class="mission-number">1</div>
                <p>Lorem ipsum dolor sit amet,</p>
            </div>
            <div class="mission-item">
                <div class="mission-number">2</div>
                <p>Lorem ipsum dolor sit amet,</p>
            </div>
            <div class="mission-item">
                <div class="mission-number">3</div>
                <p>Lorem ipsum dolor sit amet,</p>
            </div>
        </div>
    </div>
@endsection

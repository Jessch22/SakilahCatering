@extends('layouts.app')

@section('title', 'Tentang Kami')

@push('styles')
<link rel="stylesheet" href="{{ asset('css/components/logomarquee.css')}}">
<link rel="stylesheet" href="{{ asset('css/pages/aboutus.css')}}">
@endpush

@section('title-hero', 'Tentang Kami')

@section('content')


<div class="about-us-content">
  <img class="about-us-image" src="https://cdn.pixabay.com/photo/2016/11/23/15/48/audience-1853662_1280.jpg" alt="">
  <div class="about-us-keterangan">
    <p class="about-us-isi">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
      Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. </p>
  </div>
</div>

<div class="logo-marquee-content">
  <h2>Klien Kami</h2>
  <x-logo-marquee/>
</div>

@endsection
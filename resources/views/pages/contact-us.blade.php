@extends('layouts.app')

@section('title', 'Kontak Kami')

@push('styles')
<link rel="stylesheet" href="{{ asset('css/pages/contact.css')}}">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
@endpush

@section('title-hero', 'Kontak Kami')

@section('content')


<div class="iframe-container">
  <iframe 
    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d63455.19093671056!2d106.91196857910157!3d-6.270380600000006!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e698d007d056607%3A0x87255faeb2c27b34!2sSakilah%20Catering!5e0!3m2!1sid!2sid!4v1758823367104!5m2!1sid!2sid"
    style="border:0;"
    allowfullscreen=""
    loading="lazy"
    referrerpolicy="no-referrer-when-downgrade"
    class="responsive-map"
  ></iframe>
</div>

<div class="contact-info">
  <div class="contact-row">
    <span class="contact-icon"><i class="fas fa-map-marker-alt"></i></span>
    <span class="contact-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut</span>
  </div>
  <div class="contact-row centered">
    <span class="contact-icon"><i class="fab fa-whatsapp"></i></span>
    <span class="contact-text">081234567890 (Nama)</span>
  </div>
  <div class="contact-row centered">
    <span class="contact-icon"><i class="fas fa-envelope"></i></span>
    <span class="contact-text">Loremipsum@gmail.com</span>
  </div>
</div>

@endsection
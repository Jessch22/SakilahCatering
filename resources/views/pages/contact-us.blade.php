@extends('layouts.app')

@section('title', 'Kontak Kami')

@push('styles')
<link rel="stylesheet" href="{{ asset('css/pages/contact.css')}}">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
@endpush

@section('title-hero', 'Kontak Kami')

@section('content')

<!-- PETA -->
<div class="iframe-container">
  <iframe 
    src="{{ $contact['map_link'] }}"
    style="border:0;"
    allowfullscreen=""
    loading="lazy"
    referrerpolicy="no-referrer-when-downgrade"
    class="responsive-map"
  ></iframe>
</div>

<!-- INFO CONTACT -->
<div class="contact-info">
  
  <!-- ALAMAT -->
  <div class="contact-row">
    <span class="contact-icon"><i class="fas fa-map-marker-alt"></i></span>
    <span class="contact-text">{{ $contact['address'] }}</span>
  </div>

  <!-- WHATSAPP / NO TELP -->
  <div class="contact-row centered">
    <span class="contact-icon"><i class="fab fa-whatsapp"></i></span>
    <span class="contact-text">
        <a href="https://wa.me/62{{ substr($contact['phone'], 1) }}" target="_blank" style="text-decoration: none; color: inherit;">
            {{ $contact['phone'] }} 
            @if(!empty($contact['contact_person']))
                ({{ $contact['contact_person'] }})
            @endif
        </a>
    </span>
  </div>

  <!-- EMAIL -->
  <div class="contact-row centered">
    <span class="contact-icon"><i class="fas fa-envelope"></i></span>
    <span class="contact-text">
        <a href="mailto:{{ $contact['email'] }}" style="text-decoration: none; color: inherit;">
            {{ $contact['email'] }}
        </a>
    </span>
  </div>

</div>

@endsection
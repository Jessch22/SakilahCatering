@extends('layouts.app')

@section('title', 'Layanan Kami')

@push('styles')
<link rel="stylesheet" href="{{ asset('css/pages/service.css')}}">
<link rel="stylesheet" href="{{ asset('css/components/servicecard.css')}}">
@endpush

@section('title-hero', 'Layanan Kami')

@section('content')

<div class="card-container">
    
    @foreach($services as $item)
        <x-service-card 
            :item="$item" 
            :ctaLink="$ctaLink" 
            :ctaText="$ctaText" 
        />
    @endforeach

</div>

@endsection
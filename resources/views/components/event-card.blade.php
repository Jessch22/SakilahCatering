@props(['item'])

@php
    $imgSrc = $item->gambar_event; // Akses pakai -> (Object)
    
    if (\Illuminate\Support\Str::startsWith($imgSrc, 'http')) {
        $finalImage = $imgSrc;
    } elseif (\Illuminate\Support\Str::startsWith($imgSrc, 'img/')) {
        $finalImage = asset($imgSrc);
    } else {
        $finalImage = asset('storage/' . $imgSrc);
    }
@endphp

<div class="event-card">
    <div class="image-wrapper">
        <img src="{{ $finalImage }}" alt="{{ $item->nama_event }}" class="event-image">
        
        <span class="service-badge">{{ $item->jenis_service }}</span>
    </div>
    
    <div class="event-details">
        <h3 class="event-tag">{{ $item->jenis_event }}</h3>
        
        @if(!empty($item->nama_event))
            <p class="event-name">{{ $item->nama_event }}</p>
        @endif

        <h3 class="event-location">
            <i class="fa-solid fa-location-dot"></i> {{ $item->lokasi_event }}
        </h3>
    </div>
</div>
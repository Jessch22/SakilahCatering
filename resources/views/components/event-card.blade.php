@props(['item'])

@php
    $gambar = $item['gambar_event'];
    $isLink = \Illuminate\Support\Str::startsWith($gambar, ['http://', 'https://']);
    $finalSrc = $isLink ? $gambar : asset($gambar);
@endphp

<div class="event-card">
    <div class="image-wrapper">
        <img src="{{ $finalSrc }}" alt="{{ $item['nama_event'] ?? 'Event' }}" class="event-image">
        
        <span class="service-badge">{{ $item['jenis_service'] ?? 'Layanan' }}</span>
    </div>
    
    <div class="event-details">
        <h3 class="event-tag">{{ $item['jenis_event'] }}</h3>
        
        @if(!empty($item['nama_event']))
            <p class="event-name">{{ $item['nama_event'] }}</p>
        @endif

        <h3 class="event-location">
            <i class="fa-solid fa-location-dot"></i> {{ $item['lokasi_event'] }}
        </h3>
    </div>
</div>
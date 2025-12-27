@props(['item', 'ctaLink', 'ctaText'])

@php
    $imageRaw = $item->image;

    if (\Illuminate\Support\Str::startsWith($imageRaw, ['http://', 'https://'])) {
        $finalImage = $imageRaw;
    } elseif (\Illuminate\Support\Str::startsWith($imageRaw, 'img/')) {
        $finalImage = asset($imageRaw);
    } else {
        $finalImage = asset('storage/' . $imageRaw);
    }
@endphp

<div class="service-card">
    <div class="service-card-image" style="background-image: url('{{ $finalImage }}');"></div>
    
    <div class="service-card-content">
        <h2 class="service-title">{{ $item->title }}</h2>
        
        <p class="service-items">
            <strong>{{ $item->price_highlight }}</strong> 
            {{ $item->description }}
        </p>
        
        <div class="cta-container">
            <a href="{{ $ctaLink }}" class="cta-button" target="_blank">
                <i class="fa-brands fa-whatsapp"></i> {{ $ctaText }}
            </a>
        </div>
    </div>
</div>
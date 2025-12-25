@props(['item', 'whatsappLink'])

<div class="card-hover" style="background-image: url('{{ asset($item['image']) }}');">
    <div class="card-content">
        <div class="card-title">{{ $item['title'] }}</div>
        <div class="card-desc">{{ $item['desc'] }}</div>
        
        <a href="{{ $whatsappLink }}&text=Halo%20Sakilah%20Catering,%20saya%20tertarik%20dengan%20{{ urlencode($item['title']) }}" 
           class="card-btn" 
           target="_blank">
            <i class="fa-brands fa-whatsapp"></i> {{ $item['button_text'] }}
        </a>
    </div>
</div>
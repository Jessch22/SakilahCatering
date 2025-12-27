@props(['item', 'whatsappLink'])

@php
    $imagePath = is_array($item) ? $item['image'] : $item->image;
    $bgImage = \Illuminate\Support\Str::startsWith($imagePath, 'img/') 
                ? asset($imagePath) 
                : asset('storage/' . $imagePath);

    $title = is_array($item) ? $item['title'] : $item->title;
    $desc = is_array($item) ? $item['desc'] : $item->desc;
    $btnText = is_array($item) ? $item['button_text'] : $item->button_text;
@endphp

<div class="card-hover" style="background-image: url('{{ $bgImage }}');">
    <div class="card-content">
        <div class="card-title">{{ $title }}</div>
        <div class="card-desc">{{ $desc }}</div>
        
        <a href="{{ $whatsappLink }}?text=Halo%20Sakilah,%20saya%20tertarik%20dengan%20{{ urlencode($title) }}" 
           class="card-btn" target="_blank">
            <i class="fa-brands fa-whatsapp"></i> {{ $btnText }}
        </a>
    </div>
</div>
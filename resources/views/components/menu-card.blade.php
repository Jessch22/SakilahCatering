@props(['item', 'waLink'])

<div class="menu-card {{ $item['is_popular'] ? 'popular' : '' }}">
    
    @if($item['is_popular'])
        <div class="menu-badge">Best Seller</div>
    @endif

    <div class="menu-header">
        <h3 class="menu-title">{{ $item['name'] }}</h3>
        <div class="menu-price">
            <span class="currency">Rp</span>
            <span class="amount">{{ $item['price'] }}</span>
        </div>
        <div class="menu-min-order">Min. Order {{ $item['min_order'] }}</div>
    </div>

    <div class="menu-body">
        <ul class="menu-list">
            @foreach($item['items'] as $list)
                <li>
                    <i class="fa-solid fa-circle-check"></i>
                    <span>{{ $list }}</span>
                </li>
            @endforeach
        </ul>

        <div class="menu-divider">
            <span>Include</span>
        </div>

        <ul class="menu-list include">
            @foreach($item['includes'] as $inc)
                <li>
                    <i class="fa-solid fa-star"></i>
                    <span>{{ $inc }}</span>
                </li>
            @endforeach
        </ul>
    </div>

    <div class="menu-footer">
        <a href="{{ $waLink }}?text=Halo%20Sakilah,%20saya%20tertarik%20dengan%20{{ urlencode($item['name']) }}" target="_blank" class="menu-btn">
            Pesan Sekarang
        </a>
    </div>
</div>
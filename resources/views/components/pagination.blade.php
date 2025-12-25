@if ($paginator->hasPages())
    <nav role="navigation" aria-label="Pagination Navigation" class="custom-pagination">
        
        <!-- Tombol Previous -->
        @if ($paginator->onFirstPage())
            <span class="pagination-btn disabled">
                <i class="fa-solid fa-chevron-left"></i>
            </span>
        @else
            <a href="{{ $paginator->previousPageUrl() }}" rel="prev" class="pagination-btn">
                <i class="fa-solid fa-chevron-left"></i>
            </a>
        @endif

        <!-- Nomor Halaman -->
        <div class="pagination-numbers">
            @foreach ($elements as $element)
                @if (is_string($element))
                    <span class="pagination-dots">{{ $element }}</span>
                @endif
                @if (is_array($element))
                    @foreach ($element as $page => $url)
                        @if ($page == $paginator->currentPage())
                            <span class="pagination-link active">{{ $page }}</span>
                        @else
                            <a href="{{ $url }}" class="pagination-link">{{ $page }}</a>
                        @endif
                    @endforeach
                @endif
            @endforeach
        </div>

        <!-- Tombol Next -->
        @if ($paginator->hasMorePages())
            <a href="{{ $paginator->nextPageUrl() }}" rel="next" class="pagination-btn">
                <i class="fa-solid fa-chevron-right"></i>
            </a>
        @else
            <span class="pagination-btn disabled">
                <i class="fa-solid fa-chevron-right"></i>
            </span>
        @endif
    </nav>
@endif
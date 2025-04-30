@if ($paginator->hasPages())
    <nav>
        {{-- Previous Page Link --}}
        @if ($paginator->onFirstPage())
            <a href="#" class="disabled"><i class="bx bx-chevron-left"></i></a>
        @else
            <a href="{{ $paginator->previousPageUrl() }}"><i class="bx bx-chevron-left"></i></a>
        @endif

        {{-- Pagination Elements --}}
        @foreach ($elements as $element)
            {{-- "Three Dots" Separator --}}
            @if (is_string($element))
                <a href="#" class="disabled">{{ $element }}</a>
            @endif

            {{-- Array Of Links --}}
            @if (is_array($element))
                @foreach ($element as $page => $url)
                    @if ($page == $paginator->currentPage())
                        <a href="#" class="active">{{ $page }}</a>
                    @else
                        <a href="{{ $url }}">{{ $page }}</a>
                    @endif
                @endforeach
            @endif
        @endforeach

        {{-- Next Page Link --}}
        @if ($paginator->hasMorePages())
            <a href="{{ $paginator->nextPageUrl() }}"><i class="bx bx-chevron-right"></i></a>
        @else
            <a href="#" class="disabled"><i class="bx bx-chevron-right"></i></a>
        @endif
    </nav>
@endif

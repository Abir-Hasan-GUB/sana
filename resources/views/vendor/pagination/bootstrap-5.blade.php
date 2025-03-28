@if ($paginator->hasPages())
    <style>
        .pagination .page-item.active .page-link {
            background-color: #605DFF !important;
            color: #fff;
        }

        .pagination .page-item.disabled .page-link {
            background-color: #ccc !important;
            color: #fff;
        }
    </style>
    <nav aria-label="Page navigation">

        <ul class="pagination mb-0 justify-content-center">
            {{-- Previous Page Link --}}
            @if ($paginator->onFirstPage())
                <li class="page-item disabled">
                    <span class="page-link icon"><i class="material-symbols-outlined">keyboard_arrow_left</i></span>
                </li>
            @else
                <li class="page-item">
                    <a class="page-link icon" href="{{ $paginator->previousPageUrl() }}" aria-label="Previous">
                        <i class="material-symbols-outlined">keyboard_arrow_left</i>
                    </a>
                </li>
            @endif

            {{-- Pagination Elements --}}
            @foreach ($elements as $element)
                @if (is_string($element))
                    <li class="page-item disabled"><span class="page-link">{{ $element }}</span></li>
                @endif

                @if (is_array($element))
                    @foreach ($element as $page => $url)
                        @if ($page == $paginator->currentPage())
                            <li class="page-item active"><span class="page-link">{{ $page }}</span></li>
                        @else
                            <li class="page-item"><a class="page-link"
                                    href="{{ $url }}">{{ $page }}</a></li>
                        @endif
                    @endforeach
                @endif
            @endforeach

            {{-- Next Page Link --}}
            @if ($paginator->hasMorePages())
                <li class="page-item">
                    <a class="page-link icon" href="{{ $paginator->nextPageUrl() }}" aria-label="Next">
                        <i class="material-symbols-outlined">keyboard_arrow_right</i>
                    </a>
                </li>
            @else
                <li class="page-item disabled">
                    <span class="page-link icon"><i class="material-symbols-outlined">keyboard_arrow_right</i></span>
                </li>
            @endif
        </ul>
    </nav>
@endif

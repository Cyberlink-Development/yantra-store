<!-- Pagination -->
@if($paginator->hasPages())
    <nav class="d-flex justify-content-between pt-2" aria-label="Page navigation">
        <ul class="pagination">
            @if ($paginator->onFirstPage())
                <li class="page-item disabled">
                    <span class="page-link"><i class="czi-arrow-left mr-2"></i>Prev</span>
                </li>
            @else
                <li class="page-item">
                    <a class="page-link" href="{{ $paginator->previousPageUrl() }}">
                        <i class="czi-arrow-left mr-2"></i>Prev
                    </a>
                </li>
            @endif
        </ul>
        <ul class="pagination">
            {{-- Mobile view: current/total --}}
            <li class="page-item d-sm-none">
                <span class="page-link page-link-static">
                    {{ $paginator->currentPage() }} / {{ $paginator->lastPage() }}
                </span>
            </li>

            {{-- Desktop view: individual page numbers --}}
            @foreach ($elements as $element)
                {{-- Dots (when many pages) --}}
                @if (is_string($element))
                    <li class="page-item disabled d-none d-sm-block">
                        <span class="page-link">{{ $element }}</span>
                    </li>
                @endif

                {{-- Page numbers --}}
                @if (is_array($element))
                    @foreach ($element as $page => $url)
                        @if ($page == $paginator->currentPage())
                            <li class="page-item active d-none d-sm-block" aria-current="page">
                                <span class="page-link">{{ $page }}</span>
                            </li>
                        @else
                            <li class="page-item d-none d-sm-block">
                                <a class="page-link" href="{{ $url }}">{{ $page }}</a>
                            </li>
                        @endif
                    @endforeach
                @endif
            @endforeach
        </ul>
        <ul class="pagination">
            @if ($paginator->hasMorePages())
                <li class="page-item">
                    <a class="page-link" href="{{ $paginator->nextPageUrl() }}">
                        Next<i class="czi-arrow-right ml-2"></i>
                    </a>
                </li>
            @else
                <li class="page-item disabled">
                    <span class="page-link">Next<i class="czi-arrow-right ml-2"></i></span>
                </li>
            @endif
        </ul>
    </nav>
@endif
<!---------------->

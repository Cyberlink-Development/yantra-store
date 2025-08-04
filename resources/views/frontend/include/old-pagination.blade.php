@if ($paginator->hasPages())
   <div class="uk-margin-large-top">
         <ul class="uk-pagination uk-flex-center uk-margin-remove" uk-margin>
        @if ($paginator->onFirstPage())
          <li><a href="#"><span uk-pagination-previous></span></a></li>
        @else
            <li><a href="{{ $paginator->previousPageUrl() }}" rel="prev" class="prev page-numbers">Prev</a></li>
        @endif

            {{-- Pagination Elements --}}
            @foreach ($elements as $element)
                {{-- "Three Dots" Separator --}}
                @if (is_string($element))
                    <li><span class="pagination-ellipsis"><span>{{ $element }}</span></span></li>
                @endif

                {{-- Array Of Links --}}
                @if (is_array($element))
                    @foreach ($element as $page => $url)
                        @if ($page == $paginator->currentPage())
                            <li><a class="page-numbers current">{{ $page }}</a></li>
                        @else
                            <li><a href="{{ $url }}" class="page-numbers">{{ $page }}</a></li>
                        @endif
                    @endforeach
                @endif
            @endforeach

        @if ($paginator->hasMorePages())
           <li> <a class="next page-numbers" href="{{ $paginator->nextPageUrl() }}" rel="next">Next</a></li>
        @else
            <li><a href="#"><span uk-pagination-next></span></a></li>
        @endif 
        </ul>
    </div>
@endif
 
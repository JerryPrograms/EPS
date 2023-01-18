@if ($paginator->hasPages())
    <ul class="pagination">
        {{-- Previous Page Link --}}
        @if ($paginator->onFirstPage())
            <li class="disabled left_icon"><img
                    src="{{asset('engineer_company/assets/images/left.png')}}"/></li>
        @else
            <li class="left_icon"><a href="{{ $paginator->previousPageUrl() }}" rel="prev"><img
                        src="{{asset('engineer_company/assets/images/left.png')}}"/></a></li>
        @endif

        {{-- Pagination Elements --}}
        @foreach ($elements as $element)
            {{-- "Three Dots" Separator --}}
            @if (is_string($element))
                <li class=" disabled"><span class="page-link">{{ $element }}</span></li>
            @endif

            {{-- Array Of Links --}}
            @if (is_array($element))
                @foreach ($element as $page => $url)
                    @if ($page == $paginator->currentPage())
                        <li class="page-item active custom_mar"><span class="page-link">{{ $page }}</span></li>
                    @else
                        <li class="page-item  custom_mar"><a class="page-link" href="{{ $url }}">{{ $page }}</a></li>
                    @endif
                @endforeach
            @endif
        @endforeach

        {{-- Next Page Link --}}
        @if ($paginator->hasMorePages())
            <li class="right_icon custom_mar"><a href="{{ $paginator->nextPageUrl() }}" rel="next"><img
                        src="{{asset('engineer_company/assets/images/right.png')}}"/></a></li>
        @else
            <li class=" right_icon custom_mar disabled"><span><img
                        src="{{asset('engineer_company/assets/images/right.png')}}"/></span></li>
        @endif
    </ul>
@endif

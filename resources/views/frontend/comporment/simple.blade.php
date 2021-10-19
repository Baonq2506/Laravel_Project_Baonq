@if ($paginator->hasPages())
    <nav>
        <ul class="pagination">
            {{-- Previous Page Link --}}
            @if ($paginator->onFirstPage())
                <li class="page-item disabled" aria-disabled="true">
                    {{-- @lang('pagination.previous') --}}
                    <span style="color:red" class="page-link"><i class="fa fa-chevron-circle-left"
                            aria-hidden="true"></i></span>
                </li>
            @else
                <li class="page-item">
                    <a class="page-link" href="{{ $paginator->previousPageUrl() }}" rel="prev"><i
                            class="fa fa-chevron-circle-left" aria-hidden="true"></i></a>
                </li>
            @endif
            {{-- Next Page Link --}}
            @if ($paginator->hasMorePages())
                <li class="page-item">
                    <a class="page-link" href="{{ $paginator->nextPageUrl() }}" rel="next"><i
                            class="fa fa-chevron-circle-right" aria-hidden="true"></i></a>
                </li>
            @else
                <li class="page-item disabled" aria-disabled="true">
                    <span style="color:red" class="page-link">
                        {{-- @lang('pagination.next') --}}
                        <i class="fa fa-chevron-circle-right" aria-hidden="true"></i></span>
                </li>
            @endif
        </ul>
    </nav>
@endif

<div class="pagination-wrapper">
    <!--div class="view-post-of">
        <p>Viewing 8 topics - 1 through 10 (of 342 total)</p>
    </div-->
    <ul class="post-pagination">
        @if ($paginator->onFirstPage())
        <li class="prev-post pegi-disable"><i class="arrow_carrot-left"></i></li>
        @else
        <li class="prev-post pegi-disable"><a href="{{ $paginator->previousPageUrl() }}"><i class="arrow_carrot-left"></i></a>
        </li>
        @endif
        @foreach ($elements as $element)
        <!-- "Three Dots" Separator -->
        @if (is_string($element))
        <li>{{ $element }}</li>
        @endif

        <!-- Array Of Links -->
        @if (is_array($element))
        @foreach ($element as $page => $url)
        @if ($page == $paginator->currentPage())
        <li><a class="active" href="#">{{ $page }}</a></li>
        @else
        <li><a href="{{ $url }}">{{ $page }}</a></li>
        @endif
        @endforeach
        @endif
        @endforeach

        @if ($paginator->hasMorePages())
        <li class="next-post"><a href="{{ $paginator->nextPageUrl() }}"><i class="arrow_carrot-right"></i></a></li>
        @else
        <li class="next-post"><i class="arrow_carrot-right"></i></li>
        @endif
    </ul>
</div>

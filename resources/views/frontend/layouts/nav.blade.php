@foreach ($items as $item)
<li class="nav-item dropdown submenu">
    <a target="{{ $item->target }}" href="@if($item->children->count()) # @else {{ url($item->url) }} @endif" class="nav-link dropdown-toggle" role="button" data-toggle="dropdown"
       aria-haspopup="true" aria-expanded="false">{{ $item->title }}</a>
    @if($item->children->count())
    <i class="arrow_carrot-down_alt2 mobile_dropdown_icon" aria-hidden="true"
       data-toggle="dropdown"></i>
    <ul class="dropdown-menu">
        @foreach($item->children as $subItem)
        <li class="nav-item"><a target="{{ $subItem->target }}" href="@if($subItem->children->count()) # @else {{ url($subItem->url) }} @endif" class="nav-link">{{ $subItem->title }}</a>
        </li>
        @endforeach
    </ul>
    @endif
</li>
@endforeach


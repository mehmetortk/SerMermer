@if($paginator->hasPages())
<ul class="pagination">
    @if($paginator->onFirstPage())
    <li class="page-item disabled"> <a class="page-link"> <span>&laquo;</span></a> </li>
    @else
    <li class="page-item"> <a href="{{$paginator->previousPageUrl()}}" rel="prev" class="page-link"> <span>&laquo;</span> </a> </li>
    @endif

    @foreach($elements as $element)
    @if(is_string($element))
    <li class="page-item disabled"> <a class="page-link"><span> {{$element}}</span></a> </li>
    @endif

    @if(is_array($element))
    @foreach($element as $page=>$url)
    @if($page== $paginator->currentPage())
    <li class="page-item active"> <a class="page-link"> <span> {{$page}} </span> </a> </li>
    @else
    <li class="page-item "> <a class="page-link" href="{{$url}}"> <span> {{$page}} </span> </a> </li>
    @endif
    @endforeach
    @endif
    @endforeach

    @if($paginator->hasMorePages())
    <li class="page-item "> <a class="page-link" href="$paginator->nextPageUrl()"> <span> &raquo;</span> </a> </li>
    @else
    <li class="page-item disabled"><a href="{{$url}}" class="page-link"><span>$page</span></a></li>
    @endif
</ul>
@endif
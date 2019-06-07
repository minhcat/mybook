@if ($paginator->hasPages())
	<ul class="pagination">
		{{-- Previous Page Link --}}
		@if ($paginator->currentPage() == 1)
			<li class="disabled"><span>&laquo;</span></li>
		@else
			<li><a href="{{ $paginator->previousPageUrl() }}" rel="prev">&laquo;</a></li>
		@endif

		{{-- Pagination Elements --}}
		@for ($i = 1; $i <= $paginator->lastPage(); $i++)
			{{-- "Three Dots" Separator --}}
			{{-- <li class="{{ ($paginator->currentPage() == $i) ? ' active' : '' }}">
				<a href="{{ $paginator->url($i) }}">{{ $i }}</a>
			</li> --}}
			@if ($i == $paginator->currentPage())
				<li class="active"><span>{{ $i }}</span></li>
			@elseif (($i == $paginator->currentPage() + 1 || $i == $paginator->currentPage() + 2 || $i == $paginator->currentPage() - 1) || $i == $paginator->lastPage() || $i == 1)
				<li><a href="{{ $paginator->url($i) }}">{{ $i }}</a></li>
			@elseif ($i == $paginator->lastPage() - 1 || $i == $paginator->currentPage() - 2)
				<li class="disabled"><span><i class="fa fa-ellipsis-h"></i></span></li>
			@endif
			{{-- Array Of Links --}}
			
		@endfor

		{{-- Next Page Link --}}
		@if ($paginator->hasMorePages())
			<li><a href="{{ $paginator->nextPageUrl() }}" rel="next">&raquo;</a></li>
		@else
			<li class="disabled"><span>&raquo;</span></li>
		@endif
	</ul>
@endif

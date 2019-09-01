<div class="box {{ ($key == 0) ? 'first': '' }}">
	<div class="header">Truyện Ngẫu Nhiên</div>
	<div class="content">
		@foreach ($random_book as $i => $book)
		<div class="book row {{ ($i == 0) ? 'first' : '' }}">
			<div class="col-lg-3 col-md-4"><a href="{{ url('/detail/book/'.$book->slug) }}"><img src="{{ asset('image/books/'.$book->image.'.jpg') }}" width="60px" height="60px"></a></div>
			<div class="col-lg-9 col-md-8">
				<div class="name"><a href="{{ url('/detail/book/'.$book->slug) }}" data-id="{{ $book->id }}" class="show-popup book">{{ $book->name }}</a></div>
				<div class="info">{!! $book->description !!}</div>
			</div>
		</div>
		@endforeach
	</div>
</div>
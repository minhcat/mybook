<div class="box">
	<div class="header">Bình Luận Mới</div>
	<div class="content">
		@foreach ($new_comment as $key => $comment)
		<div class="user row {{ ($key == 0) ? 'first' : '' }}">
			<div class="col-lg-3 col-md-4"><a href="{{ url('/detail/users/'.$comment->slug) }}"><img src="{{ asset('image/users/'.$comment->image.'.jpg') }}" class="img-circle" width="60px"></a></div>
			<div class="col-lg-9 col-md-8">
				<div class="name"><a href="{{ url('/detail/users/'.$comment->slug) }}" class="show-popup user">{{ $comment->name }}</a> bình luận 
					@if ($comment->page == 'read')
					<a href="{{ url('read/') }}">{{ $comment->page_chap }}</a> - 
					@endif
					<a href="detail-book.html" class="show-popup book">{{ $comment->page_name }}</a>
				</div>
				<div class="info">{{ $comment->content }}</div>
			</div>
		</div>
		@endforeach
	</div>
</div>
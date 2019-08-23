<div class="container">
	<div class="slide" role="toolbar">
		@foreach ($sliders as $slider)
		<div><a href="detail-book.html"><img src="{{ asset('image/sliders/'.$slider->name.'.jpg') }}" alt="" width="100%"></a></div>
		@endforeach
	</div>
</div>
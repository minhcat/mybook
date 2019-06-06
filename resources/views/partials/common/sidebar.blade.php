<div class="sidebar col-lg-3 col-md-3">
	<div class="content">
		@foreach ($sidebar as $key => $box)
			@include('partials.common.sidebar.'.$box)
			
		@endforeach
	</div>
</div>
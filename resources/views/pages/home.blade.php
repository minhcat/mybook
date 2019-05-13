@extends('master')

@section('content')
<section>

	@include('partials.home.slider')

	<div class="main container">
		<div class="row">
			@include('partials.home.listbook')
			
			@include('partials.home.sidebar')
		</div>
	</div>
</section>

<div class="top"><span class="glyphicon glyphicon-chevron-up"></span></div>
@endsection

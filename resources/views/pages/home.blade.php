@extends('master')

@section('content')
<section>

	@include('partials.home.slider')

	<div class="main container">
		<div class="row">
			@include('partials.home.listbook')
			
			@include('partials.common.sidebar')
		</div>
	</div>
</section>

@endsection

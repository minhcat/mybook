@extends('master')

@section('content')
<section>

	@include('home.slider')

	<div class="main container">
		<div class="row">
			@include('home.listbook')
			
			@include('home.sidebar')
		</div>
	</div>
</section>

<div class="top"><span class="glyphicon glyphicon-chevron-up"></span></div>
@endsection

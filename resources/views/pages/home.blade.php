@extends('master')

@section('content')
<section class="page-home">

	@include('partials.home.slider')

	<div class="main container">
		<div class="row">
			@include('partials.home.listbook')
			
			@include('partials.common.sidebar')
		</div>
	</div>
</section>

@endsection

@section('define-footer')
	<script type="text/javascript">
		var flag_url = '{{ asset('/') }}';
	</script>
@endsection

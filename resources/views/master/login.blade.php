@extends('master')

@section('define-header')
	<link rel="stylesheet" type="text/css" href="{{ asset('css/login.css') }}">
@endsection

@section('content')
<section>
	<div class="container">
		<div class="login-form clearfix">
			@yield('main')
			
			@include('partials.login.sidebar')
		</div>
	</div>
</section>
@endsection

@section('define-footer')
	<script type="text/javascript">
		var flag_url = '{{ asset('/') }}';
	</script>
@endsection


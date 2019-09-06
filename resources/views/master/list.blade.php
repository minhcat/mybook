@extends('master')

@section('define-header')
	<link rel="stylesheet" type="text/css" href="{{ asset('css/list.css') }}">
@endsection

@section('content')
<section>
	@include('partials.common.title')

	<div class="main container">
		<div class="row">
			@yield('list')

			@include('partials.common.sidebar')
		</div>
	</div>
</section>
@endsection

@section('define-footer')
	<script type="text/javascript" src="{{ asset('js/list.js') }}"></script>
@endsection


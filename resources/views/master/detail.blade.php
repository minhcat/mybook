@extends('master')

@section('define-header')
	<link rel="stylesheet" type="text/css" href="{{ asset('css/detail.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('css/comment.css') }}">
@endsection

@section('content')
<section>
	@include('partials.common.title')
	<div class="main container notlogin">
		<div class="row">
			@yield('detail')

			@include('partials.common.sidebar')
		</div>
	</div>
</section>
@endsection

@section('define-footer')
	<script type="text/javascript" src="{{ asset('js/select.js') }}"></script>
	<script type="text/javascript" src="{{ asset('js/detail.js') }}"></script>
@endsection

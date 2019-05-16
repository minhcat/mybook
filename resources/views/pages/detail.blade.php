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
			@if ($type == 'book')
				@include('partials.detail.detail-book')

			@elseif ($type == 'author')
				@include('partials.detail.detail-author')

			@elseif ($type == 'character')
				@include('partials.detail.detail-character')

			@endif

			@include('partials.common.sidebar')
		</div>
	</div>
</section>
@endsection

@section('define-footer')
	<script type="text/javascript" src="{{ asset('js/detail.js') }}"></script>
@endsection

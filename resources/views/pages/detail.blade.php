@extends('master')

@section('define-header')
	<link rel="stylesheet" type="text/css" href="css/detail.css">
	<link rel="stylesheet" type="text/css" href="css/comment.css">
@endsection

@section('content')
<section>
	@include('partials.detail.title')
	<div class="main container notlogin">
		<div class="row">
			@include('partials.detail.detail')

			@include('partials.detail.sidebar')
		</div>
	</div>
</section>
@endsection

@section('define-footer')
	<script type="text/javascript" src="jquery/detail.js"></script>
@endsection

@extends('master')

@section('define-header')
	<link rel="stylesheet" type="text/css" href="css/list.css">
@endsection

@section('content')
<section>
	@include('partials.common.title')

	<div class="main container">
		<div class="row">
			@include('partials.list.listbook')
			
			@include('partials.common.sidebar')
		</div>
	</div>
</section>
@endsection

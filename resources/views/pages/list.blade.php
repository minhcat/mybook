@extends('master')

@section('define-header')
	<link rel="stylesheet" type="text/css" href="{{ asset('css/list.css') }}">
@endsection

@section('content')
<section>
	@include('partials.common.title')

	<div class="main container">
		<div class="row">
			@if ($type == 'category')
				@include('partials.list.list-category')
			@elseif ($type == 'view')
				@include('partials.list.list-view')
			@elseif ($type == 'update')
				@include('partials.list.list-update')
			@endif
			
			@include('partials.common.sidebar')
		</div>
	</div>
</section>
@endsection

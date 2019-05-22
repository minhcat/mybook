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
			{{-- @if ($type == 'category')
				@include('partials.list.list-category')

			@elseif ($type == 'view')
				@include('partials.list.list-view')

			@elseif ($type == 'update')
				@include('partials.list.list-update')

			@elseif ($type == 'search')
				@include('partials.list.list-search')

			@elseif ($type == 'comment')
				@include('partials.list.list-comment')

			@elseif ($type == 'completed')
				@include('partials.list.list-completed')

			@elseif ($type == 'process')
				@include('partials.list.list-process')

			@elseif ($type == 'rate')
				@include('partials.list.list-rate')

			@elseif ($type == 'year')
				@include('partials.list.list-year')

			@elseif ($type == 'friend')
				@include('partials.list.list-friend')

			@elseif ($type == 'follow')
				@include('partials.list.list-follow')

			@elseif ($type == 'notification')
				@include('partials.list.list-notification')

			@endif --}}
			
			@include('partials.common.sidebar')
		</div>
	</div>
</section>
@endsection

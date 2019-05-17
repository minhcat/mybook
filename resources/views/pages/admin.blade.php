@extends('admin')

@section('sidebar')

	@if ($type == 'uploader')
		@include('partials.admin.aside.uploader')

	@elseif ($type == 'mod')
		@include('partials.admin.aside.mod')

	@elseif ($type == 'statistic')
		@include('partials.admin.aside.statistic')

	@elseif ($type == 'admin')
		@include('partials.admin.aside.admin')

	@elseif ($type == 'super-admin')
		@include('partials.admin.aside.super-admin')

	@endif

@endsection

@section('content')

	@if ($type == 'uploader')
		@include('partials.admin.content.uploader')

	@elseif ($type == 'mod')
		@include('partials.admin.content.mod')

	@elseif ($type == 'statistic')
		@include('partials.admin.content.statistic')

	@endif

@endsection
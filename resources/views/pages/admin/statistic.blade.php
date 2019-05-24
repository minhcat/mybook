@extends('master.admin')

@section('define-header')
	<link rel="stylesheet" href="{{ asset('css/admin/uploader.css') }}">
	<link rel="stylesheet" href="{{ asset('css/admin/statistic.css') }}">
@endsection

@section('sidebar')
	@include('partials.admin.aside.statistic')
@endsection

@section('content')
	@include('partials.admin.content.statistic')
@endsection

@section('define-footer')
	<!-- ChartJS option -->
	<script src="{{ asset('js/admin/statistic.js') }}"></script>

	<script>
	$(function () {
		CKEDITOR.replace('mail-content', {
			toolbar: [
				[ 'Bold', 'Italic','Underline', '-', 'NumberedList', 'BulletedList', '-', 'Link', 'Unlink' , '-', 'Image', 'Table', '-', 'Scayt'],
				[ 'FontSize', 'TextColor', 'BGColor' ]
			]
		});
	});
	</script>

@endsection
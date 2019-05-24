@extends('master.admin')

@section('define-header')
	<link rel="stylesheet" href="{{ asset('css/admin/mod.css') }}">
@endsection

@section('sidebar')
	@include('partials.admin.aside.mod')
@endsection

@section('content')
	@include('partials.admin.content.mod')
@endsection

@section('define-footer')
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
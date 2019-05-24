@extends('master.admin')

@section('define-header')
	<link rel="stylesheet" href="{{ asset('css/admin/uploader.css') }}">
@endsection

@section('sidebar')
	@include('partials.admin.aside.uploader')
@endsection

@section('content')
	@include('partials.admin.content.uploader')
@endsection

@section('define-footer')
	<script src="{{ asset('js/admin/upload.js') }}"></script>

	<script type="text/javascript">
		$(document).ready(function() {
			$('#datepicker-book-new').datepicker({
				autoclose: true
			});
			$('#datepicker-book-edit').datepicker({
				autoclose: true
			});
			CKEDITOR.replace('book-content', {
				toolbar: [
					[ 'Bold', 'Italic','Underline', '-', 'NumberedList', 'BulletedList', '-', 'Link', 'Unlink' ],
					[ 'FontSize', 'TextColor', 'BGColor' ]
				]
			});
			CKEDITOR.replace('book-content-edit', {
				toolbar: [
					[ 'Bold', 'Italic','Underline', '-', 'NumberedList', 'BulletedList', '-', 'Link', 'Unlink' ],
					[ 'FontSize', 'TextColor', 'BGColor' ]
				]
			});
			CKEDITOR.replace('mail-content', {
				toolbar: [
					[ 'Bold', 'Italic','Underline', '-', 'NumberedList', 'BulletedList', '-', 'Link', 'Unlink' , '-', 'Image', 'Table', '-', 'Scayt'],
					[ 'FontSize', 'TextColor', 'BGColor' ]
				]
			});
		});
	</script>
@endsection
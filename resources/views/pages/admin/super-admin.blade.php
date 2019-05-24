@extends('master.admin')

@section('define-header')
	<!-- DataTables -->
	<link rel="stylesheet" href="{{ asset('css/admin/dataTables.bootstrap.css') }}">
	<!-- My Book -->
	<link rel="stylesheet" href="{{ asset('css/admin/uploader.css') }}">
	<link rel="stylesheet" href="{{ asset('css/admin/admin.css') }}">
@endsection

@section('sidebar')
	@include('partials.admin.aside.super-admin')
@endsection

@section('content')
	@include('partials.admin.content.super-admin')
@endsection

@section('define-footer')
<script src="{{ asset('js/admin/jquery.dataTables.js') }}"></script>
<script src="{{ asset('js/admin/dataTables.bootstrap.js') }}"></script>
<script src="{{ asset('js/admin/select2.full.min.js') }}"></script>
<script>
	$(function () {
		// DataTable
		$('#table-book').DataTable({
			"lengthMenu": [5, 10, 25, 50],
		});
		$('#table-chap').DataTable({
			"lengthMenu": [5, 10, 25, 50],
		});
		$('#table-view').DataTable({
			"lengthMenu": [5, 10, 25, 50],
		});
		$('#table-comment').DataTable({
			"lengthMenu": [5, 10, 25, 50],
		});
		$('#table-like').DataTable({
			"lengthMenu": [5, 10, 25, 50],
		});
		$('#table-follow').DataTable({
			"lengthMenu": [5, 10, 25, 50],
		});
		$('#table-rate').DataTable({
			"lengthMenu": [5, 10, 25, 50],
		});
		$('#table-character').DataTable({
			"lengthMenu": [5, 10, 25, 50],
		});
		$('#table-author').DataTable({
			"lengthMenu": [5, 10, 25, 50],
		});
		$('#table-user').DataTable({
			"lengthMenu": [5, 10, 25, 50],
		});
		$('#table-category').DataTable({
			"lengthMenu": [5, 10, 25, 50],
		});
		$('#table-trans').DataTable({
			"lengthMenu": [5, 10, 25, 50],
		});
		$('#table-approve-book').DataTable({
			"lengthMenu": [5, 10, 25, 50],
		});
		$('#table-approve-user').DataTable({
			"lengthMenu": [5, 10, 25, 50],
		});
		$('#table-book-error').DataTable({
			"lengthMenu": [5, 10, 25, 50],
		});
		$('#table-report').DataTable({
			"lengthMenu": [5, 10, 25, 50],
		});
		$('#table-staff').DataTable({
			"lengthMenu": [5, 10, 25, 50],
		});
		$('#table-book-temporary').DataTable({
			"lengthMenu": [5, 10, 25, 50],
		});
		$('#table-chap-temporary').DataTable({
			"lengthMenu": [5, 10, 25, 50],
		});
		$('#table-character-temporary').DataTable({
			"lengthMenu": [5, 10, 25, 50],
		});
		$('#table-author-temporary').DataTable({
			"lengthMenu": [5, 10, 25, 50],
		});
		$('#table-user-temporary').DataTable({
			"lengthMenu": [5, 10, 25, 50],
		});
		$('#table-category-temporary').DataTable({
			"lengthMenu": [5, 10, 25, 50],
		});
		$('#table-trans-temporary').DataTable({
			"lengthMenu": [5, 10, 25, 50],
		});

		// Datepicker
		$('#character-birthday-new').datepicker({
			autoclose: true
		});
		$('#character-birthday-edit').datepicker({
			autoclose: true
		});
		$('#book-release-edit').datepicker({
			autoclose: true
		});

		// ckeditor
		CKEDITOR.replace('trans-content-new', {
			toolbar: [
				[ 'Bold', 'Italic','Underline', '-', 'NumberedList', 'BulletedList', '-', 'Link', 'Unlink' ],
				[ 'FontSize', 'TextColor', 'BGColor' ]
			]
		});
		CKEDITOR.replace('trans-content-edit', {
			toolbar: [
				[ 'Bold', 'Italic','Underline', '-', 'NumberedList', 'BulletedList', '-', 'Link', 'Unlink' ],
				[ 'FontSize', 'TextColor', 'BGColor' ]
			]
		});
		CKEDITOR.replace('character-content-new', {
			toolbar: [
				[ 'Bold', 'Italic','Underline', '-', 'NumberedList', 'BulletedList', '-', 'Link', 'Unlink' ],
				[ 'FontSize', 'TextColor', 'BGColor' ]
			]
		});
		CKEDITOR.replace('character-content-edit', {
			toolbar: [
				[ 'Bold', 'Italic','Underline', '-', 'NumberedList', 'BulletedList', '-', 'Link', 'Unlink' ],
				[ 'FontSize', 'TextColor', 'BGColor' ]
			]
		});
		CKEDITOR.replace('author-content-new', {
			toolbar: [
				[ 'Bold', 'Italic','Underline', '-', 'NumberedList', 'BulletedList', '-', 'Link', 'Unlink' ],
				[ 'FontSize', 'TextColor', 'BGColor' ]
			]
		});
		CKEDITOR.replace('author-content-edit', {
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
		CKEDITOR.replace('noti-content', {
			toolbar: [
				[ 'Bold', 'Italic','Underline', '-', 'NumberedList', 'BulletedList', '-', 'Link', 'Unlink' ],
				[ 'FontSize', 'TextColor', 'BGColor' ]
			]
		});
	})
</script>
@endsection
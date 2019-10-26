@extends('master.admin')

@section('title')
Super Admin
@endsection

@section('admin-job')
Super Admin
@endsection

@section('define-header')
	<!-- DataTables -->
	<link rel="stylesheet" href="{{ asset('css/admin/dataTables.bootstrap.css') }}">
	<!-- My Book -->
	<link rel="stylesheet" href="{{ asset('css/admin/common.css') }}">
	<link rel="stylesheet" href="{{ asset('css/admin/uploader.css') }}">
	<link rel="stylesheet" href="{{ asset('css/admin/admin.css') }}">
@endsection

@section('sidebar')
	@include('partials.admin.aside.super-admin')
@endsection

@section('content')
	<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
	<!-- Content Header (Page header) -->
	<section class="content-header">
		<h1>
			Super Admin
			<small>Quản trị trang web</small>
		</h1>
	</section>

	<!-- Main content -->
	<section class="content container-fluid">
		@include('partials.admin.content.well')
		<!-- Statistic book control box -->
		@include('partials.admin.content.small.database-book')

		@include('partials.admin.content.small.database-temporary')

		@include('partials.admin.content.small.database-contact')

		<!-- Box -->
		<div class="row">
			<div class="col-xs-12">
				<!-- Database Box -->
				@include('partials.admin.content.list.book.list-book-super-admin')

				@include('partials.admin.content.list.chap.list-chap-super-admin')

				@include('partials.admin.content.list.view.list-view-super-admin')

				@include('partials.admin.content.list.comment.list-comment-super-admin')

				@include('partials.admin.content.list.like.list-like-super-admin')

				@include('partials.admin.content.list.follow.list-follow-super-admin')

				@include('partials.admin.content.list.rate.list-rate-super-admin')

				@include('partials.admin.content.list.character.list-character-super-admin')

				@include('partials.admin.content.list.author.list-author-super-admin')

				@include('partials.admin.content.list.user.list-user-super-admin')

				@include('partials.admin.content.list.category.list-category-super-admin')

				@include('partials.admin.content.list.trans.list-trans-super-admin')

				@include('partials.admin.content.list.book.list-book-temporary')

				@include('partials.admin.content.list.chap.list-chap-temporary')

				@include('partials.admin.content.list.character.list-character-temporary')

				@include('partials.admin.content.list.author.list-author-temporary')

				@include('partials.admin.content.list.user.list-user-temporary')

				@include('partials.admin.content.list.category.list-category-temporary')

				@include('partials.admin.content.list.trans.list-trans-temporary')

				<!-- Add, Edit Box -->
				@include('partials.admin.content.new.new-category')

				@include('partials.admin.content.edit.edit-category')

				@include('partials.admin.content.new.new-trans')

				@include('partials.admin.content.edit.edit-trans')

				@include('partials.admin.content.new.new-character')

				@include('partials.admin.content.edit.edit-character')

				@include('partials.admin.content.new.new-author')

				@include('partials.admin.content.edit.edit-author')

				@include('partials.admin.content.edit.edit-book')

				@include('partials.admin.content.edit.edit-chap')

				<!-- End Add, Edit Box -->

				<!-- Permiss Box -->
				@include('partials.admin.content.list.staff.list-staff-permiss')
				<!-- End Permiss Box -->

				<!-- System Box -->
				@include('partials.admin.content.system.common')

				@include('partials.admin.content.system.index')

				@include('partials.admin.content.system.list')

				@include('partials.admin.content.system.detail')
				<!-- End System Box -->

				<!-- Mail Box -->
				@include('partials.admin.content.system.mail')
				<!-- End Mail Box -->

				<!-- Notification Box -->
				@include('partials.admin.content.system.notification')
				<!-- End Notification Box -->

				<!-- Setting Box -->
				@include('partials.admin.content.system.setting')
				<!-- End Setting Box -->
			</div>
		</div>

		<!-- Modal -->
		@include('partials.admin.content.modal.modal-remove-user-temporary')

		@include('partials.admin.content.modal.modal-remove-user-permanent')

		@include('partials.admin.content.modal.modal-remove-user-all')

		@include('partials.admin.content.modal.modal-remove-category-temporary')

		@include('partials.admin.content.modal.modal-remove-category-permanent')

		@include('partials.admin.content.modal.modal-remove-category-all')

		@include('partials.admin.content.modal.modal-remove-trans-temporary')

		@include('partials.admin.content.modal.modal-remove-trans-permanent')

		@include('partials.admin.content.modal.modal-remove-trans-all')

		@include('partials.admin.content.modal.modal-permiss-super-admin')

		@include('partials.admin.content.modal.modal-remove-character-temporary')

		@include('partials.admin.content.modal.modal-remove-character-permanent')

		@include('partials.admin.content.modal.modal-remove-character-all')

		@include('partials.admin.content.modal.modal-remove-author-temporary')

		@include('partials.admin.content.modal.modal-remove-author-permanent')

		@include('partials.admin.content.modal.modal-remove-author-all')

		@include('partials.admin.content.modal.modal-remove-book-temporary')

		@include('partials.admin.content.modal.modal-remove-book-permanent')

		@include('partials.admin.content.modal.modal-remove-book-all')

		@include('partials.admin.content.modal.modal-remove-chap-temporary')

		@include('partials.admin.content.modal.modal-remove-chap-permanent')

		@include('partials.admin.content.modal.modal-remove-chap-all')

		@include('partials.admin.content.modal.modal-remove-view')

		@include('partials.admin.content.modal.modal-remove-view-all')

		@include('partials.admin.content.modal.modal-remove-comment')

		@include('partials.admin.content.modal.modal-remove-comment-all')

		@include('partials.admin.content.modal.modal-remove-like')

		@include('partials.admin.content.modal.modal-remove-like-all')

		@include('partials.admin.content.modal.modal-remove-follow')

		@include('partials.admin.content.modal.modal-remove-follow-all')

		@include('partials.admin.content.modal.modal-remove-rate')

		@include('partials.admin.content.modal.modal-remove-rate-all')

	</section>
	<!-- /.content -->
</div>
<!-- /.content-wrapper -->
@endsection

@section('define-footer')
<script src="{{ asset('js/admin/super-admin.js') }}"></script>
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
		// CKEDITOR.replace('trans-content-edit', {
		// 	toolbar: [
		// 		[ 'Bold', 'Italic','Underline', '-', 'NumberedList', 'BulletedList', '-', 'Link', 'Unlink' ],
		// 		[ 'FontSize', 'TextColor', 'BGColor' ]
		// 	]
		// });
		CKEDITOR.replace('character-content-new', {
			toolbar: [
				[ 'Bold', 'Italic','Underline', '-', 'NumberedList', 'BulletedList', '-', 'Link', 'Unlink' ],
				[ 'FontSize', 'TextColor', 'BGColor' ]
			]
		});
		// CKEDITOR.replace('character-content-edit', {
		// 	toolbar: [
		// 		[ 'Bold', 'Italic','Underline', '-', 'NumberedList', 'BulletedList', '-', 'Link', 'Unlink' ],
		// 		[ 'FontSize', 'TextColor', 'BGColor' ]
		// 	]
		// });
		// CKEDITOR.replace('author-content-new', {
		// 	toolbar: [
		// 		[ 'Bold', 'Italic','Underline', '-', 'NumberedList', 'BulletedList', '-', 'Link', 'Unlink' ],
		// 		[ 'FontSize', 'TextColor', 'BGColor' ]
		// 	]
		// });
		// CKEDITOR.replace('author-content-edit', {
		// 	toolbar: [
		// 		[ 'Bold', 'Italic','Underline', '-', 'NumberedList', 'BulletedList', '-', 'Link', 'Unlink' ],
		// 		[ 'FontSize', 'TextColor', 'BGColor' ]
		// 	]
		// });
		// CKEDITOR.replace('book-content-edit', {
		// 	toolbar: [
		// 		[ 'Bold', 'Italic','Underline', '-', 'NumberedList', 'BulletedList', '-', 'Link', 'Unlink' ],
		// 		[ 'FontSize', 'TextColor', 'BGColor' ]
		// 	]
		// });
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
	});
	// use echo php because laravel show error utf8 char
	var title_list = [];
	title_list.push('<?php echo $system['list_title_1'] ?>');
	title_list.push('<?php echo $system['list_title_2'] ?>');
	title_list.push('<?php echo $system['list_title_3'] ?>');
	title_list.push('<?php echo $system['list_title_4'] ?>');
	var info_list = [];
	info_list.push('<?php echo $system['list_info_1'] ?>');
	info_list.push('<?php echo $system['list_info_2'] ?>');
	info_list.push('<?php echo $system['list_info_3'] ?>');
	info_list.push('<?php echo $system['list_info_4'] ?>');
	var number_list = [];
	number_list.push('{{ $system['list_number_1'] }}');
	number_list.push('{{ $system['list_number_2'] }}');
	number_list.push('{{ $system['list_number_3'] }}');
	number_list.push('{{ $system['list_number_4'] }}');
	var type_list = [];
	type_list.push('{{ $system['list_type_1'] }}');
	type_list.push('{{ $system['list_type_2'] }}');
	type_list.push('{{ $system['list_type_3'] }}');
	type_list.push('{{ $system['list_type_4'] }}');
	// detail
	var title_detail = [];
	title_detail.push('<?php echo $system['detail_title_1']?>');
	title_detail.push('<?php echo $system['detail_title_2']?>');
	title_detail.push('<?php echo $system['detail_title_3']?>');
	title_detail.push('<?php echo $system['detail_title_4']?>');
	title_detail.push('<?php echo $system['detail_title_5']?>');
	var info_detail = [];
	info_detail.push('<?php echo $system['detail_info_1']?>');
	info_detail.push('<?php echo $system['detail_info_2']?>');
	info_detail.push('<?php echo $system['detail_info_3']?>');
	info_detail.push('<?php echo $system['detail_info_4']?>');
	info_detail.push('<?php echo $system['detail_info_5']?>');
	var type_detail = [];
	type_detail.push('{{ $system['detail_type_1'] }}');
	type_detail.push('{{ $system['detail_type_2'] }}');
	type_detail.push('{{ $system['detail_type_3'] }}');
	type_detail.push('{{ $system['detail_type_4'] }}');
</script>
@endsection
@extends('master.admin')

@section('title')
Uploader
@endsection

@section('admin-job')
Uploader
@endsection

@section('define-header')
	<link rel="stylesheet" href="{{ asset('css/admin/common.css') }}">
	<link rel="stylesheet" href="{{ asset('css/admin/uploader.css') }}">
	<link rel="stylesheet" href="{{ asset('css/admin/dataTables.bootstrap.css') }}">
@endsection

@section('sidebar')
	@include('partials.admin.aside.uploader')
@endsection

@section('content')
	<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
	<!-- Content Header (Page header) -->
	<section class="content-header">
		<h1>
			Uploader
			<small>Đăng truyện, sửa lỗi cho truyện đã đăng</small>
		</h1>
	</section>

	<!-- Main content -->
	<section class="content container-fluid">
		@include('partials.admin.content.well')
		<!-- Statistic control box -->
		@include('partials.admin.content.small.statistic-contant')

		@include('partials.admin.content.small.box-mail')

		<!-- Box -->
		<div class="row">
			<div class="col-xs-12">
				<!-- list book -->
				@include('partials.admin.content.list.book.list-book-upload')

				<!-- book new -->
				@include('partials.admin.content.new.new-book')

				<!-- list book not approved -->
				@include('partials.admin.content.list.book.list-book-not-approved')

				<!-- list chap not approved -->
				@include('partials.admin.content.list.chap.list-chap-not-approved')

				<!-- list error book -->
				@include('partials.admin.content.list.book.list-book-error')

				<!-- list error chap -->
				@include('partials.admin.content.list.chap.list-chap-error')

				<!-- Mail Box -->
				@include('partials.admin.content.system.mail')

				@include('partials.admin.content.list.system.list-mail-receive')

				@include('partials.admin.content.list.system.list-mail-send')

				@include('partials.admin.content.detail.detail-mail', ['mails' => $mails_receive])

				@include('partials.admin.content.detail.detail-mail', ['mails' => $mails_send])
				<!-- End Mail Box -->

				<!-- Setting Box -->
				@include('partials.admin.content.system.setting')
				<!-- End Setting Box -->
			</div>

			<div class="col-xs-9">
				<!-- book detail -->
				@include('partials.admin.content.detail.detail-book')

				<!-- author detail -->
				@include('partials.admin.content.detail.detail-author')

				<!-- character detail -->
				@include('partials.admin.content.detail.detail-character')

				<!-- trans detail -->
				@include('partials.admin.content.detail.detail-trans')

				<!-- book chap new -->
				@include('partials.admin.content.new.new-chap')

				<!-- author new -->
				@include('partials.admin.content.new.new-author')

				<!-- character new -->
				@include('partials.admin.content.new.new-character')

				<!-- trans new -->
				@include('partials.admin.content.new.new-trans')

				<!-- book edit -->
				@include('partials.admin.content.edit.edit-book')

				<!-- author edit -->
				@include('partials.admin.content.edit.edit-author')

				<!-- character edit -->
				@include('partials.admin.content.edit.edit-character')

				<!-- trans edit -->
				@include('partials.admin.content.edit.edit-trans')

				<!-- book detail not approved-->
				@include('partials.admin.content.detail.detail-book-not-approved')

				<!-- book detail error-->
				@include('partials.admin.content.detail.detail-book-error')

				<!-- chap list -->
				@include('partials.admin.content.list.chap.list-chap')

				<!-- chap edit -->
				@include('partials.admin.content.edit.edit-chap')

				<!-- user contact -->
				@include('partials.admin.content.comment.comment-new-book')

				<!-- statistic contant book -->
				@include('partials.admin.content.statistic.statistic-book-view')

				@include('partials.admin.content.statistic.statistic-book-like')

				@include('partials.admin.content.statistic.statistic-book-comment')

				@include('partials.admin.content.statistic.statistic-book-follow')

				@include('partials.admin.content.statistic.statistic-book-rate')
			</div>

			<div class="col-xs-3">
				<!-- list book small -->
				@include('partials.admin.content.list.book.list-book-upload-small')

				<!-- list book not approved small -->
				@include('partials.admin.content.list.book.list-book-not-approved-small')

				<!-- list book error small -->
				@include('partials.admin.content.list.book.list-book-error-small')

				<!-- list book small -->
				@include('partials.admin.content.list.book.list-book-mine-small')

				<!-- list book small statistaic -->
				@include('partials.admin.content.list.book.list-book-mine-button-small')

				<!-- list book small statistaic rate -->
				@include('partials.admin.content.list.book.list-book-mine-rate-small')

				<!-- list book comment small -->
				@include('partials.admin.content.list.book.list-book-small-comment')

				<!-- list author small -->
				@include('partials.admin.content.list.author.list-author-small')

				<!-- list character small -->
				@include('partials.admin.content.list.character.list-character-small')

				<!-- list trans small -->
				@include('partials.admin.content.list.trans.list-trans-small')
			</div>
		</div>

		<!-- Modal -->
		@include('partials.admin.content.modal.modal-new-keyword')

		@include('partials.admin.content.modal.modal-remove-book')

		@include('partials.admin.content.modal.modal-remove-author')

		@include('partials.admin.content.modal.modal-remove-chap')

		@include('partials.admin.content.modal.modal-remove-character')

		@include('partials.admin.content.modal.modal-remove-trans')

	</section>
	<!-- /.content -->
</div>
<!-- /.content-wrapper -->
@endsection

@section('define-footer')
	<script src="{{ asset('js/admin/jquery.dataTables.js') }}"></script>
	<script src="{{ asset('js/admin/dataTables.bootstrap.js') }}"></script>
	<script src="/vendor/unisharp/laravel-ckeditor/ckeditor.js"></script>

	<script type="text/javascript">
		$(document).ready(function() {
			$('#datepicker-book-new').datepicker({
				autoclose: true
			});
			$('.datepicker-book-edit').datepicker({
				autoclose: true
			});
			$('#datepicker-char-new').datepicker({
				autoclose: true
			});
			$('.datepicker-char-edit').datepicker({
				autoclose: true
			});
			$('#table-book-upload').DataTable({
				"lengthMenu": [5, 10, 25, 50],
			});
			$('#table-book-approved').DataTable({
				"lengthMenu": [5, 10, 25, 50],
			});
			$('#table-chap-approved').DataTable({
				"lengthMenu": [5, 10, 25, 50],
			});
			$('#table-book-error').DataTable({
				"lengthMenu": [5, 10, 25, 50],
			});
			$('#table-chap-error').DataTable({
				"lengthMenu": [5, 10, 25, 50],
			});
			$('.table-chap').DataTable({
				"lengthMenu": [5, 10, 25, 50],
			});
			$('#table-mail-receive').DataTable({
				"lengthMenu": [5, 10, 25, 50],
			});
			$('#table-mail-send').DataTable({
				"lengthMenu": [5, 10, 25, 50],
			});
			$('#table-noti-receive').DataTable({
				"lengthMenu": [5, 10, 25, 50],
			});
			$('#table-noti-send').DataTable({
				"lengthMenu": [5, 10, 25, 50],
			});
			$('#table-book-upload-small').DataTable({
				"lengthMenu": [8],
				"lengthChange": false,
				"searching": false,
				"pagingType": "numbers",
				"info": false,
			});
			$('#table-author-small').DataTable({
				"lengthMenu": [8],
				"lengthChange": false,
				"searching": false,
				"pagingType": "numbers",
				"info": false,
			});
			$('#table-character-small').DataTable({
				"lengthMenu": [8],
				"lengthChange": false,
				"searching": false,
				"pagingType": "numbers",
				"info": false,
			});
			$('#table-trans-small').DataTable({
				"lengthMenu": [8],
				"lengthChange": false,
				"searching": false,
				"pagingType": "numbers",
				"info": false,
			});
			$('#table-book-comment-small').DataTable({
				"lengthMenu": [8],
				"lengthChange": false,
				"searching": false,
				"pagingType": "numbers",
				"info": false,
			});
			$('#table-statistic-button-small').DataTable({
				"lengthMenu": [5],
				"lengthChange": false,
				"searching": false,
				"pagingType": "numbers",
				"info": false,
			});
			$('#table-statistic-small').DataTable({
				"lengthMenu": [8],
				"lengthChange": false,
				"searching": false,
				"pagingType": "numbers",
				"info": false,
			});
			CKEDITOR.replace('book-content', {
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
			CKEDITOR.replace('author-content', {
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
			CKEDITOR.replace('trans-content-new', {
				toolbar: [
					[ 'Bold', 'Italic','Underline', '-', 'NumberedList', 'BulletedList', '-', 'Link', 'Unlink' ],
					[ 'FontSize', 'TextColor', 'BGColor' ]
				]
			});
			$('.book-content-edit').each(function() {
				CKEDITOR.replace($(this).attr('id'), {
					toolbar: [
						[ 'Bold', 'Italic','Underline', '-', 'NumberedList', 'BulletedList', '-', 'Link', 'Unlink' ],
						[ 'FontSize', 'TextColor', 'BGColor' ]
					]
				});
			});
			$('.author-content-edit').each(function() {
				CKEDITOR.replace($(this).attr('id'), {
					toolbar: [
						[ 'Bold', 'Italic','Underline', '-', 'NumberedList', 'BulletedList', '-', 'Link', 'Unlink' ],
						[ 'FontSize', 'TextColor', 'BGColor' ]
					]
				});
			});
			$('.character-content-edit').each(function() {
				CKEDITOR.replace($(this).attr('id'), {
					toolbar: [
						[ 'Bold', 'Italic','Underline', '-', 'NumberedList', 'BulletedList', '-', 'Link', 'Unlink' ],
						[ 'FontSize', 'TextColor', 'BGColor' ]
					]
				});
			});
			$('.trans-content-edit').each(function() {
				CKEDITOR.replace($(this).attr('id'), {
					toolbar: [
						[ 'Bold', 'Italic','Underline', '-', 'NumberedList', 'BulletedList', '-', 'Link', 'Unlink' ],
						[ 'FontSize', 'TextColor', 'BGColor' ]
					]
				});
			});
			
		});
		var lb_name         = new Array();
		var lb_name_all     = new Array();
		var cmd_data        = new Array();
		var cmd_data_all    = new Array();
		var view_data       = new Array();
		var view_data_all   = new Array();
		var like_data       = new Array();
		var like_data_all   = new Array();
		var follow_data     = new Array();
		var follow_data_all = new Array();
		var rate_data       = new Array();
		var rate_data_all   = new Array();
		@foreach ($books_upload as $key => $book)
			@if ($key <= 4)
				lb_name.push('{{ $book->name }}');
				cmd_data.push('{{ $book->comment }}');
				view_data.push('{{ $book->view }}');
				like_data.push('{{ $book->like }}');
				follow_data.push('{{ $book->follow }}');
			@endif
			lb_name_all.push('{{ $book->name }}');
			cmd_data_all.push('{{ $book->comment }}');
			view_data_all.push('{{ $book->view }}');
			like_data_all.push('{{ $book->like }}');
			follow_data_all.push('{{ $book->follow }}');
			rate_data = new Array();
			@foreach ($book->rates as $rate)
				rate_data.push({{ $rate }});
			@endforeach
			rate_data_all.push(rate_data);
		@endforeach
	</script>
	<script src="{{ asset('js/admin/upload.js') }}"></script>
@endsection
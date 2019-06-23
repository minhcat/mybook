@extends('master.admin')

@section('title')
Uploader
@endsection

@section('define-header')
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

				<!-- chap edit -->
				@include('partials.admin.content.edit.edit-chap')

				<!-- Mail Box -->
				@include('partials.admin.content.system.mail')
				<!-- End Mail Box -->

				<!-- Setting Box -->
				@include('partials.admin.content.system.setting')
				<!-- End Setting Box -->
			</div>

			<div class="col-xs-9">
				<!-- book detail -->
				@include('partials.admin.content.detail.detail-book')

				<!-- book chap new -->
				@include('partials.admin.content.new.new-chap')

				<!-- book edit -->
				@include('partials.admin.content.edit.edit-book')

				<!-- book detail not approved-->
				@include('partials.admin.content.detail.detail-book-not-approved')

				<!-- book detail error-->
				@include('partials.admin.content.detail.detail-book-error')

				<!-- chap list -->
				@include('partials.admin.content.list.chap.list-chap')

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
				@include('partials.admin.content.list.book.list-book-mine-small')
			</div>
		</div>

		<!-- Modal -->
		@include('partials.admin.content.modal.modal-new-keyword')

		@include('partials.admin.content.modal.modal-remove-book')

		@include('partials.admin.content.modal.modal-remove-chap')		
	</section>
	<!-- /.content -->
</div>
<!-- /.content-wrapper -->
@endsection

@section('define-footer')
	<script src="{{ asset('js/admin/upload.js') }}"></script>
	<script src="{{ asset('js/admin/jquery.dataTables.js') }}"></script>
	<script src="{{ asset('js/admin/dataTables.bootstrap.js') }}"></script>

	<script type="text/javascript">
		$(document).ready(function() {
			$('#datepicker-book-new').datepicker({
				autoclose: true
			});
			$('#datepicker-book-edit').datepicker({
				autoclose: true
			});
			$('#table-book-upload').DataTable({
				"lengthMenu": [5, 10, 25, 50],
			});
			$('.table-chap').DataTable({
				"lengthMenu": [5, 10, 25, 50],
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
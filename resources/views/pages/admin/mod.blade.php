@extends('master.admin')

@section('title')
MOD
@endsection

@section('define-header')
	<link rel="stylesheet" href="{{ asset('css/admin/mod.css') }}">
	<link rel="stylesheet" href="{{ asset('css/admin/dataTables.bootstrap.css') }}">
@endsection

@section('sidebar')
	@include('partials.admin.aside.mod')
@endsection

@section('content')
	<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
	<!-- Content Header (Page header) -->
	<section class="content-header">
		<h1>
			MOD 
			<small>Tiếp nhận, kiểm tra báo cáo bình luận trên web</small>
		</h1>
	</section>

	<!-- Main content -->
	<section class="content container-fluid">
		@include('partials.admin.content.well')
		<!-- Box -->
		<div class="row">
			<div class="col-xs-12">
				<!-- Comment Box -->
				@include('partials.admin.content.comment.comment-new')

				@include('partials.admin.content.comment.comment-report')

				@include('partials.admin.content.comment.comment-autocheck')

				@include('partials.admin.content.comment.comment-save')

				<!-- /Comment Box -->

				<!-- User Box -->
				@include('partials.admin.content.list.comment.list-comment-user-follow')

				@include('partials.admin.content.list.comment.list-comment-user-punish')

				@include('partials.admin.content.list.comment.list-comment-user-ban')
				<!-- /User Box -->

				<!-- Book Box -->
				@include('partials.admin.content.list.comment.list-comment-book-follow')
				<!-- /Book Box -->

				@include('partials.admin.content.list.list-checkword')

				<!-- Mail Box -->
				@include('partials.admin.content.system.mail')
				<!-- End Mail Box -->

				<!-- Setting Box -->
				@include('partials.admin.content.system.setting')
				<!-- End Setting Box -->
			</div>

			<!-- Box User Comment in Book Follow -->
			<div class="col-xs-9">
				@include('partials.admin.content.comment.comment-book-follow')
			</div>

			<div class="col-xs-3">
				@include('partials.admin.content.list.comment.list-comment-book-follow-small')
			</div>
		</div>
		<!-- Modal -->
		@include('partials.admin.content.modal.modal-ban-user')

		@include('partials.admin.content.modal.modal-save-comment')

		@include('partials.admin.content.modal.modal-punish-user')

		@include('partials.admin.content.modal.modal-remove-comment-save')

		@include('partials.admin.content.modal.modal-add-checkword')

		@include('partials.admin.content.modal.modal-remove-checkword')

		@include('partials.admin.content.modal.modal-remove-user-punish')

		@include('partials.admin.content.modal.modal-remove-user-ban')

		@include('partials.admin.content.modal.modal-remove-book-follow-comment')
		
	</section>
	<!-- /.content -->
</div>
<!-- /.content-wrapper -->
@endsection

@section('define-footer')
	<script src="{{ asset('js/admin/jquery.dataTables.js') }}"></script>
	<script src="{{ asset('js/admin/dataTables.bootstrap.js') }}"></script>

	<script>
		$(function () {
			$('#table-users-follow').DataTable({
				"lengthMenu": [5, 10, 25, 50],
			});
			$('#table-users-punish').DataTable({
				"lengthMenu": [5, 10, 25, 50],
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
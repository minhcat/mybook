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
		<div class="callout callout-info collapse">
			<h4>Thông Báo!</h4>

			<p>Add the sidebar-collapse class to the body tag to get this layout. You should combine this option with a fixed layout if you have a long sidebar. Doing that will prevent your page content from getting stretched vertically.</p>
		</div>
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
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
	<!-- Content Header (Page header) -->
	<section class="content-header">
		<h1>
			Admin
			<small>Quản trị trang web</small>
		</h1>
	</section>

	<!-- Main content -->
	<section class="content container-fluid">
		@include('partials.admin.content.well')
		<!-- Statistic book control box -->
		@include('partials.admin.content.small.database-book')
		
		@include('partials.admin.content.small.database-contant')

		<!-- Box -->
		<div class="row">
			<div class="col-xs-12">
				<!-- Database Box -->
				@include('partials.admin.content.list.book.list-book-admin')

				@include('partials.admin.content.list.chap.list-chap-admin')

				@include('partials.admin.content.list.view.list-view-admin')

				@include('partials.admin.content.list.like.list-like-admin')

				@include('partials.admin.content.list.comment.list-comment-admin')

				@include('partials.admin.content.list.follow.list-follow-admin')

				@include('partials.admin.content.list.rate.list-rate-admin')

				@include('partials.admin.content.list.character.list-character-admin')

				@include('partials.admin.content.list.author.list-author-admin')

				@include('partials.admin.content.list.user.list-user-admin')

				@include('partials.admin.content.list.category.list-category-admin')

				@include('partials.admin.content.list.trans.list-trans-admin')

				<!-- Add, Edit Box -->
				@include('partials.admin.content.new.new-category')

				@include('partials.admin.content.edit.edit-category')

				@include('partials.admin.content.new.new-trans')

				@include('partials.admin.content.edit.edit-trans')

				@include('partials.admin.content.new.new-character')

				@include('partials.admin.content.edit.edit-character')

				@include('partials.admin.content.new.new-author')

				@include('partials.admin.content.edit.edit-author')
				<!-- End Add, Edit Box -->

				@include('partials.admin.content.list.book.list-book-error')

				@include('partials.admin.content.list.comment.list-comment-report')
				<!-- End Database Box -->

				<!-- Approve Box -->
				@include('partials.admin.content.list.book.list-book-approve')

				@include('partials.admin.content.list.user.list-user-approve')
				<!-- End Approve Box -->

				<!-- Permiss Box -->
				@include('partials.admin.content.list.staff.list-staff-permiss')
				<!-- End Permiss Box -->

				<!-- Timeline Box -->
				@include('partials.admin.content.timeline.timeline-all')
				<!-- End Timeline Box -->

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

			<div class="col-xs-9">
				<!-- Timeline Box -->
				@include('partials.admin.content.timeline.timeline-staff')
				<!-- End Timeline Box -->
			</div>
			<div class="col-xs-3">
				@include('partials.admin.content.list.staff.list-staff-small')
			</div>
		</div>

		<!-- Modal -->
		@include('partials.admin.content.modal.modal-reply')

		@include('partials.admin.content.modal.modal-permiss')

		@include('partials.admin.content.modal.modal-remove-category')

		@include('partials.admin.content.modal.modal-remove-trans')

		@include('partials.admin.content.modal.modal-remove-character')

		@include('partials.admin.content.modal.modal-remove-author')

	</section>
	<!-- /.content -->
</div>
<!-- /.content-wrapper -->
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

		@include('partials.admin.content.small.database-contant')

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
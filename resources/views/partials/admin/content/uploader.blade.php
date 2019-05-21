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
		<div class="callout callout-info collapse">
			<h4>Thông Báo!</h4>

			<p>Add the sidebar-collapse class to the body tag to get this layout. You should combine this option with a fixed layout if you have a long sidebar. Doing that will prevent your page content from getting stretched vertically.</p>
		</div>
		<!-- Statistic control box -->
		@include('partials.admin.content.small.statistic-contant')

		<!-- Box -->
		<div class="row">
			<div class="col-xs-12">
				<!-- list book -->
				@include('partials.admin.content.list.list-book-upload')

				<!-- book new -->
				@include('partials.admin.content.new.new-book')

				<!-- list book not approved -->
				@include('partials.admin.content.list.list-book-not-approved')

				<!-- list chap not approved -->
				@include('partials.admin.content.list.list-chap-not-approved')

				<!-- list error book -->
				@include('partials.admin.content.list.list-book-error')

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
				@include('partials.admin.content.list.list-book-upload-small')

				<!-- list book not approved small -->
				@include('partials.admin.content.list.list-book-not-approved-small')

				<!-- list book error small -->
				@include('partials.admin.content.list.list-book-error-small')

				<!-- list book small -->
				@include('partials.admin.content.list.list-book-mine-small')

				<!-- list book small statistaic -->
				@include('partials.admin.content.list.list-book-mine-button-small')

				<!-- list book small statistaic rate -->
				@include('partials.admin.content.list.list-book-mine-small')
			</div>
		</div>

		<!-- Modal -->
		@include('partials.admin.content.modal.modal-remove-book')

		@include('partials.admin.content.modal.modal-remove-chap')		
	</section>
	<!-- /.content -->
</div>
<!-- /.content-wrapper -->
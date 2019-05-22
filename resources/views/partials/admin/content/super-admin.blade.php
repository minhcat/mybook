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
		<div class="callout callout-info collapse">
			<h4>Thông Báo!</h4>

			<p>Add the sidebar-collapse class to the body tag to get this layout. You should combine this option with a fixed layout if you have a long sidebar. Doing that will prevent your page content from getting stretched vertically.</p>
		</div>
		<!-- Statistic book control box -->
		@include('partials.admin.content.small.database-book')

		@include('partials.admin.content.small.database-temporary')

		@include('partials.admin.content.small.database-contant')

		<!-- Box -->
		<div class="row">
			<div class="col-xs-12">
				<!-- Database Box -->
				@include('partials.admin.content.list.list-book-super-admin')

				@include('partials.admin.content.list.list-chap-super-admin')

				@include('partials.admin.content.list.list-view-super-admin')

				@include('partials.admin.content.list.list-comment-super-admin')

				@include('partials.admin.content.list.list-like-super-admin')

				@include('partials.admin.content.list.list-follow-super-admin')

				@include('partials.admin.content.list.list-rate-super-admin')

				@include('partials.admin.content.list.list-character-super-admin')

				@include('partials.admin.content.list.list-author-super-admin')

				@include('partials.admin.content.list.list-user-super-admin')

				@include('partials.admin.content.list.list-category-super-admin')

				@include('partials.admin.content.list.list-trans-super-admin')

				@include('partials.admin.content.list.list-book-temporary')

				@include('partials.admin.content.list.list-chap-temporary')

				@include('partials.admin.content.list.list-character-temporary')

				@include('partials.admin.content.list.list-author-temporary')

				@include('partials.admin.content.list.list-user-temporary')

				@include('partials.admin.content.list.list-category-temporary')

				@include('partials.admin.content.list.list-trans-temporary')

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
				@include('partials.admin.content.list.list-staff-permiss')
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

		<div class="modal fade remove" id="modal-remove-view">
			<div class="modal-dialog">
				<div class="modal-content">
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span></button>
						<h4 class="modal-title">Xóa Lượt Xem Chap</h4>
					</div>
					<div class="modal-body">
						Bạn có chắc xóa tất cả lượt xem của chap này.
					</div>
					<div class="modal-footer">
						<button type="button" class="btn btn-primary pull-left" data-dismiss="modal">Đồng ý</button>
						<button type="button" class="btn btn-default pull-left" data-dismiss="modal">Hủy</button>
					</div>
				</div>
				<!-- /.modal-content -->
			</div>
			<!-- /.modal-dialog -->
		</div>

		<div class="modal fade remove" id="modal-remove-all-view">
			<div class="modal-dialog">
				<div class="modal-content">
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span></button>
						<h4 class="modal-title">Xóa Tất Cả Lượt Xem</h4>
					</div>
					<div class="modal-body">
						Bạn có chắc xóa tất cả lượt xem.
					</div>
					<div class="modal-footer">
						<button type="button" class="btn btn-primary pull-left" data-dismiss="modal">Đồng ý</button>
						<button type="button" class="btn btn-default pull-left" data-dismiss="modal">Hủy</button>
					</div>
				</div>
				<!-- /.modal-content -->
			</div>
			<!-- /.modal-dialog -->
		</div>

		<div class="modal fade remove" id="modal-remove-comment">
			<div class="modal-dialog">
				<div class="modal-content">
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span></button>
						<h4 class="modal-title">Xóa Bình Luận</h4>
					</div>
					<div class="modal-body">
						Bạn có chắc xóa bình luận này.
					</div>
					<div class="modal-footer">
						<button type="button" class="btn btn-primary pull-left" data-dismiss="modal">Đồng ý</button>
						<button type="button" class="btn btn-default pull-left" data-dismiss="modal">Hủy</button>
					</div>
				</div>
				<!-- /.modal-content -->
			</div>
			<!-- /.modal-dialog -->
		</div>

		<div class="modal fade remove" id="modal-remove-all-comment">
			<div class="modal-dialog">
				<div class="modal-content">
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span></button>
						<h4 class="modal-title">Xóa Tất Cả Bình Luận</h4>
					</div>
					<div class="modal-body">
						Bạn có chắc xóa tất cả bình luận này.
					</div>
					<div class="modal-footer">
						<button type="button" class="btn btn-primary pull-left" data-dismiss="modal">Đồng ý</button>
						<button type="button" class="btn btn-default pull-left" data-dismiss="modal">Hủy</button>
					</div>
				</div>
				<!-- /.modal-content -->
			</div>
			<!-- /.modal-dialog -->
		</div>

		<div class="modal fade remove" id="modal-remove-like">
			<div class="modal-dialog">
				<div class="modal-content">
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span></button>
						<h4 class="modal-title">Xóa Yêu Thích</h4>
					</div>
					<div class="modal-body">
						Bạn có chắc xóa lượt yêu thích này.
					</div>
					<div class="modal-footer">
						<button type="button" class="btn btn-primary pull-left" data-dismiss="modal">Đồng ý</button>
						<button type="button" class="btn btn-default pull-left" data-dismiss="modal">Hủy</button>
					</div>
				</div>
				<!-- /.modal-content -->
			</div>
			<!-- /.modal-dialog -->
		</div>

		<div class="modal fade remove" id="modal-remove-all-like">
			<div class="modal-dialog">
				<div class="modal-content">
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span></button>
						<h4 class="modal-title">Xóa Tất Cả Yêu Thích</h4>
					</div>
					<div class="modal-body">
						Bạn có chắc xóa tất cả lượt yêu thích.
					</div>
					<div class="modal-footer">
						<button type="button" class="btn btn-primary pull-left" data-dismiss="modal">Đồng ý</button>
						<button type="button" class="btn btn-default pull-left" data-dismiss="modal">Hủy</button>
					</div>
				</div>
				<!-- /.modal-content -->
			</div>
			<!-- /.modal-dialog -->
		</div>

		<div class="modal fade remove" id="modal-remove-follow">
			<div class="modal-dialog">
				<div class="modal-content">
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span></button>
						<h4 class="modal-title">Xóa Theo Dõi</h4>
					</div>
					<div class="modal-body">
						Bạn có chắc xóa lượt theo dõi này.
					</div>
					<div class="modal-footer">
						<button type="button" class="btn btn-primary pull-left" data-dismiss="modal">Đồng ý</button>
						<button type="button" class="btn btn-default pull-left" data-dismiss="modal">Hủy</button>
					</div>
				</div>
				<!-- /.modal-content -->
			</div>
			<!-- /.modal-dialog -->
		</div>

		<div class="modal fade remove" id="modal-remove-all-follow">
			<div class="modal-dialog">
				<div class="modal-content">
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span></button>
						<h4 class="modal-title">Xóa Tất Cả Theo Dõi</h4>
					</div>
					<div class="modal-body">
						Bạn có chắc xóa tất cả lượt theo dõi.
					</div>
					<div class="modal-footer">
						<button type="button" class="btn btn-primary pull-left" data-dismiss="modal">Đồng ý</button>
						<button type="button" class="btn btn-default pull-left" data-dismiss="modal">Hủy</button>
					</div>
				</div>
				<!-- /.modal-content -->
			</div>
			<!-- /.modal-dialog -->
		</div>

		<div class="modal fade remove" id="modal-remove-rate">
			<div class="modal-dialog">
				<div class="modal-content">
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span></button>
						<h4 class="modal-title">Xóa Đánh Giá</h4>
					</div>
					<div class="modal-body">
						Bạn có chắc xóa lượt đánh giá này.
					</div>
					<div class="modal-footer">
						<button type="button" class="btn btn-primary pull-left" data-dismiss="modal">Đồng ý</button>
						<button type="button" class="btn btn-default pull-left" data-dismiss="modal">Hủy</button>
					</div>
				</div>
				<!-- /.modal-content -->
			</div>
			<!-- /.modal-dialog -->
		</div>

		<div class="modal fade remove" id="modal-remove-all-rate">
			<div class="modal-dialog">
				<div class="modal-content">
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span></button>
						<h4 class="modal-title">Xóa Tất Cả Đánh Giá</h4>
					</div>
					<div class="modal-body">
						Bạn có chắc xóa tất cả lượt đánh giá.
					</div>
					<div class="modal-footer">
						<button type="button" class="btn btn-primary pull-left" data-dismiss="modal">Đồng ý</button>
						<button type="button" class="btn btn-default pull-left" data-dismiss="modal">Hủy</button>
					</div>
				</div>
				<!-- /.modal-content -->
			</div>
			<!-- /.modal-dialog -->
		</div>

	</section>
	<!-- /.content -->
</div>
<!-- /.content-wrapper -->
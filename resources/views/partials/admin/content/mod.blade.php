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
		<div class="modal fade" id="modal-comment-ban">
			<div class="modal-dialog">
				<div class="modal-content">
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span></button>
						<h4 class="modal-title">Chặn Người Dùng</h4>
					</div>
					<div class="modal-body">
						<p>Bạn có chắc là muốn chặn người dùng này</p>
					</div>
					<div class="modal-footer">
						<button type="button" class="btn btn-default pull-left" data-dismiss="modal">Hủy</button>
						<button type="button" class="btn btn-primary" data-dismiss="modal">Đồng ý</button>
					</div>
				</div>
				<!-- /.modal-content -->
			</div>
			<!-- /.modal-dialog -->
		</div>

		<div class="modal fade" id="modal-comment-save">
			<div class="modal-dialog">
				<div class="modal-content">
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span></button>
						<h4 class="modal-title">Lưu Bình Luận Này</h4>
					</div>
					<div class="modal-body">
						<p>Bình luận đã được lưu vào hệ thống</p>
					</div>
					<div class="modal-footer">
						<button type="button" class="btn btn-default pull-left" data-dismiss="modal">Hủy</button>
						<button type="button" class="btn btn-primary" data-dismiss="modal">Đồng ý</button>
					</div>
				</div>
				<!-- /.modal-content -->
			</div>
			<!-- /.modal-dialog -->
		</div>

		<div class="modal fade" id="modal-comment-punish">
			<div class="modal-dialog">
				<div class="modal-content">
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span></button>
						<h4 class="modal-title">Phạt Người Dùng</h4>
					</div>
					<div class="modal-body">
						<p>Chọn hình thức phạt</p>
						<div class="form-group">
							<div class="radio">
								<label>
									<input type="radio" name="optionsRadios" id="optionsRadios1" value="option1" checked>
									Xóa bình luận
								</label>
							</div>
							<div class="radio">
								<label>
									<input type="radio" name="optionsRadios" id="optionsRadios2" value="option2">
									Cấm bình luận trong 5 ngày
								</label>
							</div>
							<div class="radio">
								<label>
									<input type="radio" name="optionsRadios" id="optionsRadios3" value="option3">
									Cấm bình luận trong 20 ngày
								</label>
							</div>
							<div class="radio">
								<label>
									<input type="radio" name="optionsRadios" id="optionsRadios3" value="option3">
									Cấm bình luận vĩnh viễn
								</label>
							</div>
							<div class="radio">
								<label>
									<input type="radio" name="optionsRadios" id="optionsRadios3" value="option3">
									Cấm đăng nhập trong 40 ngày
								</label>
							</div>
						</div>
					</div>
					<div class="modal-footer">
						<button type="button" class="btn btn-default pull-left" data-dismiss="modal">Hủy</button>
						<button type="button" class="btn btn-primary" data-dismiss="modal">Đồng ý</button>
					</div>
				</div>
				<!-- /.modal-content -->
			</div>
			<!-- /.modal-dialog -->
		</div>

		<div class="modal fade" id="modal-comment-remove">
			<div class="modal-dialog">
				<div class="modal-content">
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span></button>
						<h4 class="modal-title">Xóa Bình Luận Khỏi Danh Sách</h4>
					</div>
					<div class="modal-body">
						<p>Bạn có chắc xóa bình luận khỏi danh sách lưu</p>
					</div>
					<div class="modal-footer">
						<button type="button" class="btn btn-default pull-left" data-dismiss="modal">Hủy</button>
						<button type="button" class="btn btn-primary" data-dismiss="modal">Đồng ý</button>
					</div>
				</div>
				<!-- /.modal-content -->
			</div>
			<!-- /.modal-dialog -->
		</div>

		<div class="modal fade" id="modal-checkword-add">
			<div class="modal-dialog">
				<div class="modal-content">
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span></button>
						<h4 class="modal-title">Thêm Từ Khóa</h4>
					</div>
					<div class="modal-body">
						<div class="form-group">
							<label for="">Từ khóa</label>
							<input type="email" class="form-control" id="" placeholder="Thêm từ khóa">
						</div>
					</div>
					<div class="modal-footer">
						<button type="button" class="btn btn-default pull-left" data-dismiss="modal">Hủy</button>
						<button type="button" class="btn btn-primary" data-dismiss="modal">Đồng ý</button>
					</div>
				</div>
				<!-- /.modal-content -->
			</div>
			<!-- /.modal-dialog -->
		</div>

		<div class="modal fade" id="modal-checkword-remove">
			<div class="modal-dialog">
				<div class="modal-content">
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span></button>
						<h4 class="modal-title">Xóa Từ Khóa</h4>
					</div>
					<div class="modal-body">
						<p>Bạn có chắc muốn xóa từ khóa này</p>
					</div>
					<div class="modal-footer">
						<button type="button" class="btn btn-default pull-left" data-dismiss="modal">Hủy</button>
						<button type="button" class="btn btn-primary" data-dismiss="modal">Đồng ý</button>
					</div>
				</div>
				<!-- /.modal-content -->
			</div>
			<!-- /.modal-dialog -->
		</div>

		<div class="modal fade" id="modal-user-remove-punishlist">
			<div class="modal-dialog">
				<div class="modal-content">
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span></button>
						<h4 class="modal-title">Xóa Khỏi Danh Sách Phạt</h4>
					</div>
					<div class="modal-body">
						<p>Bạn có chắc xóa người dùng này khỏi danh sách phạt</p>
					</div>
					<div class="modal-footer">
						<button type="button" class="btn btn-default pull-left" data-dismiss="modal">Hủy</button>
						<button type="button" class="btn btn-primary" data-dismiss="modal">Đồng ý</button>
					</div>
				</div>
				<!-- /.modal-content -->
			</div>
			<!-- /.modal-dialog -->
		</div>

		<div class="modal fade" id="modal-user-remove-banlist">
			<div class="modal-dialog">
				<div class="modal-content">
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span></button>
						<h4 class="modal-title">Gỡ Chặn</h4>
					</div>
					<div class="modal-body">
						<p>Bạn có chắc xóa người dùng này khỏi danh sách chặn</p>
					</div>
					<div class="modal-footer">
						<button type="button" class="btn btn-default pull-left" data-dismiss="modal">Hủy</button>
						<button type="button" class="btn btn-primary" data-dismiss="modal">Đồng ý</button>
					</div>
				</div>
				<!-- /.modal-content -->
			</div>
			<!-- /.modal-dialog -->
		</div>

		<div class="modal fade" id="modal-book-remove-follow">
			<div class="modal-dialog">
				<div class="modal-content">
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span></button>
						<h4 class="modal-title">Xóa Theo Dõi</h4>
					</div>
					<div class="modal-body">
						<p>Bạn có chắc xóa truyện này khỏi danh sách theo dõi</p>
					</div>
					<div class="modal-footer">
						<button type="button" class="btn btn-default pull-left" data-dismiss="modal">Hủy</button>
						<button type="button" class="btn btn-primary" data-dismiss="modal">Đồng ý</button>
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
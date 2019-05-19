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
				<div class="box box-primary collapse" id="box-mail" aria-expanded="false">
					<div class="box-header with-border">
						<h3 class="box-title">Viết Mail</h3>

						<div class="box-tools pull-right">
							<button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
							</button>
							<button type="button" class="btn btn-box-tool" data-remove="collapse"><i class="fa fa-times"></i></button>
						</div>
					</div>
					<div class="box-body">
						<div class="form-group">
							<label for="name">Tựa Đề</label>
							<input type="text" class="form-control">
						</div>
						<div class="form-group">
							<label for="name">Người Nhận</label>
							<select class="form-control">
								<option>Nguyễn Văn A</option>
								<option>Nguyễn Văn B</option>
								<option>Nguyễn Văn C</option>
								<option>Nguyễn Văn D</option>
								<option>Nguyễn Văn E</option>
							</select>
						</div>
						<div class="form-group">
							<label for="name">Nội Dung</label>
							<textarea class="form-control" name="mail-content" rows="3"></textarea>
						</div>
					</div>
					<div class="box-footer">
						<button class="btn btn-success">Gữi</button>
						<button class="btn btn-default">Hủy</button>
					</div>
				</div>
				<!-- End Mail Box -->

				<!-- Setting Box -->
				<div class="box box-primary collapse" id="box-setting" aria-expanded="false">
					<div class="box-header with-border">
						<h3 class="box-title">Cài Đặt</h3>

						<div class="box-tools pull-right">
							<button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
							</button>
							<button type="button" class="btn btn-box-tool" data-remove="collapse"><i class="fa fa-times"></i></button>
						</div>
					</div>
					<div class="box-body">
						<label for="name">Sidebar</label>
						<div class="checkbox">
							<label for="name">
								<input type="checkbox">
								Small Sidebar
							</label>
						</div>
						<label for="name">Skin</label>
						<div class="form-group">
							<div class="radio">
								<label><input type="radio" name="skin">Skin blue</label>
							</div>
							<div class="radio">
								<label><input type="radio" name="skin">Skin red</label>
							</div>
							<div class="radio">
								<label><input type="radio" name="skin">Skin green</label>
							</div>
							<div class="radio">
								<label><input type="radio" name="skin">Skin purple</label>
							</div>
						</div>
						<div class="form-group">
							<label for="name">Trang Mặc Định</label>
							<select class="form-control">
								<option disabled="disabled">Dữ liệu</option>
								<option>- Truyện</option>
								<option>- Tương tác</option>
								<option>- Người dùng</option>
								<option>- Thể loại</option>
								<option>- Nhóm dịch</option>
								<option disabled="disabled">Danh sách xóa tạm</option>
								<option>- Truyện</option>
								<option>- Người dùng</option>
								<option>- Thể loại</option>
								<option>- Nhóm dịch</option>
								<option disabled="disabled">Hệ thống</option>
								<option>- Cài đặt chung</option>
								<option>- Trang chủ</option>
								<option>- Danh sách truyện</option>
								<option>- Thông tin chi tiết</option>
								<option>Cấp quyền</option>
								<option>Viết mail</option>
								<option>Cài đặt</option>
							</select>
						</div>
						<label for="name">Email</label>
						<div class="form-group">
							<div class="radio">
								<label><input type="radio" name="mail">Luôn nhận mail</label>
							</div>
							<div class="radio">
								<label><input type="radio" name="mail">Chỉ nhận từ admin</label>
							</div>
							<div class="radio">
								<label><input type="radio" name="mail">Không nhận tất cả email</label>
							</div>
						</div>
						<label for="name">Thông Báo</label>
						<div class="form-group">
							<div class="radio">
								<label><input type="radio" name="mail">Luôn nhận thông báo</label>
							</div>
							<div class="radio">
								<label><input type="radio" name="mail">Không nhận thông báo</label>
							</div>
						</div>
					</div>
					<div class="box-footer">
						<button class="btn btn-success">Đồng ý</button>
						<button class="btn btn-default">Hủy</button>
					</div>
				</div>
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
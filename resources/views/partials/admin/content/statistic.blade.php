<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
	<!-- Content Header (Page header) -->
	<section class="content-header">
		<h1>
			Statistician
			<small>Thống kê, đưa ra thông tin cho phát triển trang web</small>
		</h1>
	</section>

	<!-- Main content -->
	<section class="content container-fluid">
		<div class="callout callout-info collapse">
			<h4>Thông Báo!</h4>

			<p>Add the sidebar-collapse class to the body tag to get this layout. You should combine this option with a fixed layout if you have a long sidebar. Doing that will prevent your page content from getting stretched vertically.</p>
		</div>
		<!-- Statistic book control box -->
		@include('partials.admin.content.small.statistic-book')
		<!-- Statistic category control box -->
		@include('partials.admin.content.small.statistic-category')
		<!-- Statistic user control box -->
		@include('partials.admin.content.small.statistic-user')
		<!-- Statistic translator control box -->
		@include('partials.admin.content.small.statistic-trans')

		<!-- Box -->
		<div class="row">
			<div class="col-xs-12">
				@include('partials.admin.content.statistic.statistic-book-all')

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
				<!-- statistic contant book -->
				@include('partials.admin.content.statistic.statistic-book-other')

				@include('partials.admin.content.statistic.statistic-book-time')

				@include('partials.admin.content.statistic.statistic-chap')

				<!-- statistic contant category -->
				@include('partials.admin.content.statistic.statistic-category-other')

				@include('partials.admin.content.statistic.statistic-category-time')

				<!-- statistic contant user -->
				@include('partials.admin.content.statistic.statistic-user-other')

				@include('partials.admin.content.statistic.statistic-user-time')

				<!-- statistic contant translator -->
				@include('partials.admin.content.statistic.statistic-trans-other')

				@include('partials.admin.content.statistic.statistic-trans-time')
			</div>

			<div class="col-xs-3">
				<!-- list book small statistaic -->
				@include('partials.admin.content.list.list-book-button-small')

				<!-- list book small statistaic not button-->
				@include('partials.admin.content.list.list-book-small')

				<!-- list category small statistaic -->
				@include('partials.admin.content.list.list-category-small')

				<!-- list user small statistaic -->
				@include('partials.admin.content.list.list-user-small')

				<!-- list translator small statistaic -->
				@include('partials.admin.content.list.list-trans-small')
			</div>
		</div>

		<!-- Modal -->
		<div class="modal fade rate" id="modal-rate-all">
			<div class="modal-dialog">
				<div class="modal-content">
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span></button>
						<h4 class="modal-title">Chọn Loại Thống Kê</h4>
					</div>
					<div class="modal-body">
						<div class="form-group">
							<div class="radio">
								<label>
								<input type="radio" class="rate sum" name="radio-rate-all" checked="checked">
								Lượt đánh giá
								</label>
							</div>
							<div class="radio">
								<label>
								<input type="radio" class="rate percent" name="radio-rate-all">
								Phần trăm
								</label>
							</div>
						</div>
					</div>
					<div class="modal-footer text-center">
						<button type="button" class="btn btn-primary" data-dismiss="modal">Đồng ý</button>
					</div>
				</div>
				<!-- /.modal-content -->
			</div>
			<!-- /.modal-dialog -->
		</div>

		<div class="modal fade rate" id="modal-rate-item">
			<div class="modal-dialog">
				<div class="modal-content">
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span></button>
						<h4 class="modal-title">Chọn Loại Thống Kê</h4>
					</div>
					<div class="modal-body">
						<div class="form-group">
							<div class="radio">
								<label>
								<input type="radio" class="rate sum" name="radio-rate-item" checked="checked">
								Lượt đánh giá
								</label>
							</div>
							<div class="radio">
								<label>
								<input type="radio" class="rate average" name="radio-rate-item">
								Điểm trung bình
								</label>
							</div>
							<div class="radio">
								<label>
								<input type="radio" class="rate percent" name="radio-rate-item">
								Phần trăm
								</label>
							</div>
						</div>
					</div>
					<div class="modal-footer text-center">
						<button type="button" class="btn btn-primary" data-dismiss="modal">Đồng ý</button>
					</div>
				</div>
				<!-- /.modal-content -->
			</div>
			<!-- /.modal-dialog -->
		</div>

		<div class="modal fade rate" id="modal-rate-time">
			<div class="modal-dialog">
				<div class="modal-content">
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span></button>
						<h4 class="modal-title">Chọn Loại Thống Kê</h4>
					</div>
					<div class="modal-body">
						<div class="form-group">
							<div class="radio">
								<label>
								<input type="radio" class="rate sum" name="radio-rate-time">
								Lượt đánh giá
								</label>
							</div>
							<div class="radio">
								<label>
								<input type="radio" class="rate average" name="radio-rate-time" checked>
								Điểm trung bình
								</label>
							</div>
						</div>
					</div>
					<div class="modal-footer text-center">
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
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
				<div class="box box-primary collapse" id="box-book-chart-cmd" aria-expanded="false">
					<div class="box-header">
						<h3 class="box-title">Thống Kê Bình Luận</h3>

						<div class="box-tools pull-right">
							<button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
							</button>
							<button type="button" class="btn btn-box-tool" data-remove="collapse"><i class="fa fa-times"></i></button>
						</div>
					</div>
					<div class="box-body">
						<div class="box-chart" style="height: 478px">
							<canvas id="cmd-chart"></canvas>
						</div>
					</div>
				</div>

				<div class="box box-primary collapse" id="box-book-chart-view" aria-expanded="false">
					<div class="box-header">
						<h3 class="box-title">Thống Kê Lượt Xem</h3>

						<div class="box-tools pull-right">
							<button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
							</button>
							<button type="button" class="btn btn-box-tool" data-remove="collapse"><i class="fa fa-times"></i></button>
						</div>
					</div>
					<div class="box-body">
						<div class="box-chart" style="height: 478px">
							<canvas id="view-chart"></canvas>
						</div>
					</div>
				</div>

				<div class="box box-primary collapse" id="box-book-chart-like" aria-expanded="false">
					<div class="box-header">
						<h3 class="box-title">Thống Kê Yêu Thích</h3>

						<div class="box-tools pull-right">
							<button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
							</button>
							<button type="button" class="btn btn-box-tool" data-remove="collapse"><i class="fa fa-times"></i></button>
						</div>
					</div>
					<div class="box-body">
						<div class="box-chart" style="height: 478px">
							<canvas id="like-chart"></canvas>
						</div>
					</div>
				</div>

				<div class="box box-primary collapse" id="box-book-chart-follow" aria-expanded="false">
					<div class="box-header">
						<h3 class="box-title">Thống Kê Theo Dõi</h3>

						<div class="box-tools pull-right">
							<button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
							</button>
							<button type="button" class="btn btn-box-tool" data-remove="collapse"><i class="fa fa-times"></i></button>
						</div>
					</div>
					<div class="box-body">
						<div class="box-chart" style="height: 478px">
							<canvas id="follow-chart"></canvas>
						</div>
					</div>
				</div>

				<div class="box box-primary collapse" id="box-book-chart-rate" aria-expanded="false">
					<div class="box-header with-border">
						<h3 class="box-title">Thống Kê Đánh Giá</h3>

						<div class="box-tools pull-right">
							<button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
							</button>
							<button type="button" class="btn btn-box-tool" data-remove="collapse"><i class="fa fa-times"></i></button>
						</div>
					</div>
					<div class="box-body">
						<div class="box-chart" style="height: 478px">
							<canvas id="rate-chart"></canvas>
						</div>
					</div>
				</div>
			</div>

			<div class="col-xs-3">
				<!-- list book small -->
				<div class="box box-primary collapse" id="box-book-list-small" aria-expanded="false">
					<div class="box-header">
						<h3 class="box-title">Truyện Đã Đăng</h3>

						<div class="box-tools pull-right">
							<button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
							</button>
							<button type="button" class="btn btn-box-tool" data-remove="collapse"><i class="fa fa-times"></i></button>
						</div>
					</div>
					<!-- /.box-header -->
					<div class="box-body table-responsive no-padding">
						<table class="table table-hover table-striped">
							<tr>
								<th>Stt</th>
								<th>Tên truyện</th>
							</tr>
							<tr>
								<td>1</td>
								<td>Black Clover</td>
							</tr>
							<tr>
								<td>2</td>
								<td>Attack on Titan</td>
							</tr>
							<tr>
								<td>3</td>
								<td>Kakegurui</td>
							</tr>
							<tr>
								<td>4</td>
								<td>Overlord</td>
							</tr>
							<tr>
								<td>5</td>
								<td>Date A Live</td>
							</tr>
							<tr>
								<td>6</td>
								<td>Fairy Tail</td>									
							</tr>
							<tr>
								<td>7</td>
								<td>Girly Air Force</td>									
							</tr>
							<tr>
								<td>8</td>
								<td>Sword Art Online</td>									
							</tr>
							<tr>
								<td>9</td>
								<td>One Piece</td>									
							</tr>
							<tr>
								<td>10</td>
								<td>Konosuba</td>									
							</tr>
							<tr>
								<td>11</td>
								<td>Classroom Elite</td>									
							</tr>
						</table>
					</div>
					<!-- /.box-body -->
					<div class="box-footer clearfix">
						<ul class="pagination pagination-sm no-margin pull-right">
							<li><a href="#">&laquo;</a></li>
							<li><a href="#">1</a></li>
							<li><a href="#">2</a></li>
							<li><a href="#">3</a></li>
							<li><a href="#">&raquo;</a></li>
						</ul>
					</div>
					<!-- /.box footer -->
				</div>

				<!-- list book not approved small -->
				<div class="box box-primary collapse" id="box-book-list-notapproved-small" aria-expanded="false">
					<div class="box-header">
						<h3 class="box-title">Truyện Chưa Duyệt</h3>

						<div class="box-tools pull-right">
							<button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
							</button>
							<button type="button" class="btn btn-box-tool" data-remove="collapse"><i class="fa fa-times"></i></button>
						</div>
					</div>
					<!-- /.box-header -->
					<div class="box-body table-responsive no-padding">
						<table class="table table-hover table-striped">
							<tr>
								<th>Stt</th>
								<th>Tên truyện</th>
							</tr>
							<tr>
								<td>1</td>
								<td>Black Clover</td>
							</tr>
							<tr>
								<td>2</td>
								<td>Attack on Titan</td>
							</tr>
							<tr>
								<td>3</td>
								<td>Kakegurui</td>
							</tr>
							<tr>
								<td>4</td>
								<td>Overlord</td>
							</tr>
							<tr>
								<td>5</td>
								<td>Date A Live</td>
							</tr>
							<tr>
								<td>6</td>
								<td>Fairy Tail</td>									
							</tr>
							<tr>
								<td>7</td>
								<td>Girly Air Force</td>									
							</tr>
							<tr>
								<td>8</td>
								<td>Sword Art Online</td>									
							</tr>
							<tr>
								<td>9</td>
								<td>One Piece</td>									
							</tr>
							<tr>
								<td>10</td>
								<td>Konosuba</td>									
							</tr>
							<tr>
								<td>11</td>
								<td>Classroom Elite</td>									
							</tr>
						</table>
					</div>
					<!-- /.box-body -->
					<div class="box-footer clearfix">
						<ul class="pagination pagination-sm no-margin pull-right">
							<li><a href="#">&laquo;</a></li>
							<li><a href="#">1</a></li>
							<li><a href="#">2</a></li>
							<li><a href="#">3</a></li>
							<li><a href="#">&raquo;</a></li>
						</ul>
					</div>
					<!-- /.box footer -->
				</div>

				<!-- list book error small -->
				<div class="box box-primary collapse" id="box-book-list-error-small" aria-expanded="false">
					<div class="box-header">
						<h3 class="box-title">Truyện Bị Lỗi</h3>

						<div class="box-tools pull-right">
							<button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
							</button>
							<button type="button" class="btn btn-box-tool" data-remove="collapse"><i class="fa fa-times"></i></button>
						</div>
					</div>
					<!-- /.box-header -->
					<div class="box-body table-responsive no-padding">
						<table class="table table-hover table-striped">
							<tr>
								<th>Stt</th>
								<th>Tên truyện</th>
							</tr>
							<tr>
								<td>1</td>
								<td>Black Clover</td>
							</tr>
							<tr>
								<td>2</td>
								<td>Attack on Titan</td>
							</tr>
							<tr>
								<td>3</td>
								<td>Kakegurui</td>
							</tr>
							<tr>
								<td>4</td>
								<td>Overlord</td>
							</tr>
							<tr>
								<td>5</td>
								<td>Date A Live</td>
							</tr>
							<tr>
								<td>6</td>
								<td>Fairy Tail</td>									
							</tr>
							<tr>
								<td>7</td>
								<td>Girly Air Force</td>									
							</tr>
							<tr>
								<td>8</td>
								<td>Sword Art Online</td>									
							</tr>
							<tr>
								<td>9</td>
								<td>One Piece</td>									
							</tr>
							<tr>
								<td>10</td>
								<td>Konosuba</td>									
							</tr>
							<tr>
								<td>11</td>
								<td>Classroom Elite</td>									
							</tr>
						</table>
					</div>
					<!-- /.box-body -->
					<div class="box-footer clearfix">
						<ul class="pagination pagination-sm no-margin pull-right">
							<li><a href="#">&laquo;</a></li>
							<li><a href="#">1</a></li>
							<li><a href="#">2</a></li>
							<li><a href="#">3</a></li>
							<li><a href="#">&raquo;</a></li>
						</ul>
					</div>
					<!-- /.box footer -->
				</div>

				<!-- list book small -->
				<div class="box box-primary collapse" id="box-book-list-small-2" aria-expanded="false">
					<div class="box-header">
						<h3 class="box-title">Truyện Của Bạn</h3>

						<div class="box-tools pull-right">
							<button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
							</button>
							<button type="button" class="btn btn-box-tool" data-remove="collapse"><i class="fa fa-times"></i></button>
						</div>
					</div>
					<!-- /.box-header -->
					<div class="box-body table-responsive no-padding">
						<table class="table table-hover table-striped">
							<tr>
								<th>Stt</th>
								<th>Tên truyện</th>
							</tr>
							<tr>
								<td>1</td>
								<td>Black Clover</td>
							</tr>
							<tr>
								<td>2</td>
								<td>Attack on Titan</td>
							</tr>
							<tr>
								<td>3</td>
								<td>Kakegurui</td>
							</tr>
							<tr>
								<td>4</td>
								<td>Overlord</td>
							</tr>
							<tr>
								<td>5</td>
								<td>Date A Live</td>
							</tr>
							<tr>
								<td>6</td>
								<td>Fairy Tail</td>									
							</tr>
							<tr>
								<td>7</td>
								<td>Girly Air Force</td>									
							</tr>
							<tr>
								<td>8</td>
								<td>Sword Art Online</td>									
							</tr>
							<tr>
								<td>9</td>
								<td>One Piece</td>									
							</tr>
							<tr>
								<td>10</td>
								<td>Konosuba</td>									
							</tr>
							<tr>
								<td>11</td>
								<td>Classroom Elite</td>									
							</tr>
						</table>
					</div>
					<!-- /.box-body -->
					<div class="box-footer clearfix">
						<ul class="pagination pagination-sm no-margin pull-right">
							<li><a href="#">&laquo;</a></li>
							<li><a href="#">1</a></li>
							<li><a href="#">2</a></li>
							<li><a href="#">3</a></li>
							<li><a href="#">&raquo;</a></li>
						</ul>
					</div>
					<!-- /.box footer -->
				</div>

				<!-- list book small statistaic -->
				<div class="box box-primary collapse" id="box-book-list-small-3" aria-expanded="false">
					<div class="box-header">
						<h3 class="box-title">Truyện Của Bạn</h3>

						<div class="box-tools pull-right">
							<button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
							</button>
							<button type="button" class="btn btn-box-tool" data-remove="collapse"><i class="fa fa-times"></i></button>
						</div>
					</div>
					<!-- /.box-header -->
					<div class="box-body table-responsive no-padding">
						<table class="table table-hover table-striped">
							<tr>
								<th>Stt</th>
								<th>Tên truyện</th>
								<th>Thêm/Xóa</th>
							</tr>
							<tr>
								<td>1</td>
								<td>Black Clover</td>
								<td><button class="btn btn-success">Thêm</button></td>
							</tr>
							<tr>
								<td>2</td>
								<td>Attack on Titan</td>
								<td><button class="btn btn-success">Thêm</button></td>
							</tr>
							<tr>
								<td>3</td>
								<td>Kakegurui</td>
								<td><button class="btn btn-success">Thêm</button></td>
							</tr>
							<tr>
								<td>4</td>
								<td>Overlord</td>
								<td><button class="btn btn-success">Thêm</button></td>
							</tr>
							<tr>
								<td>5</td>
								<td>Date A Live</td>
								<td><button class="btn btn-success">Thêm</button></td>
							</tr>
							<tr>
								<td>6</td>
								<td>Fairy Tail</td>
								<td><button class="btn btn-success">Thêm</button></td>		
							</tr>
							<tr>
								<td>7</td>
								<td>Girly Air Force</td>
								<td><button class="btn btn-success">Thêm</button></td>
							</tr>
							<tr>
								<td>8</td>
								<td>Sword Art Online</td>
								<td><button class="btn btn-success">Thêm</button></td>
							</tr>
						</table>
					</div>
					<!-- /.box-body -->
					<div class="box-footer clearfix">
						<ul class="pagination pagination-sm no-margin pull-right">
							<li><a href="#">&laquo;</a></li>
							<li><a href="#">1</a></li>
							<li><a href="#">2</a></li>
							<li><a href="#">3</a></li>
							<li><a href="#">&raquo;</a></li>
						</ul>
					</div>
					<!-- /.box footer -->
				</div>

				<!-- list book small statistaic rate -->
				<div class="box box-primary collapse" id="box-book-list-small-4" aria-expanded="false">
					<div class="box-header">
						<h3 class="box-title">Truyện Của Bạn</h3>

						<div class="box-tools pull-right">
							<button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
							</button>
							<button type="button" class="btn btn-box-tool" data-remove="collapse"><i class="fa fa-times"></i></button>
						</div>
					</div>
					<!-- /.box-header -->
					<div class="box-body table-responsive no-padding">
						<table class="table table-hover table-striped">
							<tr>
								<th>Stt</th>
								<th>Tên truyện</th>
							</tr>
							<tr>
								<td>1</td>
								<td>Black Clover</td>
							</tr>
							<tr>
								<td>2</td>
								<td>Attack on Titan</td>
							</tr>
							<tr>
								<td>3</td>
								<td>Kakegurui</td>
							</tr>
							<tr>
								<td>4</td>
								<td>Overlord</td>
							</tr>
							<tr>
								<td>5</td>
								<td>Date A Live</td>
							</tr>
							<tr>
								<td>6</td>
								<td>Fairy Tail</td>
							</tr>
							<tr>
								<td>7</td>
								<td>Girly Air Force</td>
							</tr>
							<tr>
								<td>8</td>
								<td>Sword Art Online</td>
							</tr>
						</table>
					</div>
					<!-- /.box-body -->
					<div class="box-footer clearfix">
						<ul class="pagination pagination-sm no-margin pull-right">
							<li><a href="#">&laquo;</a></li>
							<li><a href="#">1</a></li>
							<li><a href="#">2</a></li>
							<li><a href="#">3</a></li>
							<li><a href="#">&raquo;</a></li>
						</ul>
					</div>
					<!-- /.box footer -->
				</div>
			</div>
		</div>

		<!-- Modal -->
		<div class="modal fade" id="modal-keyword-new">
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

		<div class="modal fade" id="modal-remove-book">
			<div class="modal-dialog">
				<div class="modal-content">
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span></button>
						<h4 class="modal-title">Xóa Truyện</h4>
					</div>
					<div class="modal-body">
						<p>Bạn có chắc muốn xóa truyện này</p>
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

		<div class="modal fade" id="modal-remove-chap">
			<div class="modal-dialog">
				<div class="modal-content">
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span></button>
						<h4 class="modal-title">Xóa Chap</h4>
					</div>
					<div class="modal-body">
						<p>Bạn có chắc muốn xóa chap này</p>
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
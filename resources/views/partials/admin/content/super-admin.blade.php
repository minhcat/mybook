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
				<div class="box box-primary collapse" id="box-staff" aria-expanded="false">
					<div class="box-header with-border">
						<h3 class="box-title">Danh Sách Nhân Viên</h3>

						<div class="box-tools pull-right">
							<button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
							</button>
							<button type="button" class="btn btn-box-tool" data-remove="collapse"><i class="fa fa-times"></i></button>
						</div>
					</div>
					<div class="box-body">
						<table id="table-staff" class="table table-bordered table-hover">
							<thead>
								<tr>
									<th>ID</th>
									<th>Tên nhân viên</th>
									<th>Giới tính</th>
									<th>Ngày sinh</th>
									<th>Ngày đăng ký</th>
									<th>Quyền truy cập</th>
									<th class="column-fixed-80">Cấp quyền</th>
								</tr>
							</thead>
							<tbody>
								<tr>
									<td>001</td>
									<td>Nam Nguyễn</td>
									<td>Nam</td>
									<td>12/8/1998</td>
									<td>12/8/2008</td>
									<td><span class="label bg-blue">uploader</span></td>
									<td><button class="btn btn-success" data-toggle="modal" data-target="#modal-permiss">cấp quyền</button></td>
								</tr>
								<tr>
									<td>002</td>
									<td>Nam Nguyễn</td>
									<td>Nam</td>
									<td>12/8/1998</td>
									<td>12/8/2008</td>
									<td><span class="label bg-blue">uploader</span></td>
									<td><button class="btn btn-success" data-toggle="modal" data-target="#modal-permiss">cấp quyền</button></td>
								</tr>
								<tr>
									<td>003</td>
									<td>Thị Hồng</td>
									<td>Nữ</td>
									<td>23/7/1996</td>
									<td>23/7/2016</td>
									<td><span class="label bg-green">mod</span></td>
									<td><button class="btn btn-success" data-toggle="modal" data-target="#modal-permiss">cấp quyền</button></td>
								</tr>
								<tr>
									<td>004</td>
									<td>Thị Hồng</td>
									<td>Nữ</td>
									<td>23/7/1996</td>
									<td>23/7/2016</td>
									<td><span class="label bg-green">mod</span></td>
									<td><button class="btn btn-success" data-toggle="modal" data-target="#modal-permiss">cấp quyền</button></td>
								</tr>
								<tr>
									<td>005</td>
									<td>Bảo Văn</td>
									<td>Nam</td>
									<td>10/5/1994</td>
									<td>10/5/2014</td>
									<td><span class="label bg-red">admin</span></td>
									<td><button class="btn btn-success" data-toggle="modal" data-target="#modal-permiss">cấp quyền</button></td>
								</tr>
								<tr>
									<td>006</td>
									<td>Bảo Văn</td>
									<td>Nam</td>
									<td>10/5/1994</td>
									<td>10/5/2014</td>
									<td><span class="label bg-red">admin</span></td>
									<td><button class="btn btn-success">cấp quyền</button></td>
								</tr>
								<tr>
									<td>007</td>
									<td>Võ Trinh</td>
									<td>Nữ</td>
									<td>3/10/1996</td>
									<td>3/10/2016</td>
									<td><span class="label bg-orange">statistion</span></td>
									<td><button class="btn btn-success">cấp quyền</button></td>
								</tr>
								<tr>
									<td>008</td>
									<td>Võ Trinh</td>
									<td>Nữ</td>
									<td>3/10/1996</td>
									<td>3/10/2016</td>
									<td><span class="label bg-orange">statistion</span></td>
									<td><button class="btn btn-success">cấp quyền</button></td>
								</tr>
								<tr>
									<td>009</td>
									<td>Lê Hữu Thọ</td>
									<td>Nam</td>
									<td>5/9/1994</td>
									<td>5/9/2018</td>
									<td><span class="label bg-red">admin</span></td>
									<td><button class="btn btn-success">cấp quyền</button></td>
								</tr>
								<tr>
									<td>010</td>
									<td>Lê Hữu Thọ</td>
									<td>Nam</td>
									<td>5/9/1994</td>
									<td>5/9/2018</td>
									<td><span class="label bg-red">admin</span></td>
									<td><button class="btn btn-success">cấp quyền</button></td>
								</tr>
								<tr>
									<td>011</td>
									<td>Phạm Khoa</td>
									<td>Nam</td>
									<td>7/7/1995</td>
									<td>7/7/2015</td>
									<td><span class="label bg-blue">uploader</span></td>
									<td><button class="btn btn-success">cấp quyền</button></td>
								</tr>
								<tr>
									<td>012</td>
									<td>Phạm Khoa</td>
									<td>Nam</td>
									<td>7/7/1995</td>
									<td>7/7/2015</td>
									<td><span class="label bg-blue">uploader</span></td>
									<td><button class="btn btn-success">cấp quyền</button></td>
								</tr>
							</tbody>
						</table>
					</div>
				</div>
				<!-- End Permiss Box -->

				<!-- System Box -->
				<div class="box box-primary collapse" id="box-common" aria-expanded="false">
					<div class="box-header with-border">
						<h3 class="box-title">Cài đặt chung</h3>

						<div class="box-tools pull-right">
							<button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
							</button>
							<button type="button" class="btn btn-box-tool" data-remove="collapse"><i class="fa fa-times"></i></button>
						</div>
					</div>
					<div class="box-body">
						<h4>Header</h4>
						<div class="form-group">
							<label for="name">Tên Trang Web</label>
							<input type="text" class="form-control" id="name" value="MyBook">
						</div>
						<div class="form-group">
							<label for="name">Câu Logan</label>
							<input type="text" class="form-control" id="name" value="Luôn cập nhập truyện tranh mới nhất">
						</div>
						<div class="form-group">
							<label for="name">Logo</label>
							<br>
							<img class="header-img" src="img/logo.png" width="100px">
							<br>
							<button class="btn btn-primary">Thay đổi hình</button>
						</div>
						<div class="form-group">
							<label for="name">Hình ảnh</label>
							<br>
							<img class="header-img" src="img/header1.png" width="100px">
							<img class="header-img" src="img/header2.png" width="100px">
							<img class="header-img" src="img/header3.png" width="100px">
							<br>
							<button class="btn btn-primary">Thay đổi hình</button>
						</div>
						<hr>
						<h4>Footer</h4>
						<div class="form-group">
							<label for="name">Link 1</label>
							<div class="row">
								<div class="col-xs-6">
									<input type="text" class="form-control" id="name" placeholder="tên link" value="Truyện Mới Nhất">
								</div>
								<div class="col-xs-6">
									<input type="text" class="form-control" placeholder="link" id="name" value="list-update">
								</div>
							</div>
						</div>
						<div class="form-group">
							<label for="name">Link 2</label>
							<div class="row">
								<div class="col-xs-6">
									<input type="text" class="form-control" id="name" placeholder="tên link" value="Truyện Xem Nhiều">
								</div>
								<div class="col-xs-6">
									<input type="text" class="form-control" placeholder="link" id="name" value="list-view">
								</div>
							</div>
						</div>
						<div class="form-group">
							<label for="name">Link 3</label>
							<div class="row">
								<div class="col-xs-6">
									<input type="text" class="form-control" id="name" placeholder="tên link" value="Truyện Đã Hoàn Thành">
								</div>
								<div class="col-xs-6">
									<input type="text" class="form-control" placeholder="link" id="name" value="list-completed">
								</div>
							</div>
						</div>
						<div class="form-group">
							<label for="name">Thông Tin 1</label>
							<input type="text" class="form-control" placeholder="thông tin 1" id="name" value="Địa chỉ: 123 SD, Quận 1, TP.HCM">
						</div>
						<div class="form-group">
							<label for="name">Thông Tin 2</label>
							<input type="text" class="form-control" placeholder="thông tin 2" id="name" value="Điện thoại: 0909123456">
						</div>
						<div class="form-group">
							<label for="name">Thông Tin 3</label>
							<input type="text" class="form-control" placeholder="thông tin 3" id="name" value="Email: contact@mybook.vn">
						</div>
						<div class="form-group">
							<label for="name">Thông Tin Cuối</label>
							<input type="text" class="form-control" placeholder="thông tin cuối" id="name" value="Copyright © 2018 My Book, All Rights Reserved">
						</div>
					</div>
					<div class="box-footer">
						<button class="btn btn-primary">Thay đổi</button>
						<button class="btn btn-success">Hoàn tác</button>
					</div>
				</div>

				<div class="box box-primary collapse" id="box-index" aria-expanded="false">
					<div class="box-header with-border">
						<h3 class="box-title">Trang Chủ</h3>

						<div class="box-tools pull-right">
							<button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
							</button>
							<button type="button" class="btn btn-box-tool" data-remove="collapse"><i class="fa fa-times"></i></button>
						</div>
					</div>
					<div class="box-body">
						<h4>Main</h4>
						<div class="form-group">
							<label for="name">Số lượng khối</label>
							<select class="form-control number-topic" style="width: 100%;">
								<option>1</option>
								<option>2</option>
								<option>3</option>
								<option selected="selected">4</option>
								<option>5</option>
								<option>6</option>
							</select>
						</div>
						
						<div class="row">
							<div class="col-xs-4">
								<!-- topic 1 -->
								<div class="form-group">
									<label for="name">Tiêu đề khối 1</label>
									<input type="text" class="form-control" id="name" value="Bảng Xếp Hạng">
								</div>
								<!-- topic 2 -->
								<div class="form-group">
									<label for="name">Tiêu đề khối 2</label>
									<input type="text" class="form-control" id="name" value="Bảng Xếp Hạng">
								</div>
								<!-- topic 3 -->
								<div class="form-group">
									<label for="name">Tiêu đề khối 3</label>
									<input type="text" class="form-control" id="name" value="Bảng Xếp Hạng">
								</div>
								<!-- topic 4 -->
								<div class="form-group">
									<label for="name">Tiêu đề khối 4</label>
									<input type="text" class="form-control" id="name" value="Bảng Xếp Hạng">
								</div>
							</div>
							<div class="col-xs-4">
								<!-- topic 1 -->
								<div class="form-group">
									<label for="name">Kiểu khối 1</label>
									<select class="form-control type-topic1" style="width: 100%;">
										<option selected="selected">Topic xếp hạng</option>
										<option>Topic truyện mới</option>
										<option>Topic bình luận</option>
										<option>Topic đánh giá</option>
									</select>
								</div>
								<!-- topic 2 -->
								<div class="form-group">
									<label for="name">Kiểu khối 2</label>
									<select class="form-control type-topic1" style="width: 100%;">
										<option>Topic xếp hạng</option>
										<option selected="selected">Topic truyện mới</option>
										<option>Topic bình luận</option>
										<option>Topic đánh giá</option>
									</select>
								</div>
								<!-- topic 3 -->
								<div class="form-group">
									<label for="name">Kiểu khối 3</label>
									<select class="form-control type-topic1" style="width: 100%;">
										<option>Topic xếp hạng</option>
										<option>Topic truyện mới</option>
										<option selected="selected">Topic bình luận</option>
										<option>Topic đánh giá</option>
									</select>
								</div>
								<!-- topic 4 -->
								<div class="form-group">
									<label for="name">Kiểu khối 4</label>
									<select class="form-control type-topic1" style="width: 100%;">
										<option>Topic xếp hạng</option>
										<option>Topic truyện mới</option>
										<option>Topic bình luận</option>
										<option selected="selected">Topic đánh giá</option>
									</select>
								</div>
							</div>
							<div class="col-xs-4">
								<!-- topic 1 -->
								<div class="form-group">
									<label for="name">Số lượng hiển thị</label>
									<select class="form-control type-topic1" style="width: 100%;">
										<option>4</option>
										<option selected="selected">8</option>
										<option>12</option>
										<option>16</option>
									</select>
								</div>
								<!-- topic 2 -->
								<div class="form-group">
									<label for="name">Số lượng hiển thị</label>
									<select class="form-control type-topic1" style="width: 100%;">
										<option>4</option>
										<option selected="selected">8</option>
										<option>12</option>
										<option>16</option>
									</select>
								</div>
								<!-- topic 3 -->
								<div class="form-group">
									<label for="name">Số lượng hiển thị</label>
									<select class="form-control type-topic1" style="width: 100%;">
										<option>4</option>
										<option selected="selected">8</option>
										<option>12</option>
										<option>16</option>
									</select>
								</div>
								<!-- topic 4 -->
								<div class="form-group">
									<label for="name">Số lượng hiển thị</label>
									<select class="form-control type-topic1" style="width: 100%;">
										<option>4</option>
										<option selected="selected">8</option>
										<option>12</option>
										<option>16</option>
									</select>
								</div>
							</div>
						</div>
						<hr>
						<h4>Sidebar</h4>
						<div class="form-group">
							<label for="name">Số lượng khối</label>
							<select class="form-control number-topic" style="width: 100%;">
								<option>1</option>
								<option>2</option>
								<option>3</option>
								<option>4</option>
								<option selected="selected">5</option>
								<option>6</option>
							</select>
						</div>
						<div class="row">
							<div class="col-xs-6">
								<div class="form-group">
									<label for="name">Kiểu khối 1</label>
									<select class="form-control type-topic1" style="width: 100%;">
										<option selected="selected">Top View</option>
										<option>truyện ngẫu nhiên</option>
										<option>bình luận mới</option>
										<option>facebook</option>
										<option>quảng cáo</option>
									</select>
								</div>
								<div class="form-group">
									<label for="name">Kiểu khối 2</label>
									<select class="form-control type-topic1" style="width: 100%;">
										<option>Top View</option>
										<option selected="selected">truyện ngẫu nhiên</option>
										<option>bình luận mới</option>
										<option>facebook</option>
										<option>quảng cáo</option>
									</select>
								</div>
								<div class="form-group">
									<label for="name">Kiểu khối 3</label>
									<select class="form-control type-topic1" style="width: 100%;">
										<option>Top View</option>
										<option>truyện ngẫu nhiên</option>
										<option selected="selected">bình luận mới</option>
										<option>facebook</option>
										<option>quảng cáo</option>
									</select>
								</div>
								<div class="form-group">
									<label for="name">Kiểu khối 4</label>
									<select class="form-control type-topic1" style="width: 100%;">
										<option>Top View</option>
										<option>truyện ngẫu nhiên</option>
										<option>bình luận mới</option>
										<option selected="selected">facebook</option>
										<option>quảng cáo</option>
									</select>
								</div>
								<div class="form-group">
									<label for="name">Kiểu khối 5</label>
									<select class="form-control type-topic1" style="width: 100%;">
										<option>Top View</option>
										<option>truyện ngẫu nhiên</option>
										<option>bình luận mới</option>
										<option>facebook</option>
										<option selected="selected">quảng cáo</option>
									</select>
								</div>
							</div>
							<div class="col-xs-6">
								<div class="form-group">
									<label for="name">Số lượng hiển thị</label>
									<select class="form-control number-topic" style="width: 100%;">
										<option>1</option>
										<option>2</option>
										<option>3</option>
										<option>4</option>
										<option>5</option>
										<option selected="selected">6</option>
									</select>
								</div>
								<div class="form-group">
									<label for="name">Số lượng hiển thị</label>
									<select class="form-control number-topic" style="width: 100%;">
										<option>1</option>
										<option>2</option>
										<option>3</option>
										<option>4</option>
										<option>5</option>
										<option selected="selected">6</option>
									</select>
								</div>
								<div class="form-group">
									<label for="name">Số lượng hiển thị</label>
									<select class="form-control number-topic" style="width: 100%;">
										<option>1</option>
										<option>2</option>
										<option>3</option>
										<option>4</option>
										<option>5</option>
										<option selected="selected">6</option>
									</select>
								</div>
								<div class="form-group">
									<label for="name">Số lượng hiển thị</label>
									<select class="form-control number-topic" disabled="disabled" style="width: 100%;">
										<option>1</option>
										<option>2</option>
										<option>3</option>
										<option>4</option>
										<option>5</option>
										<option>6</option>
									</select>
								</div>
								<div class="form-group">
									<label for="name">Số lượng hiển thị</label>
									<select class="form-control number-topic" disabled="disabled" style="width: 100%;">
										<option>1</option>
										<option>2</option>
										<option>3</option>
										<option>4</option>
										<option>5</option>
										<option>6</option>
									</select>
								</div>
							</div>
						</div>
					</div>
					<div class="box-footer">
						<button class="btn btn-primary">Thay đổi</button>
						<button class="btn btn-success">Hoàn tác</button>
						<button class="btn btn-info">Xem thử</button>
					</div>
				</div>

				<div class="box box-primary collapse" id="box-list" aria-expanded="false">
					<div class="box-header with-border">
						<h3 class="box-title">Các Danh Sách</h3>

						<div class="box-tools pull-right">
							<button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
							</button>
							<button type="button" class="btn btn-box-tool" data-remove="collapse"><i class="fa fa-times"></i></button>
						</div>
					</div>
					<div class="box-body">
						<h4>List</h4>
						<div class="form-group">
							<label for="name">Chọn danh sách</label>
							<select class="form-control number-topic" style="width: 100%;">
								<option>truyện theo thể loại</option>
								<option>truyện bình luận nhiều</option>
								<option>truyện lượt xem nhiều</option>
								<option>truyện đánh giá cao</option>
								<option>truyện đã hoàn thành</option>
								<option>truyện đang tiến hành</option>
								<option>truyện mới cập nhật</option>
								<option>truyện theo năm</option>
								<option>truyện đang theo dõi</option>
								<option>tìm kiếm truyện</option>
								<option>danh sách bạn</option>
								<option>thông báo</option>
								<option>lịch sử đọc truyện</option>
							</select>
						</div>
						<hr>
						<h4>Title</h4>
						<div class="form-group">
							<label for="name">Tiêu đề danh sách</label>
							<input type="text" class="form-control" id="name" value="Bảng Xếp Hạng">
						</div>
						<div class="form-group">
							<label for="name">Thông tin về danh sách</label>
							<input type="text" class="form-control" id="name" value="Danh sách truyện được sắp xếp dựa trên lượt xem, lượt yêu thích">
						</div>
						<hr>
						<h4>Main</h4>
						<div class="form-group">
							<label for="name">Kiểu danh sách</label>
							<select class="form-control number-topic" style="width: 100%;">
								<option>list-view</option>
								<option>list-comment</option>
								<option>list-category</option>
								<option>list-rate</option>
								<option>list-process</option>
								<option>list-search</option>
								<option>list-update</option>
								<option>list-completed</option>
								<option>list-year</option>
								<option>list-noti</option>
								<option>list-friend</option>
							</select>
						</div>
						<div class="form-group">
							<label for="name">Số lượng hiển thị</label>
							<select class="form-control number-topic" style="width: 100%;">
								<option>1</option>
								<option>2</option>
								<option>3</option>
								<option>4</option>
								<option>5</option>
								<option>6</option>
								<option>7</option>
								<option>8</option>
								<option>9</option>
								<option>10</option>
							</select>
						</div>
						<hr>
						<h4>Sidebar</h4>
						<div class="form-group">
							<label for="name">Số lượng khối</label>
							<select class="form-control number-topic" style="width: 100%;">
								<option>1</option>
								<option>2</option>
								<option>3</option>
								<option>4</option>
								<option selected="selected">5</option>
								<option>6</option>
							</select>
						</div>
						<div class="row">
							<div class="col-xs-6">
								<div class="form-group">
									<label for="name">Kiểu khối 1</label>
									<select class="form-control type-topic1" style="width: 100%;">
										<option selected="selected">Top View</option>
										<option>truyện ngẫu nhiên</option>
										<option>bình luận mới</option>
										<option>facebook</option>
										<option>quảng cáo</option>
									</select>
								</div>
								<div class="form-group">
									<label for="name">Kiểu khối 2</label>
									<select class="form-control type-topic1" style="width: 100%;">
										<option>Top View</option>
										<option selected="selected">truyện ngẫu nhiên</option>
										<option>bình luận mới</option>
										<option>facebook</option>
										<option>quảng cáo</option>
									</select>
								</div>
								<div class="form-group">
									<label for="name">Kiểu khối 3</label>
									<select class="form-control type-topic1" style="width: 100%;">
										<option>Top View</option>
										<option>truyện ngẫu nhiên</option>
										<option selected="selected">bình luận mới</option>
										<option>facebook</option>
										<option>quảng cáo</option>
									</select>
								</div>
								<div class="form-group">
									<label for="name">Kiểu khối 4</label>
									<select class="form-control type-topic1" style="width: 100%;">
										<option>Top View</option>
										<option>truyện ngẫu nhiên</option>
										<option>bình luận mới</option>
										<option selected="selected">facebook</option>
										<option>quảng cáo</option>
									</select>
								</div>
								<div class="form-group">
									<label for="name">Kiểu khối 5</label>
									<select class="form-control type-topic1" style="width: 100%;">
										<option>Top View</option>
										<option>truyện ngẫu nhiên</option>
										<option>bình luận mới</option>
										<option>facebook</option>
										<option selected="selected">quảng cáo</option>
									</select>
								</div>
							</div>
							<div class="col-xs-6">
								<div class="form-group">
									<label for="name">Số lượng hiển thị</label>
									<select class="form-control number-topic" style="width: 100%;">
										<option>1</option>
										<option>2</option>
										<option>3</option>
										<option>4</option>
										<option>5</option>
										<option selected="selected">6</option>
									</select>
								</div>
								<div class="form-group">
									<label for="name">Số lượng hiển thị</label>
									<select class="form-control number-topic" style="width: 100%;">
										<option>1</option>
										<option>2</option>
										<option>3</option>
										<option>4</option>
										<option>5</option>
										<option selected="selected">6</option>
									</select>
								</div>
								<div class="form-group">
									<label for="name">Số lượng hiển thị</label>
									<select class="form-control number-topic" style="width: 100%;">
										<option>1</option>
										<option>2</option>
										<option>3</option>
										<option>4</option>
										<option>5</option>
										<option selected="selected">6</option>
									</select>
								</div>
								<div class="form-group">
									<label for="name">Số lượng hiển thị</label>
									<select class="form-control number-topic" disabled="disabled" style="width: 100%;">
										<option>1</option>
										<option>2</option>
										<option>3</option>
										<option>4</option>
										<option>5</option>
										<option>6</option>
									</select>
								</div>
								<div class="form-group">
									<label for="name">Số lượng hiển thị</label>
									<select class="form-control number-topic" disabled="disabled" style="width: 100%;">
										<option>1</option>
										<option>2</option>
										<option>3</option>
										<option>4</option>
										<option>5</option>
										<option>6</option>
									</select>
								</div>
							</div>
						</div>
					</div>
					<div class="box-footer">
						<button class="btn btn-primary">Thay đổi</button>
						<button class="btn btn-success">Hoàn tác</button>
						<button class="btn btn-info">Xem thử</button>
					</div>
				</div>

				<div class="box box-primary collapse" id="box-detail" aria-expanded="false">
					<div class="box-header with-border">
						<h3 class="box-title">Thông Tin Chi Tiết</h3>

						<div class="box-tools pull-right">
							<button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
							</button>
							<button type="button" class="btn btn-box-tool" data-remove="collapse"><i class="fa fa-times"></i></button>
						</div>
					</div>
					<div class="box-body">
						<h4>Detail</h4>
						<div class="form-group">
							<label for="name">Chọn trang chi tiết</label>
							<select class="form-control number-topic" style="width: 100%;">
								<option>truyện</option>
								<option>nhân vật</option>
								<option>tác giả</option>
								<option>nhóm dịch</option>
								<option>người dùng</option>
							</select>
						</div>
						<hr>
						<h4>Title</h4>
						<div class="form-group">
							<label for="name">Tiêu đề trang chi tiết</label>
							<input type="text" class="form-control" id="name" value="Bảng Xếp Hạng">
						</div>
						<div class="form-group">
							<label for="name">Thông tin về trang chi tiết</label>
							<input type="text" class="form-control" id="name" value="Danh sách truyện được sắp xếp dựa trên lượt xem, lượt yêu thích">
						</div>
						<hr>
						<h4>Main</h4>
						<div class="form-group">
							<label for="name">Kiểu trang chi tiết</label>
							<select class="form-control number-topic" style="width: 100%;">
								<option>detail-book</option>
								<option>detail-character</option>
								<option>detail-author</option>
								<option>detail-trans</option>
								<option>detail-user</option>
							</select>
						</div>
						<div class="form-group">
							<label for="name">Số lượng hiển thị</label>
							<select class="form-control number-topic" style="width: 100%;">
								<option>1</option>
								<option>2</option>
								<option>3</option>
								<option>4</option>
								<option>5</option>
								<option>6</option>
								<option>7</option>
								<option>8</option>
								<option>9</option>
								<option>10</option>
							</select>
						</div>
						<hr>
						<h4>Sidebar</h4>
						<div class="form-group">
							<label for="name">Số lượng khối</label>
							<select class="form-control number-topic" style="width: 100%;">
								<option>1</option>
								<option>2</option>
								<option selected="selected">3</option>
								<option>4</option>
								<option>5</option>
								<option>6</option>
							</select>
						</div>
						<div class="row">
							<div class="col-xs-6">
								<div class="form-group">
									<label for="name">Kiểu khối 1</label>
									<select class="form-control type-topic1" style="width: 100%;">
										<option>Top View</option>
										<option selected="selected">truyện ngẫu nhiên</option>
										<option>bình luận mới</option>
										<option>facebook</option>
										<option>quảng cáo</option>
									</select>
								</div>
								<div class="form-group">
									<label for="name">Kiểu khối 2</label>
									<select class="form-control type-topic1" style="width: 100%;">
										<option>Top View</option>
										<option>truyện ngẫu nhiên</option>
										<option selected="selected">bình luận mới</option>
										<option>facebook</option>
										<option>quảng cáo</option>
									</select>
								</div>
								<div class="form-group">
									<label for="name">Kiểu khối 3</label>
									<select class="form-control type-topic1" style="width: 100%;">
										<option>Top View</option>
										<option>truyện ngẫu nhiên</option>
										<option>bình luận mới</option>
										<option selected="selected">facebook</option>
										<option>quảng cáo</option>
									</select>
								</div>
							</div>
							<div class="col-xs-6">
								<div class="form-group">
									<label for="name">Số lượng hiển thị</label>
									<select class="form-control number-topic" style="width: 100%;">
										<option>1</option>
										<option>2</option>
										<option>3</option>
										<option>4</option>
										<option>5</option>
										<option selected="selected">6</option>
									</select>
								</div>
								<div class="form-group">
									<label for="name">Số lượng hiển thị</label>
									<select class="form-control number-topic" style="width: 100%;">
										<option>1</option>
										<option>2</option>
										<option>3</option>
										<option>4</option>
										<option>5</option>
										<option selected="selected">6</option>
									</select>
								</div>
								<div class="form-group">
									<label for="name">Số lượng hiển thị</label>
									<select class="form-control number-topic" disabled="disabled" style="width: 100%;">
										<option>1</option>
										<option>2</option>
										<option>3</option>
										<option>4</option>
										<option>5</option>
										<option>6</option>
									</select>
								</div>
							</div>
						</div>
					</div>
					<div class="box-footer">
						<button class="btn btn-primary">Thay đổi</button>
						<button class="btn btn-success">Hoàn tác</button>
						<button class="btn btn-info">Xem thử</button>
					</div>
				</div>
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
		<div class="modal fade user" id="modal-remove-temporary-user">
			<div class="modal-dialog">
				<div class="modal-content">
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span></button>
						<h4 class="modal-title">Xóa Tạm Người Dùng</h4>
					</div>
					<div class="modal-body">
						<p>Bạn có chắc muốn đưa người dùng này vào danh sách xóa tạm</p>
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

		<div class="modal fade user" id="modal-remove-permanent-user">
			<div class="modal-dialog">
				<div class="modal-content">
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span></button>
						<h4 class="modal-title">Xóa Vĩnh Viễn Người Dùng</h4>
					</div>
					<div class="modal-body">
						<p>Bạn có chắc muốn xóa vĩnh viễn người dùng này. Mọi dữ liệu liên quan có thể bị xóa</p>
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

		<div class="modal fade user" id="modal-remove-all-user">
			<div class="modal-dialog">
				<div class="modal-content">
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span></button>
						<h4 class="modal-title">Xóa Toàn Bộ Người Dùng</h4>
					</div>
					<div class="modal-body">
						<p>Bạn có chắc muốn xóa toàn bộ các người dùng</p>
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

		<div class="modal fade category" id="modal-remove-temporary-category">
			<div class="modal-dialog">
				<div class="modal-content">
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span></button>
						<h4 class="modal-title">Xóa Tạm Thể Loại</h4>
					</div>
					<div class="modal-body">
						<p>Bạn có chắc muốn đưa thể loại này vào danh sách xóa tạm</p>
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

		<div class="modal fade category" id="modal-remove-permanent-category">
			<div class="modal-dialog">
				<div class="modal-content">
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span></button>
						<h4 class="modal-title">Xóa Vĩnh Viễn Thể Loại</h4>
					</div>
					<div class="modal-body">
						<p>Bạn có chắc muốn xóa vĩnh viễn thể loại này. Mọi dữ liệu liên quan có thể bị xóa</p>
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

		<div class="modal fade category" id="modal-remove-all-category">
			<div class="modal-dialog">
				<div class="modal-content">
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span></button>
						<h4 class="modal-title">Xóa Toàn Bộ Thể Loại</h4>
					</div>
					<div class="modal-body">
						<p>Bạn có chắc muốn xóa toàn bộ các thể loại</p>
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

		<div class="modal fade trans" id="modal-remove-temporary-trans">
			<div class="modal-dialog">
				<div class="modal-content">
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span></button>
						<h4 class="modal-title">Xóa Tạm Nhóm Dịch</h4>
					</div>
					<div class="modal-body">
						<p>Bạn có chắc muốn đưa nhóm dịch này vào danh sách xóa tạm</p>
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

		<div class="modal fade trans" id="modal-remove-permanent-trans">
			<div class="modal-dialog">
				<div class="modal-content">
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span></button>
						<h4 class="modal-title">Xóa Vĩnh Viễn Nhóm Dịch</h4>
					</div>
					<div class="modal-body">
						<p>Bạn có chắc muốn xóa vĩnh viễn nhóm dịch này. Mọi dữ liệu liên quan có thể bị xóa.</p>
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

		<div class="modal fade trans" id="modal-remove-all-trans">
			<div class="modal-dialog">
				<div class="modal-content">
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span></button>
						<h4 class="modal-title">Xóa Toàn Bộ Nhóm Dịch</h4>
					</div>
					<div class="modal-body">
						<p>Bạn có chắc muốn xóa toàn bộ các nhóm dịch</p>
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

		<div class="modal fade permiss" id="modal-permiss">
			<div class="modal-dialog">
				<div class="modal-content">
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span></button>
						<h4 class="modal-title">Cấp quyền</h4>
					</div>
					<div class="modal-body">
						<button class="btn btn-primary uploader">uploader</button>
						<button class="btn btn-success mod">mod</button>
						<button class="btn btn-warning statistic">statistic</button>
						<button class="btn btn-danger admin">admin</button>
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

		<div class="modal fade remove" id="modal-remove-temporary-character">
			<div class="modal-dialog">
				<div class="modal-content">
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span></button>
						<h4 class="modal-title">Xóa Tạm Nhân Vật</h4>
					</div>
					<div class="modal-body">
						Bạn có chắc xóa tạm nhân vật này
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

		<div class="modal fade remove" id="modal-remove-permanent-character">
			<div class="modal-dialog">
				<div class="modal-content">
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span></button>
						<h4 class="modal-title">Xóa Vĩnh Viễn Nhân Vật</h4>
					</div>
					<div class="modal-body">
						Bạn có chắc xóa vĩnh viễn nhân vật này. Dữ liệu liên quan có thể bị xóa
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

		<div class="modal fade remove" id="modal-remove-all-character">
			<div class="modal-dialog">
				<div class="modal-content">
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span></button>
						<h4 class="modal-title">Xóa Toàn Bộ Nhân Vật</h4>
					</div>
					<div class="modal-body">
						Bạn có chắc xóa toàn bộ nhân vật. Dữ liệu liên quan có thể bị xóa
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

		<div class="modal fade remove" id="modal-remove-temporary-author">
			<div class="modal-dialog">
				<div class="modal-content">
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span></button>
						<h4 class="modal-title">Xóa Tạm Tác Giả</h4>
					</div>
					<div class="modal-body">
						Bạn có chắc xóa tạm tác giả này
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

		<div class="modal fade remove" id="modal-remove-permanent-author">
			<div class="modal-dialog">
				<div class="modal-content">
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span></button>
						<h4 class="modal-title">Xóa Vĩnh Viễn Tác Giả</h4>
					</div>
					<div class="modal-body">
						Bạn có chắc xóa vĩnh viễn tác giả này. Dữ liệu liên quan có thể bị xóa.
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

		<div class="modal fade remove" id="modal-remove-all-author">
			<div class="modal-dialog">
				<div class="modal-content">
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span></button>
						<h4 class="modal-title">Xóa Toàn Bộ Tác Giả</h4>
					</div>
					<div class="modal-body">
						Bạn có chắc xóa toàn bộ tác giả. Dữ liệu liên quan có thể bị xóa
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

		<div class="modal fade remove" id="modal-remove-temporary-book">
			<div class="modal-dialog">
				<div class="modal-content">
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span></button>
						<h4 class="modal-title">Xóa Tạm Truyện</h4>
					</div>
					<div class="modal-body">
						Bạn có chắc đưa truyện vào danh sách xóa tạm
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

		<div class="modal fade remove" id="modal-remove-permanent-book">
			<div class="modal-dialog">
				<div class="modal-content">
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span></button>
						<h4 class="modal-title">Xóa Vĩnh Viễn Truyện</h4>
					</div>
					<div class="modal-body">
						Bạn có chắc xóa vĩnh viễn truyện. Mọi dữ liệu liên quan có thể bị xóa
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

		<div class="modal fade remove" id="modal-remove-all-book">
			<div class="modal-dialog">
				<div class="modal-content">
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span></button>
						<h4 class="modal-title">Xóa Tất Cả Truyện</h4>
					</div>
					<div class="modal-body">
						Bạn có chắc xóa tất cả truyện. Mọi dữ liệu liên quan có thể bị xóa
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

		<div class="modal fade remove" id="modal-remove-temporary-chap">
			<div class="modal-dialog">
				<div class="modal-content">
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span></button>
						<h4 class="modal-title">Xóa Tạm Chap</h4>
					</div>
					<div class="modal-body">
						Bạn có chắc đưa chap vào danh sách xóa tạm
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

		<div class="modal fade remove" id="modal-remove-permanent-chap">
			<div class="modal-dialog">
				<div class="modal-content">
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span></button>
						<h4 class="modal-title">Xóa Vĩnh Viễn Chap</h4>
					</div>
					<div class="modal-body">
						Bạn có chắc xóa vĩnh viễn chap. Mọi dữ liệu liên quan có thể bị xóa
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

		<div class="modal fade remove" id="modal-remove-all-chap">
			<div class="modal-dialog">
				<div class="modal-content">
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span></button>
						<h4 class="modal-title">Xóa Tất Cả Chap</h4>
					</div>
					<div class="modal-body">
						Bạn có chắc xóa tất cả chap. Mọi dữ liệu liên quan có thể bị xóa
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
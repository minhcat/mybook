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
				<div class="box box-primary collapse" id="box-user-follow" aria-expanded="false">
					<div class="box-header">
						<h3 class="box-title">Người Dùng Đang Theo Dõi</h3>

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
								<th>Người dùng</th>
								<th>Ngày theo dõi</th>
								<th>Số bình luận</th>
								<th>Bình luận mới nhất</th>
								<th>Danh sách bình luận</th>
							</tr>
							<tr>
								<td>1</td>
								<td>John Doe</td>
								<td>11-7-2014</td>
								<td>120</td>
								<td>Bacon ipsum dolor sit amet salami venison chicken flank fatback doner.</td>
								<td><a href="../MyBook/read-book.html" target="_blank" class="btn btn-primary">Xem</a></td>
							</tr>
							<tr>
								<td>2</td>
								<td>Alexander Pierce</td>
								<td>11-7-2014</td>
								<td>300</td>
								<td>Bacon ipsum dolor sit amet salami venison chicken flank fatback doner.</td>
								<td><a href="../MyBook/read-book.html" target="_blank" class="btn btn-primary">Xem</a></td>
							</tr>
							<tr>
								<td>3</td>
								<td>Bob Doe</td>
								<td>11-7-2014</td>
								<td>410</td>
								<td>Bacon ipsum dolor sit amet salami venison chicken flank fatback doner.</td>
								<td><a href="../MyBook/read-book.html" target="_blank" class="btn btn-primary">Xem</a></td>
							</tr>
							<tr>
								<td>4</td>
								<td>Mike Doe</td>
								<td>11-7-2014</td>
								<td>220</td>
								<td>Bacon ipsum dolor sit amet salami venison chicken flank fatback doner.</td>
								<td><a href="../MyBook/read-book.html" target="_blank" class="btn btn-primary">Xem</a></td>
							</tr>
							<tr>
								<td>5</td>
								<td>Juny Wess</td>
								<td>11-7-2014</td>
								<td>240</td>
								<td>Bacon ipsum dolor sit amet salami venison chicken flank fatback doner.</td>
								<td><a href="../MyBook/read-book.html" target="_blank" class="btn btn-primary">Xem</a></td>
							</tr>
							<tr>
								<td>6</td>
								<td>Weris Queen</td>
								<td>11-7-2014</td>
								<td>520</td>
								<td>Bacon ipsum dolor sit amet salami venison chicken flank fatback doner.</td>
								<td><a href="../MyBook/read-book.html" target="_blank" class="btn btn-primary">Xem</a></td>
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

				<div class="box box-primary collapse" id="box-user-punish" aria-expanded="false">
					<div class="box-header">
						<h3 class="box-title">Người Dùng Bị Phạt</h3>

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
								<th>Người dùng</th>
								<th>Ngày bị phạt</th>
								<th>Số ngày bị phạt</th>
								<th>Bình luận vi phạm</th>
								<th>Xóa phạt</th>
							</tr>
							<tr>
								<td>1</td>
								<td>John Doe</td>
								<td>11-7-2014</td>
								<td>20</td>
								<td>Bacon ipsum dolor sit amet salami venison chicken flank fatback doner.</td>
								<td><button class="btn btn-success" data-toggle="modal" data-target="#modal-user-remove-punishlist">Xóa</button></td>
							</tr>
							<tr>
								<td>2</td>
								<td>Alexander Pierce</td>
								<td>11-7-2014</td>
								<td>30</td>
								<td>Bacon ipsum dolor sit amet salami venison chicken flank fatback doner.</td>
								<td><button class="btn btn-success" data-toggle="modal" data-target="#modal-user-remove-punishlist">Xóa</button></td>
							</tr>
							<tr>
								<td>3</td>
								<td>Bob Doe</td>
								<td>11-7-2014</td>
								<td>40</td>
								<td>Bacon ipsum dolor sit amet salami venison chicken flank fatback doner.</td>
								<td><button class="btn btn-success" data-toggle="modal" data-target="#modal-user-remove-punishlist">Xóa</button></td>
							</tr>
							<tr>
								<td>4</td>
								<td>Mike Doe</td>
								<td>11-7-2014</td>
								<td>20</td>
								<td>Bacon ipsum dolor sit amet salami venison chicken flank fatback doner.</td>
								<td><button class="btn btn-success" data-toggle="modal" data-target="#modal-user-remove-punishlist">Xóa</button></td>
							</tr>
							<tr>
								<td>5</td>
								<td>Juny Wess</td>
								<td>11-7-2014</td>
								<td>20</td>
								<td>Bacon ipsum dolor sit amet salami venison chicken flank fatback doner.</td>
								<td><button class="btn btn-success" data-toggle="modal" data-target="#modal-user-remove-punishlist">Xóa</button></td>
							</tr>
							<tr>
								<td>6</td>
								<td>Weris Queen</td>
								<td>11-7-2014</td>
								<td>50</td>
								<td>Bacon ipsum dolor sit amet salami venison chicken flank fatback doner.</td>
								<td><button class="btn btn-success" data-toggle="modal" data-target="#modal-user-remove-punishlist">Xóa</button></td>
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

				<div class="box box-primary collapse" id="box-user-ban" aria-expanded="false">
					<div class="box-header">
						<h3 class="box-title">Người Dùng Bị Chặn</h3>

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
								<th>Người dùng</th>
								<th>Ngày bị chặn</th>
								<th>Bình luận vi phạm</th>
								<th>Gỡ chặn</th>
							</tr>
							<tr>
								<td>1</td>
								<td>John Doe</td>
								<td>11-7-2014</td>
								<td>Bacon ipsum dolor sit amet salami venison chicken flank fatback doner.</td>
								<td><button class="btn btn-success" data-toggle="modal" data-target="#modal-user-remove-banlist">Gỡ</button></td>
							</tr>
							<tr>
								<td>2</td>
								<td>Alexander Pierce</td>
								<td>11-7-2014</td>
								<td>Bacon ipsum dolor sit amet salami venison chicken flank fatback doner.</td>
								<td><button class="btn btn-success" data-toggle="modal" data-target="#modal-user-remove-banlist">Gỡ</button></td>
							</tr>
							<tr>
								<td>3</td>
								<td>Bob Doe</td>
								<td>11-7-2014</td>
								<td>Bacon ipsum dolor sit amet salami venison chicken flank fatback doner.</td>
								<td><button class="btn btn-success" data-toggle="modal" data-target="#modal-user-remove-banlist">Gỡ</button></td>
							</tr>
							<tr>
								<td>4</td>
								<td>Mike Doe</td>
								<td>11-7-2014</td>
								<td>Bacon ipsum dolor sit amet salami venison chicken flank fatback doner.</td>
								<td><button class="btn btn-success" data-toggle="modal" data-target="#modal-user-remove-banlist">Gỡ</button></td>
							</tr>
							<tr>
								<td>5</td>
								<td>Juny Wess</td>
								<td>11-7-2014</td>
								<td>Bacon ipsum dolor sit amet salami venison chicken flank fatback doner.</td>
								<td><button class="btn btn-success" data-toggle="modal" data-target="#modal-user-remove-banlist">Gỡ</button></td>
							</tr>
							<tr>
								<td>6</td>
								<td>Weris Queen</td>
								<td>11-7-2014</td>
								<td>Bacon ipsum dolor sit amet salami venison chicken flank fatback doner.</td>
								<td><button class="btn btn-success" data-toggle="modal" data-target="#modal-user-remove-banlist">Gỡ</button></td>
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
				<!-- /User Box -->

				<!-- Book Box -->
				<div class="box box-primary collapse" id="box-book-follow" aria-expanded="false">
					<div class="box-header">
						<h3 class="box-title">Truyện Đang Theo Dõi</h3>

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
								<th>Thể loại</th>
								<th>Ngày theo dõi</th>
								<th>Số bình luận</th>
								<th>Lượt xem</th>
								<th>Xóa khỏi danh sách</th>
							</tr>
							<tr>
								<td>1</td>
								<td>Black Clover</td>
								<td><span class="label label-primary">Comedy</span> <span class="label label-primary">Action</span> <span class="label label-primary">Fantasy</span></td>
								<td>11/2/2019</td>
								<td>300</td>
								<td>120</td>
								<td><button class="btn btn-success" data-toggle="modal" data-target="#modal-book-remove-follow">Xóa</button></td>
							</tr>
							<tr>
								<td>2</td>
								<td>Attack on Titan</td>
								<td><span class="label label-primary">Comedy</span> <span class="label label-primary">Action</span> <span class="label label-primary">Fantasy</span></td>
								<td>11/2/2019</td>
								<td>400</td>
								<td>120</td>
								<td><button class="btn btn-success" data-toggle="modal" data-target="#modal-book-remove-follow">Xóa</button></td>
							</tr>
							<tr>
								<td>3</td>
								<td>Kakegurui</td>
								<td><span class="label label-primary">Comedy</span> <span class="label label-primary">Action</span> <span class="label label-primary">Fantasy</span></td>
								<td>11/2/2019</td>
								<td>520</td>
								<td>120</td>
								<td><button class="btn btn-success" data-toggle="modal" data-target="#modal-book-remove-follow">Xóa</button></td>
							</tr>
							<tr>
								<td>4</td>
								<td>Overlord</td>
								<td><span class="label label-primary">Comedy</span> <span class="label label-primary">Action</span> <span class="label label-primary">Fantasy</span></td>
								<td>11/2/2019</td>
								<td>640</td>
								<td>120</td>
								<td><button class="btn btn-success" data-toggle="modal" data-target="#modal-book-remove-follow">Xóa</button></td>
							</tr>
							<tr>
								<td>5</td>
								<td>Date A Live</td>
								<td><span class="label label-primary">Comedy</span> <span class="label label-primary">Action</span> <span class="label label-primary">Fantasy</span></td>
								<td>11/2/2019</td>
								<td>880</td>
								<td>120</td>
								<td><button class="btn btn-success" data-toggle="modal" data-target="#modal-book-remove-follow">Xóa</button></td>
							</tr>
							<tr>
								<td>6</td>
								<td>Fairy Tail</td>
								<td><span class="label label-primary">Comedy</span> <span class="label label-primary">Action</span> <span class="label label-primary">Fantasy</span></td>
								<td>11/2/2019</td>
								<td>230</td>
								<td>120</td>
								<td><button class="btn btn-success" data-toggle="modal" data-target="#modal-book-remove-follow">Xóa</button></td>
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
				<!-- /Book Box -->

				<div class="box box-primary collapse" id="box-checkword" aria-expanded="false">
					<div class="box-header">
						<h3 class="box-title">Từ Khóa Kiểm Tra Bình Luận</h3>

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
								<th>Từ khóa</th>
								<th>Ngày thêm</th>
								<th>Số bình luận chứa</th>
								<th>Xóa từ khóa</th>
							</tr>
							<tr>
								<td>1</td>
								<td>lorem ipsum</td>
								<td>11-7-2014</td>
								<td>200</td>
								<td><button class="btn btn-success" data-toggle="modal" data-target="#modal-checkword-remove">Xóa</button></td>
							</tr>
							<tr>
								<td>2</td>
								<td>lorem ipsum</td>
								<td>11-7-2014</td>
								<td>200</td>
								<td><button class="btn btn-success" data-toggle="modal" data-target="#modal-checkword-remove">Xóa</button></td>
							</tr>
							<tr>
								<td>3</td>
								<td>lorem ipsum</td>
								<td>11-7-2014</td>
								<td>200</td>
								<td><button class="btn btn-success" data-toggle="modal" data-target="#modal-checkword-remove">Xóa</button></td>
							</tr>
							<tr>
								<td>4</td>
								<td>lorem ipsum</td>
								<td>11-7-2014</td>
								<td>200</td>
								<td><button class="btn btn-success" data-toggle="modal" data-target="#modal-checkword-remove">Xóa</button></td>
							</tr>
							<tr>
								<td>5</td>
								<td>lorem ipsum</td>
								<td>11-7-2014</td>
								<td>200</td>
								<td><button class="btn btn-success" data-toggle="modal" data-target="#modal-checkword-remove">Xóa</button></td>
							</tr>
							<tr>
								<td>6</td>
								<td>lorem ipsum</td>
								<td>11-7-2014</td>
								<td>200</td>
								<td><button class="btn btn-success" data-toggle="modal" data-target="#modal-checkword-remove">Xóa</button></td>
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
						<div class="box-tools pull-left">
							<button class="btn btn-primary"  data-toggle="modal" data-target="#modal-checkword-add">Thêm Từ Khóa</button>
						</div>
					</div>
					<!-- /.box footer -->
				</div>

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

			<!-- Box User Comment in Book Follow -->
			<div class="col-xs-9">
				@include('partials.admin.content.comment.comment-bookfollow')
			</div>

			<div class="col-xs-3">
				<div class="box box-primary collapse" id="box-book-follow-small" aria-expanded="false">
					<div class="box-header">
						<h3 class="box-title">Truyện Đang Theo Dõi</h3>

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
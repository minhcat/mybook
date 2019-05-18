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
				<div class="box box-primary collapse" id="box-book-new" aria-expanded="false"  data-with="#box-book-list-small">
					<div class="box-header with-border">
						<h3 class="box-title">Thêm truyện</h3>

						<div class="box-tools pull-right">
							<button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
							</button>
							<button type="button" class="btn btn-box-tool" data-remove="collapse"><i class="fa fa-times"></i></button>
						</div>
					</div>
					<div class="box-body">
						<div class="avatar">
							<img src="image/admin/book-default.png" class="img-circle" width="150px"  alt="user image">
							<button class="btn btn-success">Thêm hình</button>
						</div>
						<div class="box-edit">
							<div class="form-group">
								<label>Tên truyện</label>
								<input class="form-control" type="text" name="">
							</div>
							<div class="form-group">
								<label>Tên khác</label>
								<input class="form-control" type="text" name="">
							</div>
							<div class="form-group category">
								<label>Thể loại</label><br>
								<span class="label label-primary">action</span>
								<span class="label label-primary">adult</span>
								<span class="label label-primary">advanture</span>
								<span class="label label-primary">anime</span>
								<span class="label label-primary">bender</span>
								<span class="label label-primary">comedy</span>
								<span class="label label-primary">comic</span>
								<span class="label label-primary">cooking</span>
								<span class="label label-primary">cosplay</span>
								<span class="label label-primary">demons</span>
								<span class="label label-primary">doujinshi</span>
								<span class="label label-primary">ecchi</span>
								<span class="label label-primary">fanmade</span>
								<span class="label label-primary">fantasy</span>
								<span class="label label-primary">funny</span>
								<span class="label label-primary">harem</span>
								<span class="label label-primary">history</span>
								<span class="label label-primary">magic</span>
								<span class="label label-primary">mystery</span>
								<span class="label label-primary">romance</span>
								<span class="label label-primary">school life</span>
								<span class="label label-primary">zombie</span>
							</div>
							<div class="form-group">
								<label>Tác giả</label>
								<input class="form-control" type="text" name="">
							</div>
							<div class="form-group">
								<label>Minh họa</label>
								<input class="form-control" type="text" name="">
							</div>
							<div class="form-group">
								<label>Ngày xuất bản</label>
								<input type="text" class="form-control pull-right" id="datepicker-book-new">
							</div>
							<div class="form-group">
								<label>Nhân vật</label>
								<input class="form-control" type="text" name="">
							</div>
							<div class="form-group">
								<label>Nội dung</label>
								<!-- <br> -->
								<textarea id="book-content" name="book-content" class="book-content" rows="4"></textarea>
							</div>
							<div class="form-group status">
								<label>Tình trạng</label>
								<br>
								<button class="btn btn-success">Đang tiến hành</button>
							</div>
						</div>
					</div>
					<div class="box-footer">
						<button class="btn btn-primary">Thêm</button>
						<button class="btn">Hủy</button>
					</div>
				</div>

				<!-- list book not approved -->
				@include('partials.admin.content.list.list-book-not-approved')

				<!-- list chap not approved -->
				<div class="box box-primary collapse" id="box-chap-list-notapproved" aria-expanded="false">
					<div class="box-header">
						<h3 class="box-title">Danh sách chap chưa duyệt</h3>

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
								<th>Số chap</th>
								<th>Tựa chap</th>
								<th>Phản hồi</th>
								<th>Tình trạng</th>
								<th class="fixed-115">Yêu cầu duyệt</th>
							</tr>
							<tr>
								<td>1</td>
								<td>Attack on Titan</td>
								<td>chap 124</td>
								<td>Amet salami venison</td>
								<td>Bacon ipsum dolor sit amet salami venison chicken flank fatback doner.</td>
								<td><span class="label bg-orange">Chưa xem</span></td>
								<td><button class="btn btn-primary">Yêu cầu</button></td>
							</tr>
							<tr>
								<td>2</td>
								<td>Kakegurui</td>
								<td>chap 24</td>
								<td>Amet salami venison</td>
								<td>Bacon ipsum dolor sit amet salami venison chicken flank fatback doner.</td>
								<td><span class="label bg-red">Đã xem</span></td>
								<td><button class="btn btn-primary">Yêu cầu</button></td>
							</tr>
							<tr>
								<td>3</td>
								<td>Konosuba</td>
								<td>chap 35</td>
								<td>Amet salami venison</td>
								<td>Bacon ipsum dolor sit amet salami venison chicken flank fatback doner.</td>
								<td><span class="label bg-green">Đã phản hồi</span></td>
								<td><button class="btn btn-primary">Yêu cầu</button></td>
							</tr>
							<tr>
								<td>4</td>
								<td>Overlord</td>
								<td>chap 46</td>
								<td>Amet salami venison</td>
								<td>Bacon ipsum dolor sit amet salami venison chicken flank fatback doner.</td>
								<td><span class="label bg-green">Đã phản hồi</span></td>
								<td><button class="btn btn-primary">Yêu cầu</button></td>
							</tr>
							<tr>
								<td>5</td>
								<td>Date A Live</td>
								<td>chap 15</td>
								<td>Amet salami venison</td>
								<td>Bacon ipsum dolor sit amet salami venison chicken flank fatback doner.</td>
								<td><span class="label bg-red">Đã xem</span></td>
								<td><button class="btn btn-primary">Yêu cầu</button></td>
							</tr>
							<tr>
								<td>6</td>
								<td>Sword Art Online</td>
								<td>chap 1402</td>
								<td>Amet salami venison</td>
								<td>Bacon ipsum dolor sit amet salami venison chicken flank fatback doner.</td>
								<td><span class="label bg-orange">Chưa xem</span></td>
								<td><button class="btn btn-primary">Yêu cầu</button></td>
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

				<!-- list error book -->
				@include('partials.admin.content.list.list-book-error')

				<!-- chap edit -->
				<div class="box box-primary collapse" id="box-chap-edit" aria-expanded="false">
					<div class="box-header with-border">
						<h3 class="box-title">Chỉnh Sửa Chap</h3>

						<div class="box-tools pull-right">
							<button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
							</button>
							<button type="button" class="btn btn-box-tool" data-remove="collapse"><i class="fa fa-times"></i></button>
						</div>
					</div>
					<!-- /.box-header -->
					<div class="box-body">
						<div class="image-group clearfix" data-files="0">
							<img src="image/admin/overlord/overlord-chap1-p1.jpg">
							<img src="image/admin/overlord/overlord-chap1-p2.jpg">
							<img src="image/admin/overlord/overlord-chap1-p3.jpg">
							<img src="image/admin/overlord/overlord-chap1-p4.jpg">
							<img src="image/admin/overlord/overlord-chap1-p5.jpg">
							<img src="image/admin/overlord/overlord-chap1-p6.jpg">
							<img src="image/admin/overlord/overlord-chap1-p7.jpg">
							<img src="image/admin/overlord/overlord-chap1-p8.jpg">
						</div>
						
						<form class="form-group">
							<input id="input-new-chap" type="file" multiple>
						</form>
					</div>
					<!-- /.box-body -->
					<div class="box-footer clearfix">
						<button class="btn btn-primary box-link" data-target="#box-book-detail" data-unclose="#box-book-list-small">Chi tiết truyện</button>
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

			<div class="col-xs-9">
				<!-- book detail -->
				<div class="box box-primary collapse" id="box-book-detail" aria-expanded="false"  data-with="#box-book-list-small">
					<div class="box-header with-border">
						<h3 class="box-title">Sword Art Online</h3>

						<div class="box-tools pull-right">
							<button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
							</button>
							<button type="button" class="btn btn-box-tool" data-remove="collapse"><i class="fa fa-times"></i></button>
						</div>
					</div>
					<div class="box-body">
						<img src="image/admin/Sword-Art-Online.jpg" class="img-circle" width="150px"  alt="user image">
						<div class="box-info">
							<p>Tên khác: SAO, ソードアート・オンライン</p>
							<p>Đánh giá: 4.6, lượt đánh giá: 120</p>
							<p>Yêu thích: 460, bình luận: 1205, theo dõi: 123</p>
							<p>Thể loại: Comedy, Fantasy, Funny, Action</p>
							<p>Tác giả: Reki Kawahara</p>
							<p>Minh họa: abec</p>
							<p>Nhóm dịch: A3manga, MangaVN, Dark Angels Group</p>
							<p>Ngày xuất bản:10/4/2009</p>
							<p>Ngày đăng: 2/4/2019</p>
							<p>Tình trạng: đã hoàn thành</p>
							<p>Nhân vật: Kirito, Asuna, Leafa, Yui, Sinon</p>
							<p>Nội dung: Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl</p>
							<p>Từ khóa: sword art online, sao, kirito, asuna</p>
						</div>
					</div>
					<div class="box-footer">
						<button class="btn btn-primary box-link" data-target="#box-chap-list" data-unclose="#box-book-list-small">Danh sách chap</button>
						<button class="btn bg-purple box-link" data-target="#box-chap-new" data-unclose="#box-book-list-small">Thêm chap mới</button>
						<button class="btn btn-info" data-toggle="modal" data-target="#modal-keyword-new">Thêm từ khóa</button>
						<button class="btn btn-success box-link" data-target="#box-book-edit" data-unclose="#box-book-list-small">Chỉnh sửa</button>
						<button class="btn btn-danger" data-toggle="modal" data-target="#modal-remove-book">Xóa</button>
					</div>
				</div>

				<!-- book chap list -->
				<div class="box box-primary collapse" id="box-chap-list" aria-expanded="false">
					<div class="box-header">
						<h3 class="box-title">Danh sách chap</h3>

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
								<th>Số chap</th>
								<th>Tựa chap</th>
								<th>Ngày đăng</th>
								<th>Số trang</th>
								<th>Lượt xem</th>
								<th>Sửa chap</th>
							</tr>
							<tr>
								<td>1</td>
								<td>Chap 1</td>
								<td>Bacon ipsum dolor</td>
								<td>11-7-2014</td>
								<td>20</td>
								<td>240</td>
								<td><button class="btn btn-success">Sửa</button></td>
							</tr>
							<tr>
								<td>2</td>
								<td>Chap 2</td>
								<td>Bacon ipsum dolor</td>
								<td>11-7-2014</td>
								<td>20</td>
								<td>240</td>
								<td><button class="btn btn-success">Sửa</button></td>
							</tr>
							<tr>
								<td>3</td>
								<td>Chap 2.5</td>
								<td>Bacon ipsum dolor</td>
								<td>11-7-2014</td>
								<td>20</td>
								<td>240</td>
								<td><button class="btn btn-success">Sửa</button></td>
							</tr>
							<tr>
								<td>4</td>
								<td>Chap 3</td>
								<td>Bacon ipsum dolor</td>
								<td>11-7-2014</td>
								<td>20</td>
								<td>240</td>
								<td><button class="btn btn-success">Sửa</button></td>
							</tr>
							<tr>
								<td>5</td>
								<td>Chap 4</td>
								<td>Bacon ipsum dolor</td>
								<td>11-7-2014</td>
								<td>20</td>
								<td>240</td>
								<td><button class="btn btn-success">Sửa</button></td>
							</tr>
							<tr>
								<td>6</td>
								<td>Chap 5</td>
								<td>Bacon ipsum dolor</td>
								<td>11-7-2014</td>
								<td>20</td>
								<td>240</td>
								<td><button class="btn btn-success">Sửa</button></td>
							</tr>
							<tr>
								<td>7</td>
								<td>Chap 5.5</td>
								<td>Bacon ipsum dolor</td>
								<td>11-7-2014</td>
								<td>20</td>
								<td>240</td>
								<td><button class="btn btn-success">Sửa</button></td>
							</tr>
							<tr>
								<td>8</td>
								<td>Chap 6</td>
								<td>Bacon ipsum dolor</td>
								<td>11-7-2014</td>
								<td>20</td>
								<td>240</td>
								<td><button class="btn btn-success">Sửa</button></td>
							</tr>
						</table>
					</div>
					<!-- /.box-body -->
					<div class="box-footer clearfix">
						<button class="btn btn-primary box-link" data-target="#box-book-detail" data-unclose="#box-book-list-small">Chi tiết truyện</button>
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

				<!-- book chap new -->
				<div class="box box-primary collapse" id="box-chap-new" aria-expanded="false">
					<div class="box-header with-border">
						<h3 class="box-title">Thêm Chap Mới</h3>

						<div class="box-tools pull-right">
							<button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
							</button>
							<button type="button" class="btn btn-box-tool" data-remove="collapse"><i class="fa fa-times"></i></button>
						</div>
					</div>
					<!-- /.box-header -->
					<div class="box-body">
						<div class="image-group clearfix" data-files="0">

						</div>
						
						<form class="form-group">
							<input id="input-new-chap" type="file" multiple>
						</form>
					</div>
					<!-- /.box-body -->
					<div class="box-footer clearfix">
						<button class="btn btn-primary box-link" data-target="#box-book-detail" data-unclose="#box-book-list-small">Chi tiết truyện</button>
					</div>
					<!-- /.box footer -->
				</div>

				<!-- book edit -->
				<div class="box box-primary collapse" id="box-book-edit" aria-expanded="false"  data-with="#box-book-list-small">
					<div class="box-header with-border">
						<h3 class="box-title">Sword Art Online - Chỉnh Sửa</h3>

						<div class="box-tools pull-right">
							<button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
							</button>
							<button type="button" class="btn btn-box-tool" data-remove="collapse"><i class="fa fa-times"></i></button>
						</div>
					</div>
					<div class="box-body">
						<div class="avatar">
							<img src="image/admin/Sword-Art-Online.jpg" class="img-circle" width="150px"  alt="user image">
							<button class="btn btn-success">Thay đổi hình</button>
						</div>
						<div class="box-edit">
							<div class="form-group">
								<label>Tên khác</label>
								<input class="form-control" type="text" name="" value="SAO, ソードアート・オンライン">
							</div>
							<div class="form-group category">
								<label>Thể loại</label><br>
								<span class="label label-danger">action</span>
								<span class="label label-primary">adult</span>
								<span class="label label-primary">advanture</span>
								<span class="label label-primary">anime</span>
								<span class="label label-primary">bender</span>
								<span class="label label-danger">comedy</span>
								<span class="label label-primary">comic</span>
								<span class="label label-primary">cooking</span>
								<span class="label label-primary">cosplay</span>
								<span class="label label-primary">demons</span>
								<span class="label label-primary">doujinshi</span>
								<span class="label label-primary">ecchi</span>
								<span class="label label-primary">fanmade</span>
								<span class="label label-danger">fantasy</span>
								<span class="label label-danger">funny</span>
								<span class="label label-primary">harem</span>
								<span class="label label-primary">history</span>
								<span class="label label-primary">magic</span>
								<span class="label label-primary">mystery</span>
								<span class="label label-primary">romance</span>
								<span class="label label-primary">school life</span>
								<span class="label label-primary">zombie</span>
							</div>
							<div class="form-group">
								<label>Tác giả</label>
								<input class="form-control" type="text" name="" value="Reki Kawahara">
							</div>
							<div class="form-group">
								<label>Minh họa</label>
								<input class="form-control" type="text" name="" value="abec">
							</div>
							<div class="form-group">
								<label>Ngày xuất bản</label>
								<input type="text" class="form-control pull-right" id="datepicker-book-edit" value="12/3/2010">
							</div>
							<div class="form-group">
								<label>Nhân vật</label>
								<p>Kirito, Asuna, Leafa, Yui, Sinon</p>
								<input class="form-control" type="text" name="" placeholder="thêm nhân vật">
							</div>
							<div class="form-group">
								<label>Nội dung</label>
								<!-- <br> -->
								<textarea class="form-control" name="book-content-edit">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl</textarea>
							</div>
							<div class="form-group status">
								<label>Tình trạng</label>
								<br>
								<button class="btn btn-success">Đang tiến hành</button>
							</div>
						</div>
					</div>
					<div class="box-footer">
						<button class="btn btn-primary box-link" data-target="#box-book-detail" data-unclose="#box-book-list-small">Thay đổi</button>
						<button class="btn box-link" data-target="#box-book-detail" data-unclose="#box-book-list-small">Hủy</button>
					</div>
				</div>

				<!-- book detail not approved-->
				<div class="box box-primary collapse" id="box-book-detail-notapproved" aria-expanded="false">
					<div class="box-header with-border">
						<h3 class="box-title">Sword Art Online</h3>

						<div class="box-tools pull-right">
							<button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
							</button>
							<button type="button" class="btn btn-box-tool" data-remove="collapse"><i class="fa fa-times"></i></button>
						</div>
					</div>
					<div class="box-body">
						<img src="image/admin/Sword-Art-Online.jpg" class="img-circle" width="150px"  alt="user image">
						<div class="box-info height-fixed">
							<p>Tên khác: SAO, ソードアート・オンライン <span class="label bg-green">thêm</span></p>
							<p>Thể loại: Comedy, Fantasy, Funny, Action <span class="label bg-green">Thêm</span></p>
							<p>Tác giả: Reki Kawahara</p>
							<p>Minh họa: abec</p>
							<p>Ngày xuất bản:10/4/2009 <span class="label bg-red">không đúng</span></p>
							<p>Ngày đăng: 2/4/2019</p>
							<p>Nhân vật: Kirito, Asuna, Leafa, Yui, Sinon</p>
							<p>Nội dung: Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl<span class="label bg-orange">chưa đầy đủ</span></p>
							<p>Từ khóa: sword art online, sao, kirito, asuna</p>
						</div>
					</div>
					<div class="box-footer">
						<button class="btn btn-success box-link" data-target="#box-book-edit" data-with="#box-book-list-notapproved-small">Chỉnh sửa</button>
					</div>
				</div>

				<!-- book detail error-->
				<div class="box box-primary collapse" id="box-book-detail-error" aria-expanded="false">
					<div class="box-header with-border">
						<h3 class="box-title">Sword Art Online</h3>

						<div class="box-tools pull-right">
							<button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
							</button>
							<button type="button" class="btn btn-box-tool" data-remove="collapse"><i class="fa fa-times"></i></button>
						</div>
					</div>
					<div class="box-body">
						<img src="image/admin/Sword-Art-Online.jpg" class="img-circle" width="150px"  alt="user image">
						<div class="box-info height-fixed">
							<p>Tên khác: SAO, ソードアート・オンライン <span class="label bg-red">không đúng</span></p>
							<p>Thể loại: Comedy, Fantasy, Funny, Action <span class="label bg-red">không đúng</span></p>
							<p>Tác giả: Reki Kawahara</p>
							<p>Minh họa: abec</p>
							<p>Ngày xuất bản:10/4/2009 <span class="label bg-red">không đúng</span></p>
							<p>Ngày đăng: 2/4/2019</p>
							<p>Nhân vật: Kirito, Asuna, Leafa, Yui, Sinon</p>
							<p>Nội dung: Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl<span class="label bg-red">không đúng</span></p>
							<p>Từ khóa: sword art online, sao, kirito, asuna</p>
						</div>
					</div>
					<div class="box-footer">
						<button class="btn btn-success box-link" data-target="#box-book-edit" data-with="#box-book-list-error-small">Chỉnh sửa</button>
					</div>
				</div>

				<!-- user contact -->
				<div class="box box-primary direct-chat direct-chat-primary collapse" id="box-book-comment" aria-expanded="false">
					<!-- box header -->
					<div class="box-header with-border">
						<h3 class="box-title">Bình Luận Mới</h3>

						<div class="box-tools pull-right">
							<button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
							</button>
							<button type="button" class="btn btn-box-tool" data-remove="collapse"><i class="fa fa-times"></i></button>
						</div>
					</div>
					<!-- /box header -->
					<!-- box body -->
					<div class="box-body">
						<!-- Conversations are loaded here -->
						<div class="direct-chat-messages">
							<!-- Message. Default to the left -->
							<div class="direct-chat-msg">
								<div class="direct-chat-info clearfix">
									<span class="direct-chat-name pull-left">Nguyễn Hoài Nam - <span class="direct-chat-timestamp">Overlord chap 10</span> - <span class="direct-chat-timestamp">2:00 pm 23/3/2019</span></span>
								</div>
								<!-- /.direct-chat-info -->
								<img class="direct-chat-img" src="image/admin/user1-128x128.jpg" alt="Message User Image">
								<!-- /.direct-chat-img -->
								<div class="direct-chat-text">
								Lorem ipsum dolor sit amet, consectetuer adipiscing elit
								</div>

								<!-- /.direct-chat-text -->
							</div>
							<!-- /.direct-chat-msg -->

							<!-- Message to the right -->
							<div class="direct-chat-msg">
								<div class="direct-chat-info clearfix">
									<span class="direct-chat-name pull-left">Thu Hà - <span class="direct-chat-timestamp">Overlord chap 10</span> - <span class="direct-chat-timestamp">2:00 pm 23/3/2019</span></span>
								</div>
								<!-- /.direct-chat-info -->
								<img class="direct-chat-img" src="image/admin/user3-128x128.jpg" alt="Message User Image">
								<!-- /.direct-chat-img -->
								<div class="direct-chat-text">
								Sed diam nonummy nibh euismod
								</div>
								<!-- /.direct-chat-text -->
							</div>
							<!-- /.direct-chat-msg -->
							<div class="direct-chat-msg">
								<div class="direct-chat-info clearfix">
									<span class="direct-chat-name pull-left">Later Phát - <span class="direct-chat-timestamp">Overlord chap 10</span> - <span class="direct-chat-timestamp">2:00 pm 23/3/2019</span></span>
								</div>
								<!-- /.direct-chat-info -->
								<img class="direct-chat-img" src="image/admin/user4-128x128.jpg" alt="Message User Image">
								<!-- /.direct-chat-img -->
								<div class="direct-chat-text">
								tincidunt ut laoreet dolore magna aliquam erat volutpat.
								</div>
								<!-- /.direct-chat-text -->
							</div>
							<!-- /.direct-chat-msg -->
							<div class="direct-chat-msg">
								<div class="direct-chat-info clearfix">
									<span class="direct-chat-name pull-left">Hoàng Lê - <span class="direct-chat-timestamp">Overlord chap 10</span> - <span class="direct-chat-timestamp">2:00 pm 23/3/2019</span></span>
								</div>
								<!-- /.direct-chat-info -->
								<img class="direct-chat-img" src="image/admin/user5-128x128.jpg" alt="Message User Image">
								<!-- /.direct-chat-img -->
								<div class="direct-chat-text">
								Ut wisi enim ad minim veniam.
								</div>
								<!-- /.direct-chat-text -->
							</div>
						</div>
						<!--/.direct-chat-messages-->

						<!-- /.direct-chat-pane -->
					</div>
				</div>

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
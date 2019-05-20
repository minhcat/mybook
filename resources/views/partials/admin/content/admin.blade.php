<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
	<!-- Content Header (Page header) -->
	<section class="content-header">
		<h1>
			Admin
			<small>Quản trị trang web</small>
		</h1>
	</section>

	<!-- Main content -->
	<section class="content container-fluid">
		<div class="well well-info collapse">
			<button type="button" class="btn btn-box-tool btn-close pull-right"><i class="fa fa-times"></i></button>
			<h4>Thông Báo!</h4>

			<p>Add the sidebar-collapse class to the body tag to get this layout. You should combine this option with a fixed layout if you have a long sidebar. Doing that will prevent your page content from getting stretched vertically.</p>

		</div>
		<!-- Statistic book control box -->
		@include('partials.admin.content.small.database-book')
		
		@include('partials.admin.content.small.database-contant')

		<!-- Box -->
		<div class="row">
			<div class="col-xs-12">
				<!-- Database Box -->
				@include('partials.admin.content.list.list-book-admin')

				@include('partials.admin.content.list.list-chap-admin')

				@include('partials.admin.content.list.list-view-admin')

				@include('partials.admin.content.list.list-like-admin')

				@include('partials.admin.content.list.list-comment-admin')

				@include('partials.admin.content.list.list-follow-admin')

				@include('partials.admin.content.list.list-rate-admin')

				@include('partials.admin.content.list.list-character-admin')

				@include('partials.admin.content.list.list-author-admin')

				@include('partials.admin.content.list.list-user-admin')

				@include('partials.admin.content.list.list-category-admin')

				@include('partials.admin.content.list.list-trans-admin')

				<!-- Add, Edit Box -->
				@include('partials.admin.content.new.new-category')

				@include('partials.admin.content.edit.edit-category')

				@include('partials.admin.content.new.new-trans')

				@include('partials.admin.content.edit.edit-trans')

				@include('partials.admin.content.new.new-character')

				@include('partials.admin.content.edit.edit-character')

				@include('partials.admin.content.new.new-author')

				@include('partials.admin.content.edit.edit-author')
				<!-- End Add, Edit Box -->

				<div class="box box-primary collapse" id="box-book-error" aria-expanded="false">
					<div class="box-header with-border">
						<h3 class="box-title">Truyện Lỗi</h3>

						<div class="box-tools pull-right">
							<button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
							</button>
							<button type="button" class="btn btn-box-tool" data-remove="collapse"><i class="fa fa-times"></i></button>
						</div>
					</div>
					<div class="box-body">
						<table id="table-book-error" class="table table-bordered table-hover">
							<thead>
								<tr>
									<th>ID</th>
									<th>Tên truyện</th>
									<th>Chap lỗi</th>
									<th>Dạng lỗi</th>
									<th>Nội dung</th>
								</tr>
							</thead>
							<tbody>
								<tr>
									<td>001</td>
									<td>Attack on Titan</td>
									<td>Chap 21</td>
									<td><span class="label bg-blue">chap die</span></td>
									<td>Bacon ipsum dolor sit amet salami venison chicken flank fatback doner.</td>
								</tr>
								<tr>
									<td>002</td>
									<td>Attack on Titan</td>
									<td>Chap 21</td>
									<td><span class="label bg-blue">chap die</span></td>
									<td>Bacon ipsum dolor sit amet salami venison chicken flank fatback doner.</td>
								</tr>
								<tr>
									<td>003</td>
									<td>Kakegurui</td>
									<td>Chap 34</td>
									<td><span class="label bg-red">trùng</span></td>
									<td>Bacon ipsum dolor sit amet salami venison chicken flank fatback doner.</td>
								</tr>
								<tr>
									<td>004</td>
									<td>Kakegurui</td>
									<td>Chap 34</td>
									<td><span class="label bg-red">trùng</span></td>
									<td>Bacon ipsum dolor sit amet salami venison chicken flank fatback doner.</td>
								</tr>
								<tr>
									<td>005</td>
									<td>Konosuba</td>
									<td>Chap 59</td>
									<td><span class="label bg-green">sai thứ tự</span></td>
									<td>Bacon ipsum dolor sit amet salami venison chicken flank fatback doner.</td>
								</tr>
								<tr>
									<td>006</td>
									<td>Konosuba</td>
									<td>Chap 59</td>
									<td><span class="label bg-green">sai thứ tự</span></td>
									<td>Bacon ipsum dolor sit amet salami venison chicken flank fatback doner.</td>
								</tr>
								<tr>
									<td>007</td>
									<td>Overlord</td>
									<td>Chap 60</td>
									<td><span class="label bg-green">sai thứ tự</span></td>
									<td>Bacon ipsum dolor sit amet salami venison chicken flank fatback doner.</td>
								</tr>
								<tr>
									<td>008</td>
									<td>Overlord</td>
									<td>Chap 60</td>
									<td><span class="label bg-green">sai thứ tự</span></td>
									<td>Bacon ipsum dolor sit amet salami venison chicken flank fatback doner.</td>
								</tr>
								<tr>
									<td>009</td>
									<td>Date A Live</td>
									<td>Chap 2</td>
									<td><span class="label bg-red">trùng</span></td>
									<td>Bacon ipsum dolor sit amet salami venison chicken flank fatback doner.</td>
								</tr>
								<tr>
									<td>010</td>
									<td>Date A Live</td>
									<td>Chap 2</td>
									<td><span class="label bg-red">trùng</span></td>
									<td>Bacon ipsum dolor sit amet salami venison chicken flank fatback doner.</td>
								</tr>
								<tr>
									<td>011</td>
									<td>Sword Art Online</td>
									<td>Chap 4</td>
									<td><span class="label bg-blue">chap die</span></td>
									<td>Bacon ipsum dolor sit amet salami venison chicken flank fatback doner.</td>
								</tr>
								<tr>
									<td>012</td>
									<td>Sword Art Online</td>
									<td>Chap 4</td>
									<td><span class="label bg-blue">chap die</span></td>
									<td>Bacon ipsum dolor sit amet salami venison chicken flank fatback doner.</td>
								</tr>
							</tbody>
						</table>
					</div>
				</div>

				<div class="box box-primary collapse" id="box-report" aria-expanded="false">
					<div class="box-header with-border">
						<h3 class="box-title">Danh Sách Tố Cáo</h3>

						<div class="box-tools pull-right">
							<button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
							</button>
							<button type="button" class="btn btn-box-tool" data-remove="collapse"><i class="fa fa-times"></i></button>
						</div>
					</div>
					<div class="box-body">
						<table id="table-report" class="table table-bordered table-hover">
							<thead>
								<tr>
									<th>ID</th>
									<th>Tên người dùng</th>
									<th>Tên người tố cáo</th>
									<th>Nội dung tố cáo</th>
									<th>Bình luận</th>
								</tr>
							</thead>
							<tbody>
								<tr>
									<td>001</td>
									<td>Nam Nguyễn</td>
									<td>Phan Lê</td>
									<td><span class="label bg-blue">nói tục</span></td>
									<td>Bacon ipsum dolor sit amet salami venison chicken flank fatback doner.</td>
								</tr>
								<tr>
									<td>002</td>
									<td>Nam Nguyễn</td>
									<td>Phan Lê</td>
									<td><span class="label bg-blue">nói tục</span></td>
									<td>Bacon ipsum dolor sit amet salami venison chicken flank fatback doner.</td>
								</tr>
								<tr>
									<td>003</td>
									<td>Quang Lê</td>
									<td>Hà Tiến</td>
									<td><span class="label bg-red">spam</span></td>
									<td>Bacon ipsum dolor sit amet salami venison chicken flank fatback doner.</td>
								</tr>
								<tr>
									<td>004</td>
									<td>Quang Lê</td>
									<td>Hà Tiến</td>
									<td><span class="label bg-red">spam</span></td>
									<td>Bacon ipsum dolor sit amet salami venison chicken flank fatback doner.</td>
								</tr>
								<tr>
									<td>005</td>
									<td>Đập Choai</td>
									<td>Lý Tống</td>
									<td><span class="label bg-green">quảng cáo</span></td>
									<td>Bacon ipsum dolor sit amet salami venison chicken flank fatback doner.</td>
								</tr>
								<tr>
									<td>006</td>
									<td>Đập Choai</td>
									<td>Lý Tống</td>
									<td><span class="label bg-green">quảng cáo</span></td>
									<td>Bacon ipsum dolor sit amet salami venison chicken flank fatback doner.</td>
								</tr>
								<tr>
									<td>007</td>
									<td>Mr.T</td>
									<td>Dr.D</td>
									<td><span class="label bg-orange">xúc phạm người khác</span></td>
									<td>Bacon ipsum dolor sit amet salami venison chicken flank fatback doner.</td>
								</tr>
								<tr>
									<td>008</td>
									<td>Mr.T</td>
									<td>Dr.D</td>
									<td><span class="label bg-orange">xúc phạm người khác</span></td>
									<td>Bacon ipsum dolor sit amet salami venison chicken flank fatback doner.</td>
								</tr>
								<tr>
									<td>009</td>
									<td>Js Queen</td>
									<td>Kt Trung</td>
									<td><span class="label bg-red">liên quan chính trị</span></td>
									<td>Bacon ipsum dolor sit amet salami venison chicken flank fatback doner.</td>
								</tr>
								<tr>
									<td>010</td>
									<td>Js Queen</td>
									<td>Kt Trung</td>
									<td><span class="label bg-red">liên quan chính trị</span></td>
									<td>Bacon ipsum dolor sit amet salami venison chicken flank fatback doner.</td>
								</tr>
								<tr>
									<td>011</td>
									<td>Wriss</td>
									<td>Bred</td>
									<td><span class="label bg-blue">spam</span></td>
									<td>Bacon ipsum dolor sit amet salami venison chicken flank fatback doner.</td>
								</tr>
								<tr>
									<td>012</td>
									<td>Wriss</td>
									<td>Bred</td>
									<td><span class="label bg-blue">spam</span></td>
									<td>Bacon ipsum dolor sit amet salami venison chicken flank fatback doner.</td>
								</tr>
							</tbody>
						</table>
					</div>
				</div>
				<!-- End Database Box -->

				<!-- Approve Box -->
				<div class="box box-primary collapse" id="box-approve-book" aria-expanded="false">
					<div class="box-header with-border">
						<h3 class="box-title">Duyệt truyện</h3>

						<div class="box-tools pull-right">
							<button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
							</button>
							<button type="button" class="btn btn-box-tool" data-remove="collapse"><i class="fa fa-times"></i></button>
						</div>
					</div>
					<div class="box-body">
						<table id="table-approve-book" class="table table-bordered table-hover">
							<thead>
								<tr>
									<th>ID</th>
									<th>Tên truyện</th>
									<th>Người đăng</th>
									<th>Ngày đăng</th>
									<th>Mô tả</th>
									<th>Xem Truyện</th>
									<th>Phản hồi</th>
									<th class="column-fixed-100">Duyệt truyện</th>
								</tr>
							</thead>
							<tbody>
								<tr>
									<td>001</td>
									<td>The Rising of The Shield Hero</td>
									<td>Võ Trinh</td>
									<td>12/2/2019</td>
									<td>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore </td>
									<td><a href="#">link</a></td>
									<td><a href="#" data-toggle="modal" data-target="#modal-reply">phản hồi</a></td>
									<td>
										<button class="btn btn-success">Duyệt</button>
										<button class="btn btn-default">Hủy</button>
									</td>
								</tr>
								<tr>
									<td>002</td>
									<td>The Rising of The Shield Hero</td>
									<td>Võ Trinh</td>
									<td>12/2/2019</td>
									<td>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore </td>
									<td><a href="#">link</a></td>
									<td><a href="#" data-toggle="modal" data-target="#modal-reply">phản hồi</a></td>
									<td>
										<button class="btn btn-success">Duyệt</button>
										<button class="btn btn-default">Hủy</button>
									</td>
								</tr>
								<tr>
									<td>003</td>
									<td>The Rising of The Shield Hero</td>
									<td>Võ Trinh</td>
									<td>12/2/2019</td>
									<td>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore </td>
									<td><a href="#">link</a></td>
									<td><a href="#" data-toggle="modal" data-target="#modal-reply">phản hồi</a></td>
									<td>
										<button class="btn btn-success">Duyệt</button>
										<button class="btn btn-default">Hủy</button>
									</td>
								</tr>
								<tr>
									<td>004</td>
									<td>The Rising of The Shield Hero</td>
									<td>Võ Trinh</td>
									<td>12/2/2019</td>
									<td>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore </td>
									<td><a href="#">link</a></td>
									<td><a href="#" data-toggle="modal" data-target="#modal-reply">phản hồi</a></td>
									<td>
										<button class="btn btn-success">Duyệt</button>
										<button class="btn btn-default">Hủy</button>
									</td>
								</tr>
								<tr>
									<td>005</td>
									<td>The Rising of The Shield Hero</td>
									<td>Võ Trinh</td>
									<td>12/2/2019</td>
									<td>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore </td>
									<td><a href="#">link</a></td>
									<td><a href="#" data-toggle="modal" data-target="#modal-reply">phản hồi</a></td>
									<td>
										<button class="btn btn-success">Duyệt</button>
										<button class="btn btn-default">Hủy</button>
									</td>
								</tr>
								<tr>
									<td>006</td>
									<td>The Rising of The Shield Hero</td>
									<td>Võ Trinh</td>
									<td>12/2/2019</td>
									<td>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore </td>
									<td><a href="#">link</a></td>
									<td><a href="#">phản hồi</a></td>
									<td>
										<button class="btn btn-success">Duyệt</button>
										<button class="btn btn-default">Hủy</button>
									</td>
								</tr>
								<tr>
									<td>007</td>
									<td>The Rising of The Shield Hero</td>
									<td>Võ Trinh</td>
									<td>12/2/2019</td>
									<td>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore </td>
									<td><a href="#">link</a></td>
									<td><a href="#">phản hồi</a></td>
									<td>
										<button class="btn btn-success">Duyệt</button>
										<button class="btn btn-default">Hủy</button>
									</td>
								</tr>
								<tr>
									<td>008</td>
									<td>The Rising of The Shield Hero</td>
									<td>Võ Trinh</td>
									<td>12/2/2019</td>
									<td>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore </td>
									<td><a href="#">link</a></td>
									<td><a href="#">phản hồi</a></td>
									<td>
										<button class="btn btn-success">Duyệt</button>
										<button class="btn btn-default">Hủy</button>
									</td>
								</tr>
								<tr>
									<td>009</td>
									<td>The Rising of The Shield Hero</td>
									<td>Võ Trinh</td>
									<td>12/2/2019</td>
									<td>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore </td>
									<td><a href="#">link</a></td>
									<td><a href="#">phản hồi</a></td>
									<td>
										<button class="btn btn-success">Duyệt</button>
										<button class="btn btn-default">Hủy</button>
									</td>
								</tr>
								<tr>
									<td>010</td>
									<td>The Rising of The Shield Hero</td>
									<td>Võ Trinh</td>
									<td>12/2/2019</td>
									<td>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore </td>
									<td><a href="#">link</a></td>
									<td><a href="#">phản hồi</a></td>
									<td>
										<button class="btn btn-success">Duyệt</button>
										<button class="btn btn-default">Hủy</button>
									</td>
								</tr>
							</tbody>
						</table>
					</div>
				</div>

				<div class="box box-primary collapse" id="box-approve-user" aria-expanded="false">
					<div class="box-header with-border">
						<h3 class="box-title">Duyệt phạt người dùng</h3>

						<div class="box-tools pull-right">
							<button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
							</button>
							<button type="button" class="btn btn-box-tool" data-remove="collapse"><i class="fa fa-times"></i></button>
						</div>
					</div>
					<div class="box-body">
						<table id="table-approve-user" class="table table-bordered table-hover">
							<thead>
								<tr>
									<th>ID</th>
									<th>Tên người dùng</th>
									<th>Người đề nghị</th>
									<th>Ngày đề nghị</th>
									<th>Bình luận</th>
									<th>Hình phạt</th>
									<th>Phản hồi</th>
									<th class="column-fixed-100">Duyệt đề nghị</th>
								</tr>
							</thead>
							<tbody>
								<tr>
									<td>001</td>
									<td>Trần Văn Giàu</td>
									<td>Bảo Nguyễn</td>
									<td>12/2/2019</td>
									<td>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore </td>
									<td>cấm bình luận 1 tuần</td>
									<td><a href="#" data-toggle="modal" data-target="#modal-reply">phản hồi</a></td>
									<td>
										<button class="btn btn-success">Duyệt</button>
										<button class="btn btn-default">Hủy</button>
									</td>
								</tr>
								<tr>
									<td>002</td>
									<td>Trần Văn Giàu</td>
									<td>Bảo Nguyễn</td>
									<td>12/2/2019</td>
									<td>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore </td>
									<td>cấm bình luận 1 tuần</td>
									<td><a href="#" data-toggle="modal" data-target="#modal-reply">phản hồi</a></td>
									<td>
										<button class="btn btn-success">Duyệt</button>
										<button class="btn btn-default">Hủy</button>
									</td>
								</tr>
								<tr>
									<td>003</td>
									<td>Trần Văn Giàu</td>
									<td>Bảo Nguyễn</td>
									<td>12/2/2019</td>
									<td>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore </td>
									<td>cấm bình luận 1 tuần</td>
									<td><a href="#" data-toggle="modal" data-target="#modal-reply">phản hồi</a></td>
									<td>
										<button class="btn btn-success">Duyệt</button>
										<button class="btn btn-default">Hủy</button>
									</td>
								</tr>
								<tr>
									<td>004</td>
									<td>Trần Văn Giàu</td>
									<td>Bảo Nguyễn</td>
									<td>12/2/2019</td>
									<td>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore </td>
									<td>cấm bình luận 1 tuần</td>
									<td><a href="#" data-toggle="modal" data-target="#modal-reply">phản hồi</a></td>
									<td>
										<button class="btn btn-success">Duyệt</button>
										<button class="btn btn-default">Hủy</button>
									</td>
								</tr>
								<tr>
									<td>005</td>
									<td>Trần Văn Giàu</td>
									<td>Bảo Nguyễn</td>
									<td>12/2/2019</td>
									<td>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore </td>
									<td>cấm bình luận 1 tuần</td>
									<td><a href="#" data-toggle="modal" data-target="#modal-reply">phản hồi</a></td>
									<td>
										<button class="btn btn-success">Duyệt</button>
										<button class="btn btn-default">Hủy</button>
									</td>
								</tr>
								<tr>
									<td>006</td>
									<td>Trần Văn Giàu</td>
									<td>Bảo Nguyễn</td>
									<td>12/2/2019</td>
									<td>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore </td>
									<td>cấm bình luận 1 tuần</td>
									<td><a href="#">phản hồi</a></td>
									<td>
										<button class="btn btn-success">Duyệt</button>
										<button class="btn btn-default">Hủy</button>
									</td>
								</tr>
								<tr>
									<td>007</td>
									<td>Trần Văn Giàu</td>
									<td>Bảo Nguyễn</td>
									<td>12/2/2019</td>
									<td>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore </td>
									<td>cấm bình luận 1 tuần</td>
									<td><a href="#">phản hồi</a></td>
									<td>
										<button class="btn btn-success">Duyệt</button>
										<button class="btn btn-default">Hủy</button>
									</td>
								</tr>
								<tr>
									<td>008</td>
									<td>Trần Văn Giàu</td>
									<td>Bảo Nguyễn</td>
									<td>12/2/2019</td>
									<td>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore </td>
									<td>cấm bình luận 1 tuần</td>
									<td><a href="#">phản hồi</a></td>
									<td>
										<button class="btn btn-success">Duyệt</button>
										<button class="btn btn-default">Hủy</button>
									</td>
								</tr>
								<tr>
									<td>009</td>
									<td>Trần Văn Giàu</td>
									<td>Bảo Nguyễn</td>
									<td>12/2/2019</td>
									<td>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore </td>
									<td>cấm bình luận 1 tuần</td>
									<td><a href="#">phản hồi</a></td>
									<td>
										<button class="btn btn-success">Duyệt</button>
										<button class="btn btn-default">Hủy</button>
									</td>
								</tr>
								<tr>
									<td>010</td>
									<td>Trần Văn Giàu</td>
									<td>Bảo Nguyễn</td>
									<td>12/2/2019</td>
									<td>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore </td>
									<td>cấm bình luận 1 tuần</td>
									<td><a href="#">phản hồi</a></td>
									<td>
										<button class="btn btn-success">Duyệt</button>
										<button class="btn btn-default">Hủy</button>
									</td>
								</tr>
							</tbody>
						</table>
					</div>
				</div>
				<!-- End Approve Box -->

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

				<!-- Timeline Box -->
				<div class="box box-primary collapse" id="timeline-all" aria-expanded="false">
					<div class="box-header with-border">
						<h3 class="box-title">Dòng Thời Gian</h3>

						<div class="box-tools pull-right">
							<button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
							</button>
							<button type="button" class="btn btn-box-tool" data-remove="collapse"><i class="fa fa-times"></i></button>
						</div>
					</div>
					<div class="box-body">
						<ul class="timeline">
							<li class="time-label">
								<span class="bg-red">
								10/2/2019
								</span>
							</li>
							<li>
								<i class="fa fa-upload bg-blue"></i>
								<div class="timeline-item">
									<span class="time"><i class="fa fa-clock-o"></i> 12:05</span>
									<h3 class="timeline-header no-border"><a href="#">Nam Nguyễn</a> tải chap 10 truyện Overlord</h3>
								</div>
							</li>
							<li>
								<i class="fa fa-comment bg-green"></i>
								<div class="timeline-item">
									<span class="time"><i class="fa fa-clock-o"></i> 12:05</span>
									<h3 class="timeline-header no-border"><a href="#">Võ Trinh</a> xử lý người dùng Mr.T</h3>
								</div>
							</li>
							<li>
								<i class="fa fa-envelope bg-teal"></i>
								<div class="timeline-item">
									<span class="time"><i class="fa fa-clock-o"></i> 12:05</span>
									<h3 class="timeline-header"><a href="#">Lê Hữu Thọ</a> gữi cho bạn 1 mail</h3>
									<div class="timeline-body">
										Etsy doostang zoodles disqus groupon greplin oooj voxy zoodles, weebly ning heekya handango imeem plugg dopplr jibjab, movity jajah plickers sifteo edmodo ifttt zimbra. Babblely odeo kaboodle quora plaxo ideeli hulu weebly balihoo...
									</div>
									<div class="timeline-footer">
										<a href="#" class="btn btn-primary btn-xs">chi tiết</a>
										<a href="#" class="btn btn-danger btn-xs">xóa</a>
									</div>
								</div>
							</li>
							<li class="time-label">
								<span class="bg-blue">
								9/2/2019
								</span>
							</li>
							<li>
								<i class="fa fa-times bg-red"></i>
								<div class="timeline-item">
									<span class="time"><i class="fa fa-clock-o"></i> 12:05</span>
									<h3 class="timeline-header no-border"><a href="#">Lê Hữu Thọ</a> xóa thể loại magic</h3>
								</div>
							</li>
							<li>
								<i class="fa fa-key bg-purple"></i>
								<div class="timeline-item">
									<span class="time"><i class="fa fa-clock-o"></i> 12:05</span>
									<h3 class="timeline-header no-border"><a href="#">Phát Lê</a> cấp cho Nam Nguyễn quyền statistic</h3>
								</div>
							</li>
							<li class="time-label">
								<span class="bg-green">
								8/2/2019
								</span>
							</li>
							<li>
								<i class="fa fa-sign-in bg-aqua"></i>
								<div class="timeline-item">
									<span class="time"><i class="fa fa-clock-o"></i> 12:05</span>
									<h3 class="timeline-header no-border"><a href="#">Phạm Hoàng</a> đăng ký thành công vào trang admin</h3>
								</div>
							</li>
							<li>
								<i class="fa fa-upload bg-yellow"></i>
								<div class="timeline-item">
									<span class="time"><i class="fa fa-clock-o"></i> 12:05</span>
									<h3 class="timeline-header no-border"><a href="#">Thắng Wrisse</a> tải lại chap 12 Attack on Titan</h3>
								</div>
							</li>
							<li>
								<i class="fa fa-clock-o bg-gray"></i>
							</li>
						</ul>
					</div>
				</div>
				<!-- End Timeline Box -->

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

				<!-- Notification Box -->
				<div class="box box-primary collapse" id="box-noti" aria-expanded="false">
					<div class="box-header with-border">
						<h3 class="box-title">Tạo Thông Báo</h3>

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
							<label for="name">Kiểu thông báo</label>
							<select class="form-control">
								<option>Thông tin</option>
								<option>Cảnh báo</option>
								<option>Nguy hiểm</option>
								<option>Đồng ý</option>
							</select>
						</div>
						<div class="form-group">
							<label for="name">Người Nhận</label>
							<select class="form-control">
								<option>Nguyễn Văn C</option>
								<option>Nguyễn Văn D</option>
								<option>Nguyễn Văn E</option>
								<option>Tất cả</option>
								<option>Tất cả (không loại trừ)</option>
							</select>
						</div>
						<div class="form-group">
							<label for="name">Nội Dung</label>
							<textarea class="form-control" name="noti-content" rows="3"></textarea>
						</div>
					</div>
					<div class="box-footer">
						<button class="btn btn-success">Gữi</button>
						<button class="btn btn-default">Hủy</button>
					</div>
				</div>
				<!-- End Notification Box -->

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
				<!-- Timeline Box -->
				<div class="box box-primary collapse" id="timeline-staff" aria-expanded="false">
					<div class="box-header with-border">
						<h3 class="box-title">Dòng Thời Gian</h3>

						<div class="box-tools pull-right">
							<button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
							</button>
							<button type="button" class="btn btn-box-tool" data-remove="collapse"><i class="fa fa-times"></i></button>
						</div>
					</div>
					<div class="box-body">
						<ul class="timeline">
							<li class="time-label">
								<span class="bg-red">
								10/2/2019
								</span>
							</li>
							<li>
								<i class="fa fa-upload bg-blue"></i>
								<div class="timeline-item">
									<span class="time"><i class="fa fa-clock-o"></i> 12:05</span>
									<h3 class="timeline-header no-border"><a href="#">Nam Nguyễn</a> tải chap 10 truyện Overlord</h3>
								</div>
							</li>
							<li>
								<i class="fa fa-envelope bg-teal"></i>
								<div class="timeline-item">
									<span class="time"><i class="fa fa-clock-o"></i> 12:05</span>
									<h3 class="timeline-header"><a href="#">Nam Nguyễn</a> gữi cho bạn 1 mail</h3>
									<div class="timeline-body">
										Etsy doostang zoodles disqus groupon greplin oooj voxy zoodles, weebly ning heekya handango imeem plugg dopplr jibjab, movity jajah plickers sifteo edmodo ifttt zimbra. Babblely odeo kaboodle quora plaxo ideeli hulu weebly balihoo...
									</div>
									<div class="timeline-footer">
										<a href="#" class="btn btn-primary btn-xs">chi tiết</a>
										<a href="#" class="btn btn-danger btn-xs">xóa</a>
									</div>
								</div>
							</li>
							<li class="time-label">
								<span class="bg-blue">
								9/2/2019
								</span>
							</li>
							<li>
								<i class="fa fa-times bg-red"></i>
								<div class="timeline-item">
									<span class="time"><i class="fa fa-clock-o"></i> 12:05</span>
									<h3 class="timeline-header no-border"><a href="#">Nam Nguyễn</a> xóa thể loại magic</h3>
								</div>
							</li>
							<li>
								<i class="fa fa-key bg-purple"></i>
								<div class="timeline-item">
									<span class="time"><i class="fa fa-clock-o"></i> 12:05</span>
									<h3 class="timeline-header no-border"><a href="#">Phát Lê</a> cấp cho Nam Nguyễn quyền statistic</h3>
								</div>
							</li>
							<li class="time-label">
								<span class="bg-green">
								8/2/2019
								</span>
							</li>
							<li>
								<i class="fa fa-upload bg-yellow"></i>
								<div class="timeline-item">
									<span class="time"><i class="fa fa-clock-o"></i> 12:05</span>
									<h3 class="timeline-header no-border"><a href="#">Nam Nguyễn</a> tải lại chap 12 Attack on Titan</h3>
								</div>
							</li>
							<li>
								<i class="fa fa-clock-o bg-gray"></i>
							</li>
						</ul>
					</div>
				</div>
				<!-- End Timeline Box -->
			</div>
			<div class="col-xs-3">
				<div class="box box-primary collapse" id="box-staff-small" aria-expanded="false">
					<div class="box-header">
						<h3 class="box-title">Danh Sách Nhân Viên</h3>

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
								<th>Tên nhân viên</th>
							</tr>
							<tr>
								<td>1</td>
								<td>Phạm Hoàng</td>
							</tr>
							<tr>
								<td>2</td>
								<td>Phạm Hoàng</td>
							</tr>
							<tr>
								<td>3</td>
								<td>Trần Hà</td>
							</tr>
							<tr>
								<td>4</td>
								<td>Trần Hà</td>
							</tr>
							<tr>
								<td>5</td>
								<td>Lý Thường</td>
							</tr>
							<tr>
								<td>6</td>
								<td>Lý Thường</td>									
							</tr>
							<tr>
								<td>7</td>
								<td>Hoàng Lê</td>									
							</tr>
							<tr>
								<td>8</td>
								<td>Hoàng Lê</td>									
							</tr>
							<tr>
								<td>9</td>
								<td>Quang Võ</td>									
							</tr>
							<tr>
								<td>10</td>
								<td>Quang Võ</td>									
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
		<div class="modal fade category" id="modal-remove-category">
			<div class="modal-dialog">
				<div class="modal-content">
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span></button>
						<h4 class="modal-title">Xóa Thể Loại</h4>
					</div>
					<div class="modal-body">
						<p>Bạn có chắc muốn xóa thể loại này</p>
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

		<div class="modal fade trans" id="modal-remove-trans">
			<div class="modal-dialog">
				<div class="modal-content">
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span></button>
						<h4 class="modal-title">Xóa Nhóm Dịch</h4>
					</div>
					<div class="modal-body">
						<p>Bạn có chắc muốn xóa nhóm dịch này</p>
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

		<div class="modal fade reply" id="modal-reply">
			<div class="modal-dialog">
				<div class="modal-content">
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span></button>
						<h4 class="modal-title">Phản hồi</h4>
					</div>
					<div class="modal-body">
						<label>Nội dung phản hồi</label>
						<textarea class="form-control" rows="3"></textarea>
					</div>
					<div class="modal-footer">
						<button type="button" class="btn btn-primary pull-left" data-dismiss="modal">Gữi</button>
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

		<div class="modal fade remove-character" id="modal-remove-character">
			<div class="modal-dialog">
				<div class="modal-content">
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span></button>
						<h4 class="modal-title">Xóa Nhân Vật</h4>
					</div>
					<div class="modal-body">
						Bạn có chắc xóa nhân vật này
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

		<div class="modal fade remove-character" id="modal-remove-author">
			<div class="modal-dialog">
				<div class="modal-content">
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span></button>
						<h4 class="modal-title">Xóa Tác Giả</h4>
					</div>
					<div class="modal-body">
						Bạn có chắc xóa tác giả này
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
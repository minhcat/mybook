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
				<div class="box box-primary collapse in" id="box-book" aria-expanded="true">
					<div class="box-header with-border">
						<h3 class="box-title">Truyện</h3>

						<div class="box-tools pull-right">
							<button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
							</button>
							<button type="button" class="btn btn-box-tool" data-remove="collapse"><i class="fa fa-times"></i></button>
						</div>
					</div>
					<div class="box-body">
						<table id="table-book" class="table table-bordered table-striped">
							<thead>
								<tr>
									<th>Id</th>
									<th>Tên truyện</th>
									<th>Ngày xuất bản</th>
									<th>Ngày đăng</th>
									<th>Người đăng</th>
									<th class="fixed">Nội dung</th>
									<th>Từ khóa</th>
								</tr>
							</thead>
							<tbody>
								<tr>
									<td>001</td>
									<td>Attack On Titan</td>
									<td>12/2/2008</td>
									<td>29/4/2018</td>
									<td>Võ Trinh</td>
									<td>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod...</td>
									<td>Attack On Titan</td>
								</tr>
								<tr>
									<td>002</td>
									<td>Date A Live</td>
									<td>12/2/2008</td>
									<td>29/4/2018</td>
									<td>Võ Trinh</td>
									<td>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod...</td>
									<td>Date A Live</td>
								</tr>
								<tr>
									<td>003</td>
									<td>Dragon Ball</td>
									<td>12/2/2008</td>
									<td>29/4/2018</td>
									<td>Võ Trinh</td>
									<td>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod...</td>
									<td>Dragon Ball</td>
								</tr>
								<tr>
									<td>004</td>
									<td>Kakegurui</td>
									<td>12/2/2008</td>
									<td>29/4/2018</td>
									<td>Võ Trinh</td>
									<td>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod...</td>
									<td>Kakegurui</td>
								</tr>
								<tr>
									<td>005</td>
									<td>Konosuba</td>
									<td>12/2/2008</td>
									<td>29/4/2018</td>
									<td>Võ Trinh</td>
									<td>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod...</td>
									<td>Konosuba</td>
								</tr>
								<tr>
									<td>006</td>
									<td>Darling in the FranXX</td>
									<td>12/2/2008</td>
									<td>29/4/2018</td>
									<td>Võ Trinh</td>
									<td>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod...</td>
									<td>Darling in the FranXX</td>
								</tr>
								<tr>
									<td>007</td>
									<td>Overlord</td>
									<td>12/2/2008</td>
									<td>29/4/2018</td>
									<td>Võ Trinh</td>
									<td>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod...</td>
									<td>Overlord</td>
								</tr>
								<tr>
									<td>008</td>
									<td>Girly Air Force</td>
									<td>12/2/2008</td>
									<td>29/4/2018</td>
									<td>Võ Trinh</td>
									<td>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod...</td>
									<td>Girly Air Force</td>
								</tr>
								<tr>
									<td>009</td>
									<td>Golbin Slayer</td>
									<td>12/2/2008</td>
									<td>29/4/2018</td>
									<td>Võ Trinh</td>
									<td>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod...</td>
									<td>Golbin Slayer</td>
								</tr>
								<tr>
									<td>010</td>
									<td>Death Note</td>
									<td>12/2/2008</td>
									<td>29/4/2018</td>
									<td>Võ Trinh</td>
									<td>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod...</td>
									<td>Death Note</td>
								</tr>
							</tbody>
						</table>
					</div>
				</div>

				<div class="box box-primary collapse" id="box-chap" aria-expanded="false">
					<div class="box-header with-border">
						<h3 class="box-title">Chap</h3>

						<div class="box-tools pull-right">
							<button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
							</button>
							<button type="button" class="btn btn-box-tool" data-remove="collapse"><i class="fa fa-times"></i></button>
						</div>
					</div>
					<div class="box-body">
						<table id="table-chap" class="table table-bordered table-hover">
							<thead>
								<tr>
									<th>ID</th>
									<th>Tên chap</th>
									<th>Tựa chap</th>
									<th>Stt</th>
									<th>Truyện</th>
									<th>Nhóm dịch</th>
									<th>Bình luận</th>
								</tr>
							</thead>
							<tbody>
								<tr>
									<td>001</td>
									<td>Chap 1</td>
									<td>Kết thúc 1 khởi đầu và bắt...</td>
									<td>1</td>
									<td>Re:Zero</td>
									<td>MangaVN</td>
									<td>3</td>
								</tr>
								<tr>
									<td>002</td>
									<td>Chap 2</td>
									<td>Đoàn tụ với phù thủy</td>
									<td>2</td>
									<td>Re:Zero</td>
									<td>MangaVN</td>
									<td>4</td>
								</tr>
								<tr>
									<td>003</td>
									<td>Chap 3</td>
									<td>Khởi đầu từ số không ở...</td>
									<td>3</td>
									<td>Re:Zero</td>
									<td>MangaVN</td>
									<td>4</td>
								</tr>
								<tr>
									<td>004</td>
									<td>Chap 4</td>
									<td>Dinh tự Roswaal hạnh phúc</td>
									<td>4</td>
									<td>Re:Zero</td>
									<td>MangaVN</td>
									<td>4</td>
								</tr>
								<tr>
									<td>005</td>
									<td>Chap 5</td>
									<td>Ngày mà chúng ta hứa vẫn...</td>
									<td>5</td>
									<td>Re:Zero</td>
									<td>MangaVN</td>
									<td>4</td>
								</tr>
								<tr>
									<td>006</td>
									<td>Chap 6</td>
									<td>Âm thanh của xích</td>
									<td>6</td>
									<td>Attack on Titan</td>
									<td>A3manga</td>
									<td>4</td>
								</tr>
								<tr>
									<td>007</td>
									<td>Chap 7</td>
									<td>Bắt đầu lại 1 lần nữa</td>
									<td>7</td>
									<td>Attack on Titan</td>
									<td>Devil</td>
									<td>4</td>
								</tr>
								<tr>
									<td>008</td>
									<td>Chap 8</td>
									<td>Tôi khóc, khóc vì số phận...</td>
									<td>8</td>
									<td>Re:Zero</td>
									<td>MangaVN</td>
									<td>4</td>
								</tr>
								<tr>
									<td>009</td>
									<td>Chap 9</td>
									<td>Ý nghĩa của lòng dũng cảm</td>
									<td>9</td>
									<td>Re:Zero</td>
									<td>MangaVN</td>
									<td>4</td>
								</tr>
								<tr>
									<td>010</td>
									<td>Chap 10</td>
									<td>Cách quỷ nhập thân</td>
									<td>10</td>
									<td>Re:Zero</td>
									<td>MangaVN</td>
									<td>4</td>
								</tr>
							</tbody>
						</table>
					</div>
				</div>

				<div class="box box-primary collapse" id="box-view" aria-expanded="false">
					<div class="box-header with-border">
						<h3 class="box-title">Lượt Xem</h3>

						<div class="box-tools pull-right">
							<button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
							</button>
							<button type="button" class="btn btn-box-tool" data-remove="collapse"><i class="fa fa-times"></i></button>
						</div>
					</div>
					<div class="box-body">
						<table id="table-view" class="table table-bordered table-hover">
							<thead>
								<tr>
									<th>ID</th>
									<th>Tên chap</th>
									<th>Truyện</th>
									<th>Lượt xem ngày</th>
									<th>Lượt xem tuần</th>
									<th>Lượt xem tháng</th>
									<th>Lượt xem mùa</th>
									<th>Tổng lượt xem</th>
								</tr>
							</thead>
							<tbody>
								<tr>
									<td>001</td>
									<td>Chap 10</td>
									<td>Kakegurui</td>
									<td>10</td>
									<td>50</td>
									<td>100</td>
									<td>500</td>
									<td>1000</td>
								</tr>
								<tr>
									<td>002</td>
									<td>Chap 10</td>
									<td>Kakegurui</td>
									<td>10</td>
									<td>50</td>
									<td>100</td>
									<td>500</td>
									<td>1000</td>
								</tr>
								<tr>
									<td>003</td>
									<td>Chap 10</td>
									<td>Kakegurui</td>
									<td>10</td>
									<td>50</td>
									<td>100</td>
									<td>500</td>
									<td>1000</td>
								</tr>
								<tr>
									<td>004</td>
									<td>Chap 20</td>
									<td>Kakegurui</td>
									<td>10</td>
									<td>50</td>
									<td>100</td>
									<td>500</td>
									<td>1000</td>
								</tr>
								<tr>
									<td>005</td>
									<td>Chap 20</td>
									<td>Kakegurui</td>
									<td>10</td>
									<td>50</td>
									<td>100</td>
									<td>500</td>
									<td>1000</td>
								</tr>
								<tr>
									<td>006</td>
									<td>Chap 30</td>
									<td>Kakegurui</td>
									<td>10</td>
									<td>50</td>
									<td>100</td>
									<td>500</td>
									<td>1000</td>
								</tr>
								<tr>
									<td>007</td>
									<td>Chap 30</td>
									<td>Kakegurui</td>
									<td>10</td>
									<td>50</td>
									<td>100</td>
									<td>500</td>
									<td>1000</td>
								</tr>
								<tr>
									<td>008</td>
									<td>Chap 30</td>
									<td>Kakegurui</td>
									<td>10</td>
									<td>50</td>
									<td>100</td>
									<td>500</td>
									<td>1000</td>
								</tr>
								<tr>
									<td>009</td>
									<td>Chap 40</td>
									<td>Kakegurui</td>
									<td>10</td>
									<td>50</td>
									<td>100</td>
									<td>500</td>
									<td>1000</td>
								</tr>
								<tr>
									<td>010</td>
									<td>Chap 40</td>
									<td>Kakegurui</td>
									<td>10</td>
									<td>50</td>
									<td>100</td>
									<td>500</td>
									<td>1000</td>
								</tr>
							</tbody>
						</table>
					</div>
				</div>

				<div class="box box-primary collapse" id="box-like" aria-expanded="false">
					<div class="box-header with-border">
						<h3 class="box-title">Yêu thích</h3>

						<div class="box-tools pull-right">
							<button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
							</button>
							<button type="button" class="btn btn-box-tool" data-remove="collapse"><i class="fa fa-times"></i></button>
						</div>
					</div>
					<div class="box-body">
						<table id="table-like" class="table table-bordered table-hover">
							<thead>
								<tr>
									<th>ID</th>
									<th>Người yêu thích</th>
									<th>Truyện yêu thích</th>
									<th>Thời điểm yêu thích</th>
								</tr>
							</thead>
							<tbody>
								<tr>
									<td>001</td>
									<td>Nguyễn Văn Nam</td>
									<td>Kakegurui</td>
									<td>10:00am 12/4/2018</td>
								</tr>
								<tr>
									<td>002</td>
									<td>Nguyễn Văn Nam</td>
									<td>Kakegurui</td>
									<td>9:00pm 13/5/2018</td>
								</tr>
								<tr>
									<td>003</td>
									<td>Nguyễn Văn Nam</td>
									<td>Kakegurui</td>
									<td>8:00am 15/5/2018</td>
								</tr>
								<tr>
									<td>004</td>
									<td>Nguyễn Văn Nam</td>
									<td>Kakegurui</td>
									<td>8:00am 8/3/2019</td>
								</tr>
								<tr>
									<td>005</td>
									<td>Nguyễn Văn Nam</td>
									<td>Kakegurui</td>
									<td>8:00am 8/3/2019</td>
								</tr>
								<tr>
									<td>006</td>
									<td>Nguyễn Văn Nam</td>
									<td>Kakegurui</td>
									<td>12:00am 9/5/2019</td>
								</tr>
								<tr>
									<td>007</td>
									<td>Nguyễn Văn Nam</td>
									<td>Kakegurui</td>
									<td>3:35pm 2/2/2010</td>
								</tr>
								<tr>
									<td>008</td>
									<td>Nguyễn Văn Nam</td>
									<td>Kakegurui</td>
									<td>8:00pm 3/3/2013</td>
								</tr>
								<tr>
									<td>009</td>
									<td>Nguyễn Văn Nam</td>
									<td>Kakegurui</td>
									<td>9:00am 4/4/2015</td>
								</tr>
								<tr>
									<td>010</td>
									<td>Nguyễn Văn Nam</td>
									<td>Kakegurui</td>
									<td>4:00am 6/6/2016</td>
								</tr>
							</tbody>
						</table>
					</div>
				</div>

				<div class="box box-primary collapse" id="box-comment" aria-expanded="false">
					<div class="box-header with-border">
						<h3 class="box-title">Bình luận</h3>

						<div class="box-tools pull-right">
							<button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
							</button>
							<button type="button" class="btn btn-box-tool" data-remove="collapse"><i class="fa fa-times"></i></button>
						</div>
					</div>
					<div class="box-body">
						<table id="table-comment" class="table table-bordered table-hover">
							<thead>
								<tr>
									<th>ID</th>
									<th>Người bình luận</th>
									<th>Trang bình luận</th>
									<th>Level</th>
									<th>Bình luận cha</th>
									<th>Thời gian bình luận</th>
									<th>Nội dung</th>
								</tr>
							</thead>
							<tbody>
								<tr>
									<td>001</td>
									<td>Nguyễn Văn Nam</td>
									<td>Kakegurui</td>
									<td>1</td>
									<td>null</td>
									<td>10:00am 12/4/2018</td>
									<td>Lorem ipsum dolor sit amet, consectetur adipiscing elit</td>
								</tr>
								<tr>
									<td>002</td>
									<td>Nguyễn Văn Nam</td>
									<td>Kakegurui</td>
									<td>1</td>
									<td>null</td>
									<td>9:00pm 13/5/2018</td>
									<td>Lorem ipsum dolor sit amet, consectetur adipiscing elit</td>
								</tr>
								<tr>
									<td>003</td>
									<td>Nguyễn Văn Nam</td>
									<td>Kakegurui</td>
									<td>2</td>
									<td>001</td>
									<td>8:00am 15/5/2018</td>
									<td>Lorem ipsum dolor sit amet, consectetur adipiscing elit</td>
								</tr>
								<tr>
									<td>004</td>
									<td>Nguyễn Văn Nam</td>
									<td>Kakegurui</td>
									<td>2</td>
									<td>002</td>
									<td>8:00am 8/3/2019</td>
									<td>Lorem ipsum dolor sit amet, consectetur adipiscing elit</td>
								</tr>
								<tr>
									<td>005</td>
									<td>Nguyễn Văn Nam</td>
									<td>Chap 2 - Kakegurui</td>
									<td>1</td>
									<td>null</td>
									<td>8:00am 8/3/2019</td>
									<td>Lorem ipsum dolor sit amet, consectetur adipiscing elit</td>
								</tr>
								<tr>
									<td>006</td>
									<td>Nguyễn Văn Nam</td>
									<td>Chap 3 - Kakegurui</td>
									<td>1</td>
									<td>null</td>
									<td>12:00am 9/5/2019</td>
									<td>Lorem ipsum dolor sit amet, consectetur adipiscing elit</td>
								</tr>
								<tr>
									<td>007</td>
									<td>Nguyễn Văn Nam</td>
									<td>Kakegurui</td>
									<td>1</td>
									<td>null</td>
									<td>3:35pm 2/2/2010</td>
									<td>Lorem ipsum dolor sit amet, consectetur adipiscing elit</td>
								</tr>
								<tr>
									<td>008</td>
									<td>Nguyễn Văn Nam</td>
									<td>Chap 2 - Kakegurui</td>
									<td>2</td>
									<td>005</td>
									<td>8:00pm 3/3/2013</td>
									<td>Lorem ipsum dolor sit amet, consectetur adipiscing elit</td>
								</tr>
								<tr>
									<td>009</td>
									<td>Nguyễn Văn Nam</td>
									<td>Chap 3 - Kakegurui</td>
									<td>2</td>
									<td>006</td>
									<td>9:00am 4/4/2015</td>
									<td>Lorem ipsum dolor sit amet, consectetur adipiscing elit</td>
								</tr>
								<tr>
									<td>010</td>
									<td>Nguyễn Văn Nam</td>
									<td>Kakegurui</td>
									<td>1</td>
									<td>null</td>
									<td>4:00am 6/6/2016</td>
									<td>Lorem ipsum dolor sit amet, consectetur adipiscing elit</td>
								</tr>
							</tbody>
						</table>
					</div>
				</div>

				<div class="box box-primary collapse" id="box-follow" aria-expanded="false">
					<div class="box-header with-border">
						<h3 class="box-title">Theo dõi</h3>

						<div class="box-tools pull-right">
							<button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
							</button>
							<button type="button" class="btn btn-box-tool" data-remove="collapse"><i class="fa fa-times"></i></button>
						</div>
					</div>
					<div class="box-body">
						<table id="table-follow" class="table table-bordered table-hover">
							<thead>
								<tr>
									<th>ID</th>
									<th>Người theo dõi</th>
									<th>Truyện theo dõi</th>
									<th>Thời điểm theo dõi</th>
								</tr>
							</thead>
							<tbody>
								<tr>
									<td>001</td>
									<td>Nguyễn Văn Nam</td>
									<td>Kakegurui</td>
									<td>10:00am 12/4/2018</td>
								</tr>
								<tr>
									<td>002</td>
									<td>Nguyễn Văn Nam</td>
									<td>Kakegurui</td>
									<td>9:00pm 13/5/2018</td>
								</tr>
								<tr>
									<td>003</td>
									<td>Nguyễn Văn Nam</td>
									<td>Kakegurui</td>
									<td>8:00am 15/5/2018</td>
								</tr>
								<tr>
									<td>004</td>
									<td>Nguyễn Văn Nam</td>
									<td>Kakegurui</td>
									<td>8:00am 8/3/2019</td>
								</tr>
								<tr>
									<td>005</td>
									<td>Nguyễn Văn Nam</td>
									<td>Kakegurui</td>
									<td>8:00am 8/3/2019</td>
								</tr>
								<tr>
									<td>006</td>
									<td>Nguyễn Văn Nam</td>
									<td>Kakegurui</td>
									<td>12:00am 9/5/2019</td>
								</tr>
								<tr>
									<td>007</td>
									<td>Nguyễn Văn Nam</td>
									<td>Kakegurui</td>
									<td>3:35pm 2/2/2010</td>
								</tr>
								<tr>
									<td>008</td>
									<td>Nguyễn Văn Nam</td>
									<td>Kakegurui</td>
									<td>8:00pm 3/3/2013</td>
								</tr>
								<tr>
									<td>009</td>
									<td>Nguyễn Văn Nam</td>
									<td>Kakegurui</td>
									<td>9:00am 4/4/2015</td>
								</tr>
								<tr>
									<td>010</td>
									<td>Nguyễn Văn Nam</td>
									<td>Kakegurui</td>
									<td>4:00am 6/6/2016</td>
								</tr>
							</tbody>
						</table>
					</div>
				</div>

				<div class="box box-primary collapse" id="box-rate" aria-expanded="false">
					<div class="box-header with-border">
						<h3 class="box-title">Đánh giá</h3>

						<div class="box-tools pull-right">
							<button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
							</button>
							<button type="button" class="btn btn-box-tool" data-remove="collapse"><i class="fa fa-times"></i></button>
						</div>
					</div>
					<div class="box-body">
						<table id="table-rate" class="table table-bordered table-hover">
							<thead>
								<tr>
									<th>ID</th>
									<th>Người đánh giá</th>
									<th>Truyện đánh giá</th>
									<th>Thời điểm đánh giá</th>
									<th>Điểm đánh giá</th>
								</tr>
							</thead>
							<tbody>
								<tr>
									<td>001</td>
									<td>Nguyễn Văn Nam</td>
									<td>Kakegurui</td>
									<td>10:00am 12/4/2018</td>
									<td>5</td>
								</tr>
								<tr>
									<td>002</td>
									<td>Lê Thị Hồng</td>
									<td>Kakegurui</td>
									<td>9:00pm 13/5/2018</td>
									<td>4</td>
								</tr>
								<tr>
									<td>003</td>
									<td>Lý Quốc Trung</td>
									<td>Konosuba</td>
									<td>8:00am 15/5/2018</td>
									<td>5</td>
								</tr>
								<tr>
									<td>004</td>
									<td>Hoàng Văn Quang</td>
									<td>Konosuba</td>
									<td>8:00am 8/3/2019</td>
									<td>4</td>
								</tr>
								<tr>
									<td>005</td>
									<td>Phạm Thị Hoa</td>
									<td>Attack on Titan</td>
									<td>8:00am 8/3/2019</td>
									<td>5</td>
								</tr>
								<tr>
									<td>006</td>
									<td>Trần Văn Giàu</td>
									<td>Attack on Titan</td>
									<td>12:00am 9/5/2019</td>
									<td>4</td>
								</tr>
								<tr>
									<td>007</td>
									<td>Võ Thị Trinh</td>
									<td>Darling in the FranXX</td>
									<td>3:35pm 2/2/2010</td>
									<td>3</td>
								</tr>
								<tr>
									<td>008</td>
									<td>Ngô Thành Ý</td>
									<td>Darling in the FranXX</td>
									<td>8:00pm 3/3/2013</td>
									<td>4</td>
								</tr>
								<tr>
									<td>009</td>
									<td>Nguyễn Tấn Tài</td>
									<td>Another</td>
									<td>9:00am 4/4/2015</td>
									<td>2</td>
								</tr>
								<tr>
									<td>010</td>
									<td>Lương Cường</td>
									<td>Another</td>
									<td>4:00am 6/6/2016</td>
									<td>3</td>
								</tr>
							</tbody>
						</table>
					</div>
				</div>

				<div class="box box-primary collapse" id="box-character" aria-expanded="false">
					<div class="box-header with-border">
						<h3 class="box-title">Nhân vật</h3>

						<div class="box-tools pull-right">
							<button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
							</button>
							<button type="button" class="btn btn-box-tool" data-remove="collapse"><i class="fa fa-times"></i></button>
						</div>
					</div>
					<div class="box-body">
						<table id="table-character" class="table table-bordered table-hover">
							<thead>
								<tr>
									<th>ID</th>
									<th>Tên nhân vật</th>
									<th>Truyện</th>
									<th>Giới tính</th>
									<th>Ngày sinh</th>
									<th>Loại nhân vật</th>
									<th>Gia đình</th>
									<th>Nghề nghiệp</th>
									<th>Sở thích</th>
									<th>Giới thiệu</th>
									<th class="column-fixed-80">Tùy chọn</th>
								</tr>
							</thead>
							<tbody>
								<tr>
									<td>001</td>
									<td>Kirito</td>
									<td>Sword Art Online</td>
									<td>Nam</td>
									<td>13/2/2056</td>
									<td>Nhân vật chính</td>
									<td>1 người em gái</td>
									<td>Học sinh</td>
									<td>Chơi game</td>
									<td>Lorem ipsum dolor sit amet, consectetur adipiscing elit</td>
									<td>
										<button class="btn btn-success box-link" data-target="#box-edit-character" data-small="database">sửa</button>
										<button class="btn btn-danger" data-toggle="modal" data-target="#modal-remove-character">xóa</button>
									</td>
								</tr>
								<tr>
									<td>002</td>
									<td>Asuna</td>
									<td>Sword Art Online</td>
									<td>Nữ</td>
									<td>16/4/2055</td>
									<td>Nhân vật chính</td>
									<td>Không rõ</td>
									<td>Học sinh</td>
									<td>Chơi game</td>
									<td>Lorem ipsum dolor sit amet, consectetur adipiscing elit</td>
									<td>
										<button class="btn btn-success box-link" data-target="#box-edit-character" data-small="database">sửa</button>
										<button class="btn btn-danger" data-toggle="modal" data-target="#modal-remove-character">xóa</button>
									</td>
								</tr>
								<tr>
									<td>003</td>
									<td>Kazuma</td>
									<td>Konosuba</td>
									<td>Nam</td>
									<td>20/5/2017</td>
									<td>Nhân vật chính</td>
									<td>Cha, mẹ</td>
									<td>Otaku</td>
									<td>Làm otaku</td>
									<td>Lorem ipsum dolor sit amet, consectetur adipiscing elit</td>
									<td>
										<button class="btn btn-success box-link" data-target="#box-edit-character" data-small="database">sửa</button>
										<button class="btn btn-danger" data-toggle="modal" data-target="#modal-remove-character">xóa</button>
									</td>
								</tr>
								<tr>
									<td>004</td>
									<td>Aqua</td>
									<td>Konosuba</td>
									<td>Nữ</td>
									<td>Không rõ</td>
									<td>Nhân vật chính</td>
									<td>Không rõ</td>
									<td>Nữ thần</td>
									<td>Ăn chơi</td>
									<td>Lorem ipsum dolor sit amet, consectetur adipiscing elit</td>
									<td>
										<button class="btn btn-success box-link" data-target="#box-edit-character" data-small="database">sửa</button>
										<button class="btn btn-danger" data-toggle="modal" data-target="#modal-remove-character">xóa</button>
									</td>
								</tr>
								<tr>
									<td>005</td>
									<td>Shidou</td>
									<td>Date A Live</td>
									<td>Nam</td>
									<td>31/3/2000</td>
									<td>Nhân vật chính</td>
									<td>1 em gái</td>
									<td>học sinh</td>
									<td>lập harem</td>
									<td>Lorem ipsum dolor sit amet, consectetur adipiscing elit</td>
									<td>
										<button class="btn btn-success box-link" data-target="#box-edit-character" data-small="database">sửa</button>
										<button class="btn btn-danger" data-toggle="modal" data-target="#modal-remove-character">xóa</button>
									</td>
								</tr>
								<tr>
									<td>006</td>
									<td>Tohka</td>
									<td>Date A Live</td>
									<td>Nữ</td>
									<td>Không rõ</td>
									<td>Nhân vật chính</td>
									<td>Không rõ</td>
									<td>Tinh linh</td>
									<td>Thích Shidou</td>
									<td>Lorem ipsum dolor sit amet, consectetur adipiscing elit</td>
									<td>
										<button class="btn btn-success">sửa</button>
										<button class="btn btn-danger">xóa</button>
									</td>
								</tr>
								<tr>
									<td>007</td>
									<td>Eren</td>
									<td>Attack on Titan</td>
									<td>Nam</td>
									<td>2/1/1999</td>
									<td>Nhân vật chính</td>
									<td>Cha, mẹ, 1 em gái nuôi</td>
									<td>Phụ giúp gia đình</td>
									<td>Tìm hiểu thế giới</td>
									<td>Lorem ipsum dolor sit amet, consectetur adipiscing elit</td>
									<td>
										<button class="btn btn-success">sửa</button>
										<button class="btn btn-danger">xóa</button>
									</td>
								</tr>
								<tr>
									<td>008</td>
									<td>Levi</td>
									<td>Attack on Titan</td>
									<td>Nam</td>
									<td>3/3/1994</td>
									<td>Nhân vật chính</td>
									<td>Không rõ</td>
									<td>Chiến binh</td>
									<td>Tiêu diệt Titan</td>
									<td>Lorem ipsum dolor sit amet, consectetur adipiscing elit</td>
									<td>
										<button class="btn btn-success">sửa</button>
										<button class="btn btn-danger">xóa</button>
									</td>
								</tr>
								<tr>
									<td>009</td>
									<td>Yumeko</td>
									<td>Kakegurui</td>
									<td>Nữ</td>
									<td>5/5/1996</td>
									<td>Nhân vật chính</td>
									<td>Không rõ</td>
									<td>Học sinh</td>
									<td>Đánh bạc</td>
									<td>Lorem ipsum dolor sit amet, consectetur adipiscing elit</td>
									<td>
										<button class="btn btn-success">sửa</button>
										<button class="btn btn-danger">xóa</button>
									</td>
								</tr>
								<tr>
									<td>010</td>
									<td>Suzui</td>
									<td>Kakegurui</td>
									<td>Nam</td>
									<td>2/2/1996</td>
									<td>Nhân vật nền</td>
									<td>Không rõ</td>
									<td>Học sinh</td>
									<td>Dại gái</td>
									<td>Lorem ipsum dolor sit amet, consectetur adipiscing elit</td>
									<td>
										<button class="btn btn-success">sửa</button>
										<button class="btn btn-danger">xóa</button>
									</td>
								</tr>
							</tbody>
						</table>
					</div>
					<div class="box-footer">
						<button class="btn btn-primary box-link" data-target="#box-new-character" data-small="database">Thêm nhân vật</button>
					</div>
				</div>

				<div class="box box-primary collapse" id="box-author" aria-expanded="false">
					<div class="box-header with-border">
						<h3 class="box-title">Tác giả</h3>

						<div class="box-tools pull-right">
							<button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
							</button>
							<button type="button" class="btn btn-box-tool" data-remove="collapse"><i class="fa fa-times"></i></button>
						</div>
					</div>
					<div class="box-body">
						<table id="table-author" class="table table-bordered table-hover">
							<thead>
								<tr>
									<th>ID</th>
									<th>Tên tác giả</th>
									<th>Giới tính</th>
									<th>Loại tác giả</th>
									<th>Facebook</th>
									<th>Twitter</th>
									<th>Website</th>
									<th>Sở thích</th>
									<th>Giới thiệu</th>
									<th class="column-fixed-80">Tùy chọn</th>
								</tr>
							</thead>
							<tbody>
								<tr>
									<td>001</td>
									<td>Maruyama Kugane</td>
									<td>Nam</td>
									<td>Viết kịch bản</td>
									<td>Đang cập nhật</td>
									<td>Đang cập nhật</td>
									<td>Đang cập nhật</td>
									<td>Thể thao</td>
									<td>Lorem ipsum dolor sit amet, consectetur adipiscing elit</td>
									<td>
										<button class="btn btn-success box-link" data-target="#box-edit-author" data-small="database">sửa</button>
										<button class="btn btn-danger" data-toggle="modal" data-target="#modal-remove-author">xóa</button>
									</td>
								</tr>
								<tr>
									<td>001</td>
									<td>Maruyama Kugane</td>
									<td>Nam</td>
									<td>Viết kịch bản</td>
									<td>Đang cập nhật</td>
									<td>Đang cập nhật</td>
									<td>Đang cập nhật</td>
									<td>Thể thao</td>
									<td>Lorem ipsum dolor sit amet, consectetur adipiscing elit</td>
									<td>
										<button class="btn btn-success">sửa</button>
										<button class="btn btn-danger">xóa</button>
									</td>
								</tr>
								<tr>
									<td>001</td>
									<td>Maruyama Kugane</td>
									<td>Nam</td>
									<td>Viết kịch bản</td>
									<td>Đang cập nhật</td>
									<td>Đang cập nhật</td>
									<td>Đang cập nhật</td>
									<td>Thể thao</td>
									<td>Lorem ipsum dolor sit amet, consectetur adipiscing elit</td>
									<td>
										<button class="btn btn-success">sửa</button>
										<button class="btn btn-danger">xóa</button>
									</td>
								</tr>
								<tr>
									<td>001</td>
									<td>Maruyama Kugane</td>
									<td>Nam</td>
									<td>Viết kịch bản</td>
									<td>Đang cập nhật</td>
									<td>Đang cập nhật</td>
									<td>Đang cập nhật</td>
									<td>Thể thao</td>
									<td>Lorem ipsum dolor sit amet, consectetur adipiscing elit</td>
									<td>
										<button class="btn btn-success">sửa</button>
										<button class="btn btn-danger">xóa</button>
									</td>
								</tr>
								<tr>
									<td>001</td>
									<td>Maruyama Kugane</td>
									<td>Nam</td>
									<td>Viết kịch bản</td>
									<td>Đang cập nhật</td>
									<td>Đang cập nhật</td>
									<td>Đang cập nhật</td>
									<td>Thể thao</td>
									<td>Lorem ipsum dolor sit amet, consectetur adipiscing elit</td>
									<td>
										<button class="btn btn-success">sửa</button>
										<button class="btn btn-danger">xóa</button>
									</td>
								</tr>
								<tr>
									<td>001</td>
									<td>Maruyama Kugane</td>
									<td>Nam</td>
									<td>Viết kịch bản</td>
									<td>Đang cập nhật</td>
									<td>Đang cập nhật</td>
									<td>Đang cập nhật</td>
									<td>Thể thao</td>
									<td>Lorem ipsum dolor sit amet, consectetur adipiscing elit</td>
									<td>
										<button class="btn btn-success">sửa</button>
										<button class="btn btn-danger">xóa</button>
									</td>
								</tr>
								<tr>
									<td>001</td>
									<td>Maruyama Kugane</td>
									<td>Nam</td>
									<td>Viết kịch bản</td>
									<td>Đang cập nhật</td>
									<td>Đang cập nhật</td>
									<td>Đang cập nhật</td>
									<td>Thể thao</td>
									<td>Lorem ipsum dolor sit amet, consectetur adipiscing elit</td>
									<td>
										<button class="btn btn-success">sửa</button>
										<button class="btn btn-danger">xóa</button>
									</td>
								</tr>
								<tr>
									<td>001</td>
									<td>Maruyama Kugane</td>
									<td>Nam</td>
									<td>Viết kịch bản</td>
									<td>Đang cập nhật</td>
									<td>Đang cập nhật</td>
									<td>Đang cập nhật</td>
									<td>Thể thao</td>
									<td>Lorem ipsum dolor sit amet, consectetur adipiscing elit</td>
									<td>
										<button class="btn btn-success">sửa</button>
										<button class="btn btn-danger">xóa</button>
									</td>
								</tr>
								<tr>
									<td>001</td>
									<td>Maruyama Kugane</td>
									<td>Nam</td>
									<td>Viết kịch bản</td>
									<td>Đang cập nhật</td>
									<td>Đang cập nhật</td>
									<td>Đang cập nhật</td>
									<td>Thể thao</td>
									<td>Lorem ipsum dolor sit amet, consectetur adipiscing elit</td>
									<td>
										<button class="btn btn-success">sửa</button>
										<button class="btn btn-danger">xóa</button>
									</td>
								</tr>
								<tr>
									<td>001</td>
									<td>Maruyama Kugane</td>
									<td>Nam</td>
									<td>Viết kịch bản</td>
									<td>Đang cập nhật</td>
									<td>Đang cập nhật</td>
									<td>Đang cập nhật</td>
									<td>Thể thao</td>
									<td>Lorem ipsum dolor sit amet, consectetur adipiscing elit</td>
									<td>
										<button class="btn btn-success">sửa</button>
										<button class="btn btn-danger">xóa</button>
									</td>
								</tr>
							</tbody>
						</table>
					</div>
					<div class="box-footer">
						<button class="btn btn-primary box-link" data-target="#box-new-author" data-small="database">Thêm tác giả</button>
					</div>
				</div>

				<div class="box box-primary collapse" id="box-user" aria-expanded="false">
					<div class="box-header with-border">
						<h3 class="box-title">Người dùng</h3>

						<div class="box-tools pull-right">
							<button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
							</button>
							<button type="button" class="btn btn-box-tool" data-remove="collapse"><i class="fa fa-times"></i></button>
						</div>
					</div>
					<div class="box-body">
						<table id="table-user" class="table table-bordered table-hover">
							<thead>
								<tr>
									<th>ID</th>
									<th>Tên người dùng</th>
									<th>Biệt hiệu</th>
									<th>Giới tính</th>
									<th>Ngày sinh</th>
									<th>Tính cách</th>
									<th>Thể loại yêu thích</th>
									<th>Facebook</th>
									<th>Twitter</th>
									<th>Câu logan</th>
								</tr>
							</thead>
							<tbody>
								<tr>
									<td>001</td>
									<td>Nguyễn Văn Nam</td>
									<td>Otaku</td>
									<td>Nam</td>
									<td>12/3/2019</td>
									<td>vui vẻ, hòa đồng</td>
									<td>Action, Fantasy, Magic</td>
									<td>Nam</td>
									<td>Nam</td>
									<td>Lorem ipsum</td>
								</tr>
								<tr>
									<td>002</td>
									<td>Nguyễn Văn Nam</td>
									<td>Otaku</td>
									<td>Nam</td>
									<td>12/3/2019</td>
									<td>vui vẻ, hòa đồng</td>
									<td>Action, Fantasy, Magic</td>
									<td>Nam</td>
									<td>Nam</td>
									<td>Lorem ipsum</td>
								</tr>
								<tr>
									<td>003</td>
									<td>Nguyễn Văn Nam</td>
									<td>Otaku</td>
									<td>Nam</td>
									<td>12/3/2019</td>
									<td>vui vẻ, hòa đồng</td>
									<td>Action, Fantasy, Magic</td>
									<td>Nam</td>
									<td>Nam</td>
									<td>Lorem ipsum</td>
								</tr>
								<tr>
									<td>004</td>
									<td>Nguyễn Văn Nam</td>
									<td>Otaku</td>
									<td>Nam</td>
									<td>12/3/2019</td>
									<td>vui vẻ, hòa đồng</td>
									<td>Action, Fantasy, Magic</td>
									<td>Nam</td>
									<td>Nam</td>
									<td>Lorem ipsum</td>
								</tr>
								<tr>
									<td>005</td>
									<td>Nguyễn Văn Nam</td>
									<td>Otaku</td>
									<td>Nam</td>
									<td>12/3/2019</td>
									<td>vui vẻ, hòa đồng</td>
									<td>Action, Fantasy, Magic</td>
									<td>Nam</td>
									<td>Nam</td>
									<td>Lorem ipsum</td>
								</tr>
								<tr>
									<td>006</td>
									<td>Nguyễn Văn Nam</td>
									<td>Otaku</td>
									<td>Nam</td>
									<td>12/3/2019</td>
									<td>vui vẻ, hòa đồng</td>
									<td>Action, Fantasy, Magic</td>
									<td>Nam</td>
									<td>Nam</td>
									<td>Lorem ipsum</td>
								</tr>
								<tr>
									<td>007</td>
									<td>Nguyễn Văn Nam</td>
									<td>Otaku</td>
									<td>Nam</td>
									<td>12/3/2019</td>
									<td>vui vẻ, hòa đồng</td>
									<td>Action, Fantasy, Magic</td>
									<td>Nam</td>
									<td>Nam</td>
									<td>Lorem ipsum</td>
								</tr>
								<tr>
									<td>008</td>
									<td>Nguyễn Văn Nam</td>
									<td>Otaku</td>
									<td>Nam</td>
									<td>12/3/2019</td>
									<td>vui vẻ, hòa đồng</td>
									<td>Action, Fantasy, Magic</td>
									<td>Nam</td>
									<td>Nam</td>
									<td>Lorem ipsum</td>
								</tr>
								<tr>
									<td>009</td>
									<td>Nguyễn Văn Nam</td>
									<td>Otaku</td>
									<td>Nam</td>
									<td>12/3/2019</td>
									<td>vui vẻ, hòa đồng</td>
									<td>Action, Fantasy, Magic</td>
									<td>Nam</td>
									<td>Nam</td>
									<td>Lorem ipsum</td>
								</tr>
								<tr>
									<td>010</td>
									<td>Nguyễn Văn Nam</td>
									<td>Otaku</td>
									<td>Nam</td>
									<td>12/3/2019</td>
									<td>vui vẻ, hòa đồng</td>
									<td>Action, Fantasy, Magic</td>
									<td>Nam</td>
									<td>Nam</td>
									<td>Lorem ipsum</td>
								</tr>
							</tbody>
						</table>
					</div>
				</div>

				<div class="box box-primary collapse" id="box-category" aria-expanded="false">
					<div class="box-header with-border">
						<h3 class="box-title">Thể loại</h3>

						<div class="box-tools pull-right">
							<button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
							</button>
							<button type="button" class="btn btn-box-tool" data-remove="collapse"><i class="fa fa-times"></i></button>
						</div>
					</div>
					<div class="box-body">
						<table id="table-category" class="table table-bordered table-hover">
							<thead>
								<tr>
									<th>ID</th>
									<th class="column-fixed-80">Tên thể loại</th>
									<th class="column-fixed-80">Tên khác</th>
									<th>Mô tả</th>
									<th class="column-fixed-80">Tùy chọn</th>
								</tr>
							</thead>
							<tbody>
								<tr>
									<td>001</td>
									<td>Action</td>
									<td>Hành động</td>
									<td>Thể loại này thường có nội dung về đánh nhau, bạo lực, hỗn loạn, với diễn biến nhanh</td>
									<td>
										<button class="btn btn-success box-link" data-target="#box-edit-category">Sửa</button>
										<button class="btn btn-danger" data-toggle="modal" data-target="#modal-remove-category">Xóa</button>
									</td>
								</tr>
								<tr>
									<td>002</td>
									<td>Adult</td>
									<td>Người lớn</td>
									<td>Thể loại có đề cập đến vấn đề nhạy cảm, chỉ dành cho tuổi 17+</td>
									<td>
										<button class="btn btn-success box-link" data-target="#box-edit-category">Sửa</button>
										<button class="btn btn-danger" data-toggle="modal" data-target="#modal-remove-category">Xóa</button>
									</td>
								</tr>
								<tr>
									<td>003</td>
									<td>Adventure</td>
									<td>Phiêu lưu</td>
									<td>Thể loại phiêu lưu, mạo hiểm, thường là hành trình của các nhân vật</td>
									<td>
										<button class="btn btn-success box-link" data-target="#box-edit-category">Sửa</button>
										<button class="btn btn-danger" data-toggle="modal" data-target="#modal-remove-category">Xóa</button>
									</td>
								</tr>
								<tr>
									<td>004</td>
									<td>Comedy</td>
									<td>Hài hước</td>
									<td>Thể loại có nội dung trong sáng và cảm động, thường có các tình tiết gây cười, các xung đột nhẹ nhàng</td>
									<td>
										<button class="btn btn-success box-link" data-target="#box-edit-category">Sửa</button>
										<button class="btn btn-danger">Xóa</button>
									</td>
								</tr>
								<tr>
									<td>005</td>
									<td>Cooking</td>
									<td>Nấu ăn</td>
									<td>Thể loại có nội dung về nấu ăn, ẩm thực</td>
									<td>
										<button class="btn btn-success box-link" data-target="#box-edit-category">Sửa</button>
										<button class="btn btn-danger" data-toggle="modal" data-target="#modal-remove-category">Xóa</button>
									</td>
								</tr>
								<tr>
									<td>006</td>
									<td>Demon</td>
									<td>Quỷ quái</td>
									<td>Thể loại có yêu tố ma quái, quỷ dữ, quái vật,...</td>
									<td>
										<button class="btn btn-success">Sửa</button>
										<button class="btn btn-danger">Xóa</button>
									</td>
								</tr>
								<tr>
									<td>007</td>
									<td>Doujinshi</td>
									<td>Phóng tác</td>
									<td>Thể loại truyện phóng tác do fan hay có thể cả những Mangaka khác với tác giả truyện gốc. Tác giả vẽ Doujinshi thường dựa trên những nhân vật gốc để viết ra những câu chuyện theo sở thích của mình</td>
									<td>
										<button class="btn btn-success">Sửa</button>
										<button class="btn btn-danger">Xóa</button>
									</td>
								</tr>
								<tr>
									<td>008</td>
									<td>Ecchi</td>
									<td>Gợi cảm</td>
									<td>Thường có những tình huống nhạy cảm nhằm lôi cuốn người xem</td>
									<td>
										<button class="btn btn-success">Sửa</button>
										<button class="btn btn-danger">Xóa</button>
									</td>
								</tr>
								<tr>
									<td>009</td>
									<td>Fantasy</td>
									<td>Phép thuật</td>
									<td>Thể loại xuất phát từ trí tưởng tượng phong phú, từ pháp thuật đến thế giới trong mơ thậm chí là những câu chuyện thần tiên</td>
									<td>
										<button class="btn btn-success">Sửa</button>
										<button class="btn btn-danger">Xóa</button>
									</td>
								</tr>
								<tr>
									<td>010</td>
									<td>Mystery</td>
									<td>Huyền bí</td>
									<td>Thể loại thường xuất hiện những điều bí ấn không thể lí giải được và sau đó là những nỗ lực của nhân vật chính nhằm tìm ra câu trả lời thỏa đáng</td>
									<td>
										<button class="btn btn-success">Sửa</button>
										<button class="btn btn-danger">Xóa</button>
									</td>
								</tr>
							</tbody>
						</table>
					</div>
					<div class="box-footer">
						<button class="btn btn-primary box-link" data-target="#box-new-category">Thêm thể loại</button>
					</div>
				</div>

				<div class="box box-primary collapse" id="box-trans" aria-expanded="false">
					<div class="box-header with-border">
						<h3 class="box-title">Nhóm dịch</h3>

						<div class="box-tools pull-right">
							<button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
							</button>
							<button type="button" class="btn btn-box-tool" data-remove="collapse"><i class="fa fa-times"></i></button>
						</div>
					</div>
					<div class="box-body">
						<table id="table-trans" class="table table-bordered table-hover">
							<thead>
								<tr>
									<th>ID</th>
									<th class="column-fixed-100">Tên nhóm dịch</th>
									<th class="column-fixed-100">Trưởng nhóm</th>
									<th class="column-fixed-100">Thành viên</th>
									<th>Facebook</th>
									<th>Mô tả</th>
									<th class="column-fixed-100">Tùy chọn</th>
								</tr>
							</thead>
							<tbody>
								<tr>
									<td>001</td>
									<td>A3Manga</td>
									<td>A3Manga</td>
									<td>A3Manga, A2Manga, A1Manga</td>
									<td>A3Manga</td>
									<td>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore </td>
									<td>
										<button class="btn btn-success box-link" data-target="#box-edit-trans">Sửa</button>
										<button class="btn btn-danger" data-toggle="modal" data-target="#modal-remove-trans">Xóa</button>
									</td>
								</tr>
								<tr>
									<td>002</td>
									<td>A3Manga</td>
									<td>A3Manga</td>
									<td>A3Manga, A2Manga, A1Manga</td>
									<td>A3Manga</td>
									<td>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore </td>
									<td>
										<button class="btn btn-success box-link" data-target="#box-edit-trans">Sửa</button>
										<button class="btn btn-danger" data-toggle="modal" data-target="#modal-remove-trans">Xóa</button>
									</td>
								</tr>
								<tr>
									<td>003</td>
									<td>MangaVN</td>
									<td>QuangManga</td>
									<td>QuangManga, HieuManga, NgaManga</td>
									<td>MangaVN</td>
									<td>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore </td>
									<td>
										<button class="btn btn-success box-link" data-target="#box-edit-trans">Sửa</button>
										<button class="btn btn-danger" data-toggle="modal" data-target="#modal-remove-trans">Xóa</button>
									</td>
								</tr>
								<tr>
									<td>004</td>
									<td>MangaVN</td>
									<td>QuangManga</td>
									<td>QuangManga, HieuManga, NgaManga</td>
									<td>MangaVN</td>
									<td>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore </td>
									<td>
										<button class="btn btn-success box-link" data-target="#box-edit-trans">Sửa</button>
										<button class="btn btn-danger">Xóa</button>
									</td>
								</tr>
								<tr>
									<td>005</td>
									<td>Dark Angels Group</td>
									<td>Lucifer</td>
									<td>Lucifer, Beelzebub, Leviathan, Asmodeus</td>
									<td>Dark Angels Group</td>
									<td>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore </td>
									<td>
										<button class="btn btn-success box-link" data-target="#box-edit-trans">Sửa</button>
										<button class="btn btn-danger" data-toggle="modal" data-target="#modal-remove-category">Xóa</button>
									</td>
								</tr>
								<tr>
									<td>006</td>
									<td>Dark Angels Group</td>
									<td>Lucifer</td>
									<td>Lucifer, Beelzebub, Leviathan, Asmodeus</td>
									<td>Dark Angels Group</td>
									<td>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore </td>
									<td>
										<button class="btn btn-success">Sửa</button>
										<button class="btn btn-danger">Xóa</button>
									</td>
								</tr>
								<tr>
									<td>007</td>
									<td>EiShun Team</td>
									<td>hongson97</td>
									<td>hongson97, hoanglong96, thanh98</td>
									<td>EiShun Team</td>
									<td>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore </td>
									<td>
										<button class="btn btn-success">Sửa</button>
										<button class="btn btn-danger">Xóa</button>
									</td>
								</tr>
								<tr>
									<td>008</td>
									<td>EiShun Team</td>
									<td>hongson97</td>
									<td>hongson97, hoanglong96, thanh98</td>
									<td>EiShun Team</td>
									<td>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore </td>
									<td>
										<button class="btn btn-success">Sửa</button>
										<button class="btn btn-danger">Xóa</button>
									</td>
								</tr>
								<tr>
									<td>009</td>
									<td>Blog Truyen</td>
									<td>OneForAll</td>
									<td>OneForAll, TwoForAll, ThreeForAll</td>
									<td>Blog Truyen</td>
									<td>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore </td>
									<td>
										<button class="btn btn-success">Sửa</button>
										<button class="btn btn-danger">Xóa</button>
									</td>
								</tr>
								<tr>
									<td>010</td>
									<td>Blog Truyen</td>
									<td>OneForAll</td>
									<td>OneForAll, TwoForAll, ThreeForAll</td>
									<td>Blog Truyen</td>
									<td>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore </td>
									<td>
										<button class="btn btn-success">Sửa</button>
										<button class="btn btn-danger">Xóa</button>
									</td>
								</tr>
							</tbody>
						</table>
					</div>
					<div class="box-footer">
						<button class="btn btn-primary box-link" data-target="#box-new-trans">Thêm nhóm dịch</button>
					</div>
				</div>

				<!-- Add, Edit Box -->
				<div class="box box-primary collapse" id="box-new-category" aria-expanded="false">
					<div class="box-header with-border">
						<h3 class="box-title">Thêm thể loại</h3>

						<div class="box-tools pull-right">
							<button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
							</button>
							<button type="button" class="btn btn-box-tool" data-remove="collapse"><i class="fa fa-times"></i></button>
						</div>
					</div>
					<form role="form">
						<div class="box-body">
							<div class="form-group">
								<label for="name">Tên thể loại</label>
								<input type="text" class="form-control" id="name" placeholder="tên thể loại">
							</div>
							<div class="form-group">
								<label for="name">Tên khác</label>
								<input type="text" class="form-control" id="name" placeholder="tên thể loại">
							</div>
							<div class="form-group">
								<label for="name">Mô tả</label>
								<textarea class="form-control" rows="3" placeholder="mô tả"></textarea>
							</div>
						</div>
						<div class="box-footer">
							<button type="submit" class="btn btn-primary">Thêm thể loại</button>
							<button type="button" class="btn btn-default box-link" data-target="#box-category">Quay lại</button>
						</div>
					</form>
				</div>

				<div class="box box-primary collapse" id="box-edit-category" aria-expanded="false">
					<div class="box-header with-border">
						<h3 class="box-title">Chỉnh sửa thể loại</h3>

						<div class="box-tools pull-right">
							<button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
							</button>
							<button type="button" class="btn btn-box-tool" data-remove="collapse"><i class="fa fa-times"></i></button>
						</div>
					</div>
					<form role="form">
						<div class="box-body">
							<div class="form-group">
								<label for="name">Tên thể loại</label>
								<input type="text" class="form-control" id="name" placeholder="tên thể loại" value="Action">
							</div>
							<div class="form-group">
								<label for="name">Tên khác</label>
								<input type="text" class="form-control" id="name" placeholder="tên thể loại" value="Hành động">
							</div>
							<div class="form-group">
								<label for="name">Mô tả</label>
								<textarea class="form-control" rows="3" placeholder="mô tả">Thể loại này thường có nội dung về đánh nhau, bạo lực, hỗn loạn, với diễn biến nhanh</textarea>
							</div>
						</div>
						<div class="box-footer">
							<button type="submit" class="btn btn-primary">Sửa thể loại</button>
							<button type="button" class="btn btn-default box-link" data-target="#box-category">Quay lại</button>
						</div>
					</form>
				</div>

				<div class="box box-primary collapse" id="box-new-trans" aria-expanded="false">
					<div class="box-header with-border">
						<h3 class="box-title">Thêm nhóm dịch</h3>

						<div class="box-tools pull-right">
							<button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
							</button>
							<button type="button" class="btn btn-box-tool" data-remove="collapse"><i class="fa fa-times"></i></button>
						</div>
					</div>
					<form role="form">
						<div class="box-body">
							<div class="form-group">
								<label for="name">Tên nhóm dịch</label>
								<input type="text" class="form-control" id="name" placeholder="tên nhóm dịch">
							</div>
							<div class="form-group">
								<label for="name">Trưởng nhóm</label>
								<input type="text" class="form-control" id="name" placeholder="tên trưởng nhóm">
							</div>
							<div class="form-group">
								<label for="name">Thành viên</label>
								<input type="text" class="form-control" id="name" placeholder="tên thành viên">
							</div>
							<div class="form-group">
								<label for="name">Mô tả</label>
								<textarea name="trans-content-new" class="form-control" rows="3" placeholder="mô tả"></textarea>
							</div>
						</div>
						<div class="box-footer">
							<button type="submit" class="btn btn-primary">Thêm thể loại</button>
							<button type="button" class="btn btn-default box-link" data-target="#box-trans">Quay lại</button>
						</div>
					</form>
				</div>

				<div class="box box-primary collapse" id="box-edit-trans" aria-expanded="false">
					<div class="box-header with-border">
						<h3 class="box-title">Chỉnh sửa nhóm dịch</h3>

						<div class="box-tools pull-right">
							<button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
							</button>
							<button type="button" class="btn btn-box-tool" data-remove="collapse"><i class="fa fa-times"></i></button>
						</div>
					</div>
					<form role="form">
						<div class="box-body">
							<div class="form-group">
								<label for="name">Tên nhóm dịch</label>
								<input type="text" class="form-control" id="name" placeholder="tên nhóm dịch" value="A3Manga">
							</div>
							<div class="form-group">
								<label for="name">Trưởng nhóm</label>
								<input type="text" class="form-control" id="name" placeholder="tên trưởng nhóm" value="A3Manga">
							</div>
							<div class="form-group">
								<label for="name">Thành viên</label>
								<input type="text" class="form-control" id="name" placeholder="tên thành viên" value="A3Manga, A2Manga, A1Manga">
							</div>
							<div class="form-group">
								<label for="name">Mô tả</label>
								<textarea class="form-control" name="trans-content-edit" rows="3" placeholder="mô tả">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore </textarea>
							</div>
						</div>
						<div class="box-footer">
							<button type="submit" class="btn btn-primary">Thêm thể loại</button>
							<button type="button" class="btn btn-default box-link" data-target="#box-trans">Quay lại</button>
						</div>
					</form>
				</div>

				<div class="box box-primary collapse" id="box-new-character" aria-expanded="false">
					<div class="box-header with-border">
						<h3 class="box-title">Thêm nhân vật</h3>

						<div class="box-tools pull-right">
							<button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
							</button>
							<button type="button" class="btn btn-box-tool" data-remove="collapse"><i class="fa fa-times"></i></button>
						</div>
					</div>
					<form role="form">
						<div class="box-body">
							<div class="form-group">
								<label for="name">Tên nhân vật</label>
								<input type="text" class="form-control" placeholder="tên nhân vật">
							</div>
							<div class="form-group">
								<label for="name">Truyện</label>
								<input type="text" class="form-control" placeholder="tên truyện">
							</div>
							<div class="form-group">
								<label for="name">Giới tính</label>
								<input type="text" class="form-control" placeholder="giới tính">
							</div>
							<div class="form-group">
								<label for="name">Ngày sinh</label>
								<input type="text" id="character-birthday-new" class="form-control" placeholder="ngày">
							</div>
							<div class="form-group">
								<label for="name">Loại nhân vật</label>
								<input type="text" class="form-control" placeholder="loại nhân vật">
							</div>
							<div class="form-group">
								<label for="name">Gia đình</label>
								<input type="text" class="form-control" placeholder="gia đình">
							</div>
							<div class="form-group">
								<label for="name">Nghề nghiệp</label>
								<input type="text" class="form-control" placeholder="nghề nghiệp">
							</div>
							<div class="form-group">
								<label for="name">Sở thích</label>
								<input type="text" class="form-control" placeholder="sở thích">
							</div>
							<div class="form-group">
								<label for="name">Giới thiệu</label>
								<textarea class="form-control" name="character-content-new" rows="3" placeholder="giới thiệu"></textarea>
							</div>
						</div>
						<div class="box-footer">
							<button type="submit" class="btn btn-primary">Thêm nhân vật</button>
							<button type="button" class="btn btn-default box-link" data-target="#box-character" data-small="database" data-with="#box-author">Quay lại</button>
						</div>
					</form>
				</div>

				<div class="box box-primary collapse" id="box-edit-character" aria-expanded="false">
					<div class="box-header with-border">
						<h3 class="box-title">Chỉnh sửa nhân vật</h3>

						<div class="box-tools pull-right">
							<button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
							</button>
							<button type="button" class="btn btn-box-tool" data-remove="collapse"><i class="fa fa-times"></i></button>
						</div>
					</div>
					<form role="form">
						<div class="box-body">
							<div class="form-group">
								<label for="name">Tên nhân vật</label>
								<input type="text" class="form-control" id="name" placeholder="tên nhóm dịch" value="Kirito">
							</div>
							<div class="form-group">
								<label for="name">Truyện</label>
								<input type="text" class="form-control" id="name" placeholder="tên trưởng nhóm" value="Sword Art Online">
							</div>
							<div class="form-group">
								<label for="name">Giới tính</label>
								<input type="text" class="form-control" id="name" placeholder="tên thành viên" value="Nam">
							</div>
							<div class="form-group">
								<label for="name">Ngày sinh</label>
								<input type="text" class="form-control" id="character-birthday-edit" placeholder="năm" value="3/3/2056">
							</div>
							<div class="form-group">
								<label for="name">Loại nhân vật</label>
								<input type="text" class="form-control" id="name" placeholder="tên thành viên" value="nhân vật chính">
							</div>
							<div class="form-group">
								<label for="name">Gia đình</label>
								<input type="text" class="form-control" id="name" placeholder="tên thành viên" value="1 người em">
							</div>
							<div class="form-group">
								<label for="name">Nghề nghiệp</label>
								<input type="text" class="form-control" id="name" placeholder="tên thành viên" value="học sinh">
							</div>
							<div class="form-group">
								<label for="name">Sở thích</label>
								<input type="text" class="form-control" id="name" placeholder="tên thành viên" value="chơi game">
							</div>
							<div class="form-group">
								<label for="name">Mô tả</label>
								<textarea class="form-control" name="character-content-edit" rows="3" placeholder="mô tả">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea</textarea>
							</div>
						</div>
						<div class="box-footer">
							<button type="submit" class="btn btn-success">Thay đổi</button>
							<button type="button" class="btn btn-default box-link" data-target="#box-character">Quay lại</button>
						</div>
					</form>
				</div>

				<div class="box box-primary collapse" id="box-new-author" aria-expanded="false">
					<div class="box-header with-border">
						<h3 class="box-title">Thêm tác giả</h3>

						<div class="box-tools pull-right">
							<button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
							</button>
							<button type="button" class="btn btn-box-tool" data-remove="collapse"><i class="fa fa-times"></i></button>
						</div>
					</div>
					<form role="form">
						<div class="box-body">
							<div class="form-group">
								<label for="name">Tên tác giả</label>
								<input type="text" class="form-control" id="name" placeholder="tên nhân vật">
							</div>
							<div class="form-group">
								<label for="name">Giới tính</label>
								<input type="text" class="form-control" id="name" placeholder="tên truyện">
							</div>
							<div class="form-group">
								<label for="name">Loại tác giả</label>
								<input type="text" class="form-control" id="name" placeholder="ngày sinh">
							</div>
							<div class="form-group">
								<label for="name">Facebook</label>
								<input type="text" class="form-control" id="name" placeholder="ngày">
							</div>
							<div class="form-group">
								<label for="name">Twitter</label>
								<input type="text" class="form-control" id="name" placeholder="loại nhân vật">
							</div>
							<div class="form-group">
								<label for="name">Website</label>
								<input type="text" class="form-control" id="name" placeholder="gia đình">
							</div>
							<div class="form-group">
								<label for="name">Sở thích</label>
								<input type="text" class="form-control" id="name" placeholder="sở thích">
							</div>
							<div class="form-group">
								<label for="name">Giới thiệu</label>
								<textarea class="form-control" name="author-content-new" rows="3" placeholder="giới thiệu"></textarea>
							</div>
						</div>
						<div class="box-footer">
							<button type="submit" class="btn btn-primary">Thêm tác giả</button>
							<button type="button" class="btn btn-default box-link" data-target="#box-character" data-small="database" data-with="#box-author">Quay lại</button>
						</div>
					</form>
				</div>

				<div class="box box-primary collapse" id="box-edit-author" aria-expanded="false">
					<div class="box-header with-border">
						<h3 class="box-title">Chỉnh sửa tác giả</h3>

						<div class="box-tools pull-right">
							<button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
							</button>
							<button type="button" class="btn btn-box-tool" data-remove="collapse"><i class="fa fa-times"></i></button>
						</div>
					</div>
					<form role="form">
						<div class="box-body">
							<div class="form-group">
								<label for="name">Tên tác giả</label>
								<input type="text" class="form-control" id="name" placeholder="tên tác giả" value="Maruyama Kugane">
							</div>
							<div class="form-group">
								<label for="name">Giới tính</label>
								<input type="text" class="form-control" id="name" placeholder="giới tính" value="nam">
							</div>
							<div class="form-group">
								<label for="name">Loại tác giả</label>
								<input type="text" class="form-control" id="name" placeholder="loại tác giả">
							</div>
							<div class="form-group">
								<label for="name">Facebook</label>
								<input type="text" class="form-control" id="name" placeholder="facebook" value="fb.com/MaruyamaKugane">
							</div>
							<div class="form-group">
								<label for="name">Twitter</label>
								<input type="text" class="form-control" id="name" placeholder="twitter" value="tw.com/MaruyamaKugane">
							</div>
							<div class="form-group">
								<label for="name">Website</label>
								<input type="text" class="form-control" id="name" placeholder="website" value="MaruyamaKugane.com">
							</div>
							<div class="form-group">
								<label for="name">Sở thích</label>
								<input type="text" class="form-control" id="name" placeholder="sở thích" value="thể thao">
							</div>
							<div class="form-group">
								<label for="name">Giới thiệu</label>
								<textarea class="form-control" name="author-content-edit" rows="3" placeholder="giới thiệu">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</textarea>
							</div>
						</div>
						<div class="box-footer">
							<button type="submit" class="btn btn-success">Thay đổi</button>
							<button type="button" class="btn btn-default box-link" data-target="#box-character" data-small="database" data-with="#box-author">Quay lại</button>
						</div>
					</form>
				</div>
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
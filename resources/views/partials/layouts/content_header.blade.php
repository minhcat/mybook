<header>
	<div class="banner">
		<div class="container clearfix">
			<div class="header left">
				<div class="logo">
					<h1>{{ $system['website_name'] }}</h1>
					<img src="{{ asset('image/system/'.$system['logo']) }}">
				</div>
				<p>{{ $system['slogan'] }}</p>
			</div>
			<div class="image right">
				<img src="{{ asset('image/system/'.$system['header_image_1']) }}" class="img-circle">
				<img src="{{ asset('image/system/'.$system['header_image_2']) }}" class="img-circle">
				<img src="{{ asset('image/system/'.$system['header_image_3']) }}" class="img-circle">
			</div>
		</div>
	</div>
	<div class="menu">
		<div class="container">
			<nav class="navbar">
				<div class="navbar-header">
					<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#menu-left">
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
					<div class="search">
						<div class="content">
							<input type="text" placeholder="tìm kiếm">
							<span class="glyphicon glyphicon-search"></span>
						</div>
						<!-- <a href="#" class="dropdown-toggle" data-toggle="dropdown">Tình Trạng <span class="caret"></span></a> -->
						<ul class="dropdown-menu">
							<li class="clearfix">
								<img src="{{ asset('image/bang-hoai-3rd.jpg') }}" class="image" alt="" width="60px" height="60px">
								<div class="info">
									<a href="detail-book.html" class="name">Băng Hoại 3rd</a>
									<div class="more">Lorem ipsum dolor sit amet, consec tetur adipisicing elit. Porro, ea.</div>
								</div>
							</li>
							<li class="clearfix">
								<img src="{{ asset('image/boruto.jpg') }}" class="image" alt="" width="60px" height="60px">
								<div class="info">
									<a href="detail-book.html" class="name">Boruto</a>
									<div class="more">Lorem ipsum dolor sit amet, consec tetur adipisicing elit. Porro, ea.</div>
								</div>
							</li>
							<li class="clearfix">
								<img src="{{ asset('image/mahoutsukai-no-yome.jpg') }}" class="image" alt="" width="60px" height="60px">
								<div class="info">
									<a href="detail-book.html" class="name">Mahoutsukai no Yome</a>
									<div class="more">Lorem ipsum dolor sit amet, consec tetur adipisicing elit. Porro, ea.</div>
								</div>
							</li>
							<li class="clearfix">
								<img src="{{ asset('image/himouto-umaru-chan.jpg') }}" class="image" alt="" width="60px" height="60px">
								<div class="info">
									<a href="detail-book.html" class="name">Himouto Umaru-chan</a>
									<div class="more">Lorem ipsum dolor sit amet, consec tetur adipisicing elit. Porro, ea.</div>
								</div>
							</li>
							<hr>
							<li class="search-more">
								<a href="search-more" class="search-more" onclick="window.open('{{ url('/list/search') }}')">Tìm kiếm nâng cao</a>
							</li>
						</ul>
					</div>
				</div>
				<div class="collapse navbar-collapse" id="menu-left">
					<ul class="nav navbar-nav">
						<li class="active"><a rel="notfollow" class="page"><span class="glyphicon glyphicon-home"></span></a></li>
						<li class="hide-xs"><a href="{{ url('/list/view') }}" class="page">Truyện Hot</a></li>
						<li class="hide-xs"><a href="{{ url('/list/update') }}" class="page">Mới Cập Nhật</a></li>
						<li class="dropdown">
							<a rel="notfollow" class="page dropdown-toggle" data-toggle="dropdown">Thể Loại <span class="caret"></span></a>
							
							<ul class="dropdown-menu more">
								@foreach ($categories as $group_category)
								<li>
									<div class="row">
										@foreach ($group_category as $key => $category)
										<div class="col-lg-3 col-md-3 col-sm-3 col-xs-3 col-6 {{ ($key == 0) ? 'first' : (($key == 3) ? 'last' : 'next') }}"><a href="{{ url('/list/category/'.$category->slug) }}">{{ ucwords($category->name) }}</a></div>
										@endforeach
									</div>
								</li>
								@endforeach
							</ul>
						</li>
						<li class="dropdown hide-md">
							<a rel="notfollow" class="page dropdown-toggle" data-toggle="dropdown">Năm Xuất Bản <span class="caret"></span></a>
							
							<ul class="dropdown-menu">
								@foreach ($years as $year)
								<li><a href="{{ url('/list/year/'.$year) }}" class="page">{{ $year }}</a></li>
								@endforeach
							</ul>
						</li>
						<li class="dropdown hide-md">
							<a rel="notfollow" class="page dropdown-toggle" data-toggle="dropdown">Tình Trạng <span class="caret"></span></a>
							
							<ul class="dropdown-menu">
								<li><a href="{{ url('/list/completed') }}" class="page">Đã hoàn thành</a></li>
								<li><a href="{{ url('/list/process') }}" class="page">Đang tiến hành</a></li>
							</ul>
						</li>
					</ul>
				
					<div class="search">
						<div class="content">
							<input type="text" placeholder="tìm kiếm">
							<span class="glyphicon glyphicon-search"></span>
						</div>
						<!-- <a href="#" class="dropdown-toggle" data-toggle="dropdown">Tình Trạng <span class="caret"></span></a> -->
						<ul class="dropdown-menu">
							
							<hr>
							<li class="search-more">
								<a href="{{ url('/list/search') }}" class="search-more"onclick="window.open('{{ url('/list/search') }}')">Tìm kiếm nâng cao</a>
							</li>
						</ul>
					</div>
					@if (Auth::check())
					<ul class="nav navbar-nav navbar-right hide-sm">
							<li>
								<a rel="notfollow"  class="page dropdown-toggle" data-toggle="dropdown"><span class="fa fa-bell"></span> Thông Báo</a>
								<ul class="dropdown-menu menu2">
									<li class="clearfix">
										<img src="image/bang-hoai-3rd.jpg" class="image img-circle" alt="" width="60px" height="60px">
										<div class="info">
											<div class="content"><a href="detail-book.html">Băng Hoại 3rd</a> ra chap mới: chap 78 - Dinh tự của Issac</div>
											<div class="time">1 giờ trước</div>
										</div>
									</li>
									<li class="clearfix">
										<img src="image/boruto.jpg" class="image img-circle" alt="" width="60px" height="60px">
										<div class="info">
											<div class="content"><a href="detail-book.html">Boruto</a> ra chap mới: chap 128 - Ác quỷ xuất hiện</div>
											<div class="time">2 giờ trước</div>
										</div>
									</li>
									<li class="clearfix">
										<img src="image/mahoutsukai-no-yome.jpg" class="image img-circle" alt="" width="60px" height="60px">
										<div class="info">
											<div class="content"><a href="detail-book.html">Mahoutsuki no Yome</a> ra chap mới: chap 25 - Không kẻ nào điếc hơn kẻ không muốn nghe</div>
											<div class="time">1 ngày trước</div>
										</div>
									</li>
									<li class="clearfix">
										<img src="image/A-kun.jpg" class="image img-circle" alt="" width="60px" height="60px">
										<div class="info">
											<div class="content"><a href="">A-kun</a> trả lời bình luận của bạn: Lorem ipsum dolor sit amet.</div>
											<div class="time">5 ngày trước</div>
										</div>
									</li>
									<li class="clearfix">
										<img src="image/Eren.jpg" class="image img-circle" alt="" width="60px" height="60px">
										<div class="info">
											<div class="content"><a href="">Eren</a> trả lời bình luận của bạn: Lorem ipsum dolor sit amet, consectetur.</div>
											<div class="time">ngày 25/12/2017</div>
										</div>
									</li>
									<hr>
									<li class="all-noti">
										<a href="notification.html">Xem tất cả</a>
									</li>
								</ul>
							</li>
							<li>
								<a rel="notfollow" class="page user dropdown-toggle" data-toggle="dropdown"><img src="image/Asuna.jpg" class="img-circle" width="35px" alt="">&nbsp;&nbsp;Asuna</a>
								<ul class="dropdown-menu menu2 user">
									<li class="clearfix">
										<a href="detail-user-login.html">Thông tin cá nhân</a>
									</li>
									<hr>
									<li class="clearfix">
										<a href="history.html">Truyện đang theo dõi</a>
									</li>
									<li class="clearfix">
										<a href="history.html">Lịch sử đọc truyện</a>
									<li class="clearfix">
										<a href="list-friend.html">Danh sách bạn</a>
									</li>
									</li>
									<hr>
									<li class="clearfix">
										<a href="setting.html">Cài đặt</a>
									</li>
									<li class="clearfix">
										<a href="{{ url('logout') }}">Đăng xuất</a>
									</li>
								</ul>
							</li>
						</ul>
						<ul class="nav navbar-nav navbar-right show-sm">
							<li>
								<a href="#"  class="page dropdown-toggle" data-toggle="dropdown"><span class="fa fa-bell"></span></a>
								<ul class="dropdown-menu menu2">
									<li class="clearfix">
										<img src="image/bang-hoai-3rd.jpg" class="image img-circle" alt="" width="60px" height="60px">
										<div class="info">
											<div class="content"><a href="detail-book.html">Băng Hoại 3rd</a> ra chap mới: chap 78 - Dinh tự của Issac</div>
											<div class="time">1 giờ trước</div>
										</div>
									</li>
									<li class="clearfix">
										<img src="image/boruto.jpg" class="image img-circle" alt="" width="60px" height="60px">
										<div class="info">
											<div class="content"><a href="detail-book.html">Boruto</a> ra chap mới: chap 128 - Ác quỷ xuất hiện</div>
											<div class="time">2 giờ trước</div>
										</div>
									</li>
									<li class="clearfix">
										<img src="image/mahoutsukai-no-yome.jpg" class="image img-circle" alt="" width="60px" height="60px">
										<div class="info">
											<div class="content"><a href="detail-book.html">Mahoutsuki no Yome</a> ra chap mới: chap 25 - Không kẻ nào điếc hơn kẻ không muốn nghe</div>
											<div class="time">1 ngày trước</div>
										</div>
									</li>
									<li class="clearfix">
										<img src="image/A-kun.jpg" class="image img-circle" alt="" width="60px" height="60px">
										<div class="info">
											<div class="content"><a href="">A-kun</a> trả lời bình luận của bạn: Lorem ipsum dolor sit amet.</div>
											<div class="time">5 ngày trước</div>
										</div>
									</li>
									<li class="clearfix">
										<img src="image/Eren.jpg" class="image img-circle" alt="" width="60px" height="60px">
										<div class="info">
											<div class="content"><a href="">Eren</a> trả lời bình luận của bạn: Lorem ipsum dolor sit amet, consectetur.</div>
											<div class="time">ngày 25/12/2017</div>
										</div>
									</li>
									<hr>
									<li class="all-noti">
										<a href="notification.html">Xem tất cả</a>
									</li>
								</ul>
							</li>
							<li>
								<a href="#" class="page user dropdown-toggle" data-toggle="dropdown"><img src="image/Asuna.jpg" class="img-circle" width="35px" alt=""></a>
								<ul class="dropdown-menu menu2 user">
									<li class="clearfix">
										<a href="detail-user-login.html">Thông tin cá nhân</a>
									</li>
									<hr>
									<li class="clearfix">
										<a href="list-book-follow.html">Truyện đang theo dõi</a>
									</li>
									<li class="clearfix">
										<a href="history.html">Lịch sử đọc truyện</a>
									</li>
									<li class="clearfix">
										<a href="list-friend.html">Danh sách bạn</a>
									</li>
									<hr>
									<li class="clearfix">
										<a href="setting.html">Cài đặt</a>
									</li>
									<li class="clearfix">
										<a href="{{ url('logout') }}">Đăng xuất</a>
									</li>
								</ul>
							</li>
						</ul>
					@else
					<ul class="nav navbar-nav navbar-right hide-sm">
						<li><a href="sign-up.html" class="page"><span class="glyphicon glyphicon-user"></span> Đăng Ký</a></li>
						<li><a href="login.html" class="page"><span class="glyphicon glyphicon-log-in"></span> Đăng Nhập</a></li>
					</ul>
					<ul class="nav navbar-nav navbar-right show-sm">
						<li><a href="sign-up.html" class="page"><span class="glyphicon glyphicon-user"></span></a></li>
						<li><a href="login.html" class="page"><span class="glyphicon glyphicon-log-in"></span></a></li>
					</ul>
					@endif
				</div>
			</nav>
		</div>
	</div>
</header>
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
							
							<hr>
							<li class="search-more">
								<a href="search-more" class="search-more" onclick="window.open('{{ url('/list/search') }}')">Tìm kiếm nâng cao</a>
							</li>
						</ul>
					</div>
				</div>
				<div class="collapse navbar-collapse" id="menu-left">
					<ul class="nav navbar-nav">
						<li class="{{ (isset($page) && $page == 'home') ? 'active' : '' }}"><a href="{{ url('/') }}" class="page"><span class="glyphicon glyphicon-home"></span></a></li>
						<li class="{{ (isset($page) && $page == 'view') ? 'active' : '' }} hide-xs"><a href="{{ url('/list/view') }}" class="page">Truyện Hot</a></li>
						<li class="{{ (isset($page) && $page == 'update') ? 'active' : '' }} hide-xs"><a href="{{ url('/list/update') }}" class="page">Mới Cập Nhật</a></li>
						<li class="{{ (isset($page) && $page == 'category') ? 'active' : '' }} dropdown">
							<a rel="notfollow" class="page dropdown-toggle" data-toggle="dropdown">Thể Loại <span class="caret"></span></a>
							
							<ul class="dropdown-menu more">
								@foreach ($menu_categories as $group_category)
								<li>
									<div class="row">
										@foreach ($group_category as $key => $cate)
											@if (isset($_category))
												@if ($_category->slug == $cate->slug)
												<div class="col-lg-3 col-md-3 col-sm-3 col-xs-3 col-6 {{ ($key == 0) ? 'first' : (($key == 3) ? 'last' : 'next') }}"><a href="{{ url('/list/category/'.$cate->slug) }}" class="active">{{ ucwords($cate->name) }}</a></div>
												@else
												<div class="col-lg-3 col-md-3 col-sm-3 col-xs-3 col-6 {{ ($key == 0) ? 'first' : (($key == 3) ? 'last' : 'next') }}"><a href="{{ url('/list/category/'.$cate->slug) }}">{{ ucwords($cate->name) }}</a></div>
												@endif
											@else
											<div class="col-lg-3 col-md-3 col-sm-3 col-xs-3 col-6 {{ ($key == 0) ? 'first' : (($key == 3) ? 'last' : 'next') }}"><a href="{{ url('/list/category/'.$cate->slug) }}">{{ ucwords($cate->name) }}</a></div>
											@endif
										@endforeach
									</div>
								</li>
								@endforeach
							</ul>
						</li>
						<li class="{{ (isset($page) && $page == 'year') ? 'active' : '' }} dropdown hide-md">
							<a rel="notfollow" class="page dropdown-toggle" data-toggle="dropdown">Năm Xuất Bản <span class="caret"></span></a>
							
							<ul class="dropdown-menu">
								@foreach ($menu_years as $year2)
								<li><a href="{{ url('/list/year/'.$year2) }}" class="page {{ (isset($year) && $year == $year2) ? 'active' : '' }}">{{ $year2 }}</a></li>
								@endforeach
							</ul>
						</li>
						<li class="{{ (isset($page) && $page == 'status') ? 'active' : '' }} dropdown hide-md">
							<a rel="notfollow" class="page dropdown-toggle" data-toggle="dropdown">Tình Trạng <span class="caret"></span></a>
							
							<ul class="dropdown-menu">
								<li><a href="{{ url('/list/completed') }}" class="page {{ (isset($status) && !$status) ? 'active' : '' }}">Đã hoàn thành</a></li>
								<li><a href="{{ url('/list/process') }}" class="page {{ (isset($status) && $status) ? 'active' : '' }}">Đang tiến hành</a></li>
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
						<li class="{{ (isset($page) && $page == 'notification') ? 'active' : '' }}">
							<a rel="notfollow"  class="page dropdown-toggle" data-toggle="dropdown"><span class="fa fa-bell"></span> Thông Báo <span class="number">{{ (count($noti_seen) != 0) ? '('.count($noti_seen).')' : '' }}</span></a>
							<ul class="dropdown-menu menu2">
								@foreach ($menu_noti as $key => $notification)
									@if ($key < 5)
									<li class="clearfix">
										@if ($notification->type == 'newchap' || $notification->type == 'coming')
										<img src="{{ asset('image/books/'.$notification->image) }}" class="image img-circle" alt="" width="60px" height="60px">
										@elseif ($notification->type == 'authornewchap')
										<img src="{{ asset('image/authors/'.$notification->image.'.jpg') }}" class="image img-circle" alt="" width="60px" height="60px">
										@elseif ($notification->type == 'transnewchap')
										<img src="{{ asset('image/trans/'.$notification->image.'.jpg') }}" class="image img-circle" alt="" width="60px" height="60px">
										@else
										<img src="{{ asset('image/users/'.$notification->image.'.jpg') }}" class="image img-circle" alt="" width="60px" height="60px">
										@endif
										<div class="info">
											<?php date_default_timezone_set('Asia/Ho_Chi_Minh'); ?>
											<div class="content">{!! $notification->action !!}</div>
											@if ($notification->year == (int)date('Y'))
												@if ($notification->month == (int)date('m'))
													@if ($notification->date == (int)date('d'))
														@if ($notification->hour == (int)date('H'))
															@if ($notification->minute == (int)date('i'))
															<div class="time">{{ (int)date('s') - $notification->second }} giây trước</div>
															@else
															<div class="time">{{ (int)date('i') - $notification->minute }} phút trước</div>
															@endif
														@else
														<div class="time">{{ (int)date('H') - $notification->hour }} giờ trước</div>
														@endif
													@else
													<div class="time">{{ (int)date('d') - $notification->date }} ngày trước</div>
													@endif
												@else
												<div class="time">{{ (int)date('m') - $notification->month }} tháng trước</div>
												@endif
											@else
											<div class="time">{{ (int)date('Y') - $notification->year }} năm trước</div>
											@endif
										</div>
									</li>
									@endif
								@endforeach
								<hr>
								<li class="all-noti">
									<a href="{{ url('/list/notification') }}">Xem tất cả</a>
								</li>
							</ul>
						</li>
						<li>
							<a rel="notfollow" class="page user dropdown-toggle" data-toggle="dropdown"><img src="{{ asset('image/users/'.$user_login->image.'.jpg') }}" class="img-circle" width="35px" alt="">&nbsp;&nbsp;{{ $user_login->name }}</a>
							<ul class="dropdown-menu menu2 user">
								<li class="clearfix">
									<a href="{{ url('/detail/user/'.$user_login->name_login) }}">Thông tin cá nhân</a>
								</li>
								<li class="clearfix">
									<a href="{{ url('/change-password') }}">Đổi mật khẩu</a>
								</li>
								<hr>
								<li class="clearfix">
									<a href="{{ url('/list/follow') }}">Truyện đang theo dõi</a>
								</li>
								<li class="clearfix">
									<a href="{{ url('/list/history') }}">Lịch sử đọc truyện</a>
								<li class="clearfix">
									<a href="{{ url('/list/friend') }}">Danh sách bạn</a>
								</li>
								</li>
								<hr>
								<li class="clearfix">
									<a href="{{ url('setting') }}">Cài đặt</a>
								</li>
								<li class="clearfix">
									<a href="{{ url('logout') }}">Đăng xuất</a>
								</li>
							</ul>
						</li>
					</ul>
					<ul class="nav navbar-nav navbar-right show-sm">
						<li class="{{ (isset($page) && $page == 'notification') ? 'active' : '' }}">
							<a rel="notfollow"  class="page dropdown-toggle" data-toggle="dropdown"><span class="fa fa-bell"></span></a>
							<ul class="dropdown-menu menu2 noti-small">
								@foreach ($menu_noti as $key => $notification)
									@if ($key < 5)
									<li class="clearfix">
										@if ($notification->type == 'newchap' || $notification->type == 'coming')
										<img src="{{ asset('image/books/'.$notification->image) }}" class="image img-circle" alt="" width="60px" height="60px">
										@else
										<img src="{{ asset('image/users/'.$notification->image.'.jpg') }}" class="image img-circle" alt="" width="60px" height="60px">
										@endif
										<div class="info">
											<?php date_default_timezone_set('Asia/Ho_Chi_Minh'); ?>
											<div class="content">{!! $notification->action !!}</div>
											@if ($notification->year == (int)date('Y'))
												@if ($notification->month == (int)date('m'))
													@if ($notification->date == (int)date('d'))
														@if ($notification->hour == (int)date('H'))
															@if ($notification->minute == (int)date('i'))
															<div class="time">{{ (int)date('s') - $notification->second }} giây trước</div>
															@else
															<div class="time">{{ (int)date('i') - $notification->minute }} phút trước</div>
															@endif
														@else
														<div class="time">{{ (int)date('H') - $notification->hour }} giờ trước</div>
														@endif
													@else
													<div class="time">{{ (int)date('d') - $notification->date }} ngày trước</div>
													@endif
												@else
												<div class="time">{{ (int)date('m') - $notification->month }} tháng trước</div>
												@endif
											@else
											<div class="time">{{ (int)date('Y') - $notification->year }} năm trước</div>
											@endif
										</div>
									</li>
									@endif
								@endforeach
								<hr>
								<li class="all-noti">
									<a href="notification.html">Xem tất cả</a>
								</li>
							</ul>
						</li>
						<li>
							<a href="#" class="page user dropdown-toggle" data-toggle="dropdown"><img src="{{ asset('image/users/'.$user_login->image.'.jpg') }}" class="img-circle" width="35px" alt=""></a>
							<ul class="dropdown-menu menu2 user user-small">
								<li class="clearfix">
									<a href="{{ url('/detail/user/'.$user_login->name_login) }}">Thông tin cá nhân</a>
								</li>
								<li class="clearfix">
									<a href="{{ url('/change-password') }}">Đổi mật khẩu</a>
								</li>
								<hr>
								<li class="clearfix">
									<a href="{{ url('/list/follow') }}">Truyện đang theo dõi</a>
								</li>
								<li class="clearfix">
									<a href="{{ url('/list/history') }}">Lịch sử đọc truyện</a>
								</li>
								<li class="clearfix">
									<a href="{{ url('/list/friend') }}">Danh sách bạn</a>
								</li>
								<hr>
								<li class="clearfix">
									<a href="{{ url('setting') }}">Cài đặt</a>
								</li>
								<li class="clearfix">
									<a href="{{ url('logout') }}">Đăng xuất</a>
								</li>
							</ul>
						</li>
					</ul>
					@else
					<ul class="nav navbar-nav navbar-right hide-sm">
						<li class="{{ (isset($page) && $page == 'sign-up') ? 'active' : '' }}"><a href="{{ url('sign_up') }}" class="page"><span class="glyphicon glyphicon-user"></span> Đăng Ký</a></li>
						<li class="{{ (isset($page) && $page == 'login') ? 'active' : '' }}"><a href="{{ url('login') }}" class="page"><span class="glyphicon glyphicon-log-in"></span> Đăng Nhập</a></li>
					</ul>
					<ul class="nav navbar-nav navbar-right show-sm">
						<li class="{{ (isset($page) && $page == 'sign-up') ? 'active' : '' }}"><a href="{{ url('sign_up') }}" class="page"><span class="glyphicon glyphicon-user"></span></a></li>
						<li class="{{ (isset($page) && $page == 'login') ? 'active' : '' }}"><a href="{{ url('login') }}" class="page"><span class="glyphicon glyphicon-log-in"></span></a></li>
					</ul>
					@endif
				</div>
			</nav>
		</div>
	</div>
</header>
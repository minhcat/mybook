<!-- Main Header -->
<header class="main-header">

	<!-- Logo -->
	<a href="uploader.html" class="logo">
		<!-- mini logo for sidebar mini 50x50 pixels -->
		<span class="logo-mini"><b>MB</b></span>
		<!-- logo for regular state and mobile devices -->
		<span class="logo-lg"><b>MyBook</b></span>
	</a>

	<!-- Header Navbar -->
	<nav class="navbar navbar-static-top" role="navigation">
		<!-- Sidebar toggle button-->
		<a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
			<span class="sr-only">Toggle navigation</span>
		</a>
		<!-- Navbar Right Menu -->
		<div class="navbar-custom-menu">
			<ul class="nav navbar-nav">
				<!-- Messages: style can be found in dropdown.less-->
				<li class="dropdown messages-menu">
					<!-- Menu toggle button -->
					<a href="#" class="dropdown-toggle" data-toggle="dropdown">
						<i class="fa fa-envelope-o"></i>
						<span class="label label-success">4</span>
					</a>
					<ul class="dropdown-menu">
						<li class="header">Bạn có 4 tin nhắn</li>
						<li>
							<!-- inner menu: contains the messages -->
							<ul class="menu">
								<li><!-- start message -->
									<a href="#">
										<div class="pull-left">
											<!-- User Image -->
											<img src="{{ asset('image/users/'.$user->image.'.jpg') }}" class="img-circle" alt="User Image">
										</div>
										<!-- Message title and timestamp -->
										<h4>
											Nguyễn Văn Sơn
											<small><i class="fa fa-clock-o"></i> 5 mins</small>
										</h4>
										<!-- The message -->
										<p>Helo ope hyper werty candy quebe</p>
									</a>
								</li>
								<!-- end message -->
							</ul>
							<!-- /.menu -->
						</li>
						<li class="footer"><a href="#">Xem tất cả</a></li>
					</ul>
				</li>
				<!-- /.messages-menu -->

				<!-- Notifications Menu -->
				<li class="dropdown notifications-menu">
					<!-- Menu toggle button -->
					<a href="#" class="dropdown-toggle" data-toggle="dropdown">
						<i class="fa fa-bell-o"></i>
						<span class="label label-warning">10</span>
					</a>
					<ul class="dropdown-menu">
						<li class="header">Bạn có 10 thông báo</li>
						<li>
							<!-- Inner Menu: contains the notifications -->
							<ul class="menu">
								<li><!-- start notification -->
									<a href="#">
										<i class="fa fa-users text-aqua"></i> 5 báo cáo người dùng
									</a>
								</li>
								<!-- end notification -->
							</ul>
						</li>
						<li class="footer"><a href="#">Xem tất cả</a></li>
					</ul>
				</li>
				<!-- User Account Menu -->
				<li class="dropdown user user-menu">
					<!-- Menu Toggle Button -->
					<a href="#" class="dropdown-toggle" data-toggle="dropdown">
						<!-- The user image in the navbar-->
						<img src="{{ asset('image/users/'.$user->image.'.jpg') }}" class="user-image" alt="User Image">
						<!-- hidden-xs hides the username on small devices so only the image appears. -->
						<span class="hidden-xs">{{ $user->name }}</span>
					</a>
					<ul class="dropdown-menu">
						<!-- The user image in the menu -->
						<li class="user-header">
							<img src="{{ asset('image/users/'.$user->image.'.jpg') }}" class="img-circle" alt="User Image">

							<p>
								{{ $user->name }} - @yield('admin-job')
								<small>Nhân viên tháng 3 2018</small>
							</p>
						</li>
						<!-- Menu Body -->
						<li class="user-body">
							<div class="row">
								<div class="col-xs-4 text-center">
									<a href="#">Theo dõi</a>
								</div>
								<div class="col-xs-4 text-center">
									<a href="#">Yêu thích</a>
								</div>
								<div class="col-xs-4 text-center">
									<a href="#">Bạn bè</a>
								</div>
							</div>
							<!-- /.row -->
						</li>
						<!-- Menu Footer-->
						<li class="user-footer">
							<div class="pull-left">
								<a href="#" class="btn btn-default btn-flat">Thông tin</a>
							</div>
							<div class="pull-right">
								<a href="#" class="btn btn-default btn-flat">Đăng xuất</a>
							</div>
						</li>
					</ul>
				</li>
			</ul>
		</div>
	</nav>
</header>
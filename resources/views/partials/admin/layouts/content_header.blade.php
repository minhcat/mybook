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
						@if (count($mails) != 0)
						<span class="label label-success">{{ count($mails) }}</span>
						@endif
					</a>
					<ul class="dropdown-menu">
						@if (count($mails) == 0)
						<li class="header">Bạn chưa có tin nhắn mới</li>
						@else
						<li class="header">Bạn có {{ count($mails) }} tin nhắn</li>
						@endif
						<li>
							<!-- inner menu: contains the messages -->
							<ul class="menu">
								@foreach ($mails_receive as $key => $mail)
									@if ($key < 4)
									<li><!-- start message -->
										<a href="#">
											<div class="pull-left">
												<!-- User Image -->
												<img src="{{ asset('image/users/'.$mail->send_image.'.jpg') }}" class="img-circle" alt="User Image">
											</div>
											<!-- Message title and timestamp -->
											<h4>
												{{ $mail->send_name }}
												<small><i class="fa fa-clock-o"></i> 5 mins</small>
											</h4>
											<!-- The message -->
											<p>{{ $mail->content }}</p>
										</a>
									</li>
									@endif
								@endforeach
								<!-- end message -->
							</ul>
							<!-- /.menu -->
						</li>
						<li class="footer"><a href="#" class="box-link" data-target="#box-mail-receive" data-small="mail">Xem tất cả</a></li>
					</ul>
				</li>
				<!-- /.messages-menu -->

				<!-- Notifications Menu -->
				<li class="dropdown notifications-menu">
					<!-- Menu toggle button -->
					<a href="#" class="dropdown-toggle" data-toggle="dropdown">
						<i class="fa fa-bell-o"></i>
						@if (count($notifications) != 0)
						<span class="label label-warning">{{ count($notifications) }}</span>
						@endif

					</a>
					<ul class="dropdown-menu">
						@if (count($notifications) == 0)
						<li class="header">Bạn chưa có thông báo mới</li>
						@else
						<li class="header">Bạn có {{ count($notifications) }} thông báo</li>
						@endif
						<li>
							<!-- Inner Menu: contains the notifications -->
							<ul class="menu">
								@foreach ($noties_receive as $key => $noti)
									@if ($key < 4)
									<li><!-- start notification -->
										<a href="#">
											<i class="fa fa-users text-aqua"></i> [{{$noti->type}}] {{ $noti->content }}
										</a>
									</li>
									@endif
								@endforeach
								<!-- end notification -->
							</ul>
						</li>
						<li class="footer"><a href="#" class="box-link" data-target="#box-noti-receive" data-small="notification">Xem tất cả</a></li>
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
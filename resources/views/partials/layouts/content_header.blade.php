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
				
					<ul class="nav navbar-nav navbar-right hide-sm">
						<li><a href="sign-up.html" class="page"><span class="glyphicon glyphicon-user"></span> Đăng Ký</a></li>
						<li><a href="login.html" class="page"><span class="glyphicon glyphicon-log-in"></span> Đăng Nhập</a></li>
					</ul>
					<ul class="nav navbar-nav navbar-right show-sm">
						<li><a href="sign-up.html" class="page"><span class="glyphicon glyphicon-user"></span></a></li>
						<li><a href="login.html" class="page"><span class="glyphicon glyphicon-log-in"></span></a></li>
					</ul>
				</div>
			</nav>
		</div>
	</div>
</header>
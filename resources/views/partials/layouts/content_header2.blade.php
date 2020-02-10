<header>
	<div class="banner">
		<div class="container clearfix">
			<div class="header left">
				<div class="logo">
					<h1>My Book</h1>
					<img src="{{ asset('image/logo.png') }}">
				</div>
			</div>
			<div class="image right">
				<img src="{{ asset('image/conan_200.png') }}" class="img-circle">
				<img src="{{ asset('image/attack-on-titan-200x150.png') }}" class="img-circle">
				<img src="{{ asset('image/kirito-200x150.png') }}" class="img-circle">
			</div>
		</div>
	</div>
	<div  class="menu">
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
								<img src="image/bang-hoai-3rd.jpg" class="image" alt="" width="60px" height="60px">
								<div class="info">
									<a href="detail-book.html" class="name">Băng Hoại 3rd</a>
									<div class="more">Lorem ipsum dolor sit amet, consec tetur adipisicing elit. Porro, ea.</div>
								</div>
							</li>
							<li class="clearfix">
								<img src="image/boruto.jpg" class="image" alt="" width="60px" height="60px">
								<div class="info">
									<a href="detail-book.html" class="name">Boruto</a>
									<div class="more">Lorem ipsum dolor sit amet, consec tetur adipisicing elit. Porro, ea.</div>
								</div>
							</li>
							<li class="clearfix">
								<img src="image/mahoutsukai-no-yome.jpg" class="image" alt="" width="60px" height="60px">
								<div class="info">
									<a href="detail-book.html" class="name">Mahoutsukai no Yome</a>
									<div class="more">Lorem ipsum dolor sit amet, consec tetur adipisicing elit. Porro, ea.</div>
								</div>
							</li>
							<li class="clearfix">
								<img src="image/himouto-umaru-chan.jpg" class="image" alt="" width="60px" height="60px">
								<div class="info">
									<a href="detail-book.html" class="name">Himouto Umaru-chan</a>
									<div class="more">Lorem ipsum dolor sit amet, consec tetur adipisicing elit. Porro, ea.</div>
								</div>
							</li>
							<hr>
							<li class="search-more">
								<a href="search-more">Tìm kiếm nâng cao</a>
							</li>
						</ul>
					</div>
				</div>
				<div class="collapse navbar-collapse" id="menu-left">
					<ul class="nav navbar-nav">
						<li class="active"><a rel="notfollow" class="page"><span class="glyphicon glyphicon-home"></span></a></li>
						<li class="hide-xs"><a href="list-view.html" class="page">Truyện Hot</a></li>
						<li class="hide-xs"><a href="list-update.html" class="page">Mới Cập Nhật</a></li>
						<li class="dropdown">
							<a rel="notfollow" class="page dropdown-toggle" data-toggle="dropdown">Thể Loại <span class="caret"></span></a>
							
							<ul class="dropdown-menu more">
								<li>
									<div class="row">
										<div class="col-lg-3 col-md-3 col-sm-3 col-xs-3 col-6 first"><a href="list-category.html">Action</a></div>
										<div class="col-lg-3 col-md-3 col-sm-3 col-xs-3 col-6 next"><a href="list-category.html">Adult</a></div>
										<div class="col-lg-3 col-md-3 col-sm-3 col-xs-3 col-6 next"><a href="list-category.html">Adventure</a></div>
										<div class="col-lg-3 col-md-3 col-sm-3 col-xs-3 col-6 last"><a href="list-category.html">Anime</a></div>
									</div>
								</li>
								<li>
									<div class="row">
										<div class="col-lg-3 col-md-3 col-sm-3 col-xs-3 col-6 first"><a href="list-category.html">Comedy</a></div>
										<div class="col-lg-3 col-md-3 col-sm-3 col-xs-3 col-6 next"><a href="list-category.html">Comic</a></div>
										<div class="col-lg-3 col-md-3 col-sm-3 col-xs-3 col-6 next"><a href="list-category.html">Cooking</a></div>
										<div class="col-lg-3 col-md-3 col-sm-3 col-xs-3 col-6 last"><a href="list-category.html">Cosplay</a></div>
									</div>
								</li>
								<li>
									<div class="row">
										<div class="col-lg-3 col-md-3 col-sm-3 col-xs-3 col-6 first"><a href="list-category.html">Demons</a></div>
										<div class="col-lg-3 col-md-3 col-sm-3 col-xs-3 col-6 next"><a href="list-category.html">Doujinshi</a></div>
										<div class="col-lg-3 col-md-3 col-sm-3 col-xs-3 col-6 next"><a href="list-category.html">Ecchi</a></div>
										<div class="col-lg-3 col-md-3 col-sm-3 col-xs-3 col-6 last"><a href="list-category.html">Fanmade</a></div>
									</div>
								</li>
								<li>
									<div class="row">
										<div class="col-lg-3 col-md-3 col-sm-3 col-xs-3 col-6 first"><a href="list-category.html">Fantasy</a></div>
										<div class="col-lg-3 col-md-3 col-sm-3 col-xs-3 col-6 next"><a href="list-category.html">Harem</a></div>
										<div class="col-lg-3 col-md-3 col-sm-3 col-xs-3 col-6 next"><a href="list-category.html">History</a></div>
										<div class="col-lg-3 col-md-3 col-sm-3 col-xs-3 col-6 last"><a href="list-category.html">Magic</a></div>
									</div>
								</li>
								<li>
									<div class="row">
										<div class="col-lg-3 col-md-3 col-sm-3 col-xs-3 col-6 first"><a href="list-category.html">Mystery</a></div>
										<div class="col-lg-3 col-md-3 col-sm-3 col-xs-3 col-6 next"><a href="list-category.html">Romance</a></div>
										<div class="col-lg-3 col-md-3 col-sm-3 col-xs-3 col-6 next"><a href="list-category.html">School Life</a></div>
										<div class="col-lg-3 col-md-3 col-sm-3 col-xs-3 col-6 last"><a href="list-category.html">Zombie</a></div>
									</div>
								</li>
							</ul>
						</li>
						<li class="dropdown hide-md">
							<a rel="notfollow" class="page dropdown-toggle" data-toggle="dropdown">Năm Xuất Bản <span class="caret"></span></a>
							
							<ul class="dropdown-menu">
								<li><a href="list-year.html" class="page">2012</a></li>
								<li><a href="list-year.html" class="page">2013</a></li>
								<li><a href="list-year.html" class="page">2014</a></li>
								<li><a href="list-year.html" class="page">2015</a></li>
								<li><a href="list-year.html" class="page">2016</a></li>
								<li><a href="list-year.html" class="page">2017</a></li>
							</ul>
						</li>
						<li class="dropdown hide-md">
							<a rel="notfollow" class="page dropdown-toggle" data-toggle="dropdown">Tình Trạng <span class="caret"></span></a>
							
							<ul class="dropdown-menu">
								<li><a href="list-completed.html" class="page">Đã hoàn thành</a></li>
								<li><a href="list-process.html" class="page">Đang tiến hành</a></li>
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
							<li class="clearfix">
								<img src="image/bang-hoai-3rd.jpg" class="image" alt="" width="60px" height="60px">
								<div class="info">
									<a href="detail-book.html" class="name">Băng Hoại 3rd</a>
									<div class="more">Lorem ipsum dolor sit amet, consec tetur adipisicing elit. Porro, ea.</div>
								</div>
							</li>
							<li class="clearfix">
								<img src="image/boruto.jpg" class="image" alt="" width="60px" height="60px">
								<div class="info">
									<a href="detail-book.html" class="name">Boruto</a>
									<div class="more">Lorem ipsum dolor sit amet, consec tetur adipisicing elit. Porro, ea.</div>
								</div>
							</li>
							<li class="clearfix">
								<img src="image/mahoutsukai-no-yome.jpg" class="image" alt="" width="60px" height="60px">
								<div class="info">
									<a href="detail-book.html" class="name">Mahoutsukai no Yome</a>
									<div class="more">Lorem ipsum dolor sit amet, consec tetur adipisicing elit. Porro, ea.</div>
								</div>
							</li>
							<li class="clearfix">
								<img src="image/himouto-umaru-chan.jpg" class="image" alt="" width="60px" height="60px">
								<div class="info">
									<a href="detail-book.html" class="name">Himouto Umaru-chan</a>
									<div class="more">Lorem ipsum dolor sit amet, consec tetur adipisicing elit. Porro, ea.</div>
								</div>
							</li>
							<hr>
							<li class="search-more">
								<a href="list-search.html">Tìm kiếm nâng cao</a>
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
	<div class="scroll">
		<button class="btn bg-green white"><span class="fa fa-home"></span></button>
		<button class="btn bg-green white"><span class="fa fa-arrow-circle-left"></span></button>
		@if ($chap['next'] != 'none')
		<a href="{{ url('/read/'.$book['slug'].'/'.$trans['slug'].'/'.$chap['next']) }}" class="btn bg-green white">Chap trước</a>
		@endif
		<select class="list-chap form-control">
			<option>chap 1</option>
			<option>chap 2</option>
			<option>chap 3</option>
			<option>chap 4</option>
			<option>chap 5</option>
		</select>
		@if ($chap['previous'] != 'none')
		<a href="{{ url('/read/'.$book['slug'].'/'.$trans['slug'].'/'.$chap['previous']) }}" class="btn bg-green white">Chap sau</a>
		@endif
		<button class="btn bg-red white">Báo lỗi</button>
	</div>
</header>
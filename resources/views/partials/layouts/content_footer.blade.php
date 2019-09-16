<footer>
	<div class="footer">
		<div class="container">
			<div class="row">
				<div class="content col-lg-4 col-md-4 col-sm-4 col-xs-4 col-6">
					<h4>Truy Cập</h4>
					<p>Tổng số: 10 000 000</p>
					<p>Trong ngày: 1000</p>
					<p>Đang online: 10</p>
				</div>
				<div class="content col-lg-4 col-md-4 col-sm-4 col-xs-4 hide-xxs">
					<h4>Liên Kết</h4>
					<p><a href="{{ url('/list/'.$system['footer_link_value_1']) }}">{{ $system['footer_link_name_1'] }}</a></p>
					<p><a href="{{ url('/list/'.$system['footer_link_value_2']) }}">{{ $system['footer_link_name_2'] }}</a></p>
					<p><a href="{{ url('/list/'.$system['footer_link_value_3']) }}">{{ $system['footer_link_name_3'] }}</a></p>
				</div>
				<div class="content col-lg-4 col-md-4 col-sm-4 col-xs-4 col-6">
					<h4>{{ $system['website_name'] }}</h4>
					<p>{{ $system['footer_info_1'] }}</p>
					<p>{{ $system['footer_info_2'] }}</p>
					<p>{{ $system['footer_info_3'] }}</p>
				</div>
			</div>
		</div>
	</div>
	<div class="copyright">
		<div class="container">{{ $system['footer_last_info'] }}</div>
	</div>
</footer>

<!-- modal -->
@if (Auth::check())
<div id="modalfollow" class="modal">
	<div class="content">
		<div class="header">
			<h3>Thông Báo</h3>
			<span class="close" data-modal="#modalfollow">&times;</span>
		</div>
		<div class="main">
			<p>Thêm truyện vào danh sách theo dõi</p>
			<button class="btn login">Đồng ý</button>
			<button class="btn cancel right" data-modal="#modalfollow">Hủy</button>
		</div>
	</div>
</div>

<div id="modalrate" class="modal rate">
	<div class="content">
		<div class="header">
			<h3>Đánh Giá</h3>
			<span class="close" data-modal="#modalrate">&times;</span>
		</div>
		<div class="main">
			<p>Bạn đánh giá mấy sao cho truyện này</p>
			<div class="rate">
				<div class="star" data-star="1" title="dở"><span class="fa fa-star-o"></span></div>
				<div class="star" data-star="2" title="tạm"><span class="fa fa-star-o"></span></div>
				<div class="star" data-star="3" title="hay"><span class="fa fa-star-o"></span></div>
				<div class="star" data-star="4" title="rất hay"><span class="fa fa-star-o"></span></div>
				<div class="star" data-star="5" title="tuyệt vời"><span class="fa fa-star-o"></span></div>
			</div>
			<button class="btn login">Đồng ý</button>
			<button class="btn cancel right" data-modal="#modalrate">Hủy</button>
		</div>
	</div>
</div>
@else
<div id="modalnotlogin" class="modal">
	<div class="content">
		<div class="header">
			<h3>Thông Báo</h3>
			<span class="close" data-modal="#modalnotlogin">&times;</span>
		</div>
		<div class="main">
			<p>Bạn cần đăng nhập để thực hiện chức năng này</p>
			<a href="login.html" class="btn login">Đăng nhập</a>
			<button class="btn cancel right" data-modal="#modalnotlogin">Hủy</button>
		</div>
	</div>
</div>
@endif
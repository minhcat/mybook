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
		<div class="container">Copyright &copy; 2018 My Book, All Rights Reserved</div>
	</div>
</footer>

<div class="popup book">
	<div class="arrow"></div>
	<div class="content">
		<div class="image left">
			<img src="{{ asset('image/bang-hoai-3rd.jpg') }}" width="85px">
		</div>
		<div class="main right">
			<p class="name"><strong>Băng Hoại 3rd lorem ipsum</strong></p>
			<div class="star">
				<span class="fa fa-star"></span>
				<span class="fa fa-star"></span>
				<span class="fa fa-star"></span>
				<span class="fa fa-star-half-o"></span>
				<span class="fa fa-star-o"></span>
				<span>3.5</span>
			</div>
			<div class="rate">
				<span>100 đánh giá</span>
			</div>
		</div>
		<div class="info">
			<div class="type">
				<p><strong>Thể loại:</strong> <a href="#">Siêu nhiên</a>, <a href="">Hành động, <a href="">Hài hước</a></p>
			</div>
			<div class="info-content">
				<p><strong>Nội dung:</strong> Lorem ipsum dolor sit amet, consectetur adipisicing elit. Harum sequi a magni cupiditate maiores hic?</p>
			</div>
		</div>
	</div>
</div>

<div class="popup user">
	<div class="arrow"></div>
	<div class="content">
		<div class="image left">
			<img src="{{ asset('image/Asuna.jpg') }}" width="85px">
		</div>
		<div class="main right">
			<p class="name"><strong>Asuna</strong></p>
			<div class="star">
				<span class="fa fa-star"></span>
				<span class="fa fa-star"></span>
				<span class="fa fa-star"></span>
				<span class="fa fa-star-half-o"></span>
				<span class="fa fa-star-o"></span>
				<span>3.5</span>
			</div>
			<div class="rate">
				<span>100 đánh giá</span>
			</div>
		</div>
		<div class="info">
			<div class="type">
				<p><strong>Thể loại yêu thích:</strong> <a href="#">Siêu nhiên</a>, <a href="">Hành động, <a href="">Hài hước</a></p>
			</div>
			<div class="info-content">
				<p><strong>Quan điểm:</strong> Lorem ipsum dolor sit amet, consectetur adipisicing elit. Harum sequi a magni cupiditate maiores hic?</p>
			</div>
		</div>
	</div>
</div>
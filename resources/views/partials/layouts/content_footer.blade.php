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
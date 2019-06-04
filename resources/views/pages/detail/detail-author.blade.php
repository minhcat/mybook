@extends('master.detail')

{{-- title --}}
@section('title-color')
purple
@endsection

@section('title-header')
Chi Tiết Tác Giả
@endsection

@section('title-content')
Bạn có thể xem thông tin tác giả tại đây
@endsection
{{-- end title --}}

@section('detail')
<div class="detail col-lg-9 col-md-9 col-sm-12 col-xs-12">
	<div class="content">
		<ul class="breadcrumb">
			<li><a href="">Trang chủ</a></li>
			<li class="active">Maruyama Kugane</li>
		</ul>
		<div class="book">
			<div class="line first clearfix">
				<div class="image left">
					<div class="img">
						<img src="{{ asset('image/user-default.png') }}">
					</div>
					<div class="button">
						<button type="button" class="btn left open-modal" data-modal="#modalnotlogin">Đánh giá</button>
						<button type="button" class="btn center open-modal" data-modal="#modalnotlogin">Theo dõi</button>
						<button type="button" class="btn right open-modal" data-modal="#modalnotlogin">Yêu thích</button>
					</div>
				</div>
				<div class="info">
					<h3>Maruyama Kugane</h3>
					<div class="star">
						<span class="fa fa-star"></span>
						<span class="fa fa-star"></span>
						<span class="fa fa-star"></span>
						<span class="fa fa-star-half-o"></span>
						<span class="fa fa-star-o"></span>
						<span>3.5</span>
						<span class="rate">100 đánh giá</span>
					</div>
					<div class="group clearfix">
						<div class="item red" title="yêu thích">
							<span class="glyphicon glyphicon-heart"></span> 
							<span>100</span>
						</div>
						<div class="item blue" title="lượt xem">
							<span class="glyphicon glyphicon-eye-open"></span> 
							<span>100</span>
						</div>
						<div class="item orange" title="bình luận">
							<span class="glyphicon glyphicon-comment"></span> 
							<span>100</span>
						</div>
						<div class="item green" title="theo dõi">
							<span class="glyphicon glyphicon-user"></span> 
							<span>100</span>
						</div>
					</div>
					<p><strong>Nơi sinh:</strong> Nhật Bản</p>
					<p><strong>Ngày sinh:</strong> Đang cập nhật</p>
					<p><strong>Giới tính:</strong> Nam</p>
					<p><strong>Twitter:</strong> <a href="">maruyama_kugane</a></p>
					<p><strong>Website:</strong> Đang cập nhật</p>
					<p><strong>Thể loại truyện:</strong> <a href="">Comedy</a>, <a href="">Magic, <a href="">Fanstasy</a></p>
				</div>
			</div>
			<div class="line second">
				<p style="text-align: justify;"><strong>Giới thiệu:</strong> Là tác giả của bộ truyện đình đám Overlord, với rất nhiều fan hâm mộ. Anh là tác giả light novel. Anh lúc đầu còn có bút danh là Manyimuchi Puririn, sau khi bô overlord nổi tiếng anh đã đổi sang là Maruyama Kugane, vì Manyimuchi Puririn có nghĩa là "béo ngậy". Truyện ngắn Dawn của anh đã được chuyển thể trong Kagetsu Tohya, phần tiếp theo của Type-Moon trong trò chơi tiểu thuyết hình ảnh doujin trước đó của họ, Tsukihime, phát hành vào tháng 8 năm 2001.</p>
			</div>
			<div class="line chap">
				<!-- <h4>Danh sách chap</h4>
				<hr> -->
				<div class="header">
					<h4>Danh sách truyện</h4>
				</div>
				<div class="body">
					<div class="info clearfix">
						<span class="chap-index"><strong>TÊN TRUYỆN</strong></span>
						<span class="date"><strong>NGÀY ĐĂNG</strong></span>
					</div>
					<div class="tab-content">
						<div id="group1" class="tab-pane fade in active">
							<table>
								<tr>
									<td class="clearfix">
										<p class="left"><a href="#">Overlord I</a></p>
										<p class="right">24-12-2017</p>
									</td>
								</tr>
								<tr>
									<td class="clearfix">
										<p class="left"><a href="#">Overlord II</a></p>
										<p class="right">17-12-2017</p>
									</td>
								</tr>
								<tr>
									<td class="clearfix">
										<p class="left"><a href="#">Overlord III</a></p>
										<p class="right">10-12-2017</p>
									</td>
								</tr>
								<tr>
									<td class="clearfix">
										<p class="left"><a href="#">The Dark Warrior</a></p>
										<p class="right">10-12-2017</p>
									</td>
								</tr>
							</table>
						</div>
					</div>
				</div>
			</div>
			@include('partials.common.comment');
		</div>
	</div>
</div>
@endsection
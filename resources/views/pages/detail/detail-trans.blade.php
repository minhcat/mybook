@extends('master.detail')

{{-- title --}}
@section('title-color')
indigo
@endsection

@section('title-header')
Chi Tiết Nhóm Dịch
@endsection

@section('title-content')
Bạn có thể xem thông tin nhóm dịch tại đây
@endsection
{{-- end title --}}

@section('detail')
<div class="detail col-lg-9 col-md-9 col-sm-12 col-xs-12">
	<div class="content">
		<ul class="breadcrumb">
			<li><a href="">Trang chủ</a></li>
			<li class="active">Dark Angels Group</li>
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
					<h3>Dark Angels Group</h3>
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
					<p><strong>Trưởng nhóm:</strong> Lucifer</p>
					<p><strong>Thành viên:</strong> Lucifer, Beelzebub, Leviathan, Asmodeus</p>
					<p><strong>Số truyện đăng:</strong> 3</p>
					<p><strong>Facebook:</strong> <a href="">Lucifer</a></p>
					<p><strong>Website:</strong> Đang cập nhật</p>
				</div>
			</div>
			<div class="line second">
				<p style="text-align: justify;"><strong>Giới thiệu:</strong> Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
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
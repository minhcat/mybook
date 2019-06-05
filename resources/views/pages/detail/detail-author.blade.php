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
			<li class="active">{{ $author->name }}</li>
		</ul>
		<div class="book">
			<div class="line first clearfix">
				<div class="image left">
					<div class="img">
						<img src="{{ asset('image/authors/'.$author->image.'.jpg') }}">
					</div>
					<div class="button">
						<button type="button" class="btn left open-modal" data-modal="#modalnotlogin">Đánh giá</button>
						<button type="button" class="btn center open-modal" data-modal="#modalnotlogin">Theo dõi</button>
						<button type="button" class="btn right open-modal" data-modal="#modalnotlogin">Yêu thích</button>
					</div>
				</div>
				<div class="info">
					<h3>{{ $author->name }}</h3>
					<div class="star">
						<span class="fa fa-star"></span>
						<span class="fa fa-star"></span>
						<span class="fa fa-star"></span>
						<span class="fa fa-star-half-o"></span>
						<span class="fa fa-star-o"></span>
						<span>{{ $author->rate_point }}</span>
						<span class="rate">{{ $author->rate }} đánh giá</span>
					</div>
					<div class="group clearfix">
						<div class="item red" title="yêu thích">
							<span class="glyphicon glyphicon-heart"></span> 
							<span>{{ $author->like }}</span>
						</div>
						<div class="item blue" title="lượt xem">
							<span class="glyphicon glyphicon-eye-open"></span> 
							<span>{{ $author->view }}</span>
						</div>
						<div class="item orange" title="bình luận">
							<span class="glyphicon glyphicon-comment"></span> 
							<span>{{ $author->comment }}</span>
						</div>
						<div class="item green" title="theo dõi">
							<span class="glyphicon glyphicon-user"></span> 
							<span>{{ $author->follow }}</span>
						</div>
					</div>
					<p><strong>Nơi sinh:</strong> {{ $author->birthplace }}</p>
					<p><strong>Ngày sinh:</strong> {{ ($author->birth != null) ? date_format(date_create($author->birth),'d/m/Y') : 'Đang cập nhật' }}</p>
					<p><strong>Giới tính:</strong> {{ ($author->gender) ? 'Nữ' : 'Nam'}}</p>
					<p><strong>Twitter:</strong> <a href="">{{ $author->name }}</a></p>
					<p><strong>Website:</strong> <a href="">{{ $author->name }}</a></p>
					<p><strong>Thể loại truyện:</strong> <a href="">Comedy</a>, <a href="">Magic, <a href="">Fanstasy</a></p>
				</div>
			</div>
			<div class="line second">
				<p style="text-align: justify;"><strong>Giới thiệu:</strong> {{ $author->description }}</p>
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
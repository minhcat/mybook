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
			<li class="active">{{ $trans->name }}</li>
		</ul>
		<div class="book">
			<div class="line first clearfix">
				<div class="image left">
					<div class="img">
						<img src="{{ asset('image/trans/'.$trans->image.'.jpg') }}">
					</div>
					<div class="button">
						<button type="button" class="btn left open-modal" data-modal="#modalnotlogin">Đánh giá</button>
						<button type="button" class="btn center open-modal" data-modal="#modalnotlogin">Theo dõi</button>
						<button type="button" class="btn right open-modal" data-modal="#modalnotlogin">Yêu thích</button>
					</div>
				</div>
				<div class="info">
					<h3>{{ $trans->name }}</h3>
					<div class="star">
						<span class="fa fa-star"></span>
						<span class="fa fa-star"></span>
						<span class="fa fa-star"></span>
						<span class="fa fa-star-half-o"></span>
						<span class="fa fa-star-o"></span>
						<span>{{ $trans->rate_point }}</span>
						<span class="rate">{{ $trans->rate }} đánh giá</span>
					</div>
					<div class="group clearfix">
						<div class="item red" title="yêu thích">
							<span class="glyphicon glyphicon-heart"></span> 
							<span>{{ $trans->like }}</span>
						</div>
						<div class="item blue" title="lượt xem">
							<span class="glyphicon glyphicon-eye-open"></span> 
							<span>{{ $trans->view }}</span>
						</div>
						<div class="item orange" title="bình luận">
							<span class="glyphicon glyphicon-comment"></span> 
							<span>{{ $trans->comment }}</span>
						</div>
						<div class="item green" title="theo dõi">
							<span class="glyphicon glyphicon-user"></span> 
							<span>{{ $trans->follow }}</span>
						</div>
					</div>
					<p><strong>Trưởng nhóm:</strong> {{ $trans->leader }}</p>
					<p><strong>Thành viên:</strong> {{ $trans->member }}</p>
					<p><strong>Số truyện đăng:</strong> 3</p>
					<p><strong>Facebook:</strong> <a href="">{{ $trans->name }}</a></p>
					<p><strong>Website:</strong> {{ ($trans->website != null) ? $trans->website : 'Đang cập nhật' }}</p>
				</div>
			</div>
			<div class="line second">
				<p style="text-align: justify;"><strong>Giới thiệu:</strong> {{ $trans->description }}</p>
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
								@foreach ($books as $book)
								<tr>
									<td class="clearfix">
										<p class="left"><a href="#">{{ $book->name }}</a></p>
										<p class="right">{{ date_format(date_create($book->create_at), 'd-m-Y') }}</p>
									</td>
								</tr>
								@endforeach
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
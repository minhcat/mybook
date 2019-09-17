@extends('master.detail')

{{-- title --}}
@section('title-color')
blue
@endsection

@section('title-header')
Chi Tiết Truyện
@endsection

@section('title-content')
Bạn có thể xem thông tin sách được cập nhật đầy đủ ở đây
@endsection
{{-- end title --}}

@section('detail')
<div class="detail col-lg-9 col-md-9 col-sm-12 col-xs-12">
	<div class="content">
		<ul class="breadcrumb">
			<li><a href="">Trang chủ</a></li>
			<li class="active">{{ $book->name }}</li>
		</ul>
		<div class="book">
			<div class="line first clearfix">
				<div class="image left">
					<div class="img">
						<img src="{{ asset('image/books/'.$book->image.'.jpg') }}">
					</div>
					<div class="button">
						@if (Auth::check())
						<button type="button" class="btn left open-modal" data-modal="#modalrate">Đánh giá</button>
						<button type="button" class="btn center open-modal" data-modal="#modalfollow">Theo dõi</button>
							@if ($contact['like'])
							<button type="button" class="btn right login" data-id='{{ $book->id }}'>Yêu thích</button>
							@else
							<button type="button" class="btn right login off" data-id='{{ $book->id }}'>Đã thích</button>
							@endif
						@else
						<button type="button" class="btn left open-modal" data-modal="#modalnotlogin">Đánh giá</button>
						<button type="button" class="btn center open-modal" data-modal="#modalnotlogin">Theo dõi</button>
						<button type="button" class="btn right open-modal" data-modal="#modalnotlogin">Yêu thích</button>
						@endif
					</div>
				</div>
				<div class="info">
					<h3>{{ $book->name }}</h3>
					<div class="star">
						<span class="fa fa-star"></span>
						<span class="fa fa-star"></span>
						<span class="fa fa-star"></span>
						<span class="fa fa-star-half-o"></span>
						<span class="fa fa-star-o"></span>
						<span>{{ $book->rate_point }}</span>
						<span class="rate">{{ $book->rate }} đánh giá</span>
					</div>
					<div class="group clearfix">
						<div class="item red" title="yêu thích">
							<span class="glyphicon glyphicon-heart"></span> 
							<span class="number">{{ $book->like }}</span>
						</div>
						<div class="item blue" title="lượt xem">
							<span class="glyphicon glyphicon-eye-open"></span> 
							<span class="number">{{ $book->view }}</span>
						</div>
						<div class="item orange" title="bình luận">
							<span class="glyphicon glyphicon-comment"></span> 
							<span class="number">{{ $book->comment }}</span>
						</div>
						<div class="item green" title="theo dõi">
							<span class="glyphicon glyphicon-user"></span> 
							<span class="number">{{ $book->follow }}</span>
						</div>
					</div>
					<p><strong>Tên khác:</strong> {{ $book->other_name }}</p>
					<p><strong>Thể loại:</strong> <a href="">Comedy</a>, <a href="">Magic, <a href="">Fanstasy</a></p>
					<p><strong>Tác giả:</strong> <a href="">Maruyama Kugane</a></p>
					<p><strong>Minh họa:</strong> <a href="">Miyama Hugin</a></p>
					<p><strong>Nhóm dịch:</strong> <a href="">A3manga</a>, <a href="">MangaVN</a>, <a href="">Dark Angels Group</a>, <a href="">A3manga</a>, <a href="">MangaVN</a>, <a href="">Dark Angels Group</a></p>
					<p><strong>Ngày xuất bản:</strong> 30/07/2012</p>
					<p><strong>Tình trạng:</strong> Đang tiến hành</p>
					<p><strong>Nhân vật:</strong> <a href="">Mononga</a>, <a href="">Albedo</a>, <a href="">Shalltear Bloodfallen</a>, <a href="">Cocytus</a>, <a href="">Demiurge</a>, <a href="">Sebas Tian</a>, <a href="">Narberal Gamma</a></p>
				</div>
			</div>
			<div class="line second">
				<p style="text-align: justify;"><strong>Giới thiệu:</strong> {{ $book->description }}</p>
				<p><strong>Từ khóa:</strong> {{ $book->keyword }}</p>
			</div>
			<div class="line chap">
				<!-- <h4>Danh sách chap</h4>
				<hr> -->
				<div class="header">
					<ul class="nav nav-tabs">
						<li class="active"><a data-toggle="tab" href="#group1">A3manga</a></li>
						<li><a data-toggle="tab" href="#group2">MangaVN</a></li>
						<li><a data-toggle="tab" href="#group3">Dark Angels Group</a></li>
					</ul>
				</div>
				<div class="body">
					<div class="info clearfix">
						<span class="chap-index"><strong>OVERLORD SỐ CHAP</strong></span>
						<span class="date"><strong>NGÀY ĐĂNG</strong></span>
					</div>
					<div class="tab-content">
						@foreach ($chaps_trans as $key => $chaps)
						<div id="group{{ $key }}" class="tab-pane fade in active">
							<table>
								@foreach ($chaps as $chap)
								<tr>
									<td class="clearfix">
										<p class="left"><a href="#">{{ $chap->name }}</a></p>
										<p class="right">{{ date_format(date_create($chap->create_at),'d-m-Y') }}</p>
									</td>
								</tr>
								@endforeach
							</table>
						</div>
						@endforeach
					</div>
				</div>
			</div>
			@include('partials.common.comment')
		</div>
	</div>
</div>
@endsection
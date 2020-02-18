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
		<div class="trans">
			<div class="line first clearfix">
				<div class="image left">
					<div class="img">
						<img src="{{ asset('image/trans/'.$trans->image.'.jpg') }}">
					</div>
					<div class="button">
						@if (Auth::check())
							<button type="button" class="btn left open-modal login" data-id='{{ $trans->id }}' data-modal="#modalrate">Đánh giá</button>
							{{-- follow --}}
							@if ($contact['follow'])
							<button type="button" class="btn center login" data-id='{{ $trans->id }}'>Theo dõi</button>
							@else
							<button type="button" class="btn center login off" data-id='{{ $trans->id }}'>Bỏ theo dõi</button>
							@endif
							{{-- like --}}
							@if ($contact['like'])
							<button type="button" class="btn right login" data-id='{{ $trans->id }}'>Yêu thích</button>
							@else
							<button type="button" class="btn right login off" data-id='{{ $trans->id }}'>Bỏ thích</button>
							@endif
						@else
						<button type="button" class="btn left open-modal" data-modal="#modalnotlogin">Đánh giá</button>
						<button type="button" class="btn center open-modal" data-modal="#modalnotlogin">Theo dõi</button>
						<button type="button" class="btn right open-modal" data-modal="#modalnotlogin">Yêu thích</button>
						@endif
					</div>
				</div>
				<div class="info">
					<h3>{{ $trans->name }}</h3>
					<div class="star">
						{{-- star 1 --}}
						@if ($book->rate_point <= 0.5)
						<span class="fa fa-star-half-o"></span>
						@else
						<span class="fa fa-star"></span>
						@endif
						{{-- star 2 --}}
						@if ($book->rate_point <= 1)
						<span class="fa fa-star-o"></span>
						@elseif ($book->rate_point <= 1.5)
						<span class="fa fa-star-half-o"></span>
						@else
						<span class="fa fa-star"></span>
						@endif
						{{-- star 3 --}}
						@if ($book->rate_point <= 2)
						<span class="fa fa-star-o"></span>
						@elseif ($book->rate_point <= 2.5)
						<span class="fa fa-star-half-o"></span>
						@else
						<span class="fa fa-star"></span>
						@endif
						{{-- star 4 --}}
						@if ($book->rate_point <= 3)
						<span class="fa fa-star-o"></span>
						@elseif ($book->rate_point <= 3.5)
						<span class="fa fa-star-half-o"></span>
						@else
						<span class="fa fa-star"></span>
						@endif
						{{-- star 5 --}}
						@if ($book->rate_point <= 4)
						<span class="fa fa-star-o"></span>
						@elseif ($book->rate_point <= 4.5)
						<span class="fa fa-star-half-o"></span>
						@else
						<span class="fa fa-star"></span>
						@endif
						<span class="rate_point">{{ $trans->rate_point }}</span>
						<span class="rate">{{ $trans->rate }}</span> đánh giá
					</div>
					<div class="group clearfix">
						<div class="item red" title="yêu thích">
							<span class="glyphicon glyphicon-heart"></span> 
							<span class="number">{{ $trans->like }}</span>
						</div>
						<div class="item blue" title="lượt xem">
							<span class="glyphicon glyphicon-eye-open"></span> 
							<span class="number">{{ $trans->view }}</span>
						</div>
						<div class="item orange" title="bình luận">
							<span class="glyphicon glyphicon-comment"></span> 
							<span class="number">{{ $trans->comment }}</span>
						</div>
						<div class="item green" title="theo dõi">
							<span class="glyphicon glyphicon-user"></span> 
							<span class="number">{{ $trans->follow }}</span>
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
			@include('partials.common.comment')
		</div>
	</div>
</div>
@endsection
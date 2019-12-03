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
							<button type="button" class="btn left open-modal login" data-id='{{ $book->id }}' data-modal="#modalrate">Đánh giá</button>
							{{-- follow --}}
							@if ($contact['follow'])
							<button type="button" class="btn center login" data-id='{{ $book->id }}'>Theo dõi</button>
							@else
							<button type="button" class="btn center login off" data-id='{{ $book->id }}'>Bỏ theo dõi</button>
							@endif
							{{-- like --}}
							@if ($contact['like'])
							<button type="button" class="btn right login" data-id='{{ $book->id }}'>Yêu thích</button>
							@else
							<button type="button" class="btn right login off" data-id='{{ $book->id }}'>Bỏ thích</button>
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
						<span class="rate_point">{{ $book->rate_point }}</span>
						<span class="rate">{{ $book->rate }}</span> đánh giá
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
					<p><strong>Thể loại:</strong> 
						@foreach ($book->categories as $key => $category)
							@if ($key < count($book->categories) - 1)
							<a href="{{ url('/list/category/'.$category['slug']) }}">{{ ucwords($category['name']) }}</a>,
							@else
							<a href="{{ url('/list/category/'.$category['slug']) }}">{{ ucwords($category['name']) }}</a>
							@endif
						@endforeach
					</p>
					@if ($book->author == null)
					<p><strong>Tác giả:</strong> Đang cập nhật</p>
					@else
					<p><strong>Tác giả:</strong> <a href="{{ url('/detail/author/'.$book->author->slug) }}">{{ $book->author->name }}</a></p>
					@endif
					@if ($book->artist == null)
					<p><strong>Minh họa:</strong> Đang cập nhật</p>
					@else
					<p><strong>Minh họa:</strong> <a href="{{ url('/detail/author/'.$book->artist->slug) }}">{{ $book->artist->name }}</a></p>
					@endif
					<p><strong>Nhóm dịch:</strong> 
						@foreach ($book->transes as $key => $trans)
							@if ($key < count($book->transes) - 1)
							<a href="{{ url('/detail/trans/'.$trans->slug) }}">{{ $trans->name }}</a>,
							@else
							<a href="{{ url('/detail/trans/'.$trans->slug) }}">{{ $trans->name }}</a>
							@endif
						@endforeach
					</p>
					<p><strong>Ngày xuất bản:</strong> {{ date_format(date_create($book->release_at), 'd/m/Y') }}</p>
					<p><strong>Tình trạng:</strong> {{ ($book->status == 1) ? 'Đang tiến hành' : 'Đã hoàn thành' }}</p>
					<p><strong>Nhân vật:</strong> 
						@foreach ($book->characters as $key => $character)
							@if ($key < count($book->characters) - 1)
							<a href="{{ url('/detail/character/'.$character->slug) }}">{{ $character->name }}</a>,
							@else
							<a href="{{ url('/detail/character/'.$character->slug) }}">{{ $character->name }}</a>
							@endif
						@endforeach
					</p>
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
						@foreach ($book->transes as $key => $trans)
							@if ($key == 0)
							<li class="active"><a data-toggle="tab" href="#group{{ $key + 1 }}">{{ $trans->name }}</a></li>
							@else
							<li><a data-toggle="tab" href="#group{{ $key + 1 }}">{{ $trans->name }}</a></li>
							@endif
						@endforeach
					</ul>
				</div>
				<div class="body">
					<div class="info clearfix">
						<span class="chap-index"><strong>SỐ CHAP</strong></span>
						<span class="date"><strong>NGÀY ĐĂNG</strong></span>
					</div>
					<div class="tab-content">
						@foreach ($chaps_trans as $key => $chaps)
						<div id="group{{ $key }}" class="tab-pane fade in active">
							<table>
								@foreach ($chaps as $chap)
								<tr>
									<td class="clearfix">
										<p class="left"><a href="{{ url('read/'.$book->slug.'/'.$book->transes[$key]->slug.'/'.$chap->slug) }}">{{ $chap->name }}</a></p>
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
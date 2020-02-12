@extends('master.list')

{{-- title --}}
@section('title-color')
orange
@endsection

@section('title-header')
Truyện Bình Luận Nhiều
@endsection

@section('title-content')
Danh sách truyện được sắp xếp dựa trên lượt bình luận của mọi người
@endsection
{{-- end title --}}

@section('list')
<div class="listbook comment col-lg-9 col-md-9 col-sm-12 col-xs-12">
	<div class="content">
		<ul class="breadcrumb">
			<li><a href="">Trang chủ</a></li>
			<li class="active">Truyện bình luận nhiều</li>
		</ul>
		<div class="list">
			@foreach ($books as $key => $book)
			
			<div class="book clearfix">
				<a href="{{ url('/detail/book/'.$book->slug) }}"><img src="{{ asset('image/books/'.$book->image) }}" width="160px" height="160px"></a>
				<div class="rank {{ $book->background }}">{{ $book->index }}</div>
				<div class="info">
					<h4 class="name"><a href="{{ url('/detail/book/'.$book->slug) }}">{{ $book->name }}</a></h4>
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
						<span>{{ $book->rate_point }}</span>
						<span class="rate">{{ $book->rate }} đánh giá</span>
					</div>
					<div class="group clearfix">
						<div class="item red" title="yêu thích">
							<span class="glyphicon glyphicon-heart"></span> 
							<span>{{ $book->like }}</span>
						</div>
						<div class="item blue" title="lượt xem">
							<span class="glyphicon glyphicon-eye-open"></span> 
							<span>{{ $book->view }}</span>
						</div>
						<div class="item green" title="theo dõi">
							<span class="glyphicon glyphicon-user"></span> 
							<span>{{ $book->follow }}</span>
						</div>
					</div>
					<div class="type"><strong>Thể loại:</strong> 
						@foreach ($book->categories as $key => $category)
							@if ($key < count($book->categories)-1)
							<a href="{{ url('/list/category/'.$category['slug']) }}">{{ $category['name'] }}</a>, 
							@else
							<a href="{{ url('/list/category/'.$category['slug']) }}">{{ $category['name'] }}</a>
							@endif
						@endforeach
					</div>

					<div class="comment clearfix">
						<strong>Lượt bình luận:</strong>
						<br>
						<div class="page">trang truyện: {{ $book->detail_cmd }} lượt</div>
						<div class="chap">các chap: {{ $book->chap_cmd }} lượt</div>
						<div class="reply">phản hồi: {{ $book->reply_cmd }} lượt</div>
						<div class="all">tổng cộng: {{ $book->all_cmd }} lượt</div>
					</div>
				</div>
			</div>
			@if ($book->index < count($books))
			<hr>
			@endif
			@endforeach
		</div>
		<div class="paging">
			@include('vendor.default', ['paginator' => $books])
		</div>
	</div>
</div>
@endsection
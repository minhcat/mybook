@extends('master.list')

{{-- title --}}
@section('title-color')
red
@endsection

@section('title-header')
Bảng Xếp Hạng
@endsection

@section('title-content')
Danh sách truyện được sắp xếp dựa trên lượt xem, lượt yêu thích
@endsection
{{-- end title --}}

@section('list')
<div class="listbook view col-lg-9 col-md-9 col-sm-12 col-xs-12">
	<div class="content">
		<ul class="breadcrumb">
			<li><a href="">Trang chủ</a></li>
			<li class="active">Bảng xếp hạng</li>
		</ul>
		<div class="list">
			@foreach ($books as $key => $book)
			<div class="book clearfix">
				<a href="{{ url('/detail/book/'.$book->slug) }}"><img src="{{ asset('image/books/'.$book->image.'.jpg') }}" width="160px" height="160px"></a>
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
						<div class="item orange" title="bình luận">
							<span class="glyphicon glyphicon-comment"></span> 
							<span>{{ $book->comment }}</span>
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

					<div class="view clearfix">
						<strong>Lượt xem:</strong>
						<br>
						<div class="day">ngày: {{ $book->book_view['day'] }} lượt</div>
						<div class="week">tuần: {{ $book->book_view['week'] }} lượt</div>
						<div class="month">tháng: {{ $book->book_view['month'] }} lượt</div>
						<div class="all">tổng cộng: {{ $book->book_view['all'] }} lượt</div>
					</div>
				</div>
			</div>
			@if ($key < count($books) - 1)
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
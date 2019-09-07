@extends('master.list')

{{-- title --}}
@section('title-color')
green
@endsection

@section('title-header')
Truyện Đánh Giá Cao
@endsection

@section('title-content')
Danh sách truyện được sắp xếp dựa trên mức độ đánh giá và lượt đánh giá
@endsection
{{-- end title --}}

@section('list')
<div class="listbook rate col-lg-9 col-md-9 col-sm-12 col-xs-12">
	<div class="content">
		<ul class="breadcrumb">
			<li><a href="">Trang chủ</a></li>
			<li class="active">Truyện đánh giá cao</li>
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
						<div class="item green" title="theo dõi">
							<span class="glyphicon glyphicon-user"></span> 
							<span>100</span>
						</div>
					</div>
					<div class="type"><strong>Thể loại:</strong> <a href="">Hài hước</a>, <a href="">phiêu lưu</a>, <a href="">khoa học viễn tưởng</a>, <a href="">harem</a></div>

					<div class="rate clearfix">
						<strong>Lượt đánh giá:</strong>
						<br>
						<div class="perfect">tuyệt vời(5 sao): {{ $book->five_star }} lượt</div>
						<div class="good">khá hay(4 sao): {{ $book->four_star }} lượt</div>
						<div class="normal">bình thường(3 sao): {{ $book->three_star }} lượt</div>
						<div class="all">chán(2 sao): {{ $book->two_star }} lượt</div>
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
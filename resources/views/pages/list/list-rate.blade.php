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
			@foreach ($books as $book)
			<div class="book clearfix">
				<a href=""><img src="{{ asset('image/books/'.$book->image.'.jpg') }}" width="160px" height="160px"></a>
				<div class="rank {{ $book->background }}">{{ $book->index }}</div>
				<div class="info">
					<h4 class="name"><a href="detail-book.html">{{ $book->name }}</a></h4>
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
						<div class="item green" title="theo dõi">
							<span class="glyphicon glyphicon-user"></span> 
							<span>100</span>
						</div>
					</div>
					<div class="type"><strong>Thể loại:</strong> <a href="">Hài hước</a>, <a href="">phiêu lưu</a>, <a href="">khoa học viễn tưởng</a>, <a href="">harem</a></div>

					<div class="rate clearfix">
						<strong>Lượt đánh giá:</strong>
						<br>
						<div class="perfect">tuyệt vời(5 sao): 120 lượt</div>
						<div class="good">khá hay(4 sao): 60 lượt</div>
						<div class="normal">bình thường(3 sao): 20 lượt</div>
						<div class="all">tổng cộng: 200 lượt</div>
					</div>
				</div>
			</div>
			@if ($book->index < count($books))
			<hr>
			@endif
			@endforeach
		</div>
		<div class="paging">
			{!! $books->render() !!}
		</div>
	</div>
</div>
@endsection
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
					<div class="type"><strong>Thể loại:</strong> <a href="">Hài hước</a>, <a href="">phiêu lưu</a>, <a href="">khoa học viễn tưởng</a>, <a href="">harem</a></div>

					<div class="view clearfix">
						<strong>Lượt xem:</strong>
						<br>
						<div class="day">ngày: 1000 lượt</div>
						<div class="week">tuần: 10.000 lượt</div>
						<div class="month">tháng: 100.000 lượt</div>
						<div class="all">tổng cộng: 200.000 lượt</div>
					</div>
				</div>
			</div>
			@if ($book->index < count($books))
			<hr>
			@endif
			@endforeach
		</div>
		<div class="paging">
			<ul class="pagination">
				<li><a href="#"><<</a></li>
				<li><a href="#"><</a></li>
				<li class="active"><a href="#">3</a></li>
				<li><a href="#">4</a></li>
				<li><a href="#">5</a></li>
				<li><a href="#">6</a></li>
				<li><a href="#">></a></li>
				<li><a href="#">>></a></li>
			</ul>
		</div>
	</div>
</div>
@endsection
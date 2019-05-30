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
				<a href="detail-book.html"><img src="{{ asset('image/books/'.$book->image.'.jpg') }}" width="160px" height="160px"></a>
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
						<div class="item blue" title="lượt xem">
							<span class="glyphicon glyphicon-eye-open"></span> 
							<span>{{ $book->view }}</span>
						</div>
						<div class="item green" title="theo dõi">
							<span class="glyphicon glyphicon-user"></span> 
							<span>{{ $book->follow }}</span>
						</div>
					</div>
					<div class="type"><strong>Thể loại:</strong> <a href="">Hài hước</a>, <a href="">phiêu lưu</a>, <a href="">khoa học viễn tưởng</a>, <a href="">harem</a></div>

					<div class="comment clearfix">
						<strong>Lượt bình luận:</strong>
						<br>
						<div class="page">trang truyện: 100 lượt</div>
						<div class="chap">các chap: 500 lượt</div>
						<div class="reply">phản hồi: 400 lượt</div>
						<div class="all">tổng cộng: 1000 lượt</div>
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
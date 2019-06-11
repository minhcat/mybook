@extends('master.list')

{{-- title --}}
@section('title-color')
green
@endsection

@section('title-header')
Truyện Theo Dõi
@endsection

@section('title-content')
Danh sách các truyện mà bạn đăng ký theo dõi
@endsection
{{-- end title --}}

@section('list')
<div class="listbook col-lg-9 col-md-9 col-sm-12 col-xs-12">
	<div class="content">
		<ul class="breadcrumb">
			<li><a href="">Trang chủ</a></li>
			<li class="active">Truyện theo dõi</li>
		</ul>
		<div class="list">
			@foreach ($books as $key => $book)
			<div class="book clearfix">
				<a href=""><img src="{{ asset('image/books/'.$book->image.'.jpg') }}" width="160px" height="160px"></a>
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
						<div class="item orange" title="bình luận">
							<span class="glyphicon glyphicon-comment"></span> 
							<span>{{ $book->comment }}</span>
						</div>
						<div class="item green" title="theo dõi">
							<span class="glyphicon glyphicon-user"></span> 
							<span>{{ $book->follow }}</span>
						</div>
					</div>

					<div class="chap">
						<a href="read-book.html"><strong>Chap 160</strong></a> - <div class="time">12 giờ trước</div>
					</div>
					<div class="chap">
						<a href="read-book.html"><strong>Chap 159</strong></a> - <div class="time">2 ngày trước</div>
					</div>
					<button class="btn unfollow">Bỏ theo dõi</button>
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
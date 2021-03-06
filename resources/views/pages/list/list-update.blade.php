@extends('master.list')

{{-- title --}}
@section('title-color')
indigo
@endsection

@section('title-header')
Truyện Mới Cập Nhật
@endsection

@section('title-content')
Các loại truyện có được cập nhập, thêm chap mới, ra bảng dịch mới gần đây
@endsection
{{-- end title --}}

@section('list')
<div class="listbook col-lg-9 col-md-9 col-sm-12 col-xs-12">
	<div class="content">
		<ul class="breadcrumb">
			<li><a href="">Trang chủ</a></li>
			<li class="active">Truyện mới cập nhật</li>
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
						<div class="item red">
							<span class="glyphicon glyphicon-heart"></span> 
							<span>{{ $book->like }}</span>
						</div>
						<div class="item blue">
							<span class="glyphicon glyphicon-eye-open"></span> 
							<span>{{ $book->view }}</span>
						</div>
						<div class="item orange">
							<span class="glyphicon glyphicon-comment"></span> 
							<span>{{ $book->comment}}</span>
						</div>
						<div class="item green">
							<span class="glyphicon glyphicon-user"></span> 
							<span>{{ $book->follow }}</span>
						</div>
					</div>

					<div class="date"><strong>Ngày cập nhật:</strong> 20/12/2017</div>
					<div class="new-chap">
						<p><a href="">chap 78 - Lâu dài Issac</a></p>
						<p><a href="">chap 77 - Tướng cướp Kallen</a></p>
						<p><a href="">chap 76 - Lá thư đe dọa</a></p>
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
@extends('master.list')

{{-- title --}}
@section('title-color')
purple
@endsection

@section('title-header')
Truyện Đã Hoàn Thành
@endsection

@section('title-content')
Danh sách các truyện đã kết thúc hoặc kết thúc trong một phần riêng
@endsection
{{-- end title --}}

@section('list')
<div class="listbook col-lg-9 col-md-9 col-sm-12 col-xs-12">
	<div class="content">
		<ul class="breadcrumb">
			<li><a href="">Trang chủ</a></li>
			<li class="active">Truyện hoàn thành</li>
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

					<div class="sum-chap"><strong>Số chap:</strong> 125 chap</div>
					<div class="book-content"><strong>Nội dung:</strong> Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusantium velit et error asperiores sint ea, deleniti, laboriosam facere mollitia officiis tempora laudantium. Adipisci necessitatibus harum, dolor vel earum, alias natus.</div>
				</div>
			</div>
			@if ($key < count($books) - 1)
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
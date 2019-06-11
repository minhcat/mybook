@extends('master.list')

{{-- title --}}
@section('title-color')
purple
@endsection

@section('title-header')
Bạn Bè
@endsection

@section('title-content')
Danh sách những người bạn của bạn
@endsection
{{-- end title --}}

@section('list')
<div class="listbook col-lg-9 col-md-9 col-sm-12 col-xs-12">
	<div class="content">
		<ul class="breadcrumb">
			<li><a href="">Trang chủ</a></li>
			<li class="active">Danh sách bạn</li>
		</ul>
		<div class="list">
			@foreach ($friends as $key => $friend)
			<div class="book clearfix">
				<a href=""><img src="{{ asset('image/users/'.$friend->image.'.jpg') }}" width="160px" height="160px"></a>
				<div class="info">
					<h4 class="name"><a href="detail-book.html">{{ $friend->name }}</a></h4>
					<div class="star">
						<span class="fa fa-star"></span>
						<span class="fa fa-star"></span>
						<span class="fa fa-star"></span>
						<span class="fa fa-star-half-o"></span>
						<span class="fa fa-star-o"></span>
						<span>{{ $friend->rate_point }}</span>
						<span class="rate">{{ $friend->rate }} đánh giá</span>
					</div>
					<div class="group clearfix">
						<div class="item red" title="yêu thích">
							<span class="glyphicon glyphicon-heart"></span> 
							<span>{{ $friend->like }}</span>
						</div>
						<div class="item blue" title="bạn bè">
							<span class="glyphicon glyphicon-user"></span> 
							<span>{{ $friend->friend }}</span>
						</div>
						<div class="item orange" title="bình luận">
							<span class="glyphicon glyphicon-comment"></span> 
							<span>{{ $friend->comment }}</span>
						</div>
					</div>

					<div class="type"><strong>Biệt hiệu:</strong> {{ $friend->nickname }}</div>
					<div class="book-content"><strong>Tự giới thiệu:</strong> {{ $friend->description }}</div>
					<div class="type"><strong>Câu logan:</strong> {{ $friend->slogan }}</div>
				</div>
			</div>
			@if ($key < count($friends) - 1)
			<hr>
			@endif
			@endforeach
		</div>
		<div class="paging">
			@include('vendor.default', ['paginator' => $friends])
		</div>
	</div>
</div>
@endsection
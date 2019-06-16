@extends('master.list')

{{-- title --}}
@section('title-color')
blue
@endsection

@section('title-header')
Lịch Sử
@endsection

@section('title-content')
Lịch sử đọc truyện được lưu trữ tại đây
@endsection
{{-- end title --}}

@section('list')
<div class="listbook comment col-lg-9 col-md-9 col-sm-12 col-xs-12">
	<div class="content">
		<ul class="breadcrumb">
			<li><a href="">Trang chủ</a></li>
			<li class="active">Lịch sử đọc truyện</li>
		</ul>
		<div class="list">
			@foreach ($history as $key => $item)
			
			<div class="book clearfix">
				<a href="detail-book.html"><img src="{{ asset('image/'.$item->type.'/'.$item->image.'.jpg') }}" width="160px" height="160px"></a>
				<div class="info">
					<h4 class="name"><a href="detail-book.html">{{ $item->name }}</a></h4>
					<div class="group clearfix">
						<div class="item red" title="yêu thích">
							<span class="glyphicon glyphicon-heart"></span> 
							<span>{{ $item->like }}</span>
						</div>
						<div class="item blue" title="lượt xem">
							<span class="glyphicon glyphicon-eye-open"></span> 
							<span>{{ $item->view }}</span>
						</div>
						<div class="item green" title="theo dõi">
							<span class="glyphicon glyphicon-user"></span> 
							<span>{{ $item->follow }}</span>
						</div>
					</div>
					<div class="type"><strong>Thời gian truy cập:</strong> {{ date('H:i d-m-Y', $item->time) }}</div>
					<div class="type"><strong>Thể loại:</strong> <a href="">Hài hước</a>, <a href="">phiêu lưu</a>, <a href="">khoa học viễn tưởng</a>, <a href="">harem</a></div>

					<div class="book-content"><strong>Nội dung:</strong> {{ $item->description }}</div>
				</div>
			</div>
			@if ($key < count($history) - 1)
			<hr>
			@endif
			@endforeach
		</div>
		<div class="paging">
			@include('vendor.default', ['paginator' => $history])
		</div>
	</div>
</div>
@endsection
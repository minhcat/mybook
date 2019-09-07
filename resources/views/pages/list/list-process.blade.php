@extends('master.list')

{{-- title --}}
@section('title-color')
purple
@endsection

@section('title-header')
Truyện Đang Tiến Hành
@endsection

@section('title-content')
Danh sách các truyện chưa kết thúc và vẫn đang ra chap mới thường xuyên
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
				<a href="{{ url('/detail/book/'.$book->slug) }}"><img src="{{ asset('image/books/'.$book->image.'.jpg') }}" width="160px" height="160px"></a>
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
						<div class="item blue">
							<span class="glyphicon glyphicon-eye-open"></span> 
							<span>{{ $book->view }}</span>
						</div>
						<div class="item red">
							<span class="glyphicon glyphicon-heart"></span> 
							<span>{{ $book->like }}</span>
						</div>
						<div class="item orange">
							<span class="glyphicon glyphicon-comment"></span> 
							<span>{{ $book->comment }}</span>
						</div>
						<div class="item green">
							<span class="glyphicon glyphicon-user"></span> 
							<span>{{ $book->follow }}</span>
						</div>
					</div>

					<div class="date"><strong>Ngày cập nhật:</strong> {{ date_format(date_create($book->update_at), 'd/m/Y') }}</div>
					<div class="new-chap"><strong>Chap mới nhất:</strong> <a href="{{ url('/read/'.$book->slug.'/'.$book->trans_slug.'/'.$book->chap_slug) }}">{{ $book->chap_new }}</a></div>
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
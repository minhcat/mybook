@extends('master.list')

{{-- title --}}
@section('title-color')
teal
@endsection

@section('title-header')
Thông Báo
@endsection

@section('title-content')
Tổng hợp các thông báo của bạn tại đây
@endsection
{{-- end title --}}

@section('list')
<div class="listbook col-lg-9 col-md-9 col-sm-12 col-xs-12">
	<div class="content">
		<ul class="breadcrumb">
			<li><a href="">Trang chủ</a></li>
			<li class="active">Thông báo</li>
		</ul>
		<div class="list">
			@foreach ($notifications as $key => $notification)
			<div class="book clearfix">
				<a href="">
					@if ($notification->type == 'reply' || $notification->type == 'like' || $notification->type == 'tag' || $notification->type == 'addfriend' ||  $notification->type == 'admin' || $notification->type == 'feedback')
						<img src="{{ asset('image/users/'.$notification->image.'.jpg') }}" width="100px" height="100px">
					@elseif ($notification->type == 'newchap' || $notification->type == 'coming')
						<img src="{{ asset('image/books/'.$notification->image.'.jpg') }}" width="100px" height="100px">
					@endif
				</a>
				<div class="info">
					<h4 class="name">{!! $notification->action !!}</h4>
					
					<div class="type"><strong>Thời gian:</strong> {{ date_format(date_create($notification->date), 'H:i:s d/m/Y') }}</div>
					<div class="book-content"><strong>Nôi dung:</strong>{{ $notification->content }}</div>
					<div class="type">{!! $notification->info !!}</div>
				</div>
				<div class="option dropdown">
					<span class="fa fa-ellipsis-v dropdown-toggle" data-toggle="dropdown"></span>
					<ul class="dropdown-menu">
						<li><a class="open-modal" disabled="disabled" data-modal="#modalnoti">Bỏ nhận thông báo từ A-kun</a></li>
					</ul>
				</div>
			</div>
			@if ($key < count($notifications) - 1)
			<hr>
			@endif
			@endforeach
		</div>
		<div class="paging">
			@include('vendor.default', ['paginator' => $notifications])
		</div>
	</div>
</div>
@endsection
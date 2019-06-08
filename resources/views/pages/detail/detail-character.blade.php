@extends('master.detail')

{{-- title --}}
@section('title-color')
green
@endsection

@section('title-header')
Thông Tin Nhân Vật
@endsection

@section('title-content')
Bạn có thể xem thông tin nhân vật được cập nhật ở đây
@endsection
{{-- end title --}}

@section('detail')
<div class="detail col-lg-9 col-md-9 col-sm-12 col-xs-12">
	<div class="content">
		<ul class="breadcrumb">
			<li><a href="">Trang chủ</a></li>
			<li class="active">{{ $character->name }}</li>
		</ul>
		<div class="book">
			<div class="line first clearfix">
				<div class="image left">
					<div class="img">
						<img src="{{ asset('image/characters/'.$character->image.'.jpg') }}">
					</div>
				</div>
				<div class="info">
					<h3>{{ $character->name }}</h3>
					
					<p><strong>Tên khác:</strong> {{ $character->other_name }}</p>
					<p><strong>Giới tính:</strong> {{ ($character->gender) ? 'Nữ' : 'Nam'}}</p>
					<p><strong>Ngày sinh:</strong> {{ ($character->birth != null) ? date_format(date_create($character->birth),'d/m/Y') : 'Đang cập nhật'}}</p>
					<p><strong>Loại nhân vật:</strong> {{ $character->type }}</p>
					<p><strong>Gia đình:</strong> {{ $character->family }}</p>
					<p><strong>Nghề nghiệp:</strong> {{ $character->job }}</p>
					<p><strong>Sở thích:</strong> {{ $character->hobby }}</p>
				</div>
			</div>
			<div class="line second">
				<p style="text-align: justify;"><strong>Giới thiệu:</strong> {{ $character->description }}</p>
			</div>
			@include('partials.common.comment')
		</div>
	</div>
</div>
@endsection
@extends('master.detail')

{{-- title --}}
@section('title-color')
teal
@endsection

@section('title-header')
Thông Tin Người Dùng
@endsection

@section('title-content')
Bạn có thể xem thông tin người dùng được cập nhật công khai tại đây
@endsection
{{-- end title --}}

@section('detail')
<div class="detail col-lg-9 col-md-9 col-sm-12 col-xs-12">
	<div class="content">
		<ul class="breadcrumb">
			<li><a href="">Trang chủ</a></li>
			<li class="active">{{ $user->name }}</li>
		</ul>
		<div class="book">
			<div class="line first clearfix">
				<div class="image left">
					<div class="img">
						<img src="{{ asset('image/users/'.$user->image.'.jpg') }}">
					</div>
					<div class="button">
						<button type="button" class="btn left open-modal" data-modal="#modalnotlogin">Đánh giá</button>
						<button type="button" class="btn center open-modal" data-modal="#modalnotlogin">Theo dõi</button>
						<button type="button" class="btn right open-modal" data-modal="#modalnotlogin">Yêu thích</button>
					</div>
				</div>
				<div class="info">
					<h3>{{ $user->name }}</h3>
					<div class="star">
						<span class="fa fa-star"></span>
						<span class="fa fa-star"></span>
						<span class="fa fa-star"></span>
						<span class="fa fa-star-half-o"></span>
						<span class="fa fa-star-o"></span>
						<span>{{ $user->rate_point }}</span>
						<span class="rate">{{ $user->rate }} đánh giá</span>
					</div>
					<div class="group clearfix">
						<div class="item red" title="yêu thích">
							<span class="glyphicon glyphicon-heart"></span> 
							<span>{{ $user->like }}</span>
						</div>
						<div class="item blue" title="bạn bè">
							<span class="glyphicon glyphicon-user"></span> 
							<span>{{ $user->friend }}</span>
						</div>
						<div class="item orange" title="bình luận">
							<span class="glyphicon glyphicon-comment"></span> 
							<span>{{ $user->comment }}</span>
						</div>
					</div>
					<p><strong>Biệt hiệu:</strong> {{ $user->nickname }}</p>
					<p><strong>Giới tính:</strong> {{ ($user->gender)? 'Nữ' : 'Nam'}}</p>
					<p><strong>Ngày sinh:</strong> {{ date_format(date_create($user->birth),'d/m/Y')}}</p>
					<p><strong>Tính cách:</strong> {{ $user->genitive }}</p>
					<p><strong>Thể loại yêu thích:</strong> <a href="">Comedy</a>, <a href="">Magic, <a href="">Fanstasy</a></p>
					<p><strong>Facebook:</strong> <a href="">{{ $user->name }}</a></p>
					<p><strong>Twitter:</strong> <a href="">{{ $user->name }}</a></p>
					<p><strong>Câu slogan:</strong> {{ $user->slogan}}</p>
				</div>
			</div>
			<div class="line second">
				<p style="text-align: justify;"><strong>Tự giới thiệu:</strong> {{ $user->description }}</p>
			</div>
			@include('partials.common.comment')
		</div>
	</div>
</div>
@endsection
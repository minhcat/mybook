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
		<div class="user">
			<div class="line first clearfix">
				<div class="image left">
					<div class="img">
						<img src="{{ asset('image/users/'.$user->image.'.jpg') }}">
					</div>
					<div class="button">
						@if (Auth::check())
							@if (Auth::id() == $user->id)
								<a href="{{ url('/edit_info') }}" type="button" class="btn info login">Thay đổi thông tin</a>
								<a href="{{ url('/edit_info') }}" type="button" class="btn password login">Đổi mật khẩu</a>
							@else
								<button type="button" class="btn left open-modal login" data-id='{{ $user->id }}' data-modal="#modalrate">Đánh giá</button>
								{{-- friend --}}
								@if ($contact['friend'] == 0)
								<button type="button" class="btn center login off" data-id='{{ $user->id }}'>Bạn bè</button>
								@elseif ($contact['friend'] == 1)
								<button type="button" class="btn center login" data-id='{{ $user->id }}'>Kết bạn</button>
								@else
								<button type="button" class="btn center login off" data-id='{{ $user->id }}'>Đã gữi</button>
								@endif
								{{-- like --}}
								@if ($contact['like'])
								<button type="button" class="btn right login" data-id='{{ $user->id }}'>Yêu thích</button>
								@else
								<button type="button" class="btn right login off" data-id='{{ $user->id }}'>Bỏ thích</button>
								@endif
							@endif
						@else
						<button type="button" class="btn left open-modal" data-modal="#modalnotlogin">Đánh giá</button>
						<button type="button" class="btn center open-modal" data-modal="#modalnotlogin">Kết bạn</button>
						<button type="button" class="btn right open-modal" data-modal="#modalnotlogin">Yêu thích</button>
						@endif
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
						<span class="rate_point">{{ $user->rate_point }}</span>
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
					<p>
						<strong>Biệt hiệu:</strong> {{ $user->nickname }}
					</p>
					<p>
						<strong>Giới tính:</strong> {{ ($user->gender)? 'Nữ' : 'Nam'}}
					</p>
					<p>
						<strong>Ngày sinh:</strong> {{ date_format(date_create($user->birth),'d/m/Y')}}
					</p>
					<p>
						<strong>Tính cách:</strong> {{ $user->genitive }}
					</p>
					<p>
						<strong>Thể loại yêu thích:</strong>
						@foreach ($user->categories as $key => $category)
							@if ($key < count($user->categories) - 1)
							<a href="{{ url('/list/category/'.$category['slug']) }}">{{ ucwords($category['name']) }}</a>,
							@else
							<a href="{{ url('/list/category/'.$category['slug']) }}">{{ ucwords($category['name']) }}</a>
							@endif
						@endforeach
					</p>
					<p>
						<strong>Facebook:</strong> <a href="">{{ $user->name }}</a>
					</p>
					<p>
						<strong>Twitter:</strong> <a href="">{{ $user->name }}</a>
					</p>
					<p>
						<strong>Câu slogan:</strong> {{ $user->slogan}}
					</p>
				</div>
			</div>
			<div class="line second">
				<p style="text-align: justify;">
					<strong>Tự giới thiệu:</strong> {{ $user->description }}
				</p>
			</div>
			@include('partials.common.comment')
		</div>
	</div>
</div>
@endsection
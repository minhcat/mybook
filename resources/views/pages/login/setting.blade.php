@extends('master.login')

@section('main')
	<div class="main clearfix">
		<ul class="breadcrumb">
			<li><a href="">Trang chủ</a></li>
			<li class="active">Cài đặt</li>
		</ul>
		@if ($errors->any())
		<div class="alert alert-danger alert-dismissable">
			<a href="#" class="close" data-dismiss="alert" aria-label="close">×</a>
			<strong>Danger!</strong> 
			@foreach ($errors->all() as $error)
				<p>{{ $error }}</p>
			@endforeach
		</div>
		@elseif (\Session::has('success'))
		<div class="alert alert-success alert-dismissable">
			<a href="#" class="close" data-dismiss="alert" aria-label="close">×</a>
			<strong>Success!</strong>  {{ \Session::get('success') }}
			
		</div>
		@endif
		<form class="setting">
			<div class="set-label"><h4>Thông Báo</h4></div>
			<hr>
			<div class="notification">
				<table>
					<tr>
						<td>Nhận thông báo từ ban quản trị</td>
						<td>
							<div id="cover">
								<input type="checkbox" id="checkbox">
								<div id="bar"></div>
								<div id="knob"></div>
							</div>
						</td>
					</tr>
					<tr>
						<td>Nhận thông báo từ người dùng tương tác</td>
						<td>
							<div id="cover">
								<input type="checkbox" id="checkbox">
								<div id="bar"></div>
								<div id="knob"></div>
							</div>
						</td>
					</tr>
					<tr>
						<td>Nhận thông báo từ đối tượng đang theo dõi</td>
						<td>
							<div id="cover">
								<input type="checkbox" id="checkbox">
								<div id="bar"></div>
								<div id="knob"></div>
							</div>
						</td>
					</tr>
				</table>
			</div>
			<div class="set-label"><h4>Quyền Riêng Tư</h4></div>
			<hr>
			<div class="private">
				<div class="set-item">
					<p>Ai có thể xem thông tin cá nhân của bạn</p>
					<div class="dropdown">
						<button class="btn btn-private dropdown-toggle" type="button" data-toggle="dropdown">tùy chọn <span class="caret"></span></button>
						<ul class="dropdown-menu">
							<li>Tất cả mọi người</li>
							<li>Bạn của bạn</li>
							<li>Bạn bè</li>
							<li>Chỉ mình tôi</li>
						</ul>
					</div>
				</div>
				<div class="set-item">
					<p>Ai có thể tag bạn trong bình luận</p>
					<div class="dropdown">
						<button class="btn btn-private dropdown-toggle" type="button" data-toggle="dropdown">tùy chọn <span class="caret"></span></button>
						<ul class="dropdown-menu">
							<li>Tất cả mọi người</li>
							<li>Bạn của bạn</li>
							<li>Bạn bè</li>
							<li>Chỉ mình tôi</li>
						</ul>
					</div>
				</div>
				<div class="set-item">
					<p>Ai có thể gữi lời kết bạn đến bạn</p>
					<div class="dropdown">
						<button class="btn btn-private dropdown-toggle" type="button" data-toggle="dropdown">tùy chọn <span class="caret"></span></button>
						<ul class="dropdown-menu">
							<li>Tất cả mọi người</li>
							<li>Bạn của bạn</li>
							<li>Bạn bè</li>
							<li>Chỉ mình tôi</li>
						</ul>
					</div>
				</div>
			</div>
			<div class="set-label"><h4>Chặn</h4></div>
			<hr>
			<div class="block">
				<div class="user">Nguyễn Võ <span class="cancel-block open-modal" data-modal="#modalblock">&times;</span></div>
				<div class="user">Võ Thị Quyên <span class="cancel-block open-modal" data-modal="#modalblock">&times;</span></div>
				<div class="user">Trương Tuấn Long Nhân <span class="cancel-block open-modal" data-modal="#modalblock">&times;</span></div>
				<div class="user">Minh Lê <span class="cancel-block open-modal" data-modal="#modalblock">&times;</span></div>
				<div class="user">Nguyễn Võ <span class="cancel-block open-modal" data-modal="#modalblock">&times;</span></div>
				<div class="user">Võ Thị Quyên <span class="cancel-block open-modal" data-modal="#modalblock">&times;</span></div>
				<div class="user">Trương Tuấn Long Nhân <span class="cancel-block open-modal" data-modal="#modalblock">&times;</span></div>
				<div class="user">Minh Lê <span class="cancel-block open-modal" data-modal="#modalblock">&times;</span></div>
				<div class="user">Lose Man <span class="cancel-block open-modal" data-modal="#modalblock">&times;</span></div>
				<div class="user">Cyber Archfiend <span class="cancel-block open-modal" data-modal="#modalblock">&times;</span></div>
			</div>
		</form>
	</div>
@endsection
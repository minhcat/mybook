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
			<div class="group">
				<div class="set-label"><h4><strong>Thông Báo</strong></h4></div>
				<hr>
				<div class="notification">
					<table>
						<tr>
							<td>Nhận thông báo từ ban quản trị</td>
							<td>
								<div id="cover">
									<input type="checkbox" id="checkbox" name="noti-admin">
									<div id="bar"></div>
									<div id="knob"></div>
								</div>
							</td>
						</tr>
						<tr>
							<td>Nhận thông báo từ người dùng tương tác</td>
							<td>
								<div id="cover">
									<input type="checkbox" id="checkbox" name="noti-user">
									<div id="bar"></div>
									<div id="knob"></div>
								</div>
							</td>
						</tr>
						<tr>
							<td>Nhận thông báo từ đối tượng đang theo dõi</td>
							<td>
								<div id="cover">
									<input type="checkbox" id="checkbox" name="noti-item">
									<div id="bar"></div>
									<div id="knob"></div>
								</div>
							</td>
						</tr>
					</table>
				</div>
			</div>
			<div class="group">
				<div class="set-label"><h4><strong>Quyền Riêng Tư</strong></h4></div>
				<hr>
				<div class="private">
					<table>
						<tr class="info">
							<td class="header">Ai có thể xem thông tin cá nhân của bạn</td>
							<td class="select">Tất cả mọi người</td>
							<td>
								<div class="dropdown">
									<button class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown">tùy chọn <span class="caret"></span></button>
									<ul class="dropdown-menu">
										<li data-target="info" data-value="all">Tất cả mọi người</li>
										<li data-target="info" data-value="friends-of-friends">Bạn của bạn</li>
										<li data-target="info" data-value="friends">Bạn bè</li>
										<li data-target="info" data-value="only-me">Chỉ mình tôi</li>
									</ul>
								</div>
							</td>
						</tr>
						<tr class="tag">
							<td class="header">Ai có thể tag bạn trong bình luận</td>
							<td class="select">Tất cả mọi người</td>
							<td>
								<div class="dropdown">
									<button class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown">tùy chọn <span class="caret"></span></button>
									<ul class="dropdown-menu">
										<li data-target="tag" data-value="all">Tất cả mọi người</li>
										<li data-target="tag" data-value="friends-of-friends">Bạn của bạn</li>
										<li data-target="tag" data-value="friends">Bạn bè</li>
										<li data-target="tag" data-value="only-me">Chỉ mình tôi</li>
									</ul>
								</div>
							</td>
						</tr>
						<tr class="friend">
							<td class="header">Ai có thể gữi lời kết bạn đến bạn</td>
							<td class="select">Tất cả mọi người</td>
							<td>
								<div class="dropdown">
									<button class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown">tùy chọn <span class="caret"></span></button>
									<ul class="dropdown-menu">
										<li data-target="friend" data-value="all">Tất cả mọi người</li>
										<li data-target="friend" data-value="friends-of-friends">Bạn của bạn</li>
										<li data-target="friend" data-value="friends">Bạn bè</li>
										<li data-target="friend" data-value="only-me">Chỉ mình tôi</li>
									</ul>
								</div>
							</td>
						</tr>
					</table>
					<input id="info" type="hidden" name="info-me">
					<input id="tag" type="hidden" name="tag-me">
					<input id="friend" type="hidden" name="add-friend">
				</div>
			</div>
			<div class="group">
				<div class="set-label"><h4><strong>Chặn</strong></h4></div>
				<hr>
				<div class="block">
					<div class="user active">Nguyễn Võ <span class="cancel-block open-modal" data-modal="#modalblock">&times;</span></div>
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
			</div>
			<div class="line clearfix submit">
				<div class="col-md-6"><button type="button" class="submit form-control">Thay Đổi</button></div>
				<div class="col-md-6"><button type="reset" class="reset form-control">Nhập lại</button></div>
			</div>
		</form>
	</div>
@endsection

@section('define-footer')
	<script type="text/javascript" src="{{ asset('js/login.js') }}"></script>
@endsection
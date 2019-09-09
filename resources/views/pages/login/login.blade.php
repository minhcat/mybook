@extends('master.login')

@section('main')
	<div class="main clearfix">
		<ul class="breadcrumb">
			<li><a href="">Trang chủ</a></li>
			<li class="active">Đăng nhập</li>
		</ul>
		<div class="header">
		<h2>Đăng Nhập</h2>
			<div class="image">
				<img src="image/kirito_720x720.jpg" class="img-circle">
			</div>
		</div>
		<form action="index_login.html" class="login form-horizontal clearfix">
			<div class="line clearfix">
				<label class="col-md-3">Tên Đăng Nhập</label>
				<div class="col-md-9">
					<input type="text" name="user" class="form-control" placeholder="nhập tên đăng nhập">
				</div>
			</div>
			<div class="line clearfix">
				<label class="col-md-3">Mật Khẩu</label>
				<div class="col-md-9">
					<input type="password" name="password" class="form-control" placeholder="nhập mật khẩu">
				</div>
			</div>

			<div class="line clearfix">
				<div class="col-md-12">
					<input type="checkbox" checked="checked"> Nhớ mật khẩu
				</div>
			</div>

			<div class="line clearfix">
				<div class="button col-md-6 col-sm-6 col-xs-6"><button type="submit" class="submit form-control">Đăng nhập</button></div>
				<div class="button col-md-6 col-sm-6 col-xs-6"><button type="reset" class="reset form-control">Nhập lại</button></div>
			</div>
		</form>
	</div>
@endsection
@extends('master.login')

@section('main')
	<div class="main clearfix">
		<ul class="breadcrumb">
			<li><a href="">Trang chủ</a></li>
			<li class="active">Đăng nhập</li>
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
		<div class="header">
			<h2>Đăng Nhập</h2>
			<div class="image">
				<img src="image/kirito_720x720.jpg" class="img-circle">
			</div>
		</div>
		<form action="{{ url('/login') }}" method="POST" class="login form-horizontal clearfix">
			<input type="hidden" name="_token" value="{{ csrf_token() }}">
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
					<input type="checkbox" checked="checked" name="remember"> Nhớ mật khẩu
				</div>
			</div>

			<div class="line clearfix">
				<div class="button col-md-6 col-sm-6 col-xs-6"><button type="submit" class="submit form-control">Đăng nhập</button></div>
				<div class="button col-md-6 col-sm-6 col-xs-6"><button type="reset" class="reset form-control">Nhập lại</button></div>
			</div>
		</form>
	</div>
@endsection
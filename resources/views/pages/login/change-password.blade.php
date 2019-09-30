@extends('master.login')

@section('main')
	<div class="main clearfix">
		<ul class="breadcrumb">
			<li><a href="">Trang chủ</a></li>
			<li class="active">Đổi mật khẩu</li>
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
			<h2>Đổi Mật Khẩu</h2>
			<div class="image">
				<img src="{{ asset('/image/users/'.$user->image.'.jpg') }}" class="img-circle">
			</div>
		</div>
		<form action="{{ url('/change_password/'.$user->id) }}" method="POST" class="login form-horizontal clearfix">
			<input type="hidden" name="_token" value="{{ csrf_token() }}">
			<div class="line clearfix">
				<label class="col-md-3">Mật Khẩu Cũ</label>
				<div class="col-md-9">
					<input type="password" name="old-password" class="form-control" placeholder="nhập mật khẩu cũ" value="{{ old('old-password') }}">
				</div>
			</div>
			<div class="line clearfix">
				<label class="col-md-3">Mật Khẩu Mới</label>
				<div class="col-md-9">
					<input type="password" name="new-password" class="form-control" placeholder="nhập mật khẩu mới" value="{{ old('new-password') }}">
				</div>
			</div>
			<div class="line clearfix">
				<label class="col-md-3">Nhập Lại Mật Khẩu</label>
				<div class="col-md-9">
					<input type="password" name="repassword" class="form-control" placeholder="nhập lại mật khẩu" value="{{ old('repassword') }}">
				</div>
			</div>

			<div class="line clearfix">
				<label class="col-md-3">Nhập Mã Xác Nhận</label>
				<div class="col-md-9">
					<input type="text" name="code" class="form-control" placeholder="nhập mã xác nhận" value="{{ old('code') }}">
				</div>
			</div>
			<div class="line clearfix">
				<label class="col-md-3">Mã Xác Nhận</label>
				<div class="col-md-9">
					<img class="center" src="{{ asset('image/code.png') }}" width="200px">
				</div>
			</div>

			<div class="line clearfix">
				<div class="button col-md-6 col-sm-6 col-xs-6"><button type="submit" class="submit form-control">Thay đổi</button></div>
				<div class="button col-md-6 col-sm-6 col-xs-6"><button type="reset" class="reset form-control">Nhập lại</button></div>
			</div>
		</form>
	</div>
@endsection
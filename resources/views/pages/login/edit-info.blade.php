@extends('master.login')

@section('main')
	<div class="main clearfix">
		<ul class="breadcrumb">
			<li><a href="">Trang chủ</a></li>
			<li class="active">Thay đổi thông tin</li>
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
		<form action="{{ url('edit_info/'.$user->id) }}" class="edit-info form-horizontal clearfix" method="POST" enctype="multipart/form-data">
			<input type="hidden" name="_token" value="{{ csrf_token() }}">
			<div class="header clearfix">
				<h2>Thay Đổi Thông Tin</h2>
				<div class="image">
					@if (Session::has('user-image'))
					<img src="{{ asset('image/upload/user.jpg') }}" class="edit-info">
					@elseif ($user->image != '' )
					<img src="{{ asset('image/users/'.$user->image.'.jpg') }}" class="edit-info">
					@else
					<img src="{{ asset('image/user-default.png') }}" class="edit-info">
					@endif
					
				</div>
				<div class="col-4 col-offset-4">
					<div class="col-10 col-offset-1">
						<label class="button form-control">
							Thay hình
							<input id="image" type="file" name="image">
						</label>
					</div>
				</div>
			</div>
		
			<h4>Thông tin</h4>
			<hr>
			<div class="line clearfix">
				<label class="col-lg-3 col-md-4 col-sm-4">Tên Hiển Thị<span></span></label>
				<div class="col-lg-9 col-md-8 col-sm-8">
					<input type="text" name="name" class="form-control" placeholder="nhập tên hiển thị" value="{{ (old('name')) ? old('name') : $user->name }}">
				</div>
			</div>
			<div class="line clearfix">
				<label class="col-lg-3 col-md-4">Email<span></span></label>
				<div class="col-lg-9 col-md-8">
					<input type="text" name="email" class="form-control" placeholder="nhập email" value="{{ (old('email')) ? old('email') : $user->email }}">
				</div>
			</div>
			<div class="line clearfix gender">
				<label class="col-md-3">Giới Tính</label>
				<div class="col-lg-2 col-md-3">
					<button class="select form-control checked" type="button">
						<span class="text"></span>
						<span class="caret"></span>
					</button>
					<ul class="dropdown-menu">
						<li data-value="0">Nam</li>
						<li data-value="1">Nữ</li>
					</ul>
					<input id="gender" type="hidden" name="gender" value="{{ (old('gender')) ? old('gender') : $user->gender }}">
				</div>
				
			</div>

			<div class="line clearfix birth">
				<label class="col-md-3">Ngày Sinh</label>
				<div class="col-lg-2 col-md-3 date">
					<button class="select form-control checked" type="button">
						<span class="text"></span>
						<span class="caret"></span>
					</button>
					<ul class="dropdown-menu birth">
						@for ($i = 1; $i <= 31; $i++)
						<li data-value="{{ $i }}">{{ $i }}</li>
						@endfor
					</ul>
					<input id="date" type="hidden" name="date" value="{{ (old('date')) ? old('date') : date_format(date_create($user->birth), 'd') }}">
				</div>
				
				<div class="col-lg-2 col-md-3 month">
					<button class="select form-control checked" type="button">
						<span class="text"></span>
						<span class="caret"></span>
					</button>
					<ul class="dropdown-menu birth">
						@for ($i = 1; $i <= 12; $i++)
						<li data-value="{{ $i }}">{{ $i }}</li>
						@endfor
					</ul>
					<input id="month" type="hidden" name="month" value="{{ (old('month')) ? old('month') : date_format(date_create($user->birth), 'm') }}">
				</div>
				
				<div class="col-lg-2 col-md-3 year">
					<button class="select form-control checked" type="button">
						<span class="text"></span>
						<span class="caret"></span>
					</button>
					<ul class="dropdown-menu birth">
						@for ($i = 2019; $i >= 1900; $i--)
						<li data-value={{ $i }}>{{ $i }}</li>
						@endfor
					</ul>
					<input id="year" type="hidden" name="year" value="{{ (old('year')) ? old('year') : date_format(date_create($user->birth), 'Y') }}">
				</div>
				
			</div>
			<div class="line clearfix">
				<label class="col-md-3">Biệt Danh</label>
				<div class="col-md-9">
					<input type="text" name="nickname" class="form-control" placeholder="nhập biệt danh" value="{{ (old('nickname')) ? old('nickname') : $user->nickname }}">
				</div>
			</div>
			<div class="line clearfix">
				<label class="col-md-3">Tính Cách</label>
				<div class="col-md-9">
					<input type="text" name="genitive" class="form-control" placeholder="nhập tính cách" value="{{ (old('genitive')) ? old('genitive') : $user->genitive }}">
				</div>
			</div>
			<div class="line clearfix">
				<label class="col-md-3">Facebook</label>
				<div class="col-md-9">
					<input type="text" name="facebook" class="form-control" placeholder="nhập link facebook" value="{{ (old('facebook')) ? old('facebook') : $user->facebook }}">
				</div>
			</div>
			<div class="line clearfix">
				<label class="col-md-3">Twitter</label>
				<div class="col-md-9">
					<input type="text" name="twitter" class="form-control" placeholder="nhập link twitter" value="{{ (old('twitter')) ? old('twitter') : $user->twitter }}">
				</div>
			</div>
			<div class="line clearfix">
				<label class="col-md-3">Câu slogan</label>
				<div class="col-md-9">
					<input type="text" name="slogan" class="form-control" placeholder="nhập câu slogan" value="{{ (old('slogan')) ? old('slogan') : $user->slogan }}">
				</div>
			</div>
			<div class="line clearfix">
				<label class="col-md-3">Tự Giới Thiệu</label>
				<div class="col-md-9">
					<textarea name="description" class="form-control" placeholder="nhập nội dung giới thiệu" rows="6">{{ (old('description')) ? old('description') : $user->description }}</textarea>
				</div>
			</div>
			<div class="line category clearfix">
				<label class="col-md-12">Thể loại yêu thích</label>
				<div class="item-group col-md-12 clearfix">
					@foreach ($categories as $category)
						<?php $check_cate = true; ?>
						@foreach ($user->categories as $user_category)
							@if ($user_category['slug'] == $category->slug)
								<?php $check_cate = false; ?>
								<div class="item select" data-id="{{ $category->id }}">{{ $category->name }}</div>
								<?php break;?>
							@endif
						@endforeach
						@if ($check_cate == true)
							<div class="item" data-id="{{ $category->id }}">{{ $category->name }}</div>
						@endif
						
					@endforeach
				</div>
				<?php $json = []; ?>
				@foreach ($user->categories as $category)
					<?php array_push($json, $category['id']); ?>
				@endforeach
				<?php $json = json_encode($json) ?>
				<input type="hidden" name="category" value="{{ $json }}">
			</div>

			<div class="line clearfix submit">
				<div class="col-md-6"><button type="submit" class="submit form-control">Thay đổi</button></div>
				<div class="col-md-6"><button type="reset" class="reset form-control">Nhập lại</button></div>
			</div>
		</form>
	</div>
@endsection

@section('define-footer')
	<script type="text/javascript" src="{{ asset('js/login.js') }}"></script>
@endsection
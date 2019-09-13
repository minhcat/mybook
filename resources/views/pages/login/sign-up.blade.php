@extends('master.login')

@section('main')
	<div class="main clearfix">
		<ul class="breadcrumb">
			<li><a href="">Trang chủ</a></li>
			<li class="active">Đăng ký</li>
		</ul>
		@if ($errors->any())
		<div class="alert alert-danger alert-dismissable">
			<a href="#" class="close" data-dismiss="alert" aria-label="close">×</a>
			<strong>Danger!</strong> 
			@foreach ($errors->all() as $error)
				<p>{{ $error }}</p>
			@endforeach
		</div>
		@endif
		<form action="{{ url('sign_up') }}" class="sign-up form-horizontal clearfix" method="POST" enctype="multipart/form-data">
			<input type="hidden" name="_token" value="{{ csrf_token() }}">
			<div class="header clearfix">
				<h2>Đăng Ký</h2>
				<div class="image">
					<img src="image/user-default.png" class="sign-up">
				</div>
				<div class="col-4 col-offset-4">
					<div class="col-10 col-offset-1">
						<label class="button form-control">
							Thêm hình
							<input id="image" type="file" name="image">
						</label>
					</div>
				</div>
			</div>
		
			<h4>Thông tin chính</h4>
			<hr>
			<div class="line clearfix">
				<label class="col-lg-3 col-md-4 col-sm-4">Tên Đăng Nhập<span>(*)</span></label>
				<div class="col-lg-9 col-md-8 col-sm-8">
					<input type="text" name="name_login" class="form-control" placeholder="nhập tên đăng nhập">
				</div>
			</div>
			<div class="line clearfix">
				<label class="col-lg-3 col-md-4 col-sm-4">Tên Hiển Thị<span>(*)</span></label>
				<div class="col-lg-9 col-md-8 col-sm-8">
					<input type="text" name="name" class="form-control" placeholder="nhập tên hiển thị">
				</div>
			</div>
			<div class="line clearfix">
				<label class="col-lg-3 col-md-4">Mật Khẩu<span>(*)</span></label>
				<div class="col-lg-9 col-md-8">
					<input type="password" name="password" class="form-control" placeholder="nhập mật khẩu">
				</div>
			</div>
			<div class="line clearfix">
				<label class="col-lg-3 col-md-4">Nhập Lại Mật Khẩu<span>(*)</span></label>
				<div class="col-lg-9 col-md-8">
					<input type="password" name="repassword" class="form-control" placeholder="nhập lại mật khẩu">
				</div>
			</div>
			<div class="line clearfix">
				<label class="col-lg-3 col-md-4">Email<span>(*)</span></label>
				<div class="col-lg-9 col-md-8">
					<input type="text" name="email" class="form-control" placeholder="nhập email">
				</div>
			</div>
			<h4>Thông tin khác</h4>
			<hr>
			<div class="line clearfix">
				<label class="col-md-3">Giới Tính</label>
				<div class="col-lg-2 col-md-3">
					<button class="select form-control" type="button">
						<span class="text">giới tính</span>
						<span class="caret"></span>
					</button>
					<ul class="dropdown-menu">
						<li>Nam</li>
						<li>Nữ</li>
					</ul>
				</div>
				<input type="hidden" name="gender">
			</div>

			<div class="line clearfix">
				<label class="col-md-3">Ngày Sinh</label>
				<div class="col-lg-2 col-md-3">
					<button class="select form-control" type="button">
						<span class="text">ngày</span>
						<span class="caret"></span>
					</button>
					<ul class="dropdown-menu birth">
						<li>1</li>
						@for ($i = 2; $i <= 31; $i++)
						<li>{{ $i }}</li>
						@endfor
					</ul>
				</div>
				<input type="hidden" name="date" value="01">
				<div class="col-lg-2 col-md-3">
					<button class="select form-control" type="button">
						<span class="text">tháng</span>
						<span class="caret"></span>
					</button>
					<ul class="dropdown-menu birth">
						@for ($i = 1; $i <= 12; $i++)
						<li>{{ $i }}</li>
						@endfor
					</ul>
				</div>
				<input type="hidden" name="month" value="01">
				<div class="col-lg-2 col-md-3">
					<button class="select form-control" type="button">
						<span class="text">năm</span>
						<span class="caret"></span>
					</button>
					<ul class="dropdown-menu birth">
						@for ($i = 2019; $i >= 1900; $i--)
						<li>{{ $i }}</li>
						@endfor
					</ul>
				</div>
				<input type="hidden" name="year" value="1990">
			</div>
			<div class="line clearfix">
				<label class="col-md-3">Biệt Danh</label>
				<div class="col-md-9">
					<input type="text" name="nickname" class="form-control" placeholder="nhập biệt danh">
				</div>
			</div>
			<div class="line clearfix">
				<label class="col-md-3">Tính Cách</label>
				<div class="col-md-9">
					<input type="text" name="genitive" class="form-control" placeholder="nhập tính cách">
				</div>
			</div>
			<div class="line clearfix">
				<label class="col-md-3">Facebook</label>
				<div class="col-md-9">
					<input type="text" name="facebook" class="form-control" placeholder="nhập link facebook">
				</div>
			</div>
			<div class="line clearfix">
				<label class="col-md-3">Twitter</label>
				<div class="col-md-9">
					<input type="text" name="twitter" class="form-control" placeholder="nhập link twitter">
				</div>
			</div>
			<div class="line clearfix">
				<label class="col-md-3">Câu slogan</label>
				<div class="col-md-9">
					<input type="text" name="slogan" class="form-control" placeholder="nhập câu slogan">
				</div>
			</div>
			<div class="line clearfix">
				<label class="col-md-3">Tự Giới Thiệu</label>
				<div class="col-md-9">
					<textarea name="description" class="form-control" placeholder="nhập nội dung giới thiệu" rows="6"></textarea>
				</div>
			</div>
			<div class="line category clearfix">
				<label class="col-md-12">Thể loại yêu thích</label>
				<div class="item-group col-md-12 clearfix">
					@foreach ($categories as $category)
					<div class="item" data-slug="{{ $category->id }}">{{ $category->name }}</div>
					@endforeach
				</div>
				<input type="hidden" name="category" value="[]">
			</div>

			<h4>Điều khoản</h4>
			<hr>
			<div class="line clearfix">
				<div class="col-md-12">
					<div class="rules">
						<p class="head">Quyền lợi tham gia</p>
						<p>1. Bạn có thể bình luận, phản hồi các bình luận của các bạn khác</p>
						<p>2. Bạn có thể đánh giá, giúp truyện bạn yêu thích ở vị trí cao hơi và được quan tâm nhiều hơn</p>
						<p>3. Bạn có thể theo dõi, lưu các truyện mà bạn muốn</p>
						<p class="head">Trách nhiệm thành viên</p>
						<p>1. Không được lấy tên, biệt danh... của các vị lãnh tụ cách mạng, các vị lãnh đạo đảng, nhà nước, những kẻ xấu như khủng bố, phát xít ... hoặc có ý nghĩa không lành mạnh.</p>
						<p>2. Hình đại diện hoặc thông tin cá nhân có liên quan đến các vấn đề chính trị, kinh tế và tôn giáo có thể gây bất lợi cho diễn đàn &amp; có nội dung không lành mạnh.</p>
						<p>3. Bình luận mang tính xây dựng, đóng góp, vui vẻ, không lăng mạ xúc phạm người khác.</p>
						<p>4. Bình luận có ý nghĩa, không quảng cáo, nói vấn đề không liên quan.</p>
						<p>5. Bình luận không liên quan đến chính trị, kinh tế, tôn giáo với nội dung không lành mạnh.</p>
						<p class="head">Hình thức kỷ luật</p>
						<p>1. Xóa thông tin có yếu tố không lành mạnh</p>
						<p>2. Xóa bình luận vi phạm</p>
						<p>3. Cấm bình luận trong 1 thời gian</p>
						<p>4. Cấm đăng nhập trong 1 thời gian</p>
						<p>5. Xóa tài khoản</p>
					</div>
				</div>
			</div>
			<div class="line clearfix success">
				<div class="col-md-12">
					<input type="checkbox"> Đồng ý điều khoản
				</div>
			</div>
			<div class="line clearfix">
				<div class="col-md-12">
					<p>Chú thích: <span class="red">(*)</span> thông tin bắt buộc</p>
				</div>
			</div>
			<div class="line clearfix submit">
				<div class="col-md-6"><button type="button" class="submit form-control">Đăng ký</button></div>
				<div class="col-md-6"><button type="reset" class="reset form-control">Nhập lại</button></div>
			</div>
		</form>
	</div>
@endsection

@section('define-footer')
	<script type="text/javascript" src="{{ asset('js/login.js') }}"></script>
@endsection
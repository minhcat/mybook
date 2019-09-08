@extends('master.login')

@section('main')
	<div class="main clearfix">
		<ul class="breadcrumb">
			<li><a href="">Trang chủ</a></li>
			<li class="active">Đăng ký</li>
		</ul>
		<div class="header clearfix">
			<h2>Đăng Ký</h2>
			<div class="image">
				<img src="image/user-default.png" class="sign-up">
			</div>
			<div class="col-4 col-offset-4">
				<div class="col-10 col-offset-1">
					<button class="form-control">Tải ảnh lên</button>
				</div>
			</div>
		</div>
		<form action="" class="sign-up form-horizontal clearfix">
			<h4>Thông tin chính</h4>
			<hr>
			<div class="line clearfix">
				<label class="col-lg-3 col-md-4 col-sm-4">Tên Đăng Nhập<span>(*)</span></label>
				<div class="col-lg-9 col-md-8 col-sm-8">
					<input type="text" name="" class="form-control" placeholder="nhập tên đăng nhập">
				</div>
			</div>
			<div class="line clearfix">
				<label class="col-lg-3 col-md-4">Mật Khẩu<span>(*)</span></label>
				<div class="col-lg-9 col-md-8">
					<input type="password" name="" class="form-control" placeholder="nhập mật khẩu">
				</div>
			</div>
			<div class="line clearfix">
				<label class="col-lg-3 col-md-4">Nhập Lại Mật Khẩu<span>(*)</span></label>
				<div class="col-lg-9 col-md-8">
					<input type="password" name="" class="form-control" placeholder="nhập lại mật khẩu">
				</div>
			</div>
			<div class="line clearfix">
				<label class="col-lg-3 col-md-4">Email<span>(*)</span></label>
				<div class="col-lg-9 col-md-8">
					<input type="text" name="" class="form-control" placeholder="nhập email">
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
			</div>

			<div class="line clearfix">
				<label class="col-md-3">Ngày Sinh</label>
				<div class="col-lg-2 col-md-3">
					<button class="select form-control" type="button">
						<span class="text">ngày</span>
						<span class="caret"></span>
					</button>
					<ul class="dropdown-menu">
						<li>1</li>
						<li>2</li>
						<li>3</li>
						<li>4</li>
						<li>5</li>
					</ul>
				</div>
				<div class="col-lg-2 col-md-3">
					<button class="select form-control" type="button">
						<span class="text">tháng</span>
						<span class="caret"></span>
					</button>
					<ul class="dropdown-menu">
						<li>1</li>
						<li>2</li>
						<li>3</li>
						<li>4</li>
						<li>5</li>
					</ul>
				</div>
				<div class="col-lg-2 col-md-3">
					<button class="select form-control" type="button">
						<span class="text">năm</span>
						<span class="caret"></span>
					</button>
					<ul class="dropdown-menu">
						<li>1990</li>
						<li>1991</li>
						<li>1992</li>
						<li>1993</li>
						<li>1994</li>
					</ul>
				</div>
			</div>
			<div class="line clearfix">
				<label class="col-md-3">Tên Hiển Thị</label>
				<div class="col-md-9">
					<input type="text" name="" class="form-control" placeholder="nhập tên hiển thị">
				</div>
			</div>
			<div class="line clearfix">
				<label class="col-md-3">Biệt Danh</label>
				<div class="col-md-9">
					<input type="text" name="" class="form-control" placeholder="nhập biệt danh">
				</div>
			</div>
			<div class="line clearfix">
				<label class="col-md-3">Nơi Làm Việc</label>
				<div class="col-md-9">
					<input type="text" name="" class="form-control" placeholder="nhập nơi làm việc">
				</div>
			</div>
			<div class="line clearfix">
				<label class="col-md-3">Facebook</label>
				<div class="col-md-9">
					<input type="text" name="" class="form-control" placeholder="nhập link facebook">
				</div>
			</div>
			<div class="line category clearfix">
				<label class="col-md-12">Thể loại yêu thích</label>
				<div class="item-group col-md-12 clearfix">
					<div class="item">action</div>
					<div class="item">adult</div>
					<div class="item">adventure</div>
					<div class="item">anime</div>
					<div class="item">bender</div>
					<div class="item">comic</div>
					<div class="item">cooking</div>
					<div class="item">cosplay</div>
					<div class="item">demons</div>
					<div class="item">doujinshi</div>
					<div class="item">ecchi</div>
					<div class="item">fanmade</div>
					<div class="item">fantasy</div>
					<div class="item">harem</div>
					<div class="item">history</div>
					<div class="item">magic</div>
					<div class="item">mystery</div>
					<div class="item">romance</div>
					<div class="item">school life</div>
					<div class="item">zombie</div>
				</div>
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
			<div class="line clearfix">
				<div class="col-md-12">
					<input type="checkbox"> Đồng ý điều khoản
				</div>
			</div>
			<div class="line clearfix">
				<div class="col-md-12">
					<p>Chú thích: <span class="red">(*)</span> thông tin bắt buộc</p>
				</div>
			</div>
			<div class="line clearfix">
				<div class="col-md-6"><button type="button" class="submit form-control">Đăng ký</button></div>
				<div class="col-md-6"><button type="reset" class="reset form-control">Nhập lại</button></div>
			</div>
		</form>
	</div>
@endsection
@extends('master.detail')

{{-- title --}}
@section('title-color')
green
@endsection

@section('title-header')
Thông Tin Nhân Vật
@endsection

@section('title-content')
Bạn có thể xem thông tin nhân vật được cập nhật ở đây
@endsection
{{-- end title --}}

@section('detail')
<div class="detail col-lg-9 col-md-9 col-sm-12 col-xs-12">
	<div class="content">
		<ul class="breadcrumb">
			<li><a href="">Trang chủ</a></li>
			<li class="active">Ainz Ooal Gown</li>
		</ul>
		<div class="book">
			<div class="line first clearfix">
				<div class="image left">
					<div class="img">
						<img src="{{ asset('image/ainz_ooal_gown.jpg') }}">
					</div>
				</div>
				<div class="info">
					<h3>Ainz Ooal Gown</h3>
					
					<p><strong>Tên khác:</strong> Momonga</p>
					<p><strong>Giới tính:</strong> Nam</p>
					<p><strong>Ngày sinh:</strong> Đang cập nhật</p>
					<p><strong>Loại nhân vật:</strong> Nhân vật chính</p>
					<p><strong>Gia đình:</strong> Người mẹ (đã chết)</p>
					<p><strong>Nghề nghiệp:</strong> Chúa tể, chủ lăng Nazarick</p>
					<p><strong>Sở thích:</strong> Thám hiểm</p>
				</div>
			</div>
			<div class="line second">
				<p style="text-align: justify;"><strong>Giới thiệu:</strong> Ainz Ooal Gown tạo hình là một bộ xương bất tử. Khi đang chơi một trò chơi thì anh bị rơi vào thế giới của trò chơi đó và trở thành chúa tể của đại lăng Nazarick. Anh ta cũng là người tạo ra NPC Pandora. Cùng với các hộ vệ lăng anh ta đi tìm hiểu về thế giới này, đồng thời tìm kiếm những người bị triệu hồi đến thế giới này như anh. Có trong tay vô số các bảo bối khủng anh ta làm thế nào để đạt được mục đích của mình?</p>
			</div>
			@include('partials.common.comment');
		</div>
	</div>
</div>
@endsection
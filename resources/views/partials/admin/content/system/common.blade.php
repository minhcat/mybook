<div class="box box-primary collapse" id="box-common" aria-expanded="false">
	<div class="box-header with-border">
		<h3 class="box-title">Cài đặt chung</h3>

		<div class="box-tools pull-right">
			<button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
			</button>
			<button type="button" class="btn btn-box-tool" data-remove="collapse"><i class="fa fa-times"></i></button>
		</div>
	</div>
	<div class="box-body">
		<h4>Header</h4>
		<div class="form-group">
			<label for="name">Tên Trang Web</label>
			<input type="text" class="form-control" id="name" value="MyBook">
		</div>
		<div class="form-group">
			<label for="name">Câu Logan</label>
			<input type="text" class="form-control" id="name" value="Luôn cập nhập truyện tranh mới nhất">
		</div>
		<div class="form-group">
			<label for="name">Logo</label>
			<br>
			<img class="header-img" src="{{ asset('image/admin/logo.png') }}" width="100px">
			<br>
			<button class="btn btn-primary">Thay đổi hình</button>
		</div>
		<div class="form-group">
			<label for="name">Hình ảnh</label>
			<br>
			<img class="header-img" src="{{ asset('image/admin/header1.png') }}" width="100px">
			<img class="header-img" src="{{ asset('image/admin/header2.png') }}" width="100px">
			<img class="header-img" src="{{ asset('image/admin/header3.png') }}" width="100px">
			<br>
			<button class="btn btn-primary">Thay đổi hình</button>
		</div>
		<hr>
		<h4>Footer</h4>
		<div class="form-group">
			<label for="name">Link 1</label>
			<div class="row">
				<div class="col-xs-6">
					<input type="text" class="form-control" id="name" placeholder="tên link" value="Truyện Mới Nhất">
				</div>
				<div class="col-xs-6">
					<input type="text" class="form-control" placeholder="link" id="name" value="list-update">
				</div>
			</div>
		</div>
		<div class="form-group">
			<label for="name">Link 2</label>
			<div class="row">
				<div class="col-xs-6">
					<input type="text" class="form-control" id="name" placeholder="tên link" value="Truyện Xem Nhiều">
				</div>
				<div class="col-xs-6">
					<input type="text" class="form-control" placeholder="link" id="name" value="list-view">
				</div>
			</div>
		</div>
		<div class="form-group">
			<label for="name">Link 3</label>
			<div class="row">
				<div class="col-xs-6">
					<input type="text" class="form-control" id="name" placeholder="tên link" value="Truyện Đã Hoàn Thành">
				</div>
				<div class="col-xs-6">
					<input type="text" class="form-control" placeholder="link" id="name" value="list-completed">
				</div>
			</div>
		</div>
		<div class="form-group">
			<label for="name">Thông Tin 1</label>
			<input type="text" class="form-control" placeholder="thông tin 1" id="name" value="Địa chỉ: 123 SD, Quận 1, TP.HCM">
		</div>
		<div class="form-group">
			<label for="name">Thông Tin 2</label>
			<input type="text" class="form-control" placeholder="thông tin 2" id="name" value="Điện thoại: 0909123456">
		</div>
		<div class="form-group">
			<label for="name">Thông Tin 3</label>
			<input type="text" class="form-control" placeholder="thông tin 3" id="name" value="Email: contact@mybook.vn">
		</div>
		<div class="form-group">
			<label for="name">Thông Tin Cuối</label>
			<input type="text" class="form-control" placeholder="thông tin cuối" id="name" value="Copyright © 2018 My Book, All Rights Reserved">
		</div>
	</div>
	<div class="box-footer">
		<button class="btn btn-primary">Thay đổi</button>
		<button class="btn btn-success">Hoàn tác</button>
	</div>
</div>
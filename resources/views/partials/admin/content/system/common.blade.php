<div class="box box-primary collapse" id="box-common" aria-expanded="false">
<form action="{{ url('/admin/super-admin/edit_system_common') }}" method="POST">
	<div class="box-header with-border">
		<h3 class="box-title">Cài đặt chung</h3>

		<div class="box-tools pull-right">
			<button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
			</button>
			<button type="button" class="btn btn-box-tool" data-remove="collapse"><i class="fa fa-times"></i></button>
		</div>
	</div>
	<div class="box-body">
		<input type="hidden" name="_token" value="{{ csrf_token() }}">
		<h4>Header</h4>
		<div class="form-group">
			<label for="name">Tên Trang Web</label>
			<input type="text" class="form-control" name="website_name" value="{{ $system['website_name'] }}">
		</div>
		<div class="form-group">
			<label for="name">Câu Slogan</label>
			<input type="text" class="form-control" name="slogan" value="{{ $system['slogan'] }}">
		</div>
		<div class="form-group">
			<label for="name">Logo</label>
			<br>
			<img class="header-img" src="{{ asset('image/system/'.$system['logo']) }}" width="100px">
			<br>
			<button class="btn btn-primary">Thay đổi hình</button>
		</div>
		<div class="form-group">
			<label for="name">Hình ảnh</label>
			<br>
			<img class="header-img" src="{{ asset('image/system/'.$system['header_image_1']) }}" width="100px">
			<img class="header-img" src="{{ asset('image/system/'.$system['header_image_2']) }}" width="100px">
			<img class="header-img" src="{{ asset('image/system/'.$system['header_image_3']) }}" width="100px">
			<br>
			<button class="btn btn-primary">Thay đổi hình</button>
		</div>
		<hr>
		<h4>Footer</h4>
		<div class="form-group">
			<label for="name">Link 1</label>
			<div class="row">
				<div class="col-xs-6">
					<input type="text" class="form-control" name="footer_link_name_1" placeholder="tên link" value="{{ $system['footer_link_name_1'] }}">
				</div>
				<div class="col-xs-6">
					<input type="text" class="form-control" name="footer_link_value_1" placeholder="link" value="{{ $system['footer_link_value_1'] }}">
				</div>
			</div>
		</div>
		<div class="form-group">
			<label for="name">Link 2</label>
			<div class="row">
				<div class="col-xs-6">
					<input type="text" class="form-control" name="footer_link_name_2" placeholder="tên link" value="{{ $system['footer_link_name_2'] }}">
				</div>
				<div class="col-xs-6">
					<input type="text" class="form-control" name="footer_link_value_2" placeholder="link" value="{{ $system['footer_link_value_2'] }}">
				</div>
			</div>
		</div>
		<div class="form-group">
			<label for="name">Link 3</label>
			<div class="row">
				<div class="col-xs-6">
					<input type="text" class="form-control" name="footer_link_name_3" placeholder="tên link" value="{{ $system['footer_link_name_3'] }}">
				</div>
				<div class="col-xs-6">
					<input type="text" class="form-control" name="footer_link_value_3" placeholder="link" value="{{ $system['footer_link_value_3'] }}">
				</div>
			</div>
		</div>
		<div class="form-group">
			<label for="name">Thông Tin 1</label>
			<input type="text" class="form-control" name="footer_info_1" placeholder="thông tin 1" value="{{ $system['footer_info_1'] }}">
		</div>
		<div class="form-group">
			<label for="name">Thông Tin 2</label>
			<input type="text" class="form-control" name="footer_info_2" placeholder="thông tin 2" value="{{ $system['footer_info_2'] }}">
		</div>
		<div class="form-group">
			<label for="name">Thông Tin 3</label>
			<input type="text" class="form-control" name="footer_info_3" placeholder="thông tin 3" value="{{ $system['footer_info_3'] }}">
		</div>
		<div class="form-group">
			<label for="name">Thông Tin Cuối</label>
			<input type="text" class="form-control" name="footer_last_info" placeholder="thông tin cuối" value="{{ $system['footer_last_info'] }}">
		</div>
	</div>
	<div class="box-footer">
		<button class="btn btn-primary" type="submit">Thay đổi</button>
		<button class="btn btn-success" type="button">Hoàn tác</button>
	</div>
</form>
</div>
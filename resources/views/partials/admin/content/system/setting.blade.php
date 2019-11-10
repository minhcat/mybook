<div class="box box-primary collapse" id="box-setting" aria-expanded="false">
	<div class="box-header with-border">
		<h3 class="box-title">Cài Đặt</h3>

		<div class="box-tools pull-right">
			<button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
			</button>
			<button type="button" class="btn btn-box-tool" data-remove="collapse"><i class="fa fa-times"></i></button>
		</div>
	</div>
	<div class="box-body">
		<input type="hidden" class="token" name="_token" value="{{ csrf_token() }}">
		<label for="name">Sidebar</label>
		<div class="checkbox sidebar">
			<label for="name">
				<input type="checkbox" {{ ($admin_setting->sidebar == 1) ? 'checked' : '' }}>
				Small Sidebar
			</label>
		</div>
		<label for="name">Skin</label>
		<div class="form-group skin">
			<div class="radio">
				<label><input type="radio" name="skin" data-value="blue" {{ ($admin_setting->skin == 'blue') ? 'checked' : '' }}>Skin blue</label>
			</div>
			<div class="radio">
				<label><input type="radio" name="skin" data-value="red" {{ ($admin_setting->skin == 'red') ? 'checked' : '' }}>Skin red</label>
			</div>
			<div class="radio">
				<label><input type="radio" name="skin" data-value="green" {{ ($admin_setting->skin == 'green') ? 'checked' : '' }}>Skin green</label>
			</div>
			<div class="radio">
				<label><input type="radio" name="skin" data-value="purple" {{ ($admin_setting->skin == 'purple') ? 'checked' : '' }}>Skin purple</label>
			</div>
		</div>
		<label for="name">Email</label>
		<div class="form-group email">
			<div class="radio">
				<label><input type="radio" name="email" {{ ($admin_setting->email == 'receive') ? 'checked' : '' }} data-value="receive">Luôn nhận mail</label>
			</div>
			<div class="radio">
				<label><input type="radio" name="email" {{ ($admin_setting->email == 'admin') ? 'checked' : '' }} data-value="admin">Chỉ nhận từ admin</label>
			</div>
			<div class="radio">
				<label><input type="radio" name="email" {{ ($admin_setting->email == 'none') ? 'checked' : '' }} data-value="none">Không nhận tất cả email</label>
			</div>
		</div>
		<label for="name">Thông Báo</label>
		<div class="form-group notification">
			<div class="radio">
				<label><input type="radio" name="mail" {{ ($admin_setting->notification == 'receive') ? 'checked' : '' }} data-value="receive">Luôn nhận thông báo</label>
			</div>
			<div class="radio">
				<label><input type="radio" name="mail" {{ ($admin_setting->notification == 'none') ? 'checked' : '' }} data-value="none">Không nhận thông báo</label>
			</div>
		</div>
	</div>
	<div class="box-footer">
		<button class="btn btn-success">Đồng ý</button>
		<button class="btn btn-default">Hủy</button>
	</div>
</div>
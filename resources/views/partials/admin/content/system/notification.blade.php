<div class="box box-primary collapse" id="box-noti" aria-expanded="false">
	<div class="box-header with-border">
		<h3 class="box-title">Tạo Thông Báo</h3>

		<div class="box-tools pull-right">
			<button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
			</button>
			<button type="button" class="btn btn-box-tool" data-remove="collapse"><i class="fa fa-times"></i></button>
		</div>
	</div>
	<div class="box-body">
		<input type="hidden" class="token" value="{{ csrf_token() }}">
		<div class="form-group">
			<label for="name">Tựa Đề</label>
			<input type="text" class="form-control title">
		</div>
		<div class="form-group">
			<label for="name">Kiểu thông báo</label>
			<select class="form-control type">
				<option value="info">Thông tin</option>
				<option value="warning">Cảnh báo</option>
				<option value="danger">Nguy hiểm</option>
				<option value="success">Đồng ý</option>
			</select>
		</div>
		<div class="form-group receive">
			<label for="name">Người Nhận</label>
			<select class="form-control send">
				@foreach ($list_receive as $receive)
				<option value="{{ $receive->id }}" class="{{ ($receive->group == 'true') ? 'group' : 'user' }}">{{ $receive->name }}</option>
				@endforeach
			</select>
			<input class="group" type="hidden" value="0">
		</div>
		<div class="form-group">
			<label for="name">Nội Dung</label>
			<textarea class="form-control content" name="noti-content" rows="3"></textarea>
		</div>
	</div>
	<div class="box-footer">
		<button class="btn btn-success">Gữi</button>
		<button class="btn btn-default">Hủy</button>
	</div>
</div>
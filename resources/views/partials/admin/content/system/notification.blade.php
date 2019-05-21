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
		<div class="form-group">
			<label for="name">Tựa Đề</label>
			<input type="text" class="form-control">
		</div>
		<div class="form-group">
			<label for="name">Kiểu thông báo</label>
			<select class="form-control">
				<option>Thông tin</option>
				<option>Cảnh báo</option>
				<option>Nguy hiểm</option>
				<option>Đồng ý</option>
			</select>
		</div>
		<div class="form-group">
			<label for="name">Người Nhận</label>
			<select class="form-control">
				<option>Nguyễn Văn C</option>
				<option>Nguyễn Văn D</option>
				<option>Nguyễn Văn E</option>
				<option>Tất cả</option>
				<option>Tất cả (không loại trừ)</option>
			</select>
		</div>
		<div class="form-group">
			<label for="name">Nội Dung</label>
			<textarea class="form-control" name="noti-content" rows="3"></textarea>
		</div>
	</div>
	<div class="box-footer">
		<button class="btn btn-success">Gữi</button>
		<button class="btn btn-default">Hủy</button>
	</div>
</div>
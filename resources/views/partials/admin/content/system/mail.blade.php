<div class="box box-primary collapse" id="box-mail" aria-expanded="false">
	<div class="box-header with-border">
		<h3 class="box-title">Viết Mail</h3>

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
			<label for="name">Người Nhận</label>
			<select class="form-control from">
				<option value="13">Nguyễn Văn A</option>
				<option value="13">Nguyễn Văn B</option>
				<option value="13">Nguyễn Văn C</option>
				<option value="13">Nguyễn Văn D</option>
				<option value="13">Nguyễn Văn E</option>
			</select>
		</div>
		<div class="form-group">
			<label for="name">Nội Dung</label>
			<textarea class="form-control content" name="mail-content" rows="3"></textarea>
		</div>
	</div>
	<div class="box-footer">
		<button class="btn btn-success">Gữi</button>
		<button class="btn btn-default">Hủy</button>
	</div>
</div>
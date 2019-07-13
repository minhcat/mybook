<div class="box box-primary collapse character-new" id="box-new-character" aria-expanded="false">
	<div class="box-header with-border">
		<h3 class="box-title">Thêm nhân vật</h3>

		<div class="box-tools pull-right">
			<button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
			</button>
			<button type="button" class="btn btn-box-tool" data-remove="collapse"><i class="fa fa-times"></i></button>
		</div>
	</div>
	<form id="create-character" action="{{ url('/admin/uploader/create_character') }}" method="POST" enctype="multipart/form-data">
		<div class="box-body">
			<input type="hidden" name="_token" value="{{ csrf_token() }}">
			<div class="avatar">
				<img src="{{ asset('image/admin/character-default.jpg') }}" class="img-circle" width="150px" height="150px"  alt="user image">
				<label class="btn btn-success">
					Thêm hình
					<input id="image" type="file" name="image">
				</label>
				<p class="error hide">Bạn chưa up hình</p>
			</div>
			<div class="box-new">
				<div class="form-group">
					<label for="name">Tên nhân vật</label>
					<input type="text" name="name" class="form-control" placeholder="tên nhân vật">
				</div>
				<div class="form-group">
					<label for="name">Loại nhân vật</label>
					<select class="form-control" name="type">
						<option value="main">Nhân vật chính</option>
						<option value="supporting">Nhân vật phụ</option>
					</select>
				</div>
				<div class="form-group">
					<label for="name">Giới tính</label>
					<select class="form-control" name="gender">
						<option value="0">Nam</option>
						<option value="1">Nữ</option>
					</select>
				</div>
				<div class="form-group">
					<label for="name">Ngày sinh</label>
					<input type="text" name="birthday" id="datepicker-char-new" class="form-control" placeholder="ngày">
				</div>
				<div class="form-group">
					<label for="name">Gia đình</label>
					<input type="text" name="family" class="form-control" placeholder="gia đình">
				</div>
				<div class="form-group">
					<label for="name">Nghề nghiệp</label>
					<input type="text" name="job" class="form-control" placeholder="nghề nghiệp">
				</div>
				<div class="form-group">
					<label for="name">Sở thích</label>
					<input type="text" name="hobby" class="form-control" placeholder="sở thích">
				</div>
				<div class="form-group">
					<label for="name">Giới thiệu</label>
					<textarea id="character-content-new" class="form-control" name="description" rows="3" placeholder="giới thiệu"></textarea>
				</div>
			</div>
		</div>
		<div class="box-footer">
			<button type="submit" class="btn btn-primary">Thêm nhân vật</button>
			<button type="button" class="btn btn-default box-link" data-target="#box-character" data-small="database" data-with="#box-author">Quay lại</button>
		</div>
	</form>
</div>
<div class="box box-primary collapse author-new" id="box-new-author" aria-expanded="false">

	<div class="box-header with-border">
		<h3 class="box-title">Thêm tác giả</h3>

		<div class="box-tools pull-right">
			<button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
			</button>
			<button type="button" class="btn btn-box-tool" data-remove="collapse"><i class="fa fa-times"></i></button>
		</div>
	</div>
	<form id="create-chap" action="{{ url('/admin/uploader/create_author') }}" method="POST" enctype="multipart/form-data">
		<div class="box-body">
			<input type="hidden" name="_token" value="{{ csrf_token() }}">
			<div class="avatar">
				<img src="{{ asset('image/admin/user-default.jpg') }}" class="img-circle" width="150px" height="150px"  alt="user image">
				<label class="btn btn-success">
					Thêm hình
					<input id="image" type="file" name="image">
				</label>
				<p class="error hide">Bạn chưa up hình</p>
			</div>
			<div class="box-new">
				<div class="form-group">
					<label for="name">Tên tác giả</label>
					<input type="text" class="form-control" id="name" placeholder="nhập tên tác giả">
				</div>
				<div class="form-group">
					<label for="name">Giới tính</label>
					<select class="form-control" name="gender">
						<option value="0">Nam</option>
						<option value="1">Nữ</option>
					</select>
				</div>
				<div class="form-group">
					<label for="name">Loại tác giả</label>
					<select class="form-control" name="type">
						<option value="author">Viết truyện</option>
						<option value="artist">Họa sĩ</option>
					</select>
				</div>
				<div class="form-group">
					<label for="name">Facebook</label>
					<input type="text" class="form-control" id="name" placeholder="nhập facebook">
				</div>
				<div class="form-group">
					<label for="name">Twitter</label>
					<input type="text" class="form-control" id="name" placeholder="nhập twitter">
				</div>
				<div class="form-group">
					<label for="name">Website</label>
					<input type="text" class="form-control" id="name" placeholder="nhập website">
				</div>
				<div class="form-group">
					<label for="name">Giới thiệu</label>
					<textarea id="author-content" class="form-control" name="author-content-new" rows="2" placeholder="giới thiệu"></textarea>
				</div>
			</div>
		</div>
		<div class="box-footer">
			<button type="submit" class="btn btn-primary">Thêm tác giả</button>
			<button type="button" class="btn btn-default box-link" data-target="#box-author-detail-1" data-with="#box-author-list-small">Quay lại</button>
		</div>
	</form>
</div>
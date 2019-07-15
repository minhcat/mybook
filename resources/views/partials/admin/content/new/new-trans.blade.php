<div class="box box-primary collapse trans-new" id="box-new-trans" aria-expanded="false">
	<div class="box-header with-border">
		<h3 class="box-title">Thêm nhóm dịch</h3>

		<div class="box-tools pull-right">
			<button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
			</button>
			<button type="button" class="btn btn-box-tool" data-remove="collapse"><i class="fa fa-times"></i></button>
		</div>
	</div>
	<form id="create-trans" action="{{ url('/admin/uploader/create_trans') }}" method="POST" enctype="multipart/form-data">
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
					<label for="name">Tên nhóm dịch</label>
					<input type="text" name="name" class="form-control" id="name" placeholder="tên nhóm dịch">
				</div>
				<div class="form-group">
					<label for="name">Trưởng nhóm</label>
					<input type="text" name="leader" class="form-control" id="name" placeholder="tên trưởng nhóm">
				</div>
				<div class="form-group">
					<label for="name">Thành viên</label>
					<input type="text" name="member" class="form-control" id="name" placeholder="tên thành viên">
				</div>
				<div class="form-group">
					<label for="name">Mô tả</label>
					<textarea id="trans-content-new" name="description" class="form-control" rows="3" placeholder="mô tả"></textarea>
				</div>
			</div>
		</div>
		<div class="box-footer">
			<button type="submit" class="btn btn-primary">Thêm nhóm dịch</button>
			<button type="button" class="btn btn-default box-link" data-target="#box-trans">Quay lại</button>
		</div>
	</form>
</div>
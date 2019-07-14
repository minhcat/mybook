@foreach ($characters as $character)
<div class="box box-primary collapse character-edit" id="box-edit-character-{{ $character->id }}" aria-expanded="false">
	<div class="box-header with-border">
		<h3 class="box-title">Chỉnh sửa nhân vật</h3>

		<div class="box-tools pull-right">
			<button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
			</button>
			<button type="button" class="btn btn-box-tool" data-remove="collapse"><i class="fa fa-times"></i></button>
		</div>
	</div>
	<form id="create-character" action="{{ url('/admin/uploader/update_character/'.$character->id) }}" method="POST" enctype="multipart/form-data">
		<div class="box-body">
			<input type="hidden" name="_token" value="{{ csrf_token() }}">
			<div class="avatar">
				@if ($character->image == '')
				<img src="{{ asset('image/admin/character-default.jpg') }}" class="img-circle" width="150px" height="150px"  alt="user image">
				@else
				<img src="{{ asset('image/characters/'.$character->image.'.jpg') }}" class="img-circle" width="150px" height="150px"  alt="user image">
				@endif
				<label class="btn btn-success">
					Thêm hình
					<input id="image" type="file" name="image">
				</label>
				<p class="error hide">Bạn chưa up hình</p>
			</div>
			<div class="box-edit">
				<div class="form-group">
					<label for="name">Tên nhân vật</label>
					<input type="text" class="form-control" name="name" id="name" value="{{ $character->name }}">
				</div>
				<div class="form-group">
					<label for="name">Loại nhân vật</label>
					<select class="form-control" name="type">
						@if ($character->type == 'main')
						<option value="main" selected>Nhân vật chính</option>
						<option value="supporting">Nhân vật phụ</option>
						@else
						<option value="main">Nhân vật chính</option>
						<option value="supporting" selected>Nhân vật phụ</option>
						@endif
					</select>
				</div>
				<div class="form-group">
					<label for="name">Giới tính</label>
					<select class="form-control" name="gender">
						@if ($character->gender == 0)
						<option value="0" selected>Nam</option>
						<option value="1">Nữ</option>
						@else
						<option value="0">Nam</option>
						<option value="1" selected>Nữ</option>
						@endif
					</select>
				</div>
				<div class="form-group">
					<label for="name">Ngày sinh</label>
					<input type="text" name="birthday" class="form-control datepicker-char-edit" value="{{ $character->birth }}">
				</div>
				<div class="form-group">
					<label for="name">Gia đình</label>
					<input type="text" name="family" class="form-control" id="name" placeholder="tên thành viên" value="{{ $character->family }}">
				</div>
				<div class="form-group">
					<label for="name">Nghề nghiệp</label>
					<input type="text" name="job" class="form-control" id="name" placeholder="tên thành viên" value="{{ $character->job }}">
				</div>
				<div class="form-group">
					<label for="name">Sở thích</label>
					<input type="text" name="hobby" class="form-control" id="name" placeholder="tên thành viên" value="{{ $character->hobby }}">
				</div>
				<div class="form-group">
					<label for="name">Mô tả</label>
					<textarea class="form-control character-content-edit" id="character-content-edit-{{ $character->id }}" name="description" rows="3" placeholder="mô tả">{{ $character->description }}</textarea>
				</div>
			</div>
		</div>
		<div class="box-footer">
			<button type="submit" class="btn btn-success">Thay đổi</button>
			<button type="button" class="btn btn-default box-link" data-target="#box-character" data-small="database">Quay lại</button>
		</div>
	</form>
</div>
@endforeach
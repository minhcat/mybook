@foreach ($transes as $trans)
<div class="box box-primary collapse trans-edit" id="box-edit-trans-{{ $trans->id }}" aria-expanded="false">
	<div class="box-header with-border">
		<h3 class="box-title">Chỉnh sửa nhóm dịch</h3>

		<div class="box-tools pull-right">
			<button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
			</button>
			<button type="button" class="btn btn-box-tool" data-remove="collapse"><i class="fa fa-times"></i></button>
		</div>
	</div>
	<form id="create-trans" action="{{ url('/admin/uploader/update_trans/'.$trans->id) }}" method="POST" enctype="multipart/form-data">
		<div class="box-body">
			<input type="hidden" name="_token" value="{{ csrf_token() }}">
			<div class="avatar">
				@if ($trans->image == '')
				<img src="{{ asset('image/admin/group-default.jpg') }}" class="img-circle" width="150px" height="150px"  alt="user image">
				@else
				<img src="{{ asset('image/trans/'.$trans->image.'.jpg') }}" class="img-circle" width="150px" height="150px"  alt="user image">
				@endif
				<label class="btn btn-success">
					Thêm hình
					<input id="image" type="file" name="image">
				</label>
				<p class="error hide">Bạn chưa up hình</p>
			</div>
			<div class="box-edit">
				<div class="form-group">
					<label for="name">Tên nhóm dịch</label>
					<input type="text" name="name" class="form-control" id="name" placeholder="tên nhóm dịch" value="{{ $trans->name }}">
				</div>
				<div class="form-group">
					<label for="name">Trưởng nhóm</label>
					<input type="text" name="leader" class="form-control" id="name" placeholder="tên trưởng nhóm" value="{{ $trans->leader }}">
				</div>
				<div class="form-group">
					<label for="name">Thành viên</label>
					<input type="text" name="member" class="form-control" id="name" placeholder="tên thành viên" value="{{ $trans->member }}">
				</div>
				<div class="form-group">
					<label for="name">Facebook</label>
					<input type="text" name="facebook" class="form-control" id="name" placeholder="link facebook" value="{{ $trans->facebook }}">
				</div>
				<div class="form-group">
					<label for="name">Website</label>
					<input type="text" name="website" class="form-control" id="name" placeholder="link website" value="{{ $trans->website }}">
				</div>
				<div class="form-group">
					<label for="name">Mô tả</label>
					<textarea class="form-control trans-content-edit" id="trans-content-edit-{{ $trans->id }}" name="description" rows="3" placeholder="mô tả">{{ $trans->description }}</textarea>
				</div>
			</div>
		</div>
		<div class="box-footer">
			<button type="submit" class="btn btn-primary">Thêm thể loại</button>
			<button type="button" class="btn btn-default box-link" data-target="#box-trans">Quay lại</button>
		</div>
	</form>
</div>
@endforeach
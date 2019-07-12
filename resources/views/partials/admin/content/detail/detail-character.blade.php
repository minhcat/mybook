@foreach ($characters as $key => $character)
<div class="box box-primary collapse" id="box-character-detail-{{ $character->id }}" aria-expanded="false"  data-with="#box-book-list-small">
	<div class="box-header with-border">
		<h3 class="box-title">{{ $character->name }}</h3>

		<div class="box-tools pull-right">
			<button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
			</button>
			<button type="button" class="btn btn-box-tool" data-remove="collapse"><i class="fa fa-times"></i></button>
		</div>
	</div>
	<div class="box-body">
		@if ($character->image == '')
		<img src="{{ asset('image/admin/user-default.jpg') }}" class="img-circle" width="150px" height="150px"  alt="user image">
		@else
		<img src="{{ asset('image/characters/'.$character->image.'.jpg') }}" class="img-circle" width="150px" height="150px"  alt="user image">
		@endif
		<div class="box-info">
			<p><strong>Tên khác:</strong> {{ $character->other_name }}</p>
			<p><strong>Giới tính:</strong>
				@if ($character->gender == 0)
				Nam
				@else
				Nữ
				@endif
			</p>
			<p><strong>Ngày sinh:</strong> 
				@if ($character->birth == null)
				Đang cập nhật
				@else
				{{ date_format(date_create($character->birth), 'd-m-Y') }}
				@endif
			</p>
			<p><strong>Loại nhân vật:</strong>
				@if ($character->type == 'main')
				nhân vật chính
				@elseif ($character->type == 'supporting')
				nhân vật phụ
				@endif
			</p>
			<p><strong>Gia đình:</strong> {{ $character->family }}</p>
			<p><strong>Nghề nghiệp:</strong> {{ $character->job }}</p>
			<p><strong>Sở thích:</strong> {{ $character->hobby }}</p>
			<p><strong>Giới thiệu:</strong> {!! $character->description !!}</p>
		</div>
	</div>
	<div class="box-footer">
		<button class="btn btn-primary box-link" data-target="#box-new-character" data-unclose="#box-author-list-small">Thêm nhân vật</button>
		<button class="btn btn-success box-link" data-target="#box-edit-author-{{ $character->id }}" data-unclose="#box-author-list-small">Chỉnh sửa</button>
		<button class="btn btn-danger" data-toggle="modal" data-target="#modal-remove-author-{{ $character->id }}">Xóa</button>
	</div>
</div>
@endforeach
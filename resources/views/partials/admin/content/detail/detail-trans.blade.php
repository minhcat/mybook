@foreach ($transes as $key => $trans)
<div class="box box-primary collapse" id="box-trans-detail-{{ $trans->id }}" aria-expanded="false"  data-with="#box-book-list-small">
	<div class="box-header with-border">
		<h3 class="box-title">{{ $trans->name }}</h3>

		<div class="box-tools pull-right">
			<button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
			</button>
			<button type="button" class="btn btn-box-tool" data-remove="collapse"><i class="fa fa-times"></i></button>
		</div>
	</div>
	<div class="box-body">
		@if ($trans->image == '')
		<img src="{{ asset('image/admin/user-default.jpg') }}" class="img-circle" width="150px" height="150px"  alt="user image">
		@else
		<img src="{{ asset('image/trans/'.$trans->image.'.jpg') }}" class="img-circle" width="150px" height="150px"  alt="user image">
		@endif
		<div class="box-info">
			<p><strong>Đánh giá:</strong> {{ $trans->rate_point }}, <strong>lượt đánh giá:</strong> {{ $trans->rate }} </p>
			<p><strong>Yêu thích:</strong> {{ $trans->like }}, <strong>bình luận:</strong> {{ $trans->comment }}, <strong>theo dõi:</strong> {{ $trans->follow }}</p>
			<p><strong>Trưởng nhóm:</strong> 
				@if ($trans->leader == '')
					<i>Đang cập nhật</i>
				@else
					{{ $trans->leader }}
				@endif
			</p>
			<p><strong>Thành viên:</strong> 
				@if ($trans->member == '')
					<i>Đang cập nhật</i>
				@else
					{{ $trans->member }}
				@endif
			</p>
			<p><strong>Số truyện dịch:</strong>	{{ $trans->books }}</p>
			<p><strong>Facebook:</strong> 
				@if ($trans->facebook == '')
					<i>Đang cập nhật</i>
				@else
					{{ $trans->facebook }}
				@endif
			</p>
			<p><strong>Website:</strong>
				@if ($trans->website == '')
					<i>Đang cập nhật</i>
				@else
					{{ $trans->website }}
				@endif
			</p>
			<p><strong>Giới thiệu:</strong> {!! $trans->description !!}</p>
		</div>
	</div>
	<div class="box-footer">
		<button class="btn btn-primary box-link" data-target="#box-new-character" data-unclose="#box-character-list-small">Thêm nhân vật</button>
		<button class="btn btn-success box-link" data-target="#box-edit-character-{{ $trans->id }}" data-unclose="#box-character-list-small">Chỉnh sửa</button>
		<button class="btn btn-danger" data-toggle="modal" data-target="#modal-remove-character-{{ $trans->id }}">Xóa</button>
	</div>
</div>
@endforeach
<div class="box box-primary collapse" id="box-user-detail-{{ $user->id }}" aria-expanded="false"  data-with="#box-book-list-small">
	<div class="box-header with-border">
		<h3 class="box-title">{{ $user->name }}</h3>

		<div class="box-tools pull-right">
			<button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
			</button>
			<button type="button" class="btn btn-box-tool" data-remove="collapse"><i class="fa fa-times"></i></button>
		</div>
	</div>
	<div class="box-body">
		@if ($user->image == '')
		<img src="{{ asset('image/admin/user-default.jpg') }}" class="img-circle" width="150px" height="150px"  alt="user image">
		@else
		<img src="{{ asset('image/users/'.$user->image.'.jpg') }}" class="img-circle" width="150px" height="150px"  alt="user image">
		@endif
		<div class="box-info">
			
			<p><strong>Đánh giá:</strong> {{ $user->rate_point }}, <strong>lượt đánh giá:</strong> {{ $user->rate }}</p>
			<p><strong>Yêu thích:</strong> {{ $user->like }}, <strong>bình luận:</strong> {{ $user->comment }}, <strong>theo dõi:</strong> {{ $user->follow }}</p>
			<p><strong>Ngày sinh:</strong> 
				@if ($user->birth == null)
				Đang cập nhật
				@else
				{{ date_format(date_create($user->birth), 'd-m-Y') }}
				@endif
			</p>
			<p><strong>Giới tính:</strong>
				@if ($user->gender == 0)
				Nam
				@else
				Nữ
				@endif
			</p>
			<p><strong>Thể loại yêu thích:</strong> 
				@foreach ($user->categories as $i => $category)
					@if ($i < count($user->categories) - 1)
					{{ $category }},
					@else
					{{ $category }}
					@endif
				@endforeach
			</p>
			<p><strong>Twitter:</strong> {{ $user->twitter }}</p>
			<p><strong>Facebook:</strong> {{ $user->facebook }}</p>
			<p><strong>Câu slogan:</strong> {{ $user->slogan }}</p>
		</div>
	</div>
	<div class="box-footer">
		<button class="btn btn-success box-link" data-target="#box-edit-author-{{ $user->id }}" data-unclose="#box-author-list-small">Chỉnh sửa</button>
	</div>
</div>
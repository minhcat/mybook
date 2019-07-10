@foreach ($authors_detail as $key => $author)
<div class="box box-primary collapse" id="box-author-detail-{{ $author->id }}" aria-expanded="false"  data-with="#box-book-list-small">
	<div class="box-header with-border">
		<h3 class="box-title">{{ $author->name }}</h3>

		<div class="box-tools pull-right">
			<button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
			</button>
			<button type="button" class="btn btn-box-tool" data-remove="collapse"><i class="fa fa-times"></i></button>
		</div>
	</div>
	<div class="box-body">
		<img src="{{ asset('image/authors/'.$author->image.'.jpg') }}" class="img-circle" width="150px"  alt="user image">
		<div class="box-info">
			
			<p><strong>Đánh giá:</strong> {{ $author->rate_point }}, lượt đánh giá: {{ $author->rate }}</p>
			<p><strong>Yêu thích:</strong> {{ $author->like }}, bình luận: {{ $author->comment }}, theo dõi: {{ $author->follow }}</p>
			<p><strong>Nơi sinh:</strong> {{ $author->birthplace }}</p>
			<p><strong>Ngày sinh:</strong> 
				@if ($author->birth == null)
				Đang cập nhật
				@else
				{{ date_format(date_create($author->birth), 'd-m-Y') }}
				@endif
			</p>
			<p><strong>Giới tính:</strong>
				@if ($author->gender == 0)
				Nam
				@else
				Nữ
				@endif
			</p>
			<p><strong>Thể loại:</strong> 
				@foreach ($author->categories as $i => $category)
					@if ($i < count($author->categories) - 1)
					{{ $category }},
					@else
					{{ $category }}
					@endif
				@endforeach
			</p>
			<p><strong>Loại tác giả:</strong>
				@if ($author->type == 'author')
				viết truyện
				@elseif ($author->type == 'artist')
				họa sĩ
				@endif
			</p>
			<p><strong>Twitter:</strong> {{ $author->twitter }}</p>
			<p><strong>Website:</strong> {{ $author->website }}</p>
			<p><strong>Facebook:</strong> {{ $author->facebook }}</p>
			<p><strong>Giới thiệu:</strong> {!! $author->description !!}</p>
		</div>
	</div>
	<div class="box-footer">
		<button class="btn btn-primary box-link" data-target="#box-chap-list-{{ $author->id }}" data-unclose="#box-book-list-small">Thêm tác giả</button>
		<button class="btn btn-success box-link" data-target="#box-book-edit-{{ $author->id }}" data-unclose="#box-book-list-small">Chỉnh sửa</button>
		<button class="btn btn-danger" data-toggle="modal" data-target="#modal-remove-book">Xóa</button>
	</div>
</div>
@endforeach
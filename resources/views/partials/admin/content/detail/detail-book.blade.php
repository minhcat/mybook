@foreach ($books_upload as $key => $book)
<div class="box box-primary collapse" id="box-book-detail-{{ $key }}" aria-expanded="false"  data-with="#box-book-list-small">
	<div class="box-header with-border">
		<h3 class="box-title">{{ $book->name }}</h3>

		<div class="box-tools pull-right">
			<button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
			</button>
			<button type="button" class="btn btn-box-tool" data-remove="collapse"><i class="fa fa-times"></i></button>
		</div>
	</div>
	<div class="box-body">
		<img src="{{ asset('image/books/'.$book->image.'.jpg') }}" class="img-circle" width="150px"  alt="user image">
		<div class="box-info">
			<p><strong>Tên khác:</strong> {{ $book->other_name }}</p>
			<p><strong>Đánh giá:</strong> {{ $book->rate_point }}, lượt đánh giá: {{ $book->rate }}</p>
			<p><strong>Yêu thích:</strong> {{ $book->like }}, bình luận: {{ $book->comment }}, theo dõi: {{ $book->follow }}</p>
			<p><strong>Thể loại:</strong> 
				@foreach ($book->categories as $category)
					{{ $category }}
				@endforeach
			</p>
			<p><strong>Tác giả:</strong> {{ $book->author }}</p>
			<p><strong>Minh họa:</strong> {{ $book->artist }}</p>
			<p><strong>Nhóm dịch:</strong> 
				@foreach ($book->transes as $trans)
					{{ $trans }}
				@endforeach
			</p>
			<p><strong>Ngày xuất bản:</strong>{{ date_format(date_create($book->release_at), 'd/m/Y') }}</p>
			<p><strong>Ngày đăng:</strong> {{ date_format(date_create($book->create_at), 'd/m/Y') }}</p>
			<p><strong>Tình trạng:</strong> {{ ($book->status == 1) ? 'Đang tiến hành' : 'Đã hoàn thành' }}</p>
			<p><strong>Nhân vật:</strong> 
				@foreach ($book->characters as $character)
					{{ $character->name }}
				@endforeach
			</p>
			<p><strong>Nội dung:</strong> {{ $book->description }}</p>
			<p><strong>Từ khóa:</strong> {{ $book->keyword }}</p>
		</div>
	</div>
	<div class="box-footer">
		<button class="btn btn-primary box-link" data-target="#box-chap-list-{{ $key }}" data-unclose="#box-book-list-small">Danh sách chap</button>
		<button class="btn bg-purple box-link" data-target="#box-chap-new" data-unclose="#box-book-list-small">Thêm chap mới</button>
		<button class="btn btn-info" data-toggle="modal" data-target="#modal-keyword-new">Thêm từ khóa</button>
		<button class="btn btn-success box-link" data-target="#box-book-edit-{{ $key }}" data-unclose="#box-book-list-small">Chỉnh sửa</button>
		<button class="btn btn-danger" data-toggle="modal" data-target="#modal-remove-book">Xóa</button>
	</div>
</div>
@endforeach
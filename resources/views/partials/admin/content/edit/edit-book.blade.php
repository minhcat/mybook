@foreach ($books_upload as $key => $book)
<div class="box box-primary collapse book-edit" id="box-book-edit-{{ $key }}" aria-expanded="false"  data-with="#box-book-list-small">
	<form id="update-book" action="{{ url('/admin/uploader/update_book/'.$book->id) }}" method="POST" enctype="multipart/form-data">
	<div class="box-header with-border">
		<h3 class="box-title">{{ $book->name }} - Chỉnh Sửa</h3>

		<div class="box-tools pull-right">
			<button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
			</button>
			<button type="button" class="btn btn-box-tool" data-remove="collapse"><i class="fa fa-times"></i></button>
		</div>
	</div>
	<div class="box-body">
		<input type="hidden" name="_token" value="{{ csrf_token() }}">
		<div class="avatar">
			<img src="{{ asset('image/books/'.$book->image.'.jpg') }}" class="img-circle" width="150px" height="150px" alt="user image">
			<label class="btn btn-success">
				Thêm hình
				<input id="image" type="file" name="image">
			</label>
		</div>
		<div class="box-edit">
			<div class="form-group">
				<label>Tên khác</label>
				<input class="form-control" type="text" name="other_name" value="{{ $book->other_name }}">
			</div>
			<div class="form-group category">
				<label>Thể loại</label><br>
				@foreach ($categories as $category)
					<?php $check_cate = true; ?>
					@foreach ($book->categories as $book_category)
						@if ($book_category == $category->name)
							<?php $check_cate = false; ?>
							<span class="label label-danger {{ $category->slug }}" data-id="{{ $category->id }}">{{ $category->name }}</span>
							<?php break;?>
						@endif
					@endforeach
					@if ($check_cate == true)
						<span class="label label-primary {{ $category->slug }}" data-id="{{ $category->id }}">{{ $category->name }}</span>
					@endif
				@endforeach
				<input type="hidden" name="category" value="[]">
			</div>
			<div class="form-group">
				<label>Tác giả</label>
				<select class="form-control" name="author">
					@foreach ($authors as $author)
						<option value="{{ $author->id }}">{{ $author->name }}</option>
					@endforeach
				</select>
			</div>
			<div class="form-group">
				<label>Minh họa</label>
				<select class="form-control" name="artist">
					@foreach ($artists as $artist)
						<option value="{{ $artist->id }}">{{ $artist->name }}</option>
					@endforeach
				</select>
			</div>
			<div class="form-group character">
				<label>Nhân vật</label>
				<div class="list-character {{ (empty($book->characters)) ? 'hide' : '' }}">
					@foreach ($book->characters as $character)
						<span class="character" data-id="{{ $character->id }}">{{ $character->name }} <i class="fa fa-times"></i></span> 
					@endforeach
				</div>
				<select class="form-control" name="select_character">
					<option disabled selected value> -- thêm nhân vật -- </option>
					@foreach ($characters as $character)
						<option value="{{ $character->id }}">{{ $character->name }}</option>
					@endforeach
				</select>
				<input class="form-control" type="hidden" name="character" value="[@foreach($book->characters as $key => $character) @if ($key < count($book->characters) - 1){{ $character->id }},@else {{ $character->id }} @endif @endforeach]" placeholder="thêm nhân vật">
			</div>
			<div class="form-group">
				<label>Ngày xuất bản</label>
				<input type="text" name="release_at" class="form-control" id="datepicker-book-edit" value="{{ date_format(date_create($book->create_at), 'd/m/Y') }}">
			</div>
			<div class="form-group description">
				<label>Nội dung</label>
				<!-- <br> -->
				<textarea class="form-control" name="book-content-edit" rows="4">{{ htmlspecialchars($book->description) }}</textarea>
			</div>
			<div class="form-group status">
				<label>Tình trạng</label>
				<br>
				@if ($book->status == 0)
				<button class="btn btn-danger">Đã hoàn thành</button>
				<input type="hidden" name="status" value="0">
				@else
				<button class="btn btn-success">Đang tiến hành</button>
				<input type="hidden" name="status" value="1">
				@endif
			</div>
		</div>
	</div>
	<div class="box-footer">
		<button class="btn btn-primary box-link" data-target="#box-book-detail-{{ $key }}" data-unclose="#box-book-list-small">Thay đổi</button>
		<button class="btn box-link" data-target="#box-book-detail-{{ $key }}" data-unclose="#box-book-list-small">Hủy</button>
	</div>
</form>
</div>
@endforeach
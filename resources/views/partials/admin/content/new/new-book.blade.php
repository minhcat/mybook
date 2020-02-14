<div class="box box-primary collapse book-new" id="box-book-new" aria-expanded="false"  data-with="#box-book-list-small">
	<form id="create-book" action="{{ url('/admin/uploader/create_book') }}" method="POST" enctype="multipart/form-data">
		<div class="box-header with-border">
			<h3 class="box-title">Thêm truyện</h3>

			<div class="box-tools pull-right">
				<button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
				</button>
				<button type="button" class="btn btn-box-tool" data-remove="collapse"><i class="fa fa-times"></i></button>
			</div>
		</div>
		<div class="box-body">
			<input type="hidden" name="_token" value="{{ csrf_token() }}">
			<div class="avatar">
				<img src="{{ asset('image/admin/book-default.png') }}" class="img-circle" width="150px" height="150px"  alt="user image">
				<label class="btn btn-success">
					Thêm hình
					<input class="image" type="file" name="image">
				</label>
				<p class="error hide">Bạn chưa up hình</p>
			</div>
			<div class="box-edit">
				<div class="form-group name">
					<label>Tên truyện (*)</label>
					<input class="form-control" type="text" name="name">
					<p class="error hide">Bạn chưa nhập tên truyện</p>
				</div>
				<div class="form-group other_name">
					<label>Tên khác</label>
					<input class="form-control" type="text" name="other_name">
				</div>
				<div class="form-group category">
					<label>Thể loại (*)</label><br>
					@foreach ($categories as $category)
					<span class="label label-primary {{ $category->slug }}" data-id="{{ $category->id }}">{{ $category->name }}</span>
					@endforeach
					<input type="hidden" name="category" value="[]">
					<p class="error hide">Bạn chưa chọn thể loại</p>
				</div>
				<div class="form-group author">
					<label>Tác giả</label>
					<select class="form-control" name="author">
						<option disabled selected value> -- thêm tác giả -- </option>
						@foreach ($authors as $author)
							<option value="{{ $author->id }}">{{ $author->name }}</option>
						@endforeach
					</select>
				</div>
				<div class="form-group">
					<label>Minh họa</label>
					<select class="form-control" name="artist">
						<option disabled selected value> -- thêm người minh họa -- </option>
						@foreach ($artists as $artist)
							<option value="{{ $artist->id }}">{{ $artist->name }}</option>
						@endforeach
					</select>
				</div>
				<div class="form-group character">
					<label>Nhân vật</label>
					<div class="list-character hide">
					</div>
					<select class="form-control" name="select_character">
						<option disabled selected value> -- thêm nhân vật -- </option>
						@foreach ($characters as $character)
							<option value="{{ $character->id }}">{{ $character->name }}</option>
						@endforeach
					</select>
					<input type="hidden" name="character" value="[]">
				</div>
				<div class="form-group">
					<label>Ngày xuất bản</label>
					<input type="text" class="form-control" id="datepicker-book-new" name="release_at">
				</div>
				<div class="form-group description">
					<label>Nội dung</label>
					<!-- <br> -->
					<textarea id="book-content" name="description" class="book-content" rows="4"></textarea>
				</div>
				<div class="form-group">
					<label>Từ khóa</label>
					<input type="text" class="form-control" name="keyword">
				</div>
				<div class="form-group status">
					<label>Tình trạng</label>
					<br>
					<button type="button" class="btn btn-success">Đang tiến hành</button>
					<input type="hidden" name="status" value="1">
				</div>
			</div>
		</div>
		<div class="box-footer">
			<button type="button" class="btn btn-primary">Thêm</button>
			<button type="reset" class="btn">Hủy</button>
		</div>
	</form>
</div>
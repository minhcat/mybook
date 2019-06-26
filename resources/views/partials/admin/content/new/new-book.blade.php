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
					<input id="image" type="file" name="image">
				</label>
			</div>
			<div class="box-edit">
				<div class="form-group">
					<label>Tên truyện</label>
					<input class="form-control" type="text" name="name">
				</div>
				<a href="../../image/A-kun.jpg" download="A-kun.jpg">link</a>
				<div class="form-group">
					<label>Tên khác</label>
					<input class="form-control" type="text" name="other_name">
				</div>
				<div class="form-group category">
					<label>Thể loại</label><br>
					@foreach ($categories as $category)
					<span class="label label-primary {{ $category->slug }}" data-id="{{ $category->id }}">{{ $category->name }}</span>
					@endforeach
					<input type="hidden" name="category" value="[]">
				</div>
				<div class="form-group">
					<label>Tác giả</label>
					<select class="form-control" name="characters">
						@foreach ($authors as $author)
							<option value="{{ $author->id }}">{{ $author->name }}</option>
						@endforeach
					</select>
				</div>
				<div class="form-group">
					<label>Minh họa</label>
					<select class="form-control" name="characters">
						@foreach ($artists as $artist)
							<option value="{{ $artist->id }}">{{ $artist->name }}</option>
						@endforeach
					</select>
				</div>
				<div class="form-group">
					<label>Ngày xuất bản</label>
					<input type="text" class="form-control" id="datepicker-book-new" name="release_at">
				</div>
				<div class="form-group character">
					<label>Nhân vật</label>
					<div class="list-character hide">
					</div>
					<select class="form-control" name="characters">
						<option disabled selected value> -- thêm nhân vật -- </option>
						@foreach ($characters_no_book as $character)
							<option value="{{ $character->id }}">{{ $character->name }}</option>
						@endforeach
					</select>
				</div>
				<div class="form-group">
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
			<button type="submit" class="btn btn-primary">Thêm</button>
			<button type="reset" class="btn">Hủy</button>
		</div>
	</form>
</div>
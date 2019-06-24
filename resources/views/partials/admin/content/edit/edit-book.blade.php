@foreach ($books_upload as $key => $book)
<div class="box box-primary collapse book-edit" id="box-book-edit-{{ $key }}" aria-expanded="false"  data-with="#box-book-list-small">
	<div class="box-header with-border">
		<h3 class="box-title">{{ $book->name }} - Chỉnh Sửa</h3>

		<div class="box-tools pull-right">
			<button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
			</button>
			<button type="button" class="btn btn-box-tool" data-remove="collapse"><i class="fa fa-times"></i></button>
		</div>
	</div>
	<div class="box-body">
		<div class="avatar">
			<img src="{{ asset('image/books/'.$book->image.'.jpg') }}" class="img-circle" width="150px"  alt="user image">
			<button class="btn btn-success">Thay đổi hình</button>
		</div>
		<div class="box-edit">
			<div class="form-group">
				<label>Tên khác</label>
				<input class="form-control" type="text" name="" value="{{ $book->other_name }}">
			</div>
			<div class="form-group category">
				<label>Thể loại</label><br>
				<span class="label label-danger  action">action</span>
				<span class="label label-primary adult">adult</span>
				<span class="label label-primary advanture">advanture</span>
				<span class="label label-primary anime">anime</span>
				<span class="label label-primary bender">bender</span>
				<span class="label label-danger  comedy">comedy</span>
				<span class="label label-primary comic">comic</span>
				<span class="label label-primary cooking">cooking</span>
				<span class="label label-primary cosplay">cosplay</span>
				<span class="label label-primary demons">demons</span>
				<span class="label label-primary doujinshi">doujinshi</span>
				<span class="label label-primary ecchi">ecchi</span>
				<span class="label label-primary fanmade">fanmade</span>
				<span class="label label-danger  fantasy">fantasy</span>
				<span class="label label-danger  funny">funny</span>
				<span class="label label-primary harem">harem</span>
				<span class="label label-primary history">history</span>
				<span class="label label-primary magic">magic</span>
				<span class="label label-primary mystery">mystery</span>
				<span class="label label-primary romance">romance</span>
				<span class="label label-primary school">school life</span>
				<span class="label label-primary zombie">zombie</span>
			</div>
			<div class="form-group">
				<label>Tác giả</label>
				<input class="form-control" type="text" name="" value="{{ $book->author }}">
			</div>
			<div class="form-group">
				<label>Minh họa</label>
				<input class="form-control" type="text" name="" value="{{ $book->artist }}">
			</div>
			<div class="form-group">
				<label>Ngày xuất bản</label>
				<input type="text" class="form-control pull-right" id="datepicker-book-edit" value="{{ date_format(date_create($book->create_at), 'd/m/Y') }}">
			</div>
			<div class="form-group">
				<label>Nhân vật</label>
				<p>
					@foreach ($book->characters as $character)
						{{ $character }}, 
					@endforeach
				</p>
				<input class="form-control" type="text" name="" placeholder="thêm nhân vật">
			</div>
			<div class="form-group">
				<label>Nội dung</label>
				<!-- <br> -->
				<textarea class="form-control" name="book-content-edit">{{ $book->description }}</textarea>
			</div>
			<div class="form-group status">
				<label>Tình trạng</label>
				<br>
				@if ($book->status == 0)
				<button class="btn btn-danger">Đã hoàn thành</button>
				@else
				<button class="btn btn-success">Đang tiến hành</button>
				@endif
			</div>
		</div>
	</div>
	<div class="box-footer">
		<button class="btn btn-primary box-link" data-target="#box-book-detail-{{ $key }}" data-unclose="#box-book-list-small">Thay đổi</button>
		<button class="btn box-link" data-target="#box-book-detail-{{ $key }}" data-unclose="#box-book-list-small">Hủy</button>
	</div>
</div>
@endforeach
<div class="box box-primary collapse in" id="box-book-list" aria-expanded="true">
	<div class="box-header with-border">
		<h3 class="box-title">Danh sách truyện đã đăng</h3>

		<div class="box-tools pull-right">
			<button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
			</button>
			<button type="button" class="btn btn-box-tool" data-remove="collapse"><i class="fa fa-times"></i></button>
		</div>
	</div>
	<!-- /.box-header -->
	<div class="box-body table-responsive">
		<table class="table table-bordered table-hover table-striped" id="table-book-upload">
			<thead>
				<tr>
					<th>Stt</th>
					<th>Tên truyện</th>
					<th>Ngày đăng</th>
					<th>Thể loại</th>
					<th>Giới thiệu</th>
					<th>Từ khóa</th>
					<th class="fixed-115">Tùy chọn</th>
				</tr>
			</thead>
			<tbody>
				@foreach ($books_upload as $key => $book)
				<tr>
					<td>{{ $key+1 }}</td>
					<td>{{ $book->name }}</td>
					<td>{{ date_format(date_create($book->create_at),'d-m-Y') }}</td>
					<td>
						@foreach ($book->categories as $category)
							<span class="label label-primary">{{ $category }}</span>
						@endforeach
					</td>
					<td>{{ $book->description }}</td>
					<td>{{ $book->keyword }}</td>
					<td>
						<button class="btn btn-success box-link" data-target="#box-book-edit" data-with="#box-book-list-small">Sửa</button>
						<button class="btn btn-danger" data-toggle="modal" data-target="#modal-remove-book">Xóa</button>
					</td>
				</tr>
				@endforeach
				<tr>
					<td>2</td>
					<td>Kakegurui</td>
					<td>11-7-2014</td>
					<td><span class="label label-primary">Comedy</span> <span class="label label-primary">Action</span> <span class="label label-primary">Fantasy</span></td>
					<td>Bacon ipsum dolor sit amet salami venison chicken flank fatback doner.</td>
					<td>Kakegurui, Yumeko</td>
					<td>
						<button class="btn btn-success box-link" data-target="#box-book-edit" data-with="#box-book-list-small">Sửa</button>
						<button class="btn btn-danger" data-toggle="modal" data-target="#modal-remove-book">Xóa</button>
					</td>
				</tr>
				<tr>
					<td>3</td>
					<td>Konosuba</td>
					<td>11-7-2014</td>
					<td><span class="label label-primary">Comedy</span> <span class="label label-primary">Action</span> <span class="label label-primary">Fantasy</span></td>
					<td>Bacon ipsum dolor sit amet salami venison chicken flank fatback doner.</td>
					<td>Konosuba, Kazuma</td>
					<td>
						<button class="btn btn-success box-link" data-target="#box-book-edit" data-with="#box-book-list-small">Sửa</button>
						<button class="btn btn-danger" data-toggle="modal" data-target="#modal-remove-book">Xóa</button>
					</td>
				</tr>
				<tr>
					<td>4</td>
					<td>Overlord</td>
					<td>11-7-2014</td>
					<td><span class="label label-primary">Comedy</span> <span class="label label-primary">Action</span> <span class="label label-primary">Fantasy</span></td>
					<td>Bacon ipsum dolor sit amet salami venison chicken flank fatback doner.</td>
					<td>Overlord, Ainz Ooal Gown</td>
					<td>
						<button class="btn btn-success box-link" data-target="#box-book-edit" data-with="#box-book-list-small">Sửa</button>
						<button class="btn btn-danger" data-toggle="modal" data-target="#modal-remove-book">Xóa</button>
					</td>
				</tr>
				<tr>
					<td>5</td>
					<td>Date A Live</td>
					<td>11-7-2014</td>
					<td><span class="label label-primary">Comedy</span> <span class="label label-primary">Action</span> <span class="label label-primary">Fantasy</span></td>
					<td>Bacon ipsum dolor sit amet salami venison chicken flank fatback doner.</td>
					<td>Date A Live, Shidou</td>
					<td>
						<button class="btn btn-success box-link" data-target="#box-book-edit" data-with="#box-book-list-small">Sửa</button>
						<button class="btn btn-danger" data-toggle="modal" data-target="#modal-remove-book">Xóa</button>
					</td>
				</tr>
				<tr>
					<td>6</td>
					<td>Sword Art Online</td>
					<td>11-7-2014</td>
					<td><span class="label label-primary">Comedy</span> <span class="label label-primary">Action</span> <span class="label label-primary">Fantasy</span></td>
					<td>Bacon ipsum dolor sit amet salami venison chicken flank fatback doner.</td>
					<td>Sword Art Online, Kirito</td>
					<td>
						<button class="btn btn-success box-link" data-target="#box-book-edit" data-with="#box-book-list-small">Sửa</button>
						<button class="btn btn-danger" data-toggle="modal" data-target="#modal-remove-book">Xóa</button>
					</td>
				</tr>
			</tbody>
		</table>
	</div>
	<!-- /.box-body -->
</div>
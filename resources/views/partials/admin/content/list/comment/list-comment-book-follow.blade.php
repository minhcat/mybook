<div class="box box-primary collapse" id="box-book-follow" aria-expanded="false">
	<div class="box-header with-border">
		<h3 class="box-title">Truyện Đang Theo Dõi</h3>

		<div class="box-tools pull-right">
			<button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
			</button>
			<button type="button" class="btn btn-box-tool" data-remove="collapse"><i class="fa fa-times"></i></button>
		</div>
	</div>
	<!-- /.box-header -->
	<div class="box-body table-responsive">
		<table class="table table-bordered table-hover table-striped" id="table-books-follow">
			<thead>
				<tr>
					<th>Stt</th>
					<th>Tên truyện</th>
					<th>Thể loại</th>
					<th>Ngày theo dõi</th>
					<th>Số bình luận</th>
					<th>Lượt xem</th>
					<th>Xóa</th>
				</tr>
			</thead>
			<tbody>
				@foreach ($books_follow as $key => $book)
				<tr>
					<td>{{ $key + 1 }}</td>
					<td>{{ $book->name }}</td>
					<td>
						@foreach ($book->categories as $category)
							<span class="label label-primary">{{ $category }}</span> 
						@endforeach
					</td>
					<td>{{ date_format(date_create($book->date), 'd-m-Y') }}</td>
					<td>{{ $book->comment }}</td>
					<td>{{ $book->view }}</td>
					<td><button class="btn btn-success" data-toggle="modal" data-target="#modal-book-remove-follow">Xóa</button></td>
				</tr>
				@endforeach
			</tbody>
		</table>
	</div>
	<!-- /.box-body -->
</div>
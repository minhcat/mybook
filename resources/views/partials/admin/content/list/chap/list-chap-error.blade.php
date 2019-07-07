<div class="box box-primary collapse" id="box-chap-list-error" aria-expanded="false">
	<div class="box-header with-border">
		<h3 class="box-title">Danh sách chap lỗi</h3>

		<div class="box-tools pull-right">
			<button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
			</button>
			<button type="button" class="btn btn-box-tool" data-remove="collapse"><i class="fa fa-times"></i></button>
		</div>
	</div>
	<!-- /.box-header -->
	<div class="box-body table-responsive">
		<table class="table table-bordered table-hover table-striped" id="table-book-error">
			<thead>
				<tr>
					<th>Stt</th>
					<th>Tên truyện</th>
					<th>Tên chap</th>
					<th>Dạng lỗi</th>
					<th>Nội dung</th>
					<th class="fixed-115">Tùy chọn</th>
				</tr>
			</thead>
			<tbody>
				@foreach ($books_error as $key => $book)
				<tr>
					<td>{{ $key + 1 }}</td>
					<td>{{ $book->name }}</td>
					<td></td>
					<td>
						@if ($book->type == 'incorrect')
						<span class="label bg-red">sai thông tin</span>
						@elseif ($book->type == 'incompliance')
						<span class="label bg-orange">không đầy đủ</span>
						@elseif ($book->type == 'errorshow')
						<span class="label bg-green">Lỗi hiển thị</span>
						@endif
					</td>
					<td>{{ $book->content }}</td>
					<td>
						<button class="btn btn-success box-link" data-target="#box-book-edit-{{ $book->id_book }}" data-with="#box-book-list-small">Sửa</button>
						<button class="btn btn-primary" data-toggle="modal" data-target="#modal-remove-book-{{ $book->id_book }}">Xem chap</button>
					</td>
				</tr>
				@endforeach
			</tbody>
		</table>
	</div>
	<!-- /.box-body -->
</div>
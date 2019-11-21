<div class="box box-primary collapse in" id="box-book" aria-expanded="true">
	<div class="box-header with-border">
		<h3 class="box-title">Truyện</h3>

		<div class="box-tools pull-right">
			<button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
			</button>
			<button type="button" class="btn btn-box-tool" data-remove="collapse"><i class="fa fa-times"></i></button>
		</div>
	</div>
	<div class="box-body">
		<table id="table-book" class="table table-bordered table-striped">
			<thead>
				<tr>
					<th>Id</th>
					<th>Tên truyện</th>
					<th>Ngày xuất bản</th>
					<th>Ngày đăng</th>
					<th>Người đăng</th>
					<th class="fixed">Nội dung</th>
					<th>Từ khóa</th>
				</tr>
			</thead>
			<tbody>
				@foreach ($books as $key => $book)
				<tr>
					<td>{{ $key + 1 }}</td>
					<td>{{ $book->name }}</td>
					<td>{{ date_format(date_create($book->release_at), 'd/m/Y') }}</td>
					<td>{{ date_format(date_create($book->create_at), 'd/m/Y') }}</td>
					<td>{{ $book->uploader }}</td>
					<td>{{ $book->description }}</td>
					<td>{{ $book->keyword }}</td>
				</tr>
				@endforeach
			</tbody>
		</table>
	</div>
</div>
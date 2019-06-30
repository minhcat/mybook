<div class="box box-primary collapse list-small" id="box-book-list-small" aria-expanded="false">
	<div class="box-header with-border">
		<h3 class="box-title">Truyện Đã Đăng</h3>

		<div class="box-tools pull-right">
			<button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
			</button>
			<button type="button" class="btn btn-box-tool" data-remove="collapse"><i class="fa fa-times"></i></button>
		</div>
	</div>
	<!-- /.box-header -->
	<div class="box-body table-responsive">
		<table class="table table-bordered table-hover table-striped" id="table-book-upload-small">
			<thead>
				<tr>
					<th>Stt</th>
					<th>Tên truyện</th>
				</tr>
			</thead>
			<tbody>
				@foreach ($books_upload as $key => $book)
				<tr class="link">
					<td>{{ $key+1 }}</td>
					<td class="box-link" data-target="#box-book-detail-{{ $key }}" data-with="#box-book-list-small">{{ $book->name }}</td>
				</tr>
				@endforeach
			</tbody>
		</table>
	</div>
	<!-- /.box-body -->
</div>
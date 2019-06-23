@foreach ($books_upload as $key => $book)
<div class="box box-primary collapse" id="box-chap-list-{{ $key }}" aria-expanded="false">
	<div class="box-header with-border">
		<h3 class="box-title">Danh sách chap</h3>

		<div class="box-tools pull-right">
			<button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
			</button>
			<button type="button" class="btn btn-box-tool" data-remove="collapse"><i class="fa fa-times"></i></button>
		</div>
	</div>
	<!-- /.box-header -->
	<div class="box-body table-responsive">
		<table class="table table-bordered table-hover table-striped table-chap">
			<thead>
				<tr>
					<th>Stt</th>
					<th>Số chap</th>
					<th>Tựa chap</th>
					<th>Ngày đăng</th>
					<th>Số trang</th>
					<th>Lượt xem</th>
					<th>Nhóm dịch</th>
					<th>Sửa chap</th>
				</tr>
			</thead>
			<tbody>
				@foreach ($book->chaps as $key2 => $chap)
				<tr>
					<td>{{ $key2 + 1 }}</td>
					<td>{{ $chap->index }}</td>
					<td>{{ $chap->name }}</td>
					<td>{{ date_format(date_create($chap->create_at), 'd-m-Y') }}</td>
					<td>{{ $chap->number_images }}</td>
					<td>{{ $chap->view }}</td>
					<td>{{ $chap->trans_name }}</td>
					<td><button class="btn btn-success">Sửa</button></td>
				</tr>
				@endforeach
			</tbody>
		</table>
	</div>
	<!-- /.box-body -->
	<div class="box-footer clearfix">
		<button class="btn btn-primary box-link" data-target="#box-book-detail-{{ $key }}" data-unclose="#box-book-list-small">Chi tiết truyện</button>
	</div>
	<!-- /.box footer -->
</div>
@endforeach
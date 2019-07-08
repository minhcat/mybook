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
		<table class="table table-bordered table-hover table-striped" id="table-chap-error">
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
				@foreach ($chaps_error as $key => $chap)
				<tr>
					<td>{{ $key + 1 }}</td>
					<td>{{ $chap->book_name }}</td>
					<td>{{ $chap->name }}</td>
					<td>
						@if ($chap->type == 'chapdie')
						<span class="label bg-blue">chap die</span>
						@elseif ($chap->type == 'coincidence')
						<span class="label bg-green">trùng</span>
						@elseif ($chap->type == 'indexwrong')
						<span class="label bg-red">sai thứ tự</span>
						@endif
					</td>
					<td>{{ $chap->content }}</td>
					<td>
						<button class="btn btn-success box-link" data-target="#box-chap-edit-{{ $chap->id_book }}-{{ $chap->id_chap }}" data-with="#box-book-list-small">Sửa</button>
						<a href="{{ url('/read/'.$chap->book_slug.'/'.$chap->trans_slug.'/'.$chap->chap_slug) }}" target="_blank" class="btn btn-primary">Xem chap</a>
					</td>
				</tr>
				@endforeach
			</tbody>
		</table>
	</div>
	<!-- /.box-body -->
</div>
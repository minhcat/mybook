<div class="box box-primary collapse" id="box-checkword" aria-expanded="false">
	<div class="box-header with-border">
		<h3 class="box-title">Từ Khóa Kiểm Tra Bình Luận</h3>

		<div class="box-tools pull-right">
			<button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
			</button>
			<button type="button" class="btn btn-box-tool" data-remove="collapse"><i class="fa fa-times"></i></button>
		</div>
	</div>
	<!-- /.box-header -->
	<div class="box-body table-responsive">
		<table class="table table-bordered table-hover table-striped" id="table-checkword">
			<thead>
				<tr>
					<th>Stt</th>
					<th>Từ khóa</th>
					<th>Ngày thêm</th>
					<th>Số bình luận chứa</th>
					<th>Xóa từ khóa</th>
				</tr>
			</thead>
			<tbody>
				@foreach ($checkwords as $key => $checkword)
				<tr>
					<td>{{ $key + 1 }}</td>
					<td>{{ $checkword->checkword }}</td>
					<td>{{ date_format(date_create($checkword->date), 'd-m-Y') }}</td>
					<td>{{ $checkword->number }}</td>
					<td><button class="btn btn-success" data-toggle="modal" data-target="#modal-checkword-remove">Xóa</button></td>
				</tr>
				@endforeach
			</tbody>
		</table>
	</div>
	<!-- /.box-body -->
</div>
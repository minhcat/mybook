<div class="box box-primary collapse" id="box-noti-receive" aria-expanded="false">
	<div class="box-header with-border">
		<h3 class="box-title">Danh sách thông báo gữi đến</h3>

		<div class="box-tools pull-right">
			<button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
			</button>
			<button type="button" class="btn btn-box-tool" data-remove="collapse"><i class="fa fa-times"></i></button>
		</div>
	</div>
	<!-- /.box-header -->
	<div class="box-body table-responsive">
		<table class="table table-bordered table-hover table-striped" id="table-noti-receive">
			<thead>
				<tr>
					<th>Stt</th>
					<th>Tựa đề</th>
					<th>Người gữi</th>
					<th>Nội dung</th>
					<th>Ngày gữi</th>
					<th>Xóa</th>
				</tr>
			</thead>
			<tbody>
				@foreach ($noties_receive as $key => $noti)
				<tr>
					<td>{{ $key + 1 }}</td>
					<td>{{ $noti->title }}</td>
					<td>{{ $noti->name }}</td>
					<td>{{ $noti->content }}</td>
					<td>{{ date_format(date_create($noti->date), 'd-m-Y') }}</td>
					<td><button class="btn btn-danger" data-toggle="modal" data-target="#modal-checkword-remove">Xóa</button></td>
				</tr>
				@endforeach
			</tbody>
		</table>
	</div>
	<!-- /.box-body -->
</div>
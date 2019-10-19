<div class="box box-primary collapse" id="box-noti-send" aria-expanded="false">
	<div class="box-header with-border">
		<h3 class="box-title">Danh sách thông báo đã tạo</h3>

		<div class="box-tools pull-right">
			<button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
			</button>
			<button type="button" class="btn btn-box-tool" data-remove="collapse"><i class="fa fa-times"></i></button>
		</div>
	</div>
	<!-- /.box-header -->
	<div class="box-body table-responsive">
		<table class="table table-bordered table-hover table-striped" id="table-noti-send">
			<thead>
				<tr>
					<th>Stt</th>
					<th>Tựa đề</th>
					<th>Người nhận</th>
					<th>Nội dung</th>
					<th>Ngày gữi</th>
					<th>Chi tiết</th>
				</tr>
			</thead>
			<tbody>
				@foreach ($noties_send as $key => $noti)
				<tr>
					<td>{{ $key + 1 }}</td>
					<td>{{ $noti->title }}</td>
					@if ($noti->id_group != null)
					<td>{{ $noti->group_name }}</td>
					@else
					<td>{{ $noti->receive_name }}</td>
					@endif
					<td>{{ $noti->content }}</td>
					<td>{{ date_format(date_create($noti->date), 'd-m-Y') }}</td>
					<td><button class="btn btn-primary box-link" data-target="#box-noti-detail-{{ $noti->id }}" data-small="notification">Xem</button></td>
				</tr>
				@endforeach
			</tbody>
		</table>
	</div>
	<!-- /.box-body -->
</div>
<div class="box box-primary collapse" id="box-user-ban" aria-expanded="false">
	<div class="box-header with-border">
		<h3 class="box-title">Người Dùng Bị Chặn</h3>

		<div class="box-tools pull-right">
			<button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
			</button>
			<button type="button" class="btn btn-box-tool" data-remove="collapse"><i class="fa fa-times"></i></button>
		</div>
	</div>
	<!-- /.box-header -->
	<div class="box-body table-responsive">
		<table class="table table-bordered table-hover table-striped" id="table-users-ban">
			<thead>
				<tr>
					<th>Stt</th>
					<th>Người dùng</th>
					<th>Ngày bị chặn</th>
					<th>Bình luận vi phạm</th>
					<th>Gỡ chặn</th>
				</tr>
			</thead>
			<tbody>
				@foreach ($users_ban as $key => $user)
				<tr>
					<td>{{ $key + 1 }}</td>
					<td>{{ $user->name }}</td>
					<td>{{ date_format(date_create($user->date), 'd-m-Y') }}</td>
					<td>{{ $user->content }}</td>
					<td><button class="btn btn-success" data-toggle="modal" data-target="#modal-user-remove-banlist">Gỡ</button></td>
				</tr>
				@endforeach
			</tbody>
		</table>
	</div>
	<!-- /.box-body -->
</div>
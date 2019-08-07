<div class="box box-primary collapse" id="box-staff" aria-expanded="false">
	<div class="box-header with-border">
		<h3 class="box-title">Danh Sách Nhân Viên</h3>

		<div class="box-tools pull-right">
			<button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
			</button>
			<button type="button" class="btn btn-box-tool" data-remove="collapse"><i class="fa fa-times"></i></button>
		</div>
	</div>
	<div class="box-body">
		<table id="table-staff" class="table table-bordered table-hover">
			<thead>
				<tr>
					<th>ID</th>
					<th>Tên nhân viên</th>
					<th>Giới tính</th>
					<th>Ngày sinh</th>
					<th>Ngày đăng ký</th>
					<th>Quyền truy cập</th>
					<th class="column-fixed-80">Cấp quyền</th>
				</tr>
			</thead>
			<tbody>
				@foreach ($admins as $key => $admin)
				<tr>
					<td>{{ $key + 1 }}</td>
					<td>{{ $admin->name }}</td>
					<td>{{ ($admin->gender == 0) ? 'nam' : 'nữ' }}</td>
					<td>{{ date_format(date_create($admin->birth), 'd-m-Y') }}</td>
					<td>{{ date_format(date_create($admin->create_at), 'd-m-Y') }}</td>
					<td><span class="label {{ ($admin->admin == 'uploader') ? 'bg-blue' : (($admin->admin == 'mod') ? 'bg-green' : (($admin->admin == 'statistic') ? 'bg-orange' : (($admin->admin == null) ? 'bg-gray' : 'bg-red'))) }}">{{ ($admin->admin != null) ? $admin->admin : 'chưa cấp quyền' }}</span></td>
					<td><button class="btn btn-success" data-toggle="modal" data-target="#modal-permiss" data-id="{{ $admin->id }}">cấp quyền</button></td>
				</tr>
				@endforeach
			</tbody>
		</table>
	</div>
</div>
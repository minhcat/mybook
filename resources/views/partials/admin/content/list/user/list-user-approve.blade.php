<div class="box box-primary collapse" id="box-approve-user" aria-expanded="false">
	<div class="box-header with-border">
		<h3 class="box-title">Duyệt phạt người dùng</h3>

		<div class="box-tools pull-right">
			<button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
			</button>
			<button type="button" class="btn btn-box-tool" data-remove="collapse"><i class="fa fa-times"></i></button>
		</div>
	</div>
	<div class="box-body">
		<table id="table-approve-user" class="table table-bordered table-hover">
			<thead>
				<tr>
					<th>Stt</th>
					<th>Tên người dùng</th>
					<th>Người đề nghị</th>
					<th>Ngày đề nghị</th>
					<th>Bình luận</th>
					<th>Hình phạt</th>
					<th class="column-fixed-190">Phản hồi</th>
				</tr>
			</thead>
			<tbody>
				@foreach ($users_approve as $key => $user)
				<tr>
					<td>{{ $key + 1 }}</td>
					<td>{{ $user->user_name }}</td>
					<td>{{ $user->admin_name }}</td>
					<td>{{ date_format(date_create($user->date), 'd-m-Y') }}</td>
					<td>{{ $user->content }}</td>
					@if ($user->punish == '1d')
					<td>Cấm bình luận 1 ngày</td>
					@elseif ($user->punish == '2d')
					<td>Cấm bình luận 2 ngày</td>
					@elseif ($user->punish == '3d')
					<td>Cấm bình luận 3 ngày</td>
					@elseif ($user->punish == '1w')
					<td>Cấm bình luận 1 tuần</td>
					@elseif ($user->punish == '2w')
					<td>Cấm bình luận 2 tuầns</td>
					@elseif ($user->punish == '1m')
					<td>Cấm bình luận 1 tháng</td>
					@endif
					<td>
						<button class="btn btn-success" data-id="{{ $user->id }}">Duyệt</button>
						<button class="btn btn-primary" data-id="{{ $user->id }}">Phản hồi</button>
						<button class="btn btn-default">Hủy</button>
					</td>
				</tr>
				@endforeach
			</tbody>
		</table>
	</div>
</div>
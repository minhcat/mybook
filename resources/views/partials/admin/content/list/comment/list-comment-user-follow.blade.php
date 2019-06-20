<div class="box box-primary collapse" id="box-user-follow" aria-expanded="false">
	<div class="box-header">
		<h3 class="box-title">Người Dùng Đang Theo Dõi</h3>

		<div class="box-tools pull-right">
			<button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
			</button>
			<button type="button" class="btn btn-box-tool" data-remove="collapse"><i class="fa fa-times"></i></button>
		</div>
	</div>
	<!-- /.box-header -->
	<div class="box-body table-responsive no-padding">
		<table class="table table-hover table-striped">
			<tr>
				<th>Stt</th>
				<th>Người dùng</th>
				<th>Ngày theo dõi</th>
				<th>Số bình luận</th>
				<th>Bình luận mới nhất</th>
				<th>Danh sách bình luận</th>
			</tr>
			@foreach ($users_follow as $key => $user)
			<tr>
				<td>{{ $key + 1 }}</td>
				<td>{{ $user->name }}</td>
				<td>{{ $user->date }}</td>
				<td>{{ $user->number }}</td>
				<td>{{ $user->new_comment }}</td>
				<td><a href="../MyBook/read-book.html" target="_blank" class="btn btn-primary">Xem</a></td>
			</tr>
			@endforeach
		</table>
	</div>
	<!-- /.box-body -->
	<div class="box-footer clearfix">
		<ul class="pagination pagination-sm no-margin pull-right">
			<li><a href="#">&laquo;</a></li>
			<li><a href="#">1</a></li>
			<li><a href="#">2</a></li>
			<li><a href="#">3</a></li>
			<li><a href="#">&raquo;</a></li>
		</ul>
	</div>
	<!-- /.box footer -->
</div>
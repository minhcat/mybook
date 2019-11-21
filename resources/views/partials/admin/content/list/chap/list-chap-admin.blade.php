<div class="box box-primary collapse" id="box-chap" aria-expanded="false">
	<div class="box-header with-border">
		<h3 class="box-title">Chap</h3>

		<div class="box-tools pull-right">
			<button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
			</button>
			<button type="button" class="btn btn-box-tool" data-remove="collapse"><i class="fa fa-times"></i></button>
		</div>
	</div>
	<div class="box-body">
		<table id="table-chap" class="table table-bordered table-hover">
			<thead>
				<tr>
					<th>ID</th>
					<th>Tên chap</th>
					<th>Tựa chap</th>
					<th>Stt</th>
					<th>Truyện</th>
					<th>Nhóm dịch</th>
				</tr>
			</thead>
			<tbody>
				@foreach ($chaps as $key => $chap)
				<tr>
					<td>{{ $key + 1 }}</td>
					<td>{{ $chap->name }}</td>
					<td>{{ $chap->title }}</td>
					<td>{{ $chap->index }}</td>
					<td>{{ $chap->book_name }}</td>
					<td>{{ $chap->trans_name }}</td>
				</tr>
				@endforeach
			</tbody>
		</table>
	</div>
</div>
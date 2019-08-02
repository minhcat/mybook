<div class="box box-primary collapse" id="box-approve-book" aria-expanded="false">
	<div class="box-header with-border">
		<h3 class="box-title">Duyệt truyện</h3>

		<div class="box-tools pull-right">
			<button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
			</button>
			<button type="button" class="btn btn-box-tool" data-remove="collapse"><i class="fa fa-times"></i></button>
		</div>
	</div>
	<div class="box-body">
		<table id="table-approve-book" class="table table-bordered table-hover">
			<thead>
				<tr>
					<th>Stt</th>
					<th>Tên truyện</th>
					<th>Người đăng</th>
					<th>Ngày đăng</th>
					<th>Mô tả</th>
					<th class="column-fixed-190">Phản hồi</th>
				</tr>
			</thead>
			<tbody>
				@foreach ($books_approve as $key => $book)
				<tr>
					<td>{{ $key + 1 }}</td>
					<td>{{ $book->name }}</td>
					<td>{{ $book->user_name }}</td>
					<td>{{ date_format(date_create($book->create_at), 'd-m-Y') }}</td>
					<td>{{ $book->description }}</td>
					<td>
						<button class="btn btn-success" data-id="{{ $book->id }}">Duyệt</button>
						<button class="btn btn-primary" data-toggle="modal" data-target="#modal-reply" data-id="{{ $book->id }}">Phản hồi</button>
						<button class="btn btn-default">Hủy</button>
					</td>
				</tr>
				@endforeach
			</tbody>
		</table>
	</div>
</div>
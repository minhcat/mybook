<div class="box box-primary collapse" id="box-chap-list-notapproved" aria-expanded="false">
	<div class="box-header with-border">
		<h3 class="box-title">Danh sách chap chưa duyệt</h3>

		<div class="box-tools pull-right">
			<button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
			</button>
			<button type="button" class="btn btn-box-tool" data-remove="collapse"><i class="fa fa-times"></i></button>
		</div>
	</div>
	<!-- /.box-header -->
	<div class="box-body table-responsive">
		<table class="table table-bordered table-hover table-striped" id="table-chap-approved">
			<thead>
				<tr>
					<th>Stt</th>
					<th>Tên truyện</th>
					<th>Tên chap</th>
					<th>Tựa chap</th>
					<th>Phản hồi</th>
					<th>Tình trạng</th>
					<th class="fixed-115">Chỉnh sửa</th>
					<th class="fixed-115">Yêu cầu duyệt</th>
				</tr>
			</thead>
			<tbody>
				@foreach ($chaps_approved as $key => $chap)
				<tr>
					<td>{{ $key + 1 }}</td>
					<td>{{ $chap->book_name }}</td>
					<td>{{ $chap->name }}</td>
					<td>{{ $chap->title }}</td>
					<td>
						@if ($chap->reply != '')
						{{ $chap->reply }}
						@else
						<i>Không có thông tin phản hồi</i>
						@endif
					</td>
					<td>
						@if ($chap->approved_status == 'notsee')
						<span class="label bg-orange">Chưa xem</span>
						@elseif ($chap->approved_status == 'seen')
						<span class="label bg-red">Đã xem</span>
						@elseif ($chap->approved_status == 'reply')
						<span class="label bg-green">Đã phản hồi</span>
						@endif
					</td>
					<td>
						<button class="btn btn-success box-link" data-target="#box-chap-edit-{{ $chap->id_book }}-{{ $chap->id }}" data-with="#box-book-list-small">Chỉnh sửa</button>
					</td>
					<td><button class="btn btn-primary call" data-id="{{ $chap->id }}">Yêu cầu</button></td>
				</tr>
				@endforeach
			</tbody>
		</table>
	</div>
	<!-- /.box-body -->
</div>
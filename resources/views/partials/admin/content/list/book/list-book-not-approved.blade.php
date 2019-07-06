<div class="box box-primary collapse" id="box-book-list-notapproved" aria-expanded="false">
	<div class="box-header with-border">
		<h3 class="box-title">Danh sách truyện chưa duyệt</h3>

		<div class="box-tools pull-right">
			<button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
			</button>
			<button type="button" class="btn btn-box-tool" data-remove="collapse"><i class="fa fa-times"></i></button>
		</div>
	</div>
	<!-- /.box-header -->
	<div class="box-body table-responsive">
		<table class="table table-bordered table-hover table-striped" id="table-book-approved">
			<thead>
				<tr>
					<th>Stt</th>
					<th>Tên truyện</th>
					<th>Ngày đăng</th>
					<th>Thể loại</th>
					<th>Phản hồi</th>
					<th>Tình trạng</th>
					<th class="fixed-115">Yêu cầu duyệt</th>
				</tr>
			</thead>
			<tbody>
				@foreach ($books_notapproved as $key => $book)
				<tr>
					<td>{{ $key + 1 }}</td>
					<td>{{ $book->name }}</td>
					<td>{{ date_format(date_create($book->create_at), 'd-m-Y') }}</td>
					<td>
						@foreach ($book->categories as $category)
						<span class="label label-primary">{{ $category }}</span>
						@endforeach
					</td>
					<td>
						@if ($book->reply != '')
						{{ $book->reply }}
						@else
						<i>Không có thông tin phản hồi</i>
						@endif
					</td>
					<td>
						@if ($book->approved_status == 'notsee')
						<span class="label bg-orange">Chưa xem</span>
						@elseif ($book->approved_status == 'seen')
						<span class="label bg-red">Đã xem</span>
						@elseif ($book->approved_status == 'reply')
						<span class="label bg-green">Đã phản hồi</span>
						@endif
					</td>
					<td>
						<button class="btn btn-primary call" data-id="{{ $book->id }}">Yêu cầu</button>
					</td>
				</tr>
				@endforeach
			</tbody>
		</table>
	</div>
	<!-- /.box-body -->
</div>
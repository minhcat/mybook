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
					<th class="fixed-115">Yêu cầu duyệt</th>
				</tr>
			</thead>
			<tbody>
				@foreach ($chaps_notapproved as $key => $chap)
				<tr>
					<td>{{ $key + 1 }}</td>
					<td>{{ $chap->book_name }}</td>
					<td>{{ $chap->name }}</td>
					<td>{{ $chap->title }}</td>
					<td>Bacon ipsum dolor sit amet salami venison chicken flank fatback doner.</td>
					<td><span class="label bg-orange">Chưa xem</span></td>
					<td><button class="btn btn-primary">Yêu cầu</button></td>
				</tr>
				@endforeach
			</tbody>
		</table>
	</div>
	<!-- /.box-body -->
</div>
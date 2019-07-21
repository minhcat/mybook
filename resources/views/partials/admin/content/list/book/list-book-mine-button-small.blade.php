<div class="box box-primary collapse" id="box-book-list-small-3" aria-expanded="false">
	<div class="box-header with-border">
		<h3 class="box-title">Truyện Của Bạn</h3>

		<div class="box-tools pull-right">
			<button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
			</button>
			<button type="button" class="btn btn-box-tool" data-remove="collapse"><i class="fa fa-times"></i></button>
		</div>
	</div>
	<!-- /.box-header -->
	<div class="box-body table-responsive">
		<table class="table table-bordered table-hover table-striped" id="table-statistic-button-small">
			<thead>
				<tr>
					<th>Stt</th>
					<th>Truyện</th>
					<th>Chọn</th>
				</tr>
			</thead>
			<tbody>
				@foreach ($books_upload as $key => $book)
				<tr>
					<td>{{ $key + 1 }}</td>
					<td>{{ $book->name }}</td>
					<td>
						@if ($key <= 4)
							<button class="btn btn-danger" data-index="{{ $key }}">Xóa</button>
						@else
							<button class="btn btn-success" data-index="{{ $key }}">Thêm</button>
						@endif
					</td>
				</tr>
				@endforeach
			</tbody>
		</table>
	</div>
	<!-- /.box-body -->
</div>
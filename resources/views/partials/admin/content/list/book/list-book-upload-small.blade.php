<div class="box box-primary collapse" id="box-book-list-small" aria-expanded="false">
	<div class="box-header">
		<h3 class="box-title">Truyện Đã Đăng</h3>

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
				<th>Tên truyện</th>
			</tr>
			@foreach ($books_upload as $key => $book)
			<tr class="link">
				<td>{{ $key+1 }}</td>
				<td class="box-link" data-target="#box-book-detail-{{ $key }}" data-with="#box-book-list-small">{{ $book->name }}</td>
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
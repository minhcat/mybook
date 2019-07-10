<div class="box box-primary collapse list" id="box-author-list-small" aria-expanded="false">
	<div class="box-header with-border">
		<h3 class="box-title">Danh sách tác giả</h3>

		<div class="box-tools pull-right">
			<button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
			</button>
			<button type="button" class="btn btn-box-tool" data-remove="collapse"><i class="fa fa-times"></i></button>
		</div>
	</div>
	<!-- /.box-header -->
	<div class="box-body table-responsive">
		<table class="table table-bordered table-hover table-striped" id="table-author-small">
			<thead>
				<tr>
					<th>Stt</th>
					<th>Tên tác giả</th>
				</tr>
			</thead>
			<tbody>
				@foreach ($authors_detail as $key => $author)
				<tr class="link box-link" data-target="#box-author-detail-{{ $author->id }}" data-with="#box-author-list-small">
					<td>{{ $key + 1 }}</td>
					<td>{{ $author->name }}</td>
				</tr>
				@endforeach
			</tbody>
		</table>
	</div>
	<!-- /.box-body -->
</div>
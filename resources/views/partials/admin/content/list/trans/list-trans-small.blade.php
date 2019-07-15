<div class="box box-primary collapse list" id="box-trans-list-small" aria-expanded="false">
	<div class="box-header with-border">
		<h3 class="box-title">Danh sách nhóm dịch</h3>

		<div class="box-tools pull-right">
			<button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
			</button>
			<button type="button" class="btn btn-box-tool" data-remove="collapse"><i class="fa fa-times"></i></button>
		</div>
	</div>
	<!-- /.box-header -->
	<div class="box-body table-responsive">
		<table class="table table-bordered table-hover table-striped" id="table-trans-small">
			<thead>
				<tr>
					<th>Stt</th>
					<th>Tên nhóm dịch</th>
				</tr>
			</thead>
			<tbody>
				@foreach ($transes as $key => $trans)
				<tr class="link box-link" data-target="#box-trans-detail-{{ $trans->id }}" data-with="#box-trans-list-small">
					<td>{{ $key + 1 }}</td>
					<td>{{ $trans->name }}</td>
				</tr>
				@endforeach
			</tbody>
		</table>
	</div>
	<!-- /.box-body -->
</div>
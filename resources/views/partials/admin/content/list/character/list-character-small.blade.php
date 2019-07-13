<div class="box box-primary collapse list" id="box-character-list-small" aria-expanded="false">
	<div class="box-header with-border">
		<h3 class="box-title">Danh sách nhân vật</h3>

		<div class="box-tools pull-right">
			<button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
			</button>
			<button type="button" class="btn btn-box-tool" data-remove="collapse"><i class="fa fa-times"></i></button>
		</div>
	</div>
	<!-- /.box-header -->
	<div class="box-body table-responsive">
		<table class="table table-bordered table-hover table-striped" id="table-character-small">
			<thead>
				<tr>
					<th>Stt</th>
					<th>Tên nhân vật</th>
				</tr>
			</thead>
			<tbody>
				@foreach ($characters as $key => $character)
				<tr class="link box-link" data-target="#box-character-detail-{{ $character->id }}" data-with="#box-character-list-small">
					<td>{{ $key + 1 }}</td>
					<td>{{ $character->name }}</td>
				</tr>
				@endforeach
			</tbody>
		</table>
	</div>
	<!-- /.box-body -->
</div>
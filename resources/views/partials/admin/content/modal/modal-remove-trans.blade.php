@foreach ($transes as $trans)
<div class="modal fade trans" id="modal-remove-trans-{{ $trans->id }}">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
				<span aria-hidden="true">&times;</span></button>
				<h4 class="modal-title">Xóa Nhóm Dịch</h4>
			</div>
			<div class="modal-body">
				<p>Bạn có chắc muốn xóa nhóm dịch này</p>
			</div>
			<div class="modal-footer">
				<a href="{{ url('/admin/uploader/delete_trans/'.$trans->id) }}" class="btn btn-primary pull-left">Đồng ý</a>
				<button type="button" class="btn btn-default pull-right" data-dismiss="modal">Hủy</button>
			</div>
		</div>
		<!-- /.modal-content -->
	</div>
	<!-- /.modal-dialog -->
</div>
@endforeach
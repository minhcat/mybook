@foreach ($chaps as $chap)
<div class="modal fade" id="modal-remove-chap-{{ $chap->id }}">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
				<span aria-hidden="true">&times;</span></button>
				<h4 class="modal-title">Xóa Chap</h4>
			</div>
			<div class="modal-body">
				<p>Bạn có chắc muốn xóa chap này</p>
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-default pull-left" data-dismiss="modal">Hủy</button>
				<a href="{{ url('/admin/uploader/delete_chap/'.$chap->id) }}" class="btn btn-primary">Đồng ý</a>
			</div>
		</div>
		<!-- /.modal-content -->
	</div>
	<!-- /.modal-dialog -->
</div>
@endforeach
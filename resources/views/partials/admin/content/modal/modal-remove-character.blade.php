@foreach ($characters as $character)
<div class="modal fade remove" id="modal-remove-character-{{ $character->id }}">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
				<span aria-hidden="true">&times;</span></button>
				<h4 class="modal-title">Xóa Nhân Vật</h4>
			</div>
			<div class="modal-body">
				Bạn có chắc xóa nhân vật này
			</div>
			<div class="modal-footer">
				<a href="{{ url('/admin/uploader/delete_character/'.$character->id) }}" class="btn btn-primary pull-left">Đồng ý</a>
				<button type="button" class="btn btn-default pull-left" data-dismiss="modal">Hủy</button>
			</div>
		</div>
		<!-- /.modal-content -->
	</div>
	<!-- /.modal-dialog -->
</div>
@endforeach
@foreach ($books_upload as $key => $book)
<div class="modal fade" id="modal-remove-book-{{ $key }}">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
				<span aria-hidden="true">&times;</span></button>
				<h4 class="modal-title">Xóa Truyện</h4>
			</div>
			<div class="modal-body">
				<p>Bạn có chắc muốn xóa truyện này</p>
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-default pull-left" data-dismiss="modal">Hủy</button>
				<a href="{{ url('/admin/uploader/delete_book/'.$book->id) }}" type="button" class="btn btn-primary">Đồng ý</a>
			</div>
		</div>
		<!-- /.modal-content -->
	</div>
	<!-- /.modal-dialog -->
</div>
@endforeach
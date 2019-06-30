@foreach ($books_upload as $key => $book)
<div class="modal fade" id="modal-keyword-new-{{ $key }}">
	<div class="modal-dialog">
		<form id="add_keyword" action="{{ url('/admin/uploader/add_keyword/'.$book->id) }}" method="POST">
		<input type="hidden" name="_token" value="{{ csrf_token() }}">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
				<span aria-hidden="true">&times;</span></button>
				<h4 class="modal-title">Thêm Từ Khóa</h4>
			</div>
			<div class="modal-body">
				<div class="form-group">
					<label for="">Từ khóa</label>
					<input type="text" class="form-control" id="" placeholder="Thêm từ khóa" name="keyword">
				</div>
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-default pull-left" data-dismiss="modal">Hủy</button>
				<button type="submit" class="btn btn-primary" data-dismiss="modal">Đồng ý</button>
			</div>
		</div>
		<!-- /.modal-content -->
		</form>
	</div>
	<!-- /.modal-dialog -->
</div>
@endforeach
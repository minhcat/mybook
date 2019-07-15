@foreach ($books_upload as $key   => $book)
@foreach ($book->chaps  as $key_2 => $chap)
<div class="box box-primary chap-edit collapse" id="box-chap-edit-{{ $book->id }}-{{ $chap->id }}" aria-expanded="false">
	<form id="form-edit-chap" action="{{ url('/admin/uploader/update_chap/'.$book->id.'/'.$chap->id) }}" method="POST" enctype="multipart/form-data">
	<div class="box-header with-border">
		<h3 class="box-title">Chỉnh Sửa Chap</h3>

		<div class="box-tools pull-right">
			<button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
			</button>
			<button type="button" class="btn btn-box-tool" data-remove="collapse"><i class="fa fa-times"></i></button>
		</div>
	</div>
	<!-- /.box-header -->
	<div class="box-body">
		<input type="hidden" name="_token" value="{{ csrf_token() }}">
		<div class="form-group name">
			<label for="transInput">Tên chap (*)</label>
			<input name="name" type="text" class="form-control" placeholder="nhập tên chap" value="{{ $chap->name }}">
			<p class="error hide">Bạn chưa nhập tên chap</p>
		</div>
		<div class="form-group">
			<label for="transInput">Tựa chap</label>
			<input name="title" type="text" class="form-control" placeholder="nhập tên chap" value="{{ $chap->title }}">
		</div>
		<div class="form-group">
			<label for="transInput">Nhóm dịch</label>
			<select class="form-control" name="trans">
				@foreach ($transes as $trans)
					@if ($trans->id == $chap->id_trans)
					<option value="{{ $trans->id }}" selected>{{ $trans->name }}</option>
					@else
					<option value="{{ $trans->id }}">{{ $trans->name }}</option>
					@endif
				@endforeach
			</select>
		</div>
		<div class="form-group index">
			<label for="transInput">Thứ tự (*)</label>
			<input name="index" type="number" class="form-control" placeholder="nhập số thứ tư" value="{{ $chap->index }}">
			<p class="error hide">Bạn chưa nhập tên chap</p>
		</div>
	
		<label>Hình ảnh</label>
		<div class="image-group clearfix" data-files="0">
			@foreach ($chap->images as $image)
			<img src="{{ asset('image/chaps/'.$chap->book_slug.'/'.$chap->trans_slug.'/'.$chap->index.'/'.$image->image) }}">
			@endforeach
		</div>
		
		<div class="form-group images">
			<label class="btn btn-primary">
				Thêm Ảnh
				<input name="images_add[]" class="input-new-chap hide" type="file" multiple>
			</label>
			<label class="btn btn-info">
				Up lại
				<input name="images_reup[]" class="input-new-chap hide" type="file" multiple>
			</label>
			<input class="select" type="hidden" name="images_select" value="add">
		</div>
	</div>
	<!-- /.box-body -->
	<div class="box-footer clearfix">
		<button class="btn btn-success">Thay đổi</button>
		<button type="button" class="btn btn-default box-link" data-target="#box-book-detail-{{ $book->id }}" data-unclose="#box-book-list-small">Hủy</button>
	</div>
	<!-- /.box footer -->
	</form>
</div>
@endforeach
@endforeach
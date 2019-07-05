@foreach ($books_upload as $key => $book)
<div class="box box-primary chap-new collapse" id="box-chap-new-{{ $key }}" aria-expanded="false">
	<form id="form-new-chap" action="{{ url('/admin/uploader/create_chap/'.$book->id) }}" method="POST" enctype="multipart/form-data">
	
	<div class="box-header with-border">
		<h3 class="box-title">Thêm Chap Mới</h3>

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
			<input name="name" type="text" class="form-control" placeholder="nhập tên chap">
			<p class="error hide">Bạn chưa nhập tên chap</p>
		</div>
		<div class="form-group">
			<label for="transInput">Tựa chap</label>
			<input name="title" type="text" class="form-control" placeholder="nhập tên chap">
		</div>
		<div class="form-group">
			<label for="transInput">Nhóm dịch</label>
			<select class="form-control" name="trans">
				@foreach ($transes as $trans)
				<option value="{{ $trans->id }}">{{ $trans->name }}</option>
				@endforeach
			</select>
		</div>
		<div class="form-group index">
			<label for="transInput">Thứ tự (*)</label>
			<input name="index" type="number" class="form-control" placeholder="nhập số thứ tư">
			<p class="error hide">Bạn chưa nhập tên chap</p>
		</div>
	
		<label>Hình ảnh</label>
		<div class="image-group clearfix" data-files="0"></div>
		
		<div class="form-group">
			<label class="btn btn-primary">
				Chọn ảnh
				<input name="images[]" class="input-new-chap hide" type="file" multiple>
			</label>
		</div>
	</div>
	<!-- /.box-body -->
	<div class="box-footer clearfix">
		<button type="button" class="btn btn-success">Thêm chap</button>
		<button type="button" class="btn btn-default box-link">Hủy</button>
	</div>
	</form>
	<!-- /.box footer -->
</div>
@endforeach
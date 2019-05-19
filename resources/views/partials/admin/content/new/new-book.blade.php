<div class="box box-primary collapse" id="box-book-new" aria-expanded="false"  data-with="#box-book-list-small">
	<div class="box-header with-border">
		<h3 class="box-title">Thêm truyện</h3>

		<div class="box-tools pull-right">
			<button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
			</button>
			<button type="button" class="btn btn-box-tool" data-remove="collapse"><i class="fa fa-times"></i></button>
		</div>
	</div>
	<div class="box-body">
		<div class="avatar">
			<img src="{{ asset('image/admin/book-default.png') }}" class="img-circle" width="150px"  alt="user image">
			<button class="btn btn-success">Thêm hình</button>
		</div>
		<div class="box-edit">
			<div class="form-group">
				<label>Tên truyện</label>
				<input class="form-control" type="text" name="">
			</div>
			<div class="form-group">
				<label>Tên khác</label>
				<input class="form-control" type="text" name="">
			</div>
			<div class="form-group category">
				<label>Thể loại</label><br>
				<span class="label label-primary">action</span>
				<span class="label label-primary">adult</span>
				<span class="label label-primary">advanture</span>
				<span class="label label-primary">anime</span>
				<span class="label label-primary">bender</span>
				<span class="label label-primary">comedy</span>
				<span class="label label-primary">comic</span>
				<span class="label label-primary">cooking</span>
				<span class="label label-primary">cosplay</span>
				<span class="label label-primary">demons</span>
				<span class="label label-primary">doujinshi</span>
				<span class="label label-primary">ecchi</span>
				<span class="label label-primary">fanmade</span>
				<span class="label label-primary">fantasy</span>
				<span class="label label-primary">funny</span>
				<span class="label label-primary">harem</span>
				<span class="label label-primary">history</span>
				<span class="label label-primary">magic</span>
				<span class="label label-primary">mystery</span>
				<span class="label label-primary">romance</span>
				<span class="label label-primary">school life</span>
				<span class="label label-primary">zombie</span>
			</div>
			<div class="form-group">
				<label>Tác giả</label>
				<input class="form-control" type="text" name="">
			</div>
			<div class="form-group">
				<label>Minh họa</label>
				<input class="form-control" type="text" name="">
			</div>
			<div class="form-group">
				<label>Ngày xuất bản</label>
				<input type="text" class="form-control pull-right" id="datepicker-book-new">
			</div>
			<div class="form-group">
				<label>Nhân vật</label>
				<input class="form-control" type="text" name="">
			</div>
			<div class="form-group">
				<label>Nội dung</label>
				<!-- <br> -->
				<textarea id="book-content" name="book-content" class="book-content" rows="4"></textarea>
			</div>
			<div class="form-group status">
				<label>Tình trạng</label>
				<br>
				<button class="btn btn-success">Đang tiến hành</button>
			</div>
		</div>
	</div>
	<div class="box-footer">
		<button class="btn btn-primary">Thêm</button>
		<button class="btn">Hủy</button>
	</div>
</div>
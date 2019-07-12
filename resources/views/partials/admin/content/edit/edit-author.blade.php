@foreach ($authors_detail as $author)
<div class="box box-primary collapse author-edit" id="box-edit-author-{{ $author->id }}" aria-expanded="false">
	<div class="box-header with-border">
		<h3 class="box-title">Chỉnh sửa tác giả</h3>

		<div class="box-tools pull-right">
			<button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
			</button>
			<button type="button" class="btn btn-box-tool" data-remove="collapse"><i class="fa fa-times"></i></button>
		</div>
	</div>
	<form id="create-chap" action="{{ url('/admin/uploader/update_author/'.$author->id) }}" method="POST" enctype="multipart/form-data">
		<div class="box-body">
			<input type="hidden" name="_token" value="{{ csrf_token() }}">
			<div class="avatar">
				@if ($author->image == '')
				<img src="{{ asset('image/admin/user-default.jpg') }}" class="img-circle" width="150px" height="150px"  alt="user image">
				@else
				<img src="{{ asset('image/authors/'.$author->image.'.jpg') }}" class="img-circle" width="150px" height="150px"  alt="user image">
				@endif
				<label class="btn btn-success">
					Thay đổi hình
					<input id="image" type="file" name="image">
				</label>
			</div>
			<div class="box-edit">
				<div class="form-group">
					<label for="name">Tên tác giả</label>
					<input type="text" name="name" class="form-control" id="name" placeholder="tên tác giả" value="{{ $author->name }}">
				</div>
				<div class="form-group">
					<label for="name">Giới tính</label>
					<select class="form-control" name="gender">
						@if ($author->gender == 0)
						<option value="0" selected>Nam</option>
						<option value="1">Nữ</option>
						@else
						<option value="0">Nam</option>
						<option value="1" selected>Nữ</option>
						@endif
					</select>
				</div>
				<div class="form-group">
					<label for="name">Loại tác giả</label>
					<select class="form-control" name="type">
						@if ($author->type == 'author')
						<option value="author" selected>Viết truyện</option>
						<option value="artist">Họa sĩ</option>
						@else
						<option value="author">Viết truyện</option>
						<option value="artist" selected>Họa sĩ</option>
						@endif
					</select>
				</div>
				<div class="form-group category">
					<label>Thể loại</label><br>
					@foreach ($categories as $category)
						<?php $check_cate = true; ?>
						@foreach ($author->categories as $author_category)
							@if ($author_category == $category->name)
								<?php $check_cate = false; ?>
								<span class="label label-danger {{ $category->slug }}" data-id="{{ $category->id }}">{{ $category->name }}</span>
								<?php break;?>
							@endif
						@endforeach
						@if ($check_cate == true)
							<span class="label label-primary {{ $category->slug }}" data-id="{{ $category->id }}">{{ $category->name }}</span>
						@endif
					@endforeach
					<input type="hidden" name="category" value="[]">
				</div>
				<div class="form-group">
					<label for="name">Facebook</label>
					<input type="text" name="facebook" class="form-control" id="name" placeholder="facebook" value="{{ $author->facebook }}">
				</div>
				<div class="form-group">
					<label for="name">Twitter</label>
					<input type="text" name="twitter" class="form-control" id="name" placeholder="twitter" value="{{ $author->twitter }}">
				</div>
				<div class="form-group">
					<label for="name">Website</label>
					<input type="text" name="website" class="form-control" id="name" placeholder="website" value="{{ $author->website }}">
				</div>
				<div class="form-group">
					<label for="name">Giới thiệu</label>
					<textarea id="author-content-edit-{{ $author->id }}" class="form-control author-content-edit" name="description" rows="2" placeholder="giới thiệu">{{ $author->description }}</textarea>
				</div>
			</div>
		</div>
		<div class="box-footer">
			<button type="submit" class="btn btn-success">Thay đổi</button>
			<button type="button" class="btn btn-default box-link" data-target="#box-author-detail-{{ $author->id }}" data-with="#box-author-list-small">Quay lại</button>
		</div>
	</form>
</div>
@endforeach
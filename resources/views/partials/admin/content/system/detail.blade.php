<div class="box box-primary collapse" id="box-detail" aria-expanded="false">
	<div class="box-header with-border">
		<h3 class="box-title">Thông Tin Chi Tiết</h3>

		<div class="box-tools pull-right">
			<button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
			</button>
			<button type="button" class="btn btn-box-tool" data-remove="collapse"><i class="fa fa-times"></i></button>
		</div>
	</div>
	<div class="box-body">
		<h4>Detail</h4>
		<div class="form-group">
			<label for="name">Chọn trang chi tiết</label>
			<select class="form-control number-topic" style="width: 100%;">
				@foreach ($system['list-detail'] as $key => $detail)
				<option value="{{ $key + 1 }}">{{ $detail }}</option>
				@endforeach
			</select>
		</div>
		<hr>
		<h4>Title</h4>
		<div class="form-group">
			<label for="name">Tiêu đề trang chi tiết</label>
			<input type="text" class="form-control" id="name" value="{{ $system['detail_title_1'] }}">
		</div>
		<div class="form-group">
			<label for="name">Thông tin về trang chi tiết</label>
			<input type="text" class="form-control" id="name" value="{{ $system['detail_info_1'] }}">
		</div>
		<hr>
		<h4>Main</h4>
		<div class="form-group">
			<label for="name">Kiểu trang chi tiết</label>
			<select class="form-control number-topic" style="width: 100%;">
				@foreach ($system['list-type-detail'] as $key => $type)
				<option value="{{ $key + 1 }}">{{ $type }}</option>
				@endforeach
			</select>
		</div>
		<hr>
		<h4>Comment</h4>
		<div class="form-group">
			<label for="name">Số lượng bình luận</label>
			<select class="form-control number-topic" style="width: 100%;">
				@for ($i = 1; $i <= 10; $i++)
					@if ($system['detail_comment'] == $i)
					<option value="{{ $i }}" selected="selected">{{ $i }}</option>
					@else
					<option value="{{ $i }}">{{ $i }}</option>
					@endif
				@endfor
			</select>
		</div>
		<div class="form-group">
			<label for="name">Số bình luận thêm</label>
			<select class="form-control number-topic" style="width: 100%;">
				@for ($i = 1; $i <= 10; $i++)
					@if ($system['detail_comment_add'] == $i)
					<option value="{{ $i }}" selected="selected">{{ $i }}</option>
					@else
					<option value="{{ $i }}">{{ $i }}</option>
					@endif
				@endfor
			</select>
		</div>
		<div class="form-group">
			<label for="name">Số bình luận phản hồi</label>
			<select class="form-control number-topic" style="width: 100%;">
				@for ($i = 1; $i <= 10; $i++)
					@if ($system['detail_comment_reply'] == $i)
					<option value="{{ $i }}" selected="selected">{{ $i }}</option>
					@else
					<option value="{{ $i }}">{{ $i }}</option>
					@endif
				@endfor
			</select>
		</div>
		<hr>
		<h4>Sidebar</h4>
		<div class="form-group">
			<label for="name">Số lượng khối</label>
			<select class="form-control number-topic" style="width: 100%;">
				@for ($i = 1; $i <= 6; $i++)
					@if ($system['detail_sidebar'] == $i)
					<option value="{{ $i }}" selected="selected">{{ $i }}</option>
					@else
					<option value="{{ $i }}">{{ $i }}</option>
					@endif
				@endfor
			</select>
		</div>
		<div class="row">
			<div class="col-xs-6">
				<div class="form-group">
					<label for="name">Kiểu khối 1</label>
					<select class="form-control type-topic1" style="width: 100%;">
						@foreach ($system['list-type-sidebar'] as $type)
							@if ($system['detail_sidebar_box_1'] == $type)
							<option selected="selected" value="{{ $type }}">{{ $type }}</option>
							@else
							<option value="{{ $type }}">{{ $type }}</option>
							@endif
						@endforeach
					</select>
				</div>
				<div class="form-group">
					<label for="name">Kiểu khối 2</label>
					<select class="form-control type-topic1" style="width: 100%;">
						@foreach ($system['list-type-sidebar'] as $type)
							@if ($system['detail_sidebar_box_2'] == $type)
							<option selected="selected" value="{{ $type }}">{{ $type }}</option>
							@else
							<option value="{{ $type }}">{{ $type }}</option>
							@endif
						@endforeach
					</select>
				</div>
				<div class="form-group">
					<label for="name">Kiểu khối 3</label>
					<select class="form-control type-topic1" style="width: 100%;">
						@foreach ($system['list-type-sidebar'] as $type)
							@if ($system['detail_sidebar_box_3'] == $type)
							<option selected="selected" value="{{ $type }}">{{ $type }}</option>
							@else
							<option value="{{ $type }}">{{ $type }}</option>
							@endif
						@endforeach
					</select>
				</div>
				<div class="form-group">
					<label for="name">Kiểu khối 4</label>
					<select class="form-control type-topic1" style="width: 100%;">
						@foreach ($system['list-type-sidebar'] as $type)
							@if ($system['detail_sidebar_box_4'] == $type)
							<option selected="selected" value="{{ $type }}">{{ $type }}</option>
							@else
							<option value="{{ $type }}">{{ $type }}</option>
							@endif
						@endforeach
					</select>
				</div>
				<div class="form-group">
					<label for="name">Kiểu khối 5</label>
					<select class="form-control type-topic1" style="width: 100%;">
						@foreach ($system['list-type-sidebar'] as $type)
							@if ($system['detail_sidebar_box_5'] == $type)
							<option selected="selected" value="{{ $type }}">{{ $type }}</option>
							@else
							<option value="{{ $type }}">{{ $type }}</option>
							@endif
						@endforeach
					</select>
				</div>
				<div class="form-group">
					<label for="name">Kiểu khối 6</label>
					<select class="form-control type-topic1" style="width: 100%;">
						@foreach ($system['list-type-sidebar'] as $type)
							@if ($system['detail_sidebar_box_6'] == $type)
							<option selected="selected" value="{{ $type }}">{{ $type }}</option>
							@else
							<option value="{{ $type }}">{{ $type }}</option>
							@endif
						@endforeach
					</select>
				</div>
			</div>
			<div class="col-xs-6">
				<div class="form-group">
					<label for="name">Số lượng hiển thị</label>
					<select class="form-control number-topic" {{ ($system['detail_sidebar_number_1'] == -1) ? 'disabled' : '' }} style="width: 100%;">
						@if ($system['detail_sidebar_number_1'] == -1)
						<option disabled="disabled" selected="selected" value="-1">-- Không đặt --</option>
						@else
						<option disabled="disabled" value="-1">-- Không đặt --</option>
						@endif
						{{-- check not yet set --}}
						@if ($system['detail_sidebar_number_1'] == 0)
						<option disabled="disabled" selected="selected" value="-1">-- Chọn số lượng --</option>
						@else
						<option disabled="disabled" value="-1">-- Chọn số lượng --</option>
						@endif
						{{-- show value selected --}}
						@for ($i = 1; $i <= 10; $i++)
							@if ($system['detail_sidebar_number_1'] == $i)
							<option value="{{ $i }}" selected="selected">{{ $i }}</option>
							@else
							<option value="{{ $i }}">{{ $i }}</option>
							@endif
						@endfor
					</select>
				</div>
				<div class="form-group">
					<label for="name">Số lượng hiển thị</label>
					<select class="form-control number-topic" {{ ($system['detail_sidebar_number_2'] == -1) ? 'disabled' : '' }} style="width: 100%;">
						@if ($system['detail_sidebar_number_2'] == -1)
						<option disabled="disabled" selected="selected" value="-1">-- Không đặt --</option>
						@else
						<option disabled="disabled" value="-1">-- Không đặt --</option>
						@endif
						{{-- check not yet set --}}
						@if ($system['detail_sidebar_number_2'] == 0)
						<option disabled="disabled" selected="selected" value="-1">-- Chọn số lượng --</option>
						@else
						<option disabled="disabled" value="-1">-- Chọn số lượng --</option>
						@endif
						{{-- show value selected --}}
						@for ($i = 1; $i <= 10; $i++)
							@if ($system['detail_sidebar_number_2'] == $i)
							<option value="{{ $i }}" selected="selected">{{ $i }}</option>
							@else
							<option value="{{ $i }}">{{ $i }}</option>
							@endif
						@endfor
					</select>
				</div>
				<div class="form-group">
					<label for="name">Số lượng hiển thị</label>
					<select class="form-control number-topic" {{ ($system['detail_sidebar_number_3'] == -1) ? 'disabled' : '' }} style="width: 100%;">
						@if ($system['detail_sidebar_number_3'] == -1)
						<option disabled="disabled" selected="selected" value="-1">-- Không đặt --</option>
						@else
						<option disabled="disabled" value="-1">-- Không đặt --</option>
						@endif
						{{-- check not yet set --}}
						@if ($system['detail_sidebar_number_3'] == 0)
						<option disabled="disabled" selected="selected" value="-1">-- Chọn số lượng --</option>
						@else
						<option disabled="disabled" value="-1">-- Chọn số lượng --</option>
						@endif
						{{-- show value selected --}}
						@for ($i = 1; $i <= 10; $i++)
							@if ($system['detail_sidebar_number_3'] == $i)
							<option value="{{ $i }}" selected="selected">{{ $i }}</option>
							@else
							<option value="{{ $i }}">{{ $i }}</option>
							@endif
						@endfor
					</select>
				</div>
				<div class="form-group">
					<label for="name">Số lượng hiển thị</label>
					<select class="form-control number-topic" {{ ($system['detail_sidebar_number_4'] == -1) ? 'disabled' : '' }} style="width: 100%;">
						@if ($system['detail_sidebar_number_4'] == -1)
						<option disabled="disabled" selected="selected" value="-1">-- Không đặt --</option>
						@else
						<option disabled="disabled" value="-1">-- Không đặt --</option>
						@endif
						{{-- check not yet set --}}
						@if ($system['detail_sidebar_number_4'] == 0)
						<option disabled="disabled" selected="selected" value="-1">-- Chọn số lượng --</option>
						@else
						<option disabled="disabled" value="-1">-- Chọn số lượng --</option>
						@endif
						{{-- show value selected --}}
						@for ($i = 1; $i <= 10; $i++)
							@if ($system['detail_sidebar_number_4'] == $i)
							<option value="{{ $i }}" selected="selected">{{ $i }}</option>
							@else
							<option value="{{ $i }}">{{ $i }}</option>
							@endif
						@endfor
					</select>
				</div>
				<div class="form-group">
					<label for="name">Số lượng hiển thị</label>
					<select class="form-control number-topic" {{ ($system['detail_sidebar_number_5'] == -1) ? 'disabled' : '' }} style="width: 100%;">
						@if ($system['detail_sidebar_number_5'] == -1)
						<option disabled="disabled" selected="selected" value="-1">-- Không đặt --</option>
						@else
						<option disabled="disabled" value="-1">-- Không đặt --</option>
						@endif
						{{-- check not yet set --}}
						@if ($system['detail_sidebar_number_5'] == 0)
						<option disabled="disabled" selected="selected" value="-1">-- Chọn số lượng --</option>
						@else
						<option disabled="disabled" value="-1">-- Chọn số lượng --</option>
						@endif
						{{-- show value selected --}}
						@for ($i = 1; $i <= 10; $i++)
							@if ($system['detail_sidebar_number_5'] == $i)
							<option value="{{ $i }}" selected="selected">{{ $i }}</option>
							@else
							<option value="{{ $i }}">{{ $i }}</option>
							@endif
						@endfor
					</select>
				</div>
				<div class="form-group">
					<label for="name">Số lượng hiển thị</label>
					<select class="form-control number-topic" {{ ($system['detail_sidebar_number_6'] == -1) ? 'disabled' : '' }} style="width: 100%;">
						@if ($system['detail_sidebar_number_6'] == -1)
						<option disabled="disabled" selected="selected" value="-1">-- Không đặt --</option>
						@else
						<option disabled="disabled" value="-1">-- Không đặt --</option>
						@endif
						{{-- check not yet set --}}
						@if ($system['detail_sidebar_number_6'] == 0)
						<option disabled="disabled" selected="selected" value="-1">-- Chọn số lượng --</option>
						@else
						<option disabled="disabled" value="-1">-- Chọn số lượng --</option>
						@endif
						{{-- show value selected --}}
						@for ($i = 1; $i <= 10; $i++)
							@if ($system['detail_sidebar_number_6'] == $i)
							<option value="{{ $i }}" selected="selected">{{ $i }}</option>
							@else
							<option value="{{ $i }}">{{ $i }}</option>
							@endif
						@endfor
					</select>
				</div>
			</div>
		</div>
	</div>
	<div class="box-footer">
		<button class="btn btn-primary">Thay đổi</button>
		<button class="btn btn-success">Hoàn tác</button>
		<button class="btn btn-info">Xem thử</button>
	</div>
</div>
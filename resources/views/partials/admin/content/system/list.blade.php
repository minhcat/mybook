<div class="box box-primary collapse" id="box-list" aria-expanded="false">
	<div class="box-header with-border">
		<h3 class="box-title">Các Danh Sách</h3>

		<div class="box-tools pull-right">
			<button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
			</button>
			<button type="button" class="btn btn-box-tool" data-remove="collapse"><i class="fa fa-times"></i></button>
		</div>
	</div>
	<div class="box-body">
		<h4>List</h4>
		<div class="form-group">
			<label for="name">Chọn danh sách</label>
			<select class="form-control select-list" style="width: 100%;">
				@foreach ($system['list-list-book'] as $key => $list)
					<option value="{{ $key + 1 }}">{{ $list }}</option>
				@endforeach
			</select>
		</div>
		<hr>
		<h4>Title</h4>
		<div class="form-group">
			<label for="name">Tiêu đề danh sách</label>
			<input type="text" class="form-control" name="list_title" id="name" value="{{ $system['list_title_3'] }}">
		</div>
		<div class="form-group">
			<label for="name">Thông tin về danh sách</label>
			<input type="text" class="form-control" name="list_info" id="name" value="{{ $system['list_info_1'] }}">
		</div>
		<hr>
		<h4>Main</h4>
		<div class="form-group">
			<label for="name">Kiểu danh sách</label>
			<select class="form-control number-topic" name="list_type" style="width: 100%;">
				@foreach ($system['list-type-list'] as $key => $list)
					@if ($system['list_type_1'] == $list)
					<option value="{{ $key + 1 }}" selected="selected">{{ $list }}</option>
					@else
					<option value="{{ $key + 1 }}">{{ $list }}</option>
					@endif
				@endforeach
			</select>
		</div>
		<div class="form-group">
			<label for="name">Số lượng hiển thị</label>
			<select class="form-control number-topic" name="list_number" style="width: 100%;">
				@for ($i = 5; $i <= 20; $i++)
					@if ($system['list_number_1'] == $i)
					<option value="{{$i}}" selected="selected">{{ $i }}</option>
					@else
					<option value="{{$i}}">{{ $i }}</option>
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
					@if ($system['list_sidebar'] == $i)
					<option selected="selected" value="{{ $i }}">{{ $i }}</option>
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
							@if ($system['list_box_type_1'] == $type)
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
							@if ($system['list_box_type_2'] == $type)
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
							@if ($system['list_box_type_3'] == $type)
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
							@if ($system['list_box_type_4'] == $type)
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
							@if ($system['list_box_type_5'] == $type)
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
							@if ($system['list_box_type_6'] == $type)
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
					<select class="form-control number-topic" {{ ($system['list_box_number_6'] == -1) ? 'disabled' : '' }} style="width: 100%;">
						@if ($system['list_box_number_1'] == -1)
						<option disabled="disabled" selected="selected" value="-1">-- Không đặt --</option>
						@else
						<option disabled="disabled" value="-1">-- Không đặt --</option>
						@endif
						{{-- check not yet set --}}
						@if ($system['list_box_number_1'] == 0)
						<option disabled="disabled" selected="selected" value="-1">-- Chọn số lượng --</option>
						@else
						<option disabled="disabled" value="-1">-- Chọn số lượng --</option>
						@endif
						{{-- show value selected --}}
						@for ($i = 1; $i <= 10; $i++)
							@if ($system['list_box_number_1'] == $i)
							<option value="{{ $i }}" selected="selected">{{ $i }}</option>
							@else
							<option value="{{ $i }}">{{ $i }}</option>
							@endif
						@endfor
					</select>
				</div>
				<div class="form-group">
					<label for="name">Số lượng hiển thị</label>
					<select class="form-control number-topic" {{ ($system['list_box_number_2'] == -1) ? 'disabled' : '' }} style="width: 100%;">
						@if ($system['list_box_number_2'] == -1)
						<option disabled="disabled" selected="selected" value="-1">-- Không đặt --</option>
						@else
						<option disabled="disabled" value="-1">-- Không đặt --</option>
						@endif
						{{-- check not yet set --}}
						@if ($system['list_box_number_2'] == 0)
						<option disabled="disabled" selected="selected" value="-1">-- Chọn số lượng --</option>
						@else
						<option disabled="disabled" value="-1">-- Chọn số lượng --</option>
						@endif
						{{-- show value selected --}}
						@for ($i = 1; $i <= 10; $i++)
							@if ($system['list_box_number_2'] == $i)
							<option value="{{ $i }}" selected="selected">{{ $i }}</option>
							@else
							<option value="{{ $i }}">{{ $i }}</option>
							@endif
						@endfor
					</select>
				</div>
				<div class="form-group">
					<label for="name">Số lượng hiển thị</label>
					<select class="form-control number-topic" {{ ($system['list_box_number_3'] == -1) ? 'disabled' : '' }} style="width: 100%;">
						@if ($system['list_box_number_3'] == -1)
						<option disabled="disabled" selected="selected" value="-1">-- Không đặt --</option>
						@else
						<option disabled="disabled" value="-1">-- Không đặt --</option>
						@endif
						{{-- check not yet set --}}
						@if ($system['list_box_number_3'] == 0)
						<option disabled="disabled" selected="selected" value="-1">-- Chọn số lượng --</option>
						@else
						<option disabled="disabled" value="-1">-- Chọn số lượng --</option>
						@endif
						{{-- show value selected --}}
						@for ($i = 1; $i <= 10; $i++)
							@if ($system['list_box_number_3'] == $i)
							<option value="{{ $i }}" selected="selected">{{ $i }}</option>
							@else
							<option value="{{ $i }}">{{ $i }}</option>
							@endif
						@endfor
					</select>
				</div>
				<div class="form-group">
					<label for="name">Số lượng hiển thị</label>
					<select class="form-control number-topic" {{ ($system['list_box_number_4'] == -1) ? 'disabled' : '' }} style="width: 100%;">
						@if ($system['list_box_number_4'] == -1)
						<option disabled="disabled" selected="selected" value="-1">-- Không đặt --</option>
						@else
						<option disabled="disabled" value="-1">-- Không đặt --</option>
						@endif
						{{-- check not yet set --}}
						@if ($system['list_box_number_4'] == 0)
						<option disabled="disabled" selected="selected" value="-1">-- Chọn số lượng --</option>
						@else
						<option disabled="disabled" value="-1">-- Chọn số lượng --</option>
						@endif
						{{-- show value selected --}}
						@for ($i = 1; $i <= 10; $i++)
							@if ($system['list_box_number_4'] == $i)
							<option value="{{ $i }}" selected="selected">{{ $i }}</option>
							@else
							<option value="{{ $i }}">{{ $i }}</option>
							@endif
						@endfor
					</select>
				</div>
				<div class="form-group">
					<label for="name">Số lượng hiển thị</label>
					<select class="form-control number-topic" {{ ($system['list_box_number_5'] == -1) ? 'disabled' : '' }} style="width: 100%;">
						@if ($system['list_box_number_5'] == -1)
						<option disabled="disabled" selected="selected" value="-1">-- Không đặt --</option>
						@else
						<option disabled="disabled" value="-1">-- Không đặt --</option>
						@endif
						{{-- check not yet set --}}
						@if ($system['list_box_number_5'] == 0)
						<option disabled="disabled" selected="selected" value="-1">-- Chọn số lượng --</option>
						@else
						<option disabled="disabled" value="-1">-- Chọn số lượng --</option>
						@endif
						{{-- show value selected --}}
						@for ($i = 1; $i <= 10; $i++)
							@if ($system['list_box_number_5'] == $i)
							<option value="{{ $i }}" selected="selected">{{ $i }}</option>
							@else
							<option value="{{ $i }}">{{ $i }}</option>
							@endif
						@endfor
					</select>
				</div>
				<div class="form-group">
					<label for="name">Số lượng hiển thị</label>
					<select class="form-control number-topic" {{ ($system['list_box_number_6'] == -1) ? 'disabled' : '' }} style="width: 100%;">
						{{-- check unset --}}
						@if ($system['list_box_number_6'] == -1)
						<option disabled="disabled" selected="selected" value="-1">-- Không đặt --</option>
						@else
						<option disabled="disabled" value="-1">-- Không đặt --</option>
						@endif
						{{-- check not yet set --}}
						@if ($system['list_box_number_6'] == 0)
						<option disabled="disabled" selected="selected" value="-1">-- Chọn số lượng --</option>
						@else
						<option disabled="disabled" value="-1">-- Chọn số lượng --</option>
						@endif
						{{-- show value selected --}}
						@for ($i = 1; $i <= 10; $i++)
							@if ($system['list_box_number_6'] == $i)
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
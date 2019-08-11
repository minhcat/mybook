<div class="box box-primary collapse" id="box-index" aria-expanded="false">
<form action="{{ url('/admin/super-admin/edit_system_index') }}" method="POST">
	<div class="box-header with-border">
		<h3 class="box-title">Trang Chủ</h3>

		<div class="box-tools pull-right">
			<button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
			</button>
			<button type="button" class="btn btn-box-tool" data-remove="collapse"><i class="fa fa-times"></i></button>
		</div>
	</div>
	<div class="box-body">
		<h4>Slider</h4>
		<div class="form-group">
			<label for="name">Số lượng hình</label>
			<select class="form-control number-topic" style="width: 100%;">
				@for ($i = 1; $i <= $system['slider_max_images']; $i++)
					@if ($system['slider_select_images'] == $i)
					<option selected="selected" value="{{ $i }}">{{ $i }}</option>
					@else
					<option value="{{ $i }}">{{ $i }}</option>
					@endif
				@endfor
			</select>
		</div>
		<div class="form-group">
			<label for="name">Hình ảnh</label>
			<br>
			<div class="slider-image">
				@foreach ($sliders as $slider)
				<img src="{{ asset('image/sliders/'.$slider->name.'.jpg') }}" width="200px">
				@endforeach
			</div>
			<br>
			<label class="btn btn-primary">
				Thêm hình
				<input id="slider" type="file" name="slider">
			</label>
		</div>
		<hr>
		<h4>Main</h4>
		<div class="form-group">
			<label for="name">Số lượng khối</label>
			<select class="form-control number-topic" style="width: 100%;">
				@for ($i = 1; $i <= $system['main_max_topic']; $i++)
					@if ($system['main_number_topic'] == $i)
					<option value="{{$i}}" selected="selected">{{ $i }}</option>
					@else
					<option value="{{$i}}">{{ $i }}</option>
					@endif
				@endfor
			</select>
		</div>
		
		<div class="row">
			<div class="col-xs-4">
				<!-- topic 1 -->
				<div class="form-group">
					<label for="name">Tiêu đề khối 1</label>
					<input type="text" class="form-control" id="name" value="{{ $system['topic_name_1'] }}">
				</div>
				<!-- topic 2 -->
				<div class="form-group">
					<label for="name">Tiêu đề khối 2</label>
					<input type="text" class="form-control" id="name" value="{{ $system['topic_name_2'] }}">
				</div>
				<!-- topic 3 -->
				<div class="form-group">
					<label for="name">Tiêu đề khối 3</label>
					<input type="text" class="form-control" id="name" value="{{ $system['topic_name_3'] }}">
				</div>
				<!-- topic 4 -->
				<div class="form-group">
					<label for="name">Tiêu đề khối 4</label>
					<input type="text" class="form-control" id="name" value="{{ $system['topic_name_4'] }}">
				</div>
				<!-- topic 5 -->
				<div class="form-group hide">
					<label for="name">Tiêu đề khối 5</label>
					<input type="text" class="form-control" id="name" value="{{ $system['topic_name_5'] }}">
				</div>
				<!-- topic 6 -->
				<div class="form-group hide">
					<label for="name">Tiêu đề khối 6</label>
					<input type="text" class="form-control" id="name" value="{{ $system['topic_name_6'] }}">
				</div>
			</div>
			<div class="col-xs-4">
				<!-- topic 1 -->
				<div class="form-group">
					<label for="name">Kiểu khối 1</label>
					<select class="form-control type-topic1" style="width: 100%;">
						@foreach ($system['list-type-topic'] as $type)
							@if ($system['topic_type_1'] == $type)
							<option value="{{ $type }}" selected="selected">{{ $type }}</option>
							@else
							<option value="{{ $type }}">{{ $type }}</option>
							@endif
						@endforeach
					</select>
				</div>
				<!-- topic 2 -->
				<div class="form-group">
					<label for="name">Kiểu khối 2</label>
					<select class="form-control type-topic1" style="width: 100%;">
						@foreach ($system['list-type-topic'] as $type)
							@if ($system['topic_type_2'] == $type)
							<option value="{{ $type }}" selected="selected">{{ $type }}</option>
							@else
							<option value="{{ $type }}">{{ $type }}</option>
							@endif
						@endforeach
					</select>
				</div>
				<!-- topic 3 -->
				<div class="form-group">
					<label for="name">Kiểu khối 3</label>
					<select class="form-control type-topic1" style="width: 100%;">
						@foreach ($system['list-type-topic'] as $type)
							@if ($system['topic_type_3'] == $type)
							<option value="{{ $type }}" selected="selected">{{ $type }}</option>
							@else
							<option value="{{ $type }}">{{ $type }}</option>
							@endif
						@endforeach
					</select>
				</div>
				<!-- topic 4 -->
				<div class="form-group">
					<label for="name">Kiểu khối 4</label>
					<select class="form-control type-topic1" style="width: 100%;">
						@foreach ($system['list-type-topic'] as $type)
							@if ($system['topic_type_4'] == $type)
							<option value="{{ $type }}" selected="selected">{{ $type }}</option>
							@else
							<option value="{{ $type }}">{{ $type }}</option>
							@endif
						@endforeach
					</select>
				</div>
				<!-- topic 5 -->
				<div class="form-group hide">
					<label for="name">Kiểu khối 5</label>
					<select class="form-control type-topic1" style="width: 100%;">
						@foreach ($system['list-type-topic'] as $type)
							@if ($system['topic_type_5'] == $type)
							<option value="{{ $type }}" selected="selected">{{ $type }}</option>
							@else
							<option value="{{ $type }}">{{ $type }}</option>
							@endif
						@endforeach
						@if ($system['topic_type_5'] == '')
						<option disabled="disabled" selected="selected">-- Chọn kiểu --</option>
						@endif
					</select>
				</div>
				<!-- topic 6 -->
				<div class="form-group hide">
					<label for="name">Kiểu khối 6</label>
					<select class="form-control type-topic1" style="width: 100%;">
						@foreach ($system['list-type-topic'] as $type)
							@if ($system['topic_type_6'] == $type)
							<option value="{{ $type }}" selected="selected">{{ $type }}</option>
							@else
							<option value="{{ $type }}">{{ $type }}</option>
							@endif
						@endforeach
						@if ($system['topic_type_6'] == '')
						<option disabled="disabled" selected="selected">-- Chọn kiểu --</option>
						@endif
					</select>
				</div>
			</div>
			<div class="col-xs-4">
				<!-- topic 1 -->
				<div class="form-group">
					<label for="name">Số lượng hiển thị</label>
					<select class="form-control type-topic1" style="width: 100%;">
						@for ($i = 4; $i < $system['topic_number_max']; $i+=4)
							@if ($system['topic_number_1'] == $i)
							<option value="{{ $i }}" selected="selected">{{ $i }}</option>
							@else
							<option value="{{ $i }}">{{ $i }}</option>
							@endif
						@endfor
					</select>
				</div>
				<!-- topic 2 -->
				<div class="form-group">
					<label for="name">Số lượng hiển thị</label>
					<select class="form-control type-topic2" style="width: 100%;">
						@for ($i = 4; $i < $system['topic_number_max']; $i+=4)
							@if ($system['topic_number_2'] == $i)
							<option value="{{ $i }}" selected="selected">{{ $i }}</option>
							@else
							<option value="{{ $i }}">{{ $i }}</option>
							@endif
						@endfor
					</select>
				</div>
				<!-- topic 3 -->
				<div class="form-group">
					<label for="name">Số lượng hiển thị</label>
					<select class="form-control type-topic3" style="width: 100%;">
						@for ($i = 4; $i < $system['topic_number_max']; $i+=4)
							@if ($system['topic_number_3'] == $i)
							<option value="{{ $i }}" selected="selected">{{ $i }}</option>
							@else
							<option value="{{ $i }}">{{ $i }}</option>
							@endif
						@endfor
					</select>
				</div>
				<!-- topic 4 -->
				<div class="form-group">
					<label for="name">Số lượng hiển thị</label>
					<select class="form-control type-topic4" style="width: 100%;">
						@for ($i = 4; $i < $system['topic_number_max']; $i+=4)
							@if ($system['topic_number_4'] == $i)
							<option value="{{ $i }}" selected="selected">{{ $i }}</option>
							@else
							<option value="{{ $i }}">{{ $i }}</option>
							@endif
						@endfor
					</select>
				</div>
				<!-- topic 5 -->
				<div class="form-group hide">
					<label for="name">Số lượng hiển thị</label>
					<select class="form-control type-topic5" style="width: 100%;">
						@for ($i = 4; $i < $system['topic_number_max']; $i+=4)
							@if ($system['topic_number_5'] == $i)
							<option value="{{ $i }}" selected="selected">{{ $i }}</option>
							@else
							<option value="{{ $i }}">{{ $i }}</option>
							@endif
						@endfor
						@if ($system['topic_number_5'] == 0)
						<option disabled="disabled" selected="selected">-- Chọn số lượng --</option>
						@endif
					</select>
				</div>
				<!-- topic 6 -->
				<div class="form-group hide">
					<label for="name">Số lượng hiển thị</label>
					<select class="form-control type-topic6" style="width: 100%;">
						@for ($i = 4; $i < $system['topic_number_max']; $i+=4)
							@if ($system['topic_number_6'] == $i)
							<option value="{{ $i }}" selected="selected">{{ $i }}</option>
							@else
							<option value="{{ $i }}">{{ $i }}</option>
							@endif
						@endfor
						@if ($system['topic_number_6'] == 0)
						<option disabled="disabled" selected="selected">-- Chọn số lượng --</option>
						@endif
					</select>
				</div>
			</div>
		</div>
		<hr>
		<h4>Sidebar</h4>
		<div class="form-group">
			<label for="name">Số lượng khối</label>
			<select class="form-control number-topic" style="width: 100%;">
				@for ($i = 1; $i <= $system['sidebar_max_box']; $i++)
					@if ($system['sidebar_number_box'] == $i)
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
							@if ($system['sidebar_box_type_1'] == $type)
							<option value="{{ $type }}" selected="selected">{{ $type }}</option>
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
							@if ($system['sidebar_box_type_2'] == $type)
							<option value="{{ $type }}" selected="selected">{{ $type }}</option>
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
							@if ($system['sidebar_box_type_3'] == $type)
							<option value="{{ $type }}" selected="selected">{{ $type }}</option>
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
							@if ($system['sidebar_box_type_4'] == $type)
							<option value="{{ $type }}" selected="selected">{{ $type }}</option>
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
							@if ($system['sidebar_box_type_5'] == $type)
							<option value="{{ $type }}" selected="selected">{{ $type }}</option>
							@else
							<option value="{{ $type }}">{{ $type }}</option>
							@endif
						@endforeach
					</select>
				</div>
				<div class="form-group hide">
					<label for="name">Kiểu khối 6</label>
					<select class="form-control type-topic1" style="width: 100%;">
						@foreach ($system['list-type-sidebar'] as $type)
							@if ($system['sidebar_box_type_6'] == $type)
							<option value="{{ $type }}" selected="selected">{{ $type }}</option>
							@else
							<option value="{{ $type }}">{{ $type }}</option>
							@endif
						@endforeach
						@if ($system['sidebar_box_type_6'] == '')
						<option disabled="disabled" selected="selected">-- Chọn kiểu --</option>
						@endif
					</select>
				</div>
			</div>
			<div class="col-xs-6">
				<div class="form-group box1">
					<label for="name">Số lượng hiển thị</label>
					<select class="form-control number-topic" {{ ($system['sidebar_box_number_1'] == -1) ? 'disabled' : '' }} style="width: 100%;">
						@if ($system['sidebar_box_number_1'] == -1)
						<option selected="selected">-- Không đặt --</option>
						@elseif ($system['sidebar_box_number_6'] == 0)
						<option disabled="disabled" selected="selected">-- Chọn số lượng --</option>
						@endif
						@for ($i = $system['sidebar_number_min']; $i <= $system['sidebar_number_max']; $i++)
							@if ($system['sidebar_box_number_1'] == $i)
							<option value="{{ $i }}" selected="selected">{{ $i }}</option>
							@else
							<option value="{{ $i }}">{{ $i }}</option>
							@endif
						@endfor
					</select>
				</div>
				<div class="form-group box2">
					<label for="name">Số lượng hiển thị</label>
					<select class="form-control number-topic" {{ ($system['sidebar_box_number_2'] == -1) ? 'disabled' : '' }} style="width: 100%;">
						@if ($system['sidebar_box_number_2'] == -1)
						<option selected="selected">-- Không đặt --</option>
						@elseif ($system['sidebar_box_number_6'] == 0)
						<option disabled="disabled" selected="selected">-- Chọn số lượng --</option>
						@endif
						@for ($i = $system['sidebar_number_min']; $i <= $system['sidebar_number_max']; $i++)
							@if ($system['sidebar_box_number_2'] == $i)
							<option value="{{ $i }}" selected="selected">{{ $i }}</option>
							@else
							<option value="{{ $i }}">{{ $i }}</option>
							@endif
						@endfor
					</select>
				</div>
				<div class="form-group box3">
					<label for="name">Số lượng hiển thị</label>
					<select class="form-control number-topic" {{ ($system['sidebar_box_number_3'] == -1) ? 'disabled' : '' }} style="width: 100%;">
						@if ($system['sidebar_box_number_3'] == -1)
						<option selected="selected">-- Không đặt --</option>
						@elseif ($system['sidebar_box_number_6'] == 0)
						<option disabled="disabled" selected="selected">-- Chọn số lượng --</option>
						@endif
						@for ($i = $system['sidebar_number_min']; $i <= $system['sidebar_number_max']; $i++)
							@if ($system['sidebar_box_number_3'] == $i)
							<option value="{{ $i }}" selected="selected">{{ $i }}</option>
							@else
							<option value="{{ $i }}">{{ $i }}</option>
							@endif
						@endfor
					</select>
				</div>
				<div class="form-group box4">
					<label for="name">Số lượng hiển thị</label>
					<select class="form-control number-topic" {{ ($system['sidebar_box_number_4'] == -1) ? 'disabled' : '' }} style="width: 100%;">
						@if ($system['sidebar_box_number_4'] == -1)
						<option selected="selected">-- Không đặt --</option>
						@elseif ($system['sidebar_box_number_6'] == 0)
						<option disabled="disabled" selected="selected">-- Chọn số lượng --</option>
						@endif
						@for ($i = $system['sidebar_number_min']; $i <= $system['sidebar_number_max']; $i++)
							@if ($system['sidebar_box_number_4'] == $i)
							<option value="{{ $i }}" selected="selected">{{ $i }}</option>
							@else
							<option value="{{ $i }}">{{ $i }}</option>
							@endif
						@endfor
					</select>
				</div>
				<div class="form-group box5">
					<label for="name">Số lượng hiển thị</label>
					<select class="form-control number-topic" {{ ($system['sidebar_box_number_5'] == -1) ? 'disabled' : '' }} style="width: 100%;">
						@if ($system['sidebar_box_number_5'] == -1)
						<option selected="selected">-- Không đặt --</option>
						@elseif ($system['sidebar_box_number_6'] == 0)
						<option disabled="disabled" selected="selected">-- Chọn số lượng --</option>
						@endif
						@for ($i = $system['sidebar_number_min']; $i <= $system['sidebar_number_max']; $i++)
							@if ($system['sidebar_box_number_5'] == $i)
							<option value="{{ $i }}" selected="selected">{{ $i }}</option>
							@else
							<option value="{{ $i }}">{{ $i }}</option>
							@endif
						@endfor
					</select>
				</div>
				<div class="form-group box6 hide">
					<label for="name">Số lượng hiển thị</label>
					<select class="form-control number-topic" {{ ($system['sidebar_box_number_6'] == -1) ? 'disabled' : '' }} style="width: 100%;">
						@if ($system['sidebar_box_number_6'] == -1)
						<option selected="selected">-- Không đặt --</option>
						@elseif ($system['sidebar_box_number_6'] == 0)
						<option disabled="disabled" selected="selected">-- Chọn số lượng --</option>
						@endif
						@for ($i = $system['sidebar_number_min']; $i <= $system['sidebar_number_max']; $i++)
							@if ($system['sidebar_box_number_5'] == $i)
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
</form>
</div>
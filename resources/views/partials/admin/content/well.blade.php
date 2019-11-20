@if (\Session::has('danger'))
<div class="well well-danger collapse in">
	<button type="button" class="btn btn-box-tool btn-close pull-right"><i class="fa fa-times"></i></button>
	<h4>Thông Báo!</h4>

	<p>{{ \Session::get('danger') }}</p>

</div>
@elseif (\Session::has('success'))
<div class="well well-success collapse in">
	<button type="button" class="btn btn-box-tool btn-close pull-right"><i class="fa fa-times"></i></button>
	<h4>Thông Báo!</h4>

	<p>{{ \Session::get('success') }}</p>

</div>
@elseif ($errors->any())
<div class="well well-danger collapse in">
	<button type="button" class="btn btn-box-tool btn-close pull-right"><i class="fa fa-times"></i></button>
	<h4>Thông Báo!</h4>

	<p>Có lỗi khi chạy tính năng</p>
	@foreach ($errors->all() as $error)
	<p>{{ $error }}</p>
	@endforeach
</div>
@else
<div class="well well-success collapse">
	<button type="button" class="btn btn-box-tool btn-close pull-right"><i class="fa fa-times"></i></button>
	<h4>Thông Báo!</h4>

	<p></p>
</div>
<div class="well well-danger collapse">
	<button type="button" class="btn btn-box-tool btn-close pull-right"><i class="fa fa-times"></i></button>
	<h4>Thông Báo!</h4>

	<p></p>
</div>
@endif
@if (\Session::has('danger'))
<div class="well well-danger collapse in">
	<button type="button" class="btn btn-box-tool btn-close pull-right"><i class="fa fa-times"></i></button>
	<h4>Thông Báo!</h4>

	<p>{{ \Session::get('danger') }}</p>

</div>
@elseif ($errors->any())
<div class="well well-danger collapse in">
	<button type="button" class="btn btn-box-tool btn-close pull-right"><i class="fa fa-times"></i></button>
	<h4>Thông Báo!</h4>

	<p>Thêm truyện không thành công</p>

</div>
@endif
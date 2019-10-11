@foreach ($noties as $key => $noti)
<div class="box box-primary collapse" id="box-noti-detail-{{ $noti->id }}" aria-expanded="false"  data-with="#box-book-list-small">
	<div class="box-header with-border">
		<h3 class="box-title">Thông Báo</h3>

		<div class="box-tools pull-right">
			<button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
			</button>
			<button type="button" class="btn btn-box-tool" data-remove="collapse"><i class="fa fa-times"></i></button>
		</div>
	</div>
	<div class="box-body">
		<p><strong>Tiêu đề:</strong> {{ $noti->title }} - {{ $noti->type }}</p>
		<p><strong>{{ $noti->send_name }}</strong> đến <strong>{{ $noti->receive_name }}</strong> - {{ date_format(date_create($noti->date), 'd/m/Y') }}</p>
		<p><strong>Nội dung:</strong> 
			{!! $noti->content !!}
		</p>
	</div>
</div>
@endforeach
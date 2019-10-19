@foreach ($noties as $key => $noti)
<div class="box box-primary collapse" id="box-noti-detail-{{ $noti->id }}" aria-expanded="false"  data-with="#box-book-list-small">
	<div class="box-header with-border">
		<h3 class="box-title">{{ $noti->title }} - {{ $noti->type }}</h3>

		<div class="box-tools pull-right">
			<button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
			</button>
			<button type="button" class="btn btn-box-tool" data-remove="collapse"><i class="fa fa-times"></i></button>
		</div>
	</div>
	<div class="box-body" style="height: 280px;">
		<p><strong></strong> đến <strong></strong> - {{ date_format(date_create($noti->date), 'd/m/Y') }}</p>
		<p><strong>Nội dung:</strong> 
			{!! $noti->content !!}
		</p>
	</div>
	<div class="box-footer">
		<button class="btn btn-danger" data-toggle="modal" data-target="#modal-remove-mail">Xóa</button>
	</div>
</div>
@endforeach
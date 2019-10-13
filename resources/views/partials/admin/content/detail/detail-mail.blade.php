@foreach ($mails as $key => $mail)
<div class="box box-primary collapse" id="box-mail-detail-{{ $mail->id }}" aria-expanded="false"  data-with="#box-book-list-small">
	<div class="box-header with-border">
		<h3 class="box-title">{{ $mail->title }}</h3>

		<div class="box-tools pull-right">
			<button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
			</button>
			<button type="button" class="btn btn-box-tool" data-remove="collapse"><i class="fa fa-times"></i></button>
		</div>
	</div>
	<div class="box-body" style="height: 250px;">
		<p><strong>{{ $mail->send_name }}</strong> gữi đến <strong>{{ $mail->receive_name }}</strong> - {{ date_format(date_create($mail->date), 'd/m/Y') }}</p>
		<p><strong>Nội dung:</strong><br>
			{!! $mail->content !!}
		</p>
	</div>
	<div class="box-footer">
		<button class="btn btn-success box-link" data-target="#box-book-edit-" data-unclose="#box-book-list-small">Phản hồi</button>
		<button class="btn btn-danger remove mail" data-toggle="modal" data-target="#modal-remove-mail" data-id="{{ $mail->id }}">Xóa</button>
	</div>
</div>
@endforeach
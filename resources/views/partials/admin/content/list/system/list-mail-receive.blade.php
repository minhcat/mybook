<div class="box box-primary collapse" id="box-mail-receive" aria-expanded="false">
	<div class="box-header with-border">
		<h3 class="box-title">Danh sách mail gữi đến</h3>

		<div class="box-tools pull-right">
			<button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
			</button>
			<button type="button" class="btn btn-box-tool" data-remove="collapse"><i class="fa fa-times"></i></button>
		</div>
	</div>
	<!-- /.box-header -->
	<div class="box-body table-responsive">
		<table class="table table-bordered table-hover table-striped" id="table-mail-receive">
			<thead>
				<tr>
					<th>Stt</th>
					<th>Tựa đề</th>
					<th>Người gữi</th>
					<th>Nội dung</th>
					<th>Ngày gữi</th>
					<th class="column-fixed-80">Tùy chọn</th>
				</tr>
			</thead>
			<tbody>
				@foreach ($mails_receive as $key => $mail)
				<tr>
					<td>{{ $key + 1 }}</td>
					<td>{{ $mail->title }}</td>
					<td>{{ $mail->send_name }}</td>
					<td>{{ $mail->content }}</td>
					<td>{{ date_format(date_create($mail->date), 'd-m-Y') }}</td>
					<td>
						<button class="btn btn-primary box-link" data-target="#box-mail-detail-{{ $mail->id }}" data-small="mail">Xem</button>
						<button class="btn btn-danger" data-toggle="modal" data-target="#modal-checkword-remove">Xóa</button>
					</td>
				</tr>
				@endforeach
			</tbody>
		</table>
	</div>
	<!-- /.box-body -->
</div>
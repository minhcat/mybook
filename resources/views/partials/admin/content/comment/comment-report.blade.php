<div class="box box-primary direct-chat direct-chat-primary collapse" id="box-comment-report" aria-expanded="false">
	<!-- box header -->
	<div class="box-header with-border">
		<h3 class="box-title">Bình Luận Bị Báo Cáo</h3>

		<div class="box-tools pull-right">
			<button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
			</button>
			<button type="button" class="btn btn-box-tool" data-remove="collapse"><i class="fa fa-times"></i></button>
		</div>
	</div>
	<!-- /box header -->
	<!-- box body -->
	<div class="box-body">
		<!-- Conversations are loaded here -->
		<div class="direct-chat-messages">
			<!-- Message. Default to the left -->
			@foreach ($report_comments as $comment)
			<div class="direct-chat-msg">
				<div class="direct-chat-info clearfix">
					<span class="direct-chat-name pull-left">{{ $comment->user_reported }} - <span class="direct-chat-timestamp">{{ ($comment->page == 'author') ? 'Tác giả' : (($comment->page == 'character') ? 'Nhân vật' : (($comment->page == 'user') ? 'Người dùng' : (($comment->page == 'trans') ? 'Nhóm dịch' : 'Truyện'))) }} {{ $comment->page_name }}</span> - <span class="direct-chat-timestamp">{{ date_format(date_create($comment->date), 'H:i d-m-Y') }}</span></span>
				</div>
				<!-- /.direct-chat-info -->
				<img class="direct-chat-img" src="{{ asset('image/users/'.$comment->user_image.'.jpg') }}" alt="Message User Image">
				<!-- /.direct-chat-img -->
				<div class="direct-chat-text">
				{{ $comment->comment }}
				<hr>
				Nội dung báo cáo: {{ $comment->content }} - {{ $comment->user_report }}
				</div>
				<!-- tag comment -->
				<div class="direct-chat-button mt-15">
					<span class="fa fa-plus bg-blue" title="thêm vào danh sách kiểm tra" data-toggle="modal" data-target="#modal-comment-save"></span>
					<span class="fa fa-flag bg-orange" title="phạt người dùng này" data-toggle="modal" data-target="#modal-comment-punish"></span>
					<span class="fa fa-ban bg-red" title="cấm đăng nhập người dùng này" data-toggle="modal" data-target="#modal-comment-ban"></span>
				</div>

				<!-- /.direct-chat-text -->
			</div>
			@endforeach
			<!-- /.direct-chat-msg -->
		</div>
		<!--/.direct-chat-messages-->

		<!-- /.direct-chat-pane -->
	</div>
</div>
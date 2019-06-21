@foreach ($comments_books_follow as $key => $book)
<div class="box box-primary direct-chat direct-chat-primary collapse" id="box-book-comment-{{ $key+1 }}" aria-expanded="false" data-with="#box-book-follow-small">
	<!-- box header -->
	<div class="box-header with-border">
		<h3 class="box-title">Bình Luận Trên Truyện {{ $book->name_book }}</h3>

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
			@foreach ($book->comments as $comment)
			<div class="direct-chat-msg">
				<div class="direct-chat-info clearfix">
					<span class="direct-chat-name pull-left">{{ $comment->name }} - <span class="direct-chat-timestamp">Overlord chap 10</span> - <span class="direct-chat-timestamp">{{ date_format(date_create($comment->datetime), 'd-m-Y') }}</span></span>
				</div>
				<!-- /.direct-chat-info -->
				<img class="direct-chat-img" src="{{ asset('image/users/'.$comment->image.'.jpg') }}" alt="Message User Image">
				<!-- /.direct-chat-img -->
				<div class="direct-chat-text">
				{{ $comment->content }}
				</div>
				<!-- tag comment -->
				<div class="direct-chat-button">
					<span class="fa fa-plus bg-blue" title="thêm vào danh sách kiểm tra" data-toggle="modal" data-target="#modal-comment-save"></span>
					<span class="fa fa-flag bg-orange" title="phạt người dùng này" data-toggle="modal" data-target="#modal-comment-punish"></span>
					<span class="fa fa-ban bg-red" title="cấm đăng nhập người dùng này" data-toggle="modal" data-target="#modal-comment-ban"></span>
				</div>

				<!-- /.direct-chat-text -->
			</div>
			<!-- /.direct-chat-msg -->
			@endforeach
		<!-- /.direct-chat-pane -->
		</div>
	</div>
</div>
@endforeach
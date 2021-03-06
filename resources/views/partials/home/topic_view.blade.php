<div class="topic clearfix view">
	<div class="topic-header">Bảng Xếp Hạng</div>
	<div class="clearfix"></div>
	<div class="topic-content">
		<div class="row">
			@foreach($books_view as $book)
				<div class="book col-lg-3 col-md-3 col-sm-6 col-xs-6 col-6">
					<div class="book-content">
						<img src="image/books/{{ $book->image }}.jpg">
						<div class="book-info">
							<div class="name">{{ $book->name }}</div>
							<div class="group row">
								<div class="view col-md-6 col-sm-4 col-xs-4 col-6 text-left">
									<span class="glyphicon glyphicon-eye-open"></span>
									<span>{{ $book->view }}</span>
								</div>
								<div class="like col-md-4 col-md-push-2 col-sm-3 col-xs-3 col-6 col-xs-push-5 text-right">
									<span class="glyphicon glyphicon-heart"></span>
									<span>{{ $book->like }}</span>
								</div>
							</div>
						</div>
						<div class="rank {{ $book->background }}">{{ $book->index }}</div>
						<div class="book-hover {{ $book->background }}">
							<div class="name">{{ $book->name }}</div>
							<div class="type">Khoa học viễn tưởng, hài hước</div>
							<div class="chap">75 tập</div>
							<a href="detail-book.html" class="btn play">Xem Ngay</a>
							<div class="group row">
								<div class="view col-md-6 col-sm-4 col-xs-4">
									<span class="glyphicon glyphicon-eye-open"></span>
									<span>{{ $book->view }}</span>
								</div>
								<div class="like col-md-4 col-md-push-2 col-sm-3 col-xs-3 col-xs-push-5">
									<span class="glyphicon glyphicon-heart"></span>
									<span>{{ $book->like }}</span>
								</div>
							</div>
						</div>
					</div>
				</div>
			@endforeach
		</div>
	</div>
	<div class="topic-more">
		<button class="btn btn-link">
			<span class="glyphicon glyphicon-chevron-down"></span>
		</button>
	</div>
</div>
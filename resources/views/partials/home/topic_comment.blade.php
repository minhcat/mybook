<div class="topic clearfix comment">
	<div class="topic-header">Truyện Bình Luận Nhiều</div>
	<div class="clearfix"></div>
	<div class="topic-content">
		<div class="row">
			@foreach($books_comment as $book)
			<div class="book col-lg-3 col-md-3 col-sm-6 col-xs-6 col-6">
				<div class="book-content">
					<img src="image/books/{{ $book->image }}.jpg">
					<div class="book-info">
						<div class="name">{{ $book->name }}</div>
						<div class="group row">
							<div class="comment col-md-4 col-sm-4 col-xs-4 col-4 text-left">
								<span class="glyphicon glyphicon-comment"></span>
								<span>{{ $book->comment }}</span>
							</div>
							<div class="like col-md-4 col-sm-4 col-xs-4 col-4">
								<span class="glyphicon glyphicon-heart"></span>
								<span>{{ $book->like }}</span>
							</div>
							<div class="view col-md-4 col-sm-4 col-xs-4 col-4 text-right">
								<span class="glyphicon glyphicon-eye-open"></span>
								<span>{{ $book->view }}</span>
							</div>
						</div>
					</div>
					<div class="book-hover bg-turquoise">
						<div class="name">{{ $book->name }}</div>
						<div class="type">phiêu lưu, lãng mạn, hài hước</div>
						<div class="chap">75 tập</div>
						<a href="detail-book.html" class="btn play">Xem Ngay</a>
						<div class="group row">
							<div class="comment col-md-4 col-sm-4 col-xs-4">
								<span class="glyphicon glyphicon-comment"></span>
								<span>{{ $book->comment }}</span>
							</div>
							<div class="like col-md-4 col-sm-4 col-xs-4">
								<span class="glyphicon glyphicon-heart"></span>
								<span>{{ $book->like }}</span>
							</div>
							<div class="view col-md-4 col-sm-4 col-xs-4">
								<span class="glyphicon glyphicon-eye-open"></span>
								<span>{{ $book->view }}</span>
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
<div class="topic clearfix rate">
	<div class="topic-header">{{ $title_rate }}</div>
	<div class="clearfix"></div>
	<div class="topic-content">
		<div class="row">
			@foreach ($books_rate as $book)
			<div class="book col-lg-3 col-md-3 col-sm-6 col-xs-6 col-6">
				<div class="book-content">
					<img src="image/books/{{ $book->image }}.jpg">
					<div class="book-info">
						<div class="name">{{ $book->name }}</div>
						<div class="group row">
							<div class="star col-md-7 col-sm-6 col-xs-6">
								<span class="fa fa-star"></span>
								<span class="fa fa-star"></span>
								<span class="fa fa-star"></span>
								<span class="fa fa-star-half-o"></span>
								<span class="fa fa-star-o"></span>
								<span>{{ $book->rate_point }}</span>
							</div>
							<div class="rate col-md-5 col-sm-6 col-xs-6">
								<span>{{ $book->rate }} đánh giá</span>
							</div>
						</div>
					</div>
					<div class="book-hover bg-red">
						<div class="name">{{ $book->name }}</div>
						<div class="type">phiêu lưu, giả tưởng, hài hước</div>
						<div class="chap">25 tập</div>
						<a href="detail-book.html" class="btn play">Xem Ngay</a>
						<div class="group row">
							<div class="star col-md-7 col-sm-6 col-xs-6">
								<span class="fa fa-star"></span>
								<span class="fa fa-star"></span>
								<span class="fa fa-star"></span>
								<span class="fa fa-star-half-o"></span>
								<span class="fa fa-star-o"></span>
								<span>{{ $book->rate_point }}</span>
							</div>
							<div class="rate col-md-5 col-sm-6 col-xs-6">
								<span>{{ $book->rate }} đánh giá</span>
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
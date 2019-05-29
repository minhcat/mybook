<div class="topic clearfix update">
	<div class="topic-header">Truyện Mới Cập Nhật</div>
	<div class="clearfix"></div>
	<div class="topic-content">
		<div class="row">
			@foreach ($books_update as $book)
			<div class="book col-lg-3 col-md-3 col-sm-6 col-xs-6 col-6">
				<div class="book-content">
					<img src="image/books/{{ $book->image }}.jpg">
					<div class="book-info">
						<div class="name">{{ $book->name }}</div>
						<div class="chap">Chap 25: Không kẻ nào điếc hơn kẻ không muốn nghe</div>
					</div>
					@if ($book->index <= 2) 
					<div class="new">NEW</div>
					@endif
					<div class="book-hover bg-blue">
						<div class="name">{{ $book->name}}</div>
						<div class="chap">Chap 25: Không kẻ nào điếc hơn kẻ không muốn nghe</div>
						<a href="detail-book.html" class="btn play">Xem Ngay</a>
						<div class="group row">
							<div class="like col-md-4 col-sm-4 col-4">
								<span class="glyphicon glyphicon-heart"></span>
								<span>{{ $book->like }}</span>
							</div>
							<div class="comment col-md-4 col-sm-4 col-4">
								<span class="glyphicon glyphicon-comment"></span>
								<span>{{ $book->comment }}</span>
							</div>
							<div class="view col-md-4 col-sm-4 col-4">
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
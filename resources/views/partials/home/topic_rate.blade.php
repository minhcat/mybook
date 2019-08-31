<div class="topic clearfix rate">
	<div class="topic-header"><a href="{{ url('/list/rate') }}" class="link-white">{{ $title_rate }}</a></div>
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
								{{-- star 1 --}}
								@if ($book->rate_point <= 0.5)
								<span class="fa fa-star-half-o"></span>
								@else
								<span class="fa fa-star"></span>
								@endif
								{{-- star 2 --}}
								@if ($book->rate_point <= 1)
								<span class="fa fa-star-o"></span>
								@elseif ($book->rate_point <= 1.5)
								<span class="fa fa-star-half-o"></span>
								@else
								<span class="fa fa-star"></span>
								@endif
								{{-- star 3 --}}
								@if ($book->rate_point <= 2)
								<span class="fa fa-star-o"></span>
								@elseif ($book->rate_point <= 2.5)
								<span class="fa fa-star-half-o"></span>
								@else
								<span class="fa fa-star"></span>
								@endif
								{{-- star 4 --}}
								@if ($book->rate_point <= 3)
								<span class="fa fa-star-o"></span>
								@elseif ($book->rate_point <= 3.5)
								<span class="fa fa-star-half-o"></span>
								@else
								<span class="fa fa-star"></span>
								@endif
								{{-- star 5 --}}
								@if ($book->rate_point <= 4)
								<span class="fa fa-star-o"></span>
								@elseif ($book->rate_point <= 4.5)
								<span class="fa fa-star-half-o"></span>
								@else
								<span class="fa fa-star"></span>
								@endif
								<span>{{ $book->rate_point }}</span>
							</div>
							<div class="rate col-md-5 col-sm-6 col-xs-6">
								<span>{{ $book->rate }} đánh giá</span>
							</div>
						</div>
					</div>
					<div class="book-hover bg-red">
						<div class="name">{{ $book->name }}</div>
						<div class="type">
							@foreach ($book->categories as $key => $category)
								@if ($key == 3)
									<?php continue; ?>
								@endif
								@if ($key < count($book->categories) - 1 && $key != 2)
									{{ $category }},
								@else
									{{ $category }}
								@endif
							@endforeach
						</div>
						<div class="chap">{{ $book->max_chap }} chap</div>
						<a href="detail-book.html" class="btn play">Xem Ngay</a>
						<div class="group row">
							<div class="star col-md-7 col-sm-6 col-xs-6">
								{{-- star 1 --}}
								@if ($book->rate_point <= 0.5)
								<span class="fa fa-star-half-o"></span>
								@else
								<span class="fa fa-star"></span>
								@endif
								{{-- star 2 --}}
								@if ($book->rate_point <= 1)
								<span class="fa fa-star-o"></span>
								@elseif ($book->rate_point <= 1.5)
								<span class="fa fa-star-half-o"></span>
								@else
								<span class="fa fa-star"></span>
								@endif
								{{-- star 3 --}}
								@if ($book->rate_point <= 2)
								<span class="fa fa-star-o"></span>
								@elseif ($book->rate_point <= 2.5)
								<span class="fa fa-star-half-o"></span>
								@else
								<span class="fa fa-star"></span>
								@endif
								{{-- star 4 --}}
								@if ($book->rate_point <= 3)
								<span class="fa fa-star-o"></span>
								@elseif ($book->rate_point <= 3.5)
								<span class="fa fa-star-half-o"></span>
								@else
								<span class="fa fa-star"></span>
								@endif
								{{-- star 5 --}}
								@if ($book->rate_point <= 4)
								<span class="fa fa-star-o"></span>
								@elseif ($book->rate_point <= 4.5)
								<span class="fa fa-star-half-o"></span>
								@else
								<span class="fa fa-star"></span>
								@endif
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
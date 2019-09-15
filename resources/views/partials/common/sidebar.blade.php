<div class="sidebar col-lg-3 col-md-3">
	<div class="content">
		@foreach ($sidebar as $key => $box)
			@include('partials.common.sidebar.'.$box)
			
		@endforeach
	</div>

	<div class="popup-group">
		@foreach ($books_popup as $book)
		<div class="popup book" data-id="{{ $book->id }}">
			<div class="arrow"></div>
			<div class="content">
				<div class="image left">
					<img src="{{ asset('image/books/'.$book->image.'.jpg') }}" width="85px">
				</div>
				<div class="main right">
					<p class="name"><strong>{{ $book->name }}</strong></p>
					<div class="star">
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
					<div class="rate">
						<span>{{ $book->rate }} đánh giá</span>
					</div>
				</div>
				<div class="info">
					<div class="type">
						<p><strong>Thể loại:</strong> 
							@foreach ($book->categories as $key => $category)
								@if ($key < count($book->categories) - 1)
								<a href="{{ url('/list/category/'.$category['slug']) }}">{{ $category['name'] }}</a>,
								@else
								<a href="{{ url('/list/category/'.$category['slug']) }}">{{ $category['name'] }}</a>
								@endif
							@endforeach
						</p>
					</div>
					<div class="info-content">
						<p><strong>Nội dung:</strong> {!! $book->description !!}</p>
					</div>
				</div>
			</div>
		</div>
		@endforeach

		@foreach ($users_popup as $user)
		<div class="popup user" data-id="{{ $user->id }}">
			<div class="arrow"></div>
			<div class="content">
				<div class="image left">
					<img src="{{ asset('image/users/'.$user->image.'.jpg') }}" width="85px">
				</div>
				<div class="main right">
					<p class="name"><strong>{{ $user->name }}</strong></p>
					<div class="star">
						{{-- star 1 --}}
						@if ($user->rate_point <= 0.5)
						<span class="fa fa-star-half-o"></span>
						@else
						<span class="fa fa-star"></span>
						@endif
						{{-- star 2 --}}
						@if ($user->rate_point <= 1)
						<span class="fa fa-star-o"></span>
						@elseif ($book->rate_point <= 1.5)
						<span class="fa fa-star-half-o"></span>
						@else
						<span class="fa fa-star"></span>
						@endif
						{{-- star 3 --}}
						@if ($user->rate_point <= 2)
						<span class="fa fa-star-o"></span>
						@elseif ($book->rate_point <= 2.5)
						<span class="fa fa-star-half-o"></span>
						@else
						<span class="fa fa-star"></span>
						@endif
						{{-- star 4 --}}
						@if ($user->rate_point <= 3)
						<span class="fa fa-star-o"></span>
						@elseif ($book->rate_point <= 3.5)
						<span class="fa fa-star-half-o"></span>
						@else
						<span class="fa fa-star"></span>
						@endif
						{{-- star 5 --}}
						@if ($user->rate_point <= 4)
						<span class="fa fa-star-o"></span>
						@elseif ($book->rate_point <= 4.5)
						<span class="fa fa-star-half-o"></span>
						@else
						<span class="fa fa-star"></span>
						@endif
						<span>{{ $user->rate_point }}</span>
					</div>
					<div class="rate">
						<span>{{ $user->rate }} đánh giá</span>
					</div>
				</div>
				<div class="info">
					<div class="type">
						<p><strong>Giới tính:</strong> {{ ($user->gender == 0) ? 'Nam' : 'Nữ' }}</p>
					</div>
					<div class="info-content">
						<p><strong>Tự giới thiệu:</strong> {!! $user->description !!}</p>
					</div>
					<div class="info-content">
						<p><strong>Slogan:</strong> {{ $user->slogan }}</p>
					</div>
				</div>
			</div>
		</div>
		@endforeach

		@foreach ($authors_popup as $author)
		<div class="popup author" data-id="{{ $author->id }}">
			<div class="arrow"></div>
			<div class="content">
				<div class="image left">
					<img src="{{ asset('image/authors/'.$author->image.'.jpg') }}" width="85px">
				</div>
				<div class="main right">
					<p class="name"><strong>{{ $author->name }}</strong></p>
					<div class="star">
						{{-- star 1 --}}
						@if ($author->rate_point <= 0.5)
						<span class="fa fa-star-half-o"></span>
						@else
						<span class="fa fa-star"></span>
						@endif
						{{-- star 2 --}}
						@if ($author->rate_point <= 1)
						<span class="fa fa-star-o"></span>
						@elseif ($author->rate_point <= 1.5)
						<span class="fa fa-star-half-o"></span>
						@else
						<span class="fa fa-star"></span>
						@endif
						{{-- star 3 --}}
						@if ($author->rate_point <= 2)
						<span class="fa fa-star-o"></span>
						@elseif ($author->rate_point <= 2.5)
						<span class="fa fa-star-half-o"></span>
						@else
						<span class="fa fa-star"></span>
						@endif
						{{-- star 4 --}}
						@if ($author->rate_point <= 3)
						<span class="fa fa-star-o"></span>
						@elseif ($author->rate_point <= 3.5)
						<span class="fa fa-star-half-o"></span>
						@else
						<span class="fa fa-star"></span>
						@endif
						{{-- star 5 --}}
						@if ($author->rate_point <= 4)
						<span class="fa fa-star-o"></span>
						@elseif ($author->rate_point <= 4.5)
						<span class="fa fa-star-half-o"></span>
						@else
						<span class="fa fa-star"></span>
						@endif
						<span>{{ $author->rate_point }}</span>
					</div>
					<div class="rate">
						<span>{{ $author->rate }} đánh giá</span>
					</div>
				</div>
				<div class="info">
					<div class="type">
						<p><strong>Giới tính:</strong> {{ ($author->gender == 0) ? 'Nam' : 'Nữ' }}</p>
					</div>
					<div class="info-content">
						<p><strong>Tự giới thiệu:</strong> {!! $author->description !!}</p>
					</div>
					<div class="info-content">
						<p><strong>Công việc:</strong> {{ $author->type }}</p>
					</div>
				</div>
			</div>
		</div>
		@endforeach

		@foreach ($chars_popup as $char)
		<div class="popup char" data-id="{{ $char->id }}">
			<div class="arrow"></div>
			<div class="content">
				<div class="image left">
					<img src="{{ asset('image/characters/'.$char->image.'.jpg') }}" width="85px">
				</div>
				<div class="main right">
					<p class="name"><strong>{{ $char->name }}</strong></p>s
				</div>
				<div class="info">
					<div class="type">
						<p><strong>Giới tính:</strong> {{ ($char->gender == 0) ? 'Nam' : 'Nữ' }}</p>
					</div>
					<div class="info-content">
						<p><strong>Tự giới thiệu:</strong> {!! $char->description !!}</p>
					</div>
					<div class="info-content">
						<p><strong>Loại nhân vật:</strong> {{ $char->type }}</p>
					</div>
				</div>
			</div>
		</div>
		@endforeach

		@foreach ($trans_popup as $trans)
		<div class="popup trans" data-id="{{ $trans->id }}">
			<div class="arrow"></div>
			<div class="content">
				<div class="image left">
					<img src="{{ asset('image/trans/'.$trans->image.'.jpg') }}" width="85px">
				</div>
				<div class="main right">
					<p class="name"><strong>{{ $trans->name }}</strong></p>
					<div class="star">
						{{-- star 1 --}}
						@if ($trans->rate_point <= 0.5)
						<span class="fa fa-star-half-o"></span>
						@else
						<span class="fa fa-star"></span>
						@endif
						{{-- star 2 --}}
						@if ($trans->rate_point <= 1)
						<span class="fa fa-star-o"></span>
						@elseif ($trans->rate_point <= 1.5)
						<span class="fa fa-star-half-o"></span>
						@else
						<span class="fa fa-star"></span>
						@endif
						{{-- star 3 --}}
						@if ($trans->rate_point <= 2)
						<span class="fa fa-star-o"></span>
						@elseif ($trans->rate_point <= 2.5)
						<span class="fa fa-star-half-o"></span>
						@else
						<span class="fa fa-star"></span>
						@endif
						{{-- star 4 --}}
						@if ($trans->rate_point <= 3)
						<span class="fa fa-star-o"></span>
						@elseif ($trans->rate_point <= 3.5)
						<span class="fa fa-star-half-o"></span>
						@else
						<span class="fa fa-star"></span>
						@endif
						{{-- star 5 --}}
						@if ($trans->rate_point <= 4)
						<span class="fa fa-star-o"></span>
						@elseif ($trans->rate_point <= 4.5)
						<span class="fa fa-star-half-o"></span>
						@else
						<span class="fa fa-star"></span>
						@endif
						<span>{{ $trans->rate_point }}</span>
					</div>
					<div class="rate">
						<span>{{ $trans->rate }} đánh giá</span>
					</div>
				</div>
				<div class="info">
					<div class="type">
						<p><strong>Trưởng nhóm:</strong> {{ $trans->leader }}</p>
					</div>
					<div class="info-content">
						<p><strong>Thành viên:</strong> {{ $trans->member }}</p>
					</div>
					<div class="info-content">
						<p><strong>Tự giới thiệu:</strong> {!! $trans->description !!}</p>
					</div>
				</div>
			</div>
		</div>
		@endforeach
	</div>
</div>
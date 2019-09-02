<footer>
	<div class="footer">
		<div class="container">
			<div class="row">
				<div class="content col-lg-4 col-md-4 col-sm-4 col-xs-4 col-6">
					<h4>Truy Cập</h4>
					<p>Tổng số: 10 000 000</p>
					<p>Trong ngày: 1000</p>
					<p>Đang online: 10</p>
				</div>
				<div class="content col-lg-4 col-md-4 col-sm-4 col-xs-4 hide-xxs">
					<h4>Liên Kết</h4>
					<p><a href="{{ url('/list/'.$system['footer_link_value_1']) }}">{{ $system['footer_link_name_1'] }}</a></p>
					<p><a href="{{ url('/list/'.$system['footer_link_value_2']) }}">{{ $system['footer_link_name_2'] }}</a></p>
					<p><a href="{{ url('/list/'.$system['footer_link_value_3']) }}">{{ $system['footer_link_name_3'] }}</a></p>
				</div>
				<div class="content col-lg-4 col-md-4 col-sm-4 col-xs-4 col-6">
					<h4>{{ $system['website_name'] }}</h4>
					<p>{{ $system['footer_info_1'] }}</p>
					<p>{{ $system['footer_info_2'] }}</p>
					<p>{{ $system['footer_info_3'] }}</p>
				</div>
			</div>
		</div>
	</div>
	<div class="copyright">
		<div class="container">{{ $system['footer_last_info'] }}</div>
	</div>
</footer>

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
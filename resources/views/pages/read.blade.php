<!DOCTYPE html>
<html>
<head>
	@include('partials.layouts.define_header')

	<link rel="stylesheet" type="text/css" href="{{ asset('css/read.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('css/comment.css') }}">
</head>
<body>
	@include('partials.layouts.content_header2')

	<section>
		<div class="container">
			<div class="control">
				<h1>{{ $book['name'] }}</h1>
				<h1>{{ $chap['name'] }}</h1>
				<ul class="breadcrumb">
					<li><a href="">Trang chủ</a></li>
					<li><a href="">{{ $book['name'] }}</a></li>
					<li><a href="">{{ $trans['name'] }}</a></li>
					<li class="active">{{ $chap['name'] }}</li>
				</ul>
				<p>Nếu không xem được truyện vui lòng đổi "SERVER ẢNH"</p>
				<div class="server">
					<button class="btn bg-green white">Server 1</button>
					<button class="btn bg-blue white">Server 1</button>
				</div>
				<p>Nếu muốn chuyển chap chọn các tùy chọn bên dưới</p>
				<div class="chap">
					<button class="btn bg-green white">Chap trước</button>
					<select class="list-chap form-control">
						<option>chap 1</option>
						<option>chap 2</option>
						<option>chap 3</option>
						<option>chap 4</option>
						<option>chap 5</option>
					</select>
					<button class="btn bg-green white">Chap sau</button>
					<button class="btn bg-red white">Báo lỗi</button>
				</div>
			</div>
		</div>
		<div class="main-read">
			@foreach ($images as $image)
			<img src="{{ asset('image/chaps/'.$book['slug'].'/'.$trans['slug'].'/'.$chap['index'].'/'.$image->image.'') }}">
			@endforeach
		</div>
		<div class="container">
			<div class="bottom">
				@include('partials.common.comment')
				<hr>
				<div class="books-else">
					<h3>Có thể bạn thích</h3>
					<div class="books-slide">
						@foreach ($random_books as $book)
						<div class="book-item">
							<a href="detail-book.html"><img src="{{ asset('image/books/'.$book->image.'.jpg') }}"/></a>
							<p>{{ $book->name }}</p>
						</div>
						@endforeach
					</div>
				</div>
			</div>
		</div>
	</section>

	@include('partials.layouts.content_footer')

	@include('partials.layouts.define_footer')
	
	<script type="text/javascript">
		var flag_url = '{{ asset('/') }}';
	</script>
	<script type="text/javascript" src="{{ asset('js/read.js') }}"></script>
</body>
</html>
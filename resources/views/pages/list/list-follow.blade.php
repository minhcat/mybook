@extends('master.list')

{{-- title --}}
@section('title-color')
green
@endsection

@section('title-header')
Truyện Theo Dõi
@endsection

@section('title-content')
Danh sách các truyện mà bạn đăng ký theo dõi
@endsection
{{-- end title --}}

@section('list')
<div class="listbook col-lg-9 col-md-9 col-sm-12 col-xs-12">
	<div class="content">
		<ul class="breadcrumb">
			<li><a href="">Trang chủ</a></li>
			<li class="active">Truyện theo dõi</li>
		</ul>
		<div class="list">
			<div class="book clearfix">
				<a href=""><img src="{{ asset('image/bang-hoai-3rd.jpg') }}" width="160px" height="160px"></a>
				<div class="info">
					<h4 class="name"><a href="detail-book.html">Băng Hoại 3rd</a></h4>
					<div class="star">
						<span class="fa fa-star"></span>
						<span class="fa fa-star"></span>
						<span class="fa fa-star"></span>
						<span class="fa fa-star-half-o"></span>
						<span class="fa fa-star-o"></span>
						<span>3.5</span>
						<span class="rate">100 đánh giá</span>
					</div>
					<div class="group clearfix">
						<div class="item red" title="yêu thích">
							<span class="glyphicon glyphicon-heart"></span> 
							<span>100</span>
						</div>
						<div class="item blue" title="lượt xem">
							<span class="glyphicon glyphicon-eye-open"></span> 
							<span>100</span>
						</div>
						<div class="item orange" title="bình luận">
							<span class="glyphicon glyphicon-comment"></span> 
							<span>100</span>
						</div>
						<div class="item green" title="theo dõi">
							<span class="glyphicon glyphicon-user"></span> 
							<span>100</span>
						</div>
					</div>

					<div class="chap">
						<a href="read-book.html"><strong>Chap 160</strong></a> - <div class="time">12 giờ trước</div>
					</div>
					<div class="chap">
						<a href="read-book.html"><strong>Chap 159</strong></a> - <div class="time">2 ngày trước</div>
					</div>
					<div class="chap">
						<a href="read-book.html"><strong>Chap 158</strong></a> - <div class="time">4 ngày trước</div>
					</div>
					<button class="btn unfollow">Bỏ theo dõi</button>
				</div>
			</div>
			<hr>
			<div class="book clearfix">
				<a href=""><img src="{{ asset('image/boruto.jpg') }}" width="160px" height="160px"></a>
				<div class="info">
					<h4 class="name"><a href="detail-book.html">Boruto</a></h4>
					<div class="star">
						<span class="fa fa-star"></span>
						<span class="fa fa-star"></span>
						<span class="fa fa-star"></span>
						<span class="fa fa-star-half-o"></span>
						<span class="fa fa-star-o"></span>
						<span>3.5</span>
						<span class="rate">100 đánh giá</span>
					</div>
					<div class="group clearfix">
						<div class="item red" title="yêu thích">
							<span class="glyphicon glyphicon-heart"></span> 
							<span>100</span>
						</div>
						<div class="item blue" title="lượt xem">
							<span class="glyphicon glyphicon-eye-open"></span> 
							<span>100</span>
						</div>
						<div class="item orange" title="bình luận">
							<span class="glyphicon glyphicon-comment"></span> 
							<span>100</span>
						</div>
						<div class="item green" title="theo dõi">
							<span class="glyphicon glyphicon-user"></span> 
							<span>100</span>
						</div>
					</div>

					<div class="chap">
						<a href="read-book.html"><strong>Chap 160</strong></a> - <div class="time">12 giờ trước</div>
					</div>
					<div class="chap">
						<a href="read-book.html"><strong>Chap 159</strong></a> - <div class="time">2 ngày trước</div>
					</div>
					<div class="chap">
						<a href="read-book.html"><strong>Chap 158</strong></a> - <div class="time">4 ngày trước</div>
					</div>
					<button class="btn unfollow">Bỏ theo dõi</button>
				</div>
			</div>
			<hr>
			<div class="book clearfix">
				<a href=""><img src="{{ asset('image/mahoutsukai-no-yome.jpg') }}" width="160px" height="160px"></a>
				<div class="info">
					<h4 class="name"><a href="detail-book.html">Mahoutsulai no Yome</a></h4>
					<div class="star">
						<span class="fa fa-star"></span>
						<span class="fa fa-star"></span>
						<span class="fa fa-star"></span>
						<span class="fa fa-star-half-o"></span>
						<span class="fa fa-star-o"></span>
						<span>3.5</span>
						<span class="rate">100 đánh giá</span>
					</div>
					<div class="group clearfix">
						<div class="item red" title="yêu thích">
							<span class="glyphicon glyphicon-heart"></span> 
							<span>100</span>
						</div>
						<div class="item blue" title="lượt xem">
							<span class="glyphicon glyphicon-eye-open"></span> 
							<span>100</span>
						</div>
						<div class="item orange" title="bình luận">
							<span class="glyphicon glyphicon-comment"></span> 
							<span>100</span>
						</div>
						<div class="item green" title="theo dõi">
							<span class="glyphicon glyphicon-user"></span> 
							<span>100</span>
						</div>
					</div>

					<div class="chap">
						<a href="read-book.html"><strong>Chap 160</strong></a> - <div class="time">12 giờ trước</div>
					</div>
					<div class="chap">
						<a href="read-book.html"><strong>Chap 159</strong></a> - <div class="time">2 ngày trước</div>
					</div>
					<div class="chap">
						<a href="read-book.html"><strong>Chap 158</strong></a> - <div class="time">4 ngày trước</div>
					</div>
					<button class="btn unfollow">Bỏ theo dõi</button>
				</div>
			</div>
			<hr>
			<div class="book clearfix">
				<a href=""><img src="{{ asset('image/himouto-umaru-chan.jpg') }}" width="160px" height="160px"></a>
				<div class="info">
					<h4 class="name"><a href="detail-book.html">Himouto Umaru-chan</a></h4>
					<div class="star">
						<span class="fa fa-star"></span>
						<span class="fa fa-star"></span>
						<span class="fa fa-star"></span>
						<span class="fa fa-star-half-o"></span>
						<span class="fa fa-star-o"></span>
						<span>3.5</span>
						<span class="rate">100 đánh giá</span>
					</div>
					<div class="group clearfix">
						<div class="item red" title="yêu thích">
							<span class="glyphicon glyphicon-heart"></span> 
							<span>100</span>
						</div>
						<div class="item blue" title="lượt xem">
							<span class="glyphicon glyphicon-eye-open"></span> 
							<span>100</span>
						</div>
						<div class="item orange" title="bình luận">
							<span class="glyphicon glyphicon-comment"></span> 
							<span>100</span>
						</div>
						<div class="item green" title="theo dõi">
							<span class="glyphicon glyphicon-user"></span> 
							<span>100</span>
						</div>
					</div>

					<div class="chap">
						<a href="read-book.html"><strong>Chap 160</strong></a> - <div class="time">12 giờ trước</div>
					</div>
					<div class="chap">
						<a href="read-book.html"><strong>Chap 159</strong></a> - <div class="time">2 ngày trước</div>
					</div>
					<div class="chap">
						<a href="read-book.html"><strong>Chap 158</strong></a> - <div class="time">4 ngày trước</div>
					</div>
					<button class="btn unfollow">Bỏ theo dõi</button>
				</div>
			</div>
			<hr>
			<div class="book clearfix">
				<a href=""><img src="{{ asset('image/sword-art-online.jpg') }}" width="160px" height="160px"></a>
				<div class="info">
					<h4 class="name"><a href="detail-book.html">Swort Art Online</a></h4>
					<div class="star">
						<span class="fa fa-star"></span>
						<span class="fa fa-star"></span>
						<span class="fa fa-star"></span>
						<span class="fa fa-star-half-o"></span>
						<span class="fa fa-star-o"></span>
						<span>3.5</span>
						<span class="rate">100 đánh giá</span>
					</div>
					<div class="group clearfix">
						<div class="item red" title="yêu thích">
							<span class="glyphicon glyphicon-heart"></span> 
							<span>100</span>
						</div>
						<div class="item blue" title="lượt xem">
							<span class="glyphicon glyphicon-eye-open"></span> 
							<span>100</span>
						</div>
						<div class="item orange" title="bình luận">
							<span class="glyphicon glyphicon-comment"></span> 
							<span>100</span>
						</div>
						<div class="item green" title="theo dõi">
							<span class="glyphicon glyphicon-user"></span> 
							<span>100</span>
						</div>
					</div>

					<div class="chap">
						<a href="read-book.html"><strong>Chap 160</strong></a> - <div class="time">12 giờ trước</div>
					</div>
					<div class="chap">
						<a href="read-book.html"><strong>Chap 159</strong></a> - <div class="time">2 ngày trước</div>
					</div>
					<div class="chap">
						<a href="read-book.html"><strong>Chap 158</strong></a> - <div class="time">4 ngày trước</div>
					</div>
					<button class="btn unfollow">Bỏ theo dõi</button>
				</div>
			</div>
			<hr>
			<div class="book clearfix">
				<a href=""><img src="{{ asset('image/attack-on-titan-movie.jpg') }}" width="160px" height="160px"></a>
				<div class="info">
					<h4 class="name"><a href="detail-book.html">Attack on Titan</a></h4>
					<div class="star">
						<span class="fa fa-star"></span>
						<span class="fa fa-star"></span>
						<span class="fa fa-star"></span>
						<span class="fa fa-star-half-o"></span>
						<span class="fa fa-star-o"></span>
						<span>3.5</span>
						<span class="rate">100 đánh giá</span>
					</div>
					<div class="group clearfix">
						<div class="item red" title="yêu thích">
							<span class="glyphicon glyphicon-heart"></span> 
							<span>100</span>
						</div>
						<div class="item blue" title="lượt xem">
							<span class="glyphicon glyphicon-eye-open"></span> 
							<span>100</span>
						</div>
						<div class="item orange" title="bình luận">
							<span class="glyphicon glyphicon-comment"></span> 
							<span>100</span>
						</div>
						<div class="item green" title="theo dõi">
							<span class="glyphicon glyphicon-user"></span> 
							<span>100</span>
						</div>
					</div>

					<div class="chap">
						<a href="read-book.html"><strong>Chap 160</strong></a> - <div class="time">12 giờ trước</div>
					</div>
					<div class="chap">
						<a href="read-book.html"><strong>Chap 159</strong></a> - <div class="time">2 ngày trước</div>
					</div>
					<div class="chap">
						<a href="read-book.html"><strong>Chap 158</strong></a> - <div class="time">4 ngày trước</div>
					</div>
					<button class="btn unfollow">Bỏ theo dõi</button>
				</div>
			</div>
			<hr>
			<div class="book clearfix">
				<a href=""><img src="{{ asset('image/seiken-tsukai-no-kinshuu-eishou.jpg') }}" width="160px" height="160px"></a>
				<div class="info">
					<h4 class="name"><a href="detail-book.html">Seiken Tsukai no Kinshuu eishou</a></h4>
					<div class="star">
						<span class="fa fa-star"></span>
						<span class="fa fa-star"></span>
						<span class="fa fa-star"></span>
						<span class="fa fa-star-half-o"></span>
						<span class="fa fa-star-o"></span>
						<span>3.5</span>
						<span class="rate">100 đánh giá</span>
					</div>
					<div class="group clearfix">
						<div class="item red" title="yêu thích">
							<span class="glyphicon glyphicon-heart"></span> 
							<span>100</span>
						</div>
						<div class="item blue" title="lượt xem">
							<span class="glyphicon glyphicon-eye-open"></span> 
							<span>100</span>
						</div>
						<div class="item orange" title="bình luận">
							<span class="glyphicon glyphicon-comment"></span> 
							<span>100</span>
						</div>
						<div class="item green" title="theo dõi">
							<span class="glyphicon glyphicon-user"></span> 
							<span>100</span>
						</div>
					</div>

					<div class="chap">
						<a href="read-book.html"><strong>Chap 160</strong></a> - <div class="time">12 giờ trước</div>
					</div>
					<div class="chap">
						<a href="read-book.html"><strong>Chap 159</strong></a> - <div class="time">2 ngày trước</div>
					</div>
					<div class="chap">
						<a href="read-book.html"><strong>Chap 158</strong></a> - <div class="time">4 ngày trước</div>
					</div>
					<button class="btn unfollow">Bỏ theo dõi</button>
				</div>
			</div>
			<hr>
			<div class="book clearfix">
				<a href=""><img src="{{ asset('image/shokugeki-no-souma.jpg') }}" width="160px" height="160px"></a>
				<div class="info">
					<h4 class="name"><a href="detail-book.html">Shokugeki no Souma</a></h4>
					<div class="star">
						<span class="fa fa-star"></span>
						<span class="fa fa-star"></span>
						<span class="fa fa-star"></span>
						<span class="fa fa-star-half-o"></span>
						<span class="fa fa-star-o"></span>
						<span>3.5</span>
						<span class="rate">100 đánh giá</span>
					</div>
					<div class="group clearfix">
						<div class="item red" title="yêu thích">
							<span class="glyphicon glyphicon-heart"></span> 
							<span>100</span>
						</div>
						<div class="item blue" title="lượt xem">
							<span class="glyphicon glyphicon-eye-open"></span> 
							<span>100</span>
						</div>
						<div class="item orange" title="bình luận">
							<span class="glyphicon glyphicon-comment"></span> 
							<span>100</span>
						</div>
						<div class="item green" title="theo dõi">
							<span class="glyphicon glyphicon-user"></span> 
							<span>100</span>
						</div>
					</div>

					<div class="chap">
						<a href="read-book.html"><strong>Chap 160</strong></a> - <div class="time">12 giờ trước</div>
					</div>
					<div class="chap">
						<a href="read-book.html"><strong>Chap 159</strong></a> - <div class="time">2 ngày trước</div>
					</div>
					<div class="chap">
						<a href="read-book.html"><strong>Chap 158</strong></a> - <div class="time">4 ngày trước</div>
					</div>
					<button class="btn unfollow">Bỏ theo dõi</button>
				</div>
			</div>
			<hr>
			<div class="book clearfix">
				<a href=""><img src="{{ asset('image/conan.jpg') }}" width="160px" height="160px"></a>
				<div class="info">
					<h4 class="name"><a href="detail-book.html">Thám Tử Lừng Danh Conan</a></h4>
					<div class="star">
						<span class="fa fa-star"></span>
						<span class="fa fa-star"></span>
						<span class="fa fa-star"></span>
						<span class="fa fa-star-half-o"></span>
						<span class="fa fa-star-o"></span>
						<span>3.5</span>
						<span class="rate">100 đánh giá</span>
					</div>
					<div class="group clearfix">
						<div class="item red" title="yêu thích">
							<span class="glyphicon glyphicon-heart"></span> 
							<span>100</span>
						</div>
						<div class="item blue" title="lượt xem">
							<span class="glyphicon glyphicon-eye-open"></span> 
							<span>100</span>
						</div>
						<div class="item orange" title="bình luận">
							<span class="glyphicon glyphicon-comment"></span> 
							<span>100</span>
						</div>
						<div class="item green" title="theo dõi">
							<span class="glyphicon glyphicon-user"></span> 
							<span>100</span>
						</div>
					</div>

					<div class="chap">
						<a href="read-book.html"><strong>Chap 160</strong></a> - <div class="time">12 giờ trước</div>
					</div>
					<div class="chap">
						<a href="read-book.html"><strong>Chap 159</strong></a> - <div class="time">2 ngày trước</div>
					</div>
					<div class="chap">
						<a href="read-book.html"><strong>Chap 158</strong></a> - <div class="time">4 ngày trước</div>
					</div>
					<button class="btn unfollow">Bỏ theo dõi</button>
				</div>
			</div>
			<hr>
			<div class="book clearfix">
				<a href=""><img src="{{ asset('image/dragon-ball-super.jpg') }}" width="160px" height="160px"></a>
				<div class="info">
					<h4 class="name"><a href="detail-book.html">Dragon Ball Super</a></h4>
					<div class="star">
						<span class="fa fa-star"></span>
						<span class="fa fa-star"></span>
						<span class="fa fa-star"></span>
						<span class="fa fa-star-half-o"></span>
						<span class="fa fa-star-o"></span>
						<span>3.5</span>
						<span class="rate">100 đánh giá</span>
					</div>
					<div class="group clearfix">
						<div class="item red" title="yêu thích">
							<span class="glyphicon glyphicon-heart"></span> 
							<span>100</span>
						</div>
						<div class="item blue" title="lượt xem">
							<span class="glyphicon glyphicon-eye-open"></span> 
							<span>100</span>
						</div>
						<div class="item orange" title="bình luận">
							<span class="glyphicon glyphicon-comment"></span> 
							<span>100</span>
						</div>
						<div class="item green" title="theo dõi">
							<span class="glyphicon glyphicon-user"></span> 
							<span>100</span>
						</div>
					</div>

					<div class="chap">
						<a href="read-book.html"><strong>Chap 160</strong></a> - <div class="time">12 giờ trước</div>
					</div>
					<div class="chap">
						<a href="read-book.html"><strong>Chap 159</strong></a> - <div class="time">2 ngày trước</div>
					</div>
					<div class="chap">
						<a href="read-book.html"><strong>Chap 158</strong></a> - <div class="time">4 ngày trước</div>
					</div>
					<button class="btn unfollow">Bỏ theo dõi</button>
				</div>
			</div>
		</div>
		<div class="paging">
			<ul class="pagination">
				<li><a href="#"><<</a></li>
				<li><a href="#"><</a></li>
				<li class="active"><a href="#">3</a></li>
				<li><a href="#">4</a></li>
				<li><a href="#">5</a></li>
				<li><a href="#">6</a></li>
				<li><a href="#">></a></li>
				<li><a href="#">>></a></li>
			</ul>
		</div>
	</div>
</div>
@endsection
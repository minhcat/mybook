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
				<h1>Overlord - Chap 1</h1>
				<ul class="breadcrumb">
					<li><a href="">Trang chủ</a></li>
					<li><a href="">Overlord</a></li>
					<li class="active">Chap 1</li>
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
			<img src="image/book/overlord-chap1-p1.jpg">
			<img src="image/book/overlord-chap1-p2.jpg">
			<img src="image/book/overlord-chap1-p3.jpg">
			<img src="image/book/overlord-chap1-p4.jpg">
			<img src="image/book/overlord-chap1-p5.jpg">
			<img src="image/book/overlord-chap1-p6.jpg">
			<img src="image/book/overlord-chap1-p7.jpg">
			<img src="image/book/overlord-chap1-p8.jpg">
			<img src="image/book/overlord-chap1-p9.jpg">
			<img src="image/book/overlord-chap1-p10.jpg">
			<img src="image/book/overlord-chap1-p11.jpg">
			<img src="image/book/overlord-chap1-p12.jpg">
			<img src="image/book/overlord-chap1-p13.jpg">
			<img src="image/book/overlord-chap1-p14.jpg">
			<img src="image/book/overlord-chap1-p15.jpg">
			<img src="image/book/overlord-chap1-p16.jpg">
			<img src="image/book/overlord-chap1-p17.jpg">
			<img src="image/book/overlord-chap1-p18.jpg">
		</div>
		<div class="container">
			<div class="bottom">
				<div class="cmd comment">
					<h4>Bình luận</h4>
					<div class="sort clearfix">
						<span class="left"><strong>20 bình luận</strong></span>
						<div class="right">
							<strong>Sắp xếp theo</strong> 
							<button class="select" type="button">
								<span class="text">mặc định</span>
								<span class="caret"></span>
							</button>
							<ul class="dropdown-menu">
								<li>mới nhất</li>
								<li>nhiều like nhất</li>
								<li>nhiều dislike nhất</li>
								<li>mặc định</li>
							</ul>
						</div>
					</div>
					<hr>
					<div class="form-comment clearfix">
						<div class="image">
							<img src="image/user-default.png" class="img-circle">
						</div>
						<div class="text-cmd">
							<div class="textarea" data-placeholder="thêm bình luận" contentEditable="true" spellcheck="false"></div>
							<button class="btn submit open-modal">Đăng bình luận</button>
							<button class="btn reset">Hủy bỏ</button>
							<div class="dropdown emoji-drop">
								<button class="btn emoji select">
									<img src="image/emoji/emoji-04.png" width="28px">
								</button>
								<div class="dropdown-menu">
									<!-- 1-10 -->
									<img src="image/emoji/emoji-01.png" data-image="emoji-01">
									<img src="image/emoji/emoji-02.png" data-image="emoji-02">
									<img src="image/emoji/emoji-03.png" data-image="emoji-03">
									<img src="image/emoji/emoji-04.png" data-image="emoji-04">
									<img src="image/emoji/emoji-05.png" data-image="emoji-05">
									<img src="image/emoji/emoji-06.png" data-image="emoji-06">
									<img src="image/emoji/emoji-07.png" data-image="emoji-07">
									<img src="image/emoji/emoji-08.png" data-image="emoji-08">
									<img src="image/emoji/emoji-09.png" data-image="emoji-09">
									<img src="image/emoji/emoji-10.png" data-image="emoji-10">
									<!-- 10-20 -->
									<img src="image/emoji/emoji-11.png" data-image="emoji-11">
									<img src="image/emoji/emoji-12.png" data-image="emoji-12">
									<img src="image/emoji/emoji-13.png" data-image="emoji-13">
									<img src="image/emoji/emoji-14.png" data-image="emoji-14">
									<img src="image/emoji/emoji-15.png" data-image="emoji-15">
									<img src="image/emoji/emoji-16.png" data-image="emoji-16">
									<img src="image/emoji/emoji-17.png" data-image="emoji-17">
									<img src="image/emoji/emoji-18.png" data-image="emoji-18">
									<img src="image/emoji/emoji-19.png" data-image="emoji-19">
									<img src="image/emoji/emoji-20.png" data-image="emoji-20">
									<!-- 20-30 -->
									<img src="image/emoji/emoji-21.png" data-image="emoji-21">
									<img src="image/emoji/emoji-22.png" data-image="emoji-22">
									<img src="image/emoji/emoji-23.png" data-image="emoji-23">
									<img src="image/emoji/emoji-24.png" data-image="emoji-24">
									<img src="image/emoji/emoji-25.png" data-image="emoji-25">
									<img src="image/emoji/emoji-26.png" data-image="emoji-26">
									<img src="image/emoji/emoji-27.png" data-image="emoji-27">
									<img src="image/emoji/emoji-28.png" data-image="emoji-28">
									<img src="image/emoji/emoji-29.png" data-image="emoji-29">
									<img src="image/emoji/emoji-30.png" data-image="emoji-30">
									<!-- 30-40 -->
									<img src="image/emoji/emoji-31.png" data-image="emoji-31">
									<img src="image/emoji/emoji-32.png" data-image="emoji-32">
									<img src="image/emoji/emoji-33.png" data-image="emoji-33">
									<img src="image/emoji/emoji-34.png" data-image="emoji-34">
									<img src="image/emoji/emoji-35.png" data-image="emoji-35">
									<img src="image/emoji/emoji-36.png" data-image="emoji-36">
									<img src="image/emoji/emoji-37.png" data-image="emoji-37">
									<img src="image/emoji/emoji-38.png" data-image="emoji-38">
									<img src="image/emoji/emoji-39.png" data-image="emoji-39">
									<img src="image/emoji/emoji-40.png" data-image="emoji-40">
									<!-- 40-50 -->
									<img src="image/emoji/emoji-41.png" data-image="emoji-41">
									<img src="image/emoji/emoji-42.png" data-image="emoji-42">
									<img src="image/emoji/emoji-43.png" data-image="emoji-43">
									<img src="image/emoji/emoji-44.png" data-image="emoji-44">
									<img src="image/emoji/emoji-45.png" data-image="emoji-45">
									<img src="image/emoji/emoji-46.png" data-image="emoji-46">
									<img src="image/emoji/emoji-47.png" data-image="emoji-47">
									<img src="image/emoji/emoji-48.png" data-image="emoji-48">
									<img src="image/emoji/emoji-49.png" data-image="emoji-49">
									<img src="image/emoji/emoji-50.png" data-image="emoji-50">
									<!-- 50-60 -->
									<img src="image/emoji/emoji-51.png" data-image="emoji-51">
									<img src="image/emoji/emoji-52.png" data-image="emoji-52">
									<img src="image/emoji/emoji-53.png" data-image="emoji-53">
									<img src="image/emoji/emoji-54.png" data-image="emoji-54">
									<img src="image/emoji/emoji-55.png" data-image="emoji-55">
									<img src="image/emoji/emoji-56.png" data-image="emoji-56">
									<img src="image/emoji/emoji-57.png" data-image="emoji-57">
									<img src="image/emoji/emoji-58.png" data-image="emoji-58">
									<img src="image/emoji/emoji-59.png" data-image="emoji-59">
									<img src="image/emoji/emoji-60.png" data-image="emoji-60">
									<!-- 60-70 -->
									<img src="image/emoji/emoji-61.png" data-image="emoji-61">
									<img src="image/emoji/emoji-62.png" data-image="emoji-62">
									<img src="image/emoji/emoji-63.png" data-image="emoji-63">
									<img src="image/emoji/emoji-64.png" data-image="emoji-64">
									<img src="image/emoji/emoji-65.png" data-image="emoji-65">
									<img src="image/emoji/emoji-66.png" data-image="emoji-66">
									<img src="image/emoji/emoji-67.png" data-image="emoji-67">
									<img src="image/emoji/emoji-68.png" data-image="emoji-68">
									<img src="image/emoji/emoji-69.png" data-image="emoji-69">
									<img src="image/emoji/emoji-70.png" data-image="emoji-70">
									<!-- 70-80 -->
									<img src="image/emoji/emoji-71.png" data-image="emoji-71">
									<img src="image/emoji/emoji-72.png" data-image="emoji-72">
									<img src="image/emoji/emoji-73.png" data-image="emoji-73">
									<img src="image/emoji/emoji-74.png" data-image="emoji-74">
									<img src="image/emoji/emoji-75.png" data-image="emoji-75">
								</div>
							</div>
						</div>
					</div>
					<div class="list-comment clearfix">
						<div class="list-cmd">
							<div class="item-comment clearfix">
								<div class="image">
									<img src="image/A-kun.jpg" class="img-circle">
								</div>
								<div class="info main">
									<p class="name"><a href="">A-kun</a> · <span>otaku</span></p>
									<p class="text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Distinctio, ducimus.</p>
									<p class="like"><a class="cmd-main" disabled="disabled">Phản hồi</a> · <span class="like"><img src="image/like.png"> <span class="num-like">200</span></span> · <span class="dislike"><img src="image/dislike.png"> <span class="num-dislike">100</span></span> <span class="cmd-date">· 04/01/2018</span></p>
									<div class="list-comment reply">
										<div class="list-cmd">
											<div class="item-comment clearfix">
												<div class="image">
													<img src="image/Asuna.jpg" class="img-circle">
												</div>
												<div class="info">
													<p class="name"><a href="">Asuna</a> · <span>kiếm vương</span></p>
													<p class="text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Distinctio, ducimus.</p>
													<p class="like"><a class="cmd-child" disabled="disabled">Phản hồi</a> · <span class="like"><img src="image/like.png"> <span class="num-like"></span></span> · <span class="dislike"><img src="image/dislike.png"> <span class="num-dislike"></span></span> <span class="cmd-date">· 04/01/2018</span></p>
												</div>
											</div>
											<div class="item-comment clearfix">
												<div class="image">
													<img src="image/Eren.jpg" class="img-circle">
												</div>
												<div class="info">
													<p class="name"><a href="">Eren</a> · <span>người khổng lồ</span></p>
													<p class="text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Distinctio, ducimus.</p>
													<p class="like"><a class="cmd-child" disabled="disabled">Phản hồi</a> · <span class="like"><img src="image/like.png"> <span class="num-like"></span></span> · <span class="dislike"><img src="image/dislike.png"> <span class="num-dislike"></span></span> <span class="cmd-date">· 04/01/2018</span></p>
												</div>
											</div>
										</div>
										<div class="more">
											<a disabled="disabled">Xem thêm bình luận</a>
										</div>
									</div>
								</div>
							</div>
							<div class="item-comment clearfix">
								<div class="image">
									<img src="image/kirito-150x150.png" class="img-circle">
								</div>
								<div class="info main">
									<p class="name"><a href="">Kirito</a> · <span>hacker</span></p>
									<p class="text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Distinctio, ducimus.</p>
									<p class="like"><a class="cmd-main" disabled="disabled">Phản hồi</a> · <span class="like"><img src="image/like.png"> <span class="num-like">20</span></span> · <span class="dislike"><img src="image/dislike.png"> <span class="num-dislike"></span></span> <span class="cmd-date">· 04/01/2018</span></p>
								</div>
							</div>
							<div class="item-comment clearfix">
								<div class="image">
									<img src="image/Eren.jpg" class="img-circle">
								</div>
								<div class="info main">
									<p class="name"><a href="">Eren</a> · <span>người khổng lồ</span></p>
									<p class="text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Distinctio, ducimus.</p>
									<p class="like"><a class="cmd-main" disabled="disabled">Phản hồi</a> · <span class="like"><img src="image/like.png"> <span class="num-like"></span></span> · <span class="dislike"><img src="image/dislike.png"> <span class="num-dislike"></span></span> <span class="cmd-date">· 04/01/2018</span></p>
								</div>
							</div>
						</div>
						<div class="more">
							<a disabled="disabled">Xem thêm bình luận</a>
						</div>
					</div>
				</div>
				<hr>
				<div class="books-else">
					<h3>Có thể bạn thích</h3>
					<div class="books-slide">
						<div class="book-item">
							<a href="detail-book.html"><img src="image/bang-hoai-3rd2.jpg"/></a>
							<p>Băng Hoại 3rd</p>
						</div>
						<div class="book-item">
							<a href="detail-book.html"><img src="image/boruto2.jpg"/></a>
							<p>Boruto</p>
						</div>
						<div class="book-item">
							<a href="detail-book.html"><img src="image/mahoutsukai-no-yome2.jpg"/></a>
							<p>Mahoutsukai no yome</p>
						</div>
						<div class="book-item">
							<a href="detail-book.html"><img src="image/himouto-umaru-chan2.jpg"/></a>
							<p>Himouto Umaru-chan</p>
						</div>
						<div class="book-item">
							<a href="detail-book.html"><img src="image/sword-art-online.jpg"/></a>
							<p>Sword Art Online</p>
						</div>
						<div class="book-item">
							<a href="detail-book.html"><img src="image/attack-on-titan-movie2.jpg"/></a>
							<p>Attack on Titan</p>
						</div>
						<div class="book-item">
							<a href="detail-book.html"><img src="image/overlord-800.jpg"/></a>
							<p>Overlord</p>
						</div>
						<div class="book-item">
							<a href="detail-book.html"><img src="image/seiken-tsukai-no-kinshuu-eishou2.jpg"/></a>
							<p>Seiken tsukai no kinshuu eishou</p>
						</div>
						<div class="book-item">
							<a href="detail-book.html"><img src="image/shokugeki-no-souma2.jpg"/></a>
							<p>Shokugeki no Souma</p>
						</div>
						<div class="book-item">
							<a href="detail-book.html"><img src="image/Astolfo.jpg"/></a>
							<p>Astolfo</p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

	@include('partials.layouts.content_footer')

	@include('partials.layouts.define_footer')

	<script type="text/javascript" src="{{ asset('js/read.js') }}"></script>
</body>
</html>
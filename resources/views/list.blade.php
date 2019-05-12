@extends('master')

@section('define-header')
	<link rel="stylesheet" type="text/css" href="css/list.css">
@endsection

@section('content')
<section>
	<div class="container">
		<div class="title blue">
			<h1>Comedy</h1>
			<p>Các loại truyện có yếu tố hài hước, vui nhộn</p>
		</div>
	</div>
	<div class="main container">
		<div class="row">
			<div class="listbook col-lg-9 col-md-9 col-sm-12 col-xs-12">
				<div class="content">
					<ul class="breadcrumb">
						<li><a href="">Trang chủ</a></li>
						<li class="active">Thể loại Comedy</li>
					</ul>
					<div class="list">
						<div class="book clearfix">
							<a href=""><img src="image/bang-hoai-3rd.jpg" width="160px" height="160px"></a>
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

								<div class="type"><strong>Thể loại:</strong> <a href="">Hài hước</a>, <a href="">phiêu lưu</a>, <a href="">khoa học viễn tưởng</a>, <a href="">harem</a></div>
								<div class="book-content"><strong>Nội dung:</strong> Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusantium velit et error asperiores sint ea, deleniti, laboriosam facere mollitia officiis tempora laudantium. Adipisci necessitatibus harum, dolor vel earum, alias natus.</div>
							</div>
						</div>
						<hr>
						<div class="book clearfix">
							<a href=""><img src="image/boruto.jpg" width="160px" height="160px"></a>
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

								<div class="type"><strong>Thể loại:</strong> <a href="">Hài hước</a>, <a href="">phiêu lưu</a>, <a href="">khoa học viễn tưởng</a>, <a href="">harem</a></div>
								<div class="book-content"><strong>Nội dung:</strong> Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusantium velit et error asperiores sint ea, deleniti, laboriosam facere mollitia officiis tempora laudantium. Adipisci necessitatibus harum, dolor vel earum, alias natus.</div>
							</div>
						</div>
						<hr>
						<div class="book clearfix">
							<a href=""><img src="image/mahoutsukai-no-yome.jpg" width="160px" height="160px"></a>
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

								<div class="type"><strong>Thể loại:</strong> <a href="">Hài hước</a>, <a href="">phiêu lưu</a>, <a href="">khoa học viễn tưởng</a>, <a href="">harem</a></div>
								<div class="book-content"><strong>Nội dung:</strong> Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusantium velit et error asperiores sint ea, deleniti, laboriosam facere mollitia officiis tempora laudantium. Adipisci necessitatibus harum, dolor vel earum, alias natus.</div>
							</div>
						</div>
						<hr>
						<div class="book clearfix">
							<a href=""><img src="image/himouto-umaru-chan.jpg" width="160px" height="160px"></a>
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

								<div class="type"><strong>Thể loại:</strong> <a href="">Hài hước</a>, <a href="">phiêu lưu</a>, <a href="">khoa học viễn tưởng</a>, <a href="">harem</a></div>
								<div class="book-content"><strong>Nội dung:</strong> Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusantium velit et error asperiores sint ea, deleniti, laboriosam facere mollitia officiis tempora laudantium. Adipisci necessitatibus harum, dolor vel earum, alias natus.</div>
							</div>
						</div>
						<hr>
						<div class="book clearfix">
							<a href=""><img src="image/sword-art-online.jpg" width="160px" height="160px"></a>
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

								<div class="type"><strong>Thể loại:</strong> <a href="">Hài hước</a>, <a href="">phiêu lưu</a>, <a href="">khoa học viễn tưởng</a>, <a href="">harem</a></div>
								<div class="book-content"><strong>Nội dung:</strong> Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusantium velit et error asperiores sint ea, deleniti, laboriosam facere mollitia officiis tempora laudantium. Adipisci necessitatibus harum, dolor vel earum, alias natus.</div>
							</div>
						</div>
						<hr>
						<div class="book clearfix">
							<a href=""><img src="image/attack-on-titan-movie.jpg" width="160px" height="160px"></a>
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

								<div class="type"><strong>Thể loại:</strong> <a href="">Hài hước</a>, <a href="">phiêu lưu</a>, <a href="">khoa học viễn tưởng</a>, <a href="">harem</a></div>
								<div class="book-content"><strong>Nội dung:</strong> Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusantium velit et error asperiores sint ea, deleniti, laboriosam facere mollitia officiis tempora laudantium. Adipisci necessitatibus harum, dolor vel earum, alias natus.</div>
							</div>
						</div>
						<hr>
						<div class="book clearfix">
							<a href=""><img src="image/seiken-tsukai-no-kinshuu-eishou.jpg" width="160px" height="160px"></a>
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

								<div class="type"><strong>Thể loại:</strong> <a href="">Hài hước</a>, <a href="">phiêu lưu</a>, <a href="">khoa học viễn tưởng</a>, <a href="">harem</a></div>
								<div class="book-content"><strong>Nội dung:</strong> Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusantium velit et error asperiores sint ea, deleniti, laboriosam facere mollitia officiis tempora laudantium. Adipisci necessitatibus harum, dolor vel earum, alias natus.</div>
							</div>
						</div>
						<hr>
						<div class="book clearfix">
							<a href=""><img src="image/shokugeki-no-souma.jpg" width="160px" height="160px"></a>
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

								<div class="type"><strong>Thể loại:</strong> <a href="">Hài hước</a>, <a href="">phiêu lưu</a>, <a href="">khoa học viễn tưởng</a>, <a href="">harem</a></div>
								<div class="book-content"><strong>Nội dung:</strong> Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusantium velit et error asperiores sint ea, deleniti, laboriosam facere mollitia officiis tempora laudantium. Adipisci necessitatibus harum, dolor vel earum, alias natus.</div>
							</div>
						</div>
						<hr>
						<div class="book clearfix">
							<a href=""><img src="image/conan.jpg" width="160px" height="160px"></a>
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

								<div class="type"><strong>Thể loại:</strong> <a href="">Hài hước</a>, <a href="">phiêu lưu</a>, <a href="">khoa học viễn tưởng</a>, <a href="">harem</a></div>
								<div class="book-content"><strong>Nội dung:</strong> Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusantium velit et error asperiores sint ea, deleniti, laboriosam facere mollitia officiis tempora laudantium. Adipisci necessitatibus harum, dolor vel earum, alias natus.</div>
							</div>
						</div>
						<hr>
						<div class="book clearfix">
							<a href=""><img src="image/dragon-ball-super.jpg" width="160px" height="160px"></a>
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

								<div class="type"><strong>Thể loại:</strong> <a href="">Hài hước</a>, <a href="">phiêu lưu</a>, <a href="">khoa học viễn tưởng</a>, <a href="">harem</a></div>
								<div class="book-content"><strong>Nội dung:</strong> Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusantium velit et error asperiores sint ea, deleniti, laboriosam facere mollitia officiis tempora laudantium. Adipisci necessitatibus harum, dolor vel earum, alias natus.</div>
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
			<div class="sidebar col-lg-3 col-md-3">
				<div class="content">
					<div class="box first">
						<div class="header">
							<ul class="nav nav-tabs">
								<li class="active"><a data-toggle="tab" href="#home">Top Ngày</a></li>
								<li class="hide-md"><a data-toggle="tab" href="#menu1">Top Tuần</a></li>
								<li><a data-toggle="tab" href="#menu2">Top Tháng</a></li>
							</ul>
						</div>

						<div class="content">
							<div class="tab-content">
								<div id="home" class="tab-pane fade in active">
									<table>
										<tr class="gray">
											<td>
												<p><a href="detail-book.html" class="show-popup book">Băng Hoại 3rd</a></p>
												<p>1000 lượt xem</p>
											</td>
										</tr>
										<tr>
											<td>
												<p><a href="detail-book.html" class="show-popup book">Băng Hoại 3rd Lorem ipsum</a></p>
												<p>1000 lượt xem</p>
											</td>
										</tr>
										<tr class="gray">
											<td>
												<p><a href="detail-book.html" class="show-popup book">Băng Hoại 3rd Lorem ipsum dolor</a></p>
												<p>1000 lượt xem</p>
											</td>
										</tr>
										<tr>
											<td>
												<p><a href="detail-book.html" class="show-popup book">Băng Hoại 3rd Lorem ipsum</a></p>
												<p>1000 lượt xem</p>
											</td>
										</tr>
										<tr class="gray">
											<td>
												<p><a href="detail-book.html" class="show-popup book">Băng Hoại 3rd Lorem ipsum dolor</a></p>
												<p>1000 lượt xem</p>
											</td>
										</tr>
										<tr>
											<td>
												<p><a href="detail-book.html" class="show-popup book">Băng Hoại 3rd Lorem ipsum</a></p>
												<p>1000 lượt xem</p>
											</td>
										</tr>
									</table>
								</div>
								<div id="menu1" class="tab-pane fade">
									<table>
										<tr class="gray">
											<td>
												<p><a href="detail-book.html" class="show-popup book">Băng Hoại 3rd</a></p>
												<p>1000 lượt xem</p>
											</td>
										</tr>
										<tr>
											<td>
												<p><a href="detail-book.html" class="show-popup book">Băng Hoại 3rd Lorem ipsum</a></p>
												<p>1000 lượt xem</p>
											</td>
										</tr>
										<tr class="gray">
											<td>
												<p><a href="detail-book.html" class="show-popup book">Băng Hoại 3rd Lorem ipsum dolor</a></p>
												<p>1000 lượt xem</p>
											</td>
										</tr>
										<tr>
											<td>
												<p><a href="detail-book.html" class="show-popup book">Băng Hoại 3rd Lorem ipsum</a></p>
												<p>1000 lượt xem</p>
											</td>
										</tr>
										<tr class="gray">
											<td>
												<p><a href="detail-book.html" class="show-popup book">Băng Hoại 3rd Lorem ipsum dolor</a></p>
												<p>1000 lượt xem</p>
											</td>
										</tr>
										<tr>
											<td>
												<p><a href="detail-book.html" class="show-popup book">Băng Hoại 3rd Lorem ipsum</a></p>
												<p>1000 lượt xem</p>
											</td>
										</tr>
									</table>
								</div>
								<div id="menu2" class="tab-pane fade">
									<table>
										<tr class="gray">
											<td>
												<p><a href="detail-book.html" class="show-popup book">Băng Hoại 3rd</a></p>
												<p>1000 lượt xem</p>
											</td>
										</tr>
										<tr>
											<td>
												<p><a href="detail-book.html" class="show-popup book">Băng Hoại 3rd Lorem ipsum</a></p>
												<p>1000 lượt xem</p>
											</td>
										</tr>
										<tr class="gray">
											<td>
												<p><a href="detail-book.html" class="show-popup book">Băng Hoại 3rd Lorem ipsum dolor</a></p>
												<p>1000 lượt xem</p>
											</td>
										</tr>
										<tr>
											<td>
												<p><a href="detail-book.html" class="show-popup book">Băng Hoại 3rd Lorem ipsum</a></p>
												<p>1000 lượt xem</p>
											</td>
										</tr>
										<tr class="gray">
											<td>
												<p><a href="detail-book.html" class="show-popup book">Băng Hoại 3rd Lorem ipsum dolor</a></p>
												<p>1000 lượt xem</p>
											</td>
										</tr>
										<tr>
											<td>
												<p><a href="detail-book.html" class="show-popup book">Băng Hoại 3rd Lorem ipsum</a></p>
												<p>1000 lượt xem</p>
											</td>
										</tr>
									</table>
								</div>
							</div>
						</div>
					</div>
					<div class="box">
						<div class="header">Truyện Ngẫu Nhiên</div>
						<div class="content">
							<div class="book row first">
								<div class="col-lg-3 col-md-4"><a href="detail-book.html"><img src="image/boruto.jpg" width="60px" height="60px"></a></div>
								<div class="col-lg-9 col-md-8">
									<div class="name"><a href="detail-book.html" class="show-popup book">Băng Hoại 3rd</a></div>
									<div class="info">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</div>
								</div>
							</div>
							<div class="book row">
								<div class="col-lg-3 col-md-4"><a href="detail-book.html"><img src="image/mahoutsukai-no-yome.jpg" width="60px" height="60px"></a></div>
								<div class="col-lg-9 col-md-8">
									<div class="name"><a href="detail-book.html" class="show-popup book">Băng Hoại 3rd</a></div>
									<div class="info">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</div>
								</div>
							</div>
							<div class="book row">
								<div class="col-lg-3 col-md-4"><a href="detail-book.html"><img src="image/himouto-umaru-chan.jpg" width="60px" height="60px"></a></div>
								<div class="col-lg-9 col-md-8">
									<div class="name"><a href="detail-book.html" class="show-popup book">Băng Hoại 3rd</a></div>
									<div class="info">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</div>
								</div>
							</div>
							<div class="book row">
								<div class="col-lg-3 col-md-4"><a href="detail-book.html"><img src="image/sword-art-online.jpg" width="60px" height="60px"></a></div>
								<div class="col-lg-9 col-md-8">
									<div class="name"><a href="detail-book.html" class="show-popup book">Băng Hoại 3rd</a></div>
									<div class="info">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</div>
								</div>
							</div>
							<div class="book row">
								<div class="col-lg-3 col-md-4"><a href="detail-book.html"><img src="image/attack-on-titan-movie.jpg" width="60px" height="60px"></a></div>
								<div class="col-lg-9 col-md-8">
									<div class="name"><a href="detail-book.html" class="show-popup book">Băng Hoại 3rd</a></div>
									<div class="info">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</div>
								</div>
							</div>
						</div>
					</div>
					<div class="box">
						<div class="header">Bình Luận Mới</div>
						<div class="content">
							<div class="user row first">
								<div class="col-lg-3 col-md-4"><a href="detail-user.html"><img src="image/Eren.jpg" class="img-circle" width="60px"></a></div>
								<div class="col-lg-9 col-md-8">
									<div class="name"><a href="detail-user.html" class="show-popup user">Eren</a> bình luận <a href="detail-book.html" class="show-popup book">Băng Hoại 3rd</a></div>
									<div class="info">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</div>
								</div>
							</div>
							<div class="user row">
								<div class="col-lg-3 col-md-4"><a href="detail-user.html"><img src="image/Asuna.jpg" class="img-circle" width="60px"></a></div>
								<div class="col-lg-9 col-md-8">
									<div class="name"><a href="detail-user.html" class="show-popup user">Asuna</a> bình luận <a href="detail-book.html" class="show-popup book">Băng Hoại 3rd</a></div>
									<div class="info">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</div>
								</div>
							</div>
							<div class="user row">
								<div class="col-lg-3 col-md-4"><a href="detail-user.html"><img src="image/Astolfo.jpg" class="img-circle" width="60px"></a></div>
								<div class="col-lg-9 col-md-8">
									<div class="name"><a href="detail-user.html" class="show-popup user">Astolfo</a> bình luận <a href="detail-book.html" class="show-popup book">Băng Hoại 3rd</a></div>
									<div class="info">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</div>
								</div>
							</div>
							<div class="user row">
								<div class="col-lg-3 col-md-4"><a href="detail-user.html"><img src="image/Horikita.jpg" class="img-circle" width="60px"></a></div>
								<div class="col-lg-9 col-md-8">
									<div class="name"><a href="detail-user.html" class="show-popup user">Horikita</a> bình luận <a href="detail-book.html" class="show-popup book">Băng Hoại 3rd</a></div>
									<div class="info">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</div>
								</div>
							</div>
							<div class="user row">
								<div class="col-lg-3 col-md-4"><a href="detail-user.html"><img src="image/A-kun.jpg" class="img-circle" width="60px"></a></div>
								<div class="col-lg-9 col-md-8">
									<div class="name"><a href="detail-user.html" class="show-popup user">Kẻ Lang Thang</a> bình luận <a href="detail-book.html" class="show-popup">Băng Hoại 3rd</a></div>
									<div class="info">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</div>
								</div>
							</div>
						</div>
					</div>
					<div class="facebook">
						<div class="fb-page w1370px" data-href="https://www.facebook.com/AnimeVNOnline" data-tabs="timeline" data-width="305" data-small-header="false" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true">
							<iframe src="https://www.facebook.com/plugins/page.php?href=https%3A%2F%2Fwww.facebook.com%2FAnimeVNOnline&tabs=timeline&width=305&height=400&small_header=false&adapt_container_width=true&hide_cover=false&show_facepile=true&appId" width="305" height="400" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowTransparency="true"></iframe>
						</div>
						<div class="fb-page w1200px" data-href="https://www.facebook.com/AnimeVNOnline" data-tabs="timeline" data-width="263" data-small-header="false" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true">
							<iframe src="https://www.facebook.com/plugins/page.php?href=https%3A%2F%2Fwww.facebook.com%2FAnimeVNOnline&tabs=timeline&width=263&height=400&small_header=false&adapt_container_width=true&hide_cover=false&show_facepile=true&appId" width="263" height="400" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowTransparency="true"></iframe>
						</div>
						<div class="fb-page w992px" data-href="https://www.facebook.com/AnimeVNOnline" data-tabs="timeline" data-width="213" data-small-header="false" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true">
							<iframe src="https://www.facebook.com/plugins/page.php?href=https%3A%2F%2Fwww.facebook.com%2FAnimeVNOnline&tabs=timeline&width=213&height=400&small_header=false&adapt_container_width=true&hide_cover=false&show_facepile=true&appId" width="213" height="400" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowTransparency="true"></iframe>
						</div>
					</div>
					<div class="advertisement box">
						<img src="image/advertisement.jpg">
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
@endsection

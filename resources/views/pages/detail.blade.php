@extends('master')

@section('define-header')
	<link rel="stylesheet" type="text/css" href="css/detail.css">
	<link rel="stylesheet" type="text/css" href="css/comment.css">
@endsection

@section('content')
<section>
	<div class="container">
		<div class="title blue">
			<h1>Chi Tiết Truyện</h1>
			<p>Bạn có thể xem thông tin sách được cập nhật đầy đủ ở đây</p>
		</div>
	</div>
	<div class="main container notlogin">
		<div class="row">
			<div class="detail col-lg-9 col-md-9 col-sm-12 col-xs-12">
				<div class="content">
					<ul class="breadcrumb">
						<li><a href="">Trang chủ</a></li>
						<li class="active">Overlord</li>
					</ul>
					<div class="book">
						<div class="line first clearfix">
							<div class="image left">
								<div class="img">
									<img src="image/overlord-800.jpg">
								</div>
								<div class="button">
									<button type="button" class="btn left open-modal" data-modal="#modalnotlogin">Đánh giá</button>
									<button type="button" class="btn center open-modal" data-modal="#modalnotlogin">Theo dõi</button>
									<button type="button" class="btn right open-modal" data-modal="#modalnotlogin">Yêu thích</button>
								</div>
							</div>
							<div class="info">
								<h3>Overlord</h3>
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
								<p><strong>Tên khác:</strong> Chúa Tể</p>
								<p><strong>Thể loại:</strong> <a href="">Comedy</a>, <a href="">Magic, <a href="">Fanstasy</a></p>
								<p><strong>Tác giả:</strong> <a href="">Maruyama Kugane</a></p>
								<p><strong>Minh họa:</strong> <a href="">Miyama Hugin</a></p>
								<p><strong>Nhóm dịch:</strong> <a href="">A3manga</a>, <a href="">MangaVN</a>, <a href="">Dark Angels Group</a>, <a href="">A3manga</a>, <a href="">MangaVN</a>, <a href="">Dark Angels Group</a></p>
								<p><strong>Ngày xuất bản:</strong> 30/07/2012</p>
								<p><strong>Tình trạng:</strong> Đang tiến hành</p>
								<p><strong>Nhân vật:</strong> <a href="">Mononga</a>, <a href="">Albedo</a>, <a href="">Shalltear Bloodfallen</a>, <a href="">Cocytus</a>, <a href="">Demiurge</a>, <a href="">Sebas Tian</a>, <a href="">Narberal Gamma</a></p>
							</div>
						</div>
						<div class="line second">
							<p style="text-align: justify;"><strong>Giới thiệu:</strong> Câu chuyện bắt đầu trong những giây phút cuối tại Yggdrasil, một game online đình đám sắp phải đóng cửa. Nhân vật chính Momonga quyết định ở lại đến tận những phút cuối cùng với trò chơi yêu thích của mình và chờ server down. Bất ngờ, server không shutdown và Momonga bị mắc kẹt trong nhân vật của chính mình và dịch chuyển tới một thế giới khác. Vị chúa tể hùng mạnh giờ đây lại tiếp tục đi khám phá thế giới mới và đối mặt với những thử thách mới. Không gia đình, bạn bè, địa vị xã hội, người đàn ông bình thường này sẽ cố gắng hết sức để thống trị thế giới mới này.</p>
							<p><strong>Từ khóa:</strong> Overlord, Momonga, Ainz Ooal Gown, Albedo, Nazarick</p>
						</div>
						<div class="line chap">
							<!-- <h4>Danh sách chap</h4>
							<hr> -->
							<div class="header">
								<ul class="nav nav-tabs">
									<li class="active"><a data-toggle="tab" href="#group1">A3manga</a></li>
									<li><a data-toggle="tab" href="#group2">MangaVN</a></li>
									<li><a data-toggle="tab" href="#group3">Dark Angels Group</a></li>
								</ul>
							</div>
							<div class="body">
								<div class="info clearfix">
									<span class="chap-index"><strong>OVERLORD SỐ CHAP</strong></span>
									<span class="date"><strong>NGÀY ĐĂNG</strong></span>
								</div>
								<div class="tab-content">
									<div id="group1" class="tab-pane fade in active">
										<table>
											<tr>
												<td class="clearfix">
													<p class="left"><a href="#">Overlord chap 32</a></p>
													<p class="right">24-12-2017</p>
												</td>
											</tr>
											<tr>
												<td class="clearfix">
													<p class="left"><a href="#">Overlord chap 31</a></p>
													<p class="right">17-12-2017</p>
												</td>
											</tr>
											<tr>
												<td class="clearfix">
													<p class="left"><a href="#">Overlord chap 30</a></p>
													<p class="right">10-12-2017</p>
												</td>
											</tr>
											<tr>
												<td class="clearfix">
													<p class="left"><a href="#">Overlord chap 29</a></p>
													<p class="right">03-12-2017</p>
												</td>
											</tr>
											<tr>
												<td class="clearfix">
													<p class="left"><a href="#">Overlord chap 28</a></p>
													<p class="right">26-11-2017</p>
												</td>
											</tr>
											<tr>
												<td class="clearfix">
													<p class="left"><a href="#">Overlord chap 27</a></p>
													<p class="right">19-11-2017</p>
												</td>
											</tr>
											<tr>
												<td class="clearfix">
													<p class="left"><a href="#">Overlord chap 26</a></p>
													<p class="right">12-11-2017</p>
												</td>
											</tr>
											<tr>
												<td class="clearfix">
													<p class="left"><a href="#">Overlord chap 25</a></p>
													<p class="right">05-11-2017</p>
												</td>
											</tr>
											<tr>
												<td class="clearfix">
													<p class="left"><a href="#">Overlord chap 24</a></p>
													<p class="right">29-10-2017</p>
												</td>
											</tr>
											<tr>
												<td class="clearfix">
													<p class="left"><a href="#">Overlord chap 23</a></p>
													<p class="right">22-10-2017</p>
												</td>
											</tr>
											<tr>
												<td class="clearfix">
													<p class="left"><a href="#">Overlord chap 22</a></p>
													<p class="right">15-10-2017</p>
												</td>
											</tr>
											<tr>
												<td class="clearfix">
													<p class="left"><a href="#">Overlord chap 21</a></p>
													<p class="right">08-10-2017</p>
												</td>
											</tr>
											<tr>
												<td class="clearfix">
													<p class="left"><a href="#">Overlord chap 20</a></p>
													<p class="right">01-10-2017</p>
												</td>
											</tr>
											<tr>
												<td class="clearfix">
													<p class="left"><a href="#">Overlord chap 19</a></p>
													<p class="right">24-09-2017</p>
												</td>
											</tr>
											<tr>
												<td class="clearfix">
													<p class="left"><a href="#">Overlord chap 18</a></p>
													<p class="right">17-09-2017</p>
												</td>
											</tr>
											<tr>
												<td class="clearfix">
													<p class="left"><a href="#">Overlord chap 17</a></p>
													<p class="right">10-09-2017</p>
												</td>
											</tr>
											<tr>
												<td class="clearfix">
													<p class="left"><a href="#">Overlord chap 16</a></p>
													<p class="right">03-09-2017</p>
												</td>
											</tr>
											<tr>
												<td class="clearfix">
													<p class="left"><a href="#">Overlord chap 15</a></p>
													<p class="right">27-08-2017</p>
												</td>
											</tr>
											<tr>
												<td class="clearfix">
													<p class="left"><a href="#">Overlord chap 14</a></p>
													<p class="right">20-08-2017</p>
												</td>
											</tr>
											<tr>
												<td class="clearfix">
													<p class="left"><a href="#">Overlord chap 13</a></p>
													<p class="right">13-08-2017</p>
												</td>
											</tr>
											<tr>
												<td class="clearfix">
													<p class="left"><a href="#">Overlord chap 12</a></p>
													<p class="right">06-08-2017</p>
												</td>
											</tr>
											<tr>
												<td class="clearfix">
													<p class="left"><a href="#">Overlord chap 11</a></p>
													<p class="right">30-07-2017</p>
												</td>
											</tr>
											<tr>
												<td class="clearfix">
													<p class="left"><a href="#">Overlord chap 10</a></p>
													<p class="right">23-07-2017</p>
												</td>
											</tr>
											<tr>
												<td class="clearfix">
													<p class="left"><a href="#">Overlord chap 9</a></p>
													<p class="right">16-07-2017</p>
												</td>
											</tr>
											<tr>
												<td class="clearfix">
													<p class="left"><a href="#">Overlord chap 8</a></p>
													<p class="right">09-07-2017</p>
												</td>
											</tr>
											<tr>
												<td class="clearfix">
													<p class="left"><a href="#">Overlord chap 7</a></p>
													<p class="right">02-07-2017</p>
												</td>
											</tr>
											<tr>
												<td class="clearfix">
													<p class="left"><a href="#">Overlord chap 6</a></p>
													<p class="right">25-06-2017</p>
												</td>
											</tr>
											<tr>
												<td class="clearfix">
													<p class="left"><a href="#">Overlord chap 5</a></p>
													<p class="right">18-06-2017</p>
												</td>
											</tr>
											<tr>
												<td class="clearfix">
													<p class="left"><a href="#">Overlord chap 4</a></p>
													<p class="right">11-06-2017</p>
												</td>
											</tr>
											<tr>
												<td class="clearfix">
													<p class="left"><a href="#">Overlord chap 3</a></p>
													<p class="right">04-06-2017</p>
												</td>
											</tr>
											<tr>
												<td class="clearfix">
													<p class="left"><a href="#">Overlord chap 2</a></p>
													<p class="right">28-05-2017</p>
												</td>
											</tr>
											<tr>
												<td class="clearfix">
													<p class="left"><a href="#">Overlord chap 1</a></p>
													<p class="right">21-05-2017</p>
												</td>
											</tr>
										</table>
									</div>
									<div id="group2" class="tab-pane fade">
										<table>
											<tr>
												<td class="clearfix">
													<p class="left"><a href="#">Overlord chap 30</a></p>
													<p class="right">10-12-2017</p>
												</td>
											</tr>
											<tr>
												<td class="clearfix">
													<p class="left"><a href="#">Overlord chap 29</a></p>
													<p class="right">03-12-2017</p>
												</td>
											</tr>
											<tr>
												<td class="clearfix">
													<p class="left"><a href="#">Overlord chap 28</a></p>
													<p class="right">26-11-2017</p>
												</td>
											</tr>
											<tr>
												<td class="clearfix">
													<p class="left"><a href="#">Overlord chap 27</a></p>
													<p class="right">19-11-2017</p>
												</td>
											</tr>
											<tr>
												<td class="clearfix">
													<p class="left"><a href="#">Overlord chap 26</a></p>
													<p class="right">12-11-2017</p>
												</td>
											</tr>
											<tr>
												<td class="clearfix">
													<p class="left"><a href="#">Overlord chap 25</a></p>
													<p class="right">05-11-2017</p>
												</td>
											</tr>
											<tr>
												<td class="clearfix">
													<p class="left"><a href="#">Overlord chap 24</a></p>
													<p class="right">29-10-2017</p>
												</td>
											</tr>
											<tr>
												<td class="clearfix">
													<p class="left"><a href="#">Overlord chap 23</a></p>
													<p class="right">22-10-2017</p>
												</td>
											</tr>
											<tr>
												<td class="clearfix">
													<p class="left"><a href="#">Overlord chap 22</a></p>
													<p class="right">15-10-2017</p>
												</td>
											</tr>
											<tr>
												<td class="clearfix">
													<p class="left"><a href="#">Overlord chap 21</a></p>
													<p class="right">08-10-2017</p>
												</td>
											</tr>
											<tr>
												<td class="clearfix">
													<p class="left"><a href="#">Overlord chap 20</a></p>
													<p class="right">01-10-2017</p>
												</td>
											</tr>
											<tr>
												<td class="clearfix">
													<p class="left"><a href="#">Overlord chap 19</a></p>
													<p class="right">24-09-2017</p>
												</td>
											</tr>
											<tr>
												<td class="clearfix">
													<p class="left"><a href="#">Overlord chap 18</a></p>
													<p class="right">17-09-2017</p>
												</td>
											</tr>
											<tr>
												<td class="clearfix">
													<p class="left"><a href="#">Overlord chap 17</a></p>
													<p class="right">10-09-2017</p>
												</td>
											</tr>
											<tr>
												<td class="clearfix">
													<p class="left"><a href="#">Overlord chap 16</a></p>
													<p class="right">03-09-2017</p>
												</td>
											</tr>
											<tr>
												<td class="clearfix">
													<p class="left"><a href="#">Overlord chap 15</a></p>
													<p class="right">27-08-2017</p>
												</td>
											</tr>
											<tr>
												<td class="clearfix">
													<p class="left"><a href="#">Overlord chap 14</a></p>
													<p class="right">20-08-2017</p>
												</td>
											</tr>
											<tr>
												<td class="clearfix">
													<p class="left"><a href="#">Overlord chap 13</a></p>
													<p class="right">13-08-2017</p>
												</td>
											</tr>
											<tr>
												<td class="clearfix">
													<p class="left"><a href="#">Overlord chap 12</a></p>
													<p class="right">06-08-2017</p>
												</td>
											</tr>
											<tr>
												<td class="clearfix">
													<p class="left"><a href="#">Overlord chap 11</a></p>
													<p class="right">30-07-2017</p>
												</td>
											</tr>
											<tr>
												<td class="clearfix">
													<p class="left"><a href="#">Overlord chap 10</a></p>
													<p class="right">23-07-2017</p>
												</td>
											</tr>
											<tr>
												<td class="clearfix">
													<p class="left"><a href="#">Overlord chap 9</a></p>
													<p class="right">16-07-2017</p>
												</td>
											</tr>
											<tr>
												<td class="clearfix">
													<p class="left"><a href="#">Overlord chap 8</a></p>
													<p class="right">09-07-2017</p>
												</td>
											</tr>
											<tr>
												<td class="clearfix">
													<p class="left"><a href="#">Overlord chap 7</a></p>
													<p class="right">02-07-2017</p>
												</td>
											</tr>
											<tr>
												<td class="clearfix">
													<p class="left"><a href="#">Overlord chap 6</a></p>
													<p class="right">25-06-2017</p>
												</td>
											</tr>
											<tr>
												<td class="clearfix">
													<p class="left"><a href="#">Overlord chap 5</a></p>
													<p class="right">18-06-2017</p>
												</td>
											</tr>
											<tr>
												<td class="clearfix">
													<p class="left"><a href="#">Overlord chap 4</a></p>
													<p class="right">11-06-2017</p>
												</td>
											</tr>
											<tr>
												<td class="clearfix">
													<p class="left"><a href="#">Overlord chap 3</a></p>
													<p class="right">04-06-2017</p>
												</td>
											</tr>
											<tr>
												<td class="clearfix">
													<p class="left"><a href="#">Overlord chap 2</a></p>
													<p class="right">28-05-2017</p>
												</td>
											</tr>
											<tr>
												<td class="clearfix">
													<p class="left"><a href="#">Overlord chap 1</a></p>
													<p class="right">21-05-2017</p>
												</td>
											</tr>
										</table>
									</div>
									<div id="group3" class="tab-pane fade">
										<table>
											<tr>
												<td class="clearfix">
													<p class="left"><a href="#">Overlord chap 28</a></p>
													<p class="right">26-11-2017</p>
												</td>
											</tr>
											<tr>
												<td class="clearfix">
													<p class="left"><a href="#">Overlord chap 27</a></p>
													<p class="right">19-11-2017</p>
												</td>
											</tr>
											<tr>
												<td class="clearfix">
													<p class="left"><a href="#">Overlord chap 26</a></p>
													<p class="right">12-11-2017</p>
												</td>
											</tr>
											<tr>
												<td class="clearfix">
													<p class="left"><a href="#">Overlord chap 25</a></p>
													<p class="right">05-11-2017</p>
												</td>
											</tr>
											<tr>
												<td class="clearfix">
													<p class="left"><a href="#">Overlord chap 24</a></p>
													<p class="right">29-10-2017</p>
												</td>
											</tr>
											<tr>
												<td class="clearfix">
													<p class="left"><a href="#">Overlord chap 23</a></p>
													<p class="right">22-10-2017</p>
												</td>
											</tr>
											<tr>
												<td class="clearfix">
													<p class="left"><a href="#">Overlord chap 22</a></p>
													<p class="right">15-10-2017</p>
												</td>
											</tr>
											<tr>
												<td class="clearfix">
													<p class="left"><a href="#">Overlord chap 21</a></p>
													<p class="right">08-10-2017</p>
												</td>
											</tr>
											<tr>
												<td class="clearfix">
													<p class="left"><a href="#">Overlord chap 20</a></p>
													<p class="right">01-10-2017</p>
												</td>
											</tr>
											<tr>
												<td class="clearfix">
													<p class="left"><a href="#">Overlord chap 19</a></p>
													<p class="right">24-09-2017</p>
												</td>
											</tr>
											<tr>
												<td class="clearfix">
													<p class="left"><a href="#">Overlord chap 18</a></p>
													<p class="right">17-09-2017</p>
												</td>
											</tr>
											<tr>
												<td class="clearfix">
													<p class="left"><a href="#">Overlord chap 17</a></p>
													<p class="right">10-09-2017</p>
												</td>
											</tr>
											<tr>
												<td class="clearfix">
													<p class="left"><a href="#">Overlord chap 16</a></p>
													<p class="right">03-09-2017</p>
												</td>
											</tr>
											<tr>
												<td class="clearfix">
													<p class="left"><a href="#">Overlord chap 15</a></p>
													<p class="right">27-08-2017</p>
												</td>
											</tr>
											<tr>
												<td class="clearfix">
													<p class="left"><a href="#">Overlord chap 14</a></p>
													<p class="right">20-08-2017</p>
												</td>
											</tr>
											<tr>
												<td class="clearfix">
													<p class="left"><a href="#">Overlord chap 13</a></p>
													<p class="right">13-08-2017</p>
												</td>
											</tr>
											<tr>
												<td class="clearfix">
													<p class="left"><a href="#">Overlord chap 12</a></p>
													<p class="right">06-08-2017</p>
												</td>
											</tr>
											<tr>
												<td class="clearfix">
													<p class="left"><a href="#">Overlord chap 11</a></p>
													<p class="right">30-07-2017</p>
												</td>
											</tr>
											<tr>
												<td class="clearfix">
													<p class="left"><a href="#">Overlord chap 10</a></p>
													<p class="right">23-07-2017</p>
												</td>
											</tr>
											<tr>
												<td class="clearfix">
													<p class="left"><a href="#">Overlord chap 9</a></p>
													<p class="right">16-07-2017</p>
												</td>
											</tr>
											<tr>
												<td class="clearfix">
													<p class="left"><a href="#">Overlord chap 8</a></p>
													<p class="right">09-07-2017</p>
												</td>
											</tr>
											<tr>
												<td class="clearfix">
													<p class="left"><a href="#">Overlord chap 7</a></p>
													<p class="right">02-07-2017</p>
												</td>
											</tr>
											<tr>
												<td class="clearfix">
													<p class="left"><a href="#">Overlord chap 6</a></p>
													<p class="right">25-06-2017</p>
												</td>
											</tr>
											<tr>
												<td class="clearfix">
													<p class="left"><a href="#">Overlord chap 5</a></p>
													<p class="right">18-06-2017</p>
												</td>
											</tr>
											<tr>
												<td class="clearfix">
													<p class="left"><a href="#">Overlord chap 4</a></p>
													<p class="right">11-06-2017</p>
												</td>
											</tr>
											<tr>
												<td class="clearfix">
													<p class="left"><a href="#">Overlord chap 3</a></p>
													<p class="right">04-06-2017</p>
												</td>
											</tr>
											<tr>
												<td class="clearfix">
													<p class="left"><a href="#">Overlord chap 2</a></p>
													<p class="right">28-05-2017</p>
												</td>
											</tr>
											<tr>
												<td class="clearfix">
													<p class="left"><a href="#">Overlord chap 1</a></p>
													<p class="right">21-05-2017</p>
												</td>
											</tr>
										</table>
									</div>
								</div>
							</div>
						</div>
						<div class="line cmd comment">
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
					</div>
				</div>
			</div>
			<div class="sidebar col-lg-3 col-md-3">
				<div class="content">
					
					<div class="box first">
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
									<div class="name"><a href="detail-user.html" class="show-popup user">Eren</a> bình luận <a href="#" class="show-popup book">Băng Hoại 3rd</a></div>
									<div class="info">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</div>
								</div>
							</div>
							<div class="user row">
								<div class="col-lg-3 col-md-4"><a href="detail-user.html"><img src="image/Asuna.jpg" class="img-circle" width="60px"></a></div>
								<div class="col-lg-9 col-md-8">
									<div class="name"><a href="detail-user.html" class="show-popup user">Asuna</a> bình luận <a href="#" class="show-popup book">Băng Hoại 3rd</a></div>
									<div class="info">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</div>
								</div>
							</div>
							<div class="user row">
								<div class="col-lg-3 col-md-4"><a href="detail-user.html"><img src="image/Astolfo.jpg" class="img-circle" width="60px"></a></div>
								<div class="col-lg-9 col-md-8">
									<div class="name"><a href="detail-user.html" class="show-popup user">Astolfo</a> bình luận <a href="#" class="show-popup book">Băng Hoại 3rd</a></div>
									<div class="info">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</div>
								</div>
							</div>
							<div class="user row">
								<div class="col-lg-3 col-md-4"><a href="detail-user.html"><img src="image/Horikita.jpg" class="img-circle" width="60px"></a></div>
								<div class="col-lg-9 col-md-8">
									<div class="name"><a href="detail-user.html" class="show-popup user">Horikita</a> bình luận <a href="#" class="show-popup book">Băng Hoại 3rd</a></div>
									<div class="info">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</div>
								</div>
							</div>
							<div class="user row">
								<div class="col-lg-3 col-md-4"><a href="detail-user.html"><img src="image/A-kun.jpg" class="img-circle" width="60px"></a></div>
								<div class="col-lg-9 col-md-8">
									<div class="name"><a href="detail-user.html" class="show-popup user">Kẻ Lang Thang</a> bình luận <a href="#" class="show-popup">Băng Hoại 3rd</a></div>
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
				</div>
			</div>
		</div>
	</div>
</section>
@endsection

@section('define-footer')
	<script type="text/javascript" src="jquery/detail.js"></script>
@endsection

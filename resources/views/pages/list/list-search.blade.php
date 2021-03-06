@extends('master.list')

{{-- title --}}
@section('title-color')
deep-purple
@endsection

@section('title-header')
Tìm Kiếm Nâng Cao
@endsection

@section('title-content')
Các bạn có thể tìm kiếm truyện thông qua từ khóa, thể loại, tác giả,...
@endsection
{{-- end title --}}

@section('list')
<div class="listbook col-lg-9 col-md-9 col-sm-12 col-xs-12">
	<div class="content">
		<ul class="breadcrumb">
			<li><a href="">Trang chủ</a></li>
			<li class="active">Tìm kiếm nâng cao</li>
		</ul>
		<div class="search-box">
			<!-- <h3>Tìm kiếm</h3> -->
			<form action="{{ url('/list/search') }}" method="GET">
				<input type="hidden" name="_token" value="{{ csrf_token() }}">
				<div class="form-horizontal clearfix">
					<div class="group col-md-4 col-sm-6">
						<label>Tên truyện</label>
						<input class="form-control" type="text" name="book" placeholder="nhập tên truyện" />
					</div>
					<div class="group col-lg-2 col-md-4 col-sm-6">
						<label>Năm suất bản</label>
						<button type="button" class="select year form-control">
							<div class="text">tất cả</div> 
							<span class="caret"></span>
						</button>
						<ul class="dropdown-menu" >
							<li>tất cả</li>
							<li>2012</li>
							<li>2013</li>
							<li>2014</li>
							<li>2015</li>
							<li>2016</li>
							<li>2017</li>
						</ul>
						<input type="hidden" name="year" class="year">
					</div>
					<div class="group col-md-2 col-sm-6">
						<label>Tiến độ</label>
						<button type="button" class="select status form-control">
							<div class="text">tất cả</div> 
							<span class="caret"></span>
						</button>
						<ul class="dropdown-menu" >
							<li>tất cả</li>
							<li>hoàn thành</li>
							<li>đang tiến hành</li>
						</ul>
						<input type="hidden" name="status" class="status">
					</div>
					<div class="group col-md-2 col-sm-6">
						<label>Số chap</label>
						<button type="button" class="select chap form-control">
							<div class="text">tất cả</div> 
							<span class="caret"></span>
						</button>
						<ul class="dropdown-menu">
							<li>tất cả</li>
							<li>one shot</li>
							<li>2-10 chap</li>
							<li>11-20 chap</li>
							<li>21-50 chap</li>
							<li>51-100 chap</li>
							<li>101-200 chap</li>
							<li>trên 200 chap</li>
						</ul>
						<input type="hidden" name="chap" class="chap">
					</div>
					
					<div class="group col-md-4 col-sm-6">
						<label>Tên tác giả</label>
						<input class="form-control" type="text" name="author" placeholder="nhập tên tác giả" />
					</div>
					<div class="group col-md-4 col-sm-6">
						<label>Tên nhân vật</label>
						<input class="form-control" type="text" name="character" placeholder="nhập tên nhân vật" />
					</div>
					<div class="group col-md-4 col-sm-6">
						<label>Tên nhóm dịch</label>
						<input class="form-control" type="text" name="trans" placeholder="nhập tên nhóm dịch" />
					</div>

					<div class="group category col-md-12 col-sm-12">
						<label>Thể loại</label>
						<div class="item-group col-md-12 clearfix">
							<div class="item">action</div>
							<div class="item">adult</div>
							<div class="item">adventure</div>
							<div class="item">anime</div>
							<div class="item">bender</div>
							<div class="item">comic</div>
							<div class="item">cooking</div>
							<div class="item">cosplay</div>
							<div class="item">demons</div>
							<div class="item">doujinshi</div>
							<div class="item">ecchi</div>
							<div class="item">fanmade</div>
							<div class="item">fantasy</div>
							<div class="item">harem</div>
							<div class="item">history</div>
							<div class="item">magic</div>
							<div class="item">mystery</div>
							<div class="item">romance</div>
							<div class="item">school life</div>
							<div class="item">zombie</div>
						</div>
						<input type="hidden" name="category" class="category">
					</div>
					
					<div class="col-lg-12 col-sm-12 py-0">
						<div class="group col-lg-2 col-sm-3">
							<label>Sắp xếp theo</label>
							<button type="button" class="select sort form-control">
								<div class="text">ngày đăng</div> 
								<span class="caret"></span>
							</button>
							<ul class="dropdown-menu">
								<li>ngày đăng</li>
								<li>bảng chữ cái</li>
								<li>lượt xem</li>
							</ul>
							<input type="hidden" name="sort" class="sort">
						</div>

						<div class="group col-lg-2 col-sm-3">
							<label>Dạng sắp xếp</label>
							<button type="button" class="select order form-control">
								<div class="text">giảm dần</div> 
								<span class="caret"></span>
							</button>
							<ul class="dropdown-menu">
								<li>tăng dần</li>
								<li>giảm dần</li>
							</ul>
							<input type="hidden" name="order" class="order">
						</div>
					</div>

					<!-- <div class="group col-lg-8"></div> -->
					<div class="submit col-lg-12 col-sm-12 py-0">
						<div class="group col-lg-2 col-md-3 col-sm-6">
							<button type="submit" class="btn-search form-control">Tìm Truyện</button>
						</div>

						<div class="group col-lg-2 col-md-3 col-sm-6">
							<button type="button" class="btn-reset form-control">Nhập lại</button>
						</div>
					</div>
				</div>
			</form>
		</div>
		<div class="result clearfix">
			<p class="text">Kết quả tìm kiếm</p>
		</div>
		<div class="list">
			<!-- <h3>Kết quả tìm kiếm</h3>
			<hr> -->
			@if ($search == null)
				<h3 class="green">Chọn Từ Khóa Tìm Kiếm</h3>
			@elseif (count($books) == 0)
				<h3 class="green">Không Tìm Thấy Truyện</h3>
			@else
				@foreach ($books as $key => $book)
				<div class="book clearfix">
					<a href=""><img src="{{ asset('image/books/'.$book->image.'.jpg') }}" width="160px" height="160px"></a>
					<div class="info">
						<h4 class="name"><a href="detail-book.html">{{ $book->name }}</a></h4>
						<div class="star">
							<span class="fa fa-star"></span>
							<span class="fa fa-star"></span>
							<span class="fa fa-star"></span>
							<span class="fa fa-star-half-o"></span>
							<span class="fa fa-star-o"></span>
							<span>{{ $book->rate_point }}</span>
							<span class="rate">{{ $book->rate }} đánh giá</span>
						</div>
						<div class="group clearfix">
							<div class="item red" title="yêu thích">
								<span class="glyphicon glyphicon-heart"></span> 
								<span>{{ $book->like }}</span>
							</div>
							<div class="item blue" title="lượt xem">
								<span class="glyphicon glyphicon-eye-open"></span> 
								<span>{{ $book->view }}</span>
							</div>
							<div class="item orange" title="bình luận">
								<span class="glyphicon glyphicon-comment"></span> 
								<span>{{ $book->comment }}</span>
							</div>
							<div class="item green" title="theo dõi">
								<span class="glyphicon glyphicon-user"></span> 
								<span>{{ $book->follow }}</span>
							</div>
						</div>

						<div class="type"><strong>Thể loại:</strong> <a href="">Hài hước</a>, <a href="">phiêu lưu</a>, <a href="">khoa học viễn tưởng</a>, <a href="">harem</a></div>
						<div class="book-content"><strong>Nội dung:</strong> Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusantium velit et error asperiores sint ea, deleniti, laboriosam facere mollitia officiis tempora laudantium. Adipisci necessitatibus harum, dolor vel earum, alias natus.</div>
					</div>
				</div>
				@if ($key < count($books) - 1)
				<hr>
				@endif
				@endforeach
			@endif
		</div>
		<div class="paging">
			@include('vendor.default', ['paginator' => $books])
		</div>
	</div>
</div>
@endsection

@section('define-footer')
<script type="text/javascript" src="{{ asset('js/list.js') }}"></script>
@endsection
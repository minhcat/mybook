<!-- Left side column. contains the logo and sidebar -->
<aside class="main-sidebar">

	<!-- sidebar: style can be found in sidebar.less -->
	<section class="sidebar">

		<!-- Sidebar user panel (optional) -->
		<div class="user-panel">
			<div class="pull-left image">
				<img src="{{ asset('image/users/'.$user->image.'.jpg') }}" class="img-circle" alt="User Image">
			</div>
			<div class="pull-left info">
				<p>{{ $user->name }}</p>
				<!-- Status -->
				<a href="#"><i class="fa fa-circle text-success"></i> Online</a>
			</div>
		</div>

		<!-- Sidebar Menu -->
		<ul class="sidebar-menu" data-widget="tree">
			<li class="header">TÁC VỤ</li>
			<!-- Optionally, you can add icons to the links -->
			<li class="treeview links-comment">
				<a href="#"><i class="fa fa-book"></i> <span>Truyện đã đăng</span>
					<span class="pull-right-container">
						<i class="fa fa-angle-left pull-right"></i>
					</span>
				</a>
				<ul class="treeview-menu">
					<li><a href="#" class="box-link" data-target="#box-book-list">Danh sách truyện</a></li>
					<li><a href="#" class="box-link" data-target="#box-book-detail-{{ $first_book->id }}" data-with="#box-book-list-small">Chi tiết truyện</a></li>
					<li><a href="#" class="box-link" data-target="#box-book-new">Thêm truyện mới</a></li>
				</ul>
			</li>
			<li class="treeview">
				<a href="#"><i class="fa fa-eye"></i> <span>Truyện chờ duyệt</span>
					<span class="pull-right-container">
						<i class="fa fa-angle-left pull-right"></i>
					</span>
				</a>
				<ul class="treeview-menu">
					<li><a href="#" class="box-link" data-target="#box-book-list-notapproved">Danh sách truyện chờ duyệt</a></li>
					<li><a href="#" class="box-link" data-target="#box-chap-list-notapproved">Danh sách chap chờ duyệt</a></li>
				</ul>
			</li>
			<li class="treeview">
				<a href="#"><i class="fa fa-exclamation-circle"></i> <span>Truyện bị lỗi</span>
					<span class="pull-right-container">
						<i class="fa fa-angle-left pull-right"></i>
					</span>
				</a>
				<ul class="treeview-menu">
					<li><a href="#" class="box-link" data-target="#box-book-list-error">Danh sách truyện lỗi</a></li>
					<li><a href="#" class="box-link" data-target="#box-chap-list-error">Danh sách chap lỗi</a></li>
				</ul>
			</li>
			<li class="treeview">
				<a href="#"><i class="fa fa-qq"></i> <span>Thông tin khác</span>
					<span class="pull-right-container">
						<i class="fa fa-angle-left pull-right"></i>
					</span>
				</a>
				<ul class="treeview-menu">
					<li><a href="#" class="box-link" data-target="#box-author-detail-1" data-with="#box-author-list-small">Tác giả</a></li>
					<li><a href="#" class="box-link" data-target="#box-character-detail-1" data-with="#box-character-list-small">Nhân vật</a></li>
					<li><a href="#" class="box-link" data-target="#" data-small=""  data-with="#">Nhóm dịch</a></li>
				</ul>
			</li>
			<li class="treeview">
				<a href="#"><i class="fa fa-user"></i> <span>Người dùng tương tác</span>
					<span class="pull-right-container">
						<i class="fa fa-angle-left pull-right"></i>
					</span>
				</a>
				<ul class="treeview-menu">
					<li><a href="#" class="box-link" data-target="#box-book-comment" data-with="#box-book-list-small-2">Bình luận truyện</a></li>
					<li><a href="#" class="box-link" data-target="#box-book-chart-view" data-small="statistic"  data-with="#box-book-list-small-3">Thống kê tương tác</a></li>
				</ul>
			</li>
			<li class="header">HỆ THỐNG</li>
			<li class="treeview">
				<a href="#" class="box-link" data-target="#box-mail"><i class="fa fa-envelope"></i> <span>Viết mail</span></a>
			</li>
			<li class="treeview">
				<a href="#" class="box-link" data-target="#box-setting"><i class="fa fa-gear"></i> <span>Cài đặt</span></a>
			</li>
		</ul>
		<!-- /.sidebar-menu -->
	</section>
	<!-- /.sidebar -->
</aside>
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
				<a href="#"><i class="fa fa-comment"></i> <span>Bình Luận</span>
					<span class="pull-right-container">
						<i class="fa fa-angle-left pull-right"></i>
					</span>
				</a>
				<ul class="treeview-menu">
					<li><a href="#" class="box-link" data-target="#box-comment-new">Bình luận mới</a></li>
					<li><a href="#" class="box-link" data-target="#box-comment-report">Bình luận bị báo cáo</a></li>
					<li><a href="#" class="box-link" data-target="#box-comment-autocheck">Bình luận kiểm tra tự động</a></li>
					<li><a href="#" class="box-link" data-target="#box-comment-save">Bình luận đã lưu</a></li>
				</ul>
			</li>
			<li class="treeview">
				<a href="#"><i class="fa fa-user"></i> <span>Người dùng</span>
					<span class="pull-right-container">
						<i class="fa fa-angle-left pull-right"></i>
					</span>
				</a>
				<ul class="treeview-menu">
					<li><a href="#" class="box-link" data-target="#box-user-follow">Người dùng đang theo dõi</a></li>
					<li><a href="#" class="box-link" data-target="#box-user-punish">Người dùng bị phạt</a></li>
					<li><a href="#" class="box-link" data-target="#box-user-ban">Người dùng bị chặn</a></li>
				</ul>
			</li>
			<li class="treeview">
				<a href="#"><i class="fa fa-book"></i> <span>Truyện theo dõi</span>
					<span class="pull-right-container">
						<i class="fa fa-angle-left pull-right"></i>
					</span>
				</a>
				<ul class="treeview-menu">
					<li><a href="#" class="box-link" data-target="#box-book-follow">Danh sách truyện theo dõi</a></li>
					<li><a href="#" class="box-link" data-target="#box-book-comment" data-with="#box-book-follow-small">Bình luận truyện theo dõi</a></li>
				</ul>
			</li>
			<li class="treeview"><a href="#" class="box-link" data-target="#box-checkword"><i class="fa fa-pencil"></i> <span>Từ khóa kiểm tra tự động</span></a></li>
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
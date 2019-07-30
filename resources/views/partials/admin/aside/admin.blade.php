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
			<li class="treeview">
				<a href="#"><i class="fa fa-inbox"></i> <span>Dữ liệu</span>
					<span class="pull-right-container">
						<i class="fa fa-angle-left pull-right"></i>
					</span>
				</a>
				<ul class="treeview-menu">
					<li><a href="#" class="box-link" data-target="#box-book" data-small="database">Truyện</a></li>
					<li><a href="#" class="box-link" data-target="#box-view" data-small="contant">Tương tác</a></li>
					<li><a href="#" class="box-link" data-target="#box-user">Người dùng</a></li>
					<li><a href="#" class="box-link" data-target="#box-category">Thể loại</a></li>
					<li><a href="#" class="box-link" data-target="#box-trans">Nhóm dịch</a></li>
				</ul>
			</li>
			<li class="treeview">
				<a href="#"><i class="fa fa-unlock-alt"></i> <span>Danh sách duyệt</span>
					<span class="pull-right-container">
						<i class="fa fa-angle-left pull-right"></i>
					</span>
				</a>
				<ul class="treeview-menu">
					<li><a href="#" class="box-link" data-target="#box-approve-book">Duyệt truyện đăng</a></li>
					<li><a href="#" class="box-link" data-target="#box-approve-user">Duyệt phạt người dùng</a></li>
				</ul>
			</li>
			<li class="treeview">
				<a href="#"><i class="fa fa-bell"></i> <span>Thông báo</span>
					<span class="pull-right-container">
						<i class="fa fa-angle-left pull-right"></i>
					</span>
				</a>
				<ul class="treeview-menu">
					<li><a href="#" class="box-link" data-target="#box-book-error">Truyện lỗi</a></li>
					<li><a href="#" class="box-link" data-target="#box-report">Tố cáo người dùng</a></li>
				</ul>
			</li>
			<li class="treeview">
				<a href="#"><i class="fa fa-hand-o-right"></i> <span>Hoạt động</span>
					<span class="pull-right-container">
						<i class="fa fa-angle-left pull-right"></i>
					</span>
				</a>
				<ul class="treeview-menu">
					<li><a href="#" class="box-link" data-target="#timeline-all">Tất cả hoạt động</a></li>
					<li><a href="#" class="box-link" data-target="#timeline-staff" data-with="#box-staff-small">Hoạt động từng người</a></li>
				</ul>
			</li>
			<li class="header">HỆ THỐNG</li>
			<li class="treeview">
				<a href="#" class="box-link" data-target="#box-mail"><i class="fa fa-envelope"></i> <span>Viết mail</span></a>
			</li>
			<li class="treeview">
				<a href="#" class="box-link" data-target="#box-noti"><i class="fa fa-bell"></i> <span>Tạo thông báo</span></a>
			</li>
			<li class="treeview">
				<a href="#" class="box-link" data-target="#box-setting"><i class="fa fa-gear"></i> <span>Cài đặt</span></a>
			</li>
		</ul>
		<!-- /.sidebar-menu -->
	</section>
	<!-- /.sidebar -->
</aside>
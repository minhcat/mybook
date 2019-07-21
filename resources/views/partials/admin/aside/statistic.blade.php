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
				<a href="#" class="box-link book" data-target="#box-book-all" data-small="statistic"><i class="fa fa-book"></i> <span>Thống kê truyện</span>
				</a>
			</li>
			<li class="treeview">
				<a href="#" class="box-link category" data-target="#box-category-chart" data-small="statistic2" data-with="#box-category-list-small"><i class="fa fa-list"></i> <span>Thống kê thể loại</span>
				</a>
			</li>
			<li class="treeview">
				<a href="#" class="box-link user" data-target="#box-user-chart" data-small="statistic3" data-with="#box-user-list-small"><i class="fa fa-user"></i> <span>Thống kê người dùng</span>
				</a>
			</li>
			<li class="treeview">
				<a href="#" class="box-link trans" data-target="#box-trans-chart" data-small="statistic4" data-with="#box-trans-list-small"><i class="fa fa-pencil"></i> <span>Thống kê nhóm dịch</span>
				</a>
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
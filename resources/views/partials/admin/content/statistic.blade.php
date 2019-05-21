<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
	<!-- Content Header (Page header) -->
	<section class="content-header">
		<h1>
			Statistician
			<small>Thống kê, đưa ra thông tin cho phát triển trang web</small>
		</h1>
	</section>

	<!-- Main content -->
	<section class="content container-fluid">
		<div class="callout callout-info collapse">
			<h4>Thông Báo!</h4>

			<p>Add the sidebar-collapse class to the body tag to get this layout. You should combine this option with a fixed layout if you have a long sidebar. Doing that will prevent your page content from getting stretched vertically.</p>
		</div>
		<!-- Statistic book control box -->
		@include('partials.admin.content.small.statistic-book')
		<!-- Statistic category control box -->
		@include('partials.admin.content.small.statistic-category')
		<!-- Statistic user control box -->
		@include('partials.admin.content.small.statistic-user')
		<!-- Statistic translator control box -->
		@include('partials.admin.content.small.statistic-trans')

		<!-- Box -->
		<div class="row">
			<div class="col-xs-12">
				@include('partials.admin.content.statistic.statistic-book-all')

				<!-- Mail Box -->
				@include('partials.admin.content.system.mail')
				<!-- End Mail Box -->

				<!-- Setting Box -->
				@include('partials.admin.content.system.setting')
				<!-- End Setting Box -->
			</div>

			<div class="col-xs-9">
				<!-- statistic contant book -->
				@include('partials.admin.content.statistic.statistic-book-other')

				@include('partials.admin.content.statistic.statistic-book-time')

				@include('partials.admin.content.statistic.statistic-chap')

				<!-- statistic contant category -->
				@include('partials.admin.content.statistic.statistic-category-other')

				@include('partials.admin.content.statistic.statistic-category-time')

				<!-- statistic contant user -->
				@include('partials.admin.content.statistic.statistic-user-other')

				@include('partials.admin.content.statistic.statistic-user-time')

				<!-- statistic contant translator -->
				@include('partials.admin.content.statistic.statistic-trans-other')

				@include('partials.admin.content.statistic.statistic-trans-time')
			</div>

			<div class="col-xs-3">
				<!-- list book small statistaic -->
				@include('partials.admin.content.list.list-book-button-small')

				<!-- list book small statistaic not button-->
				@include('partials.admin.content.list.list-book-small')

				<!-- list category small statistaic -->
				@include('partials.admin.content.list.list-category-small')

				<!-- list user small statistaic -->
				@include('partials.admin.content.list.list-user-small')

				<!-- list translator small statistaic -->
				@include('partials.admin.content.list.list-trans-small')
			</div>
		</div>

		<!-- Modal -->
		@include('partials.admin.content.modal.modal-rate-all')

		@include('partials.admin.content.modal.modal-rate-item')

		@include('partials.admin.content.modal.modal-rate-time')
	</section>
	<!-- /.content -->
</div>
<!-- /.content-wrapper -->
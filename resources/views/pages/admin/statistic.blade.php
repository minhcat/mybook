@extends('master.admin')

@section('title')
Statistic
@endsection

@section('define-header')
	<link rel="stylesheet" href="{{ asset('css/admin/uploader.css') }}">
	<link rel="stylesheet" href="{{ asset('css/admin/statistic.css') }}">
@endsection

@section('sidebar')
	@include('partials.admin.aside.statistic')
@endsection

@section('content')
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
		@include('partials.admin.content.well')
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
				@include('partials.admin.content.list.book.list-book-button-small')

				<!-- list book small statistaic not button-->
				@include('partials.admin.content.list.book.list-book-small')

				<!-- list category small statistaic -->
				@include('partials.admin.content.list.category.list-category-small')

				<!-- list user small statistaic -->
				@include('partials.admin.content.list.user.list-user-small')

				<!-- list translator small statistaic -->
				@include('partials.admin.content.list.trans.list-trans-small')
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
@endsection

@section('define-footer')

	<script>
	$(function () {
		CKEDITOR.replace('mail-content', {
			toolbar: [
				[ 'Bold', 'Italic','Underline', '-', 'NumberedList', 'BulletedList', '-', 'Link', 'Unlink' , '-', 'Image', 'Table', '-', 'Scayt'],
				[ 'FontSize', 'TextColor', 'BGColor' ]
			]
		});
	});
	// -- VIEW -- //
	var view_day_all = [];
	@foreach ($view['day'] as $v)
		view_day_all.push({{$v}});
	@endforeach
	var view_week_all = [];
	@foreach ($view['week'] as $v)
		view_week_all.push({{$v}});
	@endforeach
	var view_month_all = [];
	@foreach ($view['month'] as $v)
		view_month_all.push({{$v}});
	@endforeach
	var view_season_all = [];
	@foreach ($view['season'] as $v)
		view_season_all.push({{$v}});
	@endforeach
	var view_year_all = [];
	@foreach ($view['year'] as $v)
		view_year_all.push({{$v}});
	@endforeach
	// -- COMMENT -- //
	var comment_day_all = [];
	@foreach ($comment['day'] as $v)
		comment_day_all.push({{$v}});
	@endforeach
	var comment_week_all = [];
	@foreach ($comment['week'] as $v)
		comment_week_all.push({{$v}});
	@endforeach
	var comment_month_all = [];
	@foreach ($comment['month'] as $v)
		comment_month_all.push({{$v}});
	@endforeach
	var comment_season_all = [];
	@foreach ($comment['season'] as $v)
		comment_season_all.push({{$v}});
	@endforeach
	var comment_year_all = [];
	@foreach ($comment['year'] as $v)
		comment_year_all.push({{$v}});
	@endforeach
	</script>
	<!-- ChartJS option -->
	<script src="{{ asset('js/admin/statistic.js') }}"></script>

@endsection
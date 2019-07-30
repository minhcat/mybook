@extends('master.admin')

@section('title')
Statistic
@endsection

@section('admin-job')
Statistic
@endsection

@section('define-header')
	<link rel="stylesheet" href="{{ asset('css/admin/dataTables.bootstrap.css') }}">
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
	<script src="{{ asset('js/admin/jquery.dataTables.js') }}"></script>
	<script src="{{ asset('js/admin/dataTables.bootstrap.js') }}"></script>
	<script>
	$(function () {
		$('#table-book-button-small').DataTable({
			"lengthMenu": [6],
			"lengthChange": false,
			"searching": false,
			"pagingType": "numbers",
			"info": false,
		});
		CKEDITOR.replace('mail-content', {
			toolbar: [
				[ 'Bold', 'Italic','Underline', '-', 'NumberedList', 'BulletedList', '-', 'Link', 'Unlink' , '-', 'Image', 'Table', '-', 'Scayt'],
				[ 'FontSize', 'TextColor', 'BGColor' ]
			]
		});
	});
	// ----------- //
	// --- ALL --- //
	// ----------- //

	// -- VIEW -- //
	var view_day_all = [];
	@foreach ($view_all['day'] as $v)
		view_day_all.push({{$v}});
	@endforeach
	var view_week_all = [];
	@foreach ($view_all['week'] as $v)
		view_week_all.push({{$v}});
	@endforeach
	var view_month_all = [];
	@foreach ($view_all['month'] as $v)
		view_month_all.push({{$v}});
	@endforeach
	var view_season_all = [];
	@foreach ($view_all['season'] as $v)
		view_season_all.push({{$v}});
	@endforeach
	var view_year_all = [];
	@foreach ($view_all['year'] as $v)
		view_year_all.push({{$v}});
	@endforeach
	// -- COMMENT -- //
	var comment_day_all = [];
	@foreach ($comment_all['day'] as $v)
		comment_day_all.push({{$v}});
	@endforeach
	var comment_week_all = [];
	@foreach ($comment_all['week'] as $v)
		comment_week_all.push({{$v}});
	@endforeach
	var comment_month_all = [];
	@foreach ($comment_all['month'] as $v)
		comment_month_all.push({{$v}});
	@endforeach
	var comment_season_all = [];
	@foreach ($comment_all['season'] as $v)
		comment_season_all.push({{$v}});
	@endforeach
	var comment_year_all = [];
	@foreach ($comment_all['year'] as $v)
		comment_year_all.push({{$v}});
	@endforeach
	// -- LIKE -- //
	var like_day_all = [];
	@foreach ($like_all['day'] as $v)
		like_day_all.push({{$v}});
	@endforeach
	var like_week_all = [];
	@foreach ($like_all['week'] as $v)
		like_week_all.push({{$v}});
	@endforeach
	var like_month_all = [];
	@foreach ($like_all['month'] as $v)
		like_month_all.push({{$v}});
	@endforeach
	var like_season_all = [];
	@foreach ($like_all['season'] as $v)
		like_season_all.push({{$v}});
	@endforeach
	var like_year_all = [];
	@foreach ($like_all['year'] as $v)
		like_year_all.push({{$v}});
	@endforeach
	// -- FOLLOW -- //
	var follow_day_all = [];
	@foreach ($follow_all['day'] as $v)
		follow_day_all.push({{$v}});
	@endforeach
	var follow_week_all = [];
	@foreach ($follow_all['week'] as $v)
		follow_week_all.push({{$v}});
	@endforeach
	var follow_month_all = [];
	@foreach ($follow_all['month'] as $v)
		follow_month_all.push({{$v}});
	@endforeach
	var follow_season_all = [];
	@foreach ($follow_all['season'] as $v)
		follow_season_all.push({{$v}});
	@endforeach
	var follow_year_all = [];
	@foreach ($follow_all['year'] as $v)
		follow_year_all.push({{$v}});
	@endforeach
	// -- RATE -- //
	// ** SUM  ** //
	// day
	var rate_day_all = [];
	// create array
	@foreach ($rate_all['sum']['day'] as $i => $av)
		@foreach ($av as $j => $v)
			rate_day_all[{{$j}}] = [];
		@endforeach
	@endforeach
	// add data
	@foreach ($rate_all['sum']['day'] as $i => $av)
		@foreach ($av as $j => $v)
			@if ($j != 0)
				rate_day_all[{{$j}}][{{$i}}] = {{$v}};
			@endif
		@endforeach
	@endforeach
	// week
	var rate_week_all = [];
	// create array
	@foreach ($rate_all['sum']['week'] as $i => $av)
		@foreach ($av as $j => $v)
			rate_week_all[{{$j}}] = [];
		@endforeach
	@endforeach
	// add data
	@foreach ($rate_all['sum']['week'] as $i => $av)
		@foreach ($av as $j => $v)
			@if ($j != 0)
				rate_week_all[{{$j}}][{{$i}}] = {{$v}};
			@endif
		@endforeach
	@endforeach
	// month
	var rate_month_all = [];
	// create array
	@foreach ($rate_all['sum']['month'] as $i => $av)
		@foreach ($av as $j => $v)
			rate_month_all[{{$j}}] = [];
		@endforeach
	@endforeach
	// add data
	@foreach ($rate_all['sum']['month'] as $i => $av)
		@foreach ($av as $j => $v)
			@if ($j != 0)
				rate_month_all[{{$j}}][{{$i-1}}] = {{$v}};
			@endif
		@endforeach
	@endforeach
	// season
	var rate_season_all = [];
	// create array
	@foreach ($rate_all['sum']['season'] as $i => $av)
		@foreach ($av as $j => $v)
			rate_season_all[{{$j}}] = [];
		@endforeach
	@endforeach
	// add data
	@foreach ($rate_all['sum']['season'] as $i => $av)
		@foreach ($av as $j => $v)
			@if ($j != 0)
				rate_season_all[{{$j}}][{{$i-1}}] = {{$v}};
			@endif
		@endforeach
	@endforeach
	// year
	var rate_year_all = [];
	// create array
	@foreach ($rate_all['sum']['year'] as $i => $av)
		@foreach ($av as $j => $v)
			rate_year_all[{{$j}}] = [];
		@endforeach
	@endforeach
	// add data
	@foreach ($rate_all['sum']['year'] as $i => $av)
		@foreach ($av as $j => $v)
			@if ($j != 0)
				rate_year_all[{{$j}}][{{$i}}] = {{$v}};
			@endif
		@endforeach
	@endforeach
	// ** PERCENT ** //
	// day
	var rate_day_per_all = [];
	// create array
	@foreach ($rate_all['percent']['day'] as $i => $av)
		@foreach ($av as $j => $v)
			rate_day_per_all[{{$j}}] = [];
		@endforeach
	@endforeach
	// add data
	@foreach ($rate_all['percent']['day'] as $i => $av)
		@foreach ($av as $j => $v)
			@if ($j != 0)
				rate_day_per_all[{{$j}}][{{$i}}] = {{$v}};
			@endif
		@endforeach
	@endforeach
	// week
	var rate_week_per_all = [];
	// create array
	@foreach ($rate_all['percent']['week'] as $i => $av)
		@foreach ($av as $j => $v)
			rate_week_per_all[{{$j}}] = [];
		@endforeach
	@endforeach
	// add data
	@foreach ($rate_all['percent']['week'] as $i => $av)
		@foreach ($av as $j => $v)
			@if ($j != 0)
				rate_week_per_all[{{$j}}][{{$i}}] = {{$v}};
			@endif
		@endforeach
	@endforeach
	// month
	var rate_month_per_all = [];
	// create array
	@foreach ($rate_all['percent']['month'] as $i => $av)
		@foreach ($av as $j => $v)
			rate_month_per_all[{{$j}}] = [];
		@endforeach
	@endforeach
	// add data
	@foreach ($rate_all['percent']['month'] as $i => $av)
		@foreach ($av as $j => $v)
			@if ($j != 0)
				rate_month_per_all[{{$j}}][{{$i-1}}] = {{$v}};
			@endif
		@endforeach
	@endforeach
	// season
	var rate_season_per_all = [];
	// create array
	@foreach ($rate_all['percent']['season'] as $i => $av)
		@foreach ($av as $j => $v)
			rate_season_per_all[{{$j}}] = [];
		@endforeach
	@endforeach
	// add data
	@foreach ($rate_all['percent']['season'] as $i => $av)
		@foreach ($av as $j => $v)
			@if ($j != 0)
				rate_season_per_all[{{$j}}][{{$i-1}}] = {{$v}};
			@endif
		@endforeach
	@endforeach
	// year
	var rate_year_per_all = [];
	// create array
	@foreach ($rate_all['percent']['year'] as $i => $av)
		@foreach ($av as $j => $v)
			rate_year_per_all[{{$j}}] = [];
		@endforeach
	@endforeach
	// add data
	@foreach ($rate_all['percent']['year'] as $i => $av)
		@foreach ($av as $j => $v)
			@if ($j != 0)
				rate_year_per_all[{{$j}}][{{$i}}] = {{$v}};
			@endif
		@endforeach
	@endforeach
	// ------------ //
	// --- BOOK --- //
	// ------------ //

	// --- VIEW --- //
	var view_day_book = [2,1,3,4,5];
	</script>
	<!-- ChartJS option -->
	<script src="{{ asset('js/admin/statistic.js') }}"></script>

@endsection